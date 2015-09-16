<?php

/* PimEnrichBundle:Association:_associations.html.twig */
class __TwigTemplate_152f747437825906797cd3a656867d8970d974e1aa6cc4894770a53fcf1e67c4 extends Twig_Template
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
        // line 1
        if (twig_test_empty((isset($context["associationTypes"]) ? $context["associationTypes"] : $this->getContext($context, "associationTypes")))) {
            // line 2
            echo "    <div class=\"buffer-top buffer-left\">
        <span class=\"buffer-small-right\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.association type.none exist"), "html", null, true);
            echo "
        </span>
        ";
            // line 6
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_association_type_index")) {
                // line 7
                echo "            <a href=\"";
                echo $this->env->getExtension('routing')->getPath("pim_enrich_association_type_index");
                echo "\">
                <span class=\"label link-label\">";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.association type.create one"), "html", null, true);
                echo "</span>
            </a>
        ";
            }
            // line 11
            echo "    </div>
";
        } else {
            // line 13
            echo "    ";
            $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Association:_associations.html.twig", 13);
            // line 14
            echo "
    <script type=\"text/javascript\">
        require(
            ['jquery', 'underscore', 'oro/mediator'],
            function(\$, _, mediator) {
                'use strict';
                \$(function() {
                    \$('#association-list').on('shown', 'a[data-toggle=\"tab\"]', function() {
                        var associationId = \$(this).attr('id').replace(/^\\D+/g, '');
                        changeAssociation(associationId);
                    });
                    var dataGrids = {
                        product: {
                            name:          'association-product-grid',
                            appendField:   'appendProducts',
                            removeField:   'removeProducts',
                            paramName:     'associationType',
                            getParamValue: function(associationId) {
                                return associationId;
                            }
                        },
                        group: {
                            name:          'association-group-grid',
                            appendField:   'appendGroups',
                            removeField:   'removeGroups',
                            paramName:     'associatedIds',
                            getParamValue: function(associationId) {
                                var ids = \$('#association-link-' + associationId).data('associated-group-ids');
                                return ids ? _.extend({}, String(ids).split(',')) : false;
                            }
                        }
                    };

                    var changeAssociation = function (associationId) {
                        var \$idField = \$('#pim_product_edit_associations').find('input[type=\"hidden\"][value=\"' + associationId + '\"]');

                        _.each(dataGrids, function(datagrid) {
                            var appendFieldId = '#' + \$idField.siblings('[id\$=\"' + datagrid.appendField + '\"]').attr('id'),
                                removeFieldId = '#' + \$idField.siblings('[id\$=\"' + datagrid.removeField + '\"]').attr('id');
                                mediator
                                    .trigger('column_form_listener:set_selectors:' + datagrid.name, { included: appendFieldId, excluded: removeFieldId })
                                    .trigger('datagrid:removeParam:' + datagrid.name, datagrid.paramName)
                                    .trigger('datagrid:setParam:' + datagrid.name, datagrid.paramName, datagrid.getParamValue(associationId))
                                    .trigger('datagrid:doRefresh:' + datagrid.name);
                        });
                    };

                    \$('#association-buttons').on('click', 'button[data-target-association]', function() {
                        var targetAssociation = \$(this).attr('data-target-association');

                        _.each(dataGrids, function(datagrid, gridType) {
                            var \$grid = \$('#' + datagrid.name);
                            if (gridType === targetAssociation) {
                                \$grid.removeClass('hide');
                            } else {
                                \$grid.addClass('hide');
                            }
                        });

                        \$(this).addClass('hide').siblings('[data-target-association]').removeClass('hide');
                    });

                    // Execute a callback when the column listeners have been instantiated
                    var onColumnListenersReady = function(callback) {
                        var gridNames = _.pluck(dataGrids, 'name');

                        mediator.on('column_form_listener:initialized', function onColumnListenerReady (gridName) {
                            gridNames = _.without(gridNames, gridName);
                            if (!gridNames.length) {
                                mediator.off('column_form_listener:initialized', onColumnListenerReady);
                                callback();
                            }
                        });
                    };

                    // Trigger the shown event on the active tab to set the column listener selectors
                    onColumnListenersReady(function() {
                        \$('#association-list').find('li.active').find('a').trigger('shown');
                    });
                });
            }
        );
    </script>

    <div id=\"association-list\" class=\"tab-groups\">
        <ul class=\"nav nav-list\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["associationTypes"]) ? $context["associationTypes"] : $this->getContext($context, "associationTypes")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["associationType"]) {
                // line 101
                echo "                <li class=\"tab";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " active";
                }
                echo "\">
                    ";
                // line 102
                $context["currentAssociation"] = $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getAssociationForType", array(0 => $context["associationType"]), "method");
                // line 103
                echo "                    ";
                $context["associatedGroupIds"] = array();
                // line 104
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "groups", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 105
                    echo "                        ";
                    $context["associatedGroupIds"] = twig_array_merge((isset($context["associatedGroupIds"]) ? $context["associatedGroupIds"] : $this->getContext($context, "associatedGroupIds")), array(0 => $this->getAttribute($context["group"], "id", array())));
                    // line 106
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "
                    <a id=\"association-link-";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["associationType"], "id", array()), "html", null, true);
                echo "\" href=\"#association-tab-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["associationType"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\" data-associated-group-ids=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["associatedGroupIds"]) ? $context["associatedGroupIds"] : $this->getContext($context, "associatedGroupIds")), ","), "html", null, true);
                echo "\">
                        ";
                // line 109
                $context["associationCount"] = (twig_length_filter($this->env, $this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "products", array())) + twig_length_filter($this->env, $this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "groups", array())));
                // line 110
                echo "                        <i class=\"icon-ok ";
                echo ((((isset($context["associationCount"]) ? $context["associationCount"] : $this->getContext($context, "associationCount")) > 0)) ? ("green") : ("gray"));
                echo "\"></i>
                        ";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["associationType"], "label", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, (isset($context["associationCount"]) ? $context["associationCount"] : $this->getContext($context, "associationCount")), "html", null, true);
                echo ")
                    </a>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </ul>
    </div>

    <div class=\"tab-content fullheight\">
        <div id=\"association-buttons\" class=\"navbar-extra pull-right\">
            <button type=\"button\" class=\"btn pull-right hide\" data-target-association=\"product\">
                <i class=\"icon-random\"></i>
                ";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.association type.show products"), "html", null, true);
            echo "
            </button>
            <button type=\"button\" class=\"btn pull-right\" data-target-association=\"group\">
                <i class=\"icon-random\"></i>
                ";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.association type.show groups"), "html", null, true);
            echo "
            </button>
        </div>
        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["associationTypes"]) ? $context["associationTypes"] : $this->getContext($context, "associationTypes")));
            foreach ($context['_seq'] as $context["_key"] => $context["associationType"]) {
                // line 130
                echo "             <div id=\"association-tab-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["associationType"], "id", array()), "html", null, true);
                echo "\" class=\"tab-pane\">
                <h3 class=\"unspaced\">
                    ";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["associationType"], "label", array()), "html", null, true);
                echo "
                    <span class=\"muted small\">
                        ";
                // line 134
                $context["currentAssociation"] = $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getAssociationForType", array(0 => $context["associationType"]), "method");
                // line 135
                echo "                        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.number of associations", array("%productCount%" => twig_length_filter($this->env, $this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "products", array())), "%groupCount%" => twig_length_filter($this->env, $this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "groups", array())))), "html", null, true);
                echo "
                    </span>
                </h3>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['associationType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "
        <div id=\"association-product-grid\">
            ";
            // line 142
            echo $context["dataGrid"]->getrenderGrid("association-product-grid", array("product" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "associationType" => $this->getAttribute(twig_first($this->env, (isset($context["associationTypes"]) ? $context["associationTypes"] : $this->getContext($context, "associationTypes"))), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale"))));
            echo "
        </div>

        <div id=\"association-group-grid\" class=\"hide\">
            ";
            // line 146
            $context["currentAssociation"] = $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getAssociationForType", array(0 => twig_first($this->env, (isset($context["associationTypes"]) ? $context["associationTypes"] : $this->getContext($context, "associationTypes")))), "method");
            // line 147
            echo "            ";
            $context["associatedGroupIds"] = array();
            // line 148
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentAssociation"]) ? $context["currentAssociation"] : $this->getContext($context, "currentAssociation")), "groups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 149
                echo "                ";
                $context["associatedGroupIds"] = twig_array_merge((isset($context["associatedGroupIds"]) ? $context["associatedGroupIds"] : $this->getContext($context, "associatedGroupIds")), array(0 => $this->getAttribute($context["group"], "id", array())));
                // line 150
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
            ";
            // line 152
            echo $context["dataGrid"]->getrenderGrid("association-group-grid", array("associatedIds" => (isset($context["associatedGroupIds"]) ? $context["associatedGroupIds"] : $this->getContext($context, "associatedGroupIds"))));
            echo "
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Association:_associations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 152,  300 => 151,  294 => 150,  291 => 149,  286 => 148,  283 => 147,  281 => 146,  274 => 142,  270 => 140,  258 => 135,  256 => 134,  251 => 132,  245 => 130,  241 => 129,  235 => 126,  228 => 122,  219 => 115,  199 => 111,  194 => 110,  192 => 109,  184 => 108,  181 => 107,  175 => 106,  172 => 105,  167 => 104,  164 => 103,  162 => 102,  155 => 101,  138 => 100,  50 => 14,  47 => 13,  43 => 11,  37 => 8,  32 => 7,  30 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if associationTypes is empty %}*/
/*     <div class="buffer-top buffer-left">*/
/*         <span class="buffer-small-right">*/
/*             {{ 'info.association type.none exist'|trans }}*/
/*         </span>*/
/*         {% if resource_granted('pim_enrich_association_type_index') %}*/
/*             <a href="{{ path('pim_enrich_association_type_index') }}">*/
/*                 <span class="label link-label">{{ 'info.association type.create one'|trans }}</span>*/
/*             </a>*/
/*         {% endif %}*/
/*     </div>*/
/* {% else %}*/
/*     {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'underscore', 'oro/mediator'],*/
/*             function($, _, mediator) {*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     $('#association-list').on('shown', 'a[data-toggle="tab"]', function() {*/
/*                         var associationId = $(this).attr('id').replace(/^\D+/g, '');*/
/*                         changeAssociation(associationId);*/
/*                     });*/
/*                     var dataGrids = {*/
/*                         product: {*/
/*                             name:          'association-product-grid',*/
/*                             appendField:   'appendProducts',*/
/*                             removeField:   'removeProducts',*/
/*                             paramName:     'associationType',*/
/*                             getParamValue: function(associationId) {*/
/*                                 return associationId;*/
/*                             }*/
/*                         },*/
/*                         group: {*/
/*                             name:          'association-group-grid',*/
/*                             appendField:   'appendGroups',*/
/*                             removeField:   'removeGroups',*/
/*                             paramName:     'associatedIds',*/
/*                             getParamValue: function(associationId) {*/
/*                                 var ids = $('#association-link-' + associationId).data('associated-group-ids');*/
/*                                 return ids ? _.extend({}, String(ids).split(',')) : false;*/
/*                             }*/
/*                         }*/
/*                     };*/
/* */
/*                     var changeAssociation = function (associationId) {*/
/*                         var $idField = $('#pim_product_edit_associations').find('input[type="hidden"][value="' + associationId + '"]');*/
/* */
/*                         _.each(dataGrids, function(datagrid) {*/
/*                             var appendFieldId = '#' + $idField.siblings('[id$="' + datagrid.appendField + '"]').attr('id'),*/
/*                                 removeFieldId = '#' + $idField.siblings('[id$="' + datagrid.removeField + '"]').attr('id');*/
/*                                 mediator*/
/*                                     .trigger('column_form_listener:set_selectors:' + datagrid.name, { included: appendFieldId, excluded: removeFieldId })*/
/*                                     .trigger('datagrid:removeParam:' + datagrid.name, datagrid.paramName)*/
/*                                     .trigger('datagrid:setParam:' + datagrid.name, datagrid.paramName, datagrid.getParamValue(associationId))*/
/*                                     .trigger('datagrid:doRefresh:' + datagrid.name);*/
/*                         });*/
/*                     };*/
/* */
/*                     $('#association-buttons').on('click', 'button[data-target-association]', function() {*/
/*                         var targetAssociation = $(this).attr('data-target-association');*/
/* */
/*                         _.each(dataGrids, function(datagrid, gridType) {*/
/*                             var $grid = $('#' + datagrid.name);*/
/*                             if (gridType === targetAssociation) {*/
/*                                 $grid.removeClass('hide');*/
/*                             } else {*/
/*                                 $grid.addClass('hide');*/
/*                             }*/
/*                         });*/
/* */
/*                         $(this).addClass('hide').siblings('[data-target-association]').removeClass('hide');*/
/*                     });*/
/* */
/*                     // Execute a callback when the column listeners have been instantiated*/
/*                     var onColumnListenersReady = function(callback) {*/
/*                         var gridNames = _.pluck(dataGrids, 'name');*/
/* */
/*                         mediator.on('column_form_listener:initialized', function onColumnListenerReady (gridName) {*/
/*                             gridNames = _.without(gridNames, gridName);*/
/*                             if (!gridNames.length) {*/
/*                                 mediator.off('column_form_listener:initialized', onColumnListenerReady);*/
/*                                 callback();*/
/*                             }*/
/*                         });*/
/*                     };*/
/* */
/*                     // Trigger the shown event on the active tab to set the column listener selectors*/
/*                     onColumnListenersReady(function() {*/
/*                         $('#association-list').find('li.active').find('a').trigger('shown');*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* */
/*     <div id="association-list" class="tab-groups">*/
/*         <ul class="nav nav-list">*/
/*             {% for associationType in associationTypes %}*/
/*                 <li class="tab{% if loop.first %} active{% endif %}">*/
/*                     {% set currentAssociation = product.getAssociationForType(associationType) %}*/
/*                     {% set associatedGroupIds = [] %}*/
/*                     {% for group in currentAssociation.groups %}*/
/*                         {% set associatedGroupIds = associatedGroupIds|merge([group.id]) %}*/
/*                     {% endfor %}*/
/* */
/*                     <a id="association-link-{{ associationType.id }}" href="#association-tab-{{ associationType.id }}" data-toggle="tab" data-associated-group-ids="{{ associatedGroupIds|join(',') }}">*/
/*                         {% set associationCount = currentAssociation.products|length + currentAssociation.groups|length %}*/
/*                         <i class="icon-ok {{ associationCount > 0 ? 'green' : 'gray' }}"></i>*/
/*                         {{ associationType.label }} ({{ associationCount }})*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="tab-content fullheight">*/
/*         <div id="association-buttons" class="navbar-extra pull-right">*/
/*             <button type="button" class="btn pull-right hide" data-target-association="product">*/
/*                 <i class="icon-random"></i>*/
/*                 {{ 'info.association type.show products'|trans }}*/
/*             </button>*/
/*             <button type="button" class="btn pull-right" data-target-association="group">*/
/*                 <i class="icon-random"></i>*/
/*                 {{ 'info.association type.show groups'|trans }}*/
/*             </button>*/
/*         </div>*/
/*         {% for associationType in associationTypes %}*/
/*              <div id="association-tab-{{ associationType.id }}" class="tab-pane">*/
/*                 <h3 class="unspaced">*/
/*                     {{ associationType.label }}*/
/*                     <span class="muted small">*/
/*                         {% set currentAssociation = product.getAssociationForType(associationType) %}*/
/*                         {{ 'info.product.number of associations'|trans({ '%productCount%': currentAssociation.products|length, '%groupCount%': currentAssociation.groups|length }) }}*/
/*                     </span>*/
/*                 </h3>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div id="association-product-grid">*/
/*             {{ dataGrid.renderGrid('association-product-grid', { product: product.id, associationType: associationTypes|first.id, dataLocale: dataLocale }) }}*/
/*         </div>*/
/* */
/*         <div id="association-group-grid" class="hide">*/
/*             {% set currentAssociation = product.getAssociationForType(associationTypes|first) %}*/
/*             {% set associatedGroupIds = [] %}*/
/*             {% for group in currentAssociation.groups %}*/
/*                 {% set associatedGroupIds = associatedGroupIds|merge([group.id]) %}*/
/*             {% endfor %}*/
/* */
/*             {{ dataGrid.renderGrid('association-group-grid', { associatedIds: associatedGroupIds }) }}*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
