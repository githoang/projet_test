<?php

/* PimEnrichBundle:Attribute:form.html.twig */
class __TwigTemplate_58afbd1172e5c8519d6b836ce19d964fd1fbc365c5d415cac17b3fa2e6f9c9df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Attribute:form.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%attribute.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 8
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("pim_enrich_attribute_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("pim_enrich_attribute_create", array("attribute_type" =>         // line 10
(isset($context["attributeType"]) ? $context["attributeType"] : $this->getContext($context, "attributeType")))))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("attribute.title"))))));
        // line 15
        echo "

        ";
        // line 17
        $context["title"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ((($this->env->getExtension('translator')->trans("attribute.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))) : ($this->env->getExtension('translator')->trans("attribute.create")));
        // line 18
        echo "
        ";
        // line 19
        ob_start();
        // line 20
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_index")), "method"), "html", null, true);
        echo "
            ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeType", array()), "vars", array()), "value", array()) != "pim_catalog_identifier"))) {
            // line 22
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 23
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_attribute_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_index"), 3 => $this->env->getExtension('translator')->trans("confirmation.remove.attribute", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 26
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), 4 => $this->env->getExtension('translator')->trans("flash.attribute.removed")), "method"), "html", null, true);
            // line 28
            echo "
            ";
        }
        // line 30
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array()), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "
        ";
        // line 33
        ob_start();
        // line 34
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 35
            echo "            <ul class=\"inline\">
                <li>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last update"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated"))) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated")), "loggedAt", array()), "Y-m-d H:i:s")) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("by"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated"))) ? ($this->getAttribute((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated")), "author", array())) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
            echo "</li>
                <li>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created"))) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "loggedAt", array()), "Y-m-d H:i:s")) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("by"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created"))) ? ($this->getAttribute((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "author", array())) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
            echo "</li>
            </ul>
            ";
        }
        // line 40
        echo "        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 49
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "

            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'row');
        echo "
        </div>
    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 56
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "
    ";
        // line 58
        $this->loadTemplate("PimEnrichBundle:Attribute:_js-handler.html.twig", "PimEnrichBundle:Attribute:form.html.twig", 58)->display(array_merge($context, (isset($context["measures"]) ? $context["measures"] : $this->getContext($context, "measures"))));
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 58,  153 => 57,  150 => 56,  144 => 53,  139 => 51,  134 => 49,  129 => 47,  123 => 44,  118 => 42,  115 => 41,  112 => 40,  100 => 37,  90 => 36,  87 => 35,  84 => 34,  82 => 33,  79 => 32,  73 => 30,  69 => 28,  67 => 26,  66 => 23,  64 => 22,  62 => 21,  57 => 20,  55 => 19,  52 => 18,  50 => 17,  46 => 15,  44 => 10,  43 => 9,  42 => 8,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%attribute.label%": form.vars.value.label } }) %}*/
/* */
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': form.vars.value.id ?*/
/*             path('pim_enrich_attribute_edit', { id: form.vars.value.id }) :*/
/*             path('pim_enrich_attribute_create', { attribute_type: attributeType }),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'attribute.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = form.vars.value.id ? 'attribute.edit'|trans ~ ' - ' ~ form.vars.value.label : 'attribute.create'|trans %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_attribute_index')) }}*/
/*             {% if form.vars.value.id and form.attributeType.vars.value != 'pim_catalog_identifier' %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('pim_enrich_attribute_remove', { id: form.vars.value.id }),*/
/*                     'pim_enrich_attribute_remove',*/
/*                     path('pim_enrich_attribute_index'),*/
/*                     'confirmation.remove.attribute'|trans({ '%name%': form.vars.value.label }),*/
/*                     'flash.attribute.removed'|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*             {{ elements.submitBtn }}*/
/*         {% endset %}*/
/* */
/*         {% set left %}*/
/*             {% if form.vars.value.id %}*/
/*             <ul class="inline">*/
/*                 <li>{{ 'Last update'|trans }}: {{ updated ? updated.loggedAt|date("Y-m-d H:i:s") : 'N/A'|trans }} {{ 'by'|trans }} {{ updated ? updated.author : 'N/A'|trans }}</li>*/
/*                 <li>{{ 'Created'|trans }}: {{ created ? created.loggedAt|date("Y-m-d H:i:s") : 'N/A'|trans }} {{ 'by'|trans }} {{ created ? created.author : 'N/A'|trans }}</li>*/
/*             </ul>*/
/*             {% endif %}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, left, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="row-fluid tab-content">*/
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/* */
/*             {{ form_row(form.id) }}*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/*     {{ parent() }}*/
/*     {% include 'PimEnrichBundle:Attribute:_js-handler.html.twig' with measures %}*/
/* {% endblock %}*/
/* */
