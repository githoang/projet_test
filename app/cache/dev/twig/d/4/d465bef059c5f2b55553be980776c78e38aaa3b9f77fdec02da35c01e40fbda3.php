<?php

/* OroEntityExtendBundle:ConfigEntityGrid:create.html.twig */
class __TwigTemplate_187965f1fae0bc3c7accad6f719f025c5c9253272c7d8c581bb9dc48be037d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigEntityGrid:create.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "OroFormBundle:Form:fields.html.twig");

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => "N/A")));
        // line 5
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entityextend_entity_create");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_navButtons($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "

    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"), "html", null, true);
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 14
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => $this->env->getExtension('translator')->trans("New Entity"));
        // line 21
        echo "
    ";
        // line 22
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 25
    public function block_stats($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_content_data($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["id"] = "configentity-create";
        // line 31
        echo "    ";
        $context["dataBlocks"] = call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
        // line 32
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 33
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 34
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), "hiddenData" =>         // line 35
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
        // line 37
        echo "
    ";
        // line 38
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigEntityGrid:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  97 => 37,  95 => 35,  94 => 34,  93 => 33,  91 => 32,  88 => 31,  85 => 30,  82 => 29,  75 => 26,  72 => 25,  66 => 22,  63 => 21,  60 => 15,  57 => 14,  51 => 11,  47 => 10,  41 => 8,  38 => 7,  34 => 1,  32 => 5,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* {% oro_title_set({params : {"%entityName%": 'N/A' }}) %}*/
/* */
/* {% set formAction = path('oro_entityextend_entity_create') %}*/
/* */
/* {% block navButtons %}*/
/*     {{ UI.button({'path' : path('oro_entityconfig_index'), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/* */
/*     {{ UI.saveAndStayButton() }}*/
/*     {{ UI.saveAndCloseButton() }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      'entity',*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': 'New Entity'|trans,*/
/*     } %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block stats %}*/
/*     {{ parent() }}*/
/* {% endblock stats %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'configentity-create' %}*/
/*     {% set dataBlocks = form_data_blocks(form) %}*/
/*     {% set data = {*/
/*         'formErrors': form_errors(form)? form_errors(form) : null,*/
/*         'dataBlocks': dataBlocks,*/
/*         'hiddenData': form_rest(form)*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
