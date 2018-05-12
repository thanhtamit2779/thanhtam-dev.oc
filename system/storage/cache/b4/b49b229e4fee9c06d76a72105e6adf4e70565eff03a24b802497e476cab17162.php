<?php

/* default/template/common/header.twig */
class __TwigTemplate_45720d40e5ae961abfdab7662edfa43cb99f85c38e312f44818cc1593511c13e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 8
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 9
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 10
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 11
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 13
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 14
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 16
        echo "
<!-- CSS : BOOTSTRAP 3.3.7 BETA -->
<link href=\"public/assets/common/bootstrap-3.3.7/css/bootstrap.css\" rel=\"stylesheet\" media=\"screen\" />

<!-- CSS : Font Awesome -->
<link href=\"public/assets/common/font-awesome-4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />

<!-- CSS : FONT ROBOTO -->
<link href=\"https://fonts.googleapis.com/css?family=Lato|Roboto&amp;subset=vietnamese\" rel=\"stylesheet\">

<!-- CSS : STYLE - DEVELOPER -->
<link href=\"public/assets/css/style.css?v=123\" rel=\"stylesheet\" type=\"text/css\" />

<!-- CSS : REPONSIVE -->
<link href=\"public/assets/css/responsive.css?v=123\" rel=\"stylesheet\" type=\"text/css\" />

<!-- CSS : HIỆU ỨNG ANIMATION -->
<link href=\"public/assets/css/animation.css?v=123\" rel=\"stylesheet\" type=\"text/css\" />

<!-- CSS : CAROUSEL -->
<link href=\"public/plugins/owl.carousel/owl.carousel.css?v=123\" rel=\"stylesheet\" type=\"text/css\" />

<!-- CSS : MENU -->
<link href=\"public/plugins/menu/horizontal/css/stellarnav.css?v=123\" rel=\"stylesheet\" type=\"text/css\" />

<!-- JAVASCRIPT : JQUERY 3.2.1 -->
<script src=\"public/assets/common/jquery.min.js?v=12345\" type=\"text/javascript\"></script>

<!-- JAVASCRIPT : BOOTSTRAP 3.3.7 -->
<script src=\"public/assets/common/bootstrap-3.3.7/js/bootstrap.js\" type=\"text/javascript\"></script>

";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 48
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 52
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 56
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
</head>
<body>

