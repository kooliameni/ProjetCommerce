<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_5c90bac87c0741665bfae710eb569a337385c626c293e2c551b71ef70658d466 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "hasassociationadmin", array()))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement($this->getContext($context, "value"), $this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array())), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "formfielddescriptions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), $this->getAttribute($context["field_description"], "name", array()), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin", array()), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value", array())), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute($this->getContext($context, "sonata_admin"), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "options", array()), "link_parameters", array()))), array());
                    // line 29
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin", true), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "options", array()), "placeholder", array()))) {
                    // line 30
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 34
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 36
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 39
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "\" >
                ";
                // line 40
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
                echo "
            </span>
        ";
            }
            // line 43
            echo "
        <span id=\"field_actions_";
            // line 44
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 46
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_list"))) {
                // line 47
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 48
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-info btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-list\"></i>
                        ";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_list"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 56
            echo "
                ";
            // line 57
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && $this->getContext($context, "btn_add"))) {
                // line 58
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 59
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-success btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_add"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 67
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 70
            if ((((($this->getAttribute($this->getContext($context, "sonata_admin"), "edit", array()) == "list") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && $this->getContext($context, "btn_delete"))) {
                // line 71
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 72
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-danger btn-sm btn-outline sonata-ba-action\"
                        title=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "\"
                        >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
                // line 77
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "btn_delete"), array(), $this->getContext($context, "btn_catalogue")), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 80
            echo "            </span>
        </span>

        ";
            // line 83
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig")->display($context);
            // line 84
            echo "    </div>

    ";
            // line 86
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 86,  188 => 84,  186 => 83,  181 => 80,  175 => 77,  169 => 74,  164 => 72,  161 => 71,  159 => 70,  154 => 67,  148 => 64,  142 => 61,  137 => 59,  132 => 58,  130 => 57,  127 => 56,  121 => 53,  115 => 50,  110 => 48,  105 => 47,  103 => 46,  98 => 44,  95 => 43,  89 => 40,  84 => 39,  78 => 36,  74 => 34,  68 => 31,  65 => 30,  62 => 29,  59 => 23,  57 => 22,  52 => 21,  50 => 20,  45 => 19,  35 => 16,  30 => 15,  24 => 13,  22 => 12,  19 => 11,);
    }
}
