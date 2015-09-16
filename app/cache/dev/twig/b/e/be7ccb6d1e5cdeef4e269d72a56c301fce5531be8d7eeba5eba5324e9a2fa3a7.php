<?php

/* OroEntityConfigBundle:Config:view.html.twig */
class __TwigTemplate_6b6bb95078a9c652e92c534926420ee87ea85487dccd7d9e151637ace40210e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
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
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityConfigBundle:Config:view.html.twig", 2);
        // line 3
        $context["gridName"] = "entityfields-grid";

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 4
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 6
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 7
            $context["audit_entity_class"] = twig_replace_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "classname", array()), "\\", "_");
            // line 8
            $context["audit_title"] = (($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), (isset($context["entity_name"]) ? $context["entity_name"] : $this->getContext($context, "entity_name")))) : ((isset($context["entity_name"]) ? $context["entity_name"] : $this->getContext($context, "entity_name"))));
            // line 9
            $context["audit_path"] = "oro_entityconfig_audit";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_navButtons($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "iClass" => "icon-edit ", "title" => "Edit user", "label" => "Edit")), "method"), "html", null, true);
            echo "


        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["button_config"]) ? $context["button_config"] : $this->getContext($context, "button_config")));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 18
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => (($this->getAttribute(                // line 19
$context["button"], "void", array(), "any", true, true)) ? (twig_join_filter(array(0 => "javascript:void(0);//", 1 => $this->env->getExtension('routing')->getPath($this->getAttribute($context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array())))))) : ($this->env->getExtension('routing')->getPath($this->getAttribute($context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array()))))), "iClass" => (($this->getAttribute(                // line 20
$context["button"], "iClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "iClass", array()), "")) : ("")), "aClass" => (($this->getAttribute(                // line 21
$context["button"], "aClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "aClass", array()), "")) : ("")), "title" => (($this->getAttribute(                // line 22
$context["button"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "title", array()), $this->getAttribute($context["button"], "name", array()))) : ($this->getAttribute($context["button"], "name", array()))), "label" => $this->getAttribute(                // line 23
$context["button"], "name", array()))), "method"), "html", null, true);
                // line 24
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
    }

    // line 29
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 31
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => (($this->getAttribute(        // line 34
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), (isset($context["entity_name"]) ? $context["entity_name"] : $this->getContext($context, "entity_name")))) : ((isset($context["entity_name"]) ? $context["entity_name"] : $this->getContext($context, "entity_name")))));
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
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "created", array()));
        echo "</li>
    <li>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
        echo ": ";
        echo $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updated", array()));
        echo "</li>
    ";
        // line 43
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 44
            echo "    <li>";
            echo twig_join_filter(array(0 => "<a href=\"", 1 => (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), 2 => "\">", 3 => $this->env->getExtension('translator')->trans("Number of records"), 4 => ": ", 5 => ((array_key_exists("entity_count", $context)) ? (_twig_default_filter((isset($context["entity_count"]) ? $context["entity_count"] : $this->getContext($context, "entity_count")), 0)) : (0)), 6 => "</a>"));
            echo "</li>
    ";
        } else {
            // line 46
            echo "    <li>";
            echo twig_join_filter(array(0 => "<span>", 1 => $this->env->getExtension('translator')->trans("Number of records"), 2 => ": ", 3 => ((array_key_exists("entity_count", $context)) ? (_twig_default_filter((isset($context["entity_count"]) ? $context["entity_count"] : $this->getContext($context, "entity_count")), 0)) : (0)), 4 => "</span>"));
            echo "</li>
    ";
        }
    }

    // line 50
    public function block_content_data($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")))) {
            // line 52
            echo "        <script type=\"text/javascript\">
            require(";
            // line 53
            echo twig_jsonencode_filter((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")));
            echo ")
        </script>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        $context["id"] = "entityconfig-view";
        // line 58
        echo "    ";
        $context["unique_keys"] = array();
        // line 59
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["unique_key"]) ? $context["unique_key"] : null), "keys", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["unique_key"]) ? $context["unique_key"] : null), "keys", array()))) : ("")));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 60
            echo "        ";
            $context["unique_keys"] = twig_array_merge((isset($context["unique_keys"]) ? $context["unique_keys"] : $this->getContext($context, "unique_keys")), array(0 => $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => $this->getAttribute($context["key"], "name", array()), 1 => twig_join_filter($this->getAttribute($context["key"], "key", array()), ", ")), "method")));
            // line 61
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
    ";
        // line 63
        $context["general_fields"] = array(0 => $this->getAttribute(        // line 64
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Name", 1 => (isset($context["entity_name"]) ? $context["entity_name"] : $this->getContext($context, "entity_name"))), "method"), 1 => $this->getAttribute(        // line 65
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "renderAttribute", array(0 => "Icon", 1 => twig_join_filter(array(0 => "<div class=\"clearfix-oro\"><p class=\"control-label\"><i class=\"", 1 => $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "icon"), "method"), 2 => " hide-text\"></i> (", 3 => $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "icon"), "method"), 4 => ")</p></div>"))), "method"), 2 => $this->getAttribute(        // line 66
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Label", 1 => $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "label"), "method")), "method"), 3 => $this->getAttribute(        // line 67
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Plural Label", 1 => $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "plural_label"), "method")), "method"), 4 => $this->getAttribute(        // line 68
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Type", 1 => $this->getAttribute((isset($context["entity_extend"]) ? $context["entity_extend"] : $this->getContext($context, "entity_extend")), "get", array(0 => "owner"), "method")), "method"), 5 => $this->getAttribute(        // line 69
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Description", 1 => $this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : $this->getContext($context, "entity_config")), "get", array(0 => "description"), "method")), "method"), 6 => $this->getAttribute(        // line 70
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Ownership Type", 1 => $this->getAttribute((isset($context["entity_ownership"]) ? $context["entity_ownership"] : $this->getContext($context, "entity_ownership")), "get", array(0 => "owner_type"), "method")), "method"), 7 => $this->getAttribute(        // line 71
(isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "attibuteRow", array(0 => "Module", 1 => (isset($context["module_name"]) ? $context["module_name"] : $this->getContext($context, "module_name"))), "method"));
        // line 73
        echo "
    ";
        // line 74
        $context["data"] = array("dataBlocks" => array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => "General Information", "data" =>         // line 80
(isset($context["general_fields"]) ? $context["general_fields"] : $this->getContext($context, "general_fields"))), 1 => array("title" => "Unique Keys", "data" =>         // line 81
(isset($context["unique_keys"]) ? $context["unique_keys"] : $this->getContext($context, "unique_keys"))))), 1 => array("title" => "Fields", "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 90
$context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("entityId" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())), array("cssClass" => "inner-grid"))))))));
        // line 96
        echo "
    ";
        // line 97
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 97,  192 => 96,  190 => 90,  189 => 81,  188 => 80,  187 => 74,  184 => 73,  182 => 71,  181 => 70,  180 => 69,  179 => 68,  178 => 67,  177 => 66,  176 => 65,  175 => 64,  174 => 63,  171 => 62,  165 => 61,  162 => 60,  157 => 59,  154 => 58,  152 => 57,  149 => 56,  143 => 53,  140 => 52,  137 => 51,  134 => 50,  126 => 46,  120 => 44,  118 => 43,  112 => 42,  105 => 41,  102 => 40,  96 => 37,  93 => 36,  91 => 34,  90 => 31,  88 => 30,  85 => 29,  80 => 26,  73 => 24,  71 => 23,  70 => 22,  69 => 21,  68 => 20,  67 => 19,  65 => 18,  61 => 17,  54 => 14,  51 => 13,  48 => 12,  44 => 1,  41 => 9,  39 => 8,  37 => 7,  35 => 6,  33 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {% set gridName = 'entityfields-grid' %}*/
/* {% oro_title_set({params : {"%entityName%": entity_config.get('label')|default('N/A') }}) %}*/
/* */
/* {% if resource_granted('oro_entityconfig_manage') %}*/
/*     {% set audit_entity_class = entity.classname|replace('\\', '_') %}*/
/*     {% set audit_title = entity_config.get('label')|default(entity_name) %}*/
/*     {% set audit_path = 'oro_entityconfig_audit' %}*/
/* {% endif %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_entityconfig_manage') %}*/
/*         {{ UI.button({'path' : path('oro_entityconfig_update', { id: entity.id }), 'iClass' : 'icon-edit ', 'title' : 'Edit user', 'label' : 'Edit'}) }}*/
/* */
/* */
/*         {% for button in button_config %}*/
/*             {{ UI.button({*/
/*                 'path'   : button.void is defined ? [ 'javascript:void(0);//', path(button.route, button.args|default({})) ]|join : path(button.route, button.args|default({})),*/
/*                 'iClass' : button.iClass|default(''),*/
/*                 'aClass' : button.aClass|default(''),*/
/*                 'title'  : button.title|default(button.name),*/
/*                 'label'  : button.name*/
/*             }) }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': entity_config.get('label')|default(entity_name),*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block stats %}*/
/*     <li>{{ 'Created'|trans }}: {{ entity.created|oro_format_datetime }}</li>*/
/*     <li>{{ 'Updated'|trans }}: {{ entity.updated|oro_format_datetime }}</li>*/
/*     {% if link %}*/
/*     <li>{{ ['<a href="', link, '">', 'Number of records'|trans, ': ', entity_count|default(0) , '</a>']|join|raw }}</li>*/
/*     {% else %}*/
/*     <li>{{ ['<span>', 'Number of records'|trans, ': ', entity_count|default(0) , '</span>']|join|raw }}</li>*/
/*     {% endif %}*/
/* {% endblock stats%}*/
/* */
/* {% block content_data %}*/
/*     {% if require_js|length %}*/
/*         <script type="text/javascript">*/
/*             require({{ require_js|json_encode|raw }})*/
/*         </script>*/
/*     {% endif %}*/
/* */
/*     {% set id = 'entityconfig-view' %}*/
/*     {% set unique_keys = [] %}*/
/*     {% for key in unique_key.keys|default %}*/
/*         {% set unique_keys = unique_keys|merge([UI.attibuteRow(key.name, key.key|join(', '))])%}*/
/*     {% endfor %}*/
/* */
/*     {% set general_fields = [*/
/*         UI.attibuteRow('Name', entity_name),*/
/*         UI.renderAttribute('Icon', ['<div class="clearfix-oro"><p class="control-label"><i class="',entity_config.get('icon'),' hide-text"></i> (',entity_config.get('icon'),')</p></div>']|join),*/
/*         UI.attibuteRow('Label', entity_config.get('label')),*/
/*         UI.attibuteRow('Plural Label', entity_config.get('plural_label')),*/
/*         UI.attibuteRow('Type', entity_extend.get('owner')),*/
/*         UI.attibuteRow('Description', entity_config.get('description')),*/
/*         UI.attibuteRow('Ownership Type', entity_ownership.get('owner_type')),*/
/*         UI.attibuteRow('Module', module_name),*/
/*     ]%}*/
/* */
/*     {% set data = {*/
/*         'dataBlocks': [*/
/*             {*/
/*                 'title': 'General',*/
/*                 'class': 'active',*/
/*                 'subblocks': [*/
/*                     {'title': 'General Information', 'data': general_fields},*/
/*                     {'title': 'Unique Keys', 'data': unique_keys}*/
/*                 ]*/
/*             },*/
/*             {*/
/*                 'title': 'Fields',*/
/*                 'subblocks': [*/
/*                     {*/
/*                         'title': '',*/
/*                         'useSpan': false,*/
/*                         'data': [dataGrid.renderGrid(gridName, {entityId: entity.id}, { cssClass: 'inner-grid' })]*/
/*                     }*/
/*                 ]*/
/*             }*/
/*         ]*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
