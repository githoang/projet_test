<?php

/* PimEnrichBundle:Family/Tab:attribute.html.twig */
class __TwigTemplate_fe736e715a18042340f98adb1c7886ee946e4283fe97cb8cce3d03a548817c96 extends Twig_Template
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
        echo "<div class=\"tab-pane tab-attribute ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 2
        if ( !array_key_exists("elements", $context)) {
            // line 3
            echo "        ";
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Family/Tab:attribute.html.twig", 3);
            // line 4
            echo "    ";
        }
        // line 5
        echo "    <div class=\"tab-content\">
        <div id=\"attribute-buttons\"></div>

        ";
        // line 8
        $context["columnWidth"] = (85 / twig_length_filter($this->env, (isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels"))));
        // line 9
        echo "
        <table class=\"table groups\">
            <thead>
                <th width=\"10%\">";
        // line 12
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Label")), "html", null, true);
        echo "</th>
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 14
            echo "                    <th class=\"channel\" width=\"";
            echo twig_escape_filter($this->env, (isset($context["columnWidth"]) ? $context["columnWidth"] : $this->getContext($context, "columnWidth")), "html", null, true);
            echo "%\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["channel"], "label", array())), "html", null, true);
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                <th width=\"5%\">&nbsp;</th>
            </thead>

            ";
        // line 19
        $context["colspan"] = (twig_length_filter($this->env, (isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels"))) + 2);
        // line 20
        echo "            ";
        $context["editGranted"] = $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_family_edit_attributes");
        // line 21
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "groupedAttributes", array()));
        foreach ($context['_seq'] as $context["groupLabel"] => $context["attributes"]) {
            // line 22
            echo "            <tbody>
                <tr class=\"group\">
                    <td colspan=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["colspan"]) ? $context["colspan"] : $this->getContext($context, "colspan")), "html", null, true);
            echo "\"><i class=\"icon-collapse-alt\"></i>";
            echo twig_escape_filter($this->env, $context["groupLabel"], "html", null, true);
            echo "</td>
                </tr>
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["attributes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 27
                echo "                <tr>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "label", array()), "html", null, true);
                echo "</td>
                    ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
                foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                    // line 30
                    echo "                        <td>
                            ";
                    // line 31
                    if (($this->getAttribute($context["attribute"], "attributeType", array()) == "pim_catalog_identifier")) {
                        // line 32
                        echo "                                <div class=\"attribute-requirement identifier\">
                                    <i class=\"icon-ok required\" data-toggle=\"tooltip\" data-original-title=\"";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Required"), "html", null, true);
                        echo "\" data-placement=\"right\"></i>
                                </div>
                            ";
                    } else {
                        // line 36
                        echo "                                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeRequirements", array()), (($this->getAttribute($context["attribute"], "code", array()) . "_") . $this->getAttribute($context["channel"], "code", array())), array(), "array"), 'widget');
                        echo "
                            ";
                    }
                    // line 38
                    echo "                        </td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                    <td>
                        ";
                // line 41
                if ((($this->getAttribute($context["attribute"], "attributeType", array()) != "pim_catalog_identifier") && (isset($context["editGranted"]) ? $context["editGranted"] : $this->getContext($context, "editGranted")))) {
                    // line 42
                    echo "                            <a ";
                    echo $context["elements"]->getdeleteLinkAttributes($this->env->getExtension('routing')->getPath("pim_enrich_family_removeattribute", array("familyId" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 43
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "attributeId" => $this->getAttribute($context["attribute"], "id", array()))), $this->env->getExtension('routing')->getPath("pim_enrich_family_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                    // line 44
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), $this->env->getExtension('translator')->trans("confirmation.family.remove attribute", array("%name%" => $this->getAttribute(                    // line 45
$context["attribute"], "label", array()))), $this->env->getExtension('translator')->trans("flash.family.attribute removed"));
                    // line 47
                    echo " class=\"remove-attribute\">
                                <i class=\"icon-trash\"></i>
                            </a>
                        ";
                }
                // line 51
                echo "                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupLabel'], $context['attributes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </table>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Family/Tab:attribute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 56,  158 => 54,  150 => 51,  144 => 47,  142 => 45,  141 => 44,  140 => 43,  138 => 42,  136 => 41,  133 => 40,  126 => 38,  120 => 36,  114 => 33,  111 => 32,  109 => 31,  106 => 30,  102 => 29,  98 => 28,  95 => 27,  91 => 26,  84 => 24,  80 => 22,  75 => 21,  72 => 20,  70 => 19,  65 => 16,  54 => 14,  50 => 13,  46 => 12,  41 => 9,  39 => 8,  34 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-attribute {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% if elements is not defined %}*/
/*         {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/*     {% endif %}*/
/*     <div class="tab-content">*/
/*         <div id="attribute-buttons"></div>*/
/* */
/*         {% set columnWidth = 85/(channels|length) %}*/
/* */
/*         <table class="table groups">*/
/*             <thead>*/
/*                 <th width="10%">{{ 'Label'|trans|upper }}</th>*/
/*                 {% for channel in channels %}*/
/*                     <th class="channel" width="{{ columnWidth }}%">{{ channel.label|upper }}</th>*/
/*                 {% endfor %}*/
/*                 <th width="5%">&nbsp;</th>*/
/*             </thead>*/
/* */
/*             {% set colspan = channels|length + 2 %}*/
/*             {% set editGranted = resource_granted('pim_enrich_family_edit_attributes') %}*/
/*             {% for groupLabel, attributes in form.vars.value.groupedAttributes %}*/
/*             <tbody>*/
/*                 <tr class="group">*/
/*                     <td colspan="{{ colspan }}"><i class="icon-collapse-alt"></i>{{ groupLabel }}</td>*/
/*                 </tr>*/
/*                 {% for attribute in attributes %}*/
/*                 <tr>*/
/*                     <td>{{ attribute.label }}</td>*/
/*                     {% for channel in channels %}*/
/*                         <td>*/
/*                             {% if attribute.attributeType == 'pim_catalog_identifier' %}*/
/*                                 <div class="attribute-requirement identifier">*/
/*                                     <i class="icon-ok required" data-toggle="tooltip" data-original-title="{{ 'Required'|trans }}" data-placement="right"></i>*/
/*                                 </div>*/
/*                             {% else %}*/
/*                                 {{ form_widget(form.attributeRequirements[(attribute.code ~ '_' ~ channel.code)]) }}*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     {% endfor %}*/
/*                     <td>*/
/*                         {% if attribute.attributeType != 'pim_catalog_identifier' and editGranted %}*/
/*                             <a {{ elements.deleteLinkAttributes(*/
/*                                     path('pim_enrich_family_removeattribute', {'familyId': form.vars.value.id, 'attributeId': attribute.id}),*/
/*                                     path('pim_enrich_family_edit', {'id': form.vars.value.id }),*/
/*                                     'confirmation.family.remove attribute'|trans({ '%name%': attribute.label }),*/
/*                                     'flash.family.attribute removed'|trans*/
/*                                 )}} class="remove-attribute">*/
/*                                 <i class="icon-trash"></i>*/
/*                             </a>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*             </tbody>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* */
/* </div>*/
/* */
