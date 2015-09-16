<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.zepto.twig */
class __TwigTemplate_b7db2ef4bc7b948ca732fd1bb5cc8793b0fd20d3156963c7b72d9027369c34c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.zepto.twig", 1);
        $this->blocks = array(
            'onEvent' => array($this, 'block_onEvent'),
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

    // line 3
    public function block_onEvent($context, array $blocks = array())
    {
        // line 4
        echo "if(typeof(\$.Event)==\"function\") {
    ";
        // line 5
        $this->displayParentBlock("onEvent", $context, $blocks);
        echo "
} else {
    field.addEventListener(eventType, handler, false);
}
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.zepto.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
/* {% block onEvent %}*/
/* if(typeof($.Event)=="function") {*/
/*     {{ parent() }}*/
/* } else {*/
/*     field.addEventListener(eventType, handler, false);*/
/* }*/
/* {% endblock %}*/
/* */
