<?php

/* APYJsFormValidationBundle:Constraints:ImageValidator.js.twig */
class __TwigTemplate_146988f192a5b0e560e63313dfdefd9d62b1fcd38b79d741ededb475714fafcb extends Twig_Template
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
        echo "function Image(field, params)
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
        return "APYJsFormValidationBundle:Constraints:ImageValidator.js.twig";
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
/* function Image(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     return true;*/
/* }*/
