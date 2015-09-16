<?php

/* APYJsFormValidationBundle:Constraints:MaxLengthValidator.js.twig */
class __TwigTemplate_7ae3a2aaa8d2d0aa8234d7b7208516c5c3b6d7e035cbf257e06f05370e4d81c7 extends Twig_Template
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
        echo "function MaxLength(field, params)
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
    if (value.length > parseInt(params.limit)) {
        return getComputeMessage(params.message, { 'limit' : params.limit } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:MaxLengthValidator.js.twig";
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
/* function MaxLength(field, params)*/
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
/*     if (value.length > parseInt(params.limit)) {*/
/*         return getComputeMessage(params.message, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
