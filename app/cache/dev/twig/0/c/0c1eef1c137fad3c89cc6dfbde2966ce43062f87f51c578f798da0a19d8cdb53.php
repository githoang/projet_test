<?php

/* OroNavigationBundle:Menu:vertical_tabs.html.twig */
class __TwigTemplate_7dd14e6b59a4912e6b5f3aaf2e7b18c06dca10a56f3548c9cdf58cee530f2567 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:horizontal_tabs.html.twig", "OroNavigationBundle:Menu:vertical_tabs.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:horizontal_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"tabbable tabs-left\">
        ";
        // line 5
        $this->displayParentBlock("root", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:vertical_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:horizontal_tabs.html.twig' %}*/
/* */
/* {% block root %}*/
/*     <div class="tabbable tabs-left">*/
/*         {{ parent() }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
