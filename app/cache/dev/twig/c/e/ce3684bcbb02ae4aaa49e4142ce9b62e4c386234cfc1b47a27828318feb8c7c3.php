<?php

/* PimEnrichBundle:Attribute:_field-type.html.twig */
class __TwigTemplate_dc6edcbcf8adad9b42479aa323183c8fb2da32d43bde2c6c6c62d8fc4f65935e extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:_field-type.html.twig";
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
/* {{ value|trans }}*/
/* */
