<?php

/* PimEnrichBundle:CategoryTree:children-tree.json.twig */
class __TwigTemplate_5cd85b248894ff7c9ba9f8fa100a6dd59677a761d5722baaee8ba4d3ccf30967 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->childrenTreeResponse((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), (isset($context["select_node"]) ? $context["select_node"] : $this->getContext($context, "select_node")), (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), (isset($context["product_count"]) ? $context["product_count"] : $this->getContext($context, "product_count")), (isset($context["include_sub"]) ? $context["include_sub"] : $this->getContext($context, "include_sub")), (isset($context["related_entity"]) ? $context["related_entity"] : $this->getContext($context, "related_entity"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:children-tree.json.twig";
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
/* {{ children_tree_response(categories, select_node, parent, product_count, include_sub, related_entity)|json_encode|raw }}*/
/* */
