<?php

/* APYJsFormValidationBundle:Constraints:DateValidator.js.twig */
class __TwigTemplate_e3ebaae683374ad33e045a3700fc1d7532f09fecbe8a8d8489433b98c8ebe891 extends Twig_Template
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
        echo "function Date(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    var date = new window.Date(String(value))

    if (!date instanceof window.Date || isNaN(date.getTime()) || date.getSeconds() || date.getMilliseconds()) {
        return getComputeMessage(params.message);
    }

    return true;
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:DateValidator.js.twig";
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
/* function Date(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     var date = new window.Date(String(value))*/
/* */
/*     if (!date instanceof window.Date || isNaN(date.getTime()) || date.getSeconds() || date.getMilliseconds()) {*/
/*         return getComputeMessage(params.message);*/
/*     }*/
/* */
/*     return true;*/
/* }*/
/* */
