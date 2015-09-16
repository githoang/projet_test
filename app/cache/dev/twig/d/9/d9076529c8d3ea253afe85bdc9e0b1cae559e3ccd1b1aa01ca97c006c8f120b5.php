<?php

/* PimEnrichBundle:Product:_edit_with_comparison.html.twig */
class __TwigTemplate_365938dda275d96b52eca7a8e4bea04b4f0fcf57c85f1327a41502c176e24edb extends Twig_Template
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
        echo "<table class=\"comparison\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupView"]) ? $context["groupView"] : $this->getContext($context, "groupView")), "attributes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attributeView"]) {
            if (((null === $this->getAttribute($context["attributeView"], "locale", array())) || ($this->getAttribute($context["attributeView"], "locale", array()) == (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale"))))) {
                // line 3
                echo "    <tr>
        <td>
            <div class=\"attribute-field ";
                // line 5
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter((($this->getAttribute($context["attributeView"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["attributeView"], "classes", array()), array())) : (array()))), " "), "html", null, true);
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($context["attributeView"], "values", array(), "any", true, true)) {
                    // line 7
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attributeView"], "values", array()));
                    foreach ($context['_seq'] as $context["scope"] => $context["subvalue"]) {
                        // line 8
                        echo "                        <div class=\"control-group\" data-field=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                        echo "\">
                            ";
                        // line 9
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["subvalue"], 'widget', array("attr" => array("data-scope" => $context["scope"], "data-color" => $this->env->getExtension('pim_channel_extension')->channelColor($context["scope"]), "data-font-color" => $this->env->getExtension('pim_channel_extension')->channelFontColor($context["scope"]))));
                        echo "
                        </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['scope'], $context['subvalue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 12
                    echo "                ";
                } else {
                    // line 13
                    echo "                    <div class=\"control-group\" data-field=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attributeView"], "code", array()), "html", null, true);
                    echo "\">
                        ";
                    // line 14
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["attributeView"], "value", array()), 'widget');
                    echo "
                    </div>
                ";
                }
                // line 17
                echo "                ";
                if (($this->getAttribute($context["attributeView"], "isRemovable", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_remove_attribute"))) {
                    // line 18
                    echo "                    <i ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLinkAttributes", array(0 => $this->env->getExtension('routing')->getPath("pim_enrich_product_removeattribute", array("productId" => $this->getAttribute(                    // line 19
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "attributeId" => $this->getAttribute($context["attributeView"], "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), 1 => $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute(                    // line 20
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), 2 => $this->env->getExtension('translator')->trans("confirmation.product.remove attribute", array("%name%" => $this->getAttribute(                    // line 21
$context["attributeView"], "label", array()))), 3 => $this->env->getExtension('translator')->trans("flash.product.attribute removed")), "method"), "html", null, true);
                    // line 23
                    echo " class=\"icon-remove remove-attribute\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remove this attribute"), "html", null, true);
                    echo "\"></i>
                ";
                }
                // line 25
                echo "                ";
                if (($this->getAttribute($context["attributeView"], "allowValueCreation", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_edit"))) {
                    // line 26
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "quickCreateOption", array(0 => $this->getAttribute($context["attributeView"], "id", array()), 1 => $this->env->getExtension('routing')->getPath("pim_enrich_attribute_create_option", array("id" => $this->getAttribute($context["attributeView"], "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale"))))), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 28
                echo "            </div>
        </td>
        <td class=\"no-label\">
            ";
                // line 31
                if ( !(null === $this->getAttribute($context["attributeView"], "locale", array()))) {
                    // line 32
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["groupView"]) ? $context["groupView"] : $this->getContext($context, "groupView")), "attributes", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["comparisonView"]) {
                        if (($this->getAttribute($context["comparisonView"], "locale", array()) == (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
                            // line 33
                            echo "                    ";
                            if (($this->getAttribute($context["comparisonView"], "code", array()) == $this->getAttribute($context["attributeView"], "code", array()))) {
                                // line 34
                                echo "                        <div class=\"attribute-field ";
                                echo twig_escape_filter($this->env, twig_join_filter(twig_get_array_keys_filter((($this->getAttribute($context["comparisonView"], "classes", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["comparisonView"], "classes", array()), array())) : (array()))), " "), "html", null, true);
                                echo "\">
                            ";
                                // line 35
                                if ($this->getAttribute($context["comparisonView"], "values", array(), "any", true, true)) {
                                    // line 36
                                    echo "                                ";
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["comparisonView"], "values", array()));
                                    foreach ($context['_seq'] as $context["scope"] => $context["subvalue"]) {
                                        // line 37
                                        echo "                                    <div class=\"control-group\" data-field=\"";
                                        echo twig_escape_filter($this->env, $this->getAttribute($context["comparisonView"], "code", array()), "html", null, true);
                                        echo "\">
                                        ";
                                        // line 38
                                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["subvalue"], 'widget', array("attr" => array("data-scope" => $context["scope"], "data-color" => $this->env->getExtension('pim_channel_extension')->channelColor($context["scope"]), "data-font-color" => $this->env->getExtension('pim_channel_extension')->channelFontColor($context["scope"]))));
                                        echo "
                                    </div>
                                ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['scope'], $context['subvalue'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 41
                                    echo "                            ";
                                } else {
                                    // line 42
                                    echo "                                <div class=\"control-group\" data-field=\"";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["comparisonView"], "code", array()), "html", null, true);
                                    echo "\">
                                    ";
                                    // line 43
                                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["comparisonView"], "value", array()), 'widget');
                                    echo "
                                </div>
                            ";
                                }
                                // line 46
                                echo "                        </div>
                    ";
                            }
                            // line 48
                            echo "                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comparisonView'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 49
                    echo "            ";
                }
                // line 50
                echo "        </td>
    </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    <tr class=\"fullheight\"><td></td><td></td></tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_edit_with_comparison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 53,  164 => 50,  161 => 49,  154 => 48,  150 => 46,  144 => 43,  139 => 42,  136 => 41,  127 => 38,  122 => 37,  117 => 36,  115 => 35,  110 => 34,  107 => 33,  101 => 32,  99 => 31,  94 => 28,  88 => 26,  85 => 25,  79 => 23,  77 => 21,  76 => 20,  75 => 19,  73 => 18,  70 => 17,  64 => 14,  59 => 13,  56 => 12,  47 => 9,  42 => 8,  37 => 7,  35 => 6,  31 => 5,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <table class="comparison">*/
