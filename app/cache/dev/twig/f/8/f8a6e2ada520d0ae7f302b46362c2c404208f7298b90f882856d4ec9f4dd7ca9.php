<?php

/* APYJsFormValidationBundle:Constraints:FileValidator.js.twig */
class __TwigTemplate_a72f6d8245b8c1fe77f61606c960c259f810c8c07df0c6310aa37db1cb3adba1 extends Twig_Template
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
        echo "function File(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    return true;
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:FileValidator.js.twig";
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
/* function File(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     return true;*/
/* }*/
