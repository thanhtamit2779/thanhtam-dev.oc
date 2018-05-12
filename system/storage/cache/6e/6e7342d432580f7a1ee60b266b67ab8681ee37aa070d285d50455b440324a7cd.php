<?php

/* default/template/common/product/test.twig */
class __TwigTemplate_5c2011754c1e85cc2f5636ff7cdebd3c01629b01fd259e35a8472c8ae21958cd extends Twig_Template
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
        echo "<div class=\"item text-center col-sm-3\">                      
    <a href=\"";
        // line 2
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "href", array());
        echo "\"><img src=\"";
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
        echo "\" class=\"img-responsive\" /></a>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/product/test.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <div class="item text-center col-sm-3">                      */
/*     <a href="{{ product.href }}"><img src="{{ product.thumb }}" class="img-responsive" /></a>*/
/* </div>*/
