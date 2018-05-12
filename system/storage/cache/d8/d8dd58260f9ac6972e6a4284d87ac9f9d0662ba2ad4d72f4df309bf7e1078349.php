<?php

/* default/template/common/cart.twig */
class __TwigTemplate_4af59b308f36724649eeb2c7015971d84e2a22deb510145dfc8d3660485be3fe extends Twig_Template
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
        echo "<a href=\"#\" class=\"cart\">
    <span class=\"title\">";
        // line 2
        echo (isset($context["text_title"]) ? $context["text_title"] : null);
        echo "</span>
    <span class=\"total\">";
        // line 3
        echo (isset($context["text_items"]) ? $context["text_items"] : null);
        echo "</span>
    <span class=\"notify\">";
        // line 4
        echo (isset($context["text_total_item"]) ? $context["text_total_item"] : null);
        echo "</span>
    <span class=\"icon vertical-center\"><i class=\"fa fa-shopping-cart\"></i></span>
</a>
";
        // line 7
        if (((isset($context["products"]) ? $context["products"] : null) || (isset($context["vouchers"]) ? $context["vouchers"] : null))) {
            // line 8
            echo "  <ul class=\"cart-info hidden-xs list-unstyled\">
      <li><p class=\"text-left\"><b>";
            // line 9
            echo (isset($context["text_count_cart"]) ? $context["text_count_cart"] : null);
            echo "</b></p></li>
      <li class=\"cart-info-lists\">
          <ul class=\"list-unstyled\">
              ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 13
                echo "                  <li class=\"cart-list-item\">
                      <div class=\"pull-left cart-list-item-image\">
                          ";
                // line 15
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    // line 16
                    echo "                            <a onclick=\"cart.remove('";
                    echo $this->getAttribute($context["product"], "cart_id", array());
                    echo "');\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"pull-left\"><i class=\"fa fa-close\" aria-hidden=\"true\"></i></a> 
                            <a href=\"";
                    // line 17
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\" class=\"pull-right\">
                              <img src=\"";
                    // line 18
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" class=\"img-responsive\" />
                            </a> 
                          ";
                }
                // line 21
                echo "                      </div>
                      <div class=\"pull-left cart-list-item-info\">
                          <p class=\"p-name\">";
                // line 23
                echo $this->getAttribute($context["product"], "name", array());
                echo "</p>
                          <p class=\"p-rice\">";
                // line 24
                echo (isset($context["text_price"]) ? $context["text_price"] : null);
                echo ": ";
                echo $this->getAttribute($context["product"], "price", array());
                echo "</p>
                          <p>";
                // line 25
                echo (isset($context["text_quanties"]) ? $context["text_quanties"] : null);
                echo ": x ";
                echo $this->getAttribute($context["product"], "quantity", array());
                echo "</p>
                      </div>   
                  </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "   
          </ul>
      </li>
      <li class=\"cart-info-checkout\"><a href=\"/thanh-toan\" class=\"btn btn-default pull-right\">";
            // line 31
            echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
            echo "</a>
</a></li>
  </ul>
";
        } else {
            // line 35
            echo "  <ul class=\"cart-info hidden-xs\">
      <p class=\"text-center\">";
            // line 36
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 36,  116 => 35,  109 => 31,  104 => 28,  92 => 25,  86 => 24,  82 => 23,  78 => 21,  68 => 18,  64 => 17,  57 => 16,  55 => 15,  51 => 13,  47 => 12,  41 => 9,  38 => 8,  36 => 7,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <a href="#" class="cart">*/
/*     <span class="title">{{ text_title }}</span>*/
/*     <span class="total">{{ text_items }}</span>*/
/*     <span class="notify">{{ text_total_item }}</span>*/
/*     <span class="icon vertical-center"><i class="fa fa-shopping-cart"></i></span>*/
/* </a>*/
/* {% if products or vouchers %}*/
/*   <ul class="cart-info hidden-xs list-unstyled">*/
/*       <li><p class="text-left"><b>{{ text_count_cart }}</b></p></li>*/
/*       <li class="cart-info-lists">*/
/*           <ul class="list-unstyled">*/
/*               {% for product in products %}*/
/*                   <li class="cart-list-item">*/
/*                       <div class="pull-left cart-list-item-image">*/
/*                           {% if product.thumb %}*/
/*                             <a onclick="cart.remove('{{ product.cart_id }}');" title="{{ button_remove }}" class="pull-left"><i class="fa fa-close" aria-hidden="true"></i></a> */
/*                             <a href="{{ product.href }}" class="pull-right">*/
/*                               <img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" />*/
/*                             </a> */
/*                           {% endif %}*/
/*                       </div>*/
/*                       <div class="pull-left cart-list-item-info">*/
/*                           <p class="p-name">{{ product.name }}</p>*/
/*                           <p class="p-rice">{{ text_price }}: {{ product.price }}</p>*/
/*                           <p>{{ text_quanties }}: x {{ product.quantity }}</p>*/
/*                       </div>   */
/*                   </li>*/
/*               {% endfor %}   */
/*           </ul>*/
/*       </li>*/
/*       <li class="cart-info-checkout"><a href="/thanh-toan" class="btn btn-default pull-right">{{ text_checkout }}</a>*/
/* </a></li>*/
/*   </ul>*/
/* {% else %}*/
/*   <ul class="cart-info hidden-xs">*/
/*       <p class="text-center">{{ text_empty }}</p>*/
/*   </ul>*/
/* {% endif %}*/
/* */
