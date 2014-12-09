<?php

/* SonataMediaBundle:Block:block_feature_media.html.twig */
class __TwigTemplate_97009d87634bc9dfead5956fa90df0d0cd4669422d67cca106d936c897a5b433 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates", array()), "block_base", array()));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"sonata-media-block-feature-media-container\">

        <div class=\"sonata-media-block-feature-media-container-";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "orientation", array()), "html", null, true);
        echo "\">
            ";
        // line 18
        if (($this->getContext($context, "media") && $this->getAttribute($this->getContext($context, "settings"), "format", array()))) {
            // line 19
            echo "                ";
            echo $this->env->getExtension('sonata_media')->media($this->getContext($context, "media"), $this->getAttribute($this->getContext($context, "settings"), "format", array()), array());
            // line 20
            echo "            ";
        } else {
            // line 21
            echo "                ";
            // line 22
            echo "            ";
        }
        // line 23
        echo "        </div>

        ";
        // line 25
        if ($this->getAttribute($this->getContext($context, "settings"), "title", array())) {
            // line 26
            echo "            <h3 class=\"sonata-media-block-feature-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "title", array()), "html", null, true);
            echo "</h3>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-media-block-feature-media-content\">
            ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "content", array()), "html", null, true);
        echo "
        </div>

        <div style=\"clear: both\"></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_feature_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 30,  63 => 28,  57 => 26,  55 => 25,  51 => 23,  48 => 22,  46 => 21,  43 => 20,  40 => 19,  38 => 18,  34 => 17,  29 => 14,  26 => 13,);
    }
}
