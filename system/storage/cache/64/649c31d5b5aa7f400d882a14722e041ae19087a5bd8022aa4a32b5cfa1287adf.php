<?php

/* default/template/common/custom_slider.twig */
class __TwigTemplate_9dc3526c3f9cb5c9285924ac36982332abd42082621a058fd27d1bc51dbcd596 extends Twig_Template
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
        echo "<div class=\"slider clearfix\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 3
            echo "        ";
            echo $context["module"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/custom_slider.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="slider clearfix">*/
/*     {% for module in modules %}*/
/*         {{ module }}*/
/*     {% endfor %}    */
/* </div>*/
/* */
