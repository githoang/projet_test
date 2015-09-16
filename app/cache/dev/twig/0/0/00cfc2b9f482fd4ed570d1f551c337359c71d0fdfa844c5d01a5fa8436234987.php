<?php

/* PimEnrichBundle:Product:create.html.twig */
class __TwigTemplate_e1c2107e7370539aea6fe7714c4d2ef91d02c5edf947e6dbb9773dafaea4de78 extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Product:create.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_product_create", array("dataLocale" =>         // line 8
(isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "class" => "form-inline", "attr" => array("data-title" => $this->env->getExtension('translator')->trans("popin.create.product.title"), "data-button-submit" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.save")), "data-button-cancel" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")))));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'row');
        echo "
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "values", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 23
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["value"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), 'row');
        echo "
    </div>
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  65 => 25,  56 => 23,  52 => 22,  48 => 21,  42 => 18,  37 => 16,  34 => 15,  32 => 8,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(form, {*/
/*     'action': path('pim_enrich_product_create', { dataLocale: dataLocale }),*/
/*     'class': 'form-inline',*/
/*     'attr': {*/
/*         'data-title': 'popin.create.product.title'|trans,*/
/*         'data-button-submit': 'btn.save'|trans|capitalize,*/
/*         'data-button-cancel': 'btn.cancel'|trans|capitalize*/
/*     }*/
/* }) }}*/
/*     {{ JSFV(form) }}*/
/* */
/*     {{ elements.form_errors(form) }}*/
/* */
/*     <div class="row-fluid">*/
/*         {{ form_row(form.id) }}*/
/*         {% for value in form.values %}*/
/*             {{ form_widget(value) }}*/
/*         {% endfor %}*/
/*         {{ form_row(form.family) }}*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
