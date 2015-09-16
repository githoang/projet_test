<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.yui3.twig */
class __TwigTemplate_b2ddf9310fdb43899dd1edb9e995b47dba1be0caa78e4ee1af6ccb7bb80db205 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.yui3.twig", 1);
        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'addError' => array($this, 'block_addError'),
            'onEvent' => array($this, 'block_onEvent'),
            'onReady' => array($this, 'block_onReady'),
            'after' => array($this, 'block_after'),
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
        echo "YUI().use('node', function (Y) {
";
    }

    // line 7
    public function block_removeErrors($context, array $blocks = array())
    {
        // line 8
        echo "var errosField = Y.one(field).ancestor().all('.error_list').remove();
";
    }

    // line 11
    public function block_addError($context, array $blocks = array())
    {
        // line 12
        echo "// Add errors block
field = Y.one(field);
if (field.ancestor().all('.error_list').size() == 0) {
    field.insert('<ul class=\"error_list\"></ul>', 'before');
}

// Add error
field.previous('ul').append('<li>'+errorMessage+'</li>');
";
    }

    // line 22
    public function block_onEvent($context, array $blocks = array())
    {
        // line 23
        echo "Y.one(field).on(eventType, handler);
";
    }

    // line 26
    public function block_onReady($context, array $blocks = array())
    {
        // line 27
        echo "Y.on('domready',jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'].onReady);
";
    }

    // line 30
    public function block_after($context, array $blocks = array())
    {
        // line 31
        echo "});
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.yui3.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  82 => 30,  75 => 27,  72 => 26,  67 => 23,  64 => 22,  52 => 12,  49 => 11,  44 => 8,  41 => 7,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
/* {% block before %}*/
/* YUI().use('node', function (Y) {*/
/* {% endblock %}*/
/* */
/* {% block removeErrors %}*/
/* var errosField = Y.one(field).ancestor().all('.error_list').remove();*/
/* {% endblock %}*/
/* */
/* {% block addError %}*/
/* // Add errors block*/
/* field = Y.one(field);*/
/* if (field.ancestor().all('.error_list').size() == 0) {*/
/*     field.insert('<ul class="error_list"></ul>', 'before');*/
/* }*/
/* */
/* // Add error*/
/* field.previous('ul').append('<li>'+errorMessage+'</li>');*/
/* {% endblock %}*/
/* */
/* {% block onEvent %}*/
/* Y.one(field).on(eventType, handler);*/
/* {% endblock %}*/
/* */
/* {% block onReady %}*/
/* Y.on('domready',jsfv['{{ formName }}'].onReady);*/
/* {% endblock %}*/
/* */
/* {% block after %}*/
/* });*/
/* {% endblock %}*/
/* */
