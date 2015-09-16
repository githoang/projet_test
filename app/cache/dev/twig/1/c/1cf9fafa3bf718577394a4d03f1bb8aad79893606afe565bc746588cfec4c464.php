<?php

/* PimEnrichBundle:VariantGroup:_js-handler.html.twig */
class __TwigTemplate_6288803cfef054d43554487366eadb299ffb4ef55d6c5306b5923c03500cc514 extends Twig_Template
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
        ['jquery', 'underscore', 'pim/optionform', 'pim/scopable', 'pim/currencyfield', 'datepicker', 'pim/dialog', 'pim/dialogform', 'oro/mediator', 'backbone/bootstrap-modal', 'jquery.select2'],
        function (\$, _, optionform, Scopable, CurrencyField, datepicker, Dialog, DialogForm, mediator) {
            'use strict';

            \$(function () {
                _.each(\$('a.add-attribute-option'), function(optionLink) {
                    optionform.init('#' + optionLink.getAttribute('id'));
                });

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

                ";
        // line 26
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, "pim_enrich_variant_edit.after_form_init");
        echo "
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup:_js-handler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 26,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'underscore', 'pim/optionform', 'pim/scopable', 'pim/currencyfield', 'datepicker', 'pim/dialog', 'pim/dialogform', 'oro/mediator', 'backbone/bootstrap-modal', 'jquery.select2'],*/
/*         function ($, _, optionform, Scopable, CurrencyField, datepicker, Dialog, DialogForm, mediator) {*/
/*             'use strict';*/
/* */
/*             $(function () {*/
/*                 _.each($('a.add-attribute-option'), function(optionLink) {*/
/*                     optionform.init('#' + optionLink.getAttribute('id'));*/
/*                 });*/
/* */
/*                 _.each($('form div.scopable:not(.currency)'), function (field) {*/
/*                     new Scopable({ el: $(field) });*/
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
/*                 {{ view_elements('pim_enrich_variant_edit.after_form_init') }}*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
