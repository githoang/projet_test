<?php

/* OroUserBundle:Search:result.html.twig */
class __TwigTemplate_45d665934ee10dea891282842088280fdc462375189720780c3da451b0ea7872 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroUserBundle:Search:result.html.twig", 6);
        $this->blocks = array(
            'additional_info' => array($this, 'block_additional_info'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        $context["entity_output"] = $this->env->getExtension('config_extension')->getEntityOutput("Oro\\Bundle\\UserBundle\\Entity\\User");
        // line 9
        $context["showImage"] = true;
        // line 11
        $context["recordUrl"] = $this->getAttribute((isset($context["indexer_item"]) ? $context["indexer_item"] : $this->getContext($context, "indexer_item")), "recordUrl", array());
        // line 12
        $context["imagePath"] = (((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) ? ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagePath", array())) : (null));
        // line 14
        if ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) {
        }
        // line 26
        $context["title"] = (((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) ? (twig_escape_filter($this->env, $this->env->getExtension('oro_locale_name')->format((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))))) : (twig_escape_filter($this->env, $this->getAttribute((isset($context["indexer_item"]) ? $context["indexer_item"] : $this->getContext($context, "indexer_item")), "recordTitle", array()))));
        // line 27
        $context["entityType"] = $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["entity_output"]) ? $context["entity_output"] : $this->getContext($context, "entity_output")), "name", array()), array(), "config");
        // line 29
        $context["entityInfo"] = array(0 => array("title" => "Created", "value" => (($this->getAttribute(        // line 30
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdAt", array()))) : ("N/A"))), 1 => array("title" => "Updated", "value" => (($this->getAttribute(        // line 31
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "updatedAt", array()))) : ("N/A"))), 2 => array("title" => "Last logged in", "value" => (($this->getAttribute(        // line 32
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array()))) : ("N/A"))), 3 => array("title" => "Login count", "value" => (($this->getAttribute(        // line 33
(isset($context["entity"]) ? $context["entity"] : null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "loginCount", array()), 0)) : (0))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_additional_info($context, array $blocks = array())
    {
        // line 16
        echo "        <div class=\"status-enabled pull-left\">
            ";
        // line 17
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled", array())) {
            // line 18
            echo "                <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
            echo "</div>
            ";
        } else {
            // line 20
            echo "                <div class=\"badge badge-enabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inactive"), "html", null, true);
            echo "</div>
            ";
        }
        // line 22
        echo "        </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Search:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  64 => 20,  58 => 18,  56 => 17,  53 => 16,  50 => 15,  46 => 6,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  38 => 27,  36 => 26,  33 => 14,  31 => 12,  29 => 11,  27 => 9,  25 => 8,  11 => 6,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity       - user entity Oro\Bundle\UserBundle\Entity\User or null*/
/*     * indexer_item - indexer item Oro\Bundle\SearchBundle\Query\Result\Item*/
/* #}*/
/* {% extends 'OroSearchBundle:Search:searchResultItem.html.twig' %}*/
/* */
/* {% set entity_output = oro_config_entity('Oro\\Bundle\\UserBundle\\Entity\\User') %}*/
/* {% set showImage = true %}*/
/* */
/* {% set recordUrl = indexer_item.recordUrl %}*/
/* {% set imagePath = entity ? entity.imagePath : null %}*/
/* */
/* {% if entity %}*/
/*     {% block additional_info %}*/
/*         <div class="status-enabled pull-left">*/
/*             {% if entity.enabled %}*/
/*                 <div class="badge badge-enabled status-enabled"><i class="icon-status-enabled icon-circle"></i>{{ 'Active'|trans }}</div>*/
/*             {% else %}*/
/*                 <div class="badge badge-enabled status-disabled"><i class="icon-status-disabled icon-circle"></i>{{ 'Inactive'|trans }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% set title = entity ? entity|oro_format_name|escape : indexer_item.recordTitle|escape %}*/
/* {% set entityType = entity_output.name|trans({}, 'config') %}*/
/* */
/* {% set entityInfo = [*/
/*     {'title': 'Created', 'value': entity.createdAt ? entity.createdAt|oro_format_datetime : 'N/A'},*/
/*     {'title': 'Updated', 'value': entity.updatedAt ? entity.updatedAt|oro_format_datetime : 'N/A'},*/
/*     {'title': 'Last logged in', 'value': entity.lastLogin ? entity.lastLogin|oro_format_datetime : 'N/A'},*/
/*     {'title': 'Login count', 'value': entity.loginCount|default(0)}*/
/* ] %}*/
/* */
