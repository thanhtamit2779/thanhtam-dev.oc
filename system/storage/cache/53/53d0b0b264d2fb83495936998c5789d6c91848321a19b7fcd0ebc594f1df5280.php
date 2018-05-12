<?php

/* default/template/product/category.twig */
class __TwigTemplate_2d43f0b7d4e52d3843cf9e6383188a38fb3b923cbb70b6697870de8d9855feb7 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-category\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 17
        if ((isset($context["category_images"]) ? $context["category_images"] : null)) {
            // line 18
            echo "        <div class=\"row no-padding no-margin\">
          <div class=\"category-slider\">
              <ul class=\"owl-carousel owl-style2\" data-dots=\"false\" data-loop=\"true\" data-nav = \"true\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause = \"true\" data-items=\"1\">
                  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["category_images"]) ? $context["category_images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cate_image"]) {
                // line 22
                echo "                        <li>
                            <img src=\"";
                // line 23
                echo $this->getAttribute($context["cate_image"], "slider", array());
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" class=\"img-responsive\" />
                        </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate_image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      
              </ul>
          </div>
        </div>
      ";
        }
        // line 30
        echo "
      ";
        // line 31
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 32
            echo "      <div class=\"row\">
        <div class=\"limit-display-products col-sm-4 col-md-4 col-xs-12 col-md-offset-4 col-sm-offset-4\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon metro\" for=\"input-limit\">";
            // line 35
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</label>
            <select id=\"input-limit\" class=\"form-control metro\" onchange=\"location = this.value;\">
              ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 38
                echo "              ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 39
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                } else {
                    // line 41
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
              ";
                }
                // line 43
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </select>
          </div>
        </div>
         <div class=\"number-display-products col-sm-4 col-md-4 col-xs-6\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon metro\" for=\"input-sort\">";
            // line 49
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</label>
            <select id=\"input-sort\" class=\"form-control metro\" onchange=\"location = this.value;\">
                          
              ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 53
                echo "              ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 54
                    echo "              
              
              
              <option value=\"";
                    // line 57
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                } else {
                    // line 62
                    echo "              
              
              
              <option value=\"";
                    // line 65
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
              
              
              
              ";
                }
                // line 70
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class=\"row no-padding no-margin\"> 
        <div class=\"block-display-item\">
          <div class=\"heading no-padding\">
            <h2 class=\"headding-title pull-left no-margin\">";
            // line 81
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h2>  
          </div>
          <div class=\"content row clr\"> 
            ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                echo "                <!-- ";
                echo $this->getAttribute($context["product"], "name", array());
                echo "-->
                <div class=\"col-xs-12 col-sm-4 col-md-4\">
                   <!-- ";
                // line 87
                echo $this->getAttribute($context["product"], "name", array());
                echo "-->
                  <div class=\"template-product-default product\">
                      <div class=\"product-top\">
                          <a title=\"";
                // line 90
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"product-image\">
                              <img src=\"";
                // line 91
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                          </a>
                          <span class=\"product-add-cart\">
                              <a onclick=\"cart.add('";
                // line 94
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                          </span>
                          <ul class=\"list-unstyled product-list-icon\">
                              <li><a title=\"";
                // line 97
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"  href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                              <li><a title=\"";
                // line 98
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                              <li><a title=\"";
                // line 99
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                          </ul>
                      </div>
                      <div class=\"product-bottom\">
                          <p class=\"product-name\"><a title=\"";
                // line 103
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" >";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></p>
                          <p class=\"product-price\">
                              ";
                // line 105
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 106
                    echo "                                  <span class=\"product-price-new pull-right\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                              ";
                } else {
                    // line 107
                    echo " 
                                  <span class=\"product-price-new pull-left\">";
                    // line 108
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> 
                                  <span class=\"product-price-old pull-right\">";
                    // line 109
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> 
                              ";
                }
                // line 111
                echo "                          </p>
                          ";
                // line 112
                if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                    // line 113
                    echo "                              <span class=\"product-percent\">-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
                          ";
                }
                // line 114
                echo "                                                              
                      </div>
                  </div> 
                </div>
 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo " 
          </div>
        </div>
      </div>
      <div class=\"row no-padding no-margin\">
        <div class=\"col-sm-6 col-xs-12 text-left no-padding hidden-xs\"><p class=\"result-pagination\">";
            // line 124
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</p></div>
        <div class=\"col-sm-6 col-xs-12 text-right no-padding\">";
            // line 125
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
      </div>
      ";
        }
        // line 128
        echo "      ";
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 129
            echo "      <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 131
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn metro btn-default\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
      </div>
      ";
        }
        // line 134
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 135
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 137
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 137,  377 => 135,  372 => 134,  364 => 131,  358 => 129,  355 => 128,  349 => 125,  345 => 124,  338 => 119,  327 => 114,  321 => 113,  319 => 112,  316 => 111,  311 => 109,  307 => 108,  304 => 107,  298 => 106,  296 => 105,  287 => 103,  278 => 99,  272 => 98,  266 => 97,  258 => 94,  248 => 91,  242 => 90,  236 => 87,  230 => 85,  226 => 84,  220 => 81,  208 => 71,  202 => 70,  192 => 65,  187 => 62,  177 => 57,  172 => 54,  169 => 53,  165 => 52,  159 => 49,  152 => 44,  146 => 43,  138 => 41,  130 => 39,  127 => 38,  123 => 37,  118 => 35,  113 => 32,  111 => 31,  108 => 30,  101 => 25,  88 => 23,  85 => 22,  81 => 21,  76 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-category" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       {% if category_images %}*/
/*         <div class="row no-padding no-margin">*/
/*           <div class="category-slider">*/
/*               <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">*/
/*                   {% for cate_image in category_images %}*/
/*                         <li>*/
/*                             <img src="{{ cate_image.slider }}" alt="{{ heading_title }}" title="{{ heading_title }}" class="img-responsive" />*/
/*                         </li>*/
/*                   {% endfor %}      */
/*               </ul>*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if products %}*/
/*       <div class="row">*/
/*         <div class="limit-display-products col-sm-4 col-md-4 col-xs-12 col-md-offset-4 col-sm-offset-4">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon metro" for="input-limit">{{ text_limit }}</label>*/
/*             <select id="input-limit" class="form-control metro" onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*               {% if limits.value == limit %}*/
/*               <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*               {% else %}*/
/*               <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*          <div class="number-display-products col-sm-4 col-md-4 col-xs-6">*/
/*           <div class="form-group input-group input-group-sm">*/
/*             <label class="input-group-addon metro" for="input-sort">{{ text_sort }}</label>*/
/*             <select id="input-sort" class="form-control metro" onchange="location = this.value;">*/
/*                           */
/*               {% for sorts in sorts %}*/
/*               {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% else %}*/
/*               */
/*               */
/*               */
/*               <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*               */
/*               */
/*               */
/*               {% endif %}*/
/*               {% endfor %}*/
/*             */
/*             */
/*             */
/*             </select>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row no-padding no-margin"> */
/*         <div class="block-display-item">*/
/*           <div class="heading no-padding">*/
/*             <h2 class="headding-title pull-left no-margin">{{ heading_title }}</h2>  */
/*           </div>*/
/*           <div class="content row clr"> */
/*             {% for product in products %}*/
/*                 <!-- {{ product.name }}-->*/
/*                 <div class="col-xs-12 col-sm-4 col-md-4">*/
/*                    <!-- {{ product.name }}-->*/
/*                   <div class="template-product-default product">*/
/*                       <div class="product-top">*/
/*                           <a title="{{ product.name }}" href="{{ product.href }}" class="product-image">*/
/*                               <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                           </a>*/
/*                           <span class="product-add-cart">*/
/*                               <a onclick="cart.add('{{ product.product_id }}');"><i class="fa fa-shopping-cart"></i> <span class="">{{ button_cart }}</span></a>*/
/*                           </span>*/
/*                           <ul class="list-unstyled product-list-icon">*/
/*                               <li><a title="{{ product.name }}"  href="{{ product.href }}"><i class="fa fa-link" aria-hidden="true"></i></a></li>*/
/*                               <li><a title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></a></li>*/
/*                               <li><a title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></a></li> */
/*                           </ul>*/
/*                       </div>*/
/*                       <div class="product-bottom">*/
/*                           <p class="product-name"><a title="{{ product.name }}" href="{{ product.href }}" >{{ product.name }}</a></p>*/
/*                           <p class="product-price">*/
/*                               {% if not product.special %}*/
/*                                   <span class="product-price-new pull-right">{{ product.price }}</span>*/
/*                               {% else %} */
/*                                   <span class="product-price-new pull-left">{{ product.special }}</span> */
/*                                   <span class="product-price-old pull-right">{{ product.price }}</span> */
/*                               {% endif %}*/
/*                           </p>*/
/*                           {% if product.percent > 0 %}*/
/*                               <span class="product-percent">-{{ product.percent }}%</span>*/
/*                           {% endif %}                                                              */
/*                       </div>*/
/*                   </div> */
/*                 </div>*/
/*  */
/*             {% endfor %} */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="row no-padding no-margin">*/
/*         <div class="col-sm-6 col-xs-12 text-left no-padding hidden-xs"><p class="result-pagination">{{ results }}</p></div>*/
/*         <div class="col-sm-6 col-xs-12 text-right no-padding">{{ pagination }}</div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if not categories and not products %}*/
/*       <p>{{ text_empty }}</p>*/
/*       <div class="buttons">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn metro btn-default">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
/* */
