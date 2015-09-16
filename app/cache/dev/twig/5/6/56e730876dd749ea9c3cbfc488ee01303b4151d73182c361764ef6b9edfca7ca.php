<?php

/* OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig */
class __TwigTemplate_434c4c83421f68b937681a7021d6c02080c09ae8f67641e24e4429975f28f77f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'unique_collection_widget' => array($this, 'block_unique_collection_widget'),
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
        // line 3
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_entityextend_entity_unique_key", array("id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id"))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_navButtons($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "title" => "Cancel", "label" => "Cancel")), "method"), "html", null, true);
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => "Save")), "method"), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["breadcrumbs"] = array("entity" => "entity", "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => "Unique Keys", "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_view", array("id" =>         // line 18
(isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "indexLabel" => (($this->getAttribute(        // line 19
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 23
        echo "
    ";
        // line 24
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_stats($context, array $blocks = array())
    {
        // line 28
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_unique_collection_widget($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        <div class=\"row-oro\">
            <div class=\"oro-address-collection collection-fields-list\" id=\"entity_extend_unique_key_collection\" data-prototype=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this, "unique_collection_prototype", array(0 => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keys", array())), "method"));
        echo "\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "keys", array()), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 54
            echo "                    ";
            echo $this->getAttribute($this, "unique_collection_prototype", array(0 => $context["field"]), "method");
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_content_data($context, array $blocks = array())
    {
        // line 63
        echo "    ";
        $context["id"] = "configentity-unique";
        // line 64
        echo "    ";
        $context["dataBlocks"] = array(0 => array("title" => "Unique Keys", "class" => "active", "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 => $this->renderBlock("unique_collection_widget", $context, $blocks))))));
        // line 78
        echo "
    ";
        // line 79
        $context["data"] = array("formErrors" => ((        // line 80
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 81
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), "hiddenData" =>         // line 82
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
        // line 84
        echo "
    ";
        // line 85
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 31
    public function getunique_collection_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 32
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array())))) {
                // line 33
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 34
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 35
                echo "    ";
            } else {
                // line 36
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 37
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 38
                echo "    ";
            }
            // line 39
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 42
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
            echo "
            ";
            // line 43
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "key", array()), 'row');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:ConfigEntityGrid:unique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 44,  188 => 43,  184 => 42,  180 => 41,  174 => 39,  171 => 38,  168 => 37,  165 => 36,  162 => 35,  159 => 34,  156 => 33,  153 => 32,  141 => 31,  135 => 85,  132 => 84,  130 => 82,  129 => 81,  128 => 80,  127 => 79,  124 => 78,  121 => 64,  118 => 63,  115 => 62,  107 => 57,  104 => 56,  95 => 54,  91 => 53,  87 => 52,  84 => 51,  81 => 50,  78 => 49,  71 => 28,  68 => 27,  62 => 24,  59 => 23,  57 => 19,  56 => 18,  54 => 11,  51 => 10,  45 => 7,  40 => 6,  37 => 5,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:update.html.twig' %}*/
/* {% form_theme form with 'OroFormBundle:Form:fields.html.twig' %}*/
/* {% set formAction = path('oro_entityextend_entity_unique_key', {id: entity_id}) %}*/
/* */
/* {% block navButtons %}*/
/*     {{ UI.button({'path' : path('oro_entityconfig_view', {id: entity_id}), 'title' : 'Cancel', 'label' : 'Cancel'}) }}*/
/*     {{ UI.buttonType({'type': 'submit', 'class': 'btn-success', 'label': 'Save'}) }}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      'entity',*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': 'Unique Keys',*/
/*         'additional': [*/
/*             {*/
/*                 'indexPath'  : path('oro_entityconfig_view', {id: entity_id}),*/
/*                 'indexLabel' : entity_config.get('label')|default('N/A'),*/
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
/* {% macro unique_collection_prototype(widget) %}*/
/*     {% if 'prototype' in widget.vars|keys %}*/
/*         {% set form = widget.vars.prototype %}*/
/*         {% set name = widget.vars.prototype.vars.name %}*/
/*     {% else %}*/
/*         {% set form = widget %}*/
/*         {% set name = widget.vars.full_name %}*/
/*     {% endif %}*/
/*     <div data-content="{{ name }}">*/
/*         <div class="row-oro oro-multiselect-holder">*/
/*             {{ form_errors(form) }}*/
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.key) }}*/
/*             <button class="removeRow btn btn-action btn-link" type="button" data-related="{{ name }}">×</button>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% block unique_collection_widget %}*/
/*     {% spaceless %}*/
/*         <div class="row-oro">*/
/*             <div class="oro-address-collection collection-fields-list" id="entity_extend_unique_key_collection" data-prototype="{{ _self.unique_collection_prototype(form.keys)|escape }}">*/
/*                 {% for field in form.keys.children %}*/
/*                     {{ _self.unique_collection_prototype(field) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <a class="btn add-list-item" href="javascript: void(0);"><i class="icon-plus"></i>{{ 'Add'|trans }}</a>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock unique_collection_widget %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'configentity-unique' %}*/
/*     {% set dataBlocks = [{*/
/*             'title': 'Unique Keys',*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': '',*/
/*                     'useSpan': false,*/
/*                     'data': [*/
/*                         block('unique_collection_widget')*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }]*/
/*     %}*/
/* */
/*     {% set data = {*/
/*         'formErrors': form_errors(form)? form_errors(form) : null,*/
/*         'dataBlocks': dataBlocks,*/
/*         'hiddenData': form_rest(form)*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
