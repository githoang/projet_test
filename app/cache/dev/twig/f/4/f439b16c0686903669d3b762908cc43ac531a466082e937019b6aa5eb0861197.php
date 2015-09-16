<?php

/* PimEnrichBundle:Group:index.html.twig */
class __TwigTemplate_5c50646b9713f156414dafe0cfeeb3fa2e876895c4b7d18c1b1f62ace0ff1d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Group:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Group:index.html.twig", 2);
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
        $context["title"] = $this->env->getExtension('translator')->trans("group.overview");
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        if ((isset($context["groupTypes"]) ? $context["groupTypes"] : $this->getContext($context, "groupTypes"))) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "group", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_group_create"), 2 => "dialog", 3 => "pim_enrich_group_create"), "method"), "html", null, true);
            // line 15
            echo "
        ";
        } elseif ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_group_type_index")) {
            // line 17
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("pim_enrich_group_type_index");
            echo "\">
                <span class=\"label link-label\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.group.no group types"), "html", null, true);
            echo "</span>
            </a>
        ";
        }
        // line 21
        echo "    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 25
        echo $context["dataGrid"]->getrenderStatefulGrid("group-grid", array("localeCode" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode(), "groupTypes" => (isset($context["groupTypes"]) ? $context["groupTypes"] : $this->getContext($context, "groupTypes"))));
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  71 => 23,  68 => 22,  65 => 21,  59 => 18,  54 => 17,  50 => 15,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set title = 'group.overview'|trans %}*/
/* */
/*     {% set buttons %}*/
/*         {% if groupTypes %}*/
/*             {{ elements.createBtn(*/
/*                 'group',*/
/*                 path('pim_enrich_group_create'),*/
/*                 'dialog',*/
/*                 'pim_enrich_group_create'*/
/*             ) }}*/
/*         {% elseif resource_granted('pim_enrich_group_type_index') %}*/
/*             <a href="{{ path('pim_enrich_group_type_index') }}">*/
/*                 <span class="label link-label">{{ 'info.group.no group types'|trans }}</span>*/
/*             </a>*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('group-grid', {localeCode: locale_code(), groupTypes: groupTypes}) }}*/
/* */
/* {% endblock %}*/
/* */
