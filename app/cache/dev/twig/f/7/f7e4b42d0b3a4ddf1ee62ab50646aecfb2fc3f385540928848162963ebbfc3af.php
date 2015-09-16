<?php

/* OroUserBundle:User/Autocomplete:result.html.twig */
class __TwigTemplate_589e5ea3532b257dd17fd4e8f78acbbd635033bd088b1b3ecee63d231514083a extends Twig_Template
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
&nbsp;<%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User/Autocomplete:result.html.twig";
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
/* &nbsp;<%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)*/
/* */
