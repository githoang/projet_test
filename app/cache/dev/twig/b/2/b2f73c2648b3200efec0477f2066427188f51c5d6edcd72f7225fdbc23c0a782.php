<?php

/* OroEmailBundle:Email/Datagrid/Property:subject.html.twig */
class __TwigTemplate_9db2cb9a0a5de3f9c203e0b2c7224aff4241eda88752e8d37b008cb556899ad0 extends Twig_Template
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
        echo "<a class=\"view-email-button no-hash\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_view", array("id" => $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "getValue", array(0 => "id"), "method"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:subject.html.twig";
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
/* <a class="view-email-button no-hash" title="{{ value }}" href="{{ path('oro_email_view', {id:record.getValue('id')}) }}">{{ value }}</a>*/
/* */
