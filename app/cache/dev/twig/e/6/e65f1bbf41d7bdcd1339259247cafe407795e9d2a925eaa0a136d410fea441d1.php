<?php

/* PimEnrichBundle:VariantGroup:index.html.twig */
class __TwigTemplate_40b55fa74c2bf1c16240fe7ee02035102d2afa0f7c989197d78d1e84d9e66586 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:VariantGroup:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:VariantGroup:index.html.twig", 2);
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
        $context["title"] = $this->env->getExtension('translator')->trans("variant group.overview");
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "variant group", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_create"), 2 => "dialog", 3 => "pim_enrich_variant_group_create"), "method"), "html", null, true);
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
        echo $context["dataGrid"]->getrenderStatefulGrid("variant-group-grid", array("localeCode" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode(), "groupTypes" => (isset($context["groupTypes"]) ? $context["groupTypes"] : $this->getContext($context, "groupTypes"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup:index.html.twig";
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
/*     {% set title = 'variant group.overview'|trans %}*/
/* */
/*     {% set buttons %}*/
/*         {{ elements.createBtn(*/
/*             'variant group',*/
/*             path('pim_enrich_variant_group_create'),*/
/*             'dialog',*/
/*             'pim_enrich_variant_group_create'*/
/*         ) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('variant-group-grid', {localeCode: locale_code(), groupTypes: groupTypes}) }}*/
/* */
/* {% endblock %}*/
/* */
