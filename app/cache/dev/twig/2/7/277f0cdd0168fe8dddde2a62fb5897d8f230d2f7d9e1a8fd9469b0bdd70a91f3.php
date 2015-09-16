<?php

/* APYJsFormValidationBundle:Constraints:DateTimeValidator.js.twig */
class __TwigTemplate_9fef1db73166d9f368a9618d4ce0877015924961bf5d444c4df0e5f932b9fbee extends Twig_Template
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
        echo "function DateTime(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    var pattern = /^(\\d{4})-(\\d{2})-(\\d{2}) (0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])\$/;

    if ( pattern.test(value) ) {
        return true;
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:DateTimeValidator.js.twig";
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
/* function DateTime(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     var pattern = /^(\d{4})-(\d{2})-(\d{2}) (0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/;*/
/* */
/*     if ( pattern.test(value) ) {*/
/*         return true;*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
