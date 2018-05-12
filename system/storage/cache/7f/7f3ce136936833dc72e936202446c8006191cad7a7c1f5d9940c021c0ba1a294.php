<?php

/* default/template/extension/module/special.twig */
class __TwigTemplate_d26c23987ce736a35adc7e4f09f9ccddfee29e6aff771529ee9f057577f37858 extends Twig_Template
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
                echo "      <div class=\"box-block\">
        <h4 class=\"box-heading\">";
                // line 4
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "</h4>
        <div class=\"box-content owl-carousel\" data-loop=\"true\" data-nav=\"true\" data-margin=\"0\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause = \"true\" data-items=\"1\" data-autoplay=\"true\">
            ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 7
                    echo "              <!-- ";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "-->
              <div class=\"template-product-default product\">
                <div class=\"product-top\">
                    <a title=\"";
                    // line 10
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" class=\"product-image\">
                        <img src=\"";
                    // line 11
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />
                    </a>
                    <span class=\"product-add-cart\">
                        <a onclick=\"cart.add('";
                    // line 14
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></a>
                    </span>
                    <ul class=\"list-unstyled product-list-icon\">
                        <li><a title=\"";
                    // line 17
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"  href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                        <li><a title=\"";
                    // line 18
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                        <li><a title=\"";
                    // line 19
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                    </ul>
                </div>
                <div class=\"product-bottom\">
                    <p class=\"product-name\"><a title=\"";
                    // line 23
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" >";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></p>
                    <p class=\"product-price\">
                        ";
                    // line 25
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 26
                        echo "                            <span class=\"product-price-new pull-right\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                        ";
                    } else {
                        // line 27
                        echo " 
                            <span class=\"product-price-new pull-left\">";
                        // line 28
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
                            <span class=\"product-price-old pull-right\">";
                        // line 29
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> 
                        ";
                    }
                    // line 31
                    echo "                    </p>
                    ";
                    // line 32
                    if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                        // line 33
                        echo "                        <span class=\"product-percent\">-";
                        echo $this->getAttribute($context["product"], "percent", array());
                        echo "%</span>
                    ";
                    }
                    // line 34
                    echo "                                                              
                </div>
            </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "        </div>     
      </div>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  128 => 34,  122 => 33,  120 => 32,  117 => 31,  112 => 29,  108 => 28,  105 => 27,  99 => 26,  97 => 25,  88 => 23,  79 => 19,  73 => 18,  67 => 17,  59 => 14,  49 => 11,  43 => 10,  36 => 7,  32 => 6,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if position == 'column_left' or position == 'column_right' %}*/
/*     {% if products %}*/
/*       <div class="box-block">*/
/*         <h4 class="box-heading">{{ heading_title }}</h4>*/
/*         <div class="box-content owl-carousel" data-loop="true" data-nav="true" data-margin="0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">*/
/*             {% for product in products %}*/
/*               <!-- {{ product.name }}-->*/
/*               <div class="template-product-default product">*/
/*                 <div class="product-top">*/
/*                     <a title="{{ product.name }}" href="{{ product.href }}" class="product-image">*/
/*                         <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                     </a>*/
/*                     <span class="product-add-cart">*/
/*                         <a onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></a>*/
/*                     </span>*/
/*                     <ul class="list-unstyled product-list-icon">*/
/*                         <li><a title="{{ product.name }}"  href="{{ product.href }}"><i class="fa fa-link" aria-hidden="true"></i></a></li>*/
/*                         <li><a title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a></li>*/
/*                         <li><a title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></a></li> */
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="product-bottom">*/
/*                     <p class="product-name"><a title="{{ product.name }}" href="{{ product.href }}" >{{ product.name }}</a></p>*/
/*                     <p class="product-price">*/
/*                         {% if not product.special %}*/
/*                             <span class="product-price-new pull-right">{{ product.price }}</span>*/
/*                         {% else %} */
/*                             <span class="product-price-new pull-left">{{ product.special }}</span> */
/*                             <span class="product-price-old pull-right">{{ product.price }}</span> */
/*                         {% endif %}*/
/*                     </p>*/
/*                     {% if product.percent > 0 %}*/
/*                         <span class="product-percent">-{{ product.percent }}%</span>*/
/*                     {% endif %}                                                              */
/*                 </div>*/
/*             </div>*/
/*             {% endfor %}*/
/*         </div>     */
/*       </div>*/
/*     {% endif %}*/
/* {% endif %}*/
