<?php

/* CadyUserBundle:Default:favori.html.twig */
class __TwigTemplate_0ece37dd61c199b7173657dcf6fe75bb4dfa38b8a7a6c15eebe9a853bbea23ff extends Twig_Template
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
        echo "    <div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"checkout_area\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\tListe favorie
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"cart_area\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"cart_area_heading\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span3 cart_remove\">
\t\t\t\t\t\t\t\t\t<p>Supprimer</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_image\">
\t\t\t\t\t\t\t\t\t<p>Image</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_product_name\">
\t\t\t\t\t\t\t\t\t<p> Nom de produit</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_quantity\">
\t\t\t\t\t\t\t\t\t<p>Quantitée</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3 cart_total_price\">
\t\t\t\t\t\t\t\t\t<p>Prix total</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart_area_list\">
\t\t\t\t\t\t\t\t<div class=\"cart_area_content\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"span3 cart_remove\">
\t\t\t\t\t\t\t\t\t\t<p><input name=\"product1\" value=\"product1\" type=\"checkbox\"></p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"span2 cart_image\">
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"wish_liste_files/1_002.png\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"span2 cart_product_name\">
\t\t\t\t\t\t\t\t\t\t<p>Mordern Dress</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"span2 cart_quantity\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"span3 cart_total_price\">
\t\t\t\t\t\t\t\t\t\t<p>\$500</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"cart_area_list\">
\t\t\t\t\t\t\t<div class=\"cart_area_content\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"span3 cart_remove\">
\t\t\t\t\t\t\t\t\t<p><input name=\"product1\" value=\"product1\" type=\"checkbox\"></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_image\">
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"wish_liste_files/2_002.png\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_product_name\">
\t\t\t\t\t\t\t\t\t<p>Mordern Dress</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_quantity\">
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"1\">1</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3 cart_total_price\">
\t\t\t\t\t\t\t\t\t<p>\$500</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
";
    }

    // line 104
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:favori.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 104,  39 => 4,  36 => 3,  30 => 2,);
    }
}
