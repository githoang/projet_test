<?php

/* PimDataGridBundle:Property:metric.html.twig */
class __TwigTemplate_806a03f934effa47574602cec61ab7d90c0a9fe838a7f032f52f65ea85e377f6 extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(((array_key_exists("unit", $context)) ? (_twig_default_filter((isset($context["unit"]) ? $context["unit"] : $this->getContext($context, "unit")), "")) : (""))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:metric.html.twig";
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
/* {{ data }} {{ unit|default('')|trans }}*/
/* */
