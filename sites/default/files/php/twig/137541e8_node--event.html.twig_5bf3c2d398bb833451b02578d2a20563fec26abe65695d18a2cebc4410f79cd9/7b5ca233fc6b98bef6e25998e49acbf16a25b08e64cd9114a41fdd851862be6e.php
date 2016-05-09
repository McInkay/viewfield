<?php

/* profiles/openchurch/themes/openchurch_theme/templates/node--event.html.twig */
class __TwigTemplate_49699c50169199bd3786c3565ebdf07a0d97aed2386388139a874fd009ff3056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 65, "if" => 75);
        $filters = array("clean_class" => 67, "without" => 86);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 65
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 67
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => (($this->getAttribute(        // line 68
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 69
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 70
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 71
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 6 => "clearfix");
        // line 75
        if (((isset($context["view_mode"]) ? $context["view_mode"] : null) == "full")) {
            // line 76
            echo "  <article";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    <header>
      ";
            // line 78
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
      <h2";
            // line 79
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
        ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "
      </h2>
      ";
            // line 82
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "
    </header>
    <div";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      <div id=\"event-top\" class=\"clearfix\">
        ";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links", "body", "field_downloads", "field_url"), "html", null, true));
            echo "
      </div>
      <div id=\"event-bottom\" class=\"clearfix\">
        ";
            // line 89
            if ( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "#items", array(), "array"))) {
                // line 90
                echo "          <div id=\"event-details\"";
                if ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_downloads", array()), "#items", array(), "array")) && twig_test_empty((isset($context["link_url"]) ? $context["link_url"] : null)))) {
                    echo " class=\"full-width\"";
                }
                echo ">
            <div id=\"event-details-inner\">
              <h2 class=\"title\">Event Details</h2>
              ";
                // line 93
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "body", array()), "html", null, true));
                echo "
            </div>
          </div>
        ";
            }
            // line 97
            echo "        ";
            if (( !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_downloads", array()), "#items", array(), "array")) ||  !twig_test_empty((isset($context["link_url"]) ? $context["link_url"] : null)))) {
                // line 98
                echo "          <div id=\"event-links\">
            <h2 class=\"title\">Related Downloads</h2>
            ";
                // line 100
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_downloads", array()), "html", null, true));
                echo "
            ";
                // line 101
                if ((isset($context["link_url"]) ? $context["link_url"] : null)) {
                    // line 102
                    echo "              <div id=\"event-url\">
                <a href=\"";
                    // line 103
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_url"]) ? $context["link_url"] : null), "html", null, true));
                    echo "\" target=\"_blank\" class=\"button\">Register for this event online!</a>
              </div>
            ";
                }
                // line 106
                echo "          </div>
        ";
            }
            // line 108
            echo "      </div>
    </div>
    ";
            // line 110
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array())) {
                // line 111
                echo "      <div class=\"node__links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "links", array()), "html", null, true));
                echo "</div>
    ";
            }
            // line 113
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
            echo "
  </article>
";
        } else {
            // line 116
            echo "  <article";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
            echo ">
    ";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_dates", array()), "html", null, true));
            echo "
    <div";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      <h2";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
            echo ">
        <a href=\"";
            // line 120
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</a>
      </h2>
      ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "comment", "links", "field_dates", "field_url"), "html", null, true));
            echo "
      <div class=\"links\">
        <a href=\"";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true));
            echo "\" class=\"button\">more details &raquo;</a>
        ";
            // line 125
            if ((isset($context["link_url"]) ? $context["link_url"] : null)) {
                // line 126
                echo "          <a href=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link_url"]) ? $context["link_url"] : null), "html", null, true));
                echo "\" target=\"_blank\" class=\"button\">register online!</a>
        ";
            }
            // line 128
            echo "      </div>
    </div>
  </article>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/openchurch/themes/openchurch_theme/templates/node--event.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 128,  185 => 126,  183 => 125,  179 => 124,  174 => 122,  167 => 120,  163 => 119,  159 => 118,  155 => 117,  150 => 116,  143 => 113,  137 => 111,  135 => 110,  131 => 108,  127 => 106,  121 => 103,  118 => 102,  116 => 101,  112 => 100,  108 => 98,  105 => 97,  98 => 93,  89 => 90,  87 => 89,  81 => 86,  76 => 84,  71 => 82,  66 => 80,  62 => 79,  58 => 78,  52 => 76,  50 => 75,  48 => 71,  47 => 70,  46 => 69,  45 => 68,  44 => 67,  43 => 65,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: Full node entity.*/
