<?php

/* OroEntityConfigBundle:Config:propertyLabel.html.twig */
class __TwigTemplate_83e8da53fa20437540e292c8d1f4268277cacdf2530b5b5672e55b5e7d8edade extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "getValue", array(0 => "entity_icon"), "method", true, true)) {
            // line 3
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "getValue", array(0 => "entity_icon"), "method"), "html", null, true);
            echo " hide-text pull-right\"></i>
";
        }
        // line 5
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:propertyLabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ value }}*/
/* {% if record.getValue('entity_icon') is defined %}*/
/*     <i class="{{ record.getValue('entity_icon') }} hide-text pull-right"></i>*/
/* {% endif %}*/
/* */
/* */
