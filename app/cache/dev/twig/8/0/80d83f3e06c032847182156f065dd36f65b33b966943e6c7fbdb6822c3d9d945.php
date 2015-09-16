<?php

/* APYJsFormValidationBundle:Constraints:RepeatedValidator.js.twig */
class __TwigTemplate_f9b796fe9b6b0826cbd88723c3b4bac68c145c2798e374d1d92d3eceb6dc6606 extends Twig_Template
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
        echo "function Repeated(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    first = document.getElementById(params.first_name).value;
    second = document.getElementById(params.second_name).value;

    if (first !== second) {
        return getComputeMessage(params.invalid_message, params.invalid_message_parameters);
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:RepeatedValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }
}
/* function Repeated(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     first = document.getElementById(params.first_name).value;*/
/*     second = document.getElementById(params.second_name).value;*/
/* */
/*     if (first !== second) {*/
/*         return getComputeMessage(params.invalid_message, params.invalid_message_parameters);*/
/*     }*/
/* */
/*     return true;*/
/* }*/
