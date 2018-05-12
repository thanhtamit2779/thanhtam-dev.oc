<?php

/* default/template/checkout/cart.twig */
class __TwigTemplate_173aec7177f627067d3cce775ad3de4aa79806bf36b0037289d66bb3f3a02d1a extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"heading no-padding\">
        <h2 class=\"headding-title pull-left\">";
        // line 33
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h2>
      </div>  
      <div class=\"clr\"></div>
      <form action=\"";
        // line 36
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 41
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 42
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
                <td class=\"text-right\">";
        // line 46
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
                <td class=\"text-center\"></td>
              </tr>
            </thead>
            <tbody>
            
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 53
            echo "            <tr>
              <td class=\"text-center\">";
            // line 54
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" /></a> ";
            }
            echo "</td>
              <td class=\"text-left\"><a href=\"";
            // line 55
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 56
            echo "                ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 57
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br />
                <small>";
                    // line 58
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                ";
            }
            // line 60
            echo "                ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br />
                <small>";
                // line 61
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 62
            echo "                ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br />
                <span class=\"label label-info\">";
                // line 63
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span> <small>";
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
              <td class=\"text-left\">";
            // line 64
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"number\" name=\"quantity[";
            // line 66
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" class=\"form-control metro\" />
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 68
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn metro btn-default\"><i class=\"fa fa-refresh\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 70
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 71
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              <td class=\"text-center\"> <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 72
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn metro no-bg\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-trash-o\"></i></button></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 76
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 78
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control metro\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 85
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              <td class=\"text-right\">";
            // line 86
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "              </tbody>

              <tfoot>   
                  ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 93
            echo "                    <tr>
                      <td class=\"text-right\" colspan=\"6\"><strong>";
            // line 94
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                      <td class=\"text-right\">";
            // line 95
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                    </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "
              </tfoot>
          </table>
        </div>
      </form>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 104
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn metro btn-default\"><i class=\"fa fa-arrow-circle-o-left\"></i> ";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 105
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn metro btn-default\"><i class=\"fa fa-shopping-cart\"></i> ";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
      </div>
      ";
        // line 107
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 108
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 110
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 110,  347 => 108,  343 => 107,  336 => 105,  330 => 104,  322 => 98,  313 => 95,  309 => 94,  306 => 93,  302 => 92,  297 => 89,  288 => 86,  284 => 85,  277 => 83,  269 => 78,  265 => 76,  260 => 75,  249 => 72,  245 => 71,  241 => 70,  236 => 68,  229 => 66,  224 => 64,  216 => 63,  211 => 62,  207 => 61,  202 => 60,  199 => 59,  190 => 58,  183 => 57,  180 => 56,  172 => 55,  158 => 54,  155 => 53,  151 => 52,  142 => 46,  138 => 45,  134 => 44,  130 => 43,  126 => 42,  122 => 41,  114 => 36,  108 => 33,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  82 => 25,  80 => 24,  75 => 23,  67 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-cart" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*   <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*   <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*   </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="heading no-padding">*/
/*         <h2 class="headding-title pull-left">{{ heading_title }}</h2>*/
/*       </div>  */
/*       <div class="clr"></div>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-center">{{ column_image }}</td>*/
/*                 <td class="text-left">{{ column_name }}</td>*/
/*                 <td class="text-left">{{ column_model }}</td>*/
/*                 <td class="text-left">{{ column_quantity }}</td>*/
/*                 <td class="text-right">{{ column_price }}</td>*/
/*                 <td class="text-right">{{ column_total }}</td>*/
/*                 <td class="text-center"></td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             */
/*             {% for product in products %}*/
/*             <tr>*/
/*               <td class="text-center">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive" /></a> {% endif %}</td>*/
/*               <td class="text-left"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                 {% if product.option %}*/
/*                 {% for option in product.option %} <br />*/
/*                 <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                 {% endif %}*/
/*                 {% if product.reward %} <br />*/
/*                 <small>{{ product.reward }}</small> {% endif %}*/
/*                 {% if product.recurring %} <br />*/
/*                 <span class="label label-info">{{ text_recurring_item }}</span> <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*               <td class="text-left">{{ product.model }}</td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="number" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" class="form-control metro" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn metro btn-default"><i class="fa fa-refresh"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ product.price }}</td>*/
/*               <td class="text-right">{{ product.total }}</td>*/
/*               <td class="text-center"> <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn metro no-bg" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-trash-o"></i></button></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*             <tr>*/
/*               <td></td>*/
/*               <td class="text-left">{{ voucher.description }}</td>*/
/*               <td class="text-left"></td>*/
/*               <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">*/
/*                   <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control metro" />*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div></td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*               <td class="text-right">{{ voucher.amount }}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*               </tbody>*/
/* */
/*               <tfoot>   */
/*                   {% for total in totals %}*/
/*                     <tr>*/
/*                       <td class="text-right" colspan="6"><strong>{{ total.title }}:</strong></td>*/
/*                       <td class="text-right">{{ total.text }}</td>*/
/*                     </tr>*/
/*                   {% endfor %}*/
/* */
/*               </tfoot>*/
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-left"><a href="{{ continue }}" class="btn metro btn-default"><i class="fa fa-arrow-circle-o-left"></i> {{ button_shopping }}</a></div>*/
/*         <div class="pull-right"><a href="{{ checkout }}" class="btn metro btn-default"><i class="fa fa-shopping-cart"></i> {{ button_checkout }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }} */
