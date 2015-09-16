<?php

/* OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig */
class __TwigTemplate_0bc1ae94c28c2308769694ac8e2c53a521501abe210b21feab141a0fd6f19b69 extends Twig_Template
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
        echo $this->env->getExtension('oro_menu')->render("dots_menu");
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig";
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
/* {{ oro_menu_render('dots_menu') }}*/
/* */
