<?php

/* PimDataGridBundle:Property:boolean.html.twig */
class __TwigTemplate_9a646534fb6dd4cc14a7df3cd93ce09041ffe0bd7adacf649fd3d8006ed1a376 extends Twig_Template
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
        $context["status"] = (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ("success") : ("important"));
        // line 2
        echo "<span class=\"label label-";
        echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ("Yes") : ("No"))), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:boolean.html.twig";
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
/* {% set status = value ? 'success' : 'important' %}*/
/* <span class="label label-{{ status }}">{{ (value ? 'Yes': 'No')|trans }}</span>*/
/* */
