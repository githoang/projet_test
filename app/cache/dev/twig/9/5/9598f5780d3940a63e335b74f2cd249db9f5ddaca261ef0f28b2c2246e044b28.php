<?php

/* PimJsFormValidationBundle:Constraints:UniqueValueValidator.js.twig */
class __TwigTemplate_f6f31fafaebb05ffc4f2d46ebd1be355dec0cb951263109201863db307abcb95 extends Twig_Template
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
        echo "function UniqueValue(field, params)
{
    /**
     * This constraint cannot be validated on the frontend.
     * So we consider it always valid.
     */
    return true;
}
";
    }

    public function getTemplateName()
    {
        return "PimJsFormValidationBundle:Constraints:UniqueValueValidator.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* function UniqueValue(field, params)*/
/* {*/
/*     /***/
/*      * This constraint cannot be validated on the frontend.*/
/*      * So we consider it always valid.*/
/*      *//**/
/*     return true;*/
/* }*/
/* */
