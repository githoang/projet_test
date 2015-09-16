<?php

/* APYJsFormValidationBundle:Constraints:LengthValidator.js.twig */
class __TwigTemplate_5bda4ab7fc068fa6c9b0d7e0b9d4c7d74d3b7bdba2a499e404d1cd5a21c02aaf extends Twig_Template
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
        echo "function Length(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);
\t
\tif (params['exactMessage'] !== undefined && 
\t    params['min'] !== undefined && params['max'] !== undefined && 
\t    params.min == params.max) {
\t    if (value.length != parseInt(params.min)) {
    \t\treturn getComputeMessage(params.exactMessage, { 'limit' : params.min }, params.min);
\t    }
    } else {
\t    if (params['min'] !== undefined && value.length < parseInt(params.min)) {
\t        return getComputeMessage(params.minMessage, { 'limit' : params.min }, params.min);
\t    }
\t    if (params['max'] !== undefined && value.length > parseInt(params.max)) {
\t        return getComputeMessage(params.maxMessage, { 'limit' : params.max }, params.max);
\t    }
    }

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:LengthValidator.js.twig";
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
/* function Length(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* 	*/
/* 	if (params['exactMessage'] !== undefined && */
/* 	    params['min'] !== undefined && params['max'] !== undefined && */
/* 	    params.min == params.max) {*/
/* 	    if (value.length != parseInt(params.min)) {*/
/*     		return getComputeMessage(params.exactMessage, { 'limit' : params.min }, params.min);*/
/* 	    }*/
/*     } else {*/
/* 	    if (params['min'] !== undefined && value.length < parseInt(params.min)) {*/
/* 	        return getComputeMessage(params.minMessage, { 'limit' : params.min }, params.min);*/
/* 	    }*/
/* 	    if (params['max'] !== undefined && value.length > parseInt(params.max)) {*/
/* 	        return getComputeMessage(params.maxMessage, { 'limit' : params.max }, params.max);*/
/* 	    }*/
/*     }*/
/* */
/*     return true;*/
/* }*/
/* */
