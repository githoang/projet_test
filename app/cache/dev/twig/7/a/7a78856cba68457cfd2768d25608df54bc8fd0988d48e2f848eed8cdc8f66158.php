<?php

/* PimEnrichBundle:Product:_history.html.twig */
class __TwigTemplate_b7b2bd21df421044e6c1fdba1420deccb4e910b37e3cfeb9a989f129be9d26eb extends Twig_Template
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Product:_history.html.twig", 1);
        // line 2
        echo $context["dataGrid"]->getrenderGrid("product-history-grid", array("object_class" => $this->env->getExtension('pim_object_class_extension')->getClass((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))), "object_id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array())));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {{ dataGrid.renderGrid('product-history-grid', { object_class: product|class, object_id: product.id }) }}*/
/* */
