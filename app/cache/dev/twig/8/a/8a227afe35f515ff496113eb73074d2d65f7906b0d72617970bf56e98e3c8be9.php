<?php

/* PimEnrichBundle:AttributeGroup:edit.html.twig */
class __TwigTemplate_256d5ae27fc7a2aa397b06e3e59dfcb816a995e74749c3ca232d89162e22a465 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:AttributeGroup:index.html.twig", "PimEnrichBundle:AttributeGroup:edit.html.twig", 1);
        $this->blocks = array(
            'groupTab' => array($this, 'block_groupTab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:AttributeGroup:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%group.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 3
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_groupTab($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->loadTemplate("PimEnrichBundle:AttributeGroup:form.html.twig", "PimEnrichBundle:AttributeGroup:edit.html.twig", 6)->display($context);
        // line 7
        echo "
    ";
        // line 8
        if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_add_attribute") &&  !($this->getAttribute(        // line 10
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "code", array()) === constant(get_class((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")))."::"."DEFAULT_GROUP_CODE")))) {
            // line 12
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:Attribute:_available-attributes-form.html.twig", "PimEnrichBundle:AttributeGroup:edit.html.twig", 12)->display(array_merge($context, array("form" =>             // line 13
(isset($context["attributesForm"]) ? $context["attributesForm"] : $this->getContext($context, "attributesForm")), "action" => $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_addattributes", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 14
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_sort")) {
            // line 19
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:AttributeGroup:_attribute-sort-form.html.twig", "PimEnrichBundle:AttributeGroup:edit.html.twig", 19)->display(array_merge($context, array("list" => "#attributes-sortable", "attributes" => $this->getAttribute(            // line 21
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "attributes", array()))));
            // line 23
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  59 => 21,  57 => 19,  55 => 18,  52 => 17,  49 => 16,  47 => 14,  46 => 13,  44 => 12,  42 => 10,  41 => 8,  38 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:AttributeGroup:index.html.twig' %}*/
/* */
/* {% oro_title_set({ params: { "%group.label%": form.vars.value.label } }) %}*/
/* */
/* {% block groupTab %}*/
/*     {% include 'PimEnrichBundle:AttributeGroup:form.html.twig' %}*/
/* */
/*     {% if*/
/*         resource_granted('pim_enrich_attribute_group_add_attribute') and*/
/*         not group.code is constant('DEFAULT_GROUP_CODE', group)*/
/*     %}*/
/*         {% include 'PimEnrichBundle:Attribute:_available-attributes-form.html.twig' with {*/
/*             'form': attributesForm,*/
/*             'action': path('pim_enrich_attributegroup_addattributes', { id: form.vars.value.id })*/
/*         } %}*/
/*     {% endif %}*/
/* */
/*     {% if resource_granted('pim_enrich_attribute_sort') %}*/
/*         {% include 'PimEnrichBundle:AttributeGroup:_attribute-sort-form.html.twig' with {*/
/*             'list': '#attributes-sortable',*/
/*             'attributes': group.attributes*/
/*         } %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
