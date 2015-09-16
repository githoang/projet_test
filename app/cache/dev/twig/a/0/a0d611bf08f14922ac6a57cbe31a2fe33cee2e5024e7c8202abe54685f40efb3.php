<?php

/* APYJsFormValidationBundle:Constraints:TimeValidator.js.twig */
class __TwigTemplate_c17306be481a65fc38ab97f17a202a82e1b1d128b179ce921738ef3a72a4b709 extends Twig_Template
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
        echo "function Time(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    var pattern = /^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])\$/;

    if ( pattern.test(value) ) {
        return true;
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:TimeValidator.js.twig";
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
/* function Time(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     var pattern = /^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$/;*/
/* */
/*     if ( pattern.test(value) ) {*/
/*         return true;*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
