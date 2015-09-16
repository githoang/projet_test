<?php

/* PimImportExportBundle:ExportExecution:index.html.twig */
class __TwigTemplate_aad3855eb1dd71df00f8f76314f8c8aa5a98ba24faf3d5f9e74c39602f09b02d extends Twig_Template
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
        $context["title"] = $this->env->getExtension('translator')->trans("export report.overview");
        // line 2
        $context["gridName"] = "export-execution-grid";
        // line 3
        $context["jobType"] = "export";
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("PimImportExportBundle:JobExecution:index.html.twig", "PimImportExportBundle:ExportExecution:index.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ExportExecution:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set title    = 'export report.overview'|trans %}*/
/* {% set gridName = 'export-execution-grid' %}*/
/* {% set jobType  = 'export' %}*/
/* */
/* {% include 'PimImportExportBundle:JobExecution:index.html.twig' %}*/
/* */
