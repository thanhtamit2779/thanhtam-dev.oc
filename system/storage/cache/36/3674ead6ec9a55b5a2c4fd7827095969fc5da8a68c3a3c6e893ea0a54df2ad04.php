<?php

/* default/template/common/footer.twig */
class __TwigTemplate_632cdee0929f5f7ea1935f570eff9d7ed1d1bd8dbd5a22d9cc09d318a856514b extends Twig_Template
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
        echo "<footer class=\"footer\">
  <section class=\"footer-top\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-4 col-xs-12 col-sm-4 col-lg-4 address\">
          <div id=\"address-box\">
              <a href=\"#\">
                  ";
        // line 8
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 9
            echo "                    <img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" />
                  ";
        } else {
            // line 11
            echo "                    <h2>";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</h2>
                  ";
        }
        // line 13
        echo "              </a>
              <div id=\"address-list\">
                  <p>
                    <span class=\"tit-name\"><i class=\"fa fa-map-marker\"></i> ";
        // line 16
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo ":</span>
                    <span class=\"tit-contain\">";
        // line 17
        echo (isset($context["address"]) ? $context["address"] : null);
        echo "</span>
                  </p>

                  <p>
                    <span class=\"tit-name\"><i class=\"fa fa-phone\"></i> ";
        // line 21
        echo (isset($context["text_phone"]) ? $context["text_phone"] : null);
        echo ":</span>
                    <span class=\"tit-contain\">";
        // line 22
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span>
                  </p>  

                  <p>
                    <span class=\"tit-name\"><i class=\"fa fa-envelope\"></i> ";
        // line 26
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo ":</span>
                    <span class=\"tit-contain\">";
        // line 27
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "</span>
                  </p>    
              </div>
          </div> 
        </div>

        ";
        // line 33
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 34
            echo "        <div class=\"col-sm-3 col-xs-12 col-sm-3 col-lg-3 information\">
          <h5><b>";
            // line 35
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</b></h5>
          <ul class=\"list-unstyled list-info\">
          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 38
                echo "            <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          </ul>
        </div>
        ";
        }
        // line 43
        echo "
        <div class=\"col-sm-2 col-md-2 col-lg-2 col-xs-12 account\">
          <h5><b>";
        // line 45
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</b></h5>
          <ul class=\"list-unstyled list-info\">
            <li><a href=\"";
        // line 47
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 48
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 49
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
            <li><a href=\"";
        // line 50
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
          </ul>
        </div>
        <div class=\"col-sm-3 col-md-3 col-lg-3 col-xs-12 social\">
          <iframe src=\"https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthanhtam.it2779%2F&tabs&width=290&height=220&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1008059442661946\" width=\"340\" height=\"220\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\"></iframe>
        </div>
      </div> 
    </div> 
  </section> 
  <section class=\"footer-bottom hidden-xs\">
    <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-sm-12 col-xs-12 col-md-12 col-lg-12\">
            <p>";
        // line 63
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
          </div>  
        </div>
    </div>
  </section>
</footer>
<div class=\"scroll-totop\" id=\"to-top\">
  <span class=\"fa fa-arrow-up\"></span>
</div>

<div class=\"hidden-xs\">
  <a class=\"click-phone\" href=\"tel:";
        // line 74
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\">
    <div class=\"quick-alo-phone quick-alo-green quick-alo-show\" id=\"quick-alo-phoneIcon\" style=\"right: 5px; bottom: : 0px;\">
      <div class=\"info topopup\">
        <div class=\"quick-alo-ph-circle\"></div>
        <div class=\"quick-alo-ph-circle-fill\"></div>
        <div class=\"quick-alo-ph-img-circle\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i></div>
      </div>
    </div>
  </a>
</div>

<!-- SLIDER JSSOR -->
<script src=\"public/plugins/slider/jssor/jssor.slider.min.js\" type=\"text/javascript\"></script>

<!-- CAROUSEL -->
<script src=\"public/plugins/owl.carousel/owl.carousel.min.js\" type=\"text/javascript\"></script>

";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 92
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
<!-- FILE CẤU HÌNH CỦA OPENCART -->
<script src=\"public/assets/js/common.js\" type=\"text/javascript\"></script>

<!-- FILE CẤU HÌNH MY JS -->
<script src=\"public/assets/js/my-js.js\" type=\"text/javascript\"></script>

