<?php

/* PimEnrichBundle:VariantGroup:edit.html.twig */
class __TwigTemplate_356e798de1086566ce2ea2c627768cdd90cc69c259940d907a2a89ad7ddd99ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:VariantGroup:edit.html.twig", 6);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["gridName"] = "product-variant-group-grid";
        // line 2
        $context["locales"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "locales", array());
        // line 3
        $context["channels"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "channels", array());
        // line 4
        $context["dataLocale"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "currentLocale", array());
        // line 7
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:VariantGroup:edit.html.twig", 7);

        $this->env->getExtension("oro_title")->set(array("params" => array("%group.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_head_script($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 13
        $this->loadTemplate("PimEnrichBundle:VariantGroup:_js-handler.html.twig", "PimEnrichBundle:VariantGroup:edit.html.twig", 13)->display($context);
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
    ";
        // line 18
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_variant_group_add_attributes")) {
            // line 19
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:Attribute:_available-attributes-form.html.twig", "PimEnrichBundle:VariantGroup:edit.html.twig", 19)->display(array_merge($context, array("form" =>             // line 20
(isset($context["attributesForm"]) ? $context["attributesForm"] : $this->getContext($context, "attributesForm")), "action" => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_add_attributes", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()))))));
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("variant group"))))));
        // line 32
        echo "

        ";
        // line 34
        $context["title"] = (($this->env->getExtension('translator')->trans("variant group.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()));
        // line 35
        echo "
        ";
        // line 36
        ob_start();
        // line 37
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_index")), "method"), "html", null, true);
        echo "
            ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 39
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_variant_group_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_index"), 3 => $this->env->getExtension('translator')->trans("confirmation.remove.variant group", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 42
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), 4 => $this->env->getExtension('translator')->trans("flash.variant group.removed")), "method"), "html", null, true);
        // line 44
        echo "
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(), "method"), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "
        ";
        // line 48
        ob_start();
        // line 49
        echo "            <ul class=\"inline\">
                <li>
                    ";
        // line 51
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("code")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "code", array()), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 54
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("type")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "code", array()), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 57
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("axis")), "html", null, true);
        echo ":
                    ";
        // line 58
        ob_start();
        // line 59
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "attributes", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 60
            echo "                            ";
            echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 61
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                    ";
        $context["variantGroupAttributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 63
        echo "                    <span>";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, (isset($context["variantGroupAttributes"]) ? $context["variantGroupAttributes"] : $this->getContext($context, "variantGroupAttributes"))), $this->env->getExtension('translator')->trans("N/A")), "html", null, true);
        echo "</span>
                </li>

                ";
        // line 66
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "products", array())) > 0)) {
            // line 67
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("products")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "products", array())), "html", null, true);
            echo "</li>
                ";
        }
        // line 69
        echo "           </ul>
        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 71
        echo "
        ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content group-edit\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 79
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
        </div>
        ";
        // line 81
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 81,  221 => 79,  216 => 77,  210 => 74,  205 => 72,  202 => 71,  198 => 69,  190 => 67,  188 => 66,  181 => 63,  178 => 62,  164 => 61,  158 => 60,  140 => 59,  138 => 58,  134 => 57,  126 => 54,  118 => 51,  114 => 49,  112 => 48,  109 => 47,  104 => 45,  101 => 44,  99 => 42,  98 => 39,  97 => 38,  92 => 37,  90 => 36,  87 => 35,  85 => 34,  81 => 32,  79 => 27,  78 => 26,  74 => 25,  71 => 24,  68 => 23,  66 => 21,  65 => 20,  63 => 19,  61 => 18,  58 => 17,  55 => 16,  51 => 13,  46 => 12,  43 => 11,  39 => 6,  37 => 9,  34 => 7,  32 => 4,  30 => 3,  28 => 2,  26 => 1,  11 => 6,);
    }
}
/* {% set gridName = 'product-variant-group-grid' %}*/
/* {% set locales = form.productTemplate.vars.locales %}*/
/* {% set channels = form.productTemplate.vars.channels %}*/
/* {% set dataLocale = form.productTemplate.vars.currentLocale %}*/
/* */
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% oro_title_set({ params: { '%group.label%': form.vars.data.label } }) %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     {% include 'PimEnrichBundle:VariantGroup:_js-handler.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if resource_granted('pim_enrich_variant_group_add_attributes') %}*/
/*         {% include 'PimEnrichBundle:Attribute:_available-attributes-form.html.twig' with {*/
/*             'form': attributesForm,*/
/*             'action': path('pim_enrich_variant_group_add_attributes', {'id': form.vars.data.id})*/
/*         } %}*/
/*     {% endif %}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': path('pim_enrich_variant_group_edit', { id: form.vars.value.id, dataLocale: dataLocale }),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'variant group'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = 'variant group.edit'|trans ~ ' - ' ~ form.vars.data.label %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_variant_group_index')) }}*/
/*             {{ elements.deleteLink(*/
/*                 path('pim_enrich_variant_group_remove', { id: form.vars.value.id }),*/
/*                 'pim_enrich_variant_group_remove',*/
/*                 path('pim_enrich_variant_group_index'),*/
/*                 'confirmation.remove.variant group'|trans({'%name%': form.vars.value.label}),*/
/*                 'flash.variant group.removed'|trans*/
/*             ) }}*/
/*             {{ elements.submitBtn() }}*/
/*         {% endset %}*/
/* */
/*         {% set left %}*/
/*             <ul class="inline">*/
/*                 <li>*/
/*                     {{ 'code'|trans|capitalize }}: {{ form.vars.value.code }}*/
/*                 </li>*/
/*                 <li>*/
/*                     {{ 'type'|trans|capitalize }}: {{ form.vars.value.type.code }}*/
/*                 </li>*/
/*                 <li>*/
/*                     {{ 'axis'|trans|capitalize }}:*/
/*                     {% set variantGroupAttributes %}*/
/*                         {% for attribute in form.vars.value.attributes %}*/
/*                             {{ attribute }}{% if not loop.last %},{% endif %}*/
/*                         {% endfor %}*/
/*                     {% endset %}*/
/*                     <span>{{ variantGroupAttributes|capitalize|default('N/A'|trans) }}</span>*/
/*                 </li>*/
/* */
/*                 {% if form.vars.data.products|length > 0 %}*/
/*                     <li>{{ 'products'|trans|capitalize }}: {{ form.vars.data.products|length }}</li>*/
/*                 {% endif %}*/
/*            </ul>*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, left, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="row-fluid tab-content group-edit">*/
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
