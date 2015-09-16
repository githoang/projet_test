<?php

/* OroOrganizationBundle:BusinessUnit:view.html.twig */
class __TwigTemplate_3123e2f0f4dc3c5232fdd37a758674f21bb65b5e245d01b7b57d556062462a66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroOrganizationBundle:BusinessUnit:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroOrganizationBundle:BusinessUnit:view.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%business_unit.name%" => (($this->getAttribute(        // line 4
(isset($context["entity"]) ? $context["entity"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "N/A")) : ("N/A")))));
        // line 5
        $context["audit_entity_class"] = "Oro_Bundle_OrganizationBundle_Entity_BusinessUnit";
        // line 6
        $context["gridName"] = "bu-view-users-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_update")) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_business_unit_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "iClass" => "icon-edit ", "title" => "Edit business unit", "label" => "Edit")), "method"), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "    ";
        if ((($this->env->getExtension('oro_business_unit')->getBusinessUnitCount() > 1) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_delete"))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_businessunit", array("id" => $this->getAttribute(            // line 14
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_business_unit_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-business_unit", "dataId" => $this->getAttribute(            // line 18
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "dataMessage" => "Are you sure you want to delete this business unit?", "title" => "Delete business unit", "label" => "Delete")), "method"), "html", null, true);
            // line 22
            echo "
    ";
        }
    }

    // line 26
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 28
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexPath" => $this->env->getExtension('routing')->getPath("oro_business_unit_index"), "indexLabel" => "Business Units", "entityTitle" => (($this->getAttribute(        // line 31
(isset($context["entity"]) ? $context["entity"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "N/A")) : ("N/A")));
        // line 34
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 37
    public function block_content_data($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $context["id"] = "business-unit-profile";
        // line 39
        echo "
    ";
        // line 40
        $context["dataSubBlocks"] = array();
        // line 41
        echo "
    ";
        // line 42
        $context["dataBlocks"] = array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => "Basic Information", "data" => array(0 => $this->getAttribute(        // line 49
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Name", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array())), "method"), 1 => $this->getAttribute(        // line 50
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Phone", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "phone", array())), "method"), 2 => $this->getAttribute(        // line 51
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Organization", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "organization", array())), "method"), 3 => $this->getAttribute(        // line 52
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Website", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "website", array())), "method"), 4 => $this->getAttribute(        // line 53
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Email", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array())), "method"), 5 => $this->getAttribute(        // line 54
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Fax", 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fax", array())), "method"))))));
        // line 60
        echo "
    ";
        // line 61
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => "Users", "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 69
$context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("business_unit_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 75
        echo "
    ";
        // line 76
        $context["data"] = array("dataBlocks" =>         // line 78
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 81
        echo "
    ";
        // line 82
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 82,  115 => 81,  113 => 78,  112 => 76,  109 => 75,  107 => 69,  106 => 61,  103 => 60,  101 => 54,  100 => 53,  99 => 52,  98 => 51,  97 => 50,  96 => 49,  95 => 42,  92 => 41,  90 => 40,  87 => 39,  84 => 38,  81 => 37,  74 => 34,  72 => 31,  71 => 28,  69 => 27,  66 => 26,  60 => 22,  58 => 18,  57 => 14,  55 => 13,  52 => 12,  46 => 10,  43 => 9,  40 => 8,  36 => 1,  34 => 6,  32 => 5,  30 => 4,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% oro_title_set({params : {"%business_unit.name%": entity.name|default('N/A') }}) %}*/
/* {% set audit_entity_class = 'Oro_Bundle_OrganizationBundle_Entity_BusinessUnit' %}*/
/* {% set gridName = 'bu-view-users-grid' %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_business_unit_update') %}*/
/*         {{ UI.button({'path' : path('oro_business_unit_update', { id: entity.id }), 'iClass' : 'icon-edit ', 'title' : 'Edit business unit', 'label' : 'Edit'}) }}*/
/*     {% endif %}*/
/*     {% if oro_get_business_units_count() > 1 and resource_granted('oro_business_unit_delete') %}*/
/*         {{ UI.deleteButton({*/
/*             'dataUrl': path('oro_api_delete_businessunit', {'id': entity.id}),*/
/*             'dataRedirect': path('oro_business_unit_index'),*/
/*             'aCss': 'no-hash remove-button',*/
/*             'id': 'btn-remove-business_unit',*/
/*             'dataId': entity.id,*/
/*             'dataMessage': 'Are you sure you want to delete this business unit?',*/
/*             'title': 'Delete business unit',*/
/*             'label': 'Delete'*/
/*         }) }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_business_unit_index'),*/
/*         'indexLabel': 'Business Units',*/
/*         'entityTitle': entity.name|default('N/A'),*/
/*     }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'business-unit-profile' %}*/
/* */
/*     {% set dataSubBlocks = [] %}*/
/* */
/*     {% set dataBlocks = [{*/
/*             'title': 'General',*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': 'Basic Information',*/
/*                     'data': [*/
/*                         UI.attibuteRow('Name', entity.name),*/
/*                         UI.attibuteRow('Phone', entity.phone),*/
/*                         UI.attibuteRow('Organization', entity.organization),*/
/*                         UI.attibuteRow('Website', entity.website),*/
/*                         UI.attibuteRow('Email', entity.email),*/
/*                         UI.attibuteRow('Fax', entity.fax),*/
/*                     ]*/
/*                 },*/
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
/*                     'data' : [dataGrid.renderGrid(gridName, {business_unit_id: entity.id}, { cssClass: 'inner-grid' })]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     )*/
/*     %}*/
/* */
/*     {% set data =*/
/*         {*/
/*             'dataBlocks': dataBlocks,*/
/*         }*/
/*     %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
