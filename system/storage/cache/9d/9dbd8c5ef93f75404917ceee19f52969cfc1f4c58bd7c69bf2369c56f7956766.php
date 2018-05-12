<?php

/* default/template/common/search.twig */
class __TwigTemplate_e04d366e5d4aac6e4eaf9eef92cd0460e1c7b008c4e5fab30af64199aeb22a58 extends Twig_Template
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
        echo "<div class=\"input-group input-group-md\" id=\"search\">
  <input name=\"search\" value=\"";
        // line 2
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control metro\" type=\"text\">
  <span class=\"input-group-btn\">
    <button type=\"button\" class=\"btn btn-default metro search\"><i class=\"fa fa-search\"></i></button>
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
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
/* <div class="input-group input-group-md" id="search">*/
/*   <input name="search" value="{{ search }}" placeholder="{{ text_search }}" class="form-control metro" type="text">*/
/*   <span class="input-group-btn">*/
/*     <button type="button" class="btn btn-default metro search"><i class="fa fa-search"></i></button>*/
/*   </span>*/
/* </div>*/
