<?php

/* OroEntityBundle:Entities:index.html.twig */
class __TwigTemplate_629b0ea30d6c9fefc9cab957ff3b919c5e1e009b15e111008575375b72c54316 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityBundle:Entities:index.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:index.html.twig", 2);
        // line 4
        $context["gridName"] = "custom-entity-grid";
        // line 6
        $context["params"] = array("class_name" => (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")));
        // line 7
        $context["pageTitle"] = "Entities";

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => ((        // line 9
array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "N/A")) : ("N/A")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 13
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => ("Item #" . (($this->getAttribute(        // line 16
(isset($context["entity"]) ? $context["entity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "N/A")) : ("N/A"))), "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entity_index", array("id" =>         // line 18
(isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))), "indexLabel" => (($this->getAttribute(        // line 19
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 22
        echo "
    ";
        // line 23
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_navButtons($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("CREATE", ("entity:" . (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class"))))) {
            // line 28
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_entity_update", array("entity_id" =>             // line 29
(isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")))), "title" => ("Create " .             // line 30
(isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "label" => ("Create " .             // line 31
(isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))));
            // line 32
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 32,  70 => 31,  69 => 30,  68 => 29,  66 => 28,  63 => 27,  60 => 26,  54 => 23,  51 => 22,  49 => 19,  48 => 18,  47 => 16,  46 => 13,  44 => 12,  41 => 11,  37 => 1,  35 => 9,  32 => 7,  30 => 6,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:index.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% set gridName = 'custom-entity-grid' %}*/
/* {# grid params #}*/
/* {% set params = {class_name: entity_class} %}*/
/* {% set pageTitle = 'Entities' %}*/
/* */
/* {% oro_title_set({params : {"%entityName%": label|default('N/A') }}) %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': 'Item #'~entity.id|default('N/A'),*/
/*         'additional': [{*/
/*             'indexPath'  : path('oro_entity_index', {id: parent}),*/
/*             'indexLabel' : entity_config.get('label')|default('N/A')*/
/*         }]*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('CREATE', 'entity:'~entity_class) %}*/
/*         {{ UI.addButton({*/
/*             'path': path('oro_entity_update', {'entity_id': entity_id}),*/
/*             'title': 'Create '~label,*/
/*             'label': 'Create '~label,*/
/*         }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
