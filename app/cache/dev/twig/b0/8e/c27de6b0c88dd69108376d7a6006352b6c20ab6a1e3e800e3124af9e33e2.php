<?php

/* CadyUserBundle:Default:commande.html.twig */
class __TwigTemplate_b08ec27de6b0c88dd69108376d7a6006352b6c20ab6a1e3e800e3124af9e33e2 extends Twig_Template
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
        echo "   <div class=\"breadcrumbs\">
\t\t\t<div class=\"container main\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">PAge d'accueil</a></li><li>/</li><li class=\"active\"><a href=\"#\">Commander</a></li>
\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>\t

\t\t<div class=\"main_content\">
\t\t\t<div class=\"container main\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"span9 checkout_area\">
\t\t\t\t\t<h2 class=\"title-wrap\">
\t\t\t\t\t\tCheckout Informaiton
\t\t\t\t\t</h2>
\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t<div role=\"tablist\" class=\"ui-accordion ui-widget ui-helper-reset\" id=\"accordion\">
\t\t\t\t\t\t\t<h3 tabindex=\"0\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-0\" id=\"ui-accordion-accordion-header-0\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 1: <span>Checkout Information</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-0\" id=\"ui-accordion-accordion-panel-0\" style=\"display: none;\" class=\"row ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t<div class=\"checkout_info\">
\t\t\t\t\t\t\t\t<div class=\"span4 new_customer\">
\t\t\t\t\t\t\t\t\t<h2>New Customer</h2>
\t\t\t\t\t\t\t\t\t<div class=\"customer_select\">
\t\t\t\t\t\t\t\t\t\t<p>Mauris mauris ante</p>
\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"account\" value=\"register\" type=\"radio\"><div class=\"account_name\">Register</div>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"account\" value=\"guest\" type=\"radio\"><div class=\"account_name\">Guest</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<p>Mauris dapibus quam id turpis dignissim rutrum. Phasellus placerat nunc.</p>
\t\t\t\t\t\t\t\t\t<button class=\"register\">Continue</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"span4 returning_customer\">
\t\t\t\t\t\t\t\t\t<h2>Returning Customer</h2>
\t\t\t\t\t\t\t\t\t<div class=\"customer_select\">
\t\t\t\t\t\t\t\t\t\t<p>I'm a returning customer</p>
\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<label><small>Email<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"email\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<label><small>Password<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t\t<input name=\"password\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t\t<p class=\"forgot_pass\">Forgot your password</p>
\t\t\t\t\t\t\t\t\t<button class=\"register\">Login</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-1\" id=\"ui-accordion-accordion-header-1\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 2: <span>Billing Information</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-1\" id=\"ui-accordion-accordion-panel-1\" style=\"display: none;\" class=\"ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"delivery_details\">
\t\t\t\t\t\t\t\t\t<h2>Billing Details</h2>
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Name<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Last Name<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"lastname\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Address Line 1<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"address\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Address Line 2<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"address\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Cell Phone No<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"cellphone\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>State<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"state\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>City<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"city\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Country<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"country\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-2\" id=\"ui-accordion-accordion-header-2\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 3: <span>Delivery Details</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-2\" id=\"ui-accordion-accordion-panel-2\" style=\"display: none;\" class=\"ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"delivery_details\">
\t\t\t\t\t\t\t\t\t<h2>Delivery Details</h2>
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Name<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"name\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Last Name<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"lastname\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Address Line 1<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"address\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Address Line 2<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"address\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Cell Phone No<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"cellphone\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>State<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"state\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>City<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"city\" class=\"width\" size=\"42\" tabindex=\"1\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label><small>Country<strong>*</strong></small></label>
\t\t\t\t\t\t\t\t\t\t\t<input name=\"country\" class=\"width\" size=\"42\" tabindex=\"2\" type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-3\" id=\"ui-accordion-accordion-header-3\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 4: <span>Payment Methods</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-3\" id=\"ui-accordion-accordion-panel-3\" style=\"display: none;\" class=\"ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"delivery_details\">
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<h2>Direct Bank Transfer</h2>
\t\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. 
Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, 
mauris turpis porttitor velit.</p>
\t\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"direct_bank\" type=\"radio\"><div class=\"account_name\">Direct Bank Transfer</div>
\t\t\t\t\t\t\t\t\t\t<h2>Cheque Payment</h2>
\t\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. 
Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, 
mauris turpis porttitor velit.</p>
\t\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"cheque\" type=\"radio\"><div class=\"account_name\">Cheque Payment</div>
\t\t\t\t\t\t\t\t\t\t<h2>Cash on Delivery</h2>
\t\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. 
Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, 
mauris turpis porttitor velit.</p>
\t\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"cash\" type=\"radio\"><div class=\"account_name\">Cash on Delivery</div>
\t\t\t\t\t\t\t\t\t\t<h2>PayPal</h2>
\t\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. 
Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, 
mauris turpis porttitor velit.</p>
\t\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"paypal\" type=\"radio\"><div class=\"account_name\">PayPal</div>
\t\t\t\t\t\t\t\t\t\t<h2>Moneybookers</h2>
\t\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. 
Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, 
mauris turpis porttitor velit.</p>
\t\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"moneybookers\" type=\"radio\"><div class=\"account_name\">Moneybookers</div>\t\t
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-4\" id=\"ui-accordion-accordion-header-4\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 5: <span>Confirm Orders</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-4\" id=\"ui-accordion-accordion-panel-4\" style=\"display: none;\" class=\"ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"delivery_details confirm_details\">
\t\t\t\t\t\t\t\t\t<input name=\"payment\" value=\"moneybookers\" type=\"checkbox\"><div class=\"account_name\"><p>Sed
 non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet 
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis 
porttitor velit.</p></div>
\t\t\t\t\t\t\t\t\t<button class=\"confirm_btn\">Confirm</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h3 tabindex=\"-1\" aria-selected=\"false\" aria-controls=\"ui-accordion-accordion-panel-5\" id=\"ui-accordion-accordion-header-5\" role=\"tab\" class=\"ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons\"><span class=\"ui-accordion-header-icon ui-icon ui-icon-triangle-1-e\"></span>Step 6: <span>Account &amp; Billing Details</span></h3>
\t\t\t\t\t\t\t<div aria-hidden=\"true\" aria-expanded=\"false\" role=\"tabpanel\" aria-labelledby=\"ui-accordion-accordion-header-5\" id=\"ui-accordion-accordion-panel-5\" style=\"display: none;\" class=\"ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom\">
\t\t\t\t\t\t\t\t<div class=\"delivery_details\">
\t\t\t\t\t\t\t\t<h2>Account &amp; Billing Details</h2>
\t\t\t\t\t\t\t\t\t<p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum
 sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris 
