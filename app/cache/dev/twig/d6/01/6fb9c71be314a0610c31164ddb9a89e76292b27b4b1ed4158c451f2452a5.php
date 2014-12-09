<?php

/* CadyUserBundle::Default/layout.html.twig */
class __TwigTemplate_d6016fb9c71be314a0610c31164ddb9a89e76292b27b4b1ed4158c451f2452a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
        // line 88
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "                        
\t\t";
        // line 90
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
\t<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\" />
\t\t<meta name=\"viewport\" content=\"width=device-width\" />
\t\t<title>CaddyHome</title>
\t
\t<!-- Font CSS Link -->
\t    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
\t\t<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
\t<!-- Font CSS Link -->\t
\t\t
\t<!-- Start CSS Link -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/custom_responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/menu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/supermenu.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/bounce_slider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/jcarousel.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/jquery.bxslider.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />\t
\t\t<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/grid-list.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/accrodin.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/ui.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/css/jquery.jqzoom.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
\t<!-- End CSS Link -->
\t
\t</head>
\t<body>
\t\t<div class=\"header\">
\t\t\t<div class=\"container main\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"currency_translator span5\">\t
\t\t\t\t\t\t\t<div class=\"currency\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"account_login span7\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul class=\"account_info\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/my_account.png"), "html", null, true);
        echo "\"> MON COMPTE</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"wish_list.html\"><img alt=\"\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/mywish_list.png"), "html", null, true);
        echo "\"> MA LISTE</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"cart.html\"><img alt=\"\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/shopping_cart.png"), "html", null, true);
        echo "\"> MON PANIER</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"checkout.html\"><img alt=\"\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/checkout.png"), "html", null, true);
        echo "\"> MES COMMANDES</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"log_in.html\"><img alt=\"\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/log_out.png"), "html", null, true);
        echo "\">SE CONNECTER</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"header_top\">
\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t<a href=\"index.html\">
\t\t\t\t\t\t\t\t<div class=\"logo\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"call_info span4\">
\t\t\t\t\t\t\t<p>TELEPHONE: <span class=\"color\"> 71 800 900</span></p>
\t\t\t\t\t\t\t<p>APPELEZ-NOUS DU LUNDI - DIMANCHE: 9:00 - 22:00 </p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cart_info span3\">
\t\t\t\t\t\t\t<div class=\"cart_data\">MES COURSES - 0.00DT</div>
\t\t\t\t\t\t\t<button class=\"cart_btn btn btn-navbar\" data-toggle=\"collapse\" data-target=\".item_cart_wrap\"><img alt=\"\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/shopping_cart_btn_img.png"), "html", null, true);
        echo "\"></button>
\t\t\t\t\t\t\t<div class=\"item_cart_content\">
\t\t\t\t\t\t\t\t<div class=\"item_cart_wrap collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"item_cart\">
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_products\">Vide</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Shipping - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"item_cart_info\">Total - \$0.00</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"checkout\">Commander</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"cart\">Panier</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t\t";
    }

    // line 88
    public function block_body($context, array $blocks = array())
    {
        echo " ";
    }

    // line 90
    public function block_footer($context, array $blocks = array())
    {
        // line 91
        echo "                    
\t\t<div class=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container main\" id=\"footer-top\">
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Information</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">About Us</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Site Map</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Why Buy From Us</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Shipping _ Returns</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Secure Shopping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">International Shipping</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Affiliates</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Group Sales</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">My Account</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Sign In</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Customer Service</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">My Wishlist</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Track My Order</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Help</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span3 footer-col\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Newsletter</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"mail\" placeholder=\"Your E-mail Address\">
\t\t\t\t\t\t\t\t\t<button class=\"go_btn\">Go</button>
\t\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t\t<p>Store Location: <span>8601 Creat Labaratory, New York, D05 86GR</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<div class=\"container main\" id=\"footer-bottom\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"span8 footer-col\">
\t\t\t\t\t\t\tCopyright &#169; 2013 <a href=\"#\">Fedimo</a>. All rights reserved.
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span4 footer-col\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/payment-getway/1.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/payment-getway/2.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/payment-getway/3.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/payment-getway/4.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img alt=\"\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/payment-getway/5.png"), "html", null, true);
        echo "\"></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<!-- Start JS Link -->
\t\t<script src=\"js/js-engine.js\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/superfish.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/modernizr.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.bounceslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.jcarousel.min.js"), "html", null, true);
        echo "\"> </script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/responsiveslides.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery-ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.mixitup.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/mixitop-inline.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/ga.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/cloudflare.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/init_form.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/jquery.jqzoom-core.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t<script type=\"text/javascript\" src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/js/custom.js"), "html", null, true);
        echo "\"></script>
\t<!-- End JS Link -->\t\t
\t</body>
</html>


";
    }

    public function getTemplateName()
    {
        return "CadyUserBundle::Default/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  376 => 198,  372 => 197,  368 => 196,  364 => 195,  360 => 194,  356 => 193,  352 => 192,  348 => 191,  344 => 190,  340 => 189,  336 => 188,  332 => 187,  328 => 186,  324 => 185,  320 => 184,  316 => 183,  312 => 182,  308 => 181,  304 => 180,  300 => 179,  296 => 178,  284 => 169,  280 => 168,  276 => 167,  272 => 166,  268 => 165,  192 => 91,  189 => 90,  183 => 88,  160 => 69,  138 => 50,  134 => 49,  130 => 48,  126 => 47,  122 => 46,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  37 => 2,  34 => 1,  30 => 90,  27 => 89,  24 => 88,  22 => 1,);
    }
}
