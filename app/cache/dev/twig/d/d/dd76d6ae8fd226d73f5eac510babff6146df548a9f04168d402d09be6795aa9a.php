<?php

/* PimEnrichBundle:VariantGroup/Tab:attribute.html.twig */
class __TwigTemplate_33856eb86c2917b1771a5cc3d8d35f5f1cf21378e70f55c729d092b84a775fce extends Twig_Template
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
        $context["orderedGroups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "orderedGroups", array());
        // line 2
        echo "
<div class=\"tab-pane product-edit tab-attribute ";
        // line 3
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    <div class=\"tab-groups\">
        <ul class=\"nav nav-list\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderedGroups"]) ? $context["orderedGroups"] : $this->getContext($context, "orderedGroups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "productTemplate", array(), "any", false, true), "vars", array(), "any", false, true), "groups", array(), "any", false, true), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                // line 7
                echo "                <li class=\"tab";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " active";
                }
                echo "\">
                    <a href=\"#tabs-";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>
                </li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </div>
    <div class=\"tab-content\">
        <div id=\"attribute-buttons\">
            ";
        // line 15
        $this->loadTemplate("PimEnrichBundle:VariantGroup:_locale-switcher.html.twig", "PimEnrichBundle:VariantGroup/Tab:attribute.html.twig", 15)->display($context);
        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "channelSwitcher", array(0 => (isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels"))), "method"), "html", null, true);
        echo "
        </div>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "groups", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["groupId"] => $context["groupView"]) {
            // line 20
            echo "            <div id=\"tabs-";
            echo twig_escape_filter($this->env, $context["groupId"], "html", null, true);
            echo "\" class=\"tab-pane fullheight\">
                <h3>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupView"], "label", array()), "html", null, true);
            echo "</h3>
                ";
            // line 22
            $this->loadTemplate("PimEnrichBundle:VariantGroup:_edit_without_comparison.html.twig", "PimEnrichBundle:VariantGroup/Tab:attribute.html.twig", 22)->display($context);
            // line 23
            echo "            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <div class=\"tab-pane active fullheight\">
                <h3>&nbsp;</h3>
                <div class=\"alert alert-info\">
                    <div class=\"message\">
                        ";
            // line 29
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "data", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "productTemplate", array()), "vars", array()), "data", array()), "values", array())))) {
                // line 30
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.variant_group.info.no_attributes_in_selected_locale"), "html", null, true);
                echo "
                        ";
            } else {
                // line 32
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.variant_group.info.no_attributes"), "html", null, true);
                echo "
                        ";
            }
            // line 34
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['groupView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup/Tab:attribute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 38,  143 => 34,  137 => 32,  131 => 30,  129 => 29,  123 => 25,  109 => 23,  107 => 22,  103 => 21,  98 => 20,  80 => 19,  73 => 16,  71 => 15,  65 => 11,  50 => 8,  43 => 7,  32 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set orderedGroups = form.productTemplate.vars.orderedGroups %}*/
/* */
/* <div class="tab-pane product-edit tab-attribute {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     <div class="tab-groups">*/
/*         <ul class="nav nav-list">*/
/*             {% for group in orderedGroups if form.productTemplate.vars.groups[group.id] is defined %}*/
/*                 <li class="tab{% if loop.index == 1 %} active{% endif %}">*/
/*                     <a href="#tabs-{{group.id}}" data-toggle="tab">{{ group.label }}</a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/*     <div class="tab-content">*/
/*         <div id="attribute-buttons">*/
/*             {% include 'PimEnrichBundle:VariantGroup:_locale-switcher.html.twig' %}*/
/*             {{ elements.channelSwitcher(channels) }}*/
/*         </div>*/
/* */
/*         {% for groupId, groupView in form.productTemplate.vars.groups %}*/
/*             <div id="tabs-{{ groupId }}" class="tab-pane fullheight">*/
/*                 <h3>{{ groupView.label }}</h3>*/
/*                 {% include 'PimEnrichBundle:VariantGroup:_edit_without_comparison.html.twig' %}*/
/*             </div>*/
/*         {% else %}*/
/*             <div class="tab-pane active fullheight">*/
/*                 <h3>&nbsp;</h3>*/
/*                 <div class="alert alert-info">*/
/*                     <div class="message">*/
/*                         {% if form.productTemplate.vars.data and form.productTemplate.vars.data.values|length %}*/
/*                             {{ 'pim_enrich.variant_group.info.no_attributes_in_selected_locale'|trans }}*/
/*                         {% else %}*/
/*                             {{ 'pim_enrich.variant_group.info.no_attributes'|trans }}*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
