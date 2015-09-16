<?php

/* OroEntityBundle:Entities:update.html.twig */
class __TwigTemplate_39ed494023dfdaf4447afb8b5ab1031a17faabb7dcf7b7347ce55d55631f0e0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityBundle:Entities:update.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 4
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())) ? (("Item #" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))) : (("New " . $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "label"), "method")))))));
        // line 6
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entity_update", array("entity_id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())));
        // line 8
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "getId", array()), "getClassName", array()), "\\", "_");
        // line 9
        $context["audit_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array());
        // line 10
        $context["audit_title"] = (($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entity_index", array("id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "

    ";
        // line 15
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", ("entity:" . (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class"))))) {
            // line 16
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 21
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => (($this->getAttribute(        // line 26
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())) ? (("Item #" . (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "N/A")) : ("N/A")))) : (("New " . $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "label"), "method")))), "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entity_index", array("id" =>         // line 29
(isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "indexLabel" => (($this->getAttribute(        // line 30
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 34
        echo "
    ";
        // line 35
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 38
    public function block_stats($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_content_data($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["id"] = "custom_entity-update";
        // line 44
        echo "    ";
        $context["dataBlocks"] = call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
        // line 45
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 46
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 47
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 49
        echo "
    ";
        // line 50
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  111 => 49,  109 => 47,  108 => 46,  106 => 45,  103 => 44,  100 => 43,  97 => 42,  90 => 39,  87 => 38,  81 => 35,  78 => 34,  76 => 30,  75 => 29,  74 => 26,  72 => 22,  69 => 21,  62 => 18,  56 => 16,  54 => 15,  48 => 13,  45 => 12,  41 => 1,  39 => 10,  37 => 9,  35 => 8,  33 => 6,  31 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* */
/* {% oro_title_set({params : {"%entityName%": entity.id ? 'Item #'~entity.id : 'New '~entity_config.get('label') }}) %}*/
/* */
/* {% set formAction = path('oro_entity_update', {'entity_id': entity_id, id: entity.id}) %}*/
/* */
/* {% set audit_entity_class = entity_config.getId.getClassName|replace('\\', '_') %}*/
/* {% set audit_entity_id = entity.id %}*/
/* {% set audit_title  = entity_config.get('label')|default('N/A') %}*/
/* */
/* {% block navButtons %}*/
/*     {{ UI.button({'path' : path('oro_entity_index', {id: entity_id}), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/* */
/*     {% if resource_granted('EDIT', 'entity:'~entity_class) %}*/
/*     {{ UI.saveAndStayButton() }}*/
/*     {% endif %}*/
/*     {{ UI.saveAndCloseButton() }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      'entity',*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': entity.id ? 'Item #'~entity.id|default('N/A') : 'New '~entity_config.get('label'),*/
/*         'additional': [*/
/*             {*/
/*                 'indexPath'  : path('oro_entity_index', {id: entity_id}),*/
/*                 'indexLabel' : entity_config.get('label')|default('N/A')*/
/*             },*/
/*         ]*/
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
/*     {% set id = 'custom_entity-update' %}*/
/*     {% set dataBlocks = form_data_blocks(form) %}*/
/*     {% set data = {*/
/*         'formErrors': form_errors(form)? form_errors(form) : null,*/
/*         'dataBlocks': dataBlocks*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
