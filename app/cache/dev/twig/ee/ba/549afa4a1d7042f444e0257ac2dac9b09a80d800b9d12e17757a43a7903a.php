<?php

/* SonataAdminBundle:CRUD:show_trans.html.twig */
class __TwigTemplate_eeba549afa4a1d7042f444e0257ac2dac9b09a80d800b9d12e17757a43a7903a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans($this->getContext($context, "value"));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('translator')->trans($this->getContext($context, "value"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo $this->getContext($context, "value");
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 23,  51 => 21,  49 => 20,  46 => 19,  43 => 18,  40 => 17,  37 => 16,  34 => 15,  31 => 14,  28 => 13,);
    }
}
