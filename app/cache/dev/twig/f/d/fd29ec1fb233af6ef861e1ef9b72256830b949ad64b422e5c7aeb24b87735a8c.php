<?php

/* PimEnrichBundle:AttributeGroup/Tab:attribute.html.twig */
class __TwigTemplate_dacf1348766f96182430ae294a994f443403841a8c81edcdf8cf5ec6e9127f00 extends Twig_Template
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
        $context["removalGranted"] = ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_remove_attribute") &&  !($this->getAttribute(        // line 3
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "code", array()) === constant(get_class((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")))."::"."DEFAULT_GROUP_CODE")));
        // line 5
        $context["sortGranted"] = $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_sort");
        // line 6
        echo "
<div class=\"tab-pane tab-attribute ";
        // line 7
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    <div id=\"attribute-buttons\"></div>
    <div class=\"clearfix\"></div>
    <table class=\"table groups\">
        <thead>
            ";
        // line 12
        if ((isset($context["sortGranted"]) ? $context["sortGranted"] : $this->getContext($context, "sortGranted"))) {
            // line 13
            echo "                <th>&nbsp;</th>
            ";
        }
        // line 15
        echo "            <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Name"), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Type"), "html", null, true);
        echo "</th>
            <th>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Scope"), "html", null, true);
        echo "</th>
            <th>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Localizable"), "html", null, true);
        echo "</th>
            ";
        // line 19
        if ((isset($context["removalGranted"]) ? $context["removalGranted"] : $this->getContext($context, "removalGranted"))) {
            // line 20
            echo "                <th>&nbsp;</th>
            ";
        }
        // line 22
        echo "        </thead>
            <tbody id=\"attributes-sortable\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "attributes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 25
            echo "                    <tr>
                        ";
            // line 26
            if ((isset($context["sortGranted"]) ? $context["sortGranted"] : $this->getContext($context, "sortGranted"))) {
                // line 27
                echo "                            <td>
                                <span class=\"handle\">
                                    <i class=\"icon-reorder\"></i>
                                    <input name=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", array()), "html", null, true);
                echo "\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "sortOrder", array()), "html", null, true);
                echo "\">
                                </span>
                            </td>
                        ";
            }
            // line 34
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "label", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["attribute"], "attributeType", array())), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, (($this->getAttribute($context["attribute"], "scopable", array())) ? ($this->env->getExtension('translator')->trans("Channel")) : ($this->env->getExtension('translator')->trans("Global"))), "html", null, true);
            echo "</td>
                        <td>
                            <input type=\"checkbox\" disabled=\"disabled\"";
            // line 38
            if ($this->getAttribute($context["attribute"], "localizable", array())) {
                echo " checked=\"checked\"";
            }
            echo ">
                        </td>
                        ";
            // line 40
            if ((isset($context["removalGranted"]) ? $context["removalGranted"] : $this->getContext($context, "removalGranted"))) {
                // line 41
                echo "                            <td>
                                <a ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLinkAttributes", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_removeattribute", array("groupId" => $this->getAttribute(                // line 43
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "attributeId" => $this->getAttribute($context["attribute"], "id", array()))), 1 => $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_edit", array("id" => $this->getAttribute(                // line 44
(isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), 2 => $this->env->getExtension('translator')->trans("confirmation.attribute group.remove attribute", array("%name%" => $this->getAttribute(                // line 45
$context["attribute"], "label", array()))), 3 => $this->env->getExtension('translator')->trans("flash.attribute group.attribute removed")), "method"), "html", null, true);
                // line 47
                echo " class=\"remove-attribute\">
                                    <i class=\"icon-trash\"></i>
                                </a>
                            </td>
                        ";
            }
            // line 52
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup/Tab:attribute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  131 => 52,  124 => 47,  122 => 45,  121 => 44,  120 => 43,  119 => 42,  116 => 41,  114 => 40,  107 => 38,  102 => 36,  98 => 35,  93 => 34,  84 => 30,  79 => 27,  77 => 26,  74 => 25,  70 => 24,  66 => 22,  62 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  43 => 15,  39 => 13,  37 => 12,  27 => 7,  24 => 6,  22 => 5,  20 => 3,  19 => 1,);
    }
}
/* {% set removalGranted =*/
/*     resource_granted('pim_enrich_attribute_group_remove_attribute') and*/
/*     not group.code is constant('DEFAULT_GROUP_CODE', group)*/
/* %}*/
/* {% set sortGranted = resource_granted('pim_enrich_attribute_sort') %}*/
/* */
/* <div class="tab-pane tab-attribute {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     <div id="attribute-buttons"></div>*/
/*     <div class="clearfix"></div>*/
/*     <table class="table groups">*/
/*         <thead>*/
/*             {% if sortGranted %}*/
/*                 <th>&nbsp;</th>*/
/*             {% endif %}*/
/*             <th>{{ 'Name'|trans }}</th>*/
/*             <th>{{ 'Type'|trans }}</th>*/
/*             <th>{{ 'Scope'|trans }}</th>*/
/*             <th>{{ 'Localizable'|trans }}</th>*/
/*             {% if removalGranted %}*/
/*                 <th>&nbsp;</th>*/
/*             {% endif %}*/
/*         </thead>*/
/*             <tbody id="attributes-sortable">*/
/*                 {% for attribute in group.attributes %}*/
/*                     <tr>*/
/*                         {% if sortGranted %}*/
/*                             <td>*/
/*                                 <span class="handle">*/
/*                                     <i class="icon-reorder"></i>*/
/*                                     <input name="{{ attribute.id }}" type="hidden" value="{{ attribute.sortOrder }}">*/
/*                                 </span>*/
/*                             </td>*/
/*                         {% endif %}*/
/*                         <td>{{ attribute.label }}</td>*/
/*                         <td>{{ attribute.attributeType|trans }}</td>*/
/*                         <td>{{ attribute.scopable ? 'Channel'|trans : 'Global'|trans }}</td>*/
/*                         <td>*/
/*                             <input type="checkbox" disabled="disabled"{% if attribute.localizable %} checked="checked"{% endif %}>*/
/*                         </td>*/
/*                         {% if removalGranted %}*/
/*                             <td>*/
/*                                 <a {{ elements.deleteLinkAttributes(*/
/*                                     path('pim_enrich_attributegroup_removeattribute', {'groupId': group.id, 'attributeId': attribute.id}),*/
/*                                     path('pim_enrich_attributegroup_edit', {'id': group.id }),*/
/*                                     'confirmation.attribute group.remove attribute'|trans({'%name%': attribute.label}),*/
/*                                     'flash.attribute group.attribute removed'|trans*/
/*                                 ) }} class="remove-attribute">*/
/*                                     <i class="icon-trash"></i>*/
/*                                 </a>*/
/*                             </td>*/
/*                         {% endif %}*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*     </table>*/
/* </div>*/
/* */
