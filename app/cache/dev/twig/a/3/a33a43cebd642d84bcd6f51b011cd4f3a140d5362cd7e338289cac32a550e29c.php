<?php

/* OroUIBundle:Default:Page503.html.twig */
class __TwigTemplate_8ae97c71bb1560390768d1c1bfdddea9f123d25b8cd685ed28612fec101c73c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:Page503.html.twig", 1);
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
        <h1 class=\"\">503 Service Unavailable</h1>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/503.png"), "html", null, true);
        echo "\" alt=\"no\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:Page503.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="alert alert-block pagination-centered popup-box">*/
/*         <h1 class="">503 Service Unavailable</h1>*/
/*         <img src="{{ asset('bundles/oroui/img/503.png') }}" alt="no" />*/
/*     </div>*/
/* {% endblock content %}*/
