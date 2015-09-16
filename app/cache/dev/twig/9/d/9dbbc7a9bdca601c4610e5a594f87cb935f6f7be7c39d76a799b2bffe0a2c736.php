<?php

/* PimImportExportBundle:JobExecution:index.html.twig */
class __TwigTemplate_cf4da714443976b01f76c680b9ab937e8ba155de28c82b7e71ad0c995116cfc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimImportExportBundle::layout.html.twig", "PimImportExportBundle:JobExecution:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimImportExportBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimImportExportBundle:JobExecution:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "method"), "html", null, true);
        echo "

    ";
        // line 8
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("jobType" => (isset($context["jobType"]) ? $context["jobType"] : $this->getContext($context, "jobType"))));
        echo "

    <div id=\"job-report-grid\"></div>

";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobExecution:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimImportExportBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ elements.page_header(title) }}*/
/* */
/*     {{ dataGrid.renderGrid(gridName, { jobType: jobType }) }}*/
/* */
/*     <div id="job-report-grid"></div>*/
/* */
/* {% endblock %}*/
/* */