<!-- MENU -->
<script src=\"public/plugins/menu/horizontal/js/stellarnav.js\" type=\"text/javascript\"></script>

</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  199 => 92,  195 => 91,  175 => 74,  161 => 63,  143 => 50,  137 => 49,  131 => 48,  125 => 47,  120 => 45,  116 => 43,  111 => 40,  100 => 38,  96 => 37,  91 => 35,  88 => 34,  86 => 33,  77 => 27,  73 => 26,  66 => 22,  62 => 21,  55 => 17,  51 => 16,  46 => 13,  40 => 11,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <footer class="footer">*/
/*   <section class="footer-top">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 address">*/
/*           <div id="address-box">*/
/*               <a href="#">*/
/*                   {% if logo %}*/
/*                     <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" />*/
/*                   {% else %}*/
/*                     <h2>{{ name }}</h2>*/
/*                   {% endif %}*/
/*               </a>*/
/*               <div id="address-list">*/
/*                   <p>*/
/*                     <span class="tit-name"><i class="fa fa-map-marker"></i> {{ text_address}}:</span>*/
/*                     <span class="tit-contain">{{ address }}</span>*/
/*                   </p>*/
/* */
/*                   <p>*/
/*                     <span class="tit-name"><i class="fa fa-phone"></i> {{ text_phone }}:</span>*/
/*                     <span class="tit-contain">{{ telephone }}</span>*/
/*                   </p>  */
/* */
/*                   <p>*/
/*                     <span class="tit-name"><i class="fa fa-envelope"></i> {{ text_email }}:</span>*/
/*                     <span class="tit-contain">{{ email }}</span>*/
/*                   </p>    */
/*               </div>*/
/*           </div> */
/*         </div>*/
/* */
/*         {% if informations %}*/
/*         <div class="col-sm-3 col-xs-12 col-sm-3 col-lg-3 information">*/
/*           <h5><b>{{ text_information }}</b></h5>*/
/*           <ul class="list-unstyled list-info">*/
/*           {% for information in informations %}*/
/*             <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="col-sm-2 col-md-2 col-lg-2 col-xs-12 account">*/
/*           <h5><b>{{ text_account }}</b></h5>*/
/*           <ul class="list-unstyled list-info">*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*             <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col-sm-3 col-md-3 col-lg-3 col-xs-12 social">*/
/*           <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthanhtam.it2779%2F&tabs&width=290&height=220&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1008059442661946" width="340" height="220" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>*/
/*         </div>*/
/*       </div> */
/*     </div> */
/*   </section> */
/*   <section class="footer-bottom hidden-xs">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">*/
/*             <p>{{ powered }}</p>*/
/*           </div>  */
/*         </div>*/
/*     </div>*/
/*   </section>*/
/* </footer>*/
/* <div class="scroll-totop" id="to-top">*/
/*   <span class="fa fa-arrow-up"></span>*/
/* </div>*/
/* */
/* <div class="hidden-xs">*/
/*   <a class="click-phone" href="tel:{{ telephone }}">*/
/*     <div class="quick-alo-phone quick-alo-green quick-alo-show" id="quick-alo-phoneIcon" style="right: 5px; bottom: : 0px;">*/
/*       <div class="info topopup">*/
/*         <div class="quick-alo-ph-circle"></div>*/
/*         <div class="quick-alo-ph-circle-fill"></div>*/
/*         <div class="quick-alo-ph-img-circle"><i class="fa fa-phone" aria-hidden="true"></i></div>*/
/*       </div>*/
/*     </div>*/
/*   </a>*/
/* </div>*/
/* */
/* <!-- SLIDER JSSOR -->*/
/* <script src="public/plugins/slider/jssor/jssor.slider.min.js" type="text/javascript"></script>*/
/* */
/* <!-- CAROUSEL -->*/
/* <script src="public/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>*/
/* */
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* */
/* <!-- FILE CẤU HÌNH CỦA OPENCART -->*/
/* <script src="public/assets/js/common.js" type="text/javascript"></script>*/
/* */
/* <!-- FILE CẤU HÌNH MY JS -->*/
/* <script src="public/assets/js/my-js.js" type="text/javascript"></script>*/
/* */
/* <!-- MENU -->*/
/* <script src="public/plugins/menu/horizontal/js/stellarnav.js" type="text/javascript"></script>*/
/* */
/* </body></html>*/
