<?php

/* SonataAdminBundle:CRUD:show_choice.html.twig */
class __TwigTemplate_ff82df21cf1b952c5dbaf65b24b6cd6ee349a6c11d4f1c48740b416a92b80669 extends Twig_Template
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
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "multiple", array()) == true)) && twig_test_iterable($this->getContext($context, "value")))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ((!twig_test_empty($this->getContext($context, "result")))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "delimiter"));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 28
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "catalogue", array())));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $context["val"]);
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = $this->getContext($context, "result");
                // line 38
                echo "
        ";
            } elseif (twig_in_filter($this->getContext($context, "value"), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "choices", array())))) {
                // line 40
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "choices", array()), $this->getContext($context, "value"), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "choices", array()), $this->getContext($context, "value"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "catalogue", array()));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options", array()), "safe", array())) {
            // line 49
            echo "        ";
            echo $this->getContext($context, "value");
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  139 => 51,  133 => 49,  131 => 48,  128 => 47,  125 => 46,  122 => 45,  119 => 44,  116 => 43,  113 => 42,  110 => 41,  107 => 40,  103 => 38,  101 => 37,  98 => 36,  92 => 35,  89 => 34,  86 => 33,  83 => 32,  80 => 31,  77 => 30,  74 => 29,  71 => 28,  68 => 27,  66 => 26,  63 => 25,  60 => 24,  57 => 23,  54 => 22,  50 => 21,  47 => 20,  44 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 15,  31 => 14,  28 => 13,);
    }
}
