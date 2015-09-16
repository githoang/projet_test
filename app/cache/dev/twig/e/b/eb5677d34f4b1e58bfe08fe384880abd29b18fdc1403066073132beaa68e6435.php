<?php

/* PimEnrichBundle:MassEditAction/configure:change-family.html.twig */
class __TwigTemplate_61c5e6131ee80b5febbb1fecb5f8723334ae34fbe0cd2e0b1695d0e83df9afe7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:change-family.html.twig", 1);
        $this->blocks = array(
            'formContent' => array($this, 'block_formContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:configure/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formContent($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "family", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:change-family.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:configure/layout.html.twig' %}*/
/* */
/* {% block formContent %}*/
/*     {{ form_row(form.operation.family) }}*/
/* {% endblock %}*/
/* */
