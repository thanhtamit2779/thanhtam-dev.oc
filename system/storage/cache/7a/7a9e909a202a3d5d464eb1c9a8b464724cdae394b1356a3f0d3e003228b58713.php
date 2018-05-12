<?php

/* default/template/extension/module/carousel.twig */
class __TwigTemplate_7634eb9c167e62cd89036f062ea343be456c4243b2506624c313d96f507878c5 extends Twig_Template
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
        if ( !twig_test_empty((isset($context["banners"]) ? $context["banners"] : null))) {
            // line 2
            echo "  <div class=\"block-carousel hidden-xs\">
    <div class=\"container\">
      <div id=\"carousel";
            // line 4
            echo (isset($context["module"]) ? $context["module"] : null);
            echo "\" class=\"owl-carousel\" data-dots=\"false\" data-loop=\"true\" data-nav=\"true\" data-margin=\"30\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause=\"true\" data-responsive='{\"0\":{\"items\":1},\"600\":{\"items\":3},\"1000\":{\"items\":7}}'>
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["banners"]) ? $context["banners"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
                // line 6
                echo "          <div class=\"text-center\">";
                if ($this->getAttribute($context["banner"], "link", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["banner"], "link", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["banner"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\" class=\"img-responsive\" /></a>";
                } else {
                    echo "<img src=\"";
                    echo $this->getAttribute($context["banner"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["banner"], "title", array());
                    echo "\" class=\"img-responsive\" />";
                }
                echo "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  33 => 6,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if banners is not empty %}*/
/*   <div class="block-carousel hidden-xs">*/
/*     <div class="container">*/
/*       <div id="carousel{{ module }}" class="owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":7}}'>*/
/*         {% for banner in banners %}*/
/*           <div class="text-center">{% if banner.link %}<a href="{{ banner.link }}"><img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" /></a>{% else %}<img src="{{ banner.image }}" alt="{{ banner.title }}" class="img-responsive" />{% endif %}</div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
