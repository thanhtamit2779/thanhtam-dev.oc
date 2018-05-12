<?php

/* default/template/extension/module/group_product_option.twig */
class __TwigTemplate_c1fcd0a442543345a44538fda0af09224fae40f319affd59e5558d75e264ede9 extends Twig_Template
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
        if ((isset($context["group_products"]) ? $context["group_products"] : null)) {
            // line 2
            echo "<div class=\"product-tabs\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-md-12 col-xs-12\">
                <div class=\"product-tab\">
                    <ul class=\"nav-product-tabs list-inline\" role=\"tablist\">
                        ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["group_products"]) ? $context["group_products"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["group_product"]) {
                echo " 
                            ";
                // line 9
                if (twig_test_empty($this->getAttribute($context["group_product"], "products", array()))) {
                    echo " 
                                ";
                    // line 10
                    $context["continue"] = true;
                    // line 11
                    echo "                            ";
                }
                // line 12
                echo "                            ";
                if (($context["key"] > 0)) {
                    // line 13
                    echo "                                <li class=\"hidden-xs\"><a href=\"#";
                    echo $context["key"];
                    echo "\" data-toggle=\"tab\" aria-expanded=\"true\">";
                    echo $this->getAttribute($context["group_product"], "heading_title", array());
                    echo "</a></li>    
                            ";
                } else {
                    // line 15
                    echo "                                <li><a href=\"#";
                    echo $context["key"];
                    echo "\" data-toggle=\"tab\" aria-expanded=\"true\">";
                    echo $this->getAttribute($context["group_product"], "heading_title", array());
                    echo "</a></li>
                            ";
                }
                // line 17
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['group_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "                  
                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["group_products"]) ? $context["group_products"] : null));
            foreach ($context['_seq'] as $context["id"] => $context["group_product"]) {
                // line 21
                echo "                            <div role=\"tabpanel\" class=\"tab-pane fade\" id=\"";
                echo $context["id"];
                echo "\">
                                <div class=\"display-product-tab-list owl-carousel\" data-margin=\"20\" data-responsive='{\"0\":{\"items\":1},\"360\":{\"items\":2},\"640\":{\"items\":3},\"768\":{\"items\":4}}'>
                                    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group_product"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 24
                    echo "                                        <!-- ";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "-->
                                        <div class=\"template-product-default product\">
                                            <div class=\"product-top\">
                                                <a title=\"";
                    // line 27
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" class=\"product-image\">
                                                    <img src=\"";
                    // line 28
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />
                                                </a>
                                                <span class=\"product-add-cart\">
                                                    <a onclick=\"cart.add('";
                    // line 31
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span></a>
                                                </span>
                                                <ul class=\"list-unstyled product-list-icon\">
                                                    <li><a title=\"";
                    // line 34
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"  href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                                    <li><a title=\"";
                    // line 35
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\" onclick=\"wishlist.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                                                    <li><a title=\"";
                    // line 36
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\" onclick=\"compare.add('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                                                </ul>
                                            </div>
                                            <div class=\"product-bottom\">
                                                <p class=\"product-name\"><a title=\"";
                    // line 40
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" >";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</a></p>
                                                <p class=\"product-price\">
                                                    ";
                    // line 42
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 43
                        echo "                                                        <span class=\"product-price-new pull-right\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span>
                                                    ";
                    } else {
                        // line 44
                        echo " 
                                                        <span class=\"product-price-new pull-left\">";
                        // line 45
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> 
                                                        <span class=\"product-price-old pull-right\">";
                        // line 46
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> 
                                                    ";
                    }
                    // line 48
                    echo "                                                </p>
                                                ";
                    // line 49
                    if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                        // line 50
                        echo "                                                    <span class=\"product-percent\">-";
                        echo $this->getAttribute($context["product"], "percent", array());
                        echo "%</span>
                                                ";
                    }
                    // line 51
                    echo "                                                              
                                            </div>
                                        </div>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "    
                                </div>    
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['group_product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </div>
                </div>
            </div>
        </div>    
    </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('.nav-product-tabs li:first-child').addClass('active') ;
        \$('.nav-product-tabs li').not('li:first-child').addClass('hidden-xs');
        \$('.tab-content div.tab-pane:first-child').addClass('active in') ;
        \$('.tab-content div.tab-pane').not('.tab-content div.tab-pane:first-child').addClass('hidden-xs');
    });
