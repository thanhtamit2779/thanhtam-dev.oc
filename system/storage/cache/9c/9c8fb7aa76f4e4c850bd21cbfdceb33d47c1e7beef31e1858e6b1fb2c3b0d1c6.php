<?php

/* default/template/extension/module/products_from_cat.twig */
class __TwigTemplate_c67f2c02de9110c3f2a764527c976bc6a148f4901733cf9dfab641cdb0338728 extends Twig_Template
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
        $context["cate_name"] = $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "parent", array()), "text", array());
        echo " 
";
        // line 2
        $context["cate_image"] = $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "parent", array()), "thumb", array());
        // line 3
        $context["cate_link"] = $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "parent", array()), "href", array());
        // line 4
        $context["cate_childrens"] = $this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "children", array());
        // line 5
        echo "<section class=\"product-as-category clearfix clr\" id=\"product-as-category-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\">
    <div class=\"container\">
        <div class=\"box template-product-category-default\">
            <div class=\"box-heading col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding\">
                <h3 class=\"box-title pull-left\">";
        // line 9
        echo (isset($context["cate_name"]) ? $context["cate_name"] : null);
        echo "</h3>
                <ul class=\"list-inline pull-left list-sub-cats hidden-xs\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cate_childrens"]) ? $context["cate_childrens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate_child"]) {
            echo " 
                            ";
            // line 12
            if (twig_test_empty($context["cate_child"])) {
                echo " 
                                ";
                // line 13
                $context["continue"] = true;
                // line 14
                echo "                            ";
            }
            // line 15
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["cate_child"], "href", array());
            echo "\" aria-expanded=\"true\" data-category-id=\"";
            echo $this->getAttribute($context["cate_child"], "cat_id", array());
            echo "\">";
            echo $this->getAttribute($context["cate_child"], "name", array());
            echo "</a></li>    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate_child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    <li><a href=\"";
        echo (isset($context["cate_link"]) ? $context["cate_link"] : null);
        echo "\">";
        echo (isset($context["text_view_all"]) ? $context["text_view_all"] : null);
        echo " <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></li>
                </ul>
                <!--<span class=\"pull-right\"><i class=\"fa fa-angle-up\"></i></span> -->
            </div>
            <div class=\"box-body col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding\">
                ";
        // line 22
        if ((isset($context["cate_image"]) ? $context["cate_image"] : null)) {
            // line 23
            echo "                    <div class=\"box-image no-padding pull-left hidden-xs\">
                        <a title=\"";
            // line 24
            echo (isset($context["cate_name"]) ? $context["cate_name"] : null);
            echo "\" href=\"";
            echo (isset($context["cate_link"]) ? $context["cate_link"] : null);
            echo "\" >
                            <img src=\"";
            // line 25
            echo (isset($context["cate_image"]) ? $context["cate_image"] : null);
            echo "\" alt=\"";
            echo (isset($context["cate_name"]) ? $context["cate_name"] : null);
            echo "\" title=\"";
            echo (isset($context["cate_name"]) ? $context["cate_name"] : null);
            echo "\" />
                        </a>
                    </div>
                ";
        }
        // line 29
        echo "                <div class=\"box-content no-padding pull-right v ertical-center\">
                    <div class=\"box-content-slider\">
                        <div class=\"owl-carousel owl-carousel-";
        // line 31
        echo (isset($context["module"]) ? $context["module"] : null);
        echo "\" data-responsive='{\"0\":{\"items\":1},\"360\":{\"items\":2},\"640\":{\"items\":3},\"768\":{\"items\":3}}' data-margin=\"20\">
                            ";
        // line 32
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 33
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "                                    ";
                if (twig_test_empty($this->getAttribute($context["product"], "thumb", array()))) {
                    echo " 
                                        ";
                    // line 35
                    $context["continue"] = true;
                    // line 36
                    echo "                                    ";
                }
                // line 37
                echo "                                    <div class=\"template-product-default product\">
                                        <div class=\"product-top\">
                                            <a title=\"";
                // line 39
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"product-image\">
                                                <img src=\"";
                // line 40
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                                            </a>
                                            <span class=\"product-add-cart\">
                                                <a onclick=\"cart.add('";
                // line 43
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                                            </span>
                                            <ul class=\"list-unstyled product-list-icon\">
                                                <li><a title=\"";
                // line 46
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"  href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                                                <li><a title=\"";
                // line 47
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                                                <li><a title=\"";
                // line 48
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                                            </ul>
                                        </div>
                                        <div class=\"product-bottom\">
                                            <p class=\"product-name\"><a title=\"";
                // line 52
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" >";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></p>
                                            <p class=\"product-price\">
                                                ";
                // line 54
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 55
                    echo "                                                    <span class=\"product-price-new pull-right\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                                                ";
                } else {
                    // line 56
                    echo " 
                                                    <span class=\"product-price-new pull-left\">";
                    // line 57
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> 
                                                    <span class=\"product-price-old pull-right\">";
                    // line 58
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> 
                                                ";
                }
                // line 60
                echo "                                            </p>
                                            ";
                // line 61
                if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                    // line 62
                    echo "                                                <span class=\"product-percent\">-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
                                            ";
                }
                // line 63
                echo "                                                              
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                            ";
        }
        echo "  
                        </div>
                    </div>       
                </div>
            </div> 
        </div>
    </div>       
