<?php

/* PimEnrichBundle:Currency:index.html.twig */
class __TwigTemplate_d6c46852af03619ef15ba2d7a6c4e0ca8c00e3701cc2ac19fa1edd7a30ae3b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Currency:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Currency:index.html.twig", 2);
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
        $context["title"] = $this->env->getExtension('translator')->trans("currency.overview");
        // line 7
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "method"), "html", null, true);
        echo "

    ";
        // line 10
        echo $context["dataGrid"]->getrenderStatefulGrid("currency-grid");
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Currency:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set title = 'currency.overview'|trans %}*/
/* */
/*     {{ elements.page_header(title) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('currency-grid') }}*/
/* */
/* {% endblock %}*/
/* */
