<?php

/* PimEnrichBundle:GroupType:index.html.twig */
class __TwigTemplate_763628eb541f04eb758aa6aea1db9abf8005d082f175866ea3df47ca536ffeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:GroupType:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:GroupType:index.html.twig", 2);
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
        if ( !array_key_exists("title", $context)) {
            // line 7
            echo "        ";
            $context["title"] = $this->env->getExtension('translator')->trans("group type.overview");
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ( !array_key_exists("buttons", $context)) {
            // line 11
            echo "        ";
            ob_start();
            // line 12
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "group type", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_group_type_create"), 2 => "dialog", 3 => "pim_enrich_group_type_create"), "method"), "html", null, true);
            // line 17
            echo "
        ";
            $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "    ";
        }
        // line 20
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 23
        echo $context["dataGrid"]->getrenderStatefulGrid("group-type-grid", array("localeCode" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode()));
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:GroupType:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  66 => 21,  63 => 20,  60 => 19,  56 => 17,  53 => 12,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if title is not defined %}*/
/*         {% set title = 'group type.overview'|trans %}*/
/*     {% endif %}*/
/* */
/*     {% if buttons is not defined %}*/
/*         {% set buttons %}*/
/*             {{ elements.createBtn(*/
/*                 'group type',*/
/*                 path('pim_enrich_group_type_create'),*/
/*                 'dialog',*/
/*                 'pim_enrich_group_type_create'*/
/*             ) }}*/
/*         {% endset %}*/
/*     {% endif %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('group-type-grid', { localeCode: locale_code() }) }}*/
/* */
/* {% endblock %}*/
/* */
