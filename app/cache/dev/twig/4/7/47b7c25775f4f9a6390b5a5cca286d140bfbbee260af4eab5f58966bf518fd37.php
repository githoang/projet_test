<?php

/* OroUIBundle:Default:oneColumn.html.twig */
class __TwigTemplate_300585c332fbc56723a516cf7eb7dc53c0f6e82e5b118657a3a6c628c969099e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:oneColumn.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "            <div class=\"\">
                <div class=\"alert alert-info test-box\">
                    One column
                </div>
            </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:oneColumn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block main %}*/
/* {% block content %}*/
/*             <div class="">*/
/*                 <div class="alert alert-info test-box">*/
/*                     One column*/
/*                 </div>*/
/*             </div>*/
/* {% endblock content %}*/
/* {% endblock main %}*/
/* */
