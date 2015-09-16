<?php

/* PimEnrichBundle:MassEditAction/configure:edit-common-attributes.html.twig */
class __TwigTemplate_9921b6f9f46a835a05881fa759835ed004c615423214e98a2974e744a44f52b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:edit-common-attributes.html.twig", 1);
        $this->blocks = array(
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'formTitle' => array($this, 'block_formTitle'),
            'formContent' => array($this, 'block_formContent'),
            'head_script_component' => array($this, 'block_head_script_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:configure/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 7
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 8
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_translate_group", array(), "any", true, true) &&  !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_translate_group", array()))) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\">
                    ";
                // line 9
                $context["options"] = $context["choice"];
                // line 10
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 13
                echo "                ";
                $context["label"] = (($this->getAttribute($this->getAttribute($context["choice"], "data", array(), "any", false, true), "attributeType", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($context["choice"], "data", array()), "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
                // line 14
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_safe", array()))) {
                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 16
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_formTitle($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"pull-left\">
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "locale", array()), 'widget');
        echo "
    </div>
    <div class=\"pull-left buffer-small-left\">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "displayedAttributes", array()), 'widget');
        echo "
    </div>
";
    }

    // line 29
    public function block_formContent($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, "pim_mass_edit.warning");
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "groups", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["groupView"]) {
            // line 32
            echo "        <div class=\"group-container hide\">
            <h4>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupView"], "label", array()), "html", null, true);
            echo "</h4>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["groupView"], "attributes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributeView"]) {
                // line 35
                echo "                <div class=\"attribute-field hide ";
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter((($this->getAttribute($context["attributeView"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["attributeView"], "classes", array()), array())) : (array()))), " "), "html", null, true);
                echo "\" data-attribute-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "id", array()), "html", null, true);
                echo "\">
                    ";
                // line 36
                if ($this->getAttribute($context["attributeView"], "values", array(), "any", true, true)) {
                    // line 37
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attributeView"], "values", array()));
                    foreach ($context['_seq'] as $context["scope"] => $context["subvalue"]) {
                        // line 38
                        echo "                            <div class=\"control-group\" data-field=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                        echo "\">
                                ";
                        // line 39
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["subvalue"], 'widget', array("attr" => array("data-scope" => $context["scope"], "data-color" => $this->env->getExtension('pim_channel_extension')->channelColor($context["scope"]), "data-font-color" => $this->env->getExtension('pim_channel_extension')->channelFontColor($context["scope"]))));
                        echo "
                            </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['scope'], $context['subvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "                    ";
                } else {
                    // line 43
                    echo "                        <div class=\"control-group\" data-field=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                    echo "\">
                            ";
                    // line 44
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeView"], "value", array()), 'widget');
                    echo "
                        </div>
                    ";
                }
                // line 47
                echo "                    <i class=\"icon-remove remove-attribute\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove this attribute"), "html", null, true);
                echo "\"></i>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeView'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
            ";
            // line 51
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 52
                echo "                <hr />
            ";
            }
            // line 54
            echo "        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 58
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 59
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(
            [
                'jquery',
                'underscore',
                'pim/scopable',
                'pim/currencyfield',
                'datepicker',
                'oro/mediator',
                'routing',
                'jquery.multiselect',
                'jquery.multiselect.filter'
            ],
            function (\$, _, Scopable, CurrencyField, datepicker, mediator, Routing) {
                'use strict';
                \$(function () {
                    ";
        // line 76
        if (twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "groups", array()))) {
            // line 77
            echo "                        \$('a.next').hide();
                    ";
        }
        // line 79
        echo "
                    _.each(\$('form div.scopable:not(.currency)'), function (field) {
                        new Scopable({ el: \$(field) });
                    });

                    _.each(\$('form div.currency'), function (field) {
                        new CurrencyField({ el: \$(field) });
                    });

                    _.each(\$('form input.datepicker:not(.hasPicker)'), function (field) {
                        datepicker.init(field.getAttribute('id'));
                    });

                    mediator.trigger('pim:reinit');

                    /**
                     * Add attributes widget
                     */
                    var opts = {
                        title: '";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select attributes"), "html", null, true);
        echo "',
                        placeholder: '";
        // line 99
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

                    mediator.on('hash_navigation_request:start', function (navigation) {
                        if (navigation.url === Routing.generate('pim_enrich_product_index')) {
                            sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));
                        }
                    });

                    if (!sessionStorage.getItem('mass_edit_selected_attributes')) {
                        sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));
                    }
                    \$('#pim_enrich_mass_edit_action_operation_displayedAttributes').val(
                        JSON.parse(sessionStorage.getItem('mass_edit_selected_attributes'))
                    );

                    var \$el = \$('#";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "displayedAttributes", array()), "vars", array()), "id", array()), "html", null, true);
        echo "')
                        .addClass('pimmultiselect')
                        .multiselect(opts)
                        .multiselectfilter({
                            label: false,
                            placeholder: opts.placeholder
                        });
                    var \$menu = \$('.ui-multiselect-menu.pimmultiselect').appendTo('#container');
                    var saveButton = '";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select"), "html", null, true);
        echo "';

                    var footerContainer = \$('<div>').addClass('ui-multiselect-footer').appendTo(\$menu);
                    var \$saveButton = \$('<a>').addClass('btn btn-small').html(saveButton).on('click', function () {
                        \$el.multiselect('close');
                        var checked = _.map(\$el.multiselect('getChecked'), function(el) {
                            return +el.value;
                        });

                        sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify(checked));
                        \$('div.attribute-field').each(function() {
                            var \$field = \$(this);
                            if (_.contains(checked, \$field.data('attribute-id'))) {
                                \$field.removeClass('hide');
                                \$field.find('input, select, textarea').prop('disabled', false);
                            } else {
                                \$field.addClass('hide');
                                \$field.find('input, select, textarea').prop('disabled', true);
                            }
                        });
                        \$('div.group-container').each(function() {
                            if (\$(this).find('div.attribute-field:not(.hide)').length) {
                                \$(this).removeClass('hide');
                            } else {
                                \$(this).addClass('hide');
                            }
                        });
                    }).appendTo(footerContainer);

                    var \$openButton = \$('button.pimmultiselect').addClass('btn btn-group');
                    \$openButton.append(\$('<span>', { 'class': 'caret' })).removeAttr('style');

                    \$menu.find('input[type=\"search\"]').width(207);

                    // Click the save button to show selected fields in case of errors
                    \$saveButton.click();

                    /**
                     * Manage removal of attributes from the form
                     */
                    \$('.remove-attribute').on('click', function () {
                        \$el.multiselect('widget').find('input[value=\"' + \$(this).attr('data-id') + '\"]').click();
                        \$saveButton.click();
                    });

                    ";
        // line 179
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, "pim_enrich_product_mass_edit.after_form_init");
        echo "
                });
            }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:edit-common-attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 179,  346 => 134,  335 => 126,  305 => 99,  301 => 98,  280 => 79,  276 => 77,  274 => 76,  253 => 59,  250 => 58,  233 => 54,  229 => 52,  227 => 51,  224 => 50,  212 => 47,  206 => 44,  201 => 43,  198 => 42,  189 => 39,  184 => 38,  179 => 37,  177 => 36,  170 => 35,  166 => 34,  162 => 33,  159 => 32,  142 => 31,  137 => 30,  134 => 29,  127 => 25,  121 => 22,  118 => 21,  115 => 20,  110 => 17,  96 => 16,  78 => 14,  75 => 13,  68 => 10,  66 => 9,  61 => 8,  58 => 7,  40 => 6,  37 => 5,  34 => 4,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:configure/layout.html.twig' %}*/
