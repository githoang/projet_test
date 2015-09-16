<?php

/* PimEnrichBundle:VariantGroup:_edit_without_comparison.html.twig */
class __TwigTemplate_623e1cee4afa4e36dee6f918b94aa18233c4cef89187f482919fd74333ef9383 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupView"]) ? $context["groupView"] : $this->getContext($context, "groupView")), "attributes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attributeView"]) {
            // line 2
            echo "    <div class=\"attribute-field ";
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter((($this->getAttribute($context["attributeView"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["attributeView"], "classes", array()), array())) : (array()))), " "), "html", null, true);
            echo "\">
        ";
            // line 3
            if ($this->getAttribute($context["attributeView"], "values", array(), "any", true, true)) {
                // line 4
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attributeView"], "values", array()));
                foreach ($context['_seq'] as $context["scope"] => $context["subvalue"]) {
                    // line 5
                    echo "                <div class=\"control-group\" data-field=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                    echo "\">
                    ";
                    // line 6
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["subvalue"], 'widget', array("attr" => array("data-scope" => $context["scope"], "data-color" => $this->env->getExtension('pim_channel_extension')->channelColor($context["scope"]), "data-font-color" => $this->env->getExtension('pim_channel_extension')->channelFontColor($context["scope"]))));
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['scope'], $context['subvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 9
                echo "        ";
            } else {
                // line 10
                echo "                <div class=\"control-group\" data-field=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                echo "\">
                    ";
                // line 11
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeView"], "value", array()), 'widget');
                echo "
                </div>
        ";
            }
            // line 14
            echo "        ";
            if (($this->getAttribute($context["attributeView"], "isRemovable", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_variant_group_remove_attribute"))) {
                // line 15
                echo "            <i ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLinkAttributes", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_remove_attribute", array("groupId" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 16
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()), "attributeId" => $this->getAttribute($context["attributeView"], "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), 1 => $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 17
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), 2 => $this->env->getExtension('translator')->trans("confirmation.variant_group.remove_attribute", array("%name%" => $this->getAttribute(                // line 18
$context["attributeView"], "label", array()))), 3 => $this->env->getExtension('translator')->trans("flash.variant group.attribute_removed")), "method"), "html", null, true);
                // line 20
                echo " class=\"icon-remove remove-attribute\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove this attribute"), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 22
            echo "        ";
            if (($this->getAttribute($context["attributeView"], "allowValueCreation", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_edit"))) {
                // line 23
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "quickCreateOption", array(0 => $this->getAttribute($context["attributeView"], "id", array()), 1 => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_create_option", array("id" => $this->getAttribute($context["attributeView"], "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale"))))), "method"), "html", null, true);
                echo "
        ";
            }
            // line 25
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup:_edit_without_comparison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  81 => 23,  78 => 22,  72 => 20,  70 => 18,  69 => 17,  68 => 16,  66 => 15,  63 => 14,  57 => 11,  52 => 10,  49 => 9,  40 => 6,  35 => 5,  30 => 4,  28 => 3,  23 => 2,  19 => 1,);
    }
}
/* {% for attributeView in groupView.attributes %}*/
/*     <div class="attribute-field {{ attributeView.classes|default([])|keys|join(' ') }}">*/
/*         {% if attributeView.values is defined %}*/
/*             {% for scope, subvalue in attributeView.values %}*/
/*                 <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                     {{ form_widget(subvalue, {'attr': {'data-scope': scope, 'data-color': channel_color(scope), 'data-font-color': channel_font_color(scope)}}) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% else %}*/
/*                 <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                     {{ form_widget(attributeView.value) }}*/
/*                 </div>*/
/*         {% endif %}*/
/*         {% if attributeView.isRemovable and resource_granted('pim_enrich_variant_group_remove_attribute') %}*/
/*             <i {{ elements.deleteLinkAttributes(*/
/*                 path('pim_enrich_variant_group_remove_attribute', { 'groupId': form.vars.data.id, 'attributeId': attributeView.id, 'dataLocale': dataLocale }),*/
/*                 path('pim_enrich_variant_group_edit', { 'id': form.vars.data.id, 'dataLocale': dataLocale }),*/
/*                 'confirmation.variant_group.remove_attribute'|trans({'%name%': attributeView.label}),*/
/*                 'flash.variant group.attribute_removed'|trans*/
/*             )}} class="icon-remove remove-attribute" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'Remove this attribute'|trans }}"></i>*/
/*         {% endif %}*/
/*         {% if attributeView.allowValueCreation and resource_granted('pim_enrich_attribute_edit') %}*/
/*             {{ elements.quickCreateOption(attributeView.id, path('pim_enrich_attribute_create_option', { id: attributeView.id, dataLocale: dataLocale })) }}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endfor %}*/
/* */
