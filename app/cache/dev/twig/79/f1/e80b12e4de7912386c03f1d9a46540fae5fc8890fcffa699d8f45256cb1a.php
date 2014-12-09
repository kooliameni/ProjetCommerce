<?php

/* SonataMediaBundle:Provider:view_vimeo.html.twig */
class __TwigTemplate_79f1e80b12e4de7912386c03f1d9a46540fae5fc8890fcffa699d8f45256cb1a extends Twig_Template
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
        // line 11
        echo "

<iframe
    id=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "id", array()), "html", null, true);
        echo "\"
    src=\"//player.vimeo.com/video/";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "media"), "providerreference", array()), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "src", array()), "html", null, true);
        echo "\"
    width=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "width", array()), "html", null, true);
        echo "\"
    height=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "height", array()), "html", null, true);
        echo "\"
    frameborder=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "options"), "frameborder", array()), "html", null, true);
        echo "\">
</iframe>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_vimeo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  38 => 17,  34 => 16,  28 => 15,  24 => 14,  19 => 11,);
    }
}
