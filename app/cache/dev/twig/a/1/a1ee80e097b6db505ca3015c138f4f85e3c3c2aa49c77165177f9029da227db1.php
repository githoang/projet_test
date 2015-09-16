<?php

/* PimEnrichBundle:Family:_history.html.twig */
class __TwigTemplate_6a65fdff18ad01e9ede15ba7d0188c1da9150784bdff9de99e5baa7b0f093dce extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Family:_history.html.twig", 1);
        // line 2
        echo $context["dataGrid"]->getrenderHistoryGrid((isset($context["family"]) ? $context["family"] : $this->getContext($context, "family")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Family:_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {{ dataGrid.renderHistoryGrid(family) }}*/
/* */
