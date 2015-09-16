<?php

/* OroEntityConfigBundle:Config:fieldUpdate.html.twig */
class __TwigTemplate_b07aa64f0b03c7f7f434de84af9c9d347be367c297b027b6648996e7244dd1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityConfigBundle:Config:fieldUpdate.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroEntityConfigBundle:Include:fields.html.twig"));

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 5
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")), "%fieldName%" => (($this->getAttribute(        // line 6
(isset($context["field_config"]) ? $context["field_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field_config"]) ? $context["field_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 9
        $context["audit_entity_class"] = twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "entity", array()), "className", array()), "\\", "_");
        // line 10
        $context["audit_title"] = $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "label"), "method");
        // line 11
        $context["audit_path"] = "oro_entityconfig_audit_field";
        // line 12
        $context["audit_entity_id"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_navButtons($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "entity", array()), "id", array()))), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
            echo "

        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"), "html", null, true);
            echo "
        ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 23
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => (($this->getAttribute(        // line 28
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "id", array())) ? ((($this->getAttribute((isset($context["field_config"]) ? $context["field_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field_config"]) ? $context["field_config"] : null), "get", array(0 => "label"), "method"), twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "fieldName", array()))))) : ($this->env->getExtension('translator')->trans("New Field"))), "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" => $this->getAttribute($this->getAttribute(        // line 31
(isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "entity", array()), "id", array()))), "indexLabel" => (($this->getAttribute(        // line 32
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 36
        echo "
    ";
        // line 37
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 40
    public function block_stats($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 44
    public function block_content_data($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        if ((array_key_exists("require_js", $context) && twig_length_filter($this->env, (isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js"))))) {
            // line 46
            echo "        <script type=\"text/javascript\">
            require(";
            // line 47
            echo twig_jsonencode_filter((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")));
            echo ")
        </script>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        $context["id"] = "configfield-update";
        // line 52
        echo "    ";
        $context["dataBlocks"] = call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
        // line 53
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 54
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 55
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), "hiddenData" =>         // line 56
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
        // line 58
        echo "
    ";
        // line 59
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:fieldUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  126 => 58,  124 => 56,  123 => 55,  122 => 54,  120 => 53,  117 => 52,  115 => 51,  112 => 50,  106 => 47,  103 => 46,  100 => 45,  97 => 44,  90 => 41,  87 => 40,  81 => 37,  78 => 36,  76 => 32,  75 => 31,  74 => 28,  72 => 24,  69 => 23,  62 => 19,  58 => 18,  52 => 16,  49 => 15,  46 => 14,  42 => 1,  40 => 12,  38 => 11,  36 => 10,  34 => 9,  32 => 6,  31 => 5,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with ['OroFormBundle:Form:fields.html.twig', 'OroEntityConfigBundle:Include:fields.html.twig'] %}*/
/* */
/* {% oro_title_set({params : {*/
/*     "%entityName%": entity_config.get('label')|default('N/A'),*/
/*     "%fieldName%": field_config.get('label')|default('N/A'),*/
/* }}) %}*/
/* */
/* {% set audit_entity_class = field.entity.className|replace('\\', '_') %}*/
/* {% set audit_title = entity_config.get('label') %}*/
/* {% set audit_path = 'oro_entityconfig_audit_field' %}*/
/* {% set audit_entity_id = field.id %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_entityconfig_manage') %}*/
/*         {{ UI.button({'path' : path('oro_entityconfig_view', {id: field.entity.id}), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/* */
/*         {{ UI.saveAndStayButton() }}*/
/*         {{ UI.saveAndCloseButton() }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity'      : 'entity',*/
/*         'indexPath'   : path('oro_entityconfig_index'),*/
/*         'indexLabel'  : 'Entities',*/
/*         'entityTitle' : field.id ? field_config.get('label')|default(field.fieldName|capitalize) : 'New Field'|trans,*/
/*         'additional'  : [*/
/*             {*/
/*                 'indexPath'  : path('oro_entityconfig_view', {id: field.entity.id}),*/
/*                 'indexLabel' : entity_config.get('label')|default('N/A'),*/
/*             },*/
/*         ]*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block stats %}*/
/*     {{ parent() }}*/
/* {% endblock stats %}*/
/* */
/* {% block content_data %}*/
/*     {% if require_js is defined and require_js|length %}*/
/*         <script type="text/javascript">*/
/*             require({{ require_js|json_encode|raw }})*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     {% set id = 'configfield-update' %}*/
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
