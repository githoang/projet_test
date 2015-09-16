<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.jquery.twig */
class __TwigTemplate_0be93de603082393c4bc277a5c0f4d2d9fb45965cb202d611b071cfc170a23e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.jquery.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.jquery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
