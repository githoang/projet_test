<?php

/* PimDataGridBundle::macros.html.twig */
class __TwigTemplate_dfcbf7bebe849d708df648aa54c920445180b559f34cd047a8ca16c777fe7b3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 65
        echo "
";
    }

    // line 1
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["oroDataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "PimDataGridBundle::macros.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["oroDataGrid"]->getrenderGrid((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), (isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getrenderStatefulGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            echo "    <div id=\"grid-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-type=\"datagrid\" ";
            if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            echo "></div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'routing', 'oro/datagrid-builder', 'oro/pageable-collection', 'pim/datagrid/state'],
            function (\$, Routing, datagridBuilder, PageableCollection, DatagridState) {
                'use strict';
                \$(function() {
                    var urlParams = ";
            // line 17
            echo twig_jsonencode_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
            echo ";
                    urlParams.alias = '";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "';
                    urlParams.params = ";
            // line 19
            echo twig_jsonencode_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
            echo ";

                    var state = DatagridState.get('";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "', ['view', 'filters', 'columns']);

                    if (state.view) {
                        urlParams['";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[_parameters][view][id]'] = state.view;
                    }

                    if (state.filters) {
                        var collection = new PageableCollection();

                        var filters = collection.decodeStateData(state.filters);
                        collection.processFiltersParams(urlParams, filters, '";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[_filter]');

                        for (var column in filters.sorters) {
                            urlParams['";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[_sort_by][' + column + ']'] =
                                parseInt(filters.sorters[column]) === 1 ?
                                    'DESC' :
                                    'ASC';
                        }
                    }

                    if (state.columns) {
                        urlParams['";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "[_parameters][view][columns]'] = state.columns;
                    }

                    \$.get(Routing.generate('pim_datagrid_load', urlParams), function(resp) {
                        if (state.columns) {
                            resp.metadata.state.parameters = _.extend({}, resp.metadata.state.parameters, { view: { columns: state.columns }});
                        }
                        \$('#grid-";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "').data({ 'metadata': resp.metadata, 'data': JSON.parse(resp.data) });

                        var modules = resp.metadata.requireJSModules;
                        modules.push('pim/datagrid/state-listener');
                        require(modules, function () {
                            var builders = _.toArray(arguments);
                            \$(function () {
                                datagridBuilder(builders);
                            });
                        });
                    });
                });
            }
        );
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getrenderHistoryGrid($__entity__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    ";
            echo $this->getAttribute($this, "renderGrid", array(0 => "history-grid", 1 => array("object_class" => $this->env->getExtension('pim_object_class_extension')->getClass((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))), "object_id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  172 => 69,  145 => 49,  135 => 42,  124 => 34,  118 => 31,  108 => 24,  102 => 21,  97 => 19,  93 => 18,  89 => 17,  72 => 10,  58 => 9,  44 => 3,  41 => 2,  27 => 1,  22 => 65,  19 => 5,);
    }
}
/* {% macro renderGrid(name, params = {}, renderParams = {}) %}*/
/*     {% import 'OroDataGridBundle::macros.html.twig' as oroDataGrid %}*/
/*     {{ oroDataGrid.renderGrid(name, params, renderParams) }}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Datagrid macro to load the grid asynchronously*/
/* #}*/
/* {% macro renderStatefulGrid(name, params = {}, renderParams = {}) %}*/
/*     <div id="grid-{{ name }}" data-type="datagrid" {% if renderParams.cssClass is defined %} class="{{ renderParams.cssClass }}" {% endif %}></div>*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'routing', 'oro/datagrid-builder', 'oro/pageable-collection', 'pim/datagrid/state'],*/
/*             function ($, Routing, datagridBuilder, PageableCollection, DatagridState) {*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     var urlParams = {{ params|json_encode|raw }};*/
/*                     urlParams.alias = '{{ name }}';*/
/*                     urlParams.params = {{ params|json_encode|raw }};*/
/* */
/*                     var state = DatagridState.get('{{ name }}', ['view', 'filters', 'columns']);*/
/* */
/*                     if (state.view) {*/
/*                         urlParams['{{ name }}[_parameters][view][id]'] = state.view;*/
/*                     }*/
/* */
/*                     if (state.filters) {*/
/*                         var collection = new PageableCollection();*/
/* */
/*                         var filters = collection.decodeStateData(state.filters);*/
/*                         collection.processFiltersParams(urlParams, filters, '{{ name }}[_filter]');*/
/* */
/*                         for (var column in filters.sorters) {*/
/*                             urlParams['{{ name }}[_sort_by][' + column + ']'] =*/
/*                                 parseInt(filters.sorters[column]) === 1 ?*/
/*                                     'DESC' :*/
/*                                     'ASC';*/
/*                         }*/
/*                     }*/
/* */
/*                     if (state.columns) {*/
/*                         urlParams['{{ name }}[_parameters][view][columns]'] = state.columns;*/
/*                     }*/
/* */
/*                     $.get(Routing.generate('pim_datagrid_load', urlParams), function(resp) {*/
/*                         if (state.columns) {*/
/*                             resp.metadata.state.parameters = _.extend({}, resp.metadata.state.parameters, { view: { columns: state.columns }});*/
/*                         }*/
/*                         $('#grid-{{ name }}').data({ 'metadata': resp.metadata, 'data': JSON.parse(resp.data) });*/
/* */
/*                         var modules = resp.metadata.requireJSModules;*/
/*                         modules.push('pim/datagrid/state-listener');*/
/*                         require(modules, function () {*/
/*                             var builders = _.toArray(arguments);*/
/*                             $(function () {*/
/*                                 datagridBuilder(builders);*/
/*                             });*/
/*                         });*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Datagrid macro to render entity history grid*/
/* #}*/
/* {% macro renderHistoryGrid(entity) %}*/
/*     {{ _self.renderGrid('history-grid', { object_class: entity|class, object_id: entity.id }) }}*/
/* {% endmacro %}*/
/* */
