<?php

/* PimEnrichBundle:Attribute:_js-handler.html.twig */
class __TwigTemplate_fed39fcdba280864447d82b89c45266d8c7ff5edc3e719e44ab9e476793fb4f5 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
require(
    ['jquery', 'underscore', 'datepicker', 'oro/mediator', 'jquery.select2', 'bootstrap.bootstrapswitch'],
    function (\$, _, datepicker, mediator) {
        'use strict';
        \$(function() {
            var measures = ";
        // line 7
        $this->loadTemplate("PimUIBundle::measures.html.twig", "PimEnrichBundle:Attribute:_js-handler.html.twig", 7)->display(array_merge($context, (isset($context["measures"]) ? $context["measures"] : $this->getContext($context, "measures"))));
        echo ";

            // Get form name
            var formName = '#";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "';

            var \$optionList;

            function initializeForm() {
                var \$switch = \$(formName+'_autoOptionSorting')
                    .closest('.control-group')
                    .insertBefore('#attribute-option-grid')
                    .removeClass('hide')
                    .find('.has-switch');
                \$switch.on('switch-change', function (e, data) {
                        mediator.trigger('attribute:auto_option_sorting:changed', data.value);
                    });

                // Enable/disable scope and localizable fields according to unique field value
                \$(formName+'_unique').closest('.has-switch').on('switch-change', function (e, data) {
                    if (data.value) {
                        \$(formName+'_scopable').select2('val', 0).select2('enable', false);
                        \$(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setState', false);
                        \$(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setActive', false);
                    } else {
                        \$(formName+'_scopable').select2('enable');
                        \$(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setActive', true);
                    }
                });

                \$(formName+'_validationRule').change(function() {
                    if (\$(this).val() == 'regexp') {
                        \$(formName+'_validationRegexp').parent().parent().show();
                    } else {
                        \$(formName+'_validationRegexp').val('').parent().parent().hide();
                    }
                }).trigger('change');

                if (\$(formName+'_availableLocales').val()) {
                    \$(formName+'_availableLocales').parent().parent().show();
                    \$('#limitLocales-switch').bootstrapSwitch('setState', true);
                } else {
                    \$(formName+'_availableLocales').parent().parent().hide();
                }

                \$('#limitLocales-switch').on('switch-change', function (e, data) {
                    if (data.value) {
                        \$(this).parent().parent().next().show();
                    } else {
                        \$(formName+'_availableLocales').select2('val', '');
                        \$(this).parent().parent().next().hide();
                    }
                });

                _.each(\$(formName + ' input.datepicker:not(.hasPicker)'), function (field) {
                    datepicker.init(field.getAttribute('id'));
                });

                \$(formName+'_metricFamily').select2({
                    data: measures.getMetricTypes(),
                    placeholder: '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose a family"), "html", null, true);
        echo "'
                }).change(function() {
                    \$(formName+'_defaultMetricUnit').select2('val', '').select2({
                        data: measures.getMetricUnits(\$(this).select2('val')),
                        placeholder: '";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose a unit"), "html", null, true);
        echo "'
                    });
                }).trigger('change');

                \$(formName).trigger('refresh');
            }

            initializeForm();
        });
    }
);
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:_js-handler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 70,  92 => 66,  33 => 10,  27 => 7,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* require(*/
/*     ['jquery', 'underscore', 'datepicker', 'oro/mediator', 'jquery.select2', 'bootstrap.bootstrapswitch'],*/
/*     function ($, _, datepicker, mediator) {*/
/*         'use strict';*/
/*         $(function() {*/
/*             var measures = {% include 'PimUIBundle::measures.html.twig' with measures %};*/
/* */
/*             // Get form name*/
/*             var formName = '#{{ form.vars.id }}';*/
/* */
/*             var $optionList;*/
/* */
/*             function initializeForm() {*/
/*                 var $switch = $(formName+'_autoOptionSorting')*/
/*                     .closest('.control-group')*/
/*                     .insertBefore('#attribute-option-grid')*/
/*                     .removeClass('hide')*/
/*                     .find('.has-switch');*/
/*                 $switch.on('switch-change', function (e, data) {*/
/*                         mediator.trigger('attribute:auto_option_sorting:changed', data.value);*/
/*                     });*/
/* */
/*                 // Enable/disable scope and localizable fields according to unique field value*/
/*                 $(formName+'_unique').closest('.has-switch').on('switch-change', function (e, data) {*/
/*                     if (data.value) {*/
/*                         $(formName+'_scopable').select2('val', 0).select2('enable', false);*/
/*                         $(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setState', false);*/
/*                         $(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setActive', false);*/
/*                     } else {*/
/*                         $(formName+'_scopable').select2('enable');*/
/*                         $(formName+'_localizable').closest('.has-switch').bootstrapSwitch('setActive', true);*/
/*                     }*/
/*                 });*/
/* */
/*                 $(formName+'_validationRule').change(function() {*/
/*                     if ($(this).val() == 'regexp') {*/
/*                         $(formName+'_validationRegexp').parent().parent().show();*/
/*                     } else {*/
/*                         $(formName+'_validationRegexp').val('').parent().parent().hide();*/
/*                     }*/
/*                 }).trigger('change');*/
/* */
/*                 if ($(formName+'_availableLocales').val()) {*/
/*                     $(formName+'_availableLocales').parent().parent().show();*/
/*                     $('#limitLocales-switch').bootstrapSwitch('setState', true);*/
/*                 } else {*/
/*                     $(formName+'_availableLocales').parent().parent().hide();*/
/*                 }*/
/* */
/*                 $('#limitLocales-switch').on('switch-change', function (e, data) {*/
/*                     if (data.value) {*/
/*                         $(this).parent().parent().next().show();*/
/*                     } else {*/
/*                         $(formName+'_availableLocales').select2('val', '');*/
/*                         $(this).parent().parent().next().hide();*/
/*                     }*/
/*                 });*/
/* */
/*                 _.each($(formName + ' input.datepicker:not(.hasPicker)'), function (field) {*/
/*                     datepicker.init(field.getAttribute('id'));*/
/*                 });*/
/* */
/*                 $(formName+'_metricFamily').select2({*/
/*                     data: measures.getMetricTypes(),*/
/*                     placeholder: '{{ "Choose a family"|trans }}'*/
/*                 }).change(function() {*/
/*                     $(formName+'_defaultMetricUnit').select2('val', '').select2({*/
/*                         data: measures.getMetricUnits($(this).select2('val')),*/
/*                         placeholder: '{{ "Choose a unit"|trans }}'*/
/*                     });*/
/*                 }).trigger('change');*/
/* */
/*                 $(formName).trigger('refresh');*/
/*             }*/
/* */
/*             initializeForm();*/
/*         });*/
/*     }*/
/* );*/
/* </script>*/
/* */
