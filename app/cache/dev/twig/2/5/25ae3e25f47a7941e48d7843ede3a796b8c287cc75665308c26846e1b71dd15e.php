<?php

/* PimEnrichBundle:Product:listCategories.json.twig */
class __TwigTemplate_b03d970a1d403013812ae1090233ee79d7b9fcf1bb70a85787d7441bfdbb27b7 extends Twig_Template
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
        echo twig_jsonencode_filter($this->env->getExtension('pim_category_extension')->listCategoriesResponse((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")), (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:listCategories.json.twig";
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
/* {{ list_categories_response(trees, categories)|json_encode|raw }}*/
/* */
