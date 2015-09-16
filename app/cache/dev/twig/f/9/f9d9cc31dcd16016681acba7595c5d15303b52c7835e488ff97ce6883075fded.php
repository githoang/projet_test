<?php

/* OroEmailBundle:EmailTemplate:index.html.twig */
class __TwigTemplate_a4bc832399106bf7741b0e4fbccaee1157e3c9c68ce21fe6727901baabe048a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEmailBundle:EmailTemplate:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:EmailTemplate:index.html.twig", 2);
        // line 3
        $context["gridName"] = "email-templates";
        // line 4
        $context["pageTitle"] = "Email Templates";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_email_emailtemplate_create")) {
            // line 8
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_create"), "title" => "Create template", "label" => "Create template"));
            // line 14
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:EmailTemplate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:index.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% set gridName = 'email-templates' %}*/
/* {% set pageTitle = 'Email Templates' %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_email_emailtemplate_create') %}*/
/*         {{ UI.addButton(*/
/*             {*/
/*                 'path' : path('oro_email_emailtemplate_create'),*/
/*                 'title' : 'Create template',*/
/*                 'label' : 'Create template'*/
/*             }*/
/*         ) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
