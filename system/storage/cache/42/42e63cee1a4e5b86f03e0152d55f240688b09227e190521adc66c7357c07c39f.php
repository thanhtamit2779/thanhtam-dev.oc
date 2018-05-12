<?php

/* default/template/common/home.twig */
class __TwigTemplate_04e68e8299685b8d46951580d0c4474418861d3f60a4d01a67d8aacb2ab8a85b extends Twig_Template
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
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "

";
        // line 5
        if ((isset($context["slider"]) ? $context["slider"] : null)) {
            // line 6
            echo "  ";
            echo (isset($context["slider"]) ? $context["slider"] : null);
            echo "
";
        }
        // line 8
        echo "
";
        // line 10
        if ((isset($context["banner"]) ? $context["banner"] : null)) {
            // line 11
            echo "  ";
            echo (isset($context["banner"]) ? $context["banner"] : null);
            echo "
";
        }
        // line 13
        echo "
<main class=\"main clearfix\">      
    ";
        // line 15
        if (( !(isset($context["column_left"]) ? $context["column_left"] : null) &&  !(isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "      
      ";
            // line 18
            echo "        ";
            // line 19
            echo "        ";
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo " 

        ";
            // line 22
            echo "        ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo "  

    ";
        } elseif ((        // line 24
(isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "        <div class=\"container\">
          <div class=\"row\">
              ";
            // line 29
            echo "              ";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
              
              <div id=\"content\" class=\"";
            // line 31
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
                ";
            // line 33
            echo "                ";
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo " 

                ";
            // line 36
            echo "                ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo " 
              </div>
              
              ";
            // line 40
            echo "              ";
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "
          </div>
    ";
        } elseif ((        // line 42
(isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 43
            echo "        ";
            $context["class"] = "col-sm-9";
            // line 44
            echo "        <div class=\"container\">
          <div class=\"row\">
              ";
            // line 47
            echo "              ";
            echo (isset($context["column_left"]) ? $context["column_left"] : null);
            echo "
              
              <div id=\"content\" class=\"";
            // line 49
            echo (isset($context["class"]) ? $context["class"] : null);
            echo "\">
                ";
            // line 51
            echo "                ";
            echo (isset($context["content_top"]) ? $context["content_top"] : null);
            echo " 

                ";
            // line 54
            echo "                ";
            echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
            echo " 
              </div>
              
              ";
            // line 58
            echo "              ";
            echo (isset($context["column_right"]) ? $context["column_right"] : null);
            echo "
          </div>
    ";
        }
        // line 60
        echo "     
</main>
";
        // line 63
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 63,  143 => 60,  136 => 58,  129 => 54,  123 => 51,  119 => 49,  113 => 47,  109 => 44,  106 => 43,  104 => 42,  98 => 40,  91 => 36,  85 => 33,  81 => 31,  75 => 29,  71 => 26,  68 => 25,  66 => 24,  60 => 22,  54 => 19,  52 => 18,  49 => 16,  47 => 15,  43 => 13,  37 => 11,  35 => 10,  32 => 8,  26 => 6,  24 => 5,  19 => 2,);
    }
}
/* {# HEADER #}*/
/* {{ header }}*/
/* */
/* {# SLIDER #}*/
/* {% if slider %}*/
/*   {{ slider }}*/
/* {% endif %}*/
/* */
/* {# BANNER #}*/
/* {% if banner %}*/
/*   {{ banner }}*/
/* {% endif %}*/
/* */
/* <main class="main clearfix">      */
/*     {% if not column_left and not column_right %}*/
/*       */
/*       {# CONTENT : CONTENT TOP + CONTENT BOTTOM #}*/
/*         {# CONTENT TOP #}*/
/*         {{ content_top }} */
/* */
/*         {# CONTENT BOTTOM #}*/
/*         {{ content_bottom }}  */
/* */
/*     {% elseif column_left and column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         <div class="container">*/
/*           <div class="row">*/
/*               {# COLUMN LEFT #}*/
/*               {{ column_left }}*/
/*               */
/*               <div id="content" class="{{ class }}">*/
/*                 {# CONTENT TOP #}*/
/*                 {{ content_top }} */
/* */
/*                 {# CONTENT BOTTOM #}*/
/*                 {{ content_bottom }} */
/*               </div>*/
/*               */
/*               {# COLUMN RIGHT #}*/
/*               {{ column_right }}*/
/*           </div>*/
/*     {% elseif column_left or column_right %}*/
/*         {% set class = 'col-sm-9' %}*/
/*         <div class="container">*/
/*           <div class="row">*/
/*               {# COLUMN LEFT #}*/
/*               {{ column_left }}*/
/*               */
/*               <div id="content" class="{{ class }}">*/
/*                 {# CONTENT TOP #}*/
/*                 {{ content_top }} */
/* */
/*                 {# CONTENT BOTTOM #}*/
/*                 {{ content_bottom }} */
/*               </div>*/
/*               */
/*               {# COLUMN RIGHT #}*/
/*               {{ column_right }}*/
/*           </div>*/
/*     {% endif %}     */
/* </main>*/
/* {# FOOTER #}*/
/* {{ footer }}*/
