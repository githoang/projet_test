<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.extjs.twig */
class __TwigTemplate_5880223b28f753fb738a84f2724f1488d4ee2a24040fd0da988d4ec41dd1ef1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.extjs.twig", 1);
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
        echo "Ext.each(Ext.get(field).parent().query('.error_list'), function(el) { Ext.get(el).remove(); });
";
    }

    // line 7
    public function block_addError($context, array $blocks = array())
    {
        // line 8
        echo "// Add errors block
field = Ext.get(field);
if (field.parent().query('.error_list').length == 0) {
    Ext.DomHelper.insertBefore(field, '<ul class=\"error_list\"></ul>');
}

// Add error
Ext.DomHelper.append(field.prev('ul'), '<li>'+errorMessage+'</li>');
";
    }

    // line 18
    public function block_onEvent($context, array $blocks = array())
    {
        // line 19
        echo "Ext.get(field).on(eventType, handler);
";
    }

    // line 22
    public function block_onReady($context, array $blocks = array())
    {
        // line 23
        echo "Ext.onReady(jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.extjs.twig";
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
/* Ext.each(Ext.get(field).parent().query('.error_list'), function(el) { Ext.get(el).remove(); });*/
/* {% endblock %}*/
/* */
/* {% block addError %}*/
/* // Add errors block*/
/* field = Ext.get(field);*/
/* if (field.parent().query('.error_list').length == 0) {*/
/*     Ext.DomHelper.insertBefore(field, '<ul class="error_list"></ul>');*/
/* }*/
/* */
/* // Add error*/
/* Ext.DomHelper.append(field.prev('ul'), '<li>'+errorMessage+'</li>');*/
/* {% endblock %}*/
/* */
/* {% block onEvent %}*/
/* Ext.get(field).on(eventType, handler);*/
/* {% endblock %}*/
/* */
/* {% block onReady %}*/
/* Ext.onReady(jsfv['{{ formName }}'].onReady);*/
/* {% endblock %}*/
/* */
