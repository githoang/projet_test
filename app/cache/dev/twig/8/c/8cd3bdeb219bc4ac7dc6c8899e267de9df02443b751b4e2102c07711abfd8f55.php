<?php

/* OroOrganizationBundle:BusinessUnit:update.html.twig */
class __TwigTemplate_0e6e48dcbcfde8bbbf2e70014f9d4e903750d3c3e743f81aa1a8ab07cf9c7f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 2);
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroTagBundle:Form:fields.html.twig"));
        // line 6
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array());
        // line 7
        $context["title"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('translator')->trans("Update Business Unit")) : ($this->env->getExtension('translator')->trans("New Business Unit")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%business_unit.name%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()))));
        // line 9
        $context["audit_entity_class"] = "Oro_Bundle_OrganizationBundle_Entity_BusinessUnit";
        // line 10
        $context["gridName"] = "bu-update-users-grid";
        // line 11
        $context["formAction"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('routing')->getPath("oro_business_unit_update", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))))) : ($this->env->getExtension('routing')->getPath("oro_business_unit_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_head_script($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    ";
        // line 16
        $context["listenerParameters"] = array("columnName" => "has_business_unit", "selectors" => array("included" => "#businessUnitAppendUsers", "excluded" => "#businessUnitRemoveUsers"));
    }

    // line 25
    public function block_navButtons($context, array $blocks = array())
    {
        // line 26
        echo "    ";
        if ((((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) && ($this->env->getExtension('oro_business_unit')->getBusinessUnitCount() > 1)) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_delete"))) {
            // line 27
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_businessunit", array("id" =>             // line 28
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_business_unit_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 31
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")), "id" => "btn-remove-business_unit", "dataMessage" => "Are you sure you want to delete this business unit?", "title" => "Delete business unit", "label" => "Delete")), "method"), "html", null, true);
            // line 37
            echo "
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 40
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_business_unit_index"), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "
    ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(0 => "oro_business_unit_update"), "method"), "html", null, true);
        echo "
    ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 45
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        if ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) {
            // line 47
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 48
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('routing')->getPath("oro_business_unit_index"), "indexLabel" => "Business Units", "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 51
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()));
            // line 54
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 56
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroOrganizationBundle:BusinessUnit:update.html.twig", 56)->display($context);
            // line 57
            echo "    ";
        }
    }

    // line 60
    public function block_content_data($context, array $blocks = array())
    {
        // line 61
        echo "    ";
        $context["id"] = "business_unit-profile";
        // line 62
        echo "
    ";
        // line 63
        $context["dataBlocks"] = array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 70
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appendUsers", array()), 'widget', array("id" => "businessUnitAppendUsers")), 1 =>         // line 71
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removeUsers", array()), 'widget', array("id" => "businessUnitRemoveUsers")), 2 =>         // line 72
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row'), 3 =>         // line 73
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'row'), 4 =>         // line 74
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'row'), 5 =>         // line 75
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'row'), 6 =>         // line 76
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row'), 7 =>         // line 77
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fax", array()), 'row'))))));
        // line 83
        echo "
    ";
        // line 84
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => "Users", "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 92
$context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("business_unit_id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))), array("cssClass" => "inner-grid"))))))));
        // line 98
        echo "
    ";
        // line 99
        $context["data"] = array("formErrors" => ((        // line 101
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 102
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 105
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 105,  151 => 102,  150 => 101,  149 => 99,  146 => 98,  144 => 92,  143 => 84,  140 => 83,  138 => 77,  137 => 76,  136 => 75,  135 => 74,  134 => 73,  133 => 72,  132 => 71,  131 => 70,  130 => 63,  127 => 62,  124 => 61,  121 => 60,  116 => 57,  113 => 56,  107 => 54,  105 => 51,  104 => 48,  102 => 47,  99 => 46,  96 => 45,  90 => 42,  86 => 41,  81 => 40,  76 => 38,  73 => 37,  71 => 31,  70 => 28,  68 => 27,  65 => 26,  62 => 25,  58 => 16,  52 => 14,  49 => 13,  45 => 1,  43 => 11,  41 => 10,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  30 => 4,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% form_theme form with ['OroFormBundle:Form:fields.html.twig', 'OroTagBundle:Form:fields.html.twig'] %}*/
/* */
/* {% set entityId = form.vars.value.id %}*/
/* {% set title = entityId ? 'Update Business Unit'|trans : 'New Business Unit'|trans %}*/
/* {% oro_title_set({params : { "%business_unit.name%": form.vars.value.name } }) %}*/
/* {% set audit_entity_class = 'Oro_Bundle_OrganizationBundle_Entity_BusinessUnit' %}*/
/* {% set gridName = 'bu-update-users-grid' %}*/
/* {% set formAction = entityId ? path('oro_business_unit_update', { 'id': entityId}) : path('oro_business_unit_create') %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/* */
/*     {% set listenerParameters = {*/
/*         'columnName': 'has_business_unit',*/
/*         'selectors': {*/
/*             'included': '#businessUnitAppendUsers',*/
/*             'excluded': '#businessUnitRemoveUsers'*/
/*         }*/
/*     } %}*/
/* {% endblock %}*/
/* */
/* {% block navButtons %}*/
/*     {% if entityId and oro_get_business_units_count() > 1 and resource_granted('oro_business_unit_delete') %}*/
/*         {{ UI.deleteButton({*/
/*             'dataUrl': path('oro_api_delete_businessunit', {'id': entityId}),*/
/*             'dataRedirect': path('oro_business_unit_index'),*/
/*             'aCss': 'no-hash remove-button',*/
/*             'dataId': entityId,*/
/*             'id': 'btn-remove-business_unit',*/
/*             'dataMessage': 'Are you sure you want to delete this business unit?',*/
/*             'title': 'Delete business unit',*/
/*             'label': 'Delete'*/
/*         })*/
/*         }}*/
/*         {{ UI.buttonSeparator() }}*/
/*     {% endif %}*/
/*     {{ UI.button({'path' : path('oro_business_unit_index'), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/*     {{ UI.saveAndStayButton('oro_business_unit_update') }}*/
/*     {{ UI.saveAndCloseButton() }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% if entityId %}*/
/*         {% set breadcrumbs = {*/
/*             'entity':      form.vars.value,*/
/*             'indexPath':   path('oro_business_unit_index'),*/
/*             'indexLabel': 'Business Units',*/
/*             'entityTitle': form.vars.value.name*/
/*         }*/
/*         %}*/
/*         {{ parent() }}*/
/*     {% else %}*/
/*         {% include 'OroUIBundle::page_title_block.html.twig' %}*/
/*     {% endif %}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'business_unit-profile' %}*/
/* */
/*     {% set dataBlocks = [{*/
/*             'title': 'General',*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': '',*/
/*                     'data': [*/
/*                         form_widget(form.appendUsers, {'id': 'businessUnitAppendUsers'}),*/
/*                         form_widget(form.removeUsers, {'id': 'businessUnitRemoveUsers'}),*/
/*                         form_row(form.name),*/
/*                         form_row(form.organization),*/
/*                         form_row(form.phone),*/
/*                         form_row(form.website),*/
/*                         form_row(form.email),*/
/*                         form_row(form.fax),*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     %}*/
/* */
/*     {% set dataBlocks = dataBlocks|merge(*/
/*         [{*/
/*             'title' : 'Users',*/
/*             'subblocks':*/
/*             [*/
/*                 {*/
/*                     'title' : null,*/
/*                     'useSpan': false,*/
/*                     'data' : [dataGrid.renderGrid(gridName, {business_unit_id: entityId}, { cssClass: 'inner-grid' })]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     )*/
/*     %}*/
/* */
/*     {% set data =*/
/*         {*/
/*             'formErrors': form_errors(form)? form_errors(form) : null,*/
/*             'dataBlocks': dataBlocks*/
/*         }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
