<?php

/* PimEnrichBundle:MassEditAction/configure:add-to-variant-group.html.twig */
class __TwigTemplate_f1d7a568c5b2d9398bd0514ba068d5610a18d54156bb87630db5d5735a2d4fc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:add-to-variant-group.html.twig", 1);
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
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, "pim_mass_edit.warning");
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "group", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:add-to-variant-group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:configure/layout.html.twig' %}*/
/* */
/* {% block formContent %}*/
/*     {{ view_elements('pim_mass_edit.warning') }}*/
/*     {{ form_row(form.operation.group) }}*/
/* {% endblock %}*/
/* */
