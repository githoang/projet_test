<?php

/* PimEnrichBundle:Product:edit.html.twig */
class __TwigTemplate_bbc339cb10e72a58682a6012b634034d3f6561e9df1010fcd03bfffc9c7f3062 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Product:edit.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
            'sequentialEdit' => array($this, 'block_sequentialEdit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%product.sku%" => $this->getAttribute(        // line 3
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array()))));
        // line 10
        if ( !array_key_exists("elements", $context)) {
            // line 11
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Product:edit.html.twig", 11);
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_script($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 7
        $this->loadTemplate("PimEnrichBundle:Product:_js-handler.html.twig", "PimEnrichBundle:Product:edit.html.twig", 7)->display($context);
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_add_attribute")) {
            // line 17
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:Attribute:_available-attributes-form.html.twig", "PimEnrichBundle:Product:edit.html.twig", 17)->display(array_merge($context, array("form" =>             // line 18
(isset($context["attributesForm"]) ? $context["attributesForm"] : $this->getContext($context, "attributesForm")), "action" => $this->env->getExtension('routing')->getPath("pim_enrich_product_addattributes", array("id" => $this->getAttribute(            // line 19
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))))));
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('sequentialEdit', $context, $blocks);
        // line 26
        echo "
    ";
        // line 27
        $context["formAction"] = $this->env->getExtension('routing')->getPath("pim_enrich_product_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "compareWith" => (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale"))));
        // line 28
        echo "    ";
        if (((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")) &&  !(null === $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "next", array())))) {
            // line 29
            echo "        ";
            $context["formAction"] = ((isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")) . "&action=SaveAndNext");
            // line 30
            echo "    ";
        } elseif (((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")) && (null === $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "next", array())))) {
            // line 31
            echo "        ";
            $context["formAction"] = ((isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")) . "&action=SaveAndFinish");
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    ";
        // line 34
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" =>         // line 36
(isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "attr" => array("class" => "product-edit", "data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("product.title"))))));
        // line 42
        echo "
        ";
        // line 43
        $context["title"] = $this->env->getExtension('translator')->trans("product.title");
        // line 44
        echo "
        ";
        // line 45
        ob_start();
        // line 46
        echo "            ";
        $this->loadTemplate("PimEnrichBundle:Product:_buttons.html.twig", "PimEnrichBundle:Product:edit.html.twig", 46)->display($context);
        // line 47
        echo "        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 48
        echo "
        ";
        // line 49
        if ( !array_key_exists("subtitle", $context)) {
            // line 50
            echo "            ";
            ob_start();
            // line 51
            echo "                ";
            $this->loadTemplate("PimEnrichBundle:Product:_locale-switcher.html.twig", "PimEnrichBundle:Product:edit.html.twig", 51)->display($context);
            // line 52
            echo "                ";
            echo $context["elements"]->getenabledLabel((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
            ";
            $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 54
            echo "        ";
        }
        // line 55
        echo "
        ";
        // line 56
        ob_start();
        // line 57
        echo "            <ul class=\"inline\">
                ";
        // line 58
        $this->loadTemplate("PimEnrichBundle:Product:_left-details.html.twig", "PimEnrichBundle:Product:edit.html.twig", 58)->display($context);
        // line 59
        echo "            </ul>
        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
        ";
        // line 62
        echo $context["elements"]->getpage_header((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle")), (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), $context["elements"]->getupdated($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        echo "

        <div class=\"layout-content\">
            ";
        // line 65
        echo $context["elements"]->getform_navbar($this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab")));
        echo "

            <div class=\"row-fluid tab-content\">
                ";
        // line 68
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

                ";
        // line 70
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "

                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'row');
        echo "
            </div>
        </div>
    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a href=\"javascript:void(0);\"
        id=\"create-product\"
        data-form-url=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_create", array("dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "html", null, true);
        echo "\"></a>
";
    }

    // line 23
    public function block_sequentialEdit($context, array $blocks = array())
    {
        // line 24
        echo "        ";
        $this->loadTemplate("PimEnrichBundle:Product:_sequentialEdit.html.twig", "PimEnrichBundle:Product:edit.html.twig", 24)->display($context);
        // line 25
        echo "    ";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 25,  199 => 24,  196 => 23,  190 => 79,  183 => 75,  177 => 72,  172 => 70,  167 => 68,  161 => 65,  155 => 62,  152 => 61,  148 => 59,  146 => 58,  143 => 57,  141 => 56,  138 => 55,  135 => 54,  129 => 52,  126 => 51,  123 => 50,  121 => 49,  118 => 48,  115 => 47,  112 => 46,  110 => 45,  107 => 44,  105 => 43,  102 => 42,  100 => 36,  99 => 35,  95 => 34,  92 => 33,  89 => 32,  86 => 31,  83 => 30,  80 => 29,  77 => 28,  75 => 27,  72 => 26,  70 => 23,  67 => 22,  64 => 21,  62 => 19,  61 => 18,  59 => 17,  57 => 16,  54 => 15,  51 => 14,  47 => 7,  42 => 6,  39 => 5,  35 => 1,  32 => 11,  30 => 10,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%product.sku%": product.label } }) %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     {% include 'PimEnrichBundle:Product:_js-handler.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* */
/* {% block content %}*/
/* */
/*     {% if resource_granted('pim_enrich_product_add_attribute') %}*/
/*         {% include 'PimEnrichBundle:Attribute:_available-attributes-form.html.twig' with {*/
/*             'form': attributesForm,*/
/*             'action': path('pim_enrich_product_addattributes', {'id': product.id, 'dataLocale': dataLocale})*/
/*         } %}*/
/*     {% endif %}*/
/* */
/*     {% block sequentialEdit %}*/
/*         {% include 'PimEnrichBundle:Product:_sequentialEdit.html.twig' %}*/
/*     {% endblock %}*/
/* */
/*     {% set formAction = path('pim_enrich_product_update', { id: form.vars.value.id, dataLocale: dataLocale, compareWith: comparisonLocale }) %}*/
/*     {% if sequentialEdit and sequentialEdit.next is not null %}*/
/*         {% set formAction = formAction ~ '&action=SaveAndNext' %}*/
/*     {% elseif sequentialEdit and sequentialEdit.next is null %}*/
/*         {% set formAction = formAction ~ '&action=SaveAndFinish' %}*/
/*     {% endif %}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': formAction,*/
/*         'attr': {*/
/*             'class': 'product-edit',*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'product.title'|trans })*/
/*         }*/
/*     }) }}*/
/*         {% set title = 'product.title'|trans %}*/
/* */
/*         {% set buttons %}*/
/*             {% include 'PimEnrichBundle:Product:_buttons.html.twig' %}*/
/*         {% endset %}*/
/* */
/*         {% if subtitle is not defined %}*/
/*             {% set subtitle %}*/
/*                 {% include 'PimEnrichBundle:Product:_locale-switcher.html.twig' %}*/
/*                 {{ elements.enabledLabel(form) }}*/
/*             {% endset %}*/
/*         {% endif %}*/
/* */
/*         {% set left %}*/
/*             <ul class="inline">*/
/*                 {% include 'PimEnrichBundle:Product:_left-details.html.twig' %}*/
/*             </ul>*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, subtitle, left, elements.updated(form.vars.id)) }}*/
/* */
/*         <div class="layout-content">*/
/*             {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*             <div class="row-fluid tab-content">*/
/*                 {{ elements.form_errors(form) }}*/
/* */
/*                 {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/* */
/*                 {{ form_row(form.id) }}*/
/*             </div>*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/*     <a href="javascript:void(0);"*/
/*         id="create-product"*/
/*         data-form-url="{{ path('pim_enrich_product_create', { 'dataLocale': dataLocale }) }}"></a>*/
/* {% endblock %}*/
/* */
