<?php

/* PimImportExportBundle:JobProfile:_field-status.html.twig */
class __TwigTemplate_f22be1797ce5437da6f2bad88e61a5304123ff0990da39feeaca21468751bfbf extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("pim_import_export.status." . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:_field-status.html.twig";
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
/* {{ ('pim_import_export.status.' ~ value)|trans }}*/
/* */
