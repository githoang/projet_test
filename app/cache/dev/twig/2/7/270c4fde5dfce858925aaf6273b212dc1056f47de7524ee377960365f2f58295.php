<?php

/* OroEntityExtendBundle:ConfigFieldGrid:create.html.twig */
class __TwigTemplate_352d3d91bf7359454349edfb6a54c203755468073e10d8a0b5559944910522fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
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
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 6
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entityextend_field_create", array("id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => "Continue")), "method"), "html", null, true);
        echo "
";
    }

    // line 13
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => "New Field", "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" =>         // line 21
(isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "indexLabel" => (($this->getAttribute(        // line 22
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 26
        echo "
    ";
        // line 27
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 30
    public function block_content_data($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $context["id"] = "configfield-create";
        // line 32
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 33
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" => call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context,         // line 34
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), "hiddenData" =>         // line 35
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
        // line 37
        echo "
    <script type=\"text/javascript\">
        require(['jquery'], function(\$) {
            'use strict';
            \$(function() {
                \$(document).on('change', 'form select#oro_entity_extend_field_type_type', function (e) {
                    var el = \$(this),
                        relation = el.find('option:selected').attr('value').split('||'),
                        field_name = \$('input#oro_entity_extend_field_type_fieldName');

                    if (relation !== 'undefined' && relation.length > 1 && relation[1]) {
                        \$(field_name).val(relation[1]).attr('readonly', 'readonly');
                    }
                    else if (\$(field_name).attr('readonly')) {
                        \$(field_name).val('').removeAttr('readonly');
                    }
                });
            })
        });
    </script>

    ";
        // line 58
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigFieldGrid:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 58,  81 => 37,  79 => 35,  78 => 34,  77 => 33,  75 => 32,  72 => 31,  69 => 30,  63 => 27,  60 => 26,  58 => 22,  57 => 21,  55 => 14,  52 => 13,  46 => 10,  41 => 9,  38 => 8,  34 => 1,  32 => 6,  30 => 4,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* */
/* {% oro_title_set({params : {"%entityName%": entity_config.get('label')|default('N/A') }}) %}*/
/* */
/* {% set formAction = path('oro_entityextend_field_create', {id: entity_id}) %}*/
/* */
/* {% block navButtons %}*/
/*     {{ UI.button({'path' : path('oro_entityconfig_view', {'id':entity_id}), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/*     {{ UI.buttonType({'type': 'submit', 'class': 'btn-success', 'label': 'Continue'}) }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      'entity',*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': 'New Field',*/
/*         'additional': [*/
/*             {*/
/*                 'indexPath'  : path('oro_entityconfig_view', {id: entity_id}),*/
/*                 'indexLabel' : entity_config.get('label')|default('N/A')*/
/*             },*/
/*         ]*/
/*     } %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'configfield-create' %}*/
/*     {% set data = {*/
/*         'formErrors': form_errors(form)? form_errors(form) : null,*/
/*         'dataBlocks': form_data_blocks(form),*/
/*         'hiddenData': form_rest(form)*/
/*     } %}*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery'], function($) {*/
/*             'use strict';*/
/*             $(function() {*/
/*                 $(document).on('change', 'form select#oro_entity_extend_field_type_type', function (e) {*/
/*                     var el = $(this),*/
/*                         relation = el.find('option:selected').attr('value').split('||'),*/
/*                         field_name = $('input#oro_entity_extend_field_type_fieldName');*/
/* */
/*                     if (relation !== 'undefined' && relation.length > 1 && relation[1]) {*/
/*                         $(field_name).val(relation[1]).attr('readonly', 'readonly');*/
/*                     }*/
/*                     else if ($(field_name).attr('readonly')) {*/
/*                         $(field_name).val('').removeAttr('readonly');*/
/*                     }*/
/*                 });*/
/*             })*/
/*         });*/
/*     </script>*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
