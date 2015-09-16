<?php

/* OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig */
class __TwigTemplate_31dd40c8eb0815f024790b12da6cae918b7c453338658921a79666b77373e937 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->renderBreadCrumbs($this->env, "application_menu");
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig";
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
/* {{ oro_breadcrumbs('application_menu') }}*/
