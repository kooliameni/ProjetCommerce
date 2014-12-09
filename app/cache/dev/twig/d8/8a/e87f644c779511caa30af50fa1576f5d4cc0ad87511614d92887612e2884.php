<?php

/* CadyUserBundle:Default:categorie.html.twig */
class __TwigTemplate_d88ae87f644c779511caa30af50fa1576f5d4cc0ad87511614d92887612e2884 extends Twig_Template
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
        echo "      
    <div class=\"navigation navbar\">
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
        // line 23
        echo $this->env->getExtension('routing')->getPath("cady_user");
        echo "\">Page d'accueil</a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"deeper parent dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("categorieglob");
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tCatégorie
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
                                                                        
                                                                                ";
        // line 31
        echo $this->env->getExtension('actions')->renderUri("CadyUserBundle:Default:index", array());
        echo "                                                                        

                                                                            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie", array("id" => $this->getAttribute($context["categorie"], "idcategorie", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a></li>
                                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        // line 55
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

 
        <ul>
        
               ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "produits"));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 74
            echo "        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("cady_user");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</a></li>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "    </ul>
    
";
    }

    // line 80
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 80,  153 => 77,  141 => 74,  137 => 73,  116 => 55,  95 => 36,  85 => 34,  79 => 33,  74 => 31,  66 => 26,  60 => 23,  39 => 4,  36 => 3,  30 => 2,);
    }
}
