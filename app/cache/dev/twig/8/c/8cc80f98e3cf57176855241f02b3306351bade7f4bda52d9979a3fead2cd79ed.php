<?php

/* PimEnrichBundle:Product/Tab:attribute.html.twig */
class __TwigTemplate_aea48ef30cf0313f2a27fa0ac72d8fb08dce8930c3102d1a05a520b9f4857897 extends Twig_Template
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
    <div class=\"tab-groups\">
        <ul class=\"nav nav-list\">
            ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "orderedGroups", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "groups", array(), "any", false, true), $this->getAttribute($context["group"], "id", array()), array(), "array", true, true)) {
                // line 5
                echo "            <li class=\"tab";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo " active";
                }
                echo "\">
                <a href=\"#tabs-";
                // line 6
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
        // line 9
        echo "        </ul>
    </div>
    <div class=\"tab-content\">
        <div ";
        // line 12
        echo (( !(null === (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) ? ("class=\"compare\" ") : (""));
        echo "id=\"comparison-buttons\">
            ";
        // line 13
        if ( !(null === (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
            // line 14
            echo "                <div id=\"copy-selection-switcher\" class=\"btn-group pull-left\">
                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select"), "html", null, true);
            echo "
                        <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\">
                        <li class=\"left-aligned\"><a class=\"copy-selection\" data-target=\"all\" href=\"#\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("All"), "html", null, true);
            echo "</a></li>
                        <li class=\"left-aligned\"><a class=\"copy-selection\" data-target=\"current-tab\" href=\"#\">";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Current tab"), "html", null, true);
            echo "</a></li>
                        <li class=\"left-aligned\"><a class=\"copy-selection\" data-target=\"none\" href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("None"), "html", null, true);
            echo "</a></li>
                    </ul>
                </div>

                <div class=\"btn-group\"><a href=\"#\" id=\"copy-selection\" class=\"btn pull-left\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Copy"), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 28
        echo "
            <div id=\"comparison-switcher\" class=\"btn-group\">

                <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Translate from"), "html", null, true);
        if ( !(null === (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
            echo ": ";
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")));
            echo "<span class=\"title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel((isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale"))), "html", null, true);
            echo "</span>";
        }
        // line 33
        echo "                    <span class=\"caret\"></span>
                </button>

                <ul class=\"dropdown-menu pull-right\">
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            if (($context["locale"] != (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))) {
                // line 38
                echo "                        <li class=\"left-aligned";
                echo ((($this->getAttribute($context["locale"], "code", array()) == (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) ? (" active") : (""));
                echo "\">
                            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "compareWith" => $this->getAttribute($context["locale"], "code", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
                echo "\">
                                <span class=\"indicator\">
                                    ";
                // line 41
                if (($context["locale"] == (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
                    // line 42
                    echo "                                        <i class=\"icon-circle\"></i>
                                    ";
                }
                // line 44
                echo "                                </span>
                                ";
                // line 45
                echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()));
                echo "
                                <span class=\"title\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
                echo "</span>
                            </a>
                        </li>
                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 50
            echo "                        <li>
                            <a href=\"javascript:void(0);\">
                                <span class=\"title\">";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product.no_comparison_locale_available"), "html", null, true);
            echo "</span>
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </ul>
            </div>
            ";
        // line 58
        if ( !(null === (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
            // line 59
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "html", null, true);
            echo "\" class=\"btn\">
                    &times;
                </a>
            ";
        }
        // line 63
        echo "        </div>
        <div id=\"attribute-buttons\">
            ";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "channelSwitcher", array(0 => (isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels"))), "method"), "html", null, true);
        echo "
        </div>

        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "groups", array()));
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
            // line 69
            echo "            <div id=\"tabs-";
            echo twig_escape_filter($this->env, $context["groupId"], "html", null, true);
            echo "\" class=\"tab-pane fullheight\">
                <h3>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["groupView"], "label", array()), "html", null, true);
            echo "</h3>
                ";
            // line 71
            if ((isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale"))) {
                // line 72
                echo "                    ";
                $this->loadTemplate("PimEnrichBundle:Product:_edit_with_comparison.html.twig", "PimEnrichBundle:Product/Tab:attribute.html.twig", 72)->display($context);
                // line 73
                echo "                ";
            } else {
                // line 74
                echo "                    ";
                $this->loadTemplate("PimEnrichBundle:Product:_edit_without_comparison.html.twig", "PimEnrichBundle:Product/Tab:attribute.html.twig", 74)->display($context);
                // line 75
                echo "                ";
            }
            // line 76
            echo "            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['groupView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </div>

    ";
        // line 80
        if ( !(null === (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))) {
            // line 81
            echo "        ";
            $this->loadTemplate("PimEnrichBundle:Product:_comparison-handler.html.twig", "PimEnrichBundle:Product/Tab:attribute.html.twig", 81)->display($context);
            // line 82
            echo "    ";
        }
        // line 83
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product/Tab:attribute.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 83,  267 => 82,  264 => 81,  262 => 80,  258 => 78,  243 => 76,  240 => 75,  237 => 74,  234 => 73,  231 => 72,  229 => 71,  225 => 70,  220 => 69,  203 => 68,  197 => 65,  193 => 63,  185 => 59,  183 => 58,  179 => 56,  169 => 52,  165 => 50,  155 => 46,  151 => 45,  148 => 44,  144 => 42,  142 => 41,  135 => 39,  130 => 38,  124 => 37,  118 => 33,  109 => 32,  103 => 28,  98 => 26,  91 => 22,  87 => 21,  83 => 20,  76 => 16,  72 => 14,  70 => 13,  66 => 12,  61 => 9,  46 => 6,  39 => 5,  28 => 4,  19 => 1,);
    }
}
/* <div class="tab-pane tab-attribute {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     <div class="tab-groups">*/
/*         <ul class="nav nav-list">*/
/*             {% for group in product.orderedGroups if form.vars.groups[group.id] is defined %}*/
/*             <li class="tab{% if loop.index == 1 %} active{% endif %}">*/
/*                 <a href="#tabs-{{group.id}}" data-toggle="tab">{{ group.label }}</a>*/
/*             </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/*     <div class="tab-content">*/
/*         <div {{ comparisonLocale is not null ? 'class="compare" ' }}id="comparison-buttons">*/
/*             {% if comparisonLocale is not null %}*/
/*                 <div id="copy-selection-switcher" class="btn-group pull-left">*/
/*                     <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*                         {{ 'Select'|trans }}*/
/*                         <span class="caret"></span>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li class="left-aligned"><a class="copy-selection" data-target="all" href="#">{{ 'All'|trans }}</a></li>*/
/*                         <li class="left-aligned"><a class="copy-selection" data-target="current-tab" href="#">{{ 'Current tab'|trans }}</a></li>*/
/*                         <li class="left-aligned"><a class="copy-selection" data-target="none" href="#">{{ 'None'|trans }}</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*                 <div class="btn-group"><a href="#" id="copy-selection" class="btn pull-left">{{ 'Copy'|trans }}</a></div>*/
/*             {% endif %}*/
/* */
/*             <div id="comparison-switcher" class="btn-group">*/
/* */
/*                 <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*                     {{ 'Translate from'|trans }}{% if comparisonLocale is not null %}: {{ comparisonLocale|flag }}<span class="title">{{ locale_label(comparisonLocale) }}</span>{% endif %}*/
/*                     <span class="caret"></span>*/
/*                 </button>*/
/* */
/*                 <ul class="dropdown-menu pull-right">*/
/*                     {% for locale in locales if locale != dataLocale %}*/
/*                         <li class="left-aligned{{ locale.code == comparisonLocale ? ' active' }}">*/
/*                             <a href="{{ path('pim_enrich_product_edit', {id: form.vars.value.id, dataLocale: dataLocale, compareWith: locale.code}) }}" title="{{ locale_label(locale.code) }}">*/
/*                                 <span class="indicator">*/
/*                                     {% if locale == comparisonLocale %}*/
/*                                         <i class="icon-circle"></i>*/
/*                                     {% endif %}*/
/*                                 </span>*/
/*                                 {{ locale.code|flag }}*/
/*                                 <span class="title">{{ locale_label(locale.code) }}</span>*/
/*                             </a>*/
/*                         </li>*/
/*                     {% else %}*/
/*                         <li>*/
/*                             <a href="javascript:void(0);">*/
/*                                 <span class="title">{{ 'pim_enrich.product.no_comparison_locale_available'|trans }}</span>*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             {% if comparisonLocale is not null %}*/
/*                 <a href="{{ path('pim_enrich_product_edit', {id: form.vars.value.id, dataLocale: dataLocale}) }}" class="btn">*/
/*                     &times;*/
/*                 </a>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div id="attribute-buttons">*/
/*             {{ elements.channelSwitcher(channels) }}*/
/*         </div>*/
/* */
/*         {% for groupId, groupView in form.vars.groups %}*/
/*             <div id="tabs-{{ groupId }}" class="tab-pane fullheight">*/
/*                 <h3>{{ groupView.label }}</h3>*/
/*                 {% if comparisonLocale %}*/
/*                     {% include 'PimEnrichBundle:Product:_edit_with_comparison.html.twig' %}*/
/*                 {% else %}*/
/*                     {% include 'PimEnrichBundle:Product:_edit_without_comparison.html.twig' %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     {% if comparisonLocale is not null %}*/
/*         {% include 'PimEnrichBundle:Product:_comparison-handler.html.twig' %}*/
/*     {% endif %}*/
/* </div>*/
/* */
