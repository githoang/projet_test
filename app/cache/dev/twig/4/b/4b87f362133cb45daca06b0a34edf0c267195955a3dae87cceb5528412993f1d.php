<?php

/* APYJsFormValidationBundle:Constraints:SizeValidator.js.twig */
class __TwigTemplate_f209f11acbc2c94155a294974fecc885eca768f2baab1e5ce8d756e930767432 extends Twig_Template
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
        echo "function Size(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    if (!(typeof(value) === 'number' || typeof(value) === 'string') && !isNaN(value)) {
        return getComputeMessage(params.invalidMessage, { 'limit' : params.limit } );
    }

    if (parseInt(value) > parseInt(params.max)) {
        return getComputeMessage(params.maxMessage, { 'limit' : params.max } );
    }

    if (parseInt(value) < parseInt(params.min)) {
        return getComputeMessage(params.minMessage, { 'limit' : params.min } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:SizeValidator.js.twig";
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
/* function Size(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     if (!(typeof(value) === 'number' || typeof(value) === 'string') && !isNaN(value)) {*/
/*         return getComputeMessage(params.invalidMessage, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     if (parseInt(value) > parseInt(params.max)) {*/
/*         return getComputeMessage(params.maxMessage, { 'limit' : params.max } );*/
/*     }*/
/* */
/*     if (parseInt(value) < parseInt(params.min)) {*/
/*         return getComputeMessage(params.minMessage, { 'limit' : params.min } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
