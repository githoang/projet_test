<?php

/* PimEnrichBundle:Channel:edit.html.twig */
class __TwigTemplate_b8cbd5b0140c839d1dd952755ec42bd2d7a60573ae5a132cf4bd23b481c90b76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Channel:edit.html.twig", 1);
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%channel.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
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
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 9
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("pim_enrich_channel_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("pim_enrich_channel_create"))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("channel.title"))))));
        // line 14
        echo "

        ";
        // line 16
        $context["title"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ((($this->env->getExtension('translator')->trans("channel.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))) : ($this->env->getExtension('translator')->trans("channel.create")));
        // line 17
        echo "
        ";
        // line 18
        ob_start();
        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_channel_index")), "method"), "html", null, true);
        echo "
            ";
        // line 20
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 21
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_channel_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_channel_remove", 2 => $this->env->getExtension('routing')->getPath("pim_enrich_channel_index"), 3 => $this->env->getExtension('translator')->trans("confirmation.remove.channel", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 25
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), 4 => $this->env->getExtension('translator')->trans("flash.channel.removed")), "method"), "html", null, true);
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
        return "PimEnrichBundle:Channel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  97 => 39,  92 => 37,  86 => 34,  81 => 32,  78 => 31,  72 => 29,  68 => 27,  66 => 25,  65 => 22,  63 => 21,  61 => 20,  56 => 19,  54 => 18,  51 => 17,  49 => 16,  45 => 14,  43 => 9,  42 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%channel.label%": form.vars.value.label } }) %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': form.vars.value.id ? path('pim_enrich_channel_edit', { id: form.vars.value.id }) : path('pim_enrich_channel_create'),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'channel.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = form.vars.value.id ? 'channel.edit'|trans ~ ' - ' ~ form.vars.value.label : 'channel.create'|trans %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('pim_enrich_channel_index')) }}*/
/*             {% if form.vars.value.id %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('pim_enrich_channel_remove', { id: form.vars.value.id }),*/
/*                     'pim_enrich_channel_remove',*/
/*                     path('pim_enrich_channel_index'),*/
/*                     'confirmation.remove.channel'|trans({'%name%': form.vars.value.label}),*/
/*                     'flash.channel.removed'|trans*/
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
