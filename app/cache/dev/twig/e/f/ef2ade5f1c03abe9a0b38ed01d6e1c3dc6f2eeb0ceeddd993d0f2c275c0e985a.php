<?php

/* OroEmailBundle:EmailTemplate:update.html.twig */
class __TwigTemplate_4bb6a8078925a994fcb633e65f356c55032d6441a93b436dfdce2b798fc584bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 1);
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
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 5
        $context["_emailMacros"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 5);
        // line 6
        $context["title"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('translator')->trans("Edit email template \"%name%\"", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 7
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array())))) : (((        // line 8
(isset($context["isClone"]) ? $context["isClone"] : $this->getContext($context, "isClone"))) ? ($this->env->getExtension('translator')->trans("Clone Email Template")) : ($this->env->getExtension('translator')->trans("New Email Template")))));
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 11
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()))));
        }
        // line 14
        $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("oro_email_emailtemplate_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 15
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("oro_email_emailtemplate_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 19
    public function block_navButtons($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_email_emailtemplate_preview")) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_preview", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "title" => "Preview", "label" => "Preview", "aClass" => "btn-success dialog-form-renderer no-hash", "iClass" => "icon-share")), "method"), "html", null, true);
            // line 28
            echo "

        ";
            // line 30
            echo $context["_emailMacros"]->getrenderPreviewDialog($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "subject", array()));
            echo "
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_email_emailtemplate_clone"))) {
            // line 34
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_clone", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 35
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "title" => "Clone", "label" => "Clone", "aClass" => "btn-success", "iClass" => "icon-share")), "method"), "html", null, true);
            // line 41
            echo "
        ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        $context["cancelButton"] = $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_index"), "title" => "Cancel", "label" => "Cancel")), "method");
        // line 46
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "isSystem", array()) == false)) {
            // line 47
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_email_emailtemplate_remove"))) {
                // line 48
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute(                // line 49
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_emailtemplate", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 50
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-emailtemplate", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 54
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "dataMessage" => "Are you sure you want to delete this email template?", "title" => "Delete email template", "label" => "Delete")), "method"), "html", null, true);
                // line 59
                echo "
        ";
            }
            // line 61
            echo "    ";
        }
        // line 62
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "isEditable", array())) {
            // line 63
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 65
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["cancelButton"]) ? $context["cancelButton"] : $this->getContext($context, "cancelButton")), "html", null, true);
        echo "
    ";
        // line 66
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "isEditable", array())) {
            // line 67
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(0 => "oro_email_emailtemplate_update"), "method"), "html", null, true);
            echo "
        ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 72
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 74
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 75
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('routing')->getPath("oro_email_emailtemplate_index"), "indexLabel" => "Email Templates", "entityTitle" =>             // line 78
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
            // line 81
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 83
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroEmailBundle:EmailTemplate:update.html.twig", 83)->display($context);
            // line 84
            echo "    ";
        }
    }

    // line 87
    public function block_content_data($context, array $blocks = array())
    {
        // line 88
        echo "    ";
        $context["id"] = "emailtemplate-edit";
        // line 89
        echo "
    ";
        // line 90
        $context["dataBlocks"] = array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 96
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entityName", array()), 'row'), 1 =>         // line 97
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'row'), 2 =>         // line 98
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row'))))), 1 => array("title" => "Template data", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 106
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "translations", array()), 'widget'))), 1 => array("title" => $this->env->getExtension('translator')->trans("Available variables"), "data" => array(0 =>         // line 111
$context["_emailMacros"]->getrenderAvailableVariablesWidget($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "entityName", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "entityName", array()), "vars", array()), "id", array())))))));
        // line 116
        echo "    ";
        $context["data"] = array("formErrors" => ((        // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 118
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 121
        echo "
    ";
        // line 122
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:EmailTemplate:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 122,  182 => 121,  180 => 118,  179 => 117,  177 => 116,  175 => 111,  174 => 106,  173 => 98,  172 => 97,  171 => 96,  170 => 90,  167 => 89,  164 => 88,  161 => 87,  156 => 84,  153 => 83,  147 => 81,  145 => 78,  144 => 75,  142 => 74,  139 => 73,  136 => 72,  129 => 68,  124 => 67,  122 => 66,  117 => 65,  111 => 63,  108 => 62,  105 => 61,  101 => 59,  99 => 54,  98 => 50,  97 => 49,  95 => 48,  92 => 47,  89 => 46,  87 => 45,  84 => 44,  79 => 42,  76 => 41,  74 => 35,  72 => 34,  70 => 33,  67 => 32,  62 => 30,  58 => 28,  56 => 22,  54 => 21,  51 => 20,  48 => 19,  44 => 1,  42 => 15,  41 => 14,  38 => 11,  35 => 10,  33 => 8,  32 => 7,  31 => 6,  29 => 5,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with [*/
/*     'OroFormBundle:Form:fields.html.twig',*/
/* ]%}*/
/* {% import 'OroEmailBundle::macros.html.twig' as _emailMacros %}*/
/* {% set title = form.vars.value.id*/
/*     ? 'Edit email template "%name%"'|trans({'%name%': form.vars.value.name})*/
/*     : isClone ? 'Clone Email Template'|trans : 'New Email Template'|trans*/
/* %}*/
/* {% if form.vars.value.id %}*/
/*     {% oro_title_set({params : {"%name%": form.vars.value.name} }) %}*/
/* {% endif %}*/
/* */
/* {% set formAction = form.vars.value.id*/
/*     ? path('oro_email_emailtemplate_update', { id: form.vars.value.id })*/
/*     : path('oro_email_emailtemplate_create')*/
/* %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_email_emailtemplate_preview') %}*/
/*         {{ UI.button({*/
/*                 'path' :  path('oro_email_emailtemplate_preview', {'id': form.vars.value.id }),*/
/*                 'title' : 'Preview',*/
/*                 'label' : 'Preview',*/
/*                 aClass: 'btn-success dialog-form-renderer no-hash',*/
/*                 iClass: 'icon-share'*/
/*             })*/
/*         }}*/
/* */
/*         {{ _emailMacros.renderPreviewDialog(form.vars.id, form.vars.value.subject) }}*/
/*     {% endif %}*/
/* */
/*     {% if form.vars.value.id and resource_granted('oro_email_emailtemplate_clone') %}*/
/*         {{ UI.button({*/
/*                 'path' :  path('oro_email_emailtemplate_clone', {'id': form.vars.value.id}),*/
/*                 'title' : 'Clone',*/
/*                 'label' : 'Clone',*/
/*                 aClass: 'btn-success',*/
/*                 iClass: 'icon-share'*/
/*             })*/
/*         }}*/
/*         {{ UI.buttonSeparator() }}*/
/*     {% endif %}*/
/* */
/*     {% set cancelButton = UI.button({'path' : path('oro_email_emailtemplate_index'), 'title' : 'Cancel', 'label' : 'Cancel'}) %}*/
/*     {% if form.vars.value.isSystem == false %}*/
/*         {% if form.vars.value.id and resource_granted('oro_email_emailtemplate_remove') %}*/
/*             {{*/
/*                 UI.deleteButton({*/
/*                     'dataUrl': path('oro_api_delete_emailtemplate', {'id': form.vars.value.id}),*/
/*                     'dataRedirect': path('oro_email_emailtemplate_index'),*/
/*                     'aCss': 'no-hash remove-button',*/
/*                     'id': 'btn-remove-emailtemplate',*/
/*                     'dataId': form.vars.value.id,*/
/*                     'dataMessage': 'Are you sure you want to delete this email template?',*/
/*                     'title': 'Delete email template',*/
/*                     'label': 'Delete'*/
/*                 })*/
/*             }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if form.vars.value.isEditable %}*/
/*         {{ UI.buttonSeparator() }}*/
/*     {% endif %}*/
/*     {{ cancelButton  }}*/
/*     {% if form.vars.value.isEditable %}*/
/*         {{ UI.saveAndStayButton('oro_email_emailtemplate_update') }}*/
/*         {{ UI.saveAndCloseButton() }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% if form.vars.value.id %}*/
/*         {% set breadcrumbs = {*/
/*                 'entity':      form.vars.value,*/
/*                 'indexPath':   path('oro_email_emailtemplate_index'),*/
/*                 'indexLabel': 'Email Templates',*/
/*                 'entityTitle': title*/
/*             }*/
/*         %}*/
/*         {{ parent() }}*/
/*     {% else %}*/
/*         {% include 'OroUIBundle::page_title_block.html.twig' %}*/
/*     {% endif %}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'emailtemplate-edit' %}*/
/* */
/*     {% set dataBlocks = [{*/
/*             'title': 'General',*/
/*             'class': 'active',*/
/*             'subblocks': [{*/
/*                 'title': '',*/
/*                 'data': [*/
/*                     form_row(form.entityName),*/
/*                     form_row(form.type),*/
/*                     form_row(form.name)*/
/*                 ]*/
/*             }]*/
/*         }, {*/
/*             'title': 'Template data',*/
/*             'subblocks': [{*/
/*                 'title': '',*/
/*                 'data': [*/
/*                     form_widget(form.translations)*/
/*                 ]*/
/*             },{*/
/*                 'title': 'Available variables'|trans,*/
/*                 'data': [*/
/*                     _emailMacros.renderAvailableVariablesWidget(form.vars.value.entityName, form.entityName.vars.id)*/
/*                 ]*/
/*             }]*/
/*     }]*/
/*     %}*/
/*     {% set data = {*/
/*         'formErrors': form_errors(form)? form_errors(form) : null,*/
/*         'dataBlocks': dataBlocks,*/
/*         }*/
/*     %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
