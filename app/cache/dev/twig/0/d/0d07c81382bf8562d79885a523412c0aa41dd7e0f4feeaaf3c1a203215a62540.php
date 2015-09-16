<?php

/* PimImportExportBundle:JobProfile:create.html.twig */
class __TwigTemplate_a28792f0ec1bb855450644a03697c2aad3bde5f178c98a32157489352b5f5e30 extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimImportExportBundle:JobProfile:create.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" =>         // line 8
(isset($context["actionRoute"]) ? $context["actionRoute"] : $this->getContext($context, "actionRoute")), "class" => "form-inline", "attr" => array("data-title" => $this->env->getExtension('translator')->trans(        // line 11
(isset($context["dataTitle"]) ? $context["dataTitle"] : $this->getContext($context, "dataTitle"))), "data-button-submit" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.save")), "data-button-cancel" => twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")))));
        // line 15
        echo "
    ";
        // line 16
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

<script type=\"text/javascript\">
    require(
        ['jquery'],
        function(\$) {
            'use strict';
            \$(function() {
                var formNameAlias = '#";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alias", array()), "vars", array()), "id", array()), "html", null, true);
        echo "';

                \$(formNameAlias).change(function() {
                    var alias = \$(formNameAlias).val();
                    var option = \$(formNameAlias +' option[value=\"'+ alias +'\"]');
                    var connector = option.parent().attr('label');
                    \$('#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "connector", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').val(connector);
                });
            });
        }
    );
</script>

    ";
        // line 37
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

    <div class=\"row-fluid\">
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "connector", array()), 'row');
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "alias", array()), 'row');
        echo "
    </div>
";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 45,  86 => 43,  82 => 42,  78 => 41,  74 => 40,  68 => 37,  58 => 30,  49 => 24,  38 => 16,  35 => 15,  33 => 11,  32 => 8,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(form, {*/
/*     'action': actionRoute,*/
/*     'class': 'form-inline',*/
/*     'attr': {*/
/*         'data-title': dataTitle|trans,*/
/*         'data-button-submit': 'btn.save'|trans|capitalize,*/
/*         'data-button-cancel': 'btn.cancel'|trans|capitalize*/
/*     }*/
/* }) }}*/
/*     {{ JSFV(form) }}*/
/* */
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery'],*/
/*         function($) {*/
/*             'use strict';*/
/*             $(function() {*/
/*                 var formNameAlias = '#{{ form.alias.vars.id }}';*/
/* */
/*                 $(formNameAlias).change(function() {*/
/*                     var alias = $(formNameAlias).val();*/
/*                     var option = $(formNameAlias +' option[value="'+ alias +'"]');*/
/*                     var connector = option.parent().attr('label');*/
/*                     $('#{{ form.connector.vars.id }}').val(connector);*/
/*                 });*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
/*     {{ elements.form_errors(form) }}*/
/* */
/*     <div class="row-fluid">*/
/*         {{ form_row(form.code) }}*/
/*         {{ form_row(form.label) }}*/
/*         {{ form_row(form.connector) }}*/
/*         {{ form_row(form.alias) }}*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* */
