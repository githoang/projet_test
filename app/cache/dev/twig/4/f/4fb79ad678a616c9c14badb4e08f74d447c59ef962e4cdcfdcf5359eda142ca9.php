<?php

/* OroOrganizationBundle:BusinessUnit:index.html.twig */
class __TwigTemplate_7063f694f770d5865783cef40549ac8e7cfd213ee8a5929177a0357c24bfbb82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroOrganizationBundle:BusinessUnit:index.html.twig", 1);
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit:index.html.twig", 2);
        // line 3
        $context["gridName"] = "business-unit-grid";
        // line 4
        $context["pageTitle"] = "Business Units";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_create")) {
            // line 8
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_business_unit_create"), "title" => "Create business unit", "label" => "Create business unit"));
            // line 12
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  41 => 8,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:index.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% set gridName = 'business-unit-grid' %}*/
/* {% set pageTitle = 'Business Units' %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_business_unit_create') %}*/
/*         {{ UI.addButton({*/
/*             'path' : path('oro_business_unit_create'),*/
/*             'title' : 'Create business unit',*/
/*             'label' : 'Create business unit'*/
/*         }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
