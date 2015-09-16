<?php

/* APYJsFormValidationBundle:Constraints:RangeValidator.js.twig */
class __TwigTemplate_89c1b129d81a196e9ce37bc3cfb2ff4b1b9eb428ab51d9beb7f57dc5893c720a extends Twig_Template
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
        echo "function Range(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    if (value == parseFloat(value)) {
        value = parseFloat(value);
        if (value < parseFloat(params.min)) {
            return getComputeMessage(params.minMessage, { 'limit' : params.min }, params.min);
        }
        if (value > parseFloat(params.max)) {
            return getComputeMessage(params.maxMessage, { 'limit' : params.max}, params.max);
        }

        return true;
    } else {
        var date = new window.Date(value);
        var valid = Boolean(date.getTime());
        if (valid) {
            // TODO: Compensate for timezone offset and print errors in the right format
            if (params.min && params.min.date && date < new window.Date(params.min.date)) {
                return getComputeMessage(params.minMessage, { 'limit' : params.min.date }, params.min.date);
            }
            if (params.max && params.max.date && date > new window.Date(params.max.date)) {
                return getComputeMessage(params.maxMessage, { 'limit' : params.max.date }, params.max.date);
            }

            return true;
        }
    }

    return getComputeMessage(params.invalidMessage);
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:RangeValidator.js.twig";
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
/* function Range(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     if (value == parseFloat(value)) {*/
/*         value = parseFloat(value);*/
/*         if (value < parseFloat(params.min)) {*/
/*             return getComputeMessage(params.minMessage, { 'limit' : params.min }, params.min);*/
/*         }*/
/*         if (value > parseFloat(params.max)) {*/
/*             return getComputeMessage(params.maxMessage, { 'limit' : params.max}, params.max);*/
/*         }*/
/* */
/*         return true;*/
/*     } else {*/
/*         var date = new window.Date(value);*/
/*         var valid = Boolean(date.getTime());*/
/*         if (valid) {*/
/*             // TODO: Compensate for timezone offset and print errors in the right format*/
/*             if (params.min && params.min.date && date < new window.Date(params.min.date)) {*/
/*                 return getComputeMessage(params.minMessage, { 'limit' : params.min.date }, params.min.date);*/
/*             }*/
/*             if (params.max && params.max.date && date > new window.Date(params.max.date)) {*/
/*                 return getComputeMessage(params.maxMessage, { 'limit' : params.max.date }, params.max.date);*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/*     }*/
/* */
/*     return getComputeMessage(params.invalidMessage);*/
/* }*/
/* */
