<?php

/* APYJsFormValidationBundle:Constraints:NullValidator.js.twig */
class __TwigTemplate_8ff24e18b51cbf44473f702116230de344e435ca5ebbb6daa7dacd73bcc8c4a2 extends Twig_Template
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
        echo "function Null(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (typeof(value) == 'undefined' || value === null) {
        return true;
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:NullValidator.js.twig";
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
/* function Null(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (typeof(value) == 'undefined' || value === null) {*/
/*         return true;*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
