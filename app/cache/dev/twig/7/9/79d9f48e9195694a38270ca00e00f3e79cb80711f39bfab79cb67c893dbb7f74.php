<?php

/* PimEnrichBundle:AssociationType:index.html.twig */
class __TwigTemplate_a5d688537e700d9cde1f7ee5b4e8449d2cd3f178a1840a7dd8dcba985e0d4e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:AssociationType:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:AssociationType:index.html.twig", 2);
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
        $context["title"] = $this->env->getExtension('translator')->trans("association type.overview");
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "association type", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_create"), 2 => "dialog", 3 => "pim_enrich_association_type_create"), "method"), "html", null, true);
        // line 14
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 19
        echo $context["dataGrid"]->getrenderStatefulGrid("association-type-grid", array("localeCode" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode()));
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AssociationType:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 19,  54 => 17,  51 => 16,  47 => 14,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set title = 'association type.overview'|trans %}*/
/* */
/*     {% set buttons %}*/
/*         {{ elements.createBtn(*/
/*             'association type',*/
/*             path('pim_enrich_association_type_create'),*/
/*             'dialog',*/
/*             'pim_enrich_association_type_create'*/
/*         ) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('association-type-grid', { localeCode: locale_code() }) }}*/
/* */
/* {% endblock %}*/
/* */
