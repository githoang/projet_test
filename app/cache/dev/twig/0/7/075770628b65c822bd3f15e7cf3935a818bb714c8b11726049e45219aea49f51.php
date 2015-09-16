<?php

/* PimImportExportBundle:JobProfile:show.html.twig */
class __TwigTemplate_9f9e4bcdc943d155e4f0022f4d0698532bef057bd4811f421a371ba5d5313649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimImportExportBundle:JobProfile:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->loadTemplate("PimImportExportBundle:JobProfile:_show_headers.html.twig", "PimImportExportBundle:JobProfile:show.html.twig", 5)->display($context);
        // line 6
        echo "
    ";
        // line 7
        $this->loadTemplate("PimImportExportBundle:JobProfile:_show_form.html.twig", "PimImportExportBundle:JobProfile:show.html.twig", 7)->display($context);
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include 'PimImportExportBundle:JobProfile:_show_headers.html.twig' %}*/
/* */
/*     {% include 'PimImportExportBundle:JobProfile:_show_form.html.twig' %}*/
/* */
/* {% endblock %}*/
/* */
