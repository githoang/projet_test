<?php

/* PimImportExportBundle:ExportProfile:index.html.twig */
class __TwigTemplate_159b9dbc4ed49991ef7e76ca6055e7a9ec0aedc11d15d0ebb7701b563f71f8b2 extends Twig_Template
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
        // line 1
        $context["entityName"] = "export profile";
        // line 2
        $context["gridName"] = "export-profile-grid";
        // line 3
        $context["createRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_create");
        // line 4
        $context["createRouteAcl"] = "pim_importexport_export_profile_create";
        // line 5
        $context["jobType"] = "export";
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("PimImportExportBundle:JobProfile:index.html.twig", "PimImportExportBundle:ExportProfile:index.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ExportProfile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set entityName     = 'export profile' %}*/
/* {% set gridName       = 'export-profile-grid' %}*/
/* {% set createRoute    = path('pim_importexport_export_profile_create') %}*/
/* {% set createRouteAcl = 'pim_importexport_export_profile_create' %}*/
/* {% set jobType        = 'export' %}*/
/* */
/* {% include 'PimImportExportBundle:JobProfile:index.html.twig' %}*/
/* */
