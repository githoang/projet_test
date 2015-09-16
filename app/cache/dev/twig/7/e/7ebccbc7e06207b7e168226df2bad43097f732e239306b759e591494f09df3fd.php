<?php

/* OroRequireJSBundle::require_config.js.twig */
class __TwigTemplate_82a6a5290ddc73db76f0e002da11f90004eab7d989eea0b9c7b49711157fd018 extends Twig_Template
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
        echo "require(";
        echo twig_jsonencode_filter((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
        echo ");
";
    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::require_config.js.twig";
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
/* require({{ config|json_encode|raw }});*/
/* */
