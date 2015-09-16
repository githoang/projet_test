<?php

/* PimEnrichBundle:GroupType:edit.html.twig */
class __TwigTemplate_7c6112ca1feb5a9d0bcb009cecd363cf7d938e20a9d71cecd0cd6487a8c8a94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:GroupType:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%group type.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_group_type_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("group type.title"))))));
        // line 13
        echo "

        ";
        // line 15
        $context["title"] = (($this->env->getExtension('translator')->trans("group type.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
        // line 16
        echo "
        ";
        // line 17
        $context["confirmationMessage"] = $this->env->getExtension('translator')->trans("confirmation.remove.group type", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array())));
        // line 18
        echo "        ";
        ob_start();
        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_group_type_index")), "method"), "html", null, true);
        echo "
            ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "isVariant", array())) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_group_type_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_group_type_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_group_type_index"), 3 =>             // line 25
(isset($context["confirmationMessage"]) ? $context["confirmationMessage"] : $this->getContext($context, "confirmationMessage")), 4 => $this->env->getExtension('translator')->trans("flash.group type.removed")), "method"), "html", null, true);
            // line 27
            echo "
            ";
        }
        // line 29
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(), "method"), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 31
        echo "
        ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 39
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
        </div>
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:GroupType:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 41,  98 => 39,  93 => 37,  87 => 34,  82 => 32,  79 => 31,  73 => 29,  69 => 27,  67 => 25,  66 => 22,  64 => 21,  62 => 20,  57 => 19,  54 => 18,  52 => 17,  49 => 16,  47 => 15,  43 => 13,  41 => 8,  40 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { '%group type.label%': form.vars.value.label } }) %}*/
/* */
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': path('pim_enrich_group_type_edit', { id: form.vars.value.id}),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'group type.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = 'group type.edit'|trans ~ ' - ' ~ form.vars.value.label %}*/
/* */
/*         {% set confirmationMessage = 'confirmation.remove.group type'|trans({ '%name%': form.vars.value.label }) %}*/
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_group_type_index')) }}*/
/*             {% if not form.vars.value.isVariant %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('pim_enrich_group_type_remove', { id: form.vars.value.id }),*/
/*                     'pim_enrich_group_type_remove',*/
/*                     path('pim_enrich_group_type_index'),*/
/*                     confirmationMessage,*/
/*                     'flash.group type.removed'|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*             {{ elements.submitBtn() }}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, null, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="row-fluid tab-content">*/
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
