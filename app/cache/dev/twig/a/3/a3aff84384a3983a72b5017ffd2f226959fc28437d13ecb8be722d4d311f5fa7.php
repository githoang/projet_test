<?php

/* PimDataGridBundle:Property:activated.html.twig */
class __TwigTemplate_6a9fbd2325c766d59506ede3bbea48ae957fcb024b3b4fe977ed7899e578ba09 extends Twig_Template
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
        echo "<span class=\"label label-";
        echo (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ("success") : ("important"));
        echo "\">";
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ($this->env->getExtension('translator')->trans("Active")) : ($this->env->getExtension('translator')->trans("Inactive"))), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:activated.html.twig";
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
/* <span class="label label-{{ value ? 'success' : 'important'}}">{{ value ? 'Active'|trans : 'Inactive'|trans }}</span>*/
/* */
