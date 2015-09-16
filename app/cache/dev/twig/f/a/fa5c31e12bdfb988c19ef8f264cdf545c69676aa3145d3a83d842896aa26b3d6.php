<?php

/* APYJsFormValidationBundle:Constraints:TypeValidator.js.twig */
class __TwigTemplate_498f40b9699539f36ab6394129d7cf1d2493e10892381d04444cb42b096eecdc extends Twig_Template
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
        echo "function Type(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;
    if (value === void 0) {
        return true;
    }

    var result = true;
    switch (params.type.toLowerCase()) {
        case 'numeric':
            result = !isNaN(value);
            break;
        case 'bool':
            result = value == !!value;
            break;
        default:
            break;
    }

    return result || getComputeMessage(params.message, { 'type' : params.type });
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:TypeValidator.js.twig";
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
/* function Type(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/*     if (value === void 0) {*/
/*         return true;*/
/*     }*/
/* */
/*     var result = true;*/
/*     switch (params.type.toLowerCase()) {*/
/*         case 'numeric':*/
/*             result = !isNaN(value);*/
/*             break;*/
/*         case 'bool':*/
/*             result = value == !!value;*/
/*             break;*/
/*         default:*/
/*             break;*/
/*     }*/
/* */
/*     return result || getComputeMessage(params.message, { 'type' : params.type });*/
/* }*/
/* */
