<?php

/* PimImportExportBundle:ExportProfile:show.html.twig */
class __TwigTemplate_e15c8f9ec2deee6eea796337c89e22d996762045e2fc237e021959bcc40b7e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimImportExportBundle:JobProfile:show.html.twig", "PimImportExportBundle:ExportProfile:show.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimImportExportBundle:JobProfile:show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%job.label%" => $this->getAttribute(        // line 3
(isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "label", array()))));
        // line 5
        $context["entityName"] = "export profile";
        // line 6
        $context["action"] = "export";
        // line 7
        $context["indexRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_index");
        // line 8
        $context["editRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_edit", array("id" => $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "id", array())));
        // line 9
        $context["launchRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_launch", array("id" => $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "id", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ExportProfile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,  35 => 9,  33 => 8,  31 => 7,  29 => 6,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'PimImportExportBundle:JobProfile:show.html.twig' %}*/
/* */
/* {% oro_title_set({ params: {"%job.label%": jobInstance.label } }) %}*/
/* */
/* {% set entityName  = 'export profile' %}*/
/* {% set action      = 'export' %}*/
/* {% set indexRoute  = path('pim_importexport_export_profile_index') %}*/
/* {% set editRoute   = path('pim_importexport_export_profile_edit', {'id': jobInstance.id}) %}*/
/* {% set launchRoute = path('pim_importexport_export_profile_launch', {'id': jobInstance.id}) %}*/
/* */