/*     {% for attributeView in groupView.attributes if attributeView.locale is null or attributeView.locale == dataLocale %}*/
/*     <tr>*/
/*         <td>*/
/*             <div class="attribute-field {{ attributeView.classes|default([])|keys|join(' ') }}">*/
/*                 {% if attributeView.values is defined %}*/
/*                     {% for scope, subvalue in attributeView.values %}*/
/*                         <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                             {{ form_widget(subvalue, {'attr': {'data-scope': scope, 'data-color': channel_color(scope), 'data-font-color': channel_font_color(scope)}}) }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 {% else %}*/
/*                     <div class="control-group" data-field="{{ attributeView.code }}">*/
/*                         {{ form_widget(attributeView.value) }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if attributeView.isRemovable and resource_granted('pim_enrich_product_remove_attribute') %}*/
/*                     <i {{ elements.deleteLinkAttributes(*/
/*                         path('pim_enrich_product_removeattribute', { 'productId': product.id, 'attributeId': attributeView.id, 'dataLocale': dataLocale }),*/
/*                         path('pim_enrich_product_edit', { 'id': product.id, 'dataLocale': dataLocale }),*/
/*                         'confirmation.product.remove attribute'|trans({'%name%': attributeView.label}),*/
/*                         'flash.product.attribute removed'|trans*/
/*                         )}} class="icon-remove remove-attribute" data-toggle="tooltip" data-placement="right" data-original-title="{{ 'Remove this attribute'|trans }}"></i>*/
/*                 {% endif %}*/
/*                 {% if attributeView.allowValueCreation and resource_granted('pim_enrich_attribute_edit') %}*/
/*                     {{ elements.quickCreateOption(attributeView.id, path('pim_enrich_attribute_create_option', { id: attributeView.id, dataLocale: dataLocale })) }}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </td>*/
/*         <td class="no-label">*/
/*             {% if attributeView.locale is not null %}*/
/*                 {% for comparisonView in groupView.attributes if comparisonView.locale == comparisonLocale %}*/
/*                     {% if comparisonView.code == attributeView.code %}*/
/*                         <div class="attribute-field {{ comparisonView.classes|default([])|keys|join(' ') }}">*/
/*                             {% if comparisonView.values is defined %}*/
/*                                 {% for scope, subvalue in comparisonView.values %}*/
/*                                     <div class="control-group" data-field="{{ comparisonView.code }}">*/
/*                                         {{ form_widget(subvalue, {'attr': {'data-scope': scope, 'data-color': channel_color(scope), 'data-font-color': channel_font_color(scope)}}) }}*/
/*                                     </div>*/
/*                                 {% endfor %}*/
/*                             {% else %}*/
/*                                 <div class="control-group" data-field="{{ comparisonView.code }}">*/
/*                                     {{ form_widget(comparisonView.value) }}*/
/*                                 </div>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         </td>*/
/*     </tr>*/
/*     {% endfor %}*/
/*     <tr class="fullheight"><td></td><td></td></tr>*/
/* </table>*/
/* */
