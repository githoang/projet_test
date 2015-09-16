<?php

/* OroEntityConfigBundle:Config:update.html.twig */
class __TwigTemplate_9888b0258f58434db2981f5b3e5086b3ceec2a0680bd5cf205bfb13361bfcb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityConfigBundle:Config:update.html.twig", 1);
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
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entityconfig_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())));
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
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
            echo "

        ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"), "html", null, true);
            echo "
        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 20
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => (($this->getAttribute(        // line 25
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")));
        // line 27
        echo "
    ";
        // line 28
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_stats($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_content_data($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["id"] = "configentity-update";
        // line 37
        echo "    ";
        $context["dataBlocks"] = call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
        // line 38
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 39
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 40
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 42
        echo "
    ";
        // line 43
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 43,  108 => 42,  106 => 40,  105 => 39,  103 => 38,  100 => 37,  97 => 36,  94 => 35,  87 => 32,  84 => 31,  78 => 28,  75 => 27,  73 => 25,  71 => 21,  68 => 20,  61 => 16,  57 => 15,  51 => 13,  48 => 12,  45 => 11,  41 => 1,  39 => 9,  37 => 8,  35 => 7,  33 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* {% oro_title_set({params : {"%entityName%": entity_config.get('label')|default('N/A') }}) %}*/
/* */
/* {% set formAction = path('oro_entityconfig_update', {id: entity.id}) %}*/
/* */
/* {% set audit_entity_class = entity.classname|replace('\\', '_') %}*/
/* {% set audit_title = entity_config.get('label')|default('N/A') %}*/
/* {% set audit_path = 'oro_entityconfig_audit' %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_entityconfig_manage') %}*/
/*         {{ UI.button({'path' : path('oro_entityconfig_view', {id: entity.id}), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/* */
/*         {{ UI.saveAndStayButton() }}*/
/*         {{ UI.saveAndCloseButton() }}*/
/*     {% endif %}*/
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
/*         'dataBlocks': dataBlocks*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
