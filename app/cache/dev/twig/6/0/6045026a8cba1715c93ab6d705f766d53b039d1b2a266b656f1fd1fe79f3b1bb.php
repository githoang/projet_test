<?php

/* PimEnrichBundle:AttributeGroup:create.html.twig */
class __TwigTemplate_ee1e88ac416551236915a751642ab33d2cb9c7180a4f7b506043949dd1954dae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:AttributeGroup:index.html.twig", "PimEnrichBundle:AttributeGroup:create.html.twig", 1);
        $this->blocks = array(
            'groupTab' => array($this, 'block_groupTab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:AttributeGroup:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_groupTab($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((array_key_exists("form", $context) &&  !twig_test_empty((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))))) {
            // line 5
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:AttributeGroup:form.html.twig", "PimEnrichBundle:AttributeGroup:create.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:AttributeGroup:index.html.twig' %}*/
/* */
/* {% block groupTab %}*/
/*     {% if form is defined and form is not empty %}*/
/*         {% include 'PimEnrichBundle:AttributeGroup:form.html.twig' %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
