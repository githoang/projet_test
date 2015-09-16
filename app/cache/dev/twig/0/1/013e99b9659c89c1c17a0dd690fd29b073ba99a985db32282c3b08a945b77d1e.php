<?php

/* PimEnrichBundle:Attribute:form_options.html.twig */
class __TwigTemplate_a9e1c928ea48d7ef6cc3ec6af65f43313e5b855231d1089b2e85d0711f92fa35 extends Twig_Template
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
        ob_start();
        // line 2
        if ( !array_key_exists("elements", $context)) {
            // line 3
            echo "    ";
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Attribute:form_options.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_create_option", array("id" => $this->getAttribute(        // line 8
(isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), "id", array()), "dataLocale" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode())), "class" => "form-inline", "attr" => array("data-title" => $this->env->getExtension('translator')->trans("popin.create.option.title"), "data-button-submit" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.save")), "data-button-cancel" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")))));
        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

    ";
        // line 18
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

    <div class=\"row-fluid\">
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 22
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "PimEnrichBundle:Form:simple_layout.html.twig"));
        // line 23
        echo "
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optionValues", array())), "value", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\">
                ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optionValues", array())), "locale", array()), "vars", array()), "value", array()), "html", null, true);
        echo "
            </label>
            <div class=\"controls\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(twig_first($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "optionValues", array())), 'row');
        echo "
            </div>
        </div>

";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:form_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 33,  68 => 29,  62 => 26,  58 => 25,  54 => 23,  52 => 22,  48 => 21,  42 => 18,  37 => 16,  34 => 15,  32 => 8,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(form, {*/
/*     'action': path('pim_enrich_attribute_create_option', { id: attribute.id, dataLocale: locale_code() }),*/
/*     'class': 'form-inline',*/
/*     'attr': {*/
/*         'data-title': 'popin.create.option.title'|trans,*/
/*         'data-button-submit': 'btn.save'|trans|capitalize,*/
/*         'data-button-cancel': 'btn.cancel'|trans|capitalize*/
/*     }*/
/* }) }}*/
/*     {{ JSFV(form) }}*/
/* */
/*     {{ elements.form_errors(form) }}*/
/* */
/*     <div class="row-fluid">*/
/*         {{ form_row(form.code) }}*/
/*         {% form_theme form 'PimEnrichBundle:Form:simple_layout.html.twig' %}*/
/* */
/*         <div class="control-group">*/
/*             <label class="control-label" for="{{ form.optionValues|first.value.vars.id }}">*/
/*                 {{ form.optionValues|first.locale.vars.value }}*/
/*             </label>*/
/*             <div class="controls">*/
/*                 {{ form_row(form.optionValues|first) }}*/
/*             </div>*/
/*         </div>*/
/* */
/* {{ form_end(form) }}*/
/* */
