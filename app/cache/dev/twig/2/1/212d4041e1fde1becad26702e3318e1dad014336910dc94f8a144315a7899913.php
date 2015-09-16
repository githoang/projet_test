<?php

/* OroDataAuditBundle::layout.html.twig */
class __TwigTemplate_fbede230919ab80da91a16a347a32e755f9755671225abd469a53be7ba189bd5 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array(), "any", true, true)) ? ($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array())) : ("OroUIBundle:Default:index.html.twig")), "OroDataAuditBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("suffix" => (" - " . $this->env->getExtension('translator')->trans("Data Audit"))));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle::layout.html.twig";
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
/* {% extends bap.layout is defined ? bap.layout : 'OroUIBundle:Default:index.html.twig' %}*/
/* */
/* {% oro_title_set({suffix: " - " ~ "Data Audit"|trans}) %}*/
/* */
