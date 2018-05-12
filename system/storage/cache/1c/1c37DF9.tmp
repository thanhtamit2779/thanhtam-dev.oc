<?php

/* default/template/product/product.twig */
class __TwigTemplate_842cbe5f31db9a65b03b74da0c299a85d6da80170a48469bb2d7bd2fdf5bb3aa extends Twig_Template
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
<div id=\"product-product\" class=\"container page-product\">
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
  <div class=\"row\">
    
    <!-- COLUMN LEFT -->
    ";
        // line 11
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    <!--  CONTENT -->
    <div id=\"content\" class=\"";
        // line 21
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">

      <!-- CONTENT TOP -->
      ";
        // line 24
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "

      <!-- MAIN -->  
      <div class=\"row\"> ";
        // line 27
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 28
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 29
            echo "        ";
        } else {
            // line 30
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 31
            echo "        ";
        }
        // line 32
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-left col-xs-12\"> 

            <div id=\"gallery\" style=\"display:none;\">
                ";
        // line 35
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 36
            echo "                  <img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"img-responsive\" data-image=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\"/>
                  ";
            // line 37
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 38
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 39
                    echo "                      <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" class=\"img-responsive\" data-image=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\"/>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "  
                  ";
            }
            // line 42
            echo "                ";
        }
        // line 43
        echo "            </div>

          <!-- TAB -->
          <ul class=\"nav-product-tabs list-inline\" role=\"tablist\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 47
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 48
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 49
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 51
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 52
            echo "              <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 54
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 56
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 57
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 58
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 61
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 63
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 68
                    echo "                <tr>
                  <td>";
                    // line 69
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                  <td>";
                    // line 70
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "              </table>
            </div>
            ";
        }
        // line 78
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 79
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
                <!--<div class=\"fb-comments\" data-href=\"";
            // line 80
            echo "\" data-width=\"100%\" data-numposts=\"10\"></div>-->
                <div class=\"fb-comments\" data-href=\"http://thanhtamit.freevnn.com/\" data-width=\"100%\" data-numposts=\"10\" data-mobile=\"true\"></div>
            </div>
            ";
        }
        // line 83
        echo "</div>
        </div>
        ";
        // line 85
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 86
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 89
            echo "        ";
        }
        // line 90
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " product-right col-xs-12\">
          <h1 class=\"product-name\">";
        // line 91
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 93
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 94
            echo "            <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\"><b>";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</b></a></li>
            ";
        }
        // line 96
        echo "            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <b>";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</b></li>
            ";
        // line 97
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 98
            echo "            <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <b>";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</b></li>
            ";
        }
        // line 100
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <b>";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</b></li>
          </ul>
          ";
        // line 102
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 103
            echo "
          <hr/>
          <ul class=\"list-inline\">
            ";
            // line 106
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 107
                echo "              <li>
                <span class=\"price-new\">";
                // line 108
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span>
              </li>
            ";
            } else {
                // line 111
                echo "              <li>
                <span class=\"price-new\">";
                // line 112
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</span>
              </li>
              <li><span class=\"price-old\">";
                // line 114
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
              ";
                // line 115
                if (((isset($context["percent"]) ? $context["percent"] : null) > 0)) {
                    // line 116
                    echo "                <li><span class=\"percent\">-";
                    echo (isset($context["percent"]) ? $context["percent"] : null);
                    echo "%</span></li>
              ";
                }
                // line 118
                echo "            ";
            }
            // line 119
            echo "          </ul>
          <hr/>
          <ul class=\"list-unstyled\"> 
            ";
            // line 122
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 123
                echo "            <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
            ";
            }
            // line 125
            echo "            ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 126
                echo "            <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
            ";
            }
            // line 128
            echo "            ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 129
                echo "            <li>
              <hr>
            </li>
            ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 133
                    echo "            <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "            ";
            }
            // line 136
            echo "          </ul>
          ";
        }
        // line 138
        echo "          <div id=\"product\"> ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 139
            echo "            <hr>
            <h3>";
            // line 140
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
            ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 142
                echo "            ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 143
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 144
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <select name=\"option[";
                    // line 145
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\">
                <option value=\"\">";
                    // line 146
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 148
                        echo "                <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                ";
                        // line 149
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 150
                            echo "                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                ";
                        }
                        // line 151
                        echo " </option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 153
                    echo "              </select>
            </div>
            ";
                }
                // line 156
                echo "
            <!-- RADIO -->
            ";
                // line 158
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 159
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 160
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 161
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 162
                        echo "                <div class=\"radio\">
                  <label>
                    <input type=\"radio\" name=\"option[";
                        // line 164
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 165
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        echo "                  
                    ";
                        // line 166
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 167
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 168
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 169
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 171
                    echo " </div>
            </div>
            ";
                }
                // line 174
                echo "
            <!-- CHECKBOX-->
            ";
                // line 176
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 177
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 178
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div id=\"input-option";
                    // line 179
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 180
                        echo "                <div class=\"checkbox\">
                  <label>
                    <input type=\"checkbox\" name=\"option[";
                        // line 182
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\" />
                    ";
                        // line 183
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\" /> ";
                        }
                        // line 184
                        echo "                    ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                    ";
                        // line 185
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 186
                            echo "                    (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                    ";
                        }
                        // line 187
                        echo " </label>
                </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo " </div>
            </div>
            ";
                }
                // line 192
                echo "
            <!-- TEXT -->
            ";
                // line 194
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 195
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 196
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <input type=\"text\" name=\"option[";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\" />
            </div>
            ";
                }
                // line 200
                echo "
            <!-- TEXTAREA -->
            ";
                // line 202
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 203
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 204
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <textarea name=\"option[";
                    // line 205
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
            </div>
            ";
                }
                // line 208
                echo "
            <!-- FILE -->
            ";
                // line 210
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 211
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\">";
                    // line 212
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <button type=\"button\" id=\"button-upload";
                    // line 213
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn metro btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"option[";
                    // line 214
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" />
            </div>
            ";
                }
                // line 217
                echo "
            <!-- DATE -->
            ";
                // line 219
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 220
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 221
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"option[";
                    // line 223
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\" />
                <span class=\"input-group-btn\">
                <button class=\"btn metro btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 229
                echo "
            <!-- DATETIME -->
            ";
                // line 231
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 232
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 233
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"option[";
                    // line 235
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn metro\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 241
                echo "
            <!-- TIME -->
            ";
                // line 243
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 244
                    echo "            <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
              <label class=\"control-label\" for=\"input-option";
                    // line 245
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
              <div class=\"input-group time\">
                <input type=\"text\" name=\"option[";
                    // line 247
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control metro\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn metro\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            ";
                }
                // line 253
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 254
            echo "            ";
        }
        // line 255
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 256
            echo "            <hr>
            <h3>";
            // line 257
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control metro\">
                <option value=\"\">";
            // line 260
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 262
                echo "                <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
            ";
        }
        // line 268
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 269
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 270
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control metro\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 271
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\" />
            </div>
            ";
        // line 273
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 274
            echo "              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 276
        echo "            <div class=\"form-group\">
                <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 277
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-sm metro\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i> ";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
                <button type=\"button\" id=\"button-wishlist\" data-toggle=\"tooltip\" class=\"btn metro btn-default\" title=\"";
        // line 278
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i> ";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</button>
                <button type=\"button\" id=\"button-compare\" data-toggle=\"tooltip\" class=\"btn metro btn-default\" title=\"";
        // line 279
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i> ";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</button>
            </div>
            
            </div>
          ";
        // line 283
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 284
            echo "          <div class=\"rating\">
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 286
            echo (isset($context["share"]) ? $context["share"] : null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 290
        echo " </div>
      </div>
      ";
        // line 292
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 293
            echo "        <div class=\"block-display-item\">
          <div class=\"heading no-padding\">
            <h3 class=\"headding-title no-margin pull-left\">";
            // line 295
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
          </div>
          <div class=\"content\"> 
            <div class=\"owl-carousel\" data-dots=\"false\" data-loop=\"true\" data-nav=\"true\" data-margin=\"30\" data-autoplayTimeout=\"1000\" data-autoplayHoverPause=\"true\" data-responsive='{\"0\":{\"items\":1},\"600\":{\"items\":3},\"1000\":{\"items\":4}}'>
              ";
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 300
                echo "                  <!-- ";
                echo $this->getAttribute($context["product"], "name", array());
                echo "-->
                  <div class=\"template-product-default product\">
                      <div class=\"product-top\">
                          <a title=\"";
                // line 303
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" class=\"product-image\">
                              <img src=\"";
                // line 304
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\" />
                          </a>
                          <span class=\"product-add-cart\">
                              <a onclick=\"cart.add('";
                // line 307
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span></a>
                          </span>
                          <ul class=\"list-unstyled product-list-icon\">
                              <li><a title=\"";
                // line 310
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"  href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><i class=\"fa fa-link\" aria-hidden=\"true\"></i></a></li>
                              <li><a title=\"";
                // line 311
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></a></li>
                              <li><a title=\"";
                // line 312
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></a></li> 
                          </ul>
                      </div>
                      <div class=\"product-bottom\">
                          <p class=\"product-name\"><a title=\"";
                // line 316
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" >";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></p>
                          <p class=\"product-price\">
                              ";
                // line 318
                if ( !$this->getAttribute($context["product"], "special", array())) {
                    // line 319
                    echo "                                  <span class=\"product-price-new pull-right\">";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span>
                              ";
                } else {
                    // line 320
                    echo " 
                                  <span class=\"product-price-new pull-left\">";
                    // line 321
                    echo $this->getAttribute($context["product"], "special", array());
                    echo "</span> 
                                  <span class=\"product-price-old pull-right\">";
                    // line 322
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span> 
                              ";
                }
                // line 324
                echo "                          </p>
                          ";
                // line 325
                if (($this->getAttribute($context["product"], "percent", array()) > 0)) {
                    // line 326
                    echo "                              <span class=\"product-percent\">-";
                    echo $this->getAttribute($context["product"], "percent", array());
                    echo "%</span>
                          ";
                }
                // line 327
                echo "                                                              
                      </div>
                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 331
            echo "            </div>
          </div>
        </div>    
      ";
        }
        // line 335
        echo "
      <!-- CONTENT BOTTOM -->
      ";
        // line 337
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "
    </div>
    
    <!-- CONTENT RIGHT -->
    ";
        // line 341
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
  </div><!-- / .row 1 -->
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
    /*
    \t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\t\tif (json['redirect']) {
\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.message').append('<div class=\"alert alert-success alert-dismissible\" style=\"width:100%; margin-bottom:0px\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>').hide(6000).delay();

\t\t\t\t\t// Need to set timeout otherwise it wont update the total
\t\t\t\t\tsetTimeout(function () {
\t\t\t\t\t\t\$('.cart-clock .total').text(json['total']);
\t\t\t\t\t\t\$('.cart-clock .notify').text(json['notify']);
\t\t\t\t\t}, 100);

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');

\t\t\t\t\t\$('ul.cart-info').load('index.php?route=common/cart/info ul li');
\t\t\t\t}
\t\t\t},
    
    */
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Need to set timeout otherwise it wont update the total
        setTimeout(function () {
          \$('.cart-clock .total').text(json['total']);
          \$('.cart-clock .notify').text(json['notify']);
        }, 100);

        \$('html, body').animate({ scrollTop: 0 }, 'slow');

        \$('ul.cart-info').load('index.php?route=common/cart/info ul li');
