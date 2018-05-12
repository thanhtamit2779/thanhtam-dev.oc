<?php

/* design/layout_form.twig */
class __TwigTemplate_7d7cee2dfbb54a5d358b5a197995182a3584871abc0c7993d19488ebd4416139 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-layout\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-layout\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 29
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 31
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"";
        // line 33
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                ";
        // line 34
        if ((isset($context["error_name"]) ? $context["error_name"] : null)) {
            // line 35
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_name"]) ? $context["error_name"] : null);
            echo "</div>
                ";
        }
        // line 37
        echo "              </div>
            </div>
            <table id=\"route\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 42
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 48
        $context["route_row"] = 0;
        // line 49
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_routes"]) ? $context["layout_routes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_route"]) {
            // line 50
            echo "                <tr id=\"route-row";
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "\">
                  <td class=\"text-left\"><select name=\"layout_route[";
            // line 51
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][store_id]\" class=\"form-control\">
                      <option value=\"0\">";
            // line 52
            echo (isset($context["text_default"]) ? $context["text_default"] : null);
            echo "</option>
                      ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 54
                echo "                      ";
                if (($this->getAttribute($context["store"], "store_id", array()) == $this->getAttribute($context["layout_route"], "store_id", array()))) {
                    // line 55
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                } else {
                    // line 57
                    echo "                      <option value=\"";
                    echo $this->getAttribute($context["store"], "store_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["store"], "name", array());
                    echo "</option>
                      ";
                }
                // line 59
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                    </select></td>
                  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[";
            // line 61
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "][route]\" value=\"";
            echo $this->getAttribute($context["layout_route"], "route", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
            echo "\" class=\"form-control\" /></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#route-row";
            // line 62
            echo (isset($context["route_row"]) ? $context["route_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                </tr>
                ";
            // line 64
            $context["route_row"] = ((isset($context["route_row"]) ? $context["route_row"] : null) + 1);
            // line 65
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "              </tbody>
              <tfoot>
                <tr>
                  <td colspan=\"2\"></td>
                  <td class=\"text-left\"><button type=\"button\" onclick=\"addRoute();\" data-toggle=\"tooltip\" title=\"";
        // line 70
        echo (isset($context["button_route_add"]) ? $context["button_route_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend>";
        // line 76
        echo (isset($context["text_module"]) ? $context["text_module"] : null);
        echo "</legend>
            ";
        // line 77
        $context["module_row"] = 0;
        // line 78
        echo "            <div class=\"row\">

              <!-- SLIDER -->
              <div class=\"col-lg-12 col-md-12 col-sm-12\">
                  <table id=\"module-custom-slider\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 85
        echo (isset($context["text_custom_slider"]) ? $context["text_custom_slider"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 90
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "custom_slider")) {
                // line 91
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 93
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 94
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 95
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 96
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 97
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 98
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 100
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 102
                        echo "                            ";
                    } else {
                        // line 103
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 104
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 105
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 107
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 109
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 110
                        echo "                            ";
                    }
                    // line 111
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 114
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 115
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 116
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 117
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 121
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 122
                echo "                    ";
            }
            // line 123
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 131
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 132
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 133
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 135
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 136
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "                            ";
            }
            // line 139
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('custom-slider');\" data-toggle=\"tooltip\" title=\"";
        // line 143
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <!-- BANNER -->
              <div class=\"col-lg-12 col-md-12 col-sm-12\">
                  <table id=\"module-custom-banner\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 156
        echo (isset($context["text_custom_banner"]) ? $context["text_custom_banner"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 161
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "custom_banner")) {
                // line 162
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 164
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 166
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 167
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 168
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 169
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 171
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 173
                        echo "                            ";
                    } else {
                        // line 174
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 175
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 176
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 178
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 180
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 181
                        echo "                            ";
                    }
                    // line 182
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 185
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 186
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 187
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 188
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 192
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 193
                echo "                    ";
            }
            // line 194
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 202
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 203
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 204
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 206
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 207
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 209
                echo "                            ";
            }
            // line 210
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('custom-banner');\" data-toggle=\"tooltip\" title=\"";
        // line 214
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <!-- TRÁI -->
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-left\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 227
        echo (isset($context["text_column_left"]) ? $context["text_column_left"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 232
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_left")) {
                // line 233
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 235
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 236
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 237
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 238
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 239
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 240
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 242
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 244
                        echo "                            ";
                    } else {
                        // line 245
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 246
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 247
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 249
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 251
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 252
                        echo "                            ";
                    }
                    // line 253
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 256
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 257
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 258
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 259
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 263
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 264
                echo "                    ";
            }
            // line 265
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 266
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 272
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 273
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 274
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 275
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 277
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 278
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                echo "                            ";
            }
            // line 281
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-left');\" data-toggle=\"tooltip\" title=\"";
        // line 285
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <!-- CONTENT TOP - CONTENT BOTTOM -->
              <div class=\"col-lg-6 col-md-4 col-sm-12\">
                <table id=\"module-content-top\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 298
        echo (isset($context["text_content_top"]) ? $context["text_content_top"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 303
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_top")) {
                // line 304
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 306
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 307
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 308
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 309
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 310
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 311
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 313
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 315
                        echo "                            ";
                    } else {
                        // line 316
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 317
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 318
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 320
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 322
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 323
                        echo "                            ";
                    }
                    // line 324
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 326
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 327
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 328
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"> <a href=\"";
                // line 329
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 330
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 334
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 335
                echo "                    ";
            }
            // line 336
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 343
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 344
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 345
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 346
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 348
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 349
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                            ";
            }
            // line 352
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-top');\" data-toggle=\"tooltip\" title=\"";
        // line 356
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id=\"module-content-bottom\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 365
        echo (isset($context["text_content_bottom"]) ? $context["text_content_bottom"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 369
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 370
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "content_bottom")) {
                // line 371
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 373
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 374
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 375
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 376
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 377
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 378
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 380
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 382
                        echo "                            ";
                    } else {
                        // line 383
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 384
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 385
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 387
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 389
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 390
                        echo "                            ";
                    }
                    // line 391
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 393
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 394
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 395
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 396
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" type=\"button\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 397
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 401
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 402
                echo "                    ";
            }
            // line 403
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 404
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 410
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 411
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 412
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 413
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 415
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 416
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 418
                echo "                            ";
            }
            // line 419
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 421
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('content-bottom');\" data-toggle=\"tooltip\" title=\"";
        // line 423
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>

              <!-- CONTENT RIGHT -->
              <div class=\"col-lg-3 col-md-4 col-sm-12\">
                <table id=\"module-column-right\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-center\">";
        // line 436
        echo (isset($context["text_column_right"]) ? $context["text_column_right"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 440
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["layout_modules"]) ? $context["layout_modules"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout_module"]) {
            // line 441
            echo "                    ";
            if (($this->getAttribute($context["layout_module"], "position", array()) == "column_right")) {
                // line 442
                echo "                    <tr id=\"module-row";
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "\">
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select name=\"layout_module[";
                // line 444
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][code]\" class=\"form-control input-sm\">
                            ";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                    // line 446
                    echo "                            <optgroup label=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\">
                            ";
                    // line 447
                    if ( !$this->getAttribute($context["extension"], "module", array())) {
                        // line 448
                        echo "                            ";
                        if (($this->getAttribute($context["extension"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                            // line 449
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\" selected=\"selected\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        } else {
                            // line 451
                            echo "                            <option value=\"";
                            echo $this->getAttribute($context["extension"], "code", array());
                            echo "\">";
                            echo $this->getAttribute($context["extension"], "name", array());
                            echo "</option>
                            ";
                        }
                        // line 453
                        echo "                            ";
                    } else {
                        // line 454
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                            // line 455
                            echo "                            ";
                            if (($this->getAttribute($context["module"], "code", array()) == $this->getAttribute($context["layout_module"], "code", array()))) {
                                // line 456
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            } else {
                                // line 458
                                echo "                            <option value=\"";
                                echo $this->getAttribute($context["module"], "code", array());
                                echo "\">";
                                echo $this->getAttribute($context["module"], "name", array());
                                echo "</option>
                            ";
                            }
                            // line 460
                            echo "                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 461
                        echo "                            ";
                    }
                    // line 462
                    echo "                            </optgroup>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "                          </select>
                          <input type=\"hidden\" name=\"layout_module[";
                // line 465
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][position]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "position", array());
                echo "\" />
                          <input type=\"hidden\" name=\"layout_module[";
                // line 466
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "][sort_order]\" value=\"";
                echo $this->getAttribute($context["layout_module"], "sort_order", array());
                echo "\" />
                          <div class=\"input-group-btn\"><a href=\"";
                // line 467
                echo $this->getAttribute($context["layout_module"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a>
                            <button type=\"button\" onclick=\"\$('#module-row";
                // line 468
                echo (isset($context["module_row"]) ? $context["module_row"] : null);
                echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    ";
                // line 472
                $context["module_row"] = ((isset($context["module_row"]) ? $context["module_row"] : null) + 1);
                // line 473
                echo "                    ";
            }
            // line 474
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 475
        echo "                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=\"text-left\"><div class=\"input-group\">
                          <select class=\"form-control input-sm\">
                            <option value=\"\"></option>
                            ";
        // line 481
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 482
            echo "                            <optgroup label=\"";
            echo $this->getAttribute($context["extension"], "name", array());
            echo "\">
                            ";
            // line 483
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 484
                echo "                            <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["extension"], "name", array());
                echo "</option>
                            ";
            } else {
                // line 486
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 487
                    echo "                            <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo $this->getAttribute($context["module"], "name", array());
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 489
                echo "                            ";
            }
            // line 490
            echo "                            </optgroup>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 492
        echo "                          </select>
                          <div class=\"input-group-btn\">
                            <button type=\"button\" onclick=\"addModule('column-right');\" data-toggle=\"tooltip\" title=\"";
        // line 494
        echo (isset($context["button_module_add"]) ? $context["button_module_add"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
var route_row = ";
        // line 508
        echo (isset($context["route_row"]) ? $context["route_row"] : null);
        echo ";

function addRoute() {
\thtml  = '<tr id=\"route-row' + route_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"layout_route[' + route_row + '][store_id]\" class=\"form-control\">';
\thtml += '  <option value=\"0\">";
        // line 513
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>';
\t";
        // line 514
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 515
            echo "\thtml += '<option value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["store"], "name", array()), "js");
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo "\thtml += '  </select></td>';
\thtml += '  <td class=\"text-left\"><input type=\"text\" name=\"layout_route[' + route_row + '][route]\" value=\"\" placeholder=\"";
        // line 518
        echo (isset($context["entry_route"]) ? $context["entry_route"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#route-row' + route_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 519
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';
\t
\t\$('#route tbody').append(html);
\t
\troute_row++;
}

var module_row = ";
        // line 527
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo ";

function addModule(type) {
\thtml  = '<tr id=\"module-row' + module_row + '\">';
    html += '  <td class=\"text-left\"><div class=\"input-group\"><select name=\"layout_module[' + module_row + '][code]\" class=\"form-control input-sm\">';
\t";
        // line 532
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 533
            echo "\thtml += '    <optgroup label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
            echo "\">';
\t";
            // line 534
            if ( !$this->getAttribute($context["extension"], "module", array())) {
                // line 535
                echo "\thtml += '      <option value=\"";
                echo $this->getAttribute($context["extension"], "code", array());
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["extension"], "name", array()), "js");
                echo "</option>';
\t";
            } else {
                // line 537
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "module", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 538
                    echo "\thtml += '      <option value=\"";
                    echo $this->getAttribute($context["module"], "code", array());
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "name", array()), "js");
                    echo "</option>';
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 540
                echo "\t";
            }
            // line 541
            echo "\thtml += '    </optgroup>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 543
        echo "\thtml += '  </select>';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][position]\" value=\"' + type.replace('-', '_') + '\" />';
    html += '  <input type=\"hidden\" name=\"layout_module[' + module_row + '][sort_order]\" value=\"\" />';
\thtml += '  <div class=\"input-group-btn\"><a href=\"\" target=\"_blank\" type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 546
        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-pencil\"></i></a><button type=\"button\" onclick=\"\$(\\'#module-row' + module_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa fa-minus-circle\"></i></button></div></div></td>';
\thtml += '</tr>';
\t
\t\$('#module-' + type + ' tbody').append(html);
\t
\t\$('#module-' + type + ' tbody select[name=\\'layout_module[' + module_row + '][code]\\']').val(\$('#module-' + type + ' tfoot select').val());
\t
\t\$('#module-' + type + ' select[name*=\\'code\\']').trigger('change');
\t\t
\t\$('#module-' + type + ' tbody input[name*=\\'sort_order\\']').each(function(i, element) {
\t\t\$(element).val(i);
\t});
\t
\tmodule_row++;
}

\$('#module-custom-slider, #module-custom-banner, #module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\\'code\\']', 'change', function() {
\tvar part = this.value.split('.');
\t
\tif (!part[1]) {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 566
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "');
\t} else {
\t\t\$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=";
        // line 568
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&module_id=' + part[1]);
\t}
});

\$('#module-custom-slider, #module-custom-banner, #module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
";
        // line 575
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1643 => 575,  1633 => 568,  1628 => 566,  1603 => 546,  1598 => 543,  1591 => 541,  1588 => 540,  1577 => 538,  1572 => 537,  1564 => 535,  1562 => 534,  1557 => 533,  1553 => 532,  1545 => 527,  1534 => 519,  1530 => 518,  1527 => 517,  1516 => 515,  1512 => 514,  1508 => 513,  1500 => 508,  1483 => 494,  1479 => 492,  1472 => 490,  1469 => 489,  1458 => 487,  1453 => 486,  1445 => 484,  1443 => 483,  1438 => 482,  1434 => 481,  1426 => 475,  1420 => 474,  1417 => 473,  1415 => 472,  1406 => 468,  1400 => 467,  1394 => 466,  1388 => 465,  1385 => 464,  1378 => 462,  1375 => 461,  1369 => 460,  1361 => 458,  1353 => 456,  1350 => 455,  1345 => 454,  1342 => 453,  1334 => 451,  1326 => 449,  1323 => 448,  1321 => 447,  1316 => 446,  1312 => 445,  1308 => 444,  1302 => 442,  1299 => 441,  1295 => 440,  1288 => 436,  1272 => 423,  1268 => 421,  1261 => 419,  1258 => 418,  1247 => 416,  1242 => 415,  1234 => 413,  1232 => 412,  1227 => 411,  1223 => 410,  1215 => 404,  1209 => 403,  1206 => 402,  1204 => 401,  1195 => 397,  1189 => 396,  1183 => 395,  1177 => 394,  1174 => 393,  1167 => 391,  1164 => 390,  1158 => 389,  1150 => 387,  1142 => 385,  1139 => 384,  1134 => 383,  1131 => 382,  1123 => 380,  1115 => 378,  1112 => 377,  1110 => 376,  1105 => 375,  1101 => 374,  1097 => 373,  1091 => 371,  1088 => 370,  1084 => 369,  1077 => 365,  1065 => 356,  1061 => 354,  1054 => 352,  1051 => 351,  1040 => 349,  1035 => 348,  1027 => 346,  1025 => 345,  1020 => 344,  1016 => 343,  1008 => 337,  1002 => 336,  999 => 335,  997 => 334,  988 => 330,  982 => 329,  976 => 328,  970 => 327,  967 => 326,  960 => 324,  957 => 323,  951 => 322,  943 => 320,  935 => 318,  932 => 317,  927 => 316,  924 => 315,  916 => 313,  908 => 311,  905 => 310,  903 => 309,  898 => 308,  894 => 307,  890 => 306,  884 => 304,  881 => 303,  877 => 302,  870 => 298,  854 => 285,  850 => 283,  843 => 281,  840 => 280,  829 => 278,  824 => 277,  816 => 275,  814 => 274,  809 => 273,  805 => 272,  797 => 266,  791 => 265,  788 => 264,  786 => 263,  777 => 259,  771 => 258,  765 => 257,  759 => 256,  756 => 255,  749 => 253,  746 => 252,  740 => 251,  732 => 249,  724 => 247,  721 => 246,  716 => 245,  713 => 244,  705 => 242,  697 => 240,  694 => 239,  692 => 238,  687 => 237,  683 => 236,  679 => 235,  673 => 233,  670 => 232,  666 => 231,  659 => 227,  643 => 214,  639 => 212,  632 => 210,  629 => 209,  618 => 207,  613 => 206,  605 => 204,  603 => 203,  598 => 202,  594 => 201,  586 => 195,  580 => 194,  577 => 193,  575 => 192,  566 => 188,  560 => 187,  554 => 186,  548 => 185,  545 => 184,  538 => 182,  535 => 181,  529 => 180,  521 => 178,  513 => 176,  510 => 175,  505 => 174,  502 => 173,  494 => 171,  486 => 169,  483 => 168,  481 => 167,  476 => 166,  472 => 165,  468 => 164,  462 => 162,  459 => 161,  455 => 160,  448 => 156,  432 => 143,  428 => 141,  421 => 139,  418 => 138,  407 => 136,  402 => 135,  394 => 133,  392 => 132,  387 => 131,  383 => 130,  375 => 124,  369 => 123,  366 => 122,  364 => 121,  355 => 117,  349 => 116,  343 => 115,  337 => 114,  334 => 113,  327 => 111,  324 => 110,  318 => 109,  310 => 107,  302 => 105,  299 => 104,  294 => 103,  291 => 102,  283 => 100,  275 => 98,  272 => 97,  270 => 96,  265 => 95,  261 => 94,  257 => 93,  251 => 91,  248 => 90,  244 => 89,  237 => 85,  228 => 78,  226 => 77,  222 => 76,  213 => 70,  207 => 66,  201 => 65,  199 => 64,  192 => 62,  184 => 61,  181 => 60,  175 => 59,  167 => 57,  159 => 55,  156 => 54,  152 => 53,  148 => 52,  144 => 51,  139 => 50,  134 => 49,  132 => 48,  124 => 43,  120 => 42,  113 => 37,  107 => 35,  105 => 34,  99 => 33,  94 => 31,  89 => 29,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-layout" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-layout" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_route }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="{{ name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                 {% if error_name %}*/
/*                 <div class="text-danger">{{ error_name }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <table id="route" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ entry_store }}</td>*/
/*                   <td class="text-left">{{ entry_route }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% set route_row = 0 %}*/
/*                 {% for layout_route in layout_routes %}*/
/*                 <tr id="route-row{{ route_row }}">*/
/*                   <td class="text-left"><select name="layout_route[{{ route_row }}][store_id]" class="form-control">*/
/*                       <option value="0">{{ text_default }}</option>*/
/*                       {% for store in stores %}*/
/*                       {% if store.store_id == layout_route.store_id %}*/
/*                       <option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/*                       {% else %}*/
/*                       <option value="{{ store.store_id }}">{{ store.name }}</option>*/
/*                       {% endif %}*/
/*                       {% endfor %}*/
/*                     </select></td>*/
/*                   <td class="text-left"><input type="text" name="layout_route[{{ route_row }}][route]" value="{{ layout_route.route }}" placeholder="{{ entry_route }}" class="form-control" /></td>*/
/*                   <td class="text-left"><button type="button" onclick="$('#route-row{{ route_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                 </tr>*/
/*                 {% set route_row = route_row + 1 %}*/
/*                 {% endfor %}*/
/*               </tbody>*/
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="2"></td>*/
/*                   <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="{{ button_route_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_module }}</legend>*/
/*             {% set module_row = 0 %}*/
/*             <div class="row">*/
/* */
/*               <!-- SLIDER -->*/
/*               <div class="col-lg-12 col-md-12 col-sm-12">*/
/*                   <table id="module-custom-slider" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_custom_slider }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'custom_slider' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('custom-slider');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/* */
/*               <!-- BANNER -->*/
/*               <div class="col-lg-12 col-md-12 col-sm-12">*/
/*                   <table id="module-custom-banner" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_custom_banner }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'custom_banner' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('custom-banner');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/* */
/*               <!-- TRÁI -->*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-left" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_left }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_left' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/* */
/*               <!-- CONTENT TOP - CONTENT BOTTOM -->*/
/*               <div class="col-lg-6 col-md-4 col-sm-12">*/
/*                 <table id="module-content-top" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_top }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_top' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"> <a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*                 <table id="module-content-bottom" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_content_bottom }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'content_bottom' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" type="button" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/* */
/*               <!-- CONTENT RIGHT -->*/
/*               <div class="col-lg-3 col-md-4 col-sm-12">*/
/*                 <table id="module-column-right" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-center">{{ text_column_right }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     {% for layout_module in layout_modules %}*/
/*                     {% if layout_module.position == 'column_right' %}*/
/*                     <tr id="module-row{{ module_row }}">*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select name="layout_module[{{ module_row }}][code]" class="form-control input-sm">*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             {% if extension.code == layout_module.code %}*/
/*                             <option value="{{ extension.code }}" selected="selected">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% endif %}*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             {% if module.code == layout_module.code %}*/
/*                             <option value="{{ module.code }}" selected="selected">{{ module.name }}</option>*/
/*                             {% else %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endif %}*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][position]" value="{{ layout_module.position }}" />*/
/*                           <input type="hidden" name="layout_module[{{ module_row }}][sort_order]" value="{{ layout_module.sort_order }}" />*/
/*                           <div class="input-group-btn"><a href="{{ layout_module.edit }}" data-toggle="tooltip" title="{{ button_edit }}" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>*/
/*                             <button type="button" onclick="$('#module-row{{ module_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                     {% set module_row = module_row + 1 %}*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </tbody>*/
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td class="text-left"><div class="input-group">*/
/*                           <select class="form-control input-sm">*/
/*                             <option value=""></option>*/
/*                             {% for extension in extensions %}*/
/*                             <optgroup label="{{ extension.name }}">*/
/*                             {% if not extension.module %}*/
/*                             <option value="{{ extension.code }}">{{ extension.name }}</option>*/
/*                             {% else %}*/
/*                             {% for module in extension.module %}*/
/*                             <option value="{{ module.code }}">{{ module.name }}</option>*/
/*                             {% endfor %}*/
/*                             {% endif %}*/
/*                             </optgroup>*/
/*                             {% endfor %}*/
/*                           </select>*/
/*                           <div class="input-group-btn">*/
/*                             <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="{{ button_module_add }}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>*/
/*                           </div>*/
/*                         </div></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* var route_row = {{ route_row }};*/
/* */
/* function addRoute() {*/
/* 	html  = '<tr id="route-row' + route_row + '">';*/
/* 	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';*/
/* 	html += '  <option value="0">{{ text_default }}</option>';*/
/* 	{% for store in stores %}*/
/* 	html += '<option value="{{ store.store_id }}">{{ store.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="{{ entry_route }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#route tbody').append(html);*/
/* 	*/
/* 	route_row++;*/
/* }*/
/* */
/* var module_row = {{ module_row }};*/
/* */
/* function addModule(type) {*/
/* 	html  = '<tr id="module-row' + module_row + '">';*/
/*     html += '  <td class="text-left"><div class="input-group"><select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';*/
/* 	{% for extension in extensions %}*/
/* 	html += '    <optgroup label="{{ extension.name|escape('js') }}">';*/
/* 	{% if not extension.module %}*/
/* 	html += '      <option value="{{ extension.code }}">{{ extension.name|escape('js') }}</option>';*/
/* 	{% else %}*/
/* 	{% for module in extension.module %}*/
/* 	html += '      <option value="{{ module.code }}">{{ module.name|escape('js') }}</option>';*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* 	html += '    </optgroup>';*/
/* 	{% endfor %}*/
/* 	html += '  </select>';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';*/
/*     html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';*/
/* 	html += '  <div class="input-group-btn"><a href="" target="_blank" type="button" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button></div></div></td>';*/
/* 	html += '</tr>';*/
/* 	*/
/* 	$('#module-' + type + ' tbody').append(html);*/
/* 	*/
/* 	$('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());*/
/* 	*/
/* 	$('#module-' + type + ' select[name*=\'code\']').trigger('change');*/
/* 		*/
/* 	$('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {*/
/* 		$(element).val(i);*/
/* 	});*/
/* 	*/
/* 	module_row++;*/
/* }*/
/* */
/* $('#module-custom-slider, #module-custom-banner, #module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\'code\']', 'change', function() {*/
/* 	var part = this.value.split('.');*/
/* 	*/
/* 	if (!part[1]) {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}');*/
/* 	} else {*/
/* 		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token={{ user_token }}&module_id=' + part[1]);*/
/* 	}*/
/* });*/
/* */
/* $('#module-custom-slider, #module-custom-banner, #module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');*/
/* //--></script> */
/* </div>*/
/* {{ footer }}*/
