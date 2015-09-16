<?php

/* PimEnrichBundle:AssociationType:create.html.twig */
class __TwigTemplate_1e4afb318b62b6b5ee48599a1afa377a121ecdbdb8364821cc3dcedf622f3de3 extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:AssociationType:create.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_association_type_create"), "class" => "form-inline", "attr" => array("data-title" => $this->env->getExtension('translator')->trans("popin.create.association_type.title"), "data-button-submit" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.save")), "data-button-cancel" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")))));
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
    </div>
";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AssociationType:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  47 => 21,  41 => 18,  36 => 16,  33 => 15,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(form, {*/
/*     'action': path('pim_enrich_association_type_create'),*/
/*     'class': 'form-inline',*/
/*     'attr': {*/
/*         'data-title': 'popin.create.association_type.title'|trans,*/
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
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
