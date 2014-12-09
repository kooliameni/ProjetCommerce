<?php

/* CadyUserBundle:Default:index.html.twig */
class __TwigTemplate_a3b11c23f106f1ca97a0ff80d33f0768b8ca0e336bdf6d374dbe46d33f9aac0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CadyUserBundle::Default/layout.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CadyUserBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
        $this->displayParentBlock("header", $context, $blocks);
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"navigation navbar\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"navbar\">
\t\t\t\t\t<div class=\"container main\">
\t 
\t\t\t\t\t<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
\t\t\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t</a>
\t\t\t\t\t<!-- Be sure to leave the brand out there if you want it shown -->
\t 
\t\t\t\t\t<!-- Everything you want hidden at 940px or less, place within here -->
\t\t\t\t\t\t<div class=\"nav-collapse collapse\">
\t\t\t\t\t\t<!-- .nav, .navbar-search, .navbar-form, etc -->
\t\t\t\t\t\t\t<ul class=\"sf-menu\">
\t\t\t\t\t\t\t\t<li class=\"deeper parent current\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("cady_user");
        echo "\">Page d'accueil</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"deeper parent dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("categorieglob");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tCatégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                                                                  ";
        // line 29
        echo $this->env->getExtension('actions')->renderUri("CadyUserBundle:Categorie:categoriListe", array());
        echo " 
                                                                            ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie", array("id" => $this->getAttribute($context["categorie"], "idcategorie", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a></li>
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tPromotions
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"kid.html\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"product_details_kid.html\">Product Details</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"search\">
\t\t\t\t\t\t\t\t<input type=\"search\" name=\"search\" placeholder=\"search\">
\t\t\t\t\t\t\t\t\t<button class=\"search_btn\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/icon_search.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>
\t\t
\t\t<div class=\"main_content\">

\t\t\t<div class=\"container main\" id=\"main-slide\">
\t\t\t\t<div id=\"wrapper\">
\t\t\t\t\t<div class=\"slide-content\">
\t\t\t\t\t\t<div class=\"bounce-slider\" id=\"first\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc right-side\"><span>Meilleurs qualitée de Légumes et Fruits <br/> Hmmmmm C'est fraiche!!!</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/slide1.png"), "html", null, true);
        echo "\" alt=\"image 1\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side\"><span>Votres Petit Déjeuner<br/> est ici </span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/slide2.png"), "html", null, true);
        echo "\" alt=\"image 2\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<p class=\"bounce-desc left-side\"><span>Meilleues prix<br/> Profitez!!</span></p>
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/slide3.png"), "html", null, true);
        echo "\" alt=\"image 3\"/>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<span class=\"next bounce-nav\"></span>\t
\t\t\t\t\t\t\t<span class=\"prev bounce-nav\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>\t

\t\t\t</div>
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"row home-content\">
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_1\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("imagessweater.png"), "html", null, true);
        echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_1\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_1\">Sweater</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_1\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_2\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-content/scarf.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_2\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_2\">Scarf</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_2\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li> 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4 feature-content\">
\t\t\t\t\t\t<div id=\"feature-image_3\">
\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-content/dress.png\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"feature-post-content_3\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li id=\"feature-post-content-title_3\">Dress</li>
\t\t\t\t\t\t\t\t<li>Up to</li>
\t\t\t\t\t\t\t\t<li><p id=\"feature-post-content-discount_3\">40%</p><p>off</p></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><button class=\"shop-now\">Shop Now</button></li> 
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"container main\" id=\"first-carousel-slide\">
\t\t\t\t<div class=\"row list_work\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t<span>Nouveaux Produits</span>
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t<ul id=\"mycarousel\" class=\"jcarousel-skin-tango item da-thumbs\">
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/caduuser/images/01.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/new-product/shoping-info/cart-image.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/new-product/shoping-info/like-img.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t<div class=\"new\"></div>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/cart-image.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/like-img.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/cart-image.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cadyuser/images/like-img.png"), "html", null, true);
        echo "\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">
