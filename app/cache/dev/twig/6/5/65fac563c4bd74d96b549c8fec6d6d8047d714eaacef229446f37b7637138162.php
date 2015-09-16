<?php

/* PimEnrichBundle:Product:_index_buttons.html.twig */
class __TwigTemplate_380a3d51a972f879f5435b5c88ea639b2a51c00e067555e6bd869d73bb86b009 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "product", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_product_create"), 2 => "dialog", 3 => "pim_enrich_product_create"), "method"), "html", null, true);
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_index_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 6,  19 => 1,);
    }
}
/* {{ elements.createBtn(*/
/*     'product',*/
/*     path('pim_enrich_product_create'),*/
/*     'dialog',*/
/*     'pim_enrich_product_create'*/
/* ) }}*/
/* */
