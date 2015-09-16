<?php

/* OroEntityExtendBundle:ConfigEntityGrid:update.html.twig */
class __TwigTemplate_69ec7992add07423c2053bc0d3f82f5ad6e6235fdb8bfde9ce656f0f8e46e92a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigEntityGrid:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 3
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 5
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entityextend_entity_update");
        // line 7
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classname", array()), "\\", "_");
        // line 8
        $context["audit_title"] = (($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"));
        // line 9
        $context["audit_path"] = "oro_entityconfig_audit";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "

    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"), "html", null, true);
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 18
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => (($this->getAttribute(        // line 23
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")));
        // line 25
        echo "
    ";
        // line 26
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_stats($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_content_data($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        $context["id"] = "configentity-update";
        // line 35
        echo "    ";
        $context["dataBlocks"] = call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
        // line 36
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 37
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 38
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), "hiddenData" =>         // line 39
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
        // line 41
        echo "
    ";
        // line 42
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigEntityGrid:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  105 => 41,  103 => 39,  102 => 38,  101 => 37,  99 => 36,  96 => 35,  93 => 34,  90 => 33,  83 => 30,  80 => 29,  74 => 26,  71 => 25,  69 => 23,  67 => 19,  64 => 18,  58 => 15,  54 => 14,  48 => 12,  45 => 11,  41 => 1,  39 => 9,  37 => 8,  35 => 7,  33 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* {% oro_title_set({params : {"%entityName%": entity_config.get('label')|default('N/A') }}) %}*/
/* */
/* {% set formAction = path('oro_entityextend_entity_update') %}*/
/* */
/* {% set audit_entity_class = entity.classname|replace('\\', '_') %}*/
/* {% set audit_title = entity_config.get('label')|default('N/A') %}*/
/* {% set audit_path = 'oro_entityconfig_audit' %}*/
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
/*         'entityTitle': entity_config.get('label')|default('N/A'),*/
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
/*     {% set id = 'configentity-update' %}*/
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
