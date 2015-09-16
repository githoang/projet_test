<?php

/* PimDataGridBundle:Datagrid:load.json.twig */
class __TwigTemplate_a8b60276a14ccc12d54e7e2e75133c65bd458aff674036e16e272b3f1e7f26a5 extends Twig_Template
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
        echo "{
    \"metadata\": ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('oro_datagrid_metadata')->getGridMetadata((isset($context["alias"]) ? $context["alias"] : $this->getContext($context, "alias")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))));
        echo ",
    \"data\": ";
        // line 3
        echo twig_jsonencode_filter($this->env->getExtension('oro_datagrid_metadata')->getGridData($this->env, (isset($context["alias"]) ? $context["alias"] : $this->getContext($context, "alias")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "PimDataGridBundle:Datagrid:load.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* {*/
/*     "metadata": {{ oro_datagrid_metadata(alias, params)|json_encode|raw }},*/
/*     "data": {{ oro_datagrid_data(alias, params)|json_encode|raw }}*/
/* }*/
/* */
