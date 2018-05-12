<?php

/* default/template/extension/module/category.twig */
class __TwigTemplate_f48f5e564a63832f647e64019065494cf9a9fc31c1095f117165d2b9d10d6a48 extends Twig_Template
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
        echo "<div class=\"box-block\">
   <h4 class=\"box-heading\">";
        // line 2
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
    <ul class=\"accordion box-content\"  id=\"accordion-1\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "            <li>
            ";
            // line 6
            if (($this->getAttribute($context["category"], "category_id", array()) == (isset($context["category_id"]) ? $context["category_id"] : null))) {
                // line 7
                echo "                <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\" class=\"active\">
                    ";
                // line 8
                echo $this->getAttribute($context["category"], "name", array());
                echo "
                    ";
                // line 9
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 10
                    echo "                        <span class=\"pull-right\"><i class=\"fa fa-angle-down\"></i></span>
                    ";
                }
                // line 12
                echo "                </a>
            ";
            } else {
                // line 14
                echo "                <a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">
                    ";
                // line 15
                echo $this->getAttribute($context["category"], "name", array());
                echo "
                    ";
                // line 16
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 17
                    echo "                        <span class=\"pull-right\"><i class=\"fa fa-angle-down\"></i></span>
                    ";
                }
                // line 19
                echo "                </a>
            ";
            }
            // line 20
            echo "    
            
            ";
            // line 22
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 23
                echo "                <ul class=\"sub-menu\">
                    ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 25
                    echo "                    ";
                    if (($this->getAttribute($context["child"], "category_id", array()) == (isset($context["child_id"]) ? $context["child_id"] : null))) {
                        // line 26
                        echo "                        <li><a href=\"";
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"active\"><i class=\"fa fa-angle-right\"></i> ";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li> 
                    ";
                    } else {
                        // line 27
                        echo " 
                        <li><a href=\"";
                        // line 28
                        echo $this->getAttribute($context["child"], "href", array());
                        echo "\" class=\"\"><i class=\"fa fa-angle-right\"></i> ";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo "</a></li>
                    ";
                    }
                    // line 30
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                </ul>  
            ";
            }
            // line 33
            echo "            
            </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </ul>  
</div>
<script type=\"text/javascript\">
\$(document).ready(function(\$){
           \$('#accordion-1').dcAccordion({
                 eventType: 'hover',
                 autoClose: true,
                 disableLink: false,
                 speed: 'fast',
                 showCount: false,
                 autoExpand: true,
                 saveState: false,
                 classActive  : 'active',    // Class of active parent link
                 hoverDelay   : 100,    // Hover delay for hoverIntent plugin
                 classExpand  : 'dcjq-current-parent'
             });
                            \$('#accordion-2').dcAccordion({
                                eventType: 'click',
                                autoClose: false,
                                saveState: true,
                                disableLink: true,
                                speed: 'fast',
                                classActive: 'test',
                                showCount: true
                            });
                            \$('#accordion-3').dcAccordion({
                                eventType: 'click',
                                autoClose: false,
                                saveState: false,
                                disableLink: false,
                                showCount: false,
                                speed: 'slow'
                            });
                            \$('#accordion-4').dcAccordion({
                                eventType: 'hover',
                                autoClose: true,
                                saveState: true,
                                disableLink: true,
                                menuClose: false,
                                speed: 'slow',
                                showCount: true
                            });
                            \$('#accordion-5').dcAccordion({
                                eventType: 'hover',
                                autoClose: false,
                                saveState: true,
                                disableLink: true,
                                menuClose: true,
                                speed: 'fast',
                                showCount: true
                            });
                            \$('#accordion-6').dcAccordion({
                    eventType: 'hover',
                    autoClose: false,
                    saveState: false,
                    disableLink: false,
                    showCount: false,
                    menuClose: true,
                    speed: 'slow'
                  });
         });
</script>

