<?php

/* OroFilterBundle:Filter:header.html.twig */
class __TwigTemplate_51efa240229f4e2ecec0d36fed88d262e6d5b42279e0a947638afe33373246a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_filter_header_javascript' => array($this, 'block_oro_filter_header_javascript'),
            'oro_filter_header_stylesheet' => array($this, 'block_oro_filter_header_stylesheet'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_filter_header_javascript', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('oro_filter_header_stylesheet', $context, $blocks);
    }

    // line 1
    public function block_oro_filter_header_javascript($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->loadTemplate("OroFilterBundle:Header:javascript.html.twig", "OroFilterBundle:Filter:header.html.twig", 2)->display($context);
    }

    // line 5
    public function block_oro_filter_header_stylesheet($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("OroFilterBundle:Header:stylesheet.html.twig", "OroFilterBundle:Filter:header.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Filter:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  38 => 5,  33 => 2,  30 => 1,  26 => 5,  23 => 4,  21 => 1,);
    }
}
/* {% block oro_filter_header_javascript %}*/
/*     {% include 'OroFilterBundle:Header:javascript.html.twig' %}*/
/* {% endblock %}*/
/* */
/* {% block oro_filter_header_stylesheet %}*/
/*     {% include 'OroFilterBundle:Header:stylesheet.html.twig' %}*/
/* {% endblock %}*/
/* */
