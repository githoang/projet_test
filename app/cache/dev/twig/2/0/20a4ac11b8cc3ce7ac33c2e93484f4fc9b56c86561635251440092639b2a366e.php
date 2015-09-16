<?php

/* OroTranslationBundle:Translation:translation.js.twig */
class __TwigTemplate_08beb864ec149ed37a0abeff7ba746cd8255b5c21df088ccf33d566c35279314 extends Twig_Template
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
        echo "Translator.fromJSON(";
        echo twig_jsonencode_filter((isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")));
        echo ");";
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation:translation.js.twig";
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
/* Translator.fromJSON({{ json|json_encode|raw }});*/
