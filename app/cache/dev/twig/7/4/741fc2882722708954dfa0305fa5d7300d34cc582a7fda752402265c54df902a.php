<?php

/* AkeneoBatchBundle::layout.html.twig */
class __TwigTemplate_6e9dc0d94425108f22ff31a948e8e31e36a4b6a7abe3ba21d3f01dfc1a960318 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "AkeneoBatchBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "AkeneoBatchBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* */