turpis porttitor velit, faucibus interdum tellus libero ac justo. 
Vivamus non quam. In suscipit faucibus urna. </p>
\t\t\t\t\t\t\t\t\t<div class=\"row total_cost\">
\t\t\t\t\t\t\t\t\t\t<div class=\"span6 total_cost_section\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"total_cart_cost\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart_level\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>sub-total:</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Eco-tax(-2.00)</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Vat (10.0%):</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span>total:</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart_amount\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>\$1170.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"tax\">\$2.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"vat\">\$117.00</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p><span>\$1053.00</span></p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"total_cart_cost_btn\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"checkout\">checkout</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"continue\">continue</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t

\t\t\t\t</div>
\t\t\t\t<div class=\"span3 widget-area\">
\t\t\t\t\t<div class=\"right-sidebar\">
\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t<div class=\"widget-title\">Categories</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Dresses</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Bags &amp; Purses</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Coats &amp; Jackets</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Designer</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Jeans</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Jewellery &amp; Watches</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t<div class=\"widget-title\">By Price</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div class=\"widget-price\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">0 - \$1,700.00</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$20 - \$2,800.00</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$50 - \$2,900.00</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$75 - \$3,990.00</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">\$100 - \$4,600.00</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t<div class=\"widget-title\">Color</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div class=\"widget-price\">
\t\t\t\t\t\t\t\t<select class=\"select_color\">
\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"red\">Red</option>
\t\t\t\t\t\t\t\t\t<option value=\"blue\">Blue</option>
\t\t\t\t\t\t\t\t\t<option value=\"green\">Green</option>
\t\t\t\t\t\t\t\t\t<option value=\"yellow\">yellow</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t<div class=\"widget-title\">Manufacturer</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Bike\" type=\"checkbox\"><div class=\"brand_name\">Adidas</div></div>
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Car\" type=\"checkbox\"><div class=\"brand_name\">Nike</div></div>
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Bike\" type=\"checkbox\"><div class=\"brand_name\">T-Shirt</div></div>
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Car\" type=\"checkbox\"><div class=\"brand_name\">Puma</div></div> 
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Bike\" type=\"checkbox\"><div class=\"brand_name\">Denim</div></div>
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Car\" type=\"checkbox\"><div class=\"brand_name\">Dedeman</div></div> 
\t\t\t\t\t\t\t\t\t<div><input name=\"vehicle\" value=\"Car\" type=\"checkbox\"><div class=\"brand_name\">New wear</div></div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-info\">
\t\t\t\t\t\t\t<div class=\"widget-title\">View History</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<div class=\"history-product-image\">\t
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"checkout_files/htstory.png\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"feature-post-content\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<button class=\"shop-now\">Shop Now</button> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>\t
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>\t
\t\t\t</div>
\t\t\t
\t\t</div> 
";
    }

    // line 304
    public function block_footer($context, array $blocks = array())
    {
        $this->displayParentBlock("footer", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Default:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 304,  39 => 4,  36 => 3,  30 => 2,);
    }
}