\t\t\t}
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
";
        // line 462
        echo "
\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 526
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 530
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

jQuery(document).ready(function(){
\tjQuery(\"#gallery\").unitegallery();
});
//--></script> 
";
        // line 562
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1294 => 562,  1259 => 530,  1252 => 526,  1186 => 462,  1077 => 341,  1070 => 337,  1066 => 335,  1060 => 331,  1051 => 327,  1045 => 326,  1043 => 325,  1040 => 324,  1035 => 322,  1031 => 321,  1028 => 320,  1022 => 319,  1020 => 318,  1011 => 316,  1002 => 312,  996 => 311,  990 => 310,  982 => 307,  972 => 304,  966 => 303,  959 => 300,  955 => 299,  948 => 295,  944 => 293,  942 => 292,  938 => 290,  930 => 286,  926 => 284,  924 => 283,  913 => 279,  905 => 278,  899 => 277,  896 => 276,  890 => 274,  888 => 273,  883 => 271,  879 => 270,  875 => 269,  872 => 268,  866 => 264,  855 => 262,  851 => 261,  847 => 260,  841 => 257,  838 => 256,  835 => 255,  832 => 254,  826 => 253,  813 => 247,  806 => 245,  799 => 244,  797 => 243,  793 => 241,  780 => 235,  773 => 233,  766 => 232,  764 => 231,  760 => 229,  747 => 223,  740 => 221,  733 => 220,  731 => 219,  727 => 217,  719 => 214,  711 => 213,  707 => 212,  700 => 211,  698 => 210,  694 => 208,  682 => 205,  676 => 204,  669 => 203,  667 => 202,  663 => 200,  651 => 197,  645 => 196,  638 => 195,  636 => 194,  632 => 192,  627 => 189,  619 => 187,  612 => 186,  610 => 185,  605 => 184,  589 => 183,  583 => 182,  579 => 180,  573 => 179,  569 => 178,  562 => 177,  560 => 176,  556 => 174,  551 => 171,  543 => 169,  536 => 168,  534 => 167,  530 => 166,  512 => 165,  506 => 164,  502 => 162,  496 => 161,  492 => 160,  485 => 159,  483 => 158,  479 => 156,  474 => 153,  467 => 151,  460 => 150,  458 => 149,  451 => 148,  447 => 147,  443 => 146,  437 => 145,  431 => 144,  424 => 143,  421 => 142,  417 => 141,  413 => 140,  410 => 139,  407 => 138,  403 => 136,  400 => 135,  389 => 133,  385 => 132,  380 => 129,  377 => 128,  369 => 126,  366 => 125,  358 => 123,  356 => 122,  351 => 119,  348 => 118,  342 => 116,  340 => 115,  336 => 114,  331 => 112,  328 => 111,  322 => 108,  319 => 107,  317 => 106,  312 => 103,  310 => 102,  302 => 100,  294 => 98,  292 => 97,  285 => 96,  275 => 94,  273 => 93,  268 => 91,  263 => 90,  260 => 89,  257 => 88,  254 => 87,  251 => 86,  249 => 85,  245 => 83,  239 => 80,  236 => 79,  233 => 78,  228 => 75,  221 => 73,  212 => 70,  208 => 69,  205 => 68,  201 => 67,  194 => 63,  190 => 61,  186 => 60,  182 => 58,  180 => 57,  176 => 56,  172 => 54,  166 => 52,  163 => 51,  157 => 49,  155 => 48,  151 => 47,  145 => 43,  142 => 42,  138 => 40,  125 => 39,  120 => 38,  118 => 37,  109 => 36,  107 => 35,  100 => 32,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  86 => 27,  80 => 24,  74 => 21,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  58 => 15,  55 => 14,  52 => 13,  50 => 12,  46 => 11,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container page-product">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">*/
/*     */
/*     <!-- COLUMN LEFT -->*/
/*     {{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/* */
/*     <!--  CONTENT -->*/
/*     <div id="content" class="{{ class }}">*/
/* */
/*       <!-- CONTENT TOP -->*/
/*       {{ content_top }}*/
/* */
/*       <!-- MAIN -->  */
/*       <div class="row"> {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-8' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} product-left col-xs-12"> */
/* */
/*             <div id="gallery" style="display:none;">*/
/*                 {% if thumb or images %}*/
/*                   <img src="{{ thumb }}" alt="{{ heading_title }}" class="img-responsive" data-image="{{ popup }}"/>*/
/*                   {% if images %}*/
/*                     {% for image in images %}*/
/*                       <img src="{{ image.thumb }}" alt="{{ heading_title }}" class="img-responsive" data-image="{{ image.popup }}"/>*/
/*                     {% endfor %}  */
/*                   {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*           <!-- TAB -->*/
/*           <ul class="nav-product-tabs list-inline" role="tablist">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*             <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*               <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*             <div class="tab-pane" id="tab-specification">*/
/*               <table class="table table-bordered">*/
/*                 {% for attribute_group in attribute_groups %}*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for attribute in attribute_group.attribute %}*/
/*                 <tr>*/
/*                   <td>{{ attribute.name }}</td>*/
/*                   <td>{{ attribute.text }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                   </tbody>*/
/*                 {% endfor %}*/
/*               </table>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*             <div class="tab-pane" id="tab-review">*/
/*                 <!--<div class="fb-comments" data-href="{# constant('HTTPS_SERVER') #}" data-width="100%" data-numposts="10"></div>-->*/
/*                 <div class="fb-comments" data-href="http://thanhtamit.freevnn.com/" data-width="100%" data-numposts="10" data-mobile="true"></div>*/
/*             </div>*/
/*             {% endif %}</div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*         {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*         {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }} product-right col-xs-12">*/
/*           <h1 class="product-name">{{ heading_title }}</h1>*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*             <li>{{ text_manufacturer }} <a href="{{ manufacturers }}"><b>{{ manufacturer }}</b></a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }} <b>{{ model }}</b></li>*/
/*             {% if reward %}*/
/*             <li>{{ text_reward }} <b>{{ reward }}</b></li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} <b>{{ stock }}</b></li>*/
/*           </ul>*/
/*           {% if price %}*/
/* */
/*           <hr/>*/
/*           <ul class="list-inline">*/
/*             {% if not special %}*/
/*               <li>*/
/*                 <span class="price-new">{{ price }}</span>*/
/*               </li>*/
/*             {% else %}*/
/*               <li>*/
/*                 <span class="price-new">{{ special }}</span>*/
/*               </li>*/
/*               <li><span class="price-old">{{ price }}</span></li>*/
/*               {% if percent > 0 %}*/
/*                 <li><span class="percent">-{{ percent }}%</span></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           <hr/>*/
/*           <ul class="list-unstyled"> */
/*             {% if tax %}*/
/*             <li>{{ text_tax }} {{ tax }}</li>*/
/*             {% endif %}*/
/*             {% if points %}*/
/*             <li>{{ text_points }} {{ points }}</li>*/
/*             {% endif %}*/
/*             {% if discounts %}*/
/*             <li>*/
/*               <hr>*/
/*             </li>*/
/*             {% for discount in discounts %}*/
/*             <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% endif %}*/
/*           <div id="product"> {% if options %}*/
/*             <hr>*/
/*             <h3>{{ text_option }}</h3>*/
/*             {% for option in options %}*/
/*             {% if option.type == 'select' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control metro">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for option_value in option.product_option_value %}*/
/*                 <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                 {% if option_value.price %}*/
/*                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                 {% endif %} </option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- RADIO -->*/
/*             {% if option.type == 'radio' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="radio">*/
/*                   <label>*/
/*                     <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}                  */
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- CHECKBOX-->*/
/*             {% if option.type == 'checkbox' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                 <div class="checkbox">*/
/*                   <label>*/
/*                     <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}" />*/
/*                     {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail" /> {% endif %}*/
/*                     {{ option_value.name }}*/
/*                     {% if option_value.price %}*/
/*                     ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*                 {% endfor %} </div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- TEXT -->*/
/*             {% if option.type == 'text' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control metro" />*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- TEXTAREA -->*/
/*             {% if option.type == 'textarea' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control metro">{{ option.value }}</textarea>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- FILE -->*/
/*             {% if option.type == 'file' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label">{{ option.name }}</label>*/
/*               <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn metro btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}" />*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- DATE -->*/
/*             {% if option.type == 'date' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control metro" />*/
/*                 <span class="input-group-btn">*/
/*                 <button class="btn metro btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- DATETIME -->*/
/*             {% if option.type == 'datetime' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control metro" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn metro"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <!-- TIME -->*/
/*             {% if option.type == 'time' %}*/
/*             <div class="form-group{% if option.required %} required {% endif %}">*/
/*               <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*               <div class="input-group time">*/
/*                 <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control metro" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn metro"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control metro">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                 <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control metro" />*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*                 <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-sm metro"><i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ button_cart }}</button>*/
/*                 <button type="button" id="button-wishlist" data-toggle="tooltip" class="btn metro btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i> {{ button_wishlist }}</button>*/
/*                 <button type="button" id="button-compare" data-toggle="tooltip" class="btn metro btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i> {{ button_compare }}</button>*/
/*             </div>*/
/*             */
/*             </div>*/
/*           {% if review_status %}*/
/*           <div class="rating">*/
/*             <!-- AddThis Button BEGIN -->*/
/*             <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*             <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> */
/*             <!-- AddThis Button END --> */
/*           </div>*/
/*           {% endif %} </div>*/
/*       </div>*/
/*       {% if products %}*/
/*         <div class="block-display-item">*/
/*           <div class="heading no-padding">*/
/*             <h3 class="headding-title no-margin pull-left">{{ text_related }}</h3>*/
/*           </div>*/
/*           <div class="content"> */
/*             <div class="owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplayTimeout="1000" data-autoplayHoverPause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>*/
/*               {% for product in products %}*/
/*                   <!-- {{ product.name }}-->*/
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
/*                   </div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         </div>    */
/*       {% endif %}*/
/* */
/*       <!-- CONTENT BOTTOM -->*/
/*       {{ content_bottom }}*/
/*     </div>*/
/*     */
/*     <!-- CONTENT RIGHT -->*/
/*     {{ column_right }}*/
/*   </div><!-- / .row 1 -->*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/*     /**/
/*     			success: function(json) {*/
/* 				$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 				if (json['redirect']) {*/
/* 					location = json['redirect'];*/
/* 				}*/
/* */
/* 				if (json['success']) {*/
/* 					$('.message').append('<div class="alert alert-success alert-dismissible" style="width:100%; margin-bottom:0px"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>').hide(6000).delay();*/
/* */
/* 					// Need to set timeout otherwise it wont update the total*/
/* 					setTimeout(function () {*/
/* 						$('.cart-clock .total').text(json['total']);*/
/* 						$('.cart-clock .notify').text(json['notify']);*/
/* 					}, 100);*/
/* */
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/* 					$('ul.cart-info').load('index.php?route=common/cart/info ul li');*/
/* 				}*/
/* 			},*/
/*     */
/*     *//* */
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Need to set timeout otherwise it wont update the total*/
/*         setTimeout(function () {*/
/*           $('.cart-clock .total').text(json['total']);*/
/*           $('.cart-clock .notify').text(json['notify']);*/
/*         }, 100);*/
/* */
/*         $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* */
/*         $('ul.cart-info').load('index.php?route=common/cart/info ul li');*/
/* 			}*/
/* 		},*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/* 	});*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* {# $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* }); #}*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var node = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(node).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(node).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(node).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* jQuery(document).ready(function(){*/
/* 	jQuery("#gallery").unitegallery();*/
/* });*/
/* //--></script> */
/* {{ footer }} */
/* */
