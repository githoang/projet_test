<?php

/* PimDashboardBundle:Dashboard:version.html.twig */
class __TwigTemplate_e6a69a4a5a557d0b3510bfe7d003c6e8d21998b181d58e6ff56e47a14f14505d extends Twig_Template
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
        echo "<strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_dashboard.version"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('pim_version_extension')->version(), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:version.html.twig";
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
/* <strong>{{ 'pim_dashboard.version'|trans }}:</strong> {{ version() }}*/
/* */
