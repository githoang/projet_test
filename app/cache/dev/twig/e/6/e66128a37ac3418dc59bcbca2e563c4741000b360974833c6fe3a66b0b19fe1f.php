<?php

/* APYJsFormValidationBundle:Constraints:SizeLengthValidator.js.twig */
class __TwigTemplate_6c0be75e87d00bf8bc74616ee0d4a847c0e9f4c93ab9b840ae1e252df8e1ce37 extends Twig_Template
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
        echo "function SizeLength(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    // Charset ?
    if (parseInt(params.min) == parseInt(params.max) && value.length != parseInt(params.max)) {
        return getComputeMessage(params.exactMessage, { 'limit' : params.max } );
    }

    if (value.length > parseInt(params.max)) {
        return getComputeMessage(params.maxMessage, { 'limit' : params.max } );
    }

    if (value.length < parseInt(params.min)) {
        return getComputeMessage(params.minMessage, { 'limit' : params.min } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:SizeLengthValidator.js.twig";
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
/* function SizeLength(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     // Charset ?*/
/*     if (parseInt(params.min) == parseInt(params.max) && value.length != parseInt(params.max)) {*/
/*         return getComputeMessage(params.exactMessage, { 'limit' : params.max } );*/
/*     }*/
/* */
/*     if (value.length > parseInt(params.max)) {*/
/*         return getComputeMessage(params.maxMessage, { 'limit' : params.max } );*/
/*     }*/
/* */
/*     if (value.length < parseInt(params.min)) {*/
/*         return getComputeMessage(params.minMessage, { 'limit' : params.min } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