\t\t\t\t\t\t\t\t<div class=\"sell\"></div>
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/01.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/02.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/03.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"span3 new-product\"> 
\t\t\t\t\t\t\t<div class=\"new-product-image\">\t
\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/new-product/04.jpg\" alt=\"\" /></a>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div class=\"new-product-info\">\t
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t<div class=\"new-product-bg\">
\t\t\t\t\t\t\t\t\t\t<div class=\"newE-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"new-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t<div class=\"new-product-title\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><p>New Modern Dresses</p></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"new-product-content\">
\t\t\t\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, conse adipiscing elit.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>\t\t\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>\t
\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t</div>\t
\t\t\t

\t\t\t<div class=\"container main\" id=\"second-carousel-slide\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span8 p_product\">
\t\t\t\t\t<div class=\"list_work\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\t<span>Popular Products</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"slider2 popular_product\">
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">nouvel arrivage</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/4.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"row slide popular_product_wrap-left\">
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"span4 popular_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/popular-product/4.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"popular_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_title\">Nouveautés</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"popular_pro_content\">Lorem ipsum dolor sit amet conse adipising elit. Eliam nutro polos.</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-info\">\t
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-price\">\$500</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-bg\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart_like\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-cart\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/cart-image.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-like\"><a href=\"#\"><img alt=\"\" src=\"images/new-product/shoping-info/like-img.png\"></a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"popular-product-details\"><a href=\"#\">Details</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t
\t\t\t\t\t</div>
\t\t\t\t\t<br/>
\t\t\t\t</div>
\t\t\t\t<div class=\"span4 feature_product\">
\t\t\t\t\t<div class=\"list_work\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\t<span>Les plus vendus</span>
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div class=\"fslide\">
\t\t\t\t\t\t\t<ul class=\"bxslider\">
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/1.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/2.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"feature_pro\">
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_image\">\t
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/feature-product/3.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"feature_pro_info\">
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_title\">New Modern Dresses</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"feature_pro_content\">Lorem ipsum dolor sit amet conse adipising elit.</p>
\t\t\t\t\t\t\t\t\t\t<button class=\"feature_pro_price\">\$500</button>
\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>\t
\t\t</div>
\t\t\t
\t\t<div class=\"contact_info\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul class=\"row\">
\t\t\t\t\t<li class=\"follow-us span4\">
\t\t\t\t\t\t<div class=\"follow-social\">Retrouver nous sur:</div>
\t\t\t\t\t\t<div class=\"social-icon\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"fb\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/facebook.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"tw\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/twitter.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"rss\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img alt=\"\" src=\"images/social/rss.png\"></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"span4\">
\t\t\t\t\t<div class=\"free-shipping\">
\t\t\t\t\t\t<div class=\"free-shipping-wrap\">
\t\t\t\t\t\t\t<div class=\"free-shipping-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/social/shiping-truck.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"free-shipping-info\">
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info-title\">
\t\t\t\t\t\t\t\t\tLivraison gratuite
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"free-shipping-info\">
\t\t\t\t\t\t\t\t\tA partir de 299DT
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"contact-no span4\">
\t\t\t\t\t\t<div class=\"contact-no-wrap\">
\t\t\t\t\t\t\t<div class=\"contact-no-image\">
\t\t\t\t\t\t\t\t<img alt=\"\" src=\"images/social/telephone.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-no-info\">
\t\t\t\t\t\t\t\t<div id=\"contact-no-info-title\">
\t\t\t\t\t\t\t\t\tCommande en ligne
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br/>
\t\t\t\t\t\t\t\t<div id=\"contact-no-info\">
\t\t\t\t\t\t\t\t\t<p>Tel:</p>
\t\t\t\t\t\t\t\t\t<p id=\"nb\">71 800 900</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>\t
\t\t\t</div>

\t\t</div>
\t\t
                                                                        ";
    }

    // line 720
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  816 => 720,  310 => 216,  306 => 215,  277 => 189,  273 => 188,  243 => 161,  239 => 160,  228 => 152,  169 => 96,  152 => 82,  145 => 78,  138 => 74,  113 => 52,  92 => 33,  82 => 31,  76 => 30,  72 => 29,  65 => 25,  59 => 22,  39 => 4,  36 => 3,  30 => 2,);
    }
}
