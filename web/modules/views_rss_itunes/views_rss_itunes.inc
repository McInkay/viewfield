<?php

/**
 * @file
 * Preprocess functions for Views RSS: iTunes Elements module.
 */

use Drupal\taxonomy\Entity\Term;

/**
 * Preprocess function for channel <itunes:category> element.
 */
function views_rss_itunes_preprocess_channel_category(&$variables) {
  // No value = no preprocessing.
  if (empty($variables['elements'][0]['value'])) {
    return;
  }

  $elements = [];
  foreach ($variables['elements'][0]['value'] as $tid) {
    // Load term object.
    $term = Term::load($tid);
    // Try to load parent term objects.
    $parents = \Drupal::entityManager()
      ->getStorage('taxonomy_term')
      ->loadParents($tid);
    // Term has a parent.
    // TODO revisit the core functionality in Drupal 8.4 for views_rss
    // https://www.drupal.org/node/2694535
    // https://www.drupal.org/node/2887146
    if (count($parents)) {
      $parent = array_shift($parents);
      if (!isset($elements[$parent->id()])) {
        $elements[] = [
          'key' => 'itunes:category',
          'attributes' => [
            'text' => $parent->getName(),
          ],
          'value' => [
            '#theme' => 'xml_element',
            '#tag' => 'itunes:category',
            '#attributes' => [
              'text' => $term->getName(),
            ],
          ],
        ];
      }
    }
    // Term has no parent.
    else {
      $elements[$term->id()] = [
        'key' => 'itunes:category',
        'attributes' => [
          'text' => $term->getName(),
        ],
      ];
    }
  }
  $variables['elements'] = $elements;
}

/**
 * Preprocess function for channel <itunes:image> element.
 */
function views_rss_itunes_preprocess_channel_image(&$variables) {
  // No value = no preprocessing.
  if (empty($variables['elements'][0]['value'])) {
    return;
  }

  $variables['elements'][0]['attributes'] = [
    'href' => file_create_url($variables['elements'][0]['value']),
  ];
  unset($variables['elements'][0]['value']);
}

/**
 * Preprocess function for channel <itunes:owner> element.
 */
function views_rss_itunes_preprocess_channel_owner(&$variables) {
  // No value = no preprocessing.
  if (empty($variables['elements'][0]['value'])) {
    return;
  }

  $values = explode(',', $variables['elements'][0]['value']);
  $variables['elements'][0]['value'] = [];

  // Add email subelement.
  $email = array_shift($values);
  if (!empty($email)) {
    $variables['elements'][0]['value'][] = [
      '#theme' => 'xml_element',
      '#tag' => 'itunes:email',
      '#value' => trim($email),
    ];
  }

  // Add name subelement.
  $name = array_shift($values);
  if (!empty($name)) {
    $variables['elements'][0]['value'][] = [
      '#theme' => 'xml_element',
      '#tag' => 'itunes:name',
      '#value' => trim($name),
    ];
  }
}

/**
 * Returns array of iTunes categories for channel <itunes:category>
 * element configuration in view options form.
 */
function views_rss_itunes_get_category_options() {
  $tree = \Drupal::entityManager()
    ->getStorage('taxonomy_term')
    ->loadTree('views_rss_itunes_category');
  $options = [];
  if (!empty($tree)) {
    foreach ($tree as $term) {
      $options[$term->tid] = str_pad(t($term->name), strlen(t($term->name)) + $term->depth * 2, '- ', STR_PAD_LEFT);
    }
  }
  return $options;
}

/**
 * Preprocess function for item <itunes:duration> element.
 */
function views_rss_itunes_preprocess_item_duration(&$variables) {
  // No raw values = no preprocessing.
  if (empty($variables['raw']['items'])) {
    return;
  }

  $getID3 = new getID3();

  $variables['elements'] = [];
  foreach ($variables['raw']['items'] as $item) {
    if (!empty($item['rendered']['#file'])) {
      $path = drupal_realpath($item['rendered']['#file']->getFileUri());
      $id3_info = $getID3->analyze($path);
    }
    elseif (!empty($item['rendered']['#markup'])) {
      // There is a large performance hit to try to use remote files. Use local.
      _convert_to_local_file($item['rendered']['#markup']);

      $localfile = $item['rendered']['#markup'];
      // Initialize getID3 engine.
      $getID3 = new getID3();

      $id3_info = $getID3->analyze($localfile);
    }
  }

  if (!empty($id3_info['playtime_string'])) {
    $variables['elements'][] = [
      'key' => 'itunes:duration',
      'value' => $id3_info['playtime_string'],
    ];
  }
}

/**
 * Preprocess function for item <itunes:image> element.
 */
function views_rss_itunes_preprocess_item_image(&$variables) {
  // No raw values = no preprocessing.
  if (empty($variables['raw']['items'])) {
    return;
  }

  $variables['elements'] = [];
  foreach ($variables['raw']['items'] as $item) {
    // File fields.
    if (!empty($item['rendered']['#file'])) {
      $file = $item['rendered']['#file'];
    }
    // Image fields.
    if (!empty($item['rendered']['#item']->entity)) {
      $file = $item['rendered']['#item']->entity;
    }

    // File entity found.
    if (!empty($file)) {
      // Image style is defined, need to link to resized version.
      if ($image_style_name = $item['rendered']['#image_style']) {
        $image_style = entity_load('image_style', $image_style_name);
        $href = $image_style->buildUrl($file->getFileUri());
      }
      // Normal image size.
      else {
        $href = $file->url();
      }
    }
    // No file entity found, but something still was assigned to be displayed
    // as enclosure, so we just put its value in the url attribute.
    elseif (!empty($item['rendered']['#markup'])) {
      $href = $item['rendered']['#markup'];
    }

    $element = [
      'key' => 'itunes:image',
      'attributes' => ['href' => $href],
    ];

    $variables['elements'][] = $element;
  }
}

/**
 * Convert CDN internal name to external name.
 */
function _convert_to_local_file(&$filename) {
  // If the filename begins with // strip the first section (domain).
  $url_array = parse_url($filename);

  $filename = $url_array['path'];


  $filename = rawurldecode($filename);

  // Strip /sites/default/files if it exists at the beginning of the filename.
  // @TODO work with the web/ root instead
  if (preg_match('/^\/sites\/default\/files\//', $filename)) {
    $filename = preg_replace('/^\/sites\/default\/files\//', '/', $filename);
  }

  // Add the base path.
  $filename = \Drupal::service('file_system')
      ->realpath(file_default_scheme() . "://") . $filename;

}
