<?php

/* APYJsFormValidationBundle:Constraints:MinLengthValidator.js.twig */
class __TwigTemplate_12a0d25a8ee9febaccfe112d220ab0cbf89d5f47d10985e818d25691a1bf4ef7 extends Twig_Template
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
        echo "function MinLength(field, params)
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
    if (value.length < parseInt(params.limit)) {
        return getComputeMessage(params.message, { 'limit' : params.limit } );
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:MinLengthValidator.js.twig";
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
/* function MinLength(field, params)*/
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
/*     if (value.length < parseInt(params.limit)) {*/
/*         return getComputeMessage(params.message, { 'limit' : params.limit } );*/
/*     }*/
/* */
/*     return true;*/
/* }*/
