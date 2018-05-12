<?php

/* default/template/ajax/category/product.twig */
class __TwigTemplate_f2bc429d8f5f72a954d34e4246b59c2d3746f8d239ecf85fb5ccb02447cc692e extends Twig_Template
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
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 3
                echo "        ";
                if (twig_test_empty($this->getAttribute($context["product"], "thumb", array()))) {
                    echo " 
            ";
                    // line 4
                    $context["continue"] = true;
                    // line 5
                    echo "        ";
                }
                // line 6
                echo "        <!-- ";
                echo $this->getAttribute($context["product"], "name", array());
                echo "-->
        <div class=\"template-product-default product\">
            <div class=\"product-top\">
                <a title=\"";
                // line 9
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"product-image\">
                    <img src=\"";
                // line 10
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                </a>
                <span class=\"product-add-cart\">
                    <a onclick=\"cart.add('";
                // line 13
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                </span>
                <ul class=\"list-unstyled product-list-icon\">
                    <li><a title=\"";
                // line 16
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"  href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                    <li><a title=\"";
                // line 17
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                    <li><a title=\"";
                // line 18
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                </ul>
            </div>
            <div class=\"product-bottom\">
                <p class=\"product-name\"><a title=\"";
                // line 22
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" >";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></p>
                <p class=\"product-price\">
                    ";
                // line 24
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 25
                    echo "                        <span class=\"product-price-new pull-right\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                    ";
                } else {
                    // line 26
                    echo " 
                        <span class=\"product-price-new pull-left\">";
                    // line 27
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> 
                        <span class=\"product-price-old pull-right\">";
                    // line 28
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> 
                    ";
                }
                // line 30
                echo "                </p>
                ";
                // line 31
                if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                    // line 32
                    echo "                    <span class=\"product-percent\">-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
                ";
                }
                // line 33
                echo "                                                              
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "default/template/ajax/category/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 33,  122 => 32,  120 => 31,  117 => 30,  112 => 28,  108 => 27,  105 => 26,  99 => 25,  97 => 24,  88 => 22,  79 => 18,  73 => 17,  67 => 16,  59 => 13,  49 => 10,  43 => 9,  36 => 6,  33 => 5,  31 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if products %}*/
/*     {% for product in products %}*/
/*         {% if product.thumb is empty %} */
/*             {% set continue = true %}*/
/*         {% endif %}*/
/*         <!-- {{ product.name }}-->*/
/*         <div class="template-product-default product">*/
/*             <div class="product-top">*/
/*                 <a title="{{ product.name }}" href="{{ product.href }}" class="product-image">*/
/*                     <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                 </a>*/
/*                 <span class="product-add-cart">*/
/*                     <a onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></a>*/
/*                 </span>*/
/*                 <ul class="list-unstyled product-list-icon">*/
/*                     <li><a title="{{ product.name }}"  href="{{ product.href }}"><i class="fa fa-link" aria-hidden="true"></i></a></li>*/
/*                     <li><a title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a></li>*/
/*                     <li><a title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></a></li> */
/*                 </ul>*/
/*             </div>*/
/*             <div class="product-bottom">*/
/*                 <p class="product-name"><a title="{{ product.name }}" href="{{ product.href }}" >{{ product.name }}</a></p>*/
/*                 <p class="product-price">*/
/*                     {% if not product.special %}*/
/*                         <span class="product-price-new pull-right">{{ product.price }}</span>*/
/*                     {% else %} */
/*                         <span class="product-price-new pull-left">{{ product.special }}</span> */
/*                         <span class="product-price-old pull-right">{{ product.price }}</span> */
/*                     {% endif %}*/
/*                 </p>*/
/*                 {% if product.percent > 0 %}*/
/*                     <span class="product-percent">-{{ product.percent }}%</span>*/
/*                 {% endif %}                                                              */
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endif %}*/
