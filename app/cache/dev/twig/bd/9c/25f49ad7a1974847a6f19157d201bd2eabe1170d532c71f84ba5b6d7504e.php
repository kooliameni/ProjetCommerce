<?php

/* SonataMediaBundle:Gallery:index.html.twig */
class __TwigTemplate_bd9c25f49ad7a1974847a6f19157d201bd2eabe1170d532c71f84ba5b6d7504e extends Twig_Template
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
";
        // line 12
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the gallery index template. Feel free to override it.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 13
        echo "
<ul>
    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "galleries"));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_gallery_view", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier($context["gallery"]))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Gallery:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  34 => 16,  30 => 15,  26 => 13,  22 => 12,  19 => 11,);
    }
}
