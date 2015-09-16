<?php

/* APYJsFormValidationBundle:Constraints:CountryValidator.js.twig */
class __TwigTemplate_beabf69fb61f8885c26d1753851e4876103e8768cece574734f61c877092e083 extends Twig_Template
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
        echo "function Country(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    var countries = ";
        // line 11
        echo $this->env->getExtension('JsFormValidation')->getCountries();
        echo ";

    for (key in countries) {
        if (countries[key] == value) {
            return true;
        }
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:CountryValidator.js.twig";
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
/* function Country(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     var countries = {{ getCountries()|raw }};*/
/* */
/*     for (key in countries) {*/
/*         if (countries[key] == value) {*/
/*             return true;*/
/*         }*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
