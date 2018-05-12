<?php

/* default/template/common/currency.twig */
class __TwigTemplate_4078038b8f63bbf6fe6e67fdc24c9721e63d7c8b5c451c987acc4b97528f13f4 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["currencies"]) ? $context["currencies"] : null)) > 1)) {
            // line 2
            echo "  <form action=\"";
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-currency\">
    <div class=\"btn-group\">
      <button class=\"btn btn-link dropdown-toggle pad-l-r\" data-toggle=\"dropdown\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 6
                echo "            ";
                if (($this->getAttribute($context["currency"], "symbol_left", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
              <strong>";
                    // line 7
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo "</strong>
            ";
                } elseif (($this->getAttribute(                // line 8
$context["currency"], "symbol_right", array()) && ($this->getAttribute($context["currency"], "code", array()) == (isset($context["code"]) ? $context["code"] : null)))) {
                    echo " 
              <strong>";
                    // line 9
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo "</strong>
            ";
                }
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " 
        <span>";
            // line 12
            echo (isset($context["text_currency"]) ? $context["text_currency"] : null);
            echo "&nbsp;<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></span>
      </button>
      <ul class=\"dropdown-menu metro\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                // line 16
                echo "        ";
                if ($this->getAttribute($context["currency"], "symbol_left", array())) {
                    // line 17
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 18
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_left", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                } else {
                    // line 21
                    echo "        <li>
          <button class=\"currency-select btn btn-link btn-block\" type=\"button\" name=\"";
                    // line 22
                    echo $this->getAttribute($context["currency"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["currency"], "symbol_right", array());
                    echo " ";
                    echo $this->getAttribute($context["currency"], "title", array());
                    echo "</button>
        </li>
        ";
                }
                // line 25
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      </ul>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
            // line 29
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
  </form>
";
        }
        // line 31
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 31,  108 => 29,  103 => 26,  97 => 25,  87 => 22,  84 => 21,  74 => 18,  71 => 17,  68 => 16,  64 => 15,  58 => 12,  50 => 11,  45 => 9,  41 => 8,  37 => 7,  32 => 6,  28 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if currencies|length > 1 %}*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-currency">*/
/*     <div class="btn-group">*/
/*       <button class="btn btn-link dropdown-toggle pad-l-r" data-toggle="dropdown">*/
/*         {% for currency in currencies %}*/
/*             {% if currency.symbol_left and currency.code == code %} */
/*               <strong>{{ currency.symbol_left }}</strong>*/
/*             {% elseif currency.symbol_right and currency.code == code %} */
/*               <strong>{{ currency.symbol_right }}</strong>*/
/*             {% endif %}*/
/*         {% endfor %} */
/*         <span>{{ text_currency }}&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></span>*/
/*       </button>*/
/*       <ul class="dropdown-menu metro">*/
/*         {% for currency in currencies %}*/
/*         {% if currency.symbol_left %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_left }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% else %}*/
/*         <li>*/
/*           <button class="currency-select btn btn-link btn-block" type="button" name="{{ currency.code }}">{{ currency.symbol_right }} {{ currency.title }}</button>*/
/*         </li>*/
/*         {% endif %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*     <input type="hidden" name="code" value="" />*/
/*     <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*   </form>*/
/* {% endif %} */
