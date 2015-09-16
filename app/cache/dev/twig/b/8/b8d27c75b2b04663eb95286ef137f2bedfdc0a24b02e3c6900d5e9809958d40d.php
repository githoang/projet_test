<?php

/* APYJsFormValidationBundle:Constraints:LocaleValidator.js.twig */
class __TwigTemplate_3518d3f0175ce4b435cfb2e88bd3e7f177291b0af0426fb72028eddd9e42e93c extends Twig_Template
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
        echo "function Locale(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    var locales = ";
        // line 11
        echo $this->env->getExtension('JsFormValidation')->getLocales();
        echo ";

    for (key in locales) {
        if (locales[key] == value) {
            return true;
        }
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:LocaleValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,);
    }
}
/* function Locale(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     var locales = {{ getLocales()|raw }};*/
/* */
/*     for (key in locales) {*/
/*         if (locales[key] == value) {*/
/*             return true;*/
/*         }*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