</section>
<script type=\"text/javascript\">
    var url_product_category = '";
        // line 76
        echo (isset($context["ajax_load_product"]) ? $context["ajax_load_product"] : null);
        echo "' + 'index.php?route=ajax/category/getProductCategory/' ;
    \$(document).ready(function() {

        \$('#product-as-category-";
        // line 79
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .list-sub-cats li').not('#product-as-category-";
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .list-sub-cats li:last-child').off('click').on('click', 'a', function(event) {
            
            // ACTIVE MENU
            event.preventDefault() ;
            \$(this).parent().siblings().removeClass('active');
            \$(this).parent().addClass('active') ;

            \$('#product-as-category-";
        // line 86
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-content-slider').empty() ;

            // GET PRODUCT CATEGORY
            var category_id = \$(this).data('category-id') ;

            \$.ajax({
                url         : url_product_category,
                type        : 'post',
                dataType    : 'json',
                data        : { category_id : category_id } 
            }).done(function(response) {
                //\$('#product-as-category-";
        // line 97
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-content-slider').empty() ;
                
                //if(response.status == 0) return false;
                var responsive = '{\"0\":{\"items\":1},\"360\":{\"items\":2},\"640\":{\"items\":3},\"768\":{\"items\":3}}';
                \$('#product-as-category-";
        // line 101
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-content-slider').wrapInner('<div class=\"owl-carousel\" data-dots=\"false\" data-nav=\"true\" data-margin=\"20\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause=\"true\" data-responsive=' + responsive + '>');
                \$('#product-as-category-";
        // line 102
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-content-slider .owl-carousel').append(response.data);
                 
                // OWL CAROUSEL
                \$('#product-as-category-";
        // line 105
        echo (isset($context["module"]) ? $context["module"] : null);
        echo " .box-content-slider .owl-carousel').each(function(index, el) {
                    var config          = \$(this).data();
                    config.navText      = ['<i class=\"fa fa-angle-left\"></i>','<i class=\"fa fa-angle-right\"></i>'];
                    config.smartSpeed   = \"300\";
                    config.nav          = true;
                    config.dots         = false;
                    config.autoplay     = true;
                    config.autoplayTimeout = 3000;
                    config.autoplayHoverPause = true;
                    config.loop         = true;
                    if(\$(this).hasClass('owl-style2')){
                    config.animateOut=\"fadeOut\";
                    config.animateIn=\"fadeIn\";    
                    }
                    \$(this).owlCarousel(config);
                });
            }) ;

        }) ;
    }) ;
</script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/products_from_cat.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 105,  282 => 102,  278 => 101,  271 => 97,  257 => 86,  245 => 79,  239 => 76,  226 => 67,  217 => 63,  211 => 62,  209 => 61,  206 => 60,  201 => 58,  197 => 57,  194 => 56,  188 => 55,  186 => 54,  177 => 52,  168 => 48,  162 => 47,  156 => 46,  148 => 43,  138 => 40,  132 => 39,  128 => 37,  125 => 36,  123 => 35,  118 => 34,  113 => 33,  111 => 32,  107 => 31,  103 => 29,  92 => 25,  86 => 24,  83 => 23,  81 => 22,  70 => 17,  57 => 15,  54 => 14,  52 => 13,  48 => 12,  42 => 11,  37 => 9,  29 => 5,  27 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% set cate_name   = categories.parent.text %} */
/* {% set cate_image  = categories.parent.thumb %}*/
/* {% set cate_link   = categories.parent.href %}*/
/* {% set cate_childrens   = categories.children %}*/
/* <section class="product-as-category clearfix clr" id="product-as-category-{{ module }}">*/
/*     <div class="container">*/
/*         <div class="box template-product-category-default">*/
/*             <div class="box-heading col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">*/
/*                 <h3 class="box-title pull-left">{{ cate_name }}</h3>*/
/*                 <ul class="list-inline pull-left list-sub-cats hidden-xs">*/
/*                     {% for cate_child in cate_childrens %} */
/*                             {% if cate_child is empty %} */
/*                                 {% set continue = true %}*/
/*                             {% endif %}*/
/*                             <li><a href="{{ cate_child.href }}" aria-expanded="true" data-category-id="{{ cate_child.cat_id }}">{{ cate_child.name }}</a></li>    */
/*                     {% endfor %}*/
/*                     <li><a href="{{ cate_link }}">{{ text_view_all }} <i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>*/
/*                 </ul>*/
/*                 <!--<span class="pull-right"><i class="fa fa-angle-up"></i></span> -->*/
/*             </div>*/
/*             <div class="box-body col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">*/
/*                 {% if cate_image %}*/
/*                     <div class="box-image no-padding pull-left hidden-xs">*/
/*                         <a title="{{ cate_name }}" href="{{ cate_link }}" >*/
/*                             <img src="{{ cate_image }}" alt="{{ cate_name }}" title="{{ cate_name }}" />*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 <div class="box-content no-padding pull-right v ertical-center">*/
/*                     <div class="box-content-slider">*/
/*                         <div class="owl-carousel owl-carousel-{{ module }}" data-responsive='{"0":{"items":1},"360":{"items":2},"640":{"items":3},"768":{"items":3}}' data-margin="20">*/
/*                             {% if products %}*/
/*                                 {% for product in products %}*/
/*                                     {% if product.thumb is empty %} */
/*                                         {% set continue = true %}*/
/*                                     {% endif %}*/
/*                                     <div class="template-product-default product">*/
/*                                         <div class="product-top">*/
/*                                             <a title="{{ product.name }}" href="{{ product.href }}" class="product-image">*/
/*                                                 <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                                             </a>*/
/*                                             <span class="product-add-cart">*/
/*                                                 <a onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="">{{ button_cart }}</span></a>*/
/*                                             </span>*/
/*                                             <ul class="list-unstyled product-list-icon">*/
/*                                                 <li><a title="{{ product.name }}"  href="{{ product.href }}"><i class="fa fa-link" aria-hidden="true"></i></a></li>*/
/*                                                 <li><a title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a></li>*/
/*                                                 <li><a title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></a></li> */
/*                                             </ul>*/
/*                                         </div>*/
/*                                         <div class="product-bottom">*/
/*                                             <p class="product-name"><a title="{{ product.name }}" href="{{ product.href }}" >{{ product.name }}</a></p>*/
/*                                             <p class="product-price">*/
/*                                                 {% if not product.special %}*/
/*                                                     <span class="product-price-new pull-right">{{ product.price }}</span>*/
/*                                                 {% else %} */
/*                                                     <span class="product-price-new pull-left">{{ product.special }}</span> */
/*                                                     <span class="product-price-old pull-right">{{ product.price }}</span> */
/*                                                 {% endif %}*/
/*                                             </p>*/
/*                                             {% if product.percent > 0 %}*/
/*                                                 <span class="product-percent">-{{ product.percent }}%</span>*/
/*                                             {% endif %}                                                              */
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             {% endif %}  */
/*                         </div>*/
/*                     </div>       */
/*                 </div>*/
/*             </div> */
/*         </div>*/
/*     </div>       */
/* </section>*/
/* <script type="text/javascript">*/
/*     var url_product_category = '{{ ajax_load_product }}' + 'index.php?route=ajax/category/getProductCategory/' ;*/
/*     $(document).ready(function() {*/
/* */
/*         $('#product-as-category-{{ module }} .list-sub-cats li').not('#product-as-category-{{ module }} .list-sub-cats li:last-child').off('click').on('click', 'a', function(event) {*/
/*             */
/*             // ACTIVE MENU*/
/*             event.preventDefault() ;*/
/*             $(this).parent().siblings().removeClass('active');*/
/*             $(this).parent().addClass('active') ;*/
/* */
/*             $('#product-as-category-{{ module }} .box-content-slider').empty() ;*/
/* */
/*             // GET PRODUCT CATEGORY*/
/*             var category_id = $(this).data('category-id') ;*/
/* */
/*             $.ajax({*/
/*                 url         : url_product_category,*/
/*                 type        : 'post',*/
/*                 dataType    : 'json',*/
/*                 data        : { category_id : category_id } */
/*             }).done(function(response) {*/
/*                 //$('#product-as-category-{{ module }} .box-content-slider').empty() ;*/
/*                 */
/*                 //if(response.status == 0) return false;*/
/*                 var responsive = '{"0":{"items":1},"360":{"items":2},"640":{"items":3},"768":{"items":3}}';*/
/*                 $('#product-as-category-{{ module }} .box-content-slider').wrapInner('<div class="owl-carousel" data-dots="false" data-nav="true" data-margin="20" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive=' + responsive + '>');*/
/*                 $('#product-as-category-{{ module }} .box-content-slider .owl-carousel').append(response.data);*/
/*                  */
/*                 // OWL CAROUSEL*/
/*                 $('#product-as-category-{{ module }} .box-content-slider .owl-carousel').each(function(index, el) {*/
/*                     var config          = $(this).data();*/
/*                     config.navText      = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];*/
/*                     config.smartSpeed   = "300";*/
/*                     config.nav          = true;*/
/*                     config.dots         = false;*/
/*                     config.autoplay     = true;*/
/*                     config.autoplayTimeout = 3000;*/
/*                     config.autoplayHoverPause = true;*/
/*                     config.loop         = true;*/
/*                     if($(this).hasClass('owl-style2')){*/
/*                     config.animateOut="fadeOut";*/
/*                     config.animateIn="fadeIn";    */
/*                     }*/
/*                     $(this).owlCarousel(config);*/
/*                 });*/
/*             }) ;*/
/* */
/*         }) ;*/
/*     }) ;*/
/* </script>*/
/* */
