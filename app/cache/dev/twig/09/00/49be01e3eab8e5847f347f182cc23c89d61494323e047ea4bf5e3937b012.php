<?php

/* CadyUserBundle:Default:panier.html.twig */
class __TwigTemplate_090049be01e3eab8e5847f347f182cc23c89d61494323e047ea4bf5e3937b012 extends Twig_Template
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
        echo " 
    
\t\t<div class=\"breadcrumbs\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">Page d'accueil</a></li><li>/</li><li class=\"active\"><a href=\"#\">Panier</a></li>
\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>

\t\t<div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t\t<div class=\"checkout_area\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\tPAnier
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
\t\t\t\t\t\t\t\t\t<p> Nom de Produit</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span2 cart_quantity\">
\t\t\t\t\t\t\t\t\t<p>Quantité</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span3 cart_total_price\">
\t\t\t\t\t\t\t\t\t<p>Prix Total</p>
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
\t\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"cart_files/1_002.png\">
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
\t\t\t\t\t\t\t\t\t<img alt=\"\" src=\"cart_files/2_002.png\">
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
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"checkout_area cart_area_accordion\">
\t\t\t\t\t\t<div role=\"tablist\" class=\"ui-accordion ui-widget ui-helper-reset\" id=\"accordion\">
\t\t\t\t\t\t\t<div tabindex=\"0\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-0\" id=\"ui-accordion-accordion-header-0\" role=\"tab\" class=\"row ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>
\t\t\t\t\t\t\t\t<h3>Estimate &amp; Shipping Tax</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-0\" id=\"ui-accordion-accordion-panel-0\" style=\"display: none;\" class=\"row ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"checkout_info delivery_details\">
\t\t\t\t\t\t\t\t\t<h2>Account &amp; Billing Details</h2>
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Cart Subtotal:</small></label>
\t\t\t\t\t\t\t\t\t\t\t<p><b>\$1170.00</b></p>
\t\t\t\t\t\t\t\t\t\t\t<label><small>Shipping:</small></label>
\t\t\t\t\t\t\t\t\t\t\t<p><b>\$0.00 (Shipping Free)</b></p>
\t\t\t\t\t\t\t\t\t\t\t<label><small>Order Total:</small></label>
\t\t\t\t\t\t\t\t\t\t\t<p><b>\$1170.00</b></p>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-1\" id=\"ui-accordion-accordion-header-1\" role=\"tab\" class=\"row ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>
\t\t\t\t\t\t\t\t<h3>Apply Discount Code</h3>
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-1\" id=\"ui-accordion-accordion-panel-1\" style=\"display: none;\" class=\"checkout_info delivery_details cuppon_arena ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum 
sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t<input id=\"cupon\" placeholder=\"Discaount Code\" type=\"text\">
\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-2\" id=\"ui-accordion-accordion-header-2\" role=\"tab\" class=\"row ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>
\t\t\t\t\t\t\t\t<h3>Use Gift Voucher</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-2\" id=\"ui-accordion-accordion-panel-2\" style=\"display: none;\" class=\"row ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"checkout_info delivery_details\">
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t\t<p>Curabitur non nulla sit amet nisl tempus convallis quis ac 
lectus. Donec sollicitudin molestie malesuada. Nulla quis lorem ut 
libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. 
Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget 
consectetur sed, convallis at tellus. Proin eget tortor risus. 
Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero 
malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum 
sed sit amet dui.</p>
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t  \$(function() {
\t\t\t\t\t\t\t\$( \"#accordion\" ).accordion({
\t\t\t\t\t\t\t  collapsible: true,
\t\t\t\t\t\t\t  autoHeight:false,
\t\t\t\t\t\t\t});
\t\t\t\t\t\t  });
\t\t\t\t\t\t</script>\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row total_cost\">
\t\t\t\t\t\t<div class=\"span6 gap_section\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span6 total_cost_section\">
\t\t\t\t\t\t\t<div class=\"total_cart_cost\">
\t\t\t\t\t\t\t\t<div class=\"cart_level\">
\t\t\t\t\t\t\t\t\t<p>sub-total:</p>
\t\t\t\t\t\t\t\t\t<p>Eco-tax(-2.00)</p>
\t\t\t\t\t\t\t\t\t<p>Vat (10.0%):</p>
\t\t\t\t\t\t\t\t\t<p><span>total:</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"cart_amount\">
\t\t\t\t\t\t\t\t\t<p>\$1170.00</p>
\t\t\t\t\t\t\t\t\t<p class=\"tax\">\$2.00</p>
\t\t\t\t\t\t\t\t\t<p class=\"vat\">\$117.00</p>
\t\t\t\t\t\t\t\t\t<p><span>\$1053.00</span></p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"total_cart_cost_btn\">
\t\t\t\t\t\t\t\t<button class=\"checkout\">checkout</button>
\t\t\t\t\t\t\t\t<button class=\"continue\">continue</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t
";
    }

    // line 208
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 208,  36 => 3,  30 => 2,);
    }
}
