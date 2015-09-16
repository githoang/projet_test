<?php

/* OroUIBundle:Default:Page404.html.twig */
class __TwigTemplate_a9bc15ad68f9a6654c5514e453d1ba2ba02338769f3bfa4268b0a16fd0f2f5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:Page404.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"alert alert-block pagination-centered popup-box\">
        <h1 class=\"\">404 Page Not Found</h1>
        <p>The URL you requested was not found.</p>
        <p>Apache 2 Web server blah blah blah</p>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/no.png"), "html", null, true);
        echo "\" alt=\"no\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:Page404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="alert alert-block pagination-centered popup-box">*/
/*         <h1 class="">404 Page Not Found</h1>*/
/*         <p>The URL you requested was not found.</p>*/
/*         <p>Apache 2 Web server blah blah blah</p>*/
/*         <img src="{{ asset('bundles/oroui/img/no.png') }}" alt="no" />*/
/*     </div>*/
/* {% endblock content %}*/
