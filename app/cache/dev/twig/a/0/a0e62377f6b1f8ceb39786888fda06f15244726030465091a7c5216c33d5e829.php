<?php

/* PimImportExportBundle:ImportExecution:show.html.twig */
class __TwigTemplate_842e4ac257814ec6db574909f96282d209d66ab4916a41d2a2f4abaca52c22fb extends Twig_Template
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
        $context["indexRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_import_execution_index");
        // line 2
        echo "
";
        // line 3
        $context["download_log_route"] = "pim_importexport_import_execution_download_log";
        // line 4
        $context["download_file_route"] = "pim_importexport_import_execution_download_file";
        // line 5
        $context["show_profile_route"] = "pim_importexport_import_profile_show";
        // line 6
        $context["refresh_route"] = "pim_importexport_import_execution_show";
        // line 7
        echo "
";
        // line 8
        $this->loadTemplate("PimImportExportBundle:JobExecution:show.html.twig", "PimImportExportBundle:ImportExecution:show.html.twig", 8)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ImportExecution:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set indexRoute = path('pim_importexport_import_execution_index') %}*/
/* */
/* {% set download_log_route = 'pim_importexport_import_execution_download_log' %}*/
/* {% set download_file_route = 'pim_importexport_import_execution_download_file' %}*/
/* {% set show_profile_route  = 'pim_importexport_import_profile_show' %}*/
/* {% set refresh_route       = 'pim_importexport_import_execution_show' %}*/
/* */
/* {% include 'PimImportExportBundle:JobExecution:show.html.twig' %}*/
/* */
