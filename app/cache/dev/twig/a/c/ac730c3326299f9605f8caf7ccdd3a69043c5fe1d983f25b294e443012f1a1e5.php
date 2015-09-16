<?php

/* APYJsFormValidationBundle:Frameworks:JsFormValidation.js.mootools.twig */
class __TwigTemplate_ccdabb05922380fb51b9124e538807bc3f0dc3bb1c33033abb9a4c26036ded2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("APYJsFormValidationBundle::JsFormValidation.js.twig", "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.mootools.twig", 1);
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
        echo "//u.error_list doesn't work
\$(field).getSiblings('.error_list').each(function(el) { el.destroy(); });
";
    }

    // line 8
    public function block_addError($context, array $blocks = array())
    {
        // line 9
        echo "// Add errors block
field = \$(field);
if (field.getSiblings('.error_list').length == 0)  {
        var ulErrors  = new Element('ul', { class : 'error_list' });
        ulErrors.inject(field, 'before');
}

// Add error
field.getPrevious('ul').adopt(new Element('li', { html : errorMessage }));
";
    }

    // line 20
    public function block_onEvent($context, array $blocks = array())
    {
        // line 21
        echo "\$(field).addEvent(eventType, handler);
";
    }

    // line 24
    public function block_onReady($context, array $blocks = array())
    {
        // line 25
        echo "window.addEvent('domready', jsfv['";
        echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "html", null, true);
        echo "'].onReady);
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Frameworks:JsFormValidation.js.mootools.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 24,  59 => 21,  56 => 20,  43 => 9,  40 => 8,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'APYJsFormValidationBundle::JsFormValidation.js.twig' %}*/
/* */
/* {% block removeErrors %}*/
/* //u.error_list doesn't work*/
/* $(field).getSiblings('.error_list').each(function(el) { el.destroy(); });*/
/* {% endblock %}*/
/* */
/* {% block addError %}*/
/* // Add errors block*/
/* field = $(field);*/
/* if (field.getSiblings('.error_list').length == 0)  {*/
/*         var ulErrors  = new Element('ul', { class : 'error_list' });*/
/*         ulErrors.inject(field, 'before');*/
/* }*/
/* */
/* // Add error*/
/* field.getPrevious('ul').adopt(new Element('li', { html : errorMessage }));*/
/* {% endblock %}*/
/* */
/* {% block onEvent %}*/
/* $(field).addEvent(eventType, handler);*/
/* {% endblock %}*/
/* */
/* {% block onReady %}*/
/* window.addEvent('domready', jsfv['{{ formName }}'].onReady);*/
/* {% endblock %}*/
/* */
