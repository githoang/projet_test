<?php

/* PimEnrichBundle:Product:_comparison-handler.html.twig */
class __TwigTemplate_9d3642b7d9fdbe8627b1cbd6d717c6171c1207f1e82f899028384940c4ab685c extends Twig_Template
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
        ['jquery', 'oro/mediator', 'wysiwyg'],
        function (\$, mediator, wysiwyg) {
            'use strict';
            \$(function () {
                function copyValue() {
                    \$(this).find('textarea, input[type=text], input[type=checkbox], input[type=file], select').filter('[id]').each(function() {
                        var \$source = \$(this);
                        var sourceId = \$(this).attr('id');
                        var targetId = sourceId.replace('";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "html", null, true);
        echo "');
                        var \$target = \$('#' + targetId);

                        if (\$source.is('input[type=checkbox]')) {
                            \$target.parent().parent().bootstrapSwitch('setState', \$source.is(':checked'));
                        } else if (\$source.is('input[type=file]')) {
                            \$('#' + targetId.replace(/file\$/, 'copyFrom'))
                                .val(\$('#' + sourceId.replace(/file\$/, 'id')).val())
                                .trigger('change');

                            \$target.siblings('.upload-info').html(
                                \$source.siblings('.upload-info').html()
                            );
                            \$target.parent()
                                .find('.remove-upload')
                                .removeClass('hide')
                                .click(function() {
                                    \$('#' + targetId.replace(/file\$/, 'copyFrom')).removeAttr('value');
                                    \$(this).off('click');
                                });
                            ;
                            \$target.addClass('hide');
                            \$target.parent().removeClass('empty');
                            \$target.parent().find('a[rel=slimbox]').slimbox();
                        } else if (\$source.is('textarea.wysiwyg')) {
                            wysiwyg.destroy(\$target);
                            \$target.val(\$source.val()).trigger('change');
                            wysiwyg.init(\$target);
                        } else {
                            \$target.val(\$source.val()).trigger('change');
                        }
                    });
                }

                \$('.copy-selection').click(function(event) {
                    event.preventDefault();
                    var selectAll = function() {
                        \$('.comparison input.comparisonSelection:not(:checked)').each(function() {
                            \$(this).prop('checked', true);
                        });
                    };
                    var selectCurrentTab = function () {
                        \$('.tab-attribute .tab-pane.active .comparison input.comparisonSelection:not(:checked)').each(function() {
                            \$(this).prop('checked', true);
                        });
                    };
                    var clearSelection = function () {
                        \$('.comparison input.comparisonSelection:checked').each(function() {
                            \$(this).prop('checked', false);
                        });
                    };

                    switch(\$(this).data('target')) {
                        case 'all':
                            selectAll();
                            break;

                        case 'current-tab':
                            clearSelection();
                            selectCurrentTab();
                        break;

                        case 'none':
                            clearSelection();
                    }
                });

                \$('a#copy-selection').click(function(event) {
                    event.preventDefault();
                    \$('.comparison input.comparisonSelection:checked').each(function() {
                        \$(this).parent().parent().find('.controls').each(copyValue);
                    });
                });

                // Listen to each scopable field collapse and expand events and trigger the collapse/expand events
                // on the corresponding comparison fields
                var syncFieldState = function(field) {
                    \$(field).on('collapse expand', function(e) {
                        var id = \$(this).find('>div[id]').attr('id');
                        if (id.indexOf('_";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")), "html", null, true);
        echo "_') > 0) {
                            id = id.replace('_";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")), "html", null, true);
        echo "_', '_";
        echo twig_escape_filter($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "html", null, true);
        echo "_');
                        } else {
                            id = id.replace('_";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "html", null, true);
        echo "_', '_";
        echo twig_escape_filter($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")), "html", null, true);
        echo "_');
                        };
                        mediator.trigger('scopablefield:' + e.type, id);
                    });
                };

                mediator.on('scopablefield:rendered', syncFieldState);

                // Add checkboxes to copy scopable comparisons
                var addCheckboxes = function(field) {
                    var \$field = \$(field);
                    var \$checkbox = \$field.find('>label>.comparisonSelection');

                    if (\$checkbox.length) {
                        \$field.find('.control-group').each(function () {
                            \$(this).prepend(\$checkbox.parent().clone()).find('>.controls').css('margin-left', 10);
                        });

                        \$checkbox.parent().remove();
                    }
                };

                mediator.on('scopablefield:rendered', addCheckboxes);

                // Remove checkboxes for disabled fields
                \$('.comparison .no-label .attribute-field.localizable').each(function() {
                    var \$target = \$('#' + \$(this).find('[id]').eq(0).attr('id').replace('";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "html", null, true);
        echo "'));
                    var \$fields = \$target.find('textarea, input[type=text], input[type=checkbox], input[type=file], select').filter('[disabled]');

                    if (\$fields.length) {
                        \$(this).find('input.comparisonSelection').remove();
                    }
                });
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_comparison-handler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 119,  126 => 93,  119 => 91,  115 => 90,  31 => 11,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'oro/mediator', 'wysiwyg'],*/
/*         function ($, mediator, wysiwyg) {*/
/*             'use strict';*/
/*             $(function () {*/
/*                 function copyValue() {*/
/*                     $(this).find('textarea, input[type=text], input[type=checkbox], input[type=file], select').filter('[id]').each(function() {*/
/*                         var $source = $(this);*/
/*                         var sourceId = $(this).attr('id');*/
/*                         var targetId = sourceId.replace('{{ comparisonLocale }}', '{{ dataLocale }}');*/
/*                         var $target = $('#' + targetId);*/
/* */
/*                         if ($source.is('input[type=checkbox]')) {*/
/*                             $target.parent().parent().bootstrapSwitch('setState', $source.is(':checked'));*/
/*                         } else if ($source.is('input[type=file]')) {*/
/*                             $('#' + targetId.replace(/file$/, 'copyFrom'))*/
/*                                 .val($('#' + sourceId.replace(/file$/, 'id')).val())*/
/*                                 .trigger('change');*/
/* */
/*                             $target.siblings('.upload-info').html(*/
/*                                 $source.siblings('.upload-info').html()*/
/*                             );*/
/*                             $target.parent()*/
/*                                 .find('.remove-upload')*/
/*                                 .removeClass('hide')*/
/*                                 .click(function() {*/
/*                                     $('#' + targetId.replace(/file$/, 'copyFrom')).removeAttr('value');*/
/*                                     $(this).off('click');*/
/*                                 });*/
/*                             ;*/
/*                             $target.addClass('hide');*/
/*                             $target.parent().removeClass('empty');*/
/*                             $target.parent().find('a[rel=slimbox]').slimbox();*/
/*                         } else if ($source.is('textarea.wysiwyg')) {*/
/*                             wysiwyg.destroy($target);*/
/*                             $target.val($source.val()).trigger('change');*/
/*                             wysiwyg.init($target);*/
/*                         } else {*/
/*                             $target.val($source.val()).trigger('change');*/
/*                         }*/
/*                     });*/
/*                 }*/
/* */
/*                 $('.copy-selection').click(function(event) {*/
/*                     event.preventDefault();*/
/*                     var selectAll = function() {*/
/*                         $('.comparison input.comparisonSelection:not(:checked)').each(function() {*/
/*                             $(this).prop('checked', true);*/
/*                         });*/
/*                     };*/
/*                     var selectCurrentTab = function () {*/
/*                         $('.tab-attribute .tab-pane.active .comparison input.comparisonSelection:not(:checked)').each(function() {*/
/*                             $(this).prop('checked', true);*/
/*                         });*/
/*                     };*/
/*                     var clearSelection = function () {*/
/*                         $('.comparison input.comparisonSelection:checked').each(function() {*/
/*                             $(this).prop('checked', false);*/
/*                         });*/
/*                     };*/
/* */
/*                     switch($(this).data('target')) {*/
/*                         case 'all':*/
/*                             selectAll();*/
/*                             break;*/
/* */
/*                         case 'current-tab':*/
/*                             clearSelection();*/
/*                             selectCurrentTab();*/
/*                         break;*/
/* */
/*                         case 'none':*/
/*                             clearSelection();*/
/*                     }*/
/*                 });*/
/* */
/*                 $('a#copy-selection').click(function(event) {*/
/*                     event.preventDefault();*/
/*                     $('.comparison input.comparisonSelection:checked').each(function() {*/
/*                         $(this).parent().parent().find('.controls').each(copyValue);*/
/*                     });*/
/*                 });*/
/* */
/*                 // Listen to each scopable field collapse and expand events and trigger the collapse/expand events*/
/*                 // on the corresponding comparison fields*/
/*                 var syncFieldState = function(field) {*/
/*                     $(field).on('collapse expand', function(e) {*/
/*                         var id = $(this).find('>div[id]').attr('id');*/
/*                         if (id.indexOf('_{{ comparisonLocale }}_') > 0) {*/
/*                             id = id.replace('_{{ comparisonLocale }}_', '_{{ dataLocale }}_');*/
/*                         } else {*/
/*                             id = id.replace('_{{ dataLocale }}_', '_{{ comparisonLocale }}_');*/
/*                         };*/
/*                         mediator.trigger('scopablefield:' + e.type, id);*/
/*                     });*/
/*                 };*/
/* */
/*                 mediator.on('scopablefield:rendered', syncFieldState);*/
/* */
/*                 // Add checkboxes to copy scopable comparisons*/
/*                 var addCheckboxes = function(field) {*/
/*                     var $field = $(field);*/
/*                     var $checkbox = $field.find('>label>.comparisonSelection');*/
/* */
/*                     if ($checkbox.length) {*/
/*                         $field.find('.control-group').each(function () {*/
/*                             $(this).prepend($checkbox.parent().clone()).find('>.controls').css('margin-left', 10);*/
/*                         });*/
/* */
/*                         $checkbox.parent().remove();*/
/*                     }*/
/*                 };*/
/* */
/*                 mediator.on('scopablefield:rendered', addCheckboxes);*/
/* */
/*                 // Remove checkboxes for disabled fields*/
/*                 $('.comparison .no-label .attribute-field.localizable').each(function() {*/
/*                     var $target = $('#' + $(this).find('[id]').eq(0).attr('id').replace('{{ comparisonLocale }}', '{{ dataLocale }}'));*/
/*                     var $fields = $target.find('textarea, input[type=text], input[type=checkbox], input[type=file], select').filter('[disabled]');*/
/* */
/*                     if ($fields.length) {*/
/*                         $(this).find('input.comparisonSelection').remove();*/
/*                     }*/
/*                 });*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
