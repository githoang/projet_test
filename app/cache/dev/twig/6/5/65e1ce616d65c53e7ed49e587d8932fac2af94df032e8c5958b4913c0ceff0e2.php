<?php

/* PimEnrichBundle:MassEditAction/configure:set-attribute-requirements.html.twig */
class __TwigTemplate_57a949d0436304b776de16d307694513e3d089cc826ff26b77cacc3d3dcc32cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:set-attribute-requirements.html.twig", 1);
        $this->blocks = array(
            'formTitle' => array($this, 'block_formTitle'),
            'formContent' => array($this, 'block_formContent'),
            'disableFormScript' => array($this, 'block_disableFormScript'),
            'enableFormScript' => array($this, 'block_enableFormScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:configure/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formTitle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    <div class=\"pull-right\">
        <select id=\"pim_catalog_mass_edit_family_add_attribute\" class=\"input-large\" multiple=\"multiple\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "value", array()), "attributes", array()));
        foreach ($context['_seq'] as $context["groupLabel"] => $context["attributes"]) {
            // line 8
            echo "            <optgroup label=\"";
            echo twig_escape_filter($this->env, $context["groupLabel"], "html", null, true);
            echo "\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["attributes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 10
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "label", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </optgroup>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupLabel'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </select>
    </div>
";
    }

    // line 18
    public function block_formContent($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        $context["columnWidth"] = 10;
        // line 21
        echo "    <table class=\"table groups attributes\">
        <thead>
            <th width=\"10%\">";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Label")), "html", null, true);
        echo "</th>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "value", array()), "channels", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 25
            echo "                <th class=\"channel\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["columnWidth"]) ? $context["columnWidth"] : $this->getContext($context, "columnWidth")), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["channel"], "label", array())), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            <th width=\"5%\">&nbsp;</th>
        </thead>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "value", array()), "attributes", array()));
        foreach ($context['_seq'] as $context["groupLabel"] => $context["attributes"]) {
            // line 30
            echo "        <tbody>
            <tr class=\"hide group\">
                <td colspan=\"10\"><i class=\"icon-collapse-alt\"></i>";
            // line 32
            echo twig_escape_filter($this->env, $context["groupLabel"], "html", null, true);
            echo "</td>
            </tr>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["attributes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 35
                echo "            <tr class=\"hide attribute\" data-code=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "code", array()), "html", null, true);
                echo "\">
                <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "label", array()), "html", null, true);
                echo "</td>
                ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "value", array()), "channels", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 38
                    echo "                    <td>
                        ";
                    // line 39
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "attributeRequirements", array()), (($this->getAttribute($context["attribute"], "code", array()) . "_") . $this->getAttribute($context["channel"], "code", array())), array(), "array"), 'widget');
                    echo "
                    </td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                <td>
                    <i class=\"icon-trash remove-attribute\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove this attribute"), "html", null, true);
                echo "\"></i>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </tbody>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupLabel'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </table>

    ";
        // line 52
        echo "    <script type=\"text/javascript\">
        require(
            ['jquery', 'bootstrap', 'jquery.multiselect', 'jquery.multiselect.filter'],
            function (\$) {
                'use strict';

                \$(function() {
                    // Group collapsing
                    \$('.group').click(function() {
                        if (\$(this).find('i').is('.icon-collapse-alt')) {
                            \$(this)
                                .addClass('collapsed')
                                .parent()
                                .find('tr:not(.group):not(.hide)')
                                .hide();
                        } else {
                            \$(this)
                                .removeClass('collapsed')
                                .parent()
                                .find('tr:not(.group):not(.hide)')
                                .removeAttr(\"style\");
                        }
                        \$(this).find('i').toggleClass('icon-expand-alt icon-collapse-alt');
                    });

                    // Requirement tick
                    \$('table.attributes').on('click', '.attribute-requirement:not(.read-only) i', function() {
                        \$(this).toggleClass('icon-ok required').toggleClass('icon-circle non-required');

                        var \$input = \$(this).siblings('input[type=\"hidden\"]').eq(0);
                        var checked = (\$input.val() == 1);
                        \$(this).attr('data-original-title', \$(this).parent().data((checked ? 'not-' : '') + 'required-title')).tooltip('show');
                        \$input.val(checked ? \"0\" : \"1\").trigger('change');
                    });

                    // Attribute addition
                    var opts = {
                        title: '";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select attributes"), "html", null, true);
        echo "',
                        placeholder: '";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "',
                        header: '',
                        height: 175,
                        minWidth: 50,
                        classes: 'pimmultiselect',
                        position: {
                            my: 'right top',
                            at: 'right bottom',
                            collision: 'none'
                        }
                    };
                    opts.selectedText = opts.title;
                    opts.noneSelectedText = opts.title;
                    var \$el = \$('#pim_catalog_mass_edit_family_add_attribute')
                        .addClass('pimmultiselect')
                        .multiselect(opts)
                        .multiselectfilter({
                            label: false,
                            placeholder: opts.placeholder
                        });
                    var \$menu = \$('.ui-multiselect-menu.pimmultiselect').appendTo('#container');
                    var saveButton = '";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select"), "html", null, true);
        echo "';

                    var footerContainer = \$('<div>').addClass('ui-multiselect-footer').appendTo(\$menu);
                    var \$saveButton = \$('<a>').addClass('btn btn-small').html(saveButton).on('click', function () {
                        \$el.multiselect('close');
                        var checked = _.map(\$el.multiselect('getChecked'), function(el) {
                            return el.value;
                        });
                        \$('tr.attribute').each(function() {
                            var \$field = \$(this);
                            if (_.contains(checked, \$field.data('code'))) {
                                \$field.removeClass('hide');
                                // Hide it if the group is collapsed
                                if (\$(this).parent().find('tr.group').is('.collapsed')) {
                                    \$field.hide();
                                }
                            } else {
                                \$field.addClass('hide');
                            }
                        });
                        \$('tr.group').each(function() {
                            if (\$(this).parent('tbody').find('tr.attribute:not(.hide)').length) {
                                \$(this).removeClass('hide');
                            } else {
                                \$(this).addClass('hide');
                            }
                        });
                    }).appendTo(footerContainer);

                    var \$openButton = \$('button.pimmultiselect').addClass('btn btn-group');
                    \$openButton.append(\$('<span>', { 'class': 'caret' })).removeAttr('style');

                    \$menu.find('input[type=\"search\"]').width(207);

                    /**
                     * Manage removal of attributes from the form
                     */
                    \$('.remove-attribute').on('click', function () {
                        \$el.multiselect('widget').find('input[value=\"' + \$(this).parents('tr').data('code') + '\"]').click();
                        \$saveButton.click();
                    });

                    /**
                     * Remove hidden attributes from the form before submitting
                     */
                    \$('#";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').submit(function(event){
                        \$('tr.attribute.hide').remove();

                        return true;
                    });
                });
            }
        );
    </script>
";
    }

    // line 167
    public function block_disableFormScript($context, array $blocks = array())
    {
        // line 168
        echo "    \$('.attribute-requirement').addClass('read-only');
";
    }

    // line 171
    public function block_enableFormScript($context, array $blocks = array())
    {
        // line 172
        echo "    \$('.attribute-requirement').removeClass('read-only');
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:set-attribute-requirements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 172,  315 => 171,  310 => 168,  307 => 167,  293 => 156,  245 => 111,  221 => 90,  217 => 89,  178 => 52,  174 => 49,  167 => 47,  157 => 43,  154 => 42,  145 => 39,  142 => 38,  138 => 37,  134 => 36,  129 => 35,  125 => 34,  120 => 32,  116 => 30,  112 => 29,  108 => 27,  97 => 25,  93 => 24,  89 => 23,  85 => 21,  82 => 20,  80 => 19,  77 => 18,  71 => 14,  64 => 12,  53 => 10,  49 => 9,  44 => 8,  40 => 7,  36 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:configure/layout.html.twig' %}*/
/* */
/* {% block formTitle %}*/
/*     {# Attributes selection #}*/
/*     <div class="pull-right">*/
/*         <select id="pim_catalog_mass_edit_family_add_attribute" class="input-large" multiple="multiple">*/
/*             {% for groupLabel, attributes in form.operation.vars.value.attributes %}*/
/*             <optgroup label="{{ groupLabel }}">*/
/*                 {% for attribute in attributes %}*/
/*                 <option value="{{ attribute.code }}">{{ attribute.label }}</option>*/
/*                 {% endfor %}*/
/*             </optgroup>*/
/*             {% endfor %}*/
/*         </select>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block formContent %}*/
/*     {# Requirements grid #}*/
/*     {% set columnWidth = 10 %}*/
/*     <table class="table groups attributes">*/
/*         <thead>*/
/*             <th width="10%">{{ 'Label'|trans|upper }}</th>*/
/*             {% for channel in form.operation.vars.value.channels %}*/
/*                 <th class="channel" width="{{ columnWidth }}%">{{ channel.label|upper }}</th>*/
/*             {% endfor %}*/
/*             <th width="5%">&nbsp;</th>*/
/*         </thead>*/
/*         {% for groupLabel, attributes in form.operation.vars.value.attributes %}*/
/*         <tbody>*/
/*             <tr class="hide group">*/
/*                 <td colspan="10"><i class="icon-collapse-alt"></i>{{ groupLabel }}</td>*/
/*             </tr>*/
/*             {% for attribute in attributes %}*/
/*             <tr class="hide attribute" data-code="{{ attribute.code }}">*/
/*                 <td>{{ attribute.label }}</td>*/
/*                 {% for channel in form.operation.vars.value.channels %}*/
/*                     <td>*/
/*                         {{ form_widget(form.operation.attributeRequirements[(attribute.code ~ '_' ~ channel.code)]) }}*/
/*                     </td>*/
/*                 {% endfor %}*/
/*                 <td>*/
/*                     <i class="icon-trash remove-attribute" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'Remove this attribute'|trans }}"></i>*/
/*                 </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*         {% endfor %}*/
/*     </table>*/
/* */
/*     {# Scripts #}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'bootstrap', 'jquery.multiselect', 'jquery.multiselect.filter'],*/
/*             function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     // Group collapsing*/
/*                     $('.group').click(function() {*/
/*                         if ($(this).find('i').is('.icon-collapse-alt')) {*/
/*                             $(this)*/
/*                                 .addClass('collapsed')*/
/*                                 .parent()*/
/*                                 .find('tr:not(.group):not(.hide)')*/
/*                                 .hide();*/
/*                         } else {*/
/*                             $(this)*/
/*                                 .removeClass('collapsed')*/
/*                                 .parent()*/
/*                                 .find('tr:not(.group):not(.hide)')*/
/*                                 .removeAttr("style");*/
/*                         }*/
/*                         $(this).find('i').toggleClass('icon-expand-alt icon-collapse-alt');*/
/*                     });*/
/* */
/*                     // Requirement tick*/
/*                     $('table.attributes').on('click', '.attribute-requirement:not(.read-only) i', function() {*/
/*                         $(this).toggleClass('icon-ok required').toggleClass('icon-circle non-required');*/
/* */
/*                         var $input = $(this).siblings('input[type="hidden"]').eq(0);*/
/*                         var checked = ($input.val() == 1);*/
/*                         $(this).attr('data-original-title', $(this).parent().data((checked ? 'not-' : '') + 'required-title')).tooltip('show');*/
/*                         $input.val(checked ? "0" : "1").trigger('change');*/
/*                     });*/
/* */
/*                     // Attribute addition*/
/*                     var opts = {*/
/*                         title: '{{ "Select attributes"|trans }}',*/
/*                         placeholder: '{{ "Search"|trans }}',*/
/*                         header: '',*/
/*                         height: 175,*/
/*                         minWidth: 50,*/
/*                         classes: 'pimmultiselect',*/
/*                         position: {*/
/*                             my: 'right top',*/
/*                             at: 'right bottom',*/
/*                             collision: 'none'*/
/*                         }*/
/*                     };*/
/*                     opts.selectedText = opts.title;*/
/*                     opts.noneSelectedText = opts.title;*/
/*                     var $el = $('#pim_catalog_mass_edit_family_add_attribute')*/
/*                         .addClass('pimmultiselect')*/
/*                         .multiselect(opts)*/
/*                         .multiselectfilter({*/
/*                             label: false,*/
/*                             placeholder: opts.placeholder*/
/*                         });*/
/*                     var $menu = $('.ui-multiselect-menu.pimmultiselect').appendTo('#container');*/
/*                     var saveButton = '{{ "Select"|trans }}';*/
/* */
/*                     var footerContainer = $('<div>').addClass('ui-multiselect-footer').appendTo($menu);*/
/*                     var $saveButton = $('<a>').addClass('btn btn-small').html(saveButton).on('click', function () {*/
/*                         $el.multiselect('close');*/
/*                         var checked = _.map($el.multiselect('getChecked'), function(el) {*/
/*                             return el.value;*/
/*                         });*/
/*                         $('tr.attribute').each(function() {*/
/*                             var $field = $(this);*/
/*                             if (_.contains(checked, $field.data('code'))) {*/
/*                                 $field.removeClass('hide');*/
/*                                 // Hide it if the group is collapsed*/
/*                                 if ($(this).parent().find('tr.group').is('.collapsed')) {*/
/*                                     $field.hide();*/
/*                                 }*/
/*                             } else {*/
/*                                 $field.addClass('hide');*/
/*                             }*/
/*                         });*/
/*                         $('tr.group').each(function() {*/
/*                             if ($(this).parent('tbody').find('tr.attribute:not(.hide)').length) {*/
/*                                 $(this).removeClass('hide');*/
/*                             } else {*/
/*                                 $(this).addClass('hide');*/
/*                             }*/
/*                         });*/
/*                     }).appendTo(footerContainer);*/
/* */
/*                     var $openButton = $('button.pimmultiselect').addClass('btn btn-group');*/
/*                     $openButton.append($('<span>', { 'class': 'caret' })).removeAttr('style');*/
/* */
/*                     $menu.find('input[type="search"]').width(207);*/
/* */
/*                     /***/
/*                      * Manage removal of attributes from the form*/
/*                      *//**/
/*                     $('.remove-attribute').on('click', function () {*/
/*                         $el.multiselect('widget').find('input[value="' + $(this).parents('tr').data('code') + '"]').click();*/
/*                         $saveButton.click();*/
/*                     });*/
/* */
/*                     /***/
/*                      * Remove hidden attributes from the form before submitting*/
/*                      *//**/
/*                     $('#{{ form.vars.id }}').submit(function(event){*/
/*                         $('tr.attribute.hide').remove();*/
/* */
/*                         return true;*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block disableFormScript %}*/
/*     $('.attribute-requirement').addClass('read-only');*/
/* {% endblock %}*/
/* */
/* {% block enableFormScript %}*/
/*     $('.attribute-requirement').removeClass('read-only');*/
/* {% endblock %}*/
/* */
