<?php

/* PimEnrichBundle:Product:_js-handler.html.twig */
class __TwigTemplate_319f2767dd590cad4706c0e7be93916963a25b5560ee33cb5d0774018f2bf610 extends Twig_Template
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
        [
            'jquery',
            'underscore',
            'pim/optionform',
            'pim/scopable',
            'pim/currencyfield',
            'datepicker',
            'pim/dialog',
            'pim/dialogform',
            'oro/mediator',
            'pim/datagrid/state',
            'backbone/bootstrap-modal',
            'jquery.select2',
            'tinymce'
        ],
        function (\$, _, optionform, Scopable, CurrencyField, datepicker, Dialog, DialogForm, mediator, stateManager) {
            'use strict';

            \$(function () {
                _.each(\$('a.add-attribute-option'), function(optionLink) {
                    optionform.init('#' + optionLink.getAttribute('id'));
                });

                var initialScope = '";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "catalogScope", array()), "code", array()), "html", null, true);
        echo "';
                var datagridFilters = stateManager.getParsed('product-grid', 'filters')
                if (null != datagridFilters && undefined != datagridFilters.f.scope) {
                    initialScope = datagridFilters.f.scope;
                }

                _.each(\$('form div.scopable:not(.currency)'), function (field) {
                    new Scopable({ el: \$(field), initialScope: initialScope });
                });

                _.each(\$('form div.currency'), function (field) {
                    new CurrencyField({ el: \$(field) });
                });

                _.each(\$('form input.datepicker:not(.hasPicker)'), function (field) {
                    datepicker.init(field.getAttribute('id'));
                });

                mediator.trigger('pim:reinit');

                ";
        // line 46
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_change_family")) {
            // line 47
            echo "                    ";
            ob_start();
            // line 48
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.merge attributes"), "html", null, true);
            echo "<br />
                        ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.keep attributes"), "html", null, true);
            echo "<br />
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.change family to"), "html", null, true);
            echo ":
                        ";
            // line 51
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), 'widget');
            echo "
                    ";
            $context["familyWidget"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 53
            echo "
                    \$('#edit-family').on('click', function () {
                        Dialog.confirm(
                            '";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["familyWidget"]) ? $context["familyWidget"] : $this->getContext($context, "familyWidget")), "js");
            echo "',
                            '";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.change family"), "html", null, true);
            echo "',
                            function () {
                                \$('#";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "').append(\$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), "vars", array()), "id", array()), "html", null, true);
            echo "'));
                                if(\$(\"#sequentialEdit\").length) {
                                    var formAction = \$('#";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "').attr('action');
                                    formAction = formAction.replace('action=SaveAndNext', '');
                                    formAction = formAction.replace('action=SaveAndFinish', '');
                                    \$('#";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "').attr('action', formAction);
                                }
                                \$('#";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "').submit();
                            }
                        );
                        \$('#";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), "vars", array()), "id", array()), "html", null, true);
            echo "')
                            .attr('data-placeholder', '";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose a family"), "html", null, true);
            echo "')
                            .select2({ allowClear: true });
                        \$('#";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), "vars", array()), "id", array()), "html", null, true);
            echo "').closest('.modal-body').css({'line-height': '25px', 'height': 130});
                    });
                ";
        }
        // line 75
        echo "
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "groups", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 77
            echo "                    \$('#group-products-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
            echo "').on('click', function (event) {
                        event.preventDefault();
                        \$.get(
                            ";
            // line 80
            echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("pim_enrich_group_productlist", array("id" => $this->getAttribute($context["group"], "id", array()))));
            echo ",
                            function (content) {
                                var groupDoAction = function () {
                                    var \$groupLink = \$('<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((($this->getAttribute($this->getAttribute($context["group"], "type", array()), "variant", array())) ? ("pim_enrich_variant_group_edit") : ("pim_enrich_group_edit")), array("id" => $this->getAttribute($context["group"], "id", array()))), "html", null, true);
            echo "\" class=\"hide\"></a>');
                                    \$groupLink.appendTo(\$('#";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "')).click();
                                };

                                var groupModal = new Backbone.BootstrapModal({
                                    allowCancel: true,
                                    cancelText: '";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Close"), "html", null, true);
            echo "',
                                    title: '";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Group"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
            echo "',
                                    content: content,
                                    okText: '";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("View group"), "html", null, true);
            echo "'
                                });

                                groupModal.on('ok', groupDoAction);
                                groupModal.open();
                            }
                        )
                    });
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
                // submit form
                \$('div.submit-form a').click(function() {
                    var action = \$(this).attr('value');
                    \$('#";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').attr('action', \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').attr('action') +\"&action=\"+ action);
                    tinymce.triggerSave();
                    \$('#";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').submit();
                });

                ";
        // line 110
        if ( !(null === (isset($context["createPopin"]) ? $context["createPopin"] : $this->getContext($context, "createPopin")))) {
            // line 111
            echo "                    // create popin if needed
                    new DialogForm('#create-product');
                    \$('#create-product').click();
                ";
        }
        // line 115
        echo "
                ";
        // line 116
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, "pim_enrich_product_edit.after_form_init");
        echo "
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_js-handler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 116,  230 => 115,  224 => 111,  222 => 110,  216 => 107,  209 => 105,  203 => 101,  188 => 92,  181 => 90,  177 => 89,  169 => 84,  165 => 83,  159 => 80,  152 => 77,  148 => 76,  145 => 75,  139 => 72,  134 => 70,  130 => 69,  124 => 66,  119 => 64,  113 => 61,  106 => 59,  101 => 57,  97 => 56,  92 => 53,  87 => 51,  83 => 50,  79 => 49,  74 => 48,  71 => 47,  69 => 46,  46 => 26,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         [*/
/*             'jquery',*/
/*             'underscore',*/
/*             'pim/optionform',*/
/*             'pim/scopable',*/
/*             'pim/currencyfield',*/
/*             'datepicker',*/
/*             'pim/dialog',*/
/*             'pim/dialogform',*/
/*             'oro/mediator',*/
/*             'pim/datagrid/state',*/
/*             'backbone/bootstrap-modal',*/
/*             'jquery.select2',*/
/*             'tinymce'*/
/*         ],*/
/*         function ($, _, optionform, Scopable, CurrencyField, datepicker, Dialog, DialogForm, mediator, stateManager) {*/
/*             'use strict';*/
/* */
/*             $(function () {*/
/*                 _.each($('a.add-attribute-option'), function(optionLink) {*/
/*                     optionform.init('#' + optionLink.getAttribute('id'));*/
/*                 });*/
/* */
/*                 var initialScope = '{{ app.user.catalogScope.code }}';*/
/*                 var datagridFilters = stateManager.getParsed('product-grid', 'filters')*/
/*                 if (null != datagridFilters && undefined != datagridFilters.f.scope) {*/
/*                     initialScope = datagridFilters.f.scope;*/
/*                 }*/
/* */
/*                 _.each($('form div.scopable:not(.currency)'), function (field) {*/
/*                     new Scopable({ el: $(field), initialScope: initialScope });*/
/*                 });*/
/* */
/*                 _.each($('form div.currency'), function (field) {*/
/*                     new CurrencyField({ el: $(field) });*/
/*                 });*/
/* */
/*                 _.each($('form input.datepicker:not(.hasPicker)'), function (field) {*/
/*                     datepicker.init(field.getAttribute('id'));*/
/*                 });*/
/* */
/*                 mediator.trigger('pim:reinit');*/
/* */
/*                 {% if resource_granted('pim_enrich_product_change_family') %}*/
/*                     {% set familyWidget %}*/
/*                         {{ 'info.product.merge attributes'|trans }}<br />*/
/*                         {{ 'info.product.keep attributes'|trans }}<br />*/
/*                         {{ 'info.product.change family to'|trans }}:*/
/*                         {{ form_widget(form.family) }}*/
/*                     {% endset %}*/
/* */
/*                     $('#edit-family').on('click', function () {*/
/*                         Dialog.confirm(*/
/*                             '{{ familyWidget|e("js")|raw }}',*/
/*                             '{{ "info.product.change family"|trans }}',*/
/*                             function () {*/
/*                                 $('#{{ form.vars.id }}').append($('#{{ form.family.vars.id }}'));*/
/*                                 if($("#sequentialEdit").length) {*/
/*                                     var formAction = $('#{{ form.vars.id }}').attr('action');*/
/*                                     formAction = formAction.replace('action=SaveAndNext', '');*/
/*                                     formAction = formAction.replace('action=SaveAndFinish', '');*/
/*                                     $('#{{ form.vars.id }}').attr('action', formAction);*/
/*                                 }*/
/*                                 $('#{{ form.vars.id }}').submit();*/
/*                             }*/
/*                         );*/
/*                         $('#{{ form.family.vars.id }}')*/
/*                             .attr('data-placeholder', '{{ "Choose a family"|trans }}')*/
/*                             .select2({ allowClear: true });*/
/*                         $('#{{ form.family.vars.id }}').closest('.modal-body').css({'line-height': '25px', 'height': 130});*/
/*                     });*/
/*                 {% endif %}*/
/* */
/*                 {% for group in form.vars.value.groups %}*/
/*                     $('#group-products-{{ group.id }}').on('click', function (event) {*/
/*                         event.preventDefault();*/
/*                         $.get(*/
/*                             {{ path('pim_enrich_group_productlist', { id: group.id })|json_encode|raw }},*/
/*                             function (content) {*/
/*                                 var groupDoAction = function () {*/
/*                                     var $groupLink = $('<a href="{{ path(group.type.variant ? 'pim_enrich_variant_group_edit' : 'pim_enrich_group_edit', { 'id': group.id }) }}" class="hide"></a>');*/
/*                                     $groupLink.appendTo($('#{{ form.vars.id }}')).click();*/
/*                                 };*/
/* */
/*                                 var groupModal = new Backbone.BootstrapModal({*/
/*                                     allowCancel: true,*/
/*                                     cancelText: '{{ "Close"|trans }}',*/
/*                                     title: '{{ "Group"|trans }} {{ group.label }}',*/
/*                                     content: content,*/
/*                                     okText: '{{ "View group"|trans }}'*/
/*                                 });*/
/* */
/*                                 groupModal.on('ok', groupDoAction);*/
/*                                 groupModal.open();*/
/*                             }*/
/*                         )*/
/*                     });*/
/*                 {% endfor %}*/
/* */
/*                 // submit form*/
/*                 $('div.submit-form a').click(function() {*/
/*                     var action = $(this).attr('value');*/
/*                     $('#{{ form.vars.id }}').attr('action', $('#{{ form.vars.id }}').attr('action') +"&action="+ action);*/
/*                     tinymce.triggerSave();*/
/*                     $('#{{ form.vars.id }}').submit();*/
/*                 });*/
/* */
/*                 {% if createPopin is not null %}*/
/*                     // create popin if needed*/
/*                     new DialogForm('#create-product');*/
/*                     $('#create-product').click();*/
/*                 {% endif %}*/
/* */
/*                 {{ view_elements('pim_enrich_product_edit.after_form_init') }}*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