</script>
";
        }
        // line 73
        echo "  ";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/group_product_option.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 73,  197 => 58,  188 => 54,  179 => 51,  173 => 50,  171 => 49,  168 => 48,  163 => 46,  159 => 45,  156 => 44,  150 => 43,  148 => 42,  139 => 40,  130 => 36,  124 => 35,  118 => 34,  110 => 31,  100 => 28,  94 => 27,  87 => 24,  83 => 23,  77 => 21,  73 => 20,  63 => 17,  55 => 15,  47 => 13,  44 => 12,  41 => 11,  39 => 10,  35 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% if group_products %}*/
/* <div class="product-tabs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-12 col-md-12 col-xs-12">*/
/*                 <div class="product-tab">*/
/*                     <ul class="nav-product-tabs list-inline" role="tablist">*/
/*                         {% for key, group_product in group_products %} */
/*                             {% if group_product.products is empty %} */
/*                                 {% set continue = true %}*/
/*                             {% endif %}*/
/*                             {% if key > 0 %}*/
/*                                 <li class="hidden-xs"><a href="#{{ key }}" data-toggle="tab" aria-expanded="true">{{ group_product.heading_title }}</a></li>    */
/*                             {% else %}*/
/*                                 <li><a href="#{{ key }}" data-toggle="tab" aria-expanded="true">{{ group_product.heading_title }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}                  */
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         {% for id, group_product in group_products %}*/
/*                             <div role="tabpanel" class="tab-pane fade" id="{{ id }}">*/
/*                                 <div class="display-product-tab-list owl-carousel" data-margin="20" data-responsive='{"0":{"items":1},"360":{"items":2},"640":{"items":3},"768":{"items":4}}'>*/
/*                                     {% for product in group_product.products %}*/
/*                                         <!-- {{ product.name }}-->*/
/*                                         <div class="template-product-default product">*/
/*                                             <div class="product-top">*/
/*                                                 <a title="{{ product.name }}" href="{{ product.href }}" class="product-image">*/
/*                                                     <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                                                 </a>*/
/*                                                 <span class="product-add-cart">*/
/*                                                     <a onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span></a>*/
/*                                                 </span>*/
/*                                                 <ul class="list-unstyled product-list-icon">*/
/*                                                     <li><a title="{{ product.name }}"  href="{{ product.href }}"><i class="fa fa-link" aria-hidden="true"></i></a></li>*/
/*                                                     <li><a title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a></li>*/
/*                                                     <li><a title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></a></li> */
/*                                                 </ul>*/
/*                                             </div>*/
/*                                             <div class="product-bottom">*/
/*                                                 <p class="product-name"><a title="{{ product.name }}" href="{{ product.href }}" >{{ product.name }}</a></p>*/
/*                                                 <p class="product-price">*/
/*                                                     {% if not product.special %}*/
/*                                                         <span class="product-price-new pull-right">{{ product.price }}</span>*/
/*                                                     {% else %} */
/*                                                         <span class="product-price-new pull-left">{{ product.special }}</span> */
/*                                                         <span class="product-price-old pull-right">{{ product.price }}</span> */
/*                                                     {% endif %}*/
/*                                                 </p>*/
/*                                                 {% if product.percent > 0 %}*/
/*                                                     <span class="product-percent">-{{ product.percent }}%</span>*/
/*                                                 {% endif %}                                                              */
/*                                             </div>*/
/*                                         </div>*/
/*                                     {% endfor %}    */
/*                                 </div>    */
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>    */
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     $(document).ready(function() {*/
/*         $('.nav-product-tabs li:first-child').addClass('active') ;*/
/*         $('.nav-product-tabs li').not('li:first-child').addClass('hidden-xs');*/
/*         $('.tab-content div.tab-pane:first-child').addClass('active in') ;*/
/*         $('.tab-content div.tab-pane').not('.tab-content div.tab-pane:first-child').addClass('hidden-xs');*/
/*     });*/
/* </script>*/
/* {% endif %}*/
/*   */
