<?php

/* PimImportExportBundle:ImportProfile:index.html.twig */
class __TwigTemplate_cd5a4a94379224f5f9ebe3cd852b5fc82ba8c1dbfdf09c060f95ebe6b03e7968 extends Twig_Template
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
        $context["entityName"] = "import profile";
        // line 2
        $context["gridName"] = "import-profile-grid";
        // line 3
        $context["createRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_import_profile_create");
        // line 4
        $context["createRouteAcl"] = "pim_importexport_import_profile_create";
        // line 5
        $context["jobType"] = "import";
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("PimImportExportBundle:JobProfile:index.html.twig", "PimImportExportBundle:ImportProfile:index.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ImportProfile:index.html.twig";
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
/* {% set entityName     = 'import profile' %}*/
/* {% set gridName       = 'import-profile-grid' %}*/
/* {% set createRoute    = path('pim_importexport_import_profile_create') %}*/
/* {% set createRouteAcl = 'pim_importexport_import_profile_create' %}*/
/* {% set jobType        = 'import' %}*/
/* */
/* {% include 'PimImportExportBundle:JobProfile:index.html.twig' %}*/
/* */
