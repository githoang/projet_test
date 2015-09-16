<?php

/* OroEntityBundle:Entities:relation.html.twig */
class __TwigTemplate_db3bf7ed7bb10c6912dc5eabf714ee5cb59bb355956b3f928bf1615e1f7e83d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEntityBundle:Entities:relation.html.twig", 1);
        // line 2
        echo "<div class=\"widget-content grid-widget-content\">
    ";
        // line 3
        $context["gridName"] = "entity-relation-grid";
        // line 4
        echo "
    ";
        // line 5
        $context["gridParams"] = array("_parameters" => array("data_in" => twig_split_filter($this->env, $this->getAttribute($this->getAttribute(        // line 7
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "added"), "method"), ","), "data_not_in" => twig_split_filter($this->env, $this->getAttribute($this->getAttribute(        // line 8
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "removed"), "method"), ",")), "class_name" =>         // line 10
(isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")), "entity_id" =>         // line 11
(isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "field_name" => $this->getAttribute($this->getAttribute(        // line 12
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "fieldName"), "method"), "id" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "id"), "method"));
        // line 15
        echo "
    <style type=\"text/css\">
        .grid-widget-content .grid, .grid-widget-content .table{margin-bottom: 0;}
    </style>

    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "
    <script type=\"text/javascript\">
        ";
        // line 27
        $context["wid"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_wid"), "method");
        // line 28
        echo "        require(['jquery', 'routing', 'oro/datagrid/callback-listener', 'oro/widget-manager',
            'oro/multiple-entity/model'],
        function(\$, routing, CallbackListener, WidgetManager, MultipleEntityModel) {
            var addedModels = {};
            WidgetManager.getWidgetInstance(";
        // line 32
        echo twig_jsonencode_filter((isset($context["wid"]) ? $context["wid"] : $this->getContext($context, "wid")));
        echo ", function(widget) {
                if (widget.options.type == 'dialog') {
                    widget.getWidget().css({
                        'padding': 0,
                        'max-height': 500,
                        'overflow': 'auto'
                    });
                }

                widget.getAction('select', 'adopted', function(selectBtn) {
                    selectBtn.click(function() {
                        var addedVal = \$('#appendRelation').val();
                        var removedVal = \$('#removeRelation').val();
                        var appendedIds = addedVal.length ? addedVal.split(',') : [];
                        var removedIds = removedVal.length ? removedVal.split(',') : [];
                        widget.trigger('completeSelection', appendedIds, addedModels, removedIds);
                    });
                });
            });

            var gridName = ";
        // line 52
        echo twig_jsonencode_filter((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")));
        echo ";

            \$(function() {
                /** @type {oro.datagrid.CallbackListener} */
                new CallbackListener({
                    \$gridContainer: \$('#grid-' + gridName),
                    gridName: gridName,
                    dataField: 'id',
                    columnName: 'assigned',
                    processCallback: function (value, model, listener) {
                        var isActive = model.get(listener.columnName);
                        var id = model.get('id');
                        if (isActive) {
                            var label = '';

                            ";
        // line 67
        $context["label"] = "";
        // line 68
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_title"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 69
            echo "                                ";
            $context["is_extend"] = $this->getAttribute($this->getAttribute((isset($context["extend_provider"]) ? $context["extend_provider"] : $this->getContext($context, "extend_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => $context["title"]), "method"), "is", array(0 => "owner", 1 => "Custom"), "method");
            // line 70
            echo "                                ";
            $context["field_label"] = $context["title"];
            // line 71
            echo "                                ";
            if (((isset($context["is_extend"]) ? $context["is_extend"] : $this->getContext($context, "is_extend")) == true)) {
                // line 72
                echo "                                    ";
                $context["field_label"] = ("field_" . $context["title"]);
                // line 73
                echo "                                ";
            }
            // line 74
            echo "
                                label += model.get('";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["field_label"]) ? $context["field_label"] : $this->getContext($context, "field_label")), "html", null, true);
            echo "') + ' ';
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                            addedModels[id] = new MultipleEntityModel({
                                'id': model.get('id'),
                                'link': routing.generate(
                                        'oro_entity_detailed',
                                        {
                                            id: model.get('id'),
                                            className: '";
        // line 84
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), "\\", "_"), "html", null, true);
        echo "',
                                            fieldName: '";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "getId", array(), "method"), "getFieldName", array(), "method"), "html", null, true);
        echo "'
                                        }
                                ),
                                'label': label,
                                'extraData':
                                [
                                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_grid"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 92
            echo "                                        ";
            $context["is_extend"] = $this->getAttribute($this->getAttribute((isset($context["extend_provider"]) ? $context["extend_provider"] : $this->getContext($context, "extend_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => $context["field"]), "method"), "is", array(0 => "owner", 1 => "Custom"), "method");
            // line 93
            echo "                                        ";
            $context["field_name"] = $context["field"];
            // line 94
            echo "                                        ";
            if (((isset($context["is_extend"]) ? $context["is_extend"] : $this->getContext($context, "is_extend")) == true)) {
                // line 95
                echo "                                            ";
                $context["field_name"] = ("field_" . $context["field"]);
                // line 96
                echo "                                        ";
            }
            // line 97
            echo "                                    {
                                        'label': '";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity_provider"]) ? $context["entity_provider"] : $this->getContext($context, "entity_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => $context["field"]), "method"), "get", array(0 => "label"), "method"), "html", null, true);
            echo "',
                                        'value': model.get('";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), "html", null, true);
            echo "')
                                    },
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                ]
                            });
                        } else if (addedModels.hasOwnProperty(id)) {
                            delete addedModels[id];
                        }
                    }
                });
            });
        });
    </script>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), (isset($context["gridParams"]) ? $context["gridParams"] : $this->getContext($context, "gridParams")));
        echo "
        <input type=\"hidden\" name=\"appendRelation\" id=\"appendRelation\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "added"), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeRelation\" id=\"removeRelation\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "removed"), "method"), "html", null, true);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 23,  224 => 22,  219 => 21,  216 => 20,  208 => 115,  204 => 114,  190 => 102,  181 => 99,  177 => 98,  174 => 97,  171 => 96,  168 => 95,  165 => 94,  162 => 93,  159 => 92,  155 => 91,  146 => 85,  142 => 84,  133 => 77,  125 => 75,  122 => 74,  119 => 73,  116 => 72,  113 => 71,  110 => 70,  107 => 69,  102 => 68,  100 => 67,  82 => 52,  59 => 32,  53 => 28,  51 => 27,  47 => 25,  45 => 20,  38 => 15,  36 => 13,  35 => 12,  34 => 11,  33 => 10,  32 => 8,  31 => 7,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* <div class="widget-content grid-widget-content">*/
/*     {% set gridName = 'entity-relation-grid' %}*/
/* */
/*     {% set gridParams = {*/
/*         '_parameters' : {*/
/*             'data_in': app.request.get('added')|split(','),*/
/*             'data_not_in': app.request.get('removed')|split(','),*/
/*         },*/
/*         'class_name': entity_class,*/
/*         'entity_id': entity_id,*/
/*         'field_name': app.request.get('fieldName'),*/
/*         'id': app.request.get('id')*/
/*     } %}*/
/* */
/*     <style type="text/css">*/
/*         .grid-widget-content .grid, .grid-widget-content .table{margin-bottom: 0;}*/
/*     </style>*/
/* */
/*     {% block content %}*/
/*         {{ dataGrid.renderGrid(gridName, gridParams) }}*/
/*         <input type="hidden" name="appendRelation" id="appendRelation" value="{{ app.request.get('added') }}" />*/
/*         <input type="hidden" name="removeRelation" id="removeRelation" value="{{ app.request.get('removed') }}" />*/
/*     {% endblock %}*/
/* */
/*     <script type="text/javascript">*/
/*         {% set wid = app.request.get('_wid') %}*/
/*         require(['jquery', 'routing', 'oro/datagrid/callback-listener', 'oro/widget-manager',*/
/*             'oro/multiple-entity/model'],*/
/*         function($, routing, CallbackListener, WidgetManager, MultipleEntityModel) {*/
/*             var addedModels = {};*/
/*             WidgetManager.getWidgetInstance({{ wid|json_encode|raw }}, function(widget) {*/
/*                 if (widget.options.type == 'dialog') {*/
/*                     widget.getWidget().css({*/
/*                         'padding': 0,*/
/*                         'max-height': 500,*/
/*                         'overflow': 'auto'*/
/*                     });*/
/*                 }*/
/* */
/*                 widget.getAction('select', 'adopted', function(selectBtn) {*/
/*                     selectBtn.click(function() {*/
/*                         var addedVal = $('#appendRelation').val();*/
/*                         var removedVal = $('#removeRelation').val();*/
/*                         var appendedIds = addedVal.length ? addedVal.split(',') : [];*/
/*                         var removedIds = removedVal.length ? removedVal.split(',') : [];*/
/*                         widget.trigger('completeSelection', appendedIds, addedModels, removedIds);*/
/*                     });*/
/*                 });*/
/*             });*/
/* */
/*             var gridName = {{ gridName|json_encode|raw }};*/
/* */
/*             $(function() {*/
/*                 /** @type {oro.datagrid.CallbackListener} *//**/
/*                 new CallbackListener({*/
/*                     $gridContainer: $('#grid-' + gridName),*/
/*                     gridName: gridName,*/
/*                     dataField: 'id',*/
/*                     columnName: 'assigned',*/
/*                     processCallback: function (value, model, listener) {*/
/*                         var isActive = model.get(listener.columnName);*/
/*                         var id = model.get('id');*/
/*                         if (isActive) {*/
/*                             var label = '';*/
/* */
/*                             {% set label = '' %}*/
/*                             {% for title in relation.get('target_title') %}*/
/*                                 {% set is_extend = extend_provider.getConfig(relation.get('target_entity'), title).is('owner', 'Custom') %}*/
/*                                 {% set field_label = title %}*/
/*                                 {% if is_extend == true %}*/
/*                                     {% set field_label = 'field_' ~ title %}*/
/*                                 {% endif %}*/
/* */
/*                                 label += model.get('{{ field_label }}') + ' ';*/
/*                             {% endfor %}*/
/* */
/*                             addedModels[id] = new MultipleEntityModel({*/
/*                                 'id': model.get('id'),*/
/*                                 'link': routing.generate(*/
/*                                         'oro_entity_detailed',*/
/*                                         {*/
/*                                             id: model.get('id'),*/
/*                                             className: '{{ relation.get('target_entity')|replace('\\', '_') }}',*/
/*                                             fieldName: '{{ relation.getId().getFieldName() }}'*/
/*                                         }*/
/*                                 ),*/
/*                                 'label': label,*/
/*                                 'extraData':*/
/*                                 [*/
/*                                     {% for field in relation.get('target_grid') %}*/
/*                                         {% set is_extend = extend_provider.getConfig(relation.get('target_entity'), field).is('owner', 'Custom') %}*/
/*                                         {% set field_name = field %}*/
/*                                         {% if is_extend == true %}*/
/*                                             {% set field_name = 'field_' ~ field %}*/
/*                                         {% endif %}*/
/*                                     {*/
/*                                         'label': '{{ entity_provider.getConfig(relation.get('target_entity'), field).get('label') }}',*/
/*                                         'value': model.get('{{ field_name }}')*/
/*                                     },*/
/*                                     {% endfor %}*/
/*                                 ]*/
/*                             });*/
/*                         } else if (addedModels.hasOwnProperty(id)) {*/
/*                             delete addedModels[id];*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <div class="widget-actions">*/
/*         <button type="reset" class="btn">{{ 'Cancel'|trans }}</button>*/
/*         <button type="button" class="btn btn-primary" data-action-name="select">{{ 'Select'|trans }}</button>*/
/*     </div>*/
/* </div>*/
/* */
