<?php

/* APYJsFormValidationBundle:Constraints:NotNullValidator.js.twig */
class __TwigTemplate_c0c07cdfe469b37d4584ca80ee48bb9fd1a1603e21c043e957356334b24f2f0e extends Twig_Template
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
        echo "function NotNull(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (typeof(value) == 'undefined' || value === null) {
        return getComputeMessage(params.message);
    }

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:NotNullValidator.js.twig";
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
/* function NotNull(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (typeof(value) == 'undefined' || value === null) {*/
/*         return getComputeMessage(params.message);*/
/*     }*/
/* */
/*     return true;*/
/* }*/
