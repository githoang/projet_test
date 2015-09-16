<?php

/* PimEnrichBundle:MassEditAction/configure:change-status.html.twig */
class __TwigTemplate_e290a28f2d6a0b1c0f81e7aaf1d5ee3e8d7063d104b5a666fb0044b429a3b922 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:change-status.html.twig", 1);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "toEnable", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:change-status.html.twig";
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
/*     {{ form_row(form.operation.toEnable) }}*/
/* {% endblock %}*/
/* */
