<?php

/* PimDashboardBundle:Widget:completeness.html.twig */
class __TwigTemplate_28a6e083422188252885dec5501a14aeb1bd46f15edb2021d8bda5268cf036b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimDashboardBundle:Widget:base.html.twig", "PimDashboardBundle:Widget:completeness.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimDashboardBundle:Widget:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["widgetTitle"] = $this->env->getExtension('translator')->trans("pim_dashboard.widget.completeness.title");
        // line 5
        $context["widgetContent"] = ('' === $tmp = "    <table id=\"completeness-widget\"></table>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/dashboard/completeness-widget'],
            function (\$, CompletenessWidget) {
                'use strict';
                \$(function() {
                    CompletenessWidget.init({el: '#completeness-widget', alias: 'completeness'});
                });
            }
        );
    </script>
") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:completeness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 1,  26 => 5,  24 => 3,  11 => 1,);
    }
}
/* {% extends 'PimDashboardBundle:Widget:base.html.twig' %}*/
/* */
/* {% set widgetTitle = 'pim_dashboard.widget.completeness.title'|trans %}*/
/* */
/* {% set widgetContent %}*/
/*     <table id="completeness-widget"></table>*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/dashboard/completeness-widget'],*/
/*             function ($, CompletenessWidget) {*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     CompletenessWidget.init({el: '#completeness-widget', alias: 'completeness'});*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endset %}*/
/* */
