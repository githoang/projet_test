<?php

/* PimEnrichBundle:Group:_history.html.twig */
class __TwigTemplate_36dd6265e8f3653cb072bc32b75bdef9887b6f207ce989b7a1654b728a423bd2 extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Group:_history.html.twig", 1);
        // line 2
        echo $context["dataGrid"]->getrenderHistoryGrid((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group:_history.html.twig";
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
/* {{ dataGrid.renderHistoryGrid(group) }}*/
/* */
