<?php

/* OroOrganizationBundle::owner.html.twig */
class __TwigTemplate_074f94aa7b5111ade9b250bac2edf5911f70e1ebff2e44929667539c3f0d1c67 extends Twig_Template
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
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner", array()), 'row');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle::owner.html.twig";
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
/* {% if form.owner is defined %}*/
/*     {{ form_row(form.owner) }}*/
/* {% endif %}*/
