<?php

/* PimEnrichBundle:Product:index.html.twig */
class __TwigTemplate_4e822bbda6ba9ec8c752b1b2a48a6b87ec38a9e0a88d6f5050dfd4f5bae19737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Product:index.html.twig", 1);
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
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Product:index.html.twig", 2);
        // line 4
        $context["title"] = $this->env->getExtension('translator')->trans("products");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head_script($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(
            ['jquery', 'jquery.sidebarize'],
            function (\$) {
                'use strict';
                \$(function() {
                    \$('.has-sidebar').sidebarize();

                });
            }
        );

        sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));
    </script>
";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "
    ";
        // line 26
        ob_start();
        // line 27
        echo "        ";
        $this->loadTemplate("PimEnrichBundle:Product:_index_buttons.html.twig", "PimEnrichBundle:Product:index.html.twig", 27)->display($context);
        // line 28
        echo "    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        ob_start();
        // line 31
        echo "        <div id=\"locale-switcher\" class=\"btn-group sub-title\">
            <span class=\"product-name dropdown-toggle\" data-toggle=\"dropdown\">
                ";
        // line 33
        echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "code", array()));
        echo "
                <i class=\"icon-caret-down\"></i>
            </span>
            <ul class=\"dropdown-menu\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 38
            echo "                    <li class=\"";
            echo ((($this->getAttribute($context["locale"], "code", array()) == $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "code", array()))) ? ("active") : (""));
            echo "\">
                        <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_index", array("dataLocale" => $this->getAttribute($context["locale"], "code", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
            echo "\">
                            <span class=\"indicator\">
                                ";
            // line 41
            if (($this->getAttribute($context["locale"], "code", array()) == $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "code", array()))) {
                // line 42
                echo "                                    <i class=\"icon-circle\"></i>
                                ";
            }
            // line 44
            echo "                            </span>
                            ";
            // line 45
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()));
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </ul>
        </div>
        ";
        // line 51
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("pim_datagrid.controller.datagrid_view:indexAction", array("alias" => "product-grid")));
        echo "
    ";
        $context["subtitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 53
        echo "
    ";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle"))), "method"), "html", null, true);
        echo "

    <div class=\"row-fluid has-sidebar\">
        <div id=\"tree\" data-datalocale=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "code", array()), "html", null, true);
        echo "\" data-relatedentity=\"product\"></div>
        <div id=\"product-grid\">
            ";
        // line 59
        echo $context["dataGrid"]->getrenderStatefulGrid("product-grid", array("dataLocale" => $this->getAttribute((isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "code", array())));
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  141 => 57,  135 => 54,  132 => 53,  127 => 51,  123 => 49,  113 => 45,  110 => 44,  106 => 42,  104 => 41,  97 => 39,  92 => 38,  88 => 37,  81 => 33,  77 => 31,  75 => 30,  72 => 29,  69 => 28,  66 => 27,  64 => 26,  61 => 25,  58 => 24,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% set title = 'products'|trans %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'jquery.sidebarize'],*/
/*             function ($) {*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     $('.has-sidebar').sidebarize();*/
/* */
/*                 });*/
/*             }*/
/*         );*/
/* */
/*         sessionStorage.setItem('mass_edit_selected_attributes', JSON.stringify([]));*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set buttons %}*/
/*         {% include 'PimEnrichBundle:Product:_index_buttons.html.twig' %}*/
/*     {% endset %}*/
/* */
/*     {% set subtitle %}*/
/*         <div id="locale-switcher" class="btn-group sub-title">*/
/*             <span class="product-name dropdown-toggle" data-toggle="dropdown">*/
/*                 {{ dataLocale.code|flag }}*/
/*                 <i class="icon-caret-down"></i>*/
/*             </span>*/
/*             <ul class="dropdown-menu">*/
/*                 {% for locale in locales %}*/
/*                     <li class="{{ locale.code == dataLocale.code ? 'active' : '' }}">*/
/*                         <a href="{{ path('pim_enrich_product_index', { 'dataLocale': locale.code }) }}" title="{{ locale_label(locale.code) }}">*/
/*                             <span class="indicator">*/
/*                                 {% if locale.code == dataLocale.code %}*/
/*                                     <i class="icon-circle"></i>*/
/*                                 {% endif %}*/
/*                             </span>*/
/*                             {{ locale.code|flag }}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*         {{ render(controller('pim_datagrid.controller.datagrid_view:indexAction', { 'alias': 'product-grid' })) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons, subtitle) }}*/
/* */
/*     <div class="row-fluid has-sidebar">*/
/*         <div id="tree" data-datalocale="{{ dataLocale.code }}" data-relatedentity="product"></div>*/
/*         <div id="product-grid">*/
/*             {{ dataGrid.renderStatefulGrid('product-grid', { dataLocale: dataLocale.code }) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
