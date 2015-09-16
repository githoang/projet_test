<?php

/* OroDataAuditBundle:Audit:index.html.twig */
class __TwigTemplate_f05d522b8f1daf1f11d8a20499ec6fe6d6a3f8951ca1ac18100dfb6f2cd9f84b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroDataAuditBundle:Audit:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDataAuditBundle:Audit:index.html.twig", 2);
        // line 3
        $context["gridName"] = "audit-grid";
        // line 4
        $context["pageTitle"] = "Data Audit";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Audit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  28 => 4,  26 => 3,  24 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:index.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% set gridName = 'audit-grid' %}*/
/* {% set pageTitle = 'Data Audit' %}*/
/* */
