<?php

/* PimDataGridBundle:Property:image.html.twig */
class __TwigTemplate_95b7f0dce4316f5b1bd8c6bec9802dd449907017ae66c1a3601857fa580165af extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "filter" => "thumbnail_small")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Property:image.html.twig";
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
/* <img src="{{ path('pim_enrich_media_show', { 'filename': filename, 'filter': 'thumbnail_small' }) }}" title="{{ title }}">*/
/* */
