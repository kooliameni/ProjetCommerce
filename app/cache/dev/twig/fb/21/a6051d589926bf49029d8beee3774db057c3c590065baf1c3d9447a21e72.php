<?php

/* CadyUserBundle:Block:block_my_newsletter.html.twig */
class __TwigTemplate_fb21a6051d589926bf49029d8beee3774db057c3c590065baf1c3d9447a21e72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_block($context, array $blocks = array())
    {
        // line 4
        echo "    <p> hhh </p>
";
    }

    public function getTemplateName()
    {
        return "CadyUserBundle:Block:block_my_newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
