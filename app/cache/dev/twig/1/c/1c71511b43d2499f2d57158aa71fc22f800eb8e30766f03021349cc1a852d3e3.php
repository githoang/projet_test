<?php

/* PimEnrichBundle:CategoryTree:children.json.twig */
class __TwigTemplate_7d278f1ccf7c7b18271ec8fc41510d4b44eeaf02339804663e88fd522e3215ef extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->childrenResponse((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), (isset($context["product_count"]) ? $context["product_count"] : $this->getContext($context, "product_count")), (isset($context["include_sub"]) ? $context["include_sub"] : $this->getContext($context, "include_sub")), (isset($context["related_entity"]) ? $context["related_entity"] : $this->getContext($context, "related_entity"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:children.json.twig";
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
/* {{ children_response(categories, parent, product_count, include_sub, related_entity)|json_encode|raw }}*/
/* */