/*  *   - id: The node ID.*/
/*  *   - bundle: The type of the node, for example, "page" or "article".*/
/*  *   - authorid: The user ID of the node author.*/
/*  *   - createdtime: Time the node was published formatted in Unix timestamp.*/
/*  *   - changedtime: Time the node was changed formatted in Unix timestamp.*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'node',*/
/*     'node--type-' ~ node.bundle|clean_class,*/
/*     node.isPromoted() ? 'node--promoted',*/
/*     node.isSticky() ? 'node--sticky',*/
/*     not node.isPublished() ? 'node--unpublished',*/
/*     view_mode ? 'node--view-mode-' ~ view_mode|clean_class,*/
/*     'clearfix',*/
/*   ]*/
/* %}*/
/* {% if view_mode == 'full' %}*/
/*   <article{{ attributes.addClass(classes) }}>*/
/*     <header>*/
/*       {{ title_prefix }}*/
/*       <h2{{ title_attributes.addClass('node__title') }}>*/
/*         {{ label }}*/
/*       </h2>*/
/*       {{ title_suffix }}*/
/*     </header>*/
/*     <div{{ content_attributes.addClass('node__content', 'clearfix') }}>*/
/*       <div id="event-top" class="clearfix">*/
/*         {{ content|without('comment', 'links', 'body', 'field_downloads', 'field_url') }}*/
/*       </div>*/
/*       <div id="event-bottom" class="clearfix">*/
/*         {% if content.body['#items'] is not empty %}*/
/*           <div id="event-details"{% if content.field_downloads['#items'] is empty and link_url is empty %} class="full-width"{% endif %}>*/
/*             <div id="event-details-inner">*/
/*               <h2 class="title">Event Details</h2>*/
/*               {{ content.body }}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if content.field_downloads['#items'] is not empty or link_url is not empty %}*/
/*           <div id="event-links">*/
/*             <h2 class="title">Related Downloads</h2>*/
/*             {{ content.field_downloads }}*/
/*             {% if link_url %}*/
/*               <div id="event-url">*/
/*                 <a href="{{ link_url }}" target="_blank" class="button">Register for this event online!</a>*/
/*               </div>*/
/*             {%  endif %}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     {% if content.links %}*/
/*       <div class="node__links">{{ content.links }}</div>*/
/*     {% endif %}*/
/*     {{ content.comment }}*/
/*   </article>*/
/* {% else %}*/
/*   <article{{ attributes.addClass(classes) }}>*/
/*     {{ content.field_dates }}*/
/*     <div{{ content_attributes.addClass('node__content', 'clearfix') }}>*/
/*       <h2{{ title_attributes.addClass('node__title') }}>*/
/*         <a href="{{ url }}" rel="bookmark">{{ label }}</a>*/
/*       </h2>*/
/*       {{ content|without('comment', 'links', 'field_dates', 'field_url') }}*/
/*       <div class="links">*/
/*         <a href="{{ url }}" class="button">more details &raquo;</a>*/
/*         {% if link_url %}*/
/*           <a href="{{ link_url }}" target="_blank" class="button">register online!</a>*/
/*         {%  endif %}*/
/*       </div>*/
/*     </div>*/
/*   </article>*/
/* {% endif %}*/
/* */
