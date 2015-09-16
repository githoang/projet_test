<?php

/* OroOrganizationBundle:Search:result.html.twig */
class __TwigTemplate_06a3492e1a97f2cc8ad0f4451f2bd374a70969af8cccab22c64787f3403d1e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroOrganizationBundle:Search:result.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["showImage"] = false;
        // line 5
        $context["recordUrl"] = $this->getAttribute((isset($context["indexer_item"]) ? $context["indexer_item"] : $this->getContext($context, "indexer_item")), "recordUrl", array());
        // line 6
        $context["entity_output"] = $this->env->getExtension('config_extension')->getEntityOutput("Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit");
        // line 7
        $context["title"] = (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "name", array()), "N/A")) : ("N/A"));
        // line 8
        $context["entityType"] = $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["entity_output"]) ? $context["entity_output"] : $this->getContext($context, "entity_output")), "name", array()), array(), "config");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 1,  32 => 8,  30 => 7,  28 => 6,  26 => 5,  24 => 3,  11 => 1,);
    }
}
/* {% extends 'OroSearchBundle:Search:searchResultItem.html.twig' %}*/
/* */
/* {% set showImage = false %}*/
/* */
/* {% set recordUrl = indexer_item.recordUrl %}*/
/* {% set entity_output = oro_config_entity('Oro\\Bundle\\OrganizationBundle\\Entity\\BusinessUnit') %}*/
/* {% set title = entity.name|default('N/A') %}*/
/* {% set entityType = entity_output.name|trans({}, 'config') %}*/
