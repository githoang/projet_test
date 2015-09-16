<?php

/* OroDataAuditBundle:Audit/widget:history.html.twig */
class __TwigTemplate_59e524b95ef1d2dd0a02df174890c9941bc5ec4a51cf25b37c2832f5b681f428 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroDataAuditBundle:Audit/widget:history.html.twig", 1);
        // line 2
        echo "
<div class=\"widget-content\">
    ";
        // line 4
        $context["fieldName"] = ((array_key_exists("fieldName", $context)) ? ((isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName"))) : (""));
        // line 5
        echo "
    <div class=\"container-fluid\">
        ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 11
        echo "    </div>
</div>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("object_class" => (isset($context["entityClass"]) ? $context["entityClass"] : $this->getContext($context, "entityClass")), "object_id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")), "field_name" => (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName"))));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Audit/widget:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  43 => 8,  40 => 7,  34 => 11,  32 => 7,  28 => 5,  26 => 4,  22 => 2,  20 => 1,);
    }
}
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* <div class="widget-content">*/
/*     {% set fieldName = (fieldName is defined) ? fieldName : '' %}*/
/* */
/*     <div class="container-fluid">*/
/*         {% block content %}*/
/*             {# gridName set from corresponding controllers #}*/
/*             {{ dataGrid.renderGrid(gridName, {object_class: entityClass, object_id: entityId, field_name: fieldName}) }}*/
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
