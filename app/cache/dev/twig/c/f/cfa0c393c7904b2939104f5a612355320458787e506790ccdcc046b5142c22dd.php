<?php

/* PimEnrichBundle:CategoryTree:edit.html.twig */
class __TwigTemplate_1136a710f67bcb4fe90428919250756cff4b9d5ef4ddfb4a6f0532c6e615e9d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:CategoryTree:edit.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%category.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_script($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 7
        $this->loadTemplate("PimEnrichBundle:CategoryTree:_scripts.html.twig", "PimEnrichBundle:CategoryTree:edit.html.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div id=\"category-tree-container\" class=\"row-fluid\">
        <div id=\"tree\" ";
        // line 12
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            echo " data-node-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "html", null, true);
            echo "\"";
        } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array())) {
            echo " data-node-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array()), "id", array()), "html", null, true);
            echo "\"";
        }
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_edit")) {
            echo " data-movable=\"true\"";
        }
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_create")) {
            echo " data-creatable=\"true\"";
        }
        echo "></div>

        <div id=\"category-form\">
            ";
        // line 15
        $this->loadTemplate("PimEnrichBundle:CategoryTree:form.html.twig", "PimEnrichBundle:CategoryTree:edit.html.twig", 15)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        // line 16
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  71 => 15,  51 => 12,  48 => 11,  45 => 10,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%category.label%": form.vars.value.label } }) %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     {% include "PimEnrichBundle:CategoryTree:_scripts.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="category-tree-container" class="row-fluid">*/
/*         <div id="tree" {% if form.vars.value.id %} data-node-id="{{ form.vars.value.id }}"{% elseif form.vars.value.parent %} data-node-id="{{ form.vars.value.parent.id }}"{% endif %}{% if resource_granted("pim_enrich_category_edit") %} data-movable="true"{% endif %}{% if resource_granted("pim_enrich_category_create") %} data-creatable="true"{% endif %}></div>*/
/* */
/*         <div id="category-form">*/
/*             {% include 'PimEnrichBundle:CategoryTree:form.html.twig' with {'form': form} %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
