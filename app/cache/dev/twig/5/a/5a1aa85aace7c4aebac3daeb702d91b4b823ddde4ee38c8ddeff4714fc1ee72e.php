<?php

/* PimDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_ec0b00f3a41a26c580a72aa75c93bc2ba4c1353abb4ff2e2ff063067bcb32441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "PimDashboardBundle:Dashboard:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"dashboard header\">
        <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_dashboard.title"), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"scrollable-container quick-launchpad dashboard\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 11
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("pim_dashboard.controller.widget:listAction"));
        echo "
            </div>
        </div>

        <div class=\"version-container muted\">
            ";
        // line 16
        $this->loadTemplate("PimDashboardBundle:Dashboard:index.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 16, "1768024147")->display($context);
        // line 17
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  42 => 11,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}


/* PimDashboardBundle:Dashboard:index.html.twig */
class __TwigTemplate_ec0b00f3a41a26c580a72aa75c93bc2ba4c1353abb4ff2e2ff063067bcb32441_1768024147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("PimDashboardBundle:Dashboard:version.html.twig", "PimDashboardBundle:Dashboard:index.html.twig", 16);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimDashboardBundle:Dashboard:version.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Dashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  52 => 17,  50 => 16,  42 => 11,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* */
/* {% block content %}*/
/*     <div class="dashboard header">*/
/*         <h3>{{ 'pim_dashboard.title'|trans }}</h3>*/
/*     </div>*/
/* */
/*     <div class="scrollable-container quick-launchpad dashboard">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {{ render(controller('pim_dashboard.controller.widget:listAction')) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="version-container muted">*/
/*             {% embed 'PimDashboardBundle:Dashboard:version.html.twig' %}{% endembed %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
