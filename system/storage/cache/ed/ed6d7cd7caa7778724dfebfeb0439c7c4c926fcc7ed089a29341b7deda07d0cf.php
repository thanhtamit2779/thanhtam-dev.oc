<?php

/* default/template/common/custom_banner.twig */
class __TwigTemplate_7b0b2f6b513ba427892c03fcea8bc64cf50efb614110c8bd7ce4ca9ead367b38 extends Twig_Template
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
        echo "<div class=\"banner-main clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 5
            echo "                ";
            echo $context["module"];
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "        </div>    
    </div>    
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/custom_banner.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="banner-main clearfix">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             {% for module in modules %}*/
/*                 {{ module }}*/
/*             {% endfor %}*/
/*         </div>    */
/*     </div>    */
/* </div>*/
/* */
