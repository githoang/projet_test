<?php

/* OroUserBundle:User/Autocomplete:selection.html.twig */
class __TwigTemplate_c7d962bf5023aec0ef4fdd8d8adc33b69331a02a28ec48c4aa99acda61b869b8 extends Twig_Template
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
        echo "<img src=\"<% if (typeof avatar !== 'undefined' && avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"), "html", null, true);
        echo "<% } %>\" width=\"16\" height=\"16\" />
&nbsp;<%= _.escape(fullName) %>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Autocomplete:selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <img src="<% if (typeof avatar !== 'undefined' && avatar) { %><%= avatar %><% } else { %>{{- asset('bundles/oroui/img/info-user.png') -}}<% } %>" width="16" height="16" />*/
/* &nbsp;<%= _.escape(fullName) %>*/
/* */