";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 36,  118 => 33,  114 => 31,  108 => 30,  101 => 28,  98 => 27,  90 => 26,  87 => 25,  83 => 24,  80 => 23,  78 => 22,  74 => 20,  70 => 19,  66 => 17,  64 => 16,  60 => 15,  55 => 14,  51 => 12,  47 => 10,  45 => 9,  41 => 8,  36 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="box-block">*/
/*    <h4 class="box-heading">{{ heading_title }}</h4>*/
/*     <ul class="accordion box-content"  id="accordion-1">*/
/*     {% for category in categories %}*/
/*             <li>*/
/*             {% if category.category_id == category_id %}*/
/*                 <a href="{{ category.href }}" class="active">*/
/*                     {{ category.name }}*/
/*                     {% if category.children %}*/
/*                         <span class="pull-right"><i class="fa fa-angle-down"></i></span>*/
/*                     {% endif %}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ category.href }}">*/
/*                     {{ category.name }}*/
/*                     {% if category.children %}*/
/*                         <span class="pull-right"><i class="fa fa-angle-down"></i></span>*/
/*                     {% endif %}*/
/*                 </a>*/
/*             {% endif %}    */
/*             */
/*             {% if category.children %}*/
/*                 <ul class="sub-menu">*/
/*                     {% for child in category.children %}*/
/*                     {% if child.category_id == child_id %}*/
/*                         <li><a href="{{ child.href }}" class="active"><i class="fa fa-angle-right"></i> {{ child.name }}</a></li> */
/*                     {% else %} */
/*                         <li><a href="{{ child.href }}" class=""><i class="fa fa-angle-right"></i> {{ child.name }}</a></li>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                 </ul>  */
/*             {% endif %}*/
/*             */
/*             </li>*/
/*     {% endfor %}*/
/*     </ul>  */
/* </div>*/
/* <script type="text/javascript">*/
/* $(document).ready(function($){*/
/*            $('#accordion-1').dcAccordion({*/
/*                  eventType: 'hover',*/
/*                  autoClose: true,*/
/*                  disableLink: false,*/
/*                  speed: 'fast',*/
/*                  showCount: false,*/
/*                  autoExpand: true,*/
/*                  saveState: false,*/
/*                  classActive  : 'active',    // Class of active parent link*/
/*                  hoverDelay   : 100,    // Hover delay for hoverIntent plugin*/
/*                  classExpand  : 'dcjq-current-parent'*/
/*              });*/
/*                             $('#accordion-2').dcAccordion({*/
/*                                 eventType: 'click',*/
/*                                 autoClose: false,*/
/*                                 saveState: true,*/
/*                                 disableLink: true,*/
/*                                 speed: 'fast',*/
/*                                 classActive: 'test',*/
/*                                 showCount: true*/
/*                             });*/
/*                             $('#accordion-3').dcAccordion({*/
/*                                 eventType: 'click',*/
/*                                 autoClose: false,*/
/*                                 saveState: false,*/
/*                                 disableLink: false,*/
/*                                 showCount: false,*/
/*                                 speed: 'slow'*/
/*                             });*/
/*                             $('#accordion-4').dcAccordion({*/
/*                                 eventType: 'hover',*/
/*                                 autoClose: true,*/
/*                                 saveState: true,*/
/*                                 disableLink: true,*/
/*                                 menuClose: false,*/
/*                                 speed: 'slow',*/
/*                                 showCount: true*/
/*                             });*/
/*                             $('#accordion-5').dcAccordion({*/
/*                                 eventType: 'hover',*/
/*                                 autoClose: false,*/
/*                                 saveState: true,*/
/*                                 disableLink: true,*/
/*                                 menuClose: true,*/
/*                                 speed: 'fast',*/
/*                                 showCount: true*/
/*                             });*/
/*                             $('#accordion-6').dcAccordion({*/
/*                     eventType: 'hover',*/
/*                     autoClose: false,*/
/*                     saveState: false,*/
/*                     disableLink: false,*/
/*                     showCount: false,*/
/*                     menuClose: true,*/
/*                     speed: 'slow'*/
/*                   });*/
/*          });*/
/* </script>*/
/* */
/* */
