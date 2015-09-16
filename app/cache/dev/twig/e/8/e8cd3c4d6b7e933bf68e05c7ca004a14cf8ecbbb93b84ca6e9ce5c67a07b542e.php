<?php

/* OroUIBundle:Default:twoColumnLeft.html.twig */
class __TwigTemplate_342a6d1f73a1eb1949e0684df69e1f43fb4c4ed006f66fc43a953834b4964eaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:twoColumnLeft.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'page_container' => array($this, 'block_page_container'),
            'sidebar' => array($this, 'block_sidebar'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_page_container($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container-fluid\">
        <div class=\"row-fluid\" id=\"wrapper\">
            <div class=\"span3\">
                ";
        // line 9
        $this->displayBlock('sidebar', $context, $blocks);
        // line 14
        echo "            </div>
            <div class=\"span9\">
                ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "            </div>
        </div>
    </div>
";
    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        // line 10
        echo "                <div id=\"sidebar\" class=\"test-box alert alert-success\">
                    sidebar
                </div>
                ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "                <div id=\"content\" class=\"test-box alert alert-block\">
                    Content
                </div>
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:twoColumnLeft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  74 => 16,  67 => 10,  64 => 9,  57 => 21,  55 => 16,  51 => 14,  49 => 9,  44 => 6,  41 => 5,  34 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock head %}*/
/* {% block page_container %}*/
/*     <div class="container-fluid">*/
/*         <div class="row-fluid" id="wrapper">*/
/*             <div class="span3">*/
/*                 {% block sidebar %}*/
/*                 <div id="sidebar" class="test-box alert alert-success">*/
/*                     sidebar*/
/*                 </div>*/
/*                 {% endblock sidebar %}*/
/*             </div>*/
/*             <div class="span9">*/
/*                 {% block content %}*/
/*                 <div id="content" class="test-box alert alert-block">*/
/*                     Content*/
/*                 </div>*/
/*                 {% endblock content %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock page_container %}*/
