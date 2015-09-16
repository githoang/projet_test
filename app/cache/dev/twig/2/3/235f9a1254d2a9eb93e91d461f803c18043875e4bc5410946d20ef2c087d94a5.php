<?php

/* PimEnrichBundle:CategoryTree:listTree.json.twig */
class __TwigTemplate_c955f3ac16a4b233ad21b5cde252a3c9604347d42dd0baab10ca0ec175a4b35f extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->listTreesResponse((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")), (isset($context["selectedTreeId"]) ? $context["selectedTreeId"] : $this->getContext($context, "selectedTreeId")), (isset($context["product_count"]) ? $context["product_count"] : $this->getContext($context, "product_count")), (isset($context["include_sub"]) ? $context["include_sub"] : $this->getContext($context, "include_sub")), (isset($context["related_entity"]) ? $context["related_entity"] : $this->getContext($context, "related_entity"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:listTree.json.twig";
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
/* {{ list_trees_response(trees, selectedTreeId, product_count, include_sub, related_entity)|json_encode|raw }}*/
/* */
