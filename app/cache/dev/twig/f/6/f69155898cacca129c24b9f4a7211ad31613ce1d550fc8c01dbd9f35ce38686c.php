<?php

/* PimImportExportBundle:ImportProfile:create.html.twig */
class __TwigTemplate_65b8fc196b313070ab6b5af7760a86c35be8a19563caed2cf6210bd32ff54d00 extends Twig_Template
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
        $context["actionRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_import_profile_create");
        // line 2
        $context["dataTitle"] = "popin.create.import_profile.title";
        // line 3
        echo "
";
        // line 4
        $this->loadTemplate("PimImportExportBundle:JobProfile:create.html.twig", "PimImportExportBundle:ImportProfile:create.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ImportProfile:create.html.twig";
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
/* {% set actionRoute = path('pim_importexport_import_profile_create') %}*/
/* {% set dataTitle   = 'popin.create.import_profile.title' %}*/
/* */
/* {% include 'PimImportExportBundle:JobProfile:create.html.twig' %}*/
/* */
