<?php

/* PimImportExportBundle:ImportExecution:index.html.twig */
class __TwigTemplate_22be5ce310c647bd8c9aaf392171c7412de6566a448ed74dd32c2597655131cd extends Twig_Template
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
        $context["title"] = $this->env->getExtension('translator')->trans("import report.overview");
        // line 2
        $context["gridName"] = "import-execution-grid";
        // line 3
        $context["jobType"] = "import";
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("PimImportExportBundle:JobExecution:index.html.twig", "PimImportExportBundle:ImportExecution:index.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ImportExecution:index.html.twig";
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
/* {% set title    = 'import report.overview'|trans %}*/
/* {% set gridName = 'import-execution-grid' %}*/
/* {% set jobType  = 'import' %}*/
/* */
/* {% include 'PimImportExportBundle:JobExecution:index.html.twig' %}*/
/* */
