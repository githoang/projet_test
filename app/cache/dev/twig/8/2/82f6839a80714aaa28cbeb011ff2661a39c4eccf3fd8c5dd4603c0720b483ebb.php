<?php

/* PimDataGridBundle:Property:currency_label.html.twig */
class __TwigTemplate_6ec4c990699810ec60cce527579f9365317fb1c6c42ac3a069e7908ca9f74a2f extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->currencyLabel((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo ")
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:currency_label.html.twig";
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
/* {{ value }} ({{ currency_label(value) }})*/
/* */
