<?php

/* PimImportExportBundle::layout.html.twig */
class __TwigTemplate_75041b56d06a8f657c2d60af9df63cc729a8450d4058541835af7777666be1c2 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "PimImportExportBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimImportExportBundle::layout.html.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  15 => 2,  9 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* */
