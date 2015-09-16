<?php

/* APYJsFormValidationBundle:Constraints:MinValidator.js.twig */
class __TwigTemplate_a63633403de8609239b6730858ac6856cc84f2d5718d875683a7d33d23525edc extends Twig_Template
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
        echo "function Min(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    if (!((typeof(value) === 'number' || typeof(value) === 'string') && !isNaN(value))) {
        return getComputeMessage(params.invalidMessage, { 'limit' : params.limit } );
    }

    if (parseInt(value) < parseInt(params.limit)) {
        return getComputeMessage(params.message, { 'limit' : params.limit } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:MinValidator.js.twig";
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
/* function Min(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     if (!((typeof(value) === 'number' || typeof(value) === 'string') && !isNaN(value))) {*/
/*         return getComputeMessage(params.invalidMessage, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     if (parseInt(value) < parseInt(params.limit)) {*/
/*         return getComputeMessage(params.message, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
