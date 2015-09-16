<?php

/* PimEnrichBundle:AssociationType:edit.html.twig */
class __TwigTemplate_74ea8e4d1a3627986dc5697801ba19a1ccec96d7b15d05c7a306b6b4c07aa908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:AssociationType:edit.html.twig", 1);
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
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:AssociationType:edit.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%association type.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("association type.title"))))));
        // line 14
        echo "

        ";
        // line 16
        $context["title"] = (($this->env->getExtension('translator')->trans("association type.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
        // line 17
        echo "
        ";
        // line 18
        $context["confirmationMessage"] = $this->env->getExtension('translator')->trans("confirmation.remove.association type", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array())));
        // line 19
        echo "        ";
        if ((isset($context["usageCount"]) ? $context["usageCount"] : $this->getContext($context, "usageCount"))) {
            // line 20
            echo "            ";
            $context["confirmationMessage"] = (((isset($context["confirmationMessage"]) ? $context["confirmationMessage"] : $this->getContext($context, "confirmationMessage")) . "<br />") . $this->env->getExtension('translator')->trans("info.association type.remove from products", array("%count%" => (isset($context["usageCount"]) ? $context["usageCount"] : $this->getContext($context, "usageCount")))));
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        ob_start();
        // line 23
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_index")), "method"), "html", null, true);
        echo "
            ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 25
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_association_type_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_index"), 3 =>         // line 28
(isset($context["confirmationMessage"]) ? $context["confirmationMessage"] : $this->getContext($context, "confirmationMessage")), 4 => $this->env->getExtension('translator')->trans("flash.association type.removed")), "method"), "html", null, true);
        // line 30
        echo "
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(), "method"), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content\">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 41
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
        </div>
    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AssociationType:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  104 => 41,  99 => 39,  93 => 36,  88 => 34,  85 => 33,  80 => 31,  77 => 30,  75 => 28,  74 => 25,  73 => 24,  68 => 23,  65 => 22,  62 => 21,  59 => 20,  56 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  43 => 9,  42 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% oro_title_set({ params: { '%association type.label%': form.vars.value.label } }) %}*/
/* */
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': path('pim_enrich_association_type_edit', { id: form.vars.value.id}),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'association type.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = 'association type.edit'|trans ~ ' - ' ~ form.vars.value.label %}*/
/* */
/*         {% set confirmationMessage = 'confirmation.remove.association type'|trans({ '%name%': form.vars.value.label }) %}*/
/*         {% if usageCount %}*/
/*             {% set confirmationMessage = confirmationMessage ~ '<br />' ~ 'info.association type.remove from products'|trans({ '%count%': usageCount }) %}*/
/*         {% endif %}*/
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_association_type_index')) }}*/
/*             {{ elements.deleteLink(*/
/*                 path('pim_enrich_association_type_remove', { id: form.vars.value.id }),*/
/*                 'pim_enrich_association_type_remove',*/
/*                 path('pim_enrich_association_type_index'),*/
/*                 confirmationMessage,*/
/*                 'flash.association type.removed'|trans*/
/*             ) }}*/
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
