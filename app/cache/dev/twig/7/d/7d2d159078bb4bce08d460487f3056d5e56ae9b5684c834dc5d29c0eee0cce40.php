<?php

/* APYJsFormValidationBundle:Constraints:RegexValidator.js.twig */
class __TwigTemplate_6b062ecf2cd830841ea85ec63c8f79e494fd594ebe293b859d95eaff9f12b867 extends Twig_Template
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
        echo "function Regex(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    // xor with converted boolean values
    if ( !params.match != !params.pattern.test(value) ) {
        return getComputeMessage(params.message);
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:RegexValidator.js.twig";
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
/* function Regex(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     // xor with converted boolean values*/
/*     if ( !params.match != !params.pattern.test(value) ) {*/
/*         return getComputeMessage(params.message);*/
/*     }*/
/* */
/*     return true;*/
/* }*/
