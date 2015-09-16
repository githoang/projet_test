<?php

/* APYJsFormValidationBundle:Constraints:MaxValidator.js.twig */
class __TwigTemplate_f2d1a7bbb66cab61e661506a99af03a687855368d962d8dbb4577afa7b4ccdef extends Twig_Template
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
        echo "function Max(field, params)
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

    if (parseInt(value) > parseInt(params.limit)) {
        return getComputeMessage(params.message, { 'limit' : params.limit } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:MaxValidator.js.twig";
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
/* function Max(field, params)*/
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
/*     if (parseInt(value) > parseInt(params.limit)) {*/
/*         return getComputeMessage(params.message, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
