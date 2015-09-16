<?php

/* OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig */
class __TwigTemplate_4754c6ad47883bc44b97b7f887f4d2d9af26dabd9e478c3162a7e54d9b326f30 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("application_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig";
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
/* {{ oro_menu_render('application_menu') }}*/
/* */
