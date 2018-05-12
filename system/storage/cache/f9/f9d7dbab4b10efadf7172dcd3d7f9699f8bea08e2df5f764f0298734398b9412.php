<?php

/* default/template/common/menu.twig */
class __TwigTemplate_058d2cc18d945cd680baa92968666b7ca4c9526578f4f9c1a4dc65fc24ce0fb5 extends Twig_Template
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
        if ((isset($context["categories"]) ? $context["categories"] : null)) {
            // line 2
            echo "    <ul class=\"horizontal-center\">
      ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 4
                echo "        ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 5
                    echo "          <li>
            <a title=\"";
                    // line 6
                    echo $this->getAttribute((isset($context["children"]) ? $context["children"] : null), "name", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "
</a>
              <ul>
                ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 10
                        echo "                    <li><a href=\"";
                        echo $this->getAttribute($context["children"], "href", array());
                        echo "\">";
                        echo $this->getAttribute($context["children"], "name", array());
                        echo "</a></li>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 12
                    echo "              </ul>
          </li>
        ";
                } else {
                    // line 15
                    echo "          <li><a href=\"";
                    echo $this->getAttribute($context["category"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["category"], "name", array());
                    echo "</a></li>
        ";
                }
                // line 17
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
";
        }
        // line 19
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  78 => 18,  72 => 17,  64 => 15,  59 => 12,  48 => 10,  44 => 9,  34 => 6,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if categories %}*/
/*     <ul class="horizontal-center">*/
/*       {% for category in categories %}*/
/*         {% if category.children %}*/
/*           <li>*/
/*             <a title="{{ children.name }}" href="{{ category.href }}">{{ category.name }}*/
/* </a>*/
/*               <ul>*/
/*                 {% for children in category.children %}*/
/*                     <li><a href="{{ children.href }}">{{ children.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*           </li>*/
/*         {% else %}*/
/*           <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </ul>*/
/* {% endif %} */
