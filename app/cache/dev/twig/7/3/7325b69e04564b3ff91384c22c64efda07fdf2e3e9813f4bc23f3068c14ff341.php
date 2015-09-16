<?php

/* PimEnrichBundle:AttributeGroup:form.html.twig */
class __TwigTemplate_c9753d96c12bea6a7e9dc1f4d0fbc8e472f90c93a6ecf439501e20ba015f19a5 extends Twig_Template
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
        if ( !array_key_exists("elements", $context)) {
            // line 2
            echo "    ";
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:AttributeGroup:form.html.twig", 2);
        }
        // line 4
        echo "
";
        // line 5
        $context["editMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? (true) : (false));
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => ((        // line 9
(isset($context["editMode"]) ? $context["editMode"] : $this->getContext($context, "editMode"))) ? ($this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_create"))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("attribute group.title"))))));
        // line 14
        echo "

    ";
        // line 16
        $context["title"] = (((isset($context["editMode"]) ? $context["editMode"] : $this->getContext($context, "editMode"))) ? ((($this->env->getExtension('translator')->trans("attribute group.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()))) : ($this->env->getExtension('translator')->trans("attribute group.create")));
        // line 17
        echo "
    ";
        // line 18
        ob_start();
        // line 19
        echo "        ";
        if (((isset($context["editMode"]) ? $context["editMode"] : $this->getContext($context, "editMode")) &&  !($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "code", array()) === constant(get_class((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")))."::"."DEFAULT_GROUP_CODE")))) {
            // line 20
            echo "            ";
            echo $context["elements"]->getdeleteLink($this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "pim_enrich_attribute_group_remove", $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_index"), $this->env->getExtension('translator')->trans("confirmation.remove.attribute group", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 24
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()))), $this->env->getExtension('translator')->trans("flash.attribute group.removed"));
            // line 26
            echo "
        ";
        }
        // line 28
        echo "        ";
        echo $context["elements"]->getsubmitBtn();
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        echo $context["elements"]->getpage_header((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), null, null, $context["elements"]->getupdated($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        echo "

    ";
        // line 33
        echo $context["elements"]->getform_navbar($this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab")));
        echo "

    <div class=\"tab-content\">
        ";
        // line 36
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort_order", array()), 'row');
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
        return "PimEnrichBundle:AttributeGroup:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 41,  92 => 39,  87 => 37,  83 => 36,  77 => 33,  72 => 31,  69 => 30,  63 => 28,  59 => 26,  57 => 24,  56 => 21,  54 => 20,  51 => 19,  49 => 18,  46 => 17,  44 => 16,  40 => 14,  38 => 9,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* */
/* {% set editMode = form.vars.value.id ? true : false %}*/
/* */
/* {{ JSFV(form) }}*/
/* {{ form_start(form, {*/
/*     'action': editMode ? path('pim_enrich_attributegroup_edit', { id: form.vars.value.id }) : path('pim_enrich_attributegroup_create'),*/
/*     'attr': {*/
/*         'data-updated-title': 'confirmation.leave'|trans,*/
/*         'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'attribute group.title'|trans })*/
/*     }*/
/* }) }}*/
/* */
/*     {% set title = editMode ? 'attribute group.edit'|trans ~ ' - ' ~ form.vars.data.label : 'attribute group.create'|trans %}*/
/* */
/*     {% set buttons %}*/
/*         {% if editMode and not group.code is constant('DEFAULT_GROUP_CODE', group) %}*/
/*             {{ elements.deleteLink(*/
/*                 path('pim_enrich_attributegroup_remove', {'id': form.vars.value.id}),*/
/*                 'pim_enrich_attribute_group_remove',*/
/*                 path('pim_enrich_attributegroup_index'),*/
/*                 'confirmation.remove.attribute group'|trans({'%name%': form.vars.data.label}),*/
/*                 'flash.attribute group.removed'|trans)*/
/*             }}*/
/*         {% endif %}*/
/*         {{ elements.submitBtn() }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons, null, null, elements.updated(form.vars.id)) }}*/
/* */
/*     {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*     <div class="tab-content">*/
/*         {{ elements.form_errors(form) }}*/
/*         {{ form_row(form.sort_order) }}*/
/* */
/*         {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
