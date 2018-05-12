<?php

/* default/template/extension/module/latest.twig */
class __TwigTemplate_09cb7a71b279fb8046a8050af69609fa1fc9c6c10e3e687fa5963d2627c31841 extends Twig_Template
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
        if ((((isset($context["position"]) ? $context["position"] : null) == "column_left") || ((isset($context["position"]) ? $context["position"] : null) == "column_right"))) {
            // line 2
            echo "    ";
            if ((isset($context["products"]) ? $context["products"] : null)) {
                // line 3
                echo "    <div class=\"box-block\">
      <h4 class=\"box-heading\">";
                // line 4
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h4>
      <ul class=\"box-content\">
          ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 7
                    echo "              <li class=\"product-vertical\">
                  <div class=\"product-image pull-left\">
                      <a href=\"";
                    // line 9
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" /></a>
                  </div>
                  <div class=\"product-info\">
                      <p class=\"product-name\"><a href=\"";
                    // line 12
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></p>
                      ";
                    // line 13
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 14
                        echo "                          <p class=\"product-price\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</p>
                      ";
                    } else {
                        // line 16
                        echo "                          <p class=\"product-price\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</p>
                          <p class=\"product-old\">";
                        // line 17
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</p>
                      ";
                    }
                    // line 18
                    echo "  
                  </div>
              </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "      </ul>
    </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 22,  76 => 18,  71 => 17,  66 => 16,  60 => 14,  58 => 13,  52 => 12,  40 => 9,  36 => 7,  32 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if position == 'column_left' or position == 'column_right' %}*/
/*     {% if products %}*/
/*     <div class="box-block">*/
/*       <h4 class="box-heading">{{ heading_title }}</h4>*/
/*       <ul class="box-content">*/
/*           {% for product in products %}*/
/*               <li class="product-vertical">*/
/*                   <div class="product-image pull-left">*/
/*                       <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a>*/
/*                   </div>*/
/*                   <div class="product-info">*/
/*                       <p class="product-name"><a href="{{ product.href }}">{{ product.name }}</a></p>*/
/*                       {% if not product.special %}*/
/*                           <p class="product-price">{{ product.price }}</p>*/
/*                       {% else %}*/
/*                           <p class="product-price">{{ product.special }}</p>*/
/*                           <p class="product-old">{{ product.price }}</p>*/
/*                       {% endif %}  */
/*                   </div>*/
/*               </li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     {% endif %}*/
/* {% endif %}*/
