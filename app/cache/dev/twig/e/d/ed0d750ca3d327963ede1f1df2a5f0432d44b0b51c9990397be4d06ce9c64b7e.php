<?php

/* PimImportExportBundle:ExportProfile:create.html.twig */
class __TwigTemplate_ba8f4b61b0ee018df312118b05ac2e8647a62c66e49bbca351f3961883cb4d86 extends Twig_Template
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
        $context["actionRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_create");
        // line 2
        $context["dataTitle"] = "popin.create.export_profile.title";
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("PimImportExportBundle:JobProfile:create.html.twig", "PimImportExportBundle:ExportProfile:create.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ExportProfile:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set actionRoute = path('pim_importexport_export_profile_create') %}*/
/* {% set dataTitle   = 'popin.create.export_profile.title' %}*/
/* */
/* {% include 'PimImportExportBundle:JobProfile:create.html.twig' %}*/
/* */
