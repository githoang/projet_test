<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig */
class __TwigTemplate_21686fdf06a38151edcddbf2daa5fb584ffad4538152c835666581ef34d09ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig", 1);
        $this->blocks = array(
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
    public function block_removeErrors($context, array $blocks = array())
    {
        // line 4
        echo "\$(field).adjacent('.error_list').each(function(el) { el.remove(); });
";
    }

    // line 7
    public function block_addError($context, array $blocks = array())
    {
        // line 8
        echo "// Add errors block
field = \$(field);
if (field.adjacent('ul.error_list').length == 0) {
    field.insert({ before: '<ul class=\"error_list\"></ul>' });
}

// Add error
field.previous('ul').insert('<li>'+errorMessage+'</li>');
";
    }

    // line 18
    public function block_onEvent($context, array $blocks = array())
    {
        // line 19
        echo "\$(field).observe(eventType, handler);
";
    }

    // line 22
    public function block_onReady($context, array $blocks = array())
    {
        // line 23
        echo "document.observe(\"dom:loaded\", jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.prototype.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 23,  62 => 22,  57 => 19,  54 => 18,  42 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
/* {% block removeErrors %}*/
/* $(field).adjacent('.error_list').each(function(el) { el.remove(); });*/
/* {% endblock %}*/
/* */
/* {% block addError %}*/
/* // Add errors block*/
/* field = $(field);*/
/* if (field.adjacent('ul.error_list').length == 0) {*/
/*     field.insert({ before: '<ul class="error_list"></ul>' });*/
/* }*/
/* */
/* // Add error*/
/* field.previous('ul').insert('<li>'+errorMessage+'</li>');*/
/* {% endblock %}*/
/* */
/* {% block onEvent %}*/
/* $(field).observe(eventType, handler);*/
/* {% endblock %}*/
/* */
/* {% block onReady %}*/
/* document.observe("dom:loaded", jsfv['{{ formName }}'].onReady);*/
/* {% endblock %}*/
/* */
