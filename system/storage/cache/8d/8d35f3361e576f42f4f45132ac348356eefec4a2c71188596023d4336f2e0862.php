<?php

/* default/template/extension/module/banner.twig */
class __TwigTemplate_1ca9d2ba9e878b8b58edc645acc4282d4bbcfbf98062524b0d024f5db365dd70 extends Twig_Template
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
        // line 1
        if ((isset($context["banners"]) ? $context["banners"] : null)) {
            // line 2
            echo "      ";
            // line 3
            echo "      ";
            if (((isset($context["position"]) ? $context["position"] : null) == "custom_banner")) {
                // line 4
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
                foreach ($context['_seq'] as $context["key"] => $context["banner"]) {
                    // line 5
                    echo "          ";
                    if (($context["key"] == 2)) {
                        // line 6
                        echo "            ";
                        $context["break"] = true;
                        // line 7
                        echo "          ";
                    }
                    // line 8
                    echo "
          ";
                    // line 9
                    if (twig_test_empty($this->getAttribute($context["banner"], "image", array()))) {
                        // line 10
                        echo "            ";
                        $context["continue"] = true;
                        // line 11
                        echo "          ";
                    }
                    // line 12
                    echo "          <div class=\"col-md-4 col-sm-6 col-xs-4\">
            <div class=\"custom-banner box-";
                    // line 13
                    echo (isset($context["module"]) ? $context["module"] : null);
                    echo " vertical-center\">
                <img alt=\"";
                    // line 14
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\" class=\"img-responsive banner-image\" src=\"";
                    echo $this->getAttribute($context["banner"], "image", array());
                    echo "\" />
                <p class=\"custom-banner-content hidden-xs\">
                    <a class=\"custom-banner-title\" href=\"";
                    // line 16
                    echo $this->getAttribute($context["banner"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\">";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "</a>
                </p>
            </div>
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "  
      
      ";
                // line 23
                echo "      ";
            } elseif ((((isset($context["position"]) ? $context["position"] : null) == "content_top") || ((isset($context["position"]) ? $context["position"] : null) == "content_bottom"))) {
                // line 24
                echo "          
      ";
                // line 26
                echo "      ";
            } elseif ((((isset($context["position"]) ? $context["position"] : null) == "column_left") || ((isset($context["position"]) ? $context["position"] : null) == "column_right"))) {
                // line 27
                echo "            <div class=\"box-";
                echo (isset($context["module"]) ? $context["module"] : null);
                echo " vertical-center owl-carousel\" data-loop=\"true\" data-nav=\"false\" data-margin = \"0\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause = \"true\" data-items=\"1\" data-autoplay=\"true\">
                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                    // line 29
                    echo "                    ";
                    if (twig_test_empty($this->getAttribute($context["banner"], "image", array()))) {
                        // line 30
                        echo "                      ";
                        $context["continue"] = true;
                        // line 31
                        echo "                    ";
                    }
                    // line 32
                    echo "                    <a href=\"";
                    echo $this->getAttribute($context["banner"], "link", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\"><img alt=\"";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\" class=\"img-responsive\" src=\"";
                    echo $this->getAttribute($context["banner"], "image", array());
                    echo "\" /></a>  
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "            </div>
      ";
            }
            // line 36
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 36,  126 => 34,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  98 => 28,  93 => 27,  90 => 26,  87 => 24,  84 => 23,  80 => 20,  65 => 16,  58 => 14,  54 => 13,  51 => 12,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if banners %}*/
/*       {# VỊ TRÍ CUSTOM_BANNER #}*/
/*       {% if position == 'custom_banner' %}*/
/*         {% for key,banner in banners %}*/
/*           {% if key == 2  %}*/
/*             {% set break = true %}*/
/*           {% endif %}*/
/* */
/*           {% if banner.image is empty %}*/
/*             {% set continue = true %}*/
/*           {% endif %}*/
/*           <div class="col-md-4 col-sm-6 col-xs-4">*/
/*             <div class="custom-banner box-{{ module }} vertical-center">*/
/*                 <img alt="{{ banner.title }}" class="img-responsive banner-image" src="{{ banner.image }}" />*/
/*                 <p class="custom-banner-content hidden-xs">*/
/*                     <a class="custom-banner-title" href="{{ banner.link }}" title="{{ banner.title }}">{{ banner.title }}</a>*/
/*                 </p>*/
/*             </div>*/
/*           </div>*/
/*         {% endfor %}  */
/*       */
/*       {# VỊ TRÍ CONTENT_TOP - CONTENT_BOTTOM #}*/
/*       {% elseif position == 'content_top' or position == 'content_bottom' %}*/
/*           */
/*       {# VỊ TRÍ COLUMN_LEFT - COLUMN_RIGHT #}*/
/*       {% elseif position == 'column_left' or position == 'column_right' %}*/
/*             <div class="box-{{ module }} vertical-center owl-carousel" data-loop="true" data-nav="false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">*/
/*                 {% for banner in banners %}*/
/*                     {% if banner.image is empty %}*/
/*                       {% set continue = true %}*/
/*                     {% endif %}*/
/*                     <a href="{{ banner.link }}" title="{{ banner.title }}"><img alt="{{ banner.title }}" class="img-responsive" src="{{ banner.image }}" /></a>  */
/*                 {% endfor %}*/
/*             </div>*/
/*       {% endif %}*/
/* */
/* {% endif %}*/
/* */
