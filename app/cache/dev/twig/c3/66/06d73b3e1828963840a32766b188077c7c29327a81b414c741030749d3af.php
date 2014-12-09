<?php

/* SonataMediaBundle:Block:block_media.html.twig */
class __TwigTemplate_c36606d73b3e1828963840a32766b188077c7c29327a81b414c741030749d3af extends Twig_Template
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
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "settings"), "title", array())) {
            // line 15
            echo "        <h3 class=\"sonata-media-block-media-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "settings"), "title", array()), "html", null, true);
            echo "</h3>
    ";
        }
        // line 17
        echo "
    <div class=\"sonata-media-block-media-container\">
        ";
        // line 19
        if (($this->getContext($context, "media") && $this->getAttribute($this->getContext($context, "settings"), "format", array()))) {
            // line 20
            echo "            ";
            echo $this->env->getExtension('sonata_media')->media($this->getContext($context, "media"), $this->getAttribute($this->getContext($context, "settings"), "format", array()), array());
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            ";
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 24,  52 => 23,  50 => 22,  47 => 21,  44 => 20,  42 => 19,  38 => 17,  32 => 15,  29 => 14,  26 => 13,);
    }
}
