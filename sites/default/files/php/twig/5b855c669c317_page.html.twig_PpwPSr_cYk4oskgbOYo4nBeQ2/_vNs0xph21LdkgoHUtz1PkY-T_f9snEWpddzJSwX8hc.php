<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_db90ce103844c8e065d8b8dde6617ebdf016806284bcfe9d3f7988b7ce52fb83 extends Twig_Template
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
        $tags = array("if" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 92
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()))) {
            echo "  
    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 109
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 121
        if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
            // line 122
            echo "  <div class=\"topwidget\">
    <!-- start: Container -->
    <div class=\"container\">
      
      <div class=\"row\">
        <!-- Top widget first region -->
        <div class = ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 129
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                // line 130
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 132
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget second region -->
        <div class = ";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 136
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                // line 137
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 139
            echo "        </div>
        <!-- End top widget third region -->
        <!-- Top widget third region -->
        <div class = ";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 143
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                // line 144
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 146
            echo "        </div>
        <!-- End top widget third region -->
      </div>
    </div>
  </div>
";
        }
        // line 152
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 156
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 157
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 166
        echo "<!-- End Page Title -- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 175
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 176
            echo "        <div class=\"row\">
          ";
            // line 177
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 180
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 189
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 190
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 191
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 192
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 196
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 199
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 200
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 201
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 202
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 206
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 209
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 210
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 211
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 212
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 216
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 222
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 223
            echo "      <div class=\"row\">
        ";
            // line 224
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 227
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->






<!-- Start bottom -->
";
        // line 238
        if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array()))) {
            // line 239
            echo "  <div class=\"bottom-widgets\">
    <!-- Start Container -->
    <div class=\"container\">
      
      <div class=\"row\">

        <!-- Start Bottom First Region -->
        <div class = ";
            // line 246
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 247
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                // line 248
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 250
            echo "        </div>
        <!-- End Bottom First Region -->

        <!-- Start Bottom Second Region -->
        <div class = ";
            // line 254
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 255
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                // line 256
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 258
            echo "        </div>
        <!-- End Bottom Second Region -->

        <!-- Start Bottom third Region -->
        <div class = ";
            // line 262
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 263
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                // line 264
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 266
            echo "        </div>
        <!-- End Bottom Third Region -->

        <div class = ";
            // line 269
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 270
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                // line 271
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                echo "
          ";
            }
            // line 273
            echo "        </div>

      </div>
    </div>
  </div>
";
        }
        // line 279
        echo "<!--End Bottom -->




<!-- start: Footer -->
";
        // line 285
        if ((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array()))) {
            // line 286
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 292
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 293
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 294
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 296
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 300
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 301
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 302
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 304
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 308
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 309
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 310
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 312
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 318
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 321
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 322
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 326
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 328
            if (($context["show_social_icon"] ?? null)) {
                // line 329
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 331
                if (($context["facebook_url"] ?? null)) {
                    // line 332
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 334
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 335
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 337
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 338
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 340
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 341
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 343
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 344
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 346
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 347
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 349
                echo "          </div>
        </div>
        ";
            }
            // line 352
            echo "      </div>
    </div>
  </div>
";
        }
        // line 356
        echo "<!-- End Footer Menu -->

";
        // line 358
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 359
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 365
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 366
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
                echo "</p>        
        ";
            }
            // line 368
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 372
            if (($context["show_credit_link"] ?? null)) {
                // line 373
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.com\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 377
            echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>
";
        }
        // line 383
        echo "

<!-- Google map -->
";
        // line 386
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 387
            echo "  <div class=\"google_map\">
    ";
            // line 388
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 391
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 391,  650 => 388,  647 => 387,  645 => 386,  640 => 383,  632 => 377,  626 => 373,  624 => 372,  618 => 368,  613 => 366,  609 => 365,  601 => 359,  599 => 358,  595 => 356,  589 => 352,  584 => 349,  578 => 347,  575 => 346,  569 => 344,  566 => 343,  560 => 341,  557 => 340,  551 => 338,  548 => 337,  542 => 335,  539 => 334,  533 => 332,  531 => 331,  527 => 329,  525 => 328,  520 => 326,  514 => 322,  512 => 321,  507 => 318,  499 => 312,  493 => 310,  491 => 309,  487 => 308,  481 => 304,  475 => 302,  473 => 301,  469 => 300,  463 => 296,  457 => 294,  455 => 293,  451 => 292,  443 => 286,  441 => 285,  433 => 279,  425 => 273,  419 => 271,  417 => 270,  413 => 269,  408 => 266,  402 => 264,  400 => 263,  396 => 262,  390 => 258,  384 => 256,  382 => 255,  378 => 254,  372 => 250,  366 => 248,  364 => 247,  360 => 246,  351 => 239,  349 => 238,  336 => 227,  330 => 224,  327 => 223,  325 => 222,  317 => 216,  310 => 212,  306 => 211,  303 => 210,  301 => 209,  296 => 206,  289 => 202,  285 => 201,  282 => 200,  280 => 199,  275 => 196,  268 => 192,  264 => 191,  261 => 190,  259 => 189,  251 => 184,  245 => 180,  239 => 177,  236 => 176,  234 => 175,  223 => 166,  215 => 161,  209 => 157,  207 => 156,  201 => 152,  193 => 146,  187 => 144,  185 => 143,  181 => 142,  176 => 139,  170 => 137,  168 => 136,  164 => 135,  159 => 132,  153 => 130,  151 => 129,  147 => 128,  139 => 122,  137 => 121,  131 => 117,  123 => 112,  118 => 109,  116 => 108,  107 => 101,  99 => 96,  92 => 92,  81 => 83,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig", "/homepages/23/d27172932/htdocs/vbc2/themes/drupal8_zymphonies_theme/templates/layout/page.html.twig");
    }
}
