<?php

/* PimImportExportBundle:JobProfile:index.html.twig */
class __TwigTemplate_ae443998c0637421fccca32b4c76d7de9ee129c79d7f7209e2fee9e5ef99fdac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimImportExportBundle::layout.html.twig", "PimImportExportBundle:JobProfile:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimImportExportBundle:JobProfile:index.html.twig", 2);
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
        ob_start();
        // line 7
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 =>         // line 8
(isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")), 1 =>         // line 9
(isset($context["createRoute"]) ? $context["createRoute"] : $this->getContext($context, "createRoute")), 2 => "dialog", 3 =>         // line 11
(isset($context["createRouteAcl"]) ? $context["createRouteAcl"] : $this->getContext($context, "createRouteAcl"))), "method"), "html", null, true);
        // line 12
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => $this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".overview")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 17
        echo $context["dataGrid"]->getrenderStatefulGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("jobType" => (isset($context["jobType"]) ? $context["jobType"] : $this->getContext($context, "jobType"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 17,  52 => 15,  49 => 14,  45 => 12,  43 => 11,  42 => 9,  41 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimImportExportBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set buttons %}*/
/*         {{ elements.createBtn(*/
/*             entityName,*/
/*             createRoute,*/
/*             'dialog',*/
/*             createRouteAcl*/
/*         ) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header((entityName ~ '.overview')|trans, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid(gridName, { jobType: jobType }) }}*/
/* */
/* {% endblock %}*/
/* */
