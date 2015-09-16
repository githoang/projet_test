<?php

/* OroUserBundle:Group:update.html.twig */
class __TwigTemplate_7fe535e34daa44b7938a75f272ff207f2de12bf9e28b5c2a0fc66605daf50007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:Group:update.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUserBundle:Group:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array());
        // line 5
        $context["title"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('translator')->trans("Update Group")) : ($this->env->getExtension('translator')->trans("New Group")));

        $this->env->getExtension("oro_title")->set(array("params" => array("%group%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 6
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()))));
        // line 7
        $context["gridName"] = "pim-group-user-grid";
        // line 8
        $context["formAction"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('routing')->getPath("oro_user_group_update", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))))) : ($this->env->getExtension('routing')->getPath("oro_user_group_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_navButtons($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        if (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_group_remove"))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_group", array("id" =>             // line 13
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_user_group_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 16
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")), "id" => "btn-remove-group", "dataMessage" => $this->env->getExtension('translator')->trans("Are you sure you want to delete this group?"), "successMessage" => $this->env->getExtension('translator')->trans("Group removed"), "title" => "Delete group", "label" => "Delete")), "method"), "html", null, true);
            // line 23
            echo "
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_user_group_index"), "title" => $this->env->getExtension('translator')->trans("Cancel"), "label" => $this->env->getExtension('translator')->trans("Cancel"))), "method"), "html", null, true);
        echo "
    ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(0 => "oro_user_group_update"), "method"), "html", null, true);
        echo "
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
        echo "
";
    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) {
            // line 33
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 34
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('routing')->getPath("oro_user_group_index"), "indexLabel" => $this->env->getExtension('translator')->trans("Groups"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 37
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()));
            // line 40
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 42
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:Group:update.html.twig", 42)->display($context);
            // line 43
            echo "    ";
        }
    }

    // line 46
    public function block_content_data($context, array $blocks = array())
    {
        // line 47
        echo "    ";
        $context["id"] = "group-profile";
        // line 48
        echo "
    ";
        // line 49
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 56
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appendUsers", array()), 'widget', array("id" => "groupAppendUsers")), 1 =>         // line 57
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removeUsers", array()), 'widget', array("id" => "groupRemoveUsers")), 2 =>         // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row'))))));
        // line 64
        echo "
    ";
        // line 65
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("Users"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 73
$context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("group_id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))), array("cssClass" => "inner-grid"))))))));
        // line 79
        echo "
    ";
        // line 80
        $context["data"] = array("formErrors" => ((        // line 82
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 83
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 86
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Group:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 86,  128 => 83,  127 => 82,  126 => 80,  123 => 79,  121 => 73,  120 => 65,  117 => 64,  115 => 58,  114 => 57,  113 => 56,  112 => 49,  109 => 48,  106 => 47,  103 => 46,  98 => 43,  95 => 42,  89 => 40,  87 => 37,  86 => 34,  84 => 33,  81 => 32,  78 => 31,  72 => 28,  68 => 27,  63 => 26,  58 => 24,  55 => 23,  53 => 16,  52 => 13,  50 => 12,  47 => 11,  44 => 10,  40 => 1,  38 => 8,  36 => 7,  34 => 6,  31 => 5,  29 => 4,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% set entityId = form.vars.value.id %}*/
/* {% set title = entityId ? 'Update Group'|trans : 'New Group'|trans %}*/
/* {% oro_title_set({params : { "%group%": form.vars.value.name } }) %}*/
/* {% set gridName = 'pim-group-user-grid' %}*/
/* {% set formAction = entityId ? path('oro_user_group_update', { 'id': entityId}) : path('oro_user_group_create') %}*/
/* */
/* {% block navButtons %}*/
/*     {% if entityId and resource_granted('oro_user_group_remove') %}*/
/*         {{ UI.deleteButton({*/
/*             'dataUrl': path('oro_api_delete_group', {'id': entityId}),*/
/*             'dataRedirect': path('oro_user_group_index'),*/
/*             'aCss': 'no-hash remove-button',*/
/*             'dataId': entityId,*/
/*             'id': 'btn-remove-group',*/
/*             'dataMessage': 'Are you sure you want to delete this group?'|trans,*/
/*             'successMessage': 'Group removed'|trans,*/
/*             'title': 'Delete group',*/
/*             'label': 'Delete'*/
/*         })*/
/*         }}*/
/*         {{ UI.buttonSeparator() }}*/
/*     {% endif %}*/
/*     {{ UI.button({'path' : path('oro_user_group_index'), 'title' : 'Cancel'|trans, 'label' : 'Cancel'|trans}) }}*/
/*     {{ UI.saveAndStayButton('oro_user_group_update') }}*/
/*     {{ UI.saveAndCloseButton() }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% if entityId %}*/
/*         {% set breadcrumbs = {*/
/*             'entity':      form.vars.value,*/
/*             'indexPath':   path('oro_user_group_index'),*/
/*             'indexLabel': 'Groups'|trans,*/
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
/*     {% set id = 'group-profile' %}*/
/* */
/*     {% set dataBlocks = [{*/
/*             'title': 'General'|trans,*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': '',*/
/*                     'data': [*/
/*                         form_widget(form.appendUsers, {'id': 'groupAppendUsers'}),*/
/*                         form_widget(form.removeUsers, {'id': 'groupRemoveUsers'}),*/
/*                         form_row(form.name)*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     %}*/
/* */
/*     {% set dataBlocks = dataBlocks|merge(*/
/*         [{*/
/*             'title' : 'Users'|trans,*/
/*             'subblocks':*/
/*             [*/
/*                 {*/
/*                     'title' : null,*/
/*                     'useSpan': false,*/
/*                     'data' : [dataGrid.renderGrid(gridName, {group_id: entityId}, { cssClass: 'inner-grid' })]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     )*/
/*     %}*/
/* */
/*     {% set data =*/
/*         {*/
/*             'formErrors': form_errors(form)? form_errors(form) : null,*/
/*             'dataBlocks': dataBlocks,*/
/*         }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
