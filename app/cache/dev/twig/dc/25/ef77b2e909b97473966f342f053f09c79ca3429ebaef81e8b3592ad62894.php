<?php

/* CadyUserBundle:Default:connexion.html.twig */
class __TwigTemplate_dc25ef77b2e909b97473966f342f053f09c79ca3429ebaef81e8b3592ad62894 extends Twig_Template
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $this->displayParentBlock("header", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"breadcrumbs\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("cady_user");
        echo "\">Accueil</a></li><li>&#47;</li><li class=\"active\"><a href=\"#\">Log In</a></li>
\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>\t

\t\t<div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span9 checkout_area\">
\t\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\t\tInformaiton
\t\t\t\t\t\t</h2>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div id=\"log_in_info\">
\t\t\t\t\t\t\t\t<h3>Etape1: <span>Information</span></h3>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"checkout_info log_in_content span9\">
\t\t\t\t\t\t\t\t\t\t<div class=\"span4 new_customer\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Nouveaux client ?</h2>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"register\">S'inscrire</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"span4 returning_customer\">
\t\t\t\t\t\t\t\t\t\t\t<h2>Déjas Client ?</h2>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"customer_select\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><small>Email<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"width\" value=\"\" size=\"42\" tabindex=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label><small>Motdepasse<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"password\" class=\"width\" value=\"\" size=\"42\" tabindex=\"2\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<button class=\"register\">Se connecter</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span3 widget-area\">
\t\t\t\t\t\t<div class=\"right-sidebar\">
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Categories</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bags & Purses</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Coats & Jackets</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Designer</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Jeans</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Jewellery & Watches</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">By Price</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-price\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">0 - \$1,700.00</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$20 - \$2,800.00</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$50 - \$2,900.00</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$75 - \$3,990.00</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$100 - \$4,600.00</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Color</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-price\">
\t\t\t\t\t\t\t\t\t<select class=\"select_color\">
\t\t\t\t\t\t\t\t\t\t<option value=\"red\">Red</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"blue\">Blue</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"green\">Green</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"yellow\">yellow</option>
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">Manufacturer</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Bike\"><div class=\"brand_name\">Adidas</div></div>
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Car\"><div class=\"brand_name\">Nike</div></div>
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Bike\"><div class=\"brand_name\">T-Shirt</div></div>
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Car\"><div class=\"brand_name\">Puma</div></div> 
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Bike\"><div class=\"brand_name\">Denim</div></div>
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Car\"><div class=\"brand_name\">Dedeman</div></div> 
\t\t\t\t\t\t\t\t\t\t<div><input type=\"checkbox\" name=\"vehicle\" value=\"Car\"><div class=\"brand_name\">New wear</div></div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t\t<div class=\"widget-title\">View History</div>
\t\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<div class=\"history-product-image\">\t
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"images/product-list/htstory.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div id=\"feature-post-content\">
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<button class=\"shop-now\">Shop Now</button> 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t</div>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
    
    ";
    }

    // line 132
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 132,  44 => 8,  39 => 5,  36 => 4,  30 => 3,);
    }
}