<!-- HEADER : HEADER-TOP + HEADER-BOTTOM -->
<header class=\"header\">
  <section class=\"header-top\">
    <div class=\"container\">
      <div class=\"row\">
        <span id=\"icon-category\" class=\"hidden pull-left\">
            <span class=\"icon-show-category\" style=\"display:block\"><i class=\"fa fa-bars\" aria-hidden=\"true\"></i> ";
        // line 68
        echo (isset($context["text_all_category"]) ? $context["text_all_category"] : null);
        echo "</span>
            <span class=\"icon-show-category\" style=\"display:none\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> ";
        // line 69
        echo (isset($context["text_all_category"]) ? $context["text_all_category"] : null);
        echo "</span>   
        </span>
        <div class=\"top-menu\">
          <ul class=\"list-inline metro main-menu\">
              <li class=\"mobile-search hidden\">
                ";
        // line 74
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
              </li>
              ";
        // line 76
        if ((isset($context["text_menu"]) ? $context["text_menu"] : null)) {
            // line 77
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["text_menu"]) ? $context["text_menu"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 78
                echo "                    <li>
                      <a href=\"";
                // line 79
                echo (isset($context["base"]) ? $context["base"] : null);
                echo $this->getAttribute($context["menu"], "link", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["menu"], "name", array());
                echo "\">
                        <i class=\"";
                // line 80
                echo $this->getAttribute($context["menu"], "icon", array());
                echo "\" aria-hidden=\"true\"></i> <span>";
                if ($this->getAttribute($context["menu"], "name", array())) {
                    echo " ";
                    echo $this->getAttribute($context["menu"], "name", array());
                    echo " ";
                }
                echo "</span>
                      </a>
                    </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "              ";
        }
        // line 85
        echo "              <li>";
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "</li> 
              <li>";
        // line 86
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "</li>  
          </ul>
        </div>     
      </div>
    </div>  
  </section>
  <!-- / section.header-top -->

  <section class=\"header-bottom\">
    <div class=\"container\">
      <div class=\"row vertical-center\">
        <div class=\"col-xs-12 col-sm-3 col-md-3 logo\">
          ";
        // line 98
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 99
            echo "            <a href=\"";
            echo (isset($context["base"]) ? $context["base"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\"><img src=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" class=\"img-responsive\" /></a>
          ";
        } else {
            // line 101
            echo "             <h1><a href=\"";
            echo (isset($context["base"]) ? $context["base"] : null);
            echo "\" title=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" alt=\"";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 103
        echo "        </div>
        <div class=\"col-xs-12 col-sm-5 col-md-5 header-bottom-search hidden-xs\">
          ";
        // line 105
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "
        </div>
        <div class=\"col-xs-5 col-sm-4 col-md-4 header-bottom-group-button hidden-xs\">
          <ul class=\"horizontal-center pull-right\">
              <!-- GIỎ HÀNG -->
              <li class=\"cart-clock hidden-xs\">";
        // line 110
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</li>

              <!-- SẢN PHẨM YÊU THÍCH -->
              <li class=\"wishlist-clock\">
                  <a href=\"";
        // line 114
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" class=\"vertical-center\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\">
                      <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i>
                  </a>
              </li>
          
              <!-- PHONE -->
              <li class=\"phone-clock\">
                  <a href=\"tel:";
        // line 121
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" title=\"";
        echo (isset($context["text_contact_us"]) ? $context["text_contact_us"] : null);
        echo "\">
                    <i class=\"fa fa-phone\" aria-hidden=\"true\"></i>
                  </a>  
              </li>
          </ul>
        </div>
      </div>  
    </div> 
  </section>
  <!-- / section.header-bottom -->
  
  <nav id=\"menu\">
      <div class=\"container\">
          <div class=\"row stellarnav\">";
        // line 134
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "</div>
      </div>
  </nav>
  <!-- / nav#menu -->    
</header>
<!-- / header  .header -->
<script type=\"text/javascript\">
  
  // MENU RESPONSIVE
  \$(document).ready(function() {
    \$('.stellarnav').stellarNav({
          theme\t\t     : 'light',
          sticky     \t : true,   
          closeBtn     : true,
          scrollbarFix : false,
          position\t   : 'left', 
          //locationBtn\t : 'http://test.com.vn',
          showArrows\t : true,
          text_menu    : '";
        // line 152
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "'
    });

    \$('.top-menu').stellarNav({
          theme\t\t     : 'light',
          sticky     \t : true,   
          closeBtn     : true,
          scrollbarFix : false,
          position\t   : 'left', 
          //locationBtn\t : 'http://test.com.vn',
          showArrows\t : true,
          //text_menu    : '";
        // line 163
        echo (isset($context["text_category"]) ? $context["text_category"] : null);
        echo "'
    });  
  });

</script>    
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 163,  325 => 152,  304 => 134,  286 => 121,  274 => 114,  267 => 110,  259 => 105,  255 => 103,  243 => 101,  227 => 99,  225 => 98,  210 => 86,  205 => 85,  202 => 84,  186 => 80,  179 => 79,  176 => 78,  171 => 77,  169 => 76,  164 => 74,  156 => 69,  152 => 68,  140 => 58,  132 => 56,  128 => 55,  125 => 54,  114 => 52,  110 => 51,  107 => 50,  94 => 48,  90 => 47,  57 => 16,  51 => 14,  49 => 13,  43 => 11,  41 => 10,  37 => 9,  33 => 8,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* */
/* <!-- CSS : BOOTSTRAP 3.3.7 BETA -->*/
/* <link href="public/assets/common/bootstrap-3.3.7/css/bootstrap.css" rel="stylesheet" media="screen" />*/
/* */
/* <!-- CSS : Font Awesome -->*/
/* <link href="public/assets/common/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- CSS : FONT ROBOTO -->*/
/* <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&amp;subset=vietnamese" rel="stylesheet">*/
/* */
/* <!-- CSS : STYLE - DEVELOPER -->*/
/* <link href="public/assets/css/style.css?v=123" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- CSS : REPONSIVE -->*/
/* <link href="public/assets/css/responsive.css?v=123" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- CSS : HIỆU ỨNG ANIMATION -->*/
/* <link href="public/assets/css/animation.css?v=123" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- CSS : CAROUSEL -->*/
/* <link href="public/plugins/owl.carousel/owl.carousel.css?v=123" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- CSS : MENU -->*/
/* <link href="public/plugins/menu/horizontal/css/stellarnav.css?v=123" rel="stylesheet" type="text/css" />*/
/* */
/* <!-- JAVASCRIPT : JQUERY 3.2.1 -->*/
/* <script src="public/assets/common/jquery.min.js?v=12345" type="text/javascript"></script>*/
/* */
/* <!-- JAVASCRIPT : BOOTSTRAP 3.3.7 -->*/
/* <script src="public/assets/common/bootstrap-3.3.7/js/bootstrap.js" type="text/javascript"></script>*/
/* */
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* */
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* */
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* */
/* </head>*/
/* <body>*/
/* */
/* <!-- HEADER : HEADER-TOP + HEADER-BOTTOM -->*/
/* <header class="header">*/
/*   <section class="header-top">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <span id="icon-category" class="hidden pull-left">*/
/*             <span class="icon-show-category" style="display:block"><i class="fa fa-bars" aria-hidden="true"></i> {{ text_all_category }}</span>*/
/*             <span class="icon-show-category" style="display:none"><i class="fa fa-times" aria-hidden="true"></i> {{ text_all_category }}</span>   */
/*         </span>*/
/*         <div class="top-menu">*/
/*           <ul class="list-inline metro main-menu">*/
/*               <li class="mobile-search hidden">*/
/*                 {{ search }}*/
/*               </li>*/
/*               {% if text_menu %}*/
/*                   {% for menu in text_menu %}*/
/*                     <li>*/
/*                       <a href="{{ base }}{{ menu.link }}" title="{{ menu.name }}">*/
/*                         <i class="{{ menu.icon }}" aria-hidden="true"></i> <span>{% if menu.name %} {{ menu.name }} {% endif %}</span>*/
/*                       </a>*/
/*                     </li>*/
/*                   {% endfor %}*/
/*               {% endif %}*/
/*               <li>{{ currency }}</li> */
/*               <li>{{ language }}</li>  */
/*           </ul>*/
/*         </div>     */
/*       </div>*/
/*     </div>  */
/*   </section>*/
/*   <!-- / section.header-top -->*/
/* */
/*   <section class="header-bottom">*/
/*     <div class="container">*/
/*       <div class="row vertical-center">*/
/*         <div class="col-xs-12 col-sm-3 col-md-3 logo">*/
/*           {% if logo %}*/
/*             <a href="{{ base }}" title="{{ name }}" alt="{{ name }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*           {% else %}*/
/*              <h1><a href="{{ base }}" title="{{ name }}" alt="{{ name }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="col-xs-12 col-sm-5 col-md-5 header-bottom-search hidden-xs">*/
/*           {{ search }}*/
/*         </div>*/
/*         <div class="col-xs-5 col-sm-4 col-md-4 header-bottom-group-button hidden-xs">*/
/*           <ul class="horizontal-center pull-right">*/
/*               <!-- GIỎ HÀNG -->*/
/*               <li class="cart-clock hidden-xs">{{ cart }}</li>*/
/* */
/*               <!-- SẢN PHẨM YÊU THÍCH -->*/
/*               <li class="wishlist-clock">*/
/*                   <a href="{{ wishlist }}" class="vertical-center" title="{{ text_wishlist }}">*/
/*                       <i class="fa fa-heart-o" aria-hidden="true"></i>*/
/*                   </a>*/
/*               </li>*/
/*           */
/*               <!-- PHONE -->*/
/*               <li class="phone-clock">*/
/*                   <a href="tel:{{ telephone }}" title="{{ text_contact_us }}">*/
/*                     <i class="fa fa-phone" aria-hidden="true"></i>*/
/*                   </a>  */
/*               </li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>  */
/*     </div> */
/*   </section>*/
/*   <!-- / section.header-bottom -->*/
/*   */
/*   <nav id="menu">*/
/*       <div class="container">*/
/*           <div class="row stellarnav">{{ menu }}</div>*/
/*       </div>*/
/*   </nav>*/
/*   <!-- / nav#menu -->    */
/* </header>*/
/* <!-- / header  .header -->*/
/* <script type="text/javascript">*/
/*   */
/*   // MENU RESPONSIVE*/
/*   $(document).ready(function() {*/
/*     $('.stellarnav').stellarNav({*/
/*           theme		     : 'light',*/
/*           sticky     	 : true,   */
/*           closeBtn     : true,*/
/*           scrollbarFix : false,*/
/*           position	   : 'left', */
/*           //locationBtn	 : 'http://test.com.vn',*/
/*           showArrows	 : true,*/
/*           text_menu    : '{{ text_category }}'*/
/*     });*/
/* */
/*     $('.top-menu').stellarNav({*/
/*           theme		     : 'light',*/
/*           sticky     	 : true,   */
/*           closeBtn     : true,*/
/*           scrollbarFix : false,*/
/*           position	   : 'left', */
/*           //locationBtn	 : 'http://test.com.vn',*/
/*           showArrows	 : true,*/
/*           //text_menu    : '{{ text_category }}'*/
/*     });  */
/*   });*/
/* */
/* </script>    */
/* */
