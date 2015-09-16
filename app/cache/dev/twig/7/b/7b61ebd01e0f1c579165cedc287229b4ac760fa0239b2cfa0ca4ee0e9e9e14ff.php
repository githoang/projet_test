<?php

/* PimEnrichBundle:Family:edit.html.twig */
class __TwigTemplate_49d8378d9dd2b61feddc2d8db3cbbbdf77b2b248b0154ccadcdb6efff3fc4731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Family:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'head_script_component' => array($this, 'block_head_script_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%family.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_family_edit_attributes")) {
            // line 8
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:Attribute:_available-attributes-form.html.twig", "PimEnrichBundle:Family:edit.html.twig", 8)->display(array_merge($context, array("form" =>             // line 9
(isset($context["attributesForm"]) ? $context["attributesForm"] : $this->getContext($context, "attributesForm")), "action" => $this->env->getExtension('routing')->getPath("pim_enrich_family_addattributes", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 10
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))))));
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_family_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 16
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("family.title"))))));
        // line 21
        echo "

        ";
        // line 23
        $context["title"] = (($this->env->getExtension('translator')->trans("family.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
        // line 24
        echo "
        ";
        // line 25
        ob_start();
        // line 26
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_family_index")), "method"), "html", null, true);
        echo "
            ";
        // line 27
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 28
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_family_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 29
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_family_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_family_index"), 3 => $this->env->getExtension('translator')->trans("confirmation.remove.family", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 32
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), 4 => $this->env->getExtension('translator')->trans("flash.family.removed")), "method"), "html", null, true);
            // line 34
            echo "
            ";
        }
        // line 36
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(), "method"), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"tab-content\">

            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 47
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "

        </div>
    ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 53
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        require(
            ['jquery', 'bootstrap'],
            function (\$) {
                'use strict';

                \$(function() {
                    \$('.group').click(function() {
                        \$(this).parent().find('tr:not(.group)').toggle();
                        \$(this).find('i').toggleClass('icon-expand-alt icon-collapse-alt');
                    });

                    ";
        // line 68
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_family_edit_attributes")) {
            // line 69
            echo "                    \$('.attribute-requirement:not(.identifier) i').on('click', function() {
                        \$(this).toggleClass('icon-ok required').toggleClass('icon-circle non-required');

                        var \$input = \$(this).siblings('input[type=\"checkbox\"]').eq(0);
                        var checked = \$input.is(':checked');
                        \$(this).attr('data-original-title', \$(this).parent().data((checked ? 'not-' : '') + 'required-title')).tooltip('show');
                        \$input.prop('checked', !checked).trigger('change');
                    });
                    ";
        }
        // line 78
        echo "                });
            }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Family:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 78,  147 => 69,  145 => 68,  127 => 54,  124 => 53,  118 => 50,  112 => 47,  107 => 45,  100 => 41,  95 => 39,  92 => 38,  86 => 36,  82 => 34,  80 => 32,  79 => 29,  77 => 28,  75 => 27,  70 => 26,  68 => 25,  65 => 24,  63 => 23,  59 => 21,  57 => 16,  56 => 15,  52 => 14,  49 => 13,  46 => 12,  44 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%family.label%": form.vars.value.label } }) %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if resource_granted('pim_enrich_family_edit_attributes') %}*/
/*         {% include 'PimEnrichBundle:Attribute:_available-attributes-form.html.twig' with {*/
/*             'form': attributesForm,*/
/*             'action': path('pim_enrich_family_addattributes', {'id': form.vars.value.id})*/
/*         } %}*/
/*     {% endif %}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': path('pim_enrich_family_edit', { id: form.vars.value.id }),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'family.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = 'family.edit'|trans ~ ' - ' ~ form.vars.value.label %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_family_index')) }}*/
/*             {% if form.vars.value.id %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('pim_enrich_family_remove', { 'id': form.vars.value.id }),*/
/*                     'pim_enrich_family_remove',*/
/*                     path('pim_enrich_family_index'),*/
/*                     'confirmation.remove.family'|trans({ '%name%': form.vars.value.label }),*/
/*                     'flash.family.removed'|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*             {{ elements.submitBtn() }}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, null, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="tab-content">*/
/* */
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/* */
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'bootstrap'],*/
/*             function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     $('.group').click(function() {*/
/*                         $(this).parent().find('tr:not(.group)').toggle();*/
/*                         $(this).find('i').toggleClass('icon-expand-alt icon-collapse-alt');*/
/*                     });*/
/* */
/*                     {% if resource_granted('pim_enrich_family_edit_attributes') %}*/
/*                     $('.attribute-requirement:not(.identifier) i').on('click', function() {*/
/*                         $(this).toggleClass('icon-ok required').toggleClass('icon-circle non-required');*/
/* */
/*                         var $input = $(this).siblings('input[type="checkbox"]').eq(0);*/
/*                         var checked = $input.is(':checked');*/
/*                         $(this).attr('data-original-title', $(this).parent().data((checked ? 'not-' : '') + 'required-title')).tooltip('show');*/
/*                         $input.prop('checked', !checked).trigger('change');*/
/*                     });*/
/*                     {% endif %}*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