/* */
/* {% form_theme form _self %}*/
/* {% block choice_widget_options %}*/
/*     {% spaceless %}*/
/*         {% for group_label, choice in options %}*/
/*             {% if choice is iterable %}*/
/*                 <optgroup label="{{ configs.is_translate_group is defined and not configs.is_translate_group ? group_label : group_label|trans({}, translation_domain) }}">*/
/*                     {% set options = choice %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                 </optgroup>*/
/*             {% else %}*/
/*                 {% set label = choice.data.attributeType is defined  ? choice.data.label : choice.label|trans({}, translation_domain) %}*/
/*                 <option {{ block('choice_widget_option_attributes') }} value="{{ choice.value }}"{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{% if (configs.is_safe is defined and configs.is_safe) %}{{ label|raw }}{% else %}{{ label }}{% endif %}</option>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_options %}*/
/* */
/* {% block formTitle %}*/
/*     <div class="pull-left">*/
/*         {{ form_widget(form.operation.locale) }}*/
/*     </div>*/
/*     <div class="pull-left buffer-small-left">*/
/*         {{ form_widget(form.operation.displayedAttributes) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block formContent %}*/
/*     {{ view_elements('pim_mass_edit.warning') }}*/
/*     {% for groupView in form.operation.vars.groups %}*/
/*         <div class="group-container hide">*/
/*             <h4>{{ groupView.label }}</h4>*/
/*             {% for attributeView in groupView.attributes %}*/
/*                 <div class="attribute-field hide {{ attributeView.classes|default([])|keys|join(' ') }}" data-attribute-id="{{ attributeView.id }}">*/
/*                     {% if attributeView.values is defined %}*/
/*                         {% for scope, subvalue in attributeView.values %}*/
/*                             <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                                 {{ form_widget(subvalue, {'attr': {'data-scope': scope, 'data-color': channel_color(scope), 'data-font-color': channel_font_color(scope)}}) }}*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     {% else %}*/
/*                         <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                             {{ form_widget(attributeView.value) }}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <i class="icon-remove remove-attribute" data-id="{{ attributeView.id }}" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'Remove this attribute'|trans }}"></i>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             {% if not loop.last %}*/
/*                 <hr />*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             [*/
/*                 'jquery',*/
/*                 'underscore',*/
/*                 'pim/scopable',*/
/*                 'pim/currencyfield',*/
/*                 'datepicker',*/
/*                 'oro/mediator',*/
/*                 'routing',*/
/*                 'jquery.multiselect',*/
/*                 'jquery.multiselect.filter'*/
/*             ],*/
/*             function ($, _, Scopable, CurrencyField, datepicker, mediator, Routing) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     {% if form.operation.vars.groups is empty %}*/
/*                         $('a.next').hide();*/
/*                     {% endif %}*/
/* */
/*                     _.each($('form div.scopable:not(.currency)'), function (field) {*/
/*                         new Scopable({ el: $(field) });*/
/*                     });*/
/* */
/*                     _.each($('form div.currency'), function (field) {*/
/*                         new CurrencyField({ el: $(field) });*/
/*                     });*/
/* */
/*                     _.each($('form input.datepicker:not(.hasPicker)'), function (field) {*/
/*                         datepicker.init(field.getAttribute('id'));*/
/*                     });*/
/* */
/*                     mediator.trigger('pim:reinit');*/
/* */
/*                     /***/
/*                      * Add attributes widget*/
/*                      *//**/
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
/* */
/*                     mediator.on('hash_navigation_request:start', function (navigation) {*/
/*                         if (navigation.url === Routing.generate('pim_enrich_product_index')) {*/
/*                             sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));*/
/*                         }*/
/*                     });*/
/* */
/*                     if (!sessionStorage.getItem('mass_edit_selected_attributes')) {*/
/*                         sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));*/
/*                     }*/
/*                     $('#pim_enrich_mass_edit_action_operation_displayedAttributes').val(*/
/*                         JSON.parse(sessionStorage.getItem('mass_edit_selected_attributes'))*/
/*                     );*/
/* */
/*                     var $el = $('#{{ form.operation.displayedAttributes.vars.id }}')*/
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
/*                             return +el.value;*/
/*                         });*/
/* */
/*                         sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify(checked));*/
/*                         $('div.attribute-field').each(function() {*/
/*                             var $field = $(this);*/
/*                             if (_.contains(checked, $field.data('attribute-id'))) {*/
/*                                 $field.removeClass('hide');*/
/*                                 $field.find('input, select, textarea').prop('disabled', false);*/
/*                             } else {*/
/*                                 $field.addClass('hide');*/
/*                                 $field.find('input, select, textarea').prop('disabled', true);*/
/*                             }*/
/*                         });*/
/*                         $('div.group-container').each(function() {*/
/*                             if ($(this).find('div.attribute-field:not(.hide)').length) {*/
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
/*                     // Click the save button to show selected fields in case of errors*/
/*                     $saveButton.click();*/
/* */
/*                     /***/
/*                      * Manage removal of attributes from the form*/
/*                      *//**/
/*                     $('.remove-attribute').on('click', function () {*/
/*                         $el.multiselect('widget').find('input[value="' + $(this).attr('data-id') + '"]').click();*/
/*                         $saveButton.click();*/
/*                     });*/
/* */
/*                     {{ view_elements('pim_enrich_product_mass_edit.after_form_init') }}*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
