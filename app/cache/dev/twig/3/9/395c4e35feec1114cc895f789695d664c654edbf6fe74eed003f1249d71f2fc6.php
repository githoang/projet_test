<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.dojo.twig */
class __TwigTemplate_ec5c7233159ead7a04fa45552f2117665d687e1c8216f915b9f8fd54d587fc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.dojo.twig", 1);
        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'addError' => array($this, 'block_addError'),
            'onEvent' => array($this, 'block_onEvent'),
            'onReady' => array($this, 'block_onReady'),
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
    public function block_before($context, array $blocks = array())
    {
        // line 4
        echo "dojo.require(\"dojo.NodeList-traverse\");
dojo.require(\"dojo.NodeList-manipulate\");
";
    }

    // line 8
    public function block_removeErrors($context, array $blocks = array())
    {
        // line 9
        echo "var errorsField = dojo.query(field).siblings('ul.error_list').remove();
";
    }

    // line 12
    public function block_addError($context, array $blocks = array())
    {
        // line 13
        echo "// Add errors block
field = dojo.query(field);
if (field.siblings('ul.error_list').length == 0) {
    field.before('<ul class=\"error_list\"></ul>');
}

// Add error
field.prev('ul').append('<li>'+errorMessage+'</li>');
";
    }

    // line 23
    public function block_onEvent($context, array $blocks = array())
    {
        // line 24
        echo "dojo.connect(field, \"on\"+eventType, handler);
";
    }

    // line 27
    public function block_onReady($context, array $blocks = array())
    {
        // line 28
        echo "dojo.ready(jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.dojo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  72 => 27,  67 => 24,  64 => 23,  52 => 13,  49 => 12,  44 => 9,  41 => 8,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
/* {% block before %}*/
/* dojo.require("dojo.NodeList-traverse");*/
/* dojo.require("dojo.NodeList-manipulate");*/
/* {% endblock %}*/
/* */
/* {% block removeErrors %}*/
/* var errorsField = dojo.query(field).siblings('ul.error_list').remove();*/
/* {% endblock %}*/
/* */
/* {% block addError %}*/
/* // Add errors block*/
/* field = dojo.query(field);*/
/* if (field.siblings('ul.error_list').length == 0) {*/
/*     field.before('<ul class="error_list"></ul>');*/
/* }*/
/* */
/* // Add error*/
/* field.prev('ul').append('<li>'+errorMessage+'</li>');*/
/* {% endblock %}*/
/* */
/* {% block onEvent %}*/
/* dojo.connect(field, "on"+eventType, handler);*/
/* {% endblock %}*/
/* */
/* {% block onReady %}*/
/* dojo.ready(jsfv['{{ formName }}'].onReady);*/
/* {% endblock %}*/
/* */
