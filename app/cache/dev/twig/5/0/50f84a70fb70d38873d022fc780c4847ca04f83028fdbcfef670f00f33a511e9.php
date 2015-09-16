<?php

/* OroEmailBundle:Email/Datagrid/Property:from.html.twig */
class __TwigTemplate_f18b2ed9173cc27816baeac21bb5f28c4bfdfe24bb08eace99bd63f82df741e7 extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:from.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["EA"]->getemail_address((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "getValue", array(0 => "fromName"), "method"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:from.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* */
/* {{ EA.email_address(value, record.getValue('fromName')) }}*/
/* */
