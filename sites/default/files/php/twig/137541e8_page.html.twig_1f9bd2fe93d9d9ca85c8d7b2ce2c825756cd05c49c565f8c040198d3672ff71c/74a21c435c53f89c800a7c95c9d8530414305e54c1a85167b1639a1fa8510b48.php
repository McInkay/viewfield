<?php

/* profiles/openchurch/themes/openchurch_theme/templates/page.html.twig */
class __TwigTemplate_0587f15114862ba7eee9f004c8ede86a99aa76eb9a1e26737b04a45d84b61dc1 extends Twig_Template
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
        $tags = array("if" => 18);
        $filters = array("t" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 13
        echo "<div id=\"page-wrapper\"><div id=\"page\">

  <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
    <div id=\"header-inner\">
      <div class=\"section clearfix\">
        ";
        // line 18
        if ((isset($context["logged_in"]) ? $context["logged_in"] : null)) {
            // line 19
            echo "          ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
            echo "
        ";
        } else {
            // line 21
            echo "          <div class=\"region region-secondary-menu\">
            <nav role=\"navigation\" aria-labelledby=\"block-openchurch-theme-account-menu-menu\" id=\"block-openchurch-theme-account-menu\" class=\"contextual-region block block-menu navigation menu--account\">
              <h2 class=\"visually-hidden\" id=\"block-openchurch-theme-account-menu-menu\">User account menu</h2>
              <div class=\"content\">
                <ul class=\"clearfix menu\">
                  <li class=\"menu-item\">
                    <a href=\"";
            // line 27
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
            echo "user\" data-drupal-link-system-path=\"user\">Log in</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        ";
        }
        // line 34
        echo "        ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
      </div> <!-- /.section-->
    </div> <!-- /#header-inner-->
  </header> <!-- /#header-->

  ";
        // line 40
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 41
            echo "    <div id=\"messages\"><div class=\"section clearfix\">
      ";
            // line 42
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
    </div></div> <!-- /.section, /#messages -->
  ";
        }
        // line 45
        echo "
  <div id=\"main-wrapper\" class=\"clearfix\"><div id=\"main\" class=\"clearfix\">
    ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "

    <main id=\"content\" class=\"column\" role=\"main\">
      <section class=\"section\">
        ";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            echo "<div id=\"highlighted\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "</div>";
        }
        // line 52
        echo "        <a id=\"main-content\" tabindex=\"-1\"></a>
        ";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
      </section>
    </main> <!-- /.section, /#content -->

    ";
        // line 57
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 58
            echo "      <div id=\"sidebar-first\" class=\"column sidebar\"><aside class=\"section\" role=\"complementary\">
        ";
            // line 59
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside></div><!-- /.section, /#sidebar-first -->
    ";
        }
        // line 62
        echo "
    ";
        // line 63
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 64
            echo "      <div id=\"sidebar-second\" class=\"column sidebar\"><aside class=\"section\" role=\"complementary\">
        ";
            // line 65
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside></div><!-- /.section, /#sidebar-second -->
    ";
        }
        // line 68
        echo "
  </div></div><!-- /#main, /#main-wrapper -->

  ";
        // line 71
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_middle", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_last", array()))) {
            // line 72
            echo "    <div id=\"triptych-wrapper\"><aside id=\"triptych\" class=\"clearfix\" role=\"complementary\">
      ";
            // line 73
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_first", array()), "html", null, true));
            echo "
      ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_middle", array()), "html", null, true));
            echo "
      ";
            // line 75
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "triptych_last", array()), "html", null, true));
            echo "
    </aside></div><!-- /#triptych, /#triptych-wrapper -->
  ";
        }
        // line 78
        echo "
  <div id=\"footer-wrapper\"><footer class=\"section\">

    ";
        // line 81
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn", array()))) {
            // line 82
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
        ";
            // line 83
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_firstcolumn", array()), "html", null, true));
            echo "
        ";
            // line 84
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_secondcolumn", array()), "html", null, true));
            echo "
        ";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_thirdcolumn", array()), "html", null, true));
            echo "
        ";
            // line 86
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourthcolumn", array()), "html", null, true));
            echo "
        ";
            // line 87
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifthcolumn", array()), "html", null, true));
            echo "
      </div><!-- /#footer-columns -->
    ";
        }
        // line 90
        echo "
    ";
        // line 91
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 92
            echo "      <div id=\"footer\" role=\"contentinfo\" class=\"clearfix\">
        ";
            // line 93
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
   ";
        }
        // line 96
        echo "
  </footer></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
