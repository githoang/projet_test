<?php

/* PimEnrichBundle:Product:_buttons.html.twig */
class __TwigTemplate_7792b47856a2e87300e3152f209a5bb6eea37a580425bf555ac8d5aad1dd9682 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_product_index", array("dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale"))))), "method"), "html", null, true);
        echo "
";
        // line 2
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_pdf_generator_product_download")) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "btn.download_pdf", 1 => $this->env->getExtension('routing')->getPath("pim_pdf_generator_download_product_pdf", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), 2 => array("icon" => "download", "class" => "no-hash", "id" => "download-btn")), "method"), "html", null, true);
            echo "
";
        }
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "enabledSwitch", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "
";
        // line 6
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_remove")) {
            // line 7
            echo "     ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_product_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 8
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_product_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_product_index"), 3 => $this->env->getExtension('translator')->trans("confirmation.remove.product", array("%name%" => $this->getAttribute(            // line 11
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array()))), 4 => $this->env->getExtension('translator')->trans("flash.product.removed")), "method"), "html", null, true);
            // line 13
            echo "
";
        }
        // line 15
        echo "
";
        // line 16
        $context["saveOptions"] = array("" => array("text" => "btn.save"), "Create" => array("text" => "btn.save and create"), "BackGrid" => array("text" => "btn.save and back"));
        // line 21
        echo "
";
        // line 22
        if (((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")) &&  !(null === $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "next", array())))) {
            // line 23
            echo "    ";
            $context["saveAndNextOption"] = array("SaveAndNext" => array("text" => "btn.save and next"));
            // line 24
            echo "    ";
            $context["saveOptions"] = twig_array_merge((isset($context["saveAndNextOption"]) ? $context["saveAndNextOption"] : $this->getContext($context, "saveAndNextOption")), (isset($context["saveOptions"]) ? $context["saveOptions"] : $this->getContext($context, "saveOptions")));
        } elseif ((        // line 25
(isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")) && (null === $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "next", array())))) {
            // line 26
            echo "    ";
            $context["saveAndNextOption"] = array("SaveAndFinish" => array("text" => "btn.save and finish"));
            // line 27
            echo "    ";
            $context["saveOptions"] = twig_array_merge((isset($context["saveAndNextOption"]) ? $context["saveAndNextOption"] : $this->getContext($context, "saveAndNextOption")), (isset($context["saveOptions"]) ? $context["saveOptions"] : $this->getContext($context, "saveOptions")));
        }
        // line 29
        echo "
";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitDropdownBtn", array(0 => (isset($context["saveOptions"]) ? $context["saveOptions"] : $this->getContext($context, "saveOptions"))), "method"), "html", null, true);
        echo "

";
        // line 32
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_pdf_generator_product_download")) {
            // line 33
            echo "<script type=\"text/javascript\">
    require(
        ['jquery', 'oro/mediator'],
        function (\$, mediator) {
            var initialScope = '";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "scope", array()), "html", null, true);
            echo "',
            url = '";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_pdf_generator_download_product_pdf", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "html", null, true);
            echo "' +
                '&dataScope=';
            button = \$('#download-btn');

            button.attr('href', url + initialScope);
            mediator.on('scopablefield:changescope', function (scope) {
                button.attr('href', url + scope);
            });
        }
    );
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  87 => 37,  81 => 33,  79 => 32,  74 => 30,  71 => 29,  67 => 27,  64 => 26,  62 => 25,  59 => 24,  56 => 23,  54 => 22,  51 => 21,  49 => 16,  46 => 15,  42 => 13,  40 => 11,  39 => 8,  37 => 7,  35 => 6,  31 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ elements.backLink(path('pim_enrich_product_index', { dataLocale: dataLocale })) }}*/
/* {% if resource_granted('pim_pdf_generator_product_download') %}*/
/*     {{ elements.link('btn.download_pdf', path('pim_pdf_generator_download_product_pdf', { id: product.id, dataLocale: dataLocale }), { icon: 'download', class: 'no-hash', id: 'download-btn'}) }}*/
/* {% endif %}*/
/* {{ elements.enabledSwitch(form) }}*/
/* {% if resource_granted("pim_enrich_product_remove") %}*/
/*      {{ elements.deleteLink(*/
/*         path('pim_enrich_product_remove', { id: form.vars.value.id }),*/
/*         'pim_enrich_product_remove',*/
/*         path('pim_enrich_product_index'),*/
/*         'confirmation.remove.product'|trans({ '%name%': product.label }),*/
/*         'flash.product.removed'|trans*/
/*     ) }}*/
/* {% endif %}*/
/* */
/* {% set saveOptions = {*/
/*     '' : {'text': 'btn.save' },*/
/*     'Create': { 'text': 'btn.save and create' },*/
/*     'BackGrid': { 'text': 'btn.save and back' }*/
/* } %}*/
/* */
/* {% if sequentialEdit and sequentialEdit.next is not null %}*/
/*     {% set saveAndNextOption = {'SaveAndNext': {'text': 'btn.save and next' }} %}*/
/*     {% set saveOptions = saveAndNextOption|merge(saveOptions) %}*/
/* {% elseif sequentialEdit and sequentialEdit.next is null %}*/
/*     {% set saveAndNextOption = {'SaveAndFinish': {'text': 'btn.save and finish' }} %}*/
/*     {% set saveOptions = saveAndNextOption|merge(saveOptions) %}*/
/* {% endif %}*/
/* */
/* {{ elements.submitDropdownBtn(saveOptions) }}*/
/* */
/* {% if resource_granted('pim_pdf_generator_product_download') %}*/
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'oro/mediator'],*/
/*         function ($, mediator) {*/
/*             var initialScope = '{{ product.scope }}',*/
/*             url = '{{ path('pim_pdf_generator_download_product_pdf', { id: product.id, dataLocale: dataLocale }) }}' +*/
/*                 '&dataScope=';*/
/*             button = $('#download-btn');*/
/* */
/*             button.attr('href', url + initialScope);*/
/*             mediator.on('scopablefield:changescope', function (scope) {*/
/*                 button.attr('href', url + scope);*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* {% endif %}*/
/* */