";
        // line 100
        if ( !twig_test_empty((isset($context["openchurchshare_enabled"]) ? $context["openchurchshare_enabled"] : null))) {
            // line 101
            echo "  <script type=\"application/javascript\">
  <!--//
    if (stLight !== undefined) { stLight.options({\"publisher\":\"";
            // line 103
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["publisher_key"]) ? $context["publisher_key"] : null), "html", null, true));
            echo "\",\"version\":\"5x\"}); }
  //-->
  </script>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/openchurch/themes/openchurch_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 103,  233 => 101,  231 => 100,  225 => 96,  219 => 93,  216 => 92,  214 => 91,  211 => 90,  205 => 87,  201 => 86,  197 => 85,  193 => 84,  189 => 83,  186 => 82,  184 => 81,  179 => 78,  173 => 75,  169 => 74,  165 => 73,  162 => 72,  160 => 71,  155 => 68,  149 => 65,  146 => 64,  144 => 63,  141 => 62,  135 => 59,  132 => 58,  130 => 57,  123 => 53,  120 => 52,  114 => 51,  107 => 47,  103 => 45,  97 => 42,  94 => 41,  92 => 40,  84 => 35,  79 => 34,  69 => 27,  61 => 21,  55 => 19,  53 => 18,  47 => 15,  43 => 13,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * This overrides Bartik's page.html.twig file.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see bartik_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <div id="page-wrapper"><div id="page">*/
/* */
/*   <header id="header" role="banner" aria-label="{{ 'Site header'|t}}">*/
/*     <div id="header-inner">*/
/*       <div class="section clearfix">*/
/*         {% if logged_in %}*/
/*           {{ page.secondary_menu }}*/
/*         {% else %}*/
/*           <div class="region region-secondary-menu">*/
/*             <nav role="navigation" aria-labelledby="block-openchurch-theme-account-menu-menu" id="block-openchurch-theme-account-menu" class="contextual-region block block-menu navigation menu--account">*/
/*               <h2 class="visually-hidden" id="block-openchurch-theme-account-menu-menu">User account menu</h2>*/
/*               <div class="content">*/
/*                 <ul class="clearfix menu">*/
/*                   <li class="menu-item">*/
/*                     <a href="{{ base_path }}user" data-drupal-link-system-path="user">Log in</a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*             </nav>*/
/*           </div>*/
/*         {% endif %}*/
/*         {{ page.header }}*/
/*         {{ page.primary_menu }}*/
/*       </div> <!-- /.section-->*/
/*     </div> <!-- /#header-inner-->*/
/*   </header> <!-- /#header-->*/
/* */
/*   {% if messages %}*/
/*     <div id="messages"><div class="section clearfix">*/
/*       {{ messages }}*/
/*     </div></div> <!-- /.section, /#messages -->*/
/*   {% endif %}*/
/* */
/*   <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">*/
/*     {{ breadcrumb }}*/
/* */
/*     <main id="content" class="column" role="main">*/
/*       <section class="section">*/
/*         {% if page.highlighted %}<div id="highlighted">{{ page.highlighted }}</div>{% endif %}*/
/*         <a id="main-content" tabindex="-1"></a>*/
/*         {{ page.content }}*/
/*       </section>*/
/*     </main> <!-- /.section, /#content -->*/
/* */
/*     {% if page.sidebar_first %}*/
/*       <div id="sidebar-first" class="column sidebar"><aside class="section" role="complementary">*/
/*         {{ page.sidebar_first }}*/
/*       </aside></div><!-- /.section, /#sidebar-first -->*/
/*     {% endif %}*/
/* */
/*     {% if page.sidebar_second %}*/
/*       <div id="sidebar-second" class="column sidebar"><aside class="section" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside></div><!-- /.section, /#sidebar-second -->*/
/*     {% endif %}*/
/* */
/*   </div></div><!-- /#main, /#main-wrapper -->*/
/* */
/*   {% if page.triptych_first or page.triptych_middle or page.triptych_last %}*/
/*     <div id="triptych-wrapper"><aside id="triptych" class="clearfix" role="complementary">*/
/*       {{ page.triptych_first }}*/
/*       {{ page.triptych_middle }}*/
/*       {{ page.triptych_last }}*/
/*     </aside></div><!-- /#triptych, /#triptych-wrapper -->*/
/*   {% endif %}*/
/* */
/*   <div id="footer-wrapper"><footer class="section">*/
/* */
/*     {% if page.footer_firstcolumn or page.footer_secondcolumn or page.footer_thirdcolumn or page.footer_fourthcolumn %}*/
/*       <div id="footer-columns" class="clearfix">*/
/*         {{ page.footer_firstcolumn }}*/
/*         {{ page.footer_secondcolumn }}*/
/*         {{ page.footer_thirdcolumn }}*/
/*         {{ page.footer_fourthcolumn }}*/
/*         {{ page.footer_fifthcolumn }}*/
/*       </div><!-- /#footer-columns -->*/
/*     {% endif %}*/
/* */
/*     {% if page.footer %}*/
/*       <div id="footer" role="contentinfo" class="clearfix">*/
/*         {{ page.footer }}*/
/*       </div> <!-- /#footer -->*/
/*    {% endif %}*/
/* */
/*   </footer></div> <!-- /.section, /#footer-wrapper -->*/
/* */
/* </div></div> <!-- /#page, /#page-wrapper -->*/
/* {% if openchurchshare_enabled is not empty %}*/
/*   <script type="application/javascript">*/
/*   <!--//*/
/*     if (stLight !== undefined) { stLight.options({"publisher":"{{ publisher_key }}","version":"5x"}); }*/
/*   //-->*/
/*   </script>*/
/* {% endif %}*/
/* */
