<?php

/* PimEnrichBundle:Attribute:index.html.twig */
class __TwigTemplate_be400fee45548b0f42fe76f0cddd8e7d51043270a04cdaf3f3598e12ae293ea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Attribute:index.html.twig", 1);
        $this->blocks = array(
            'head_script_component' => array($this, 'block_head_script_component'),
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Attribute:index.html.twig", 2);
        // line 4
        $context["title"] = $this->env->getExtension('translator')->trans("attribute.overview");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "
    ";
        // line 8
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_create")) {
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            <div class=\"attribute-type-selector\">
                ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributeTypes"]) ? $context["attributeTypes"] : $this->getContext($context, "attributeTypes")));
            foreach ($context['_seq'] as $context["code"] => $context["label"]) {
                // line 12
                echo "                    ";
                $context["attributeTypes"] = twig_array_merge((isset($context["attributeTypes"]) ? $context["attributeTypes"] : $this->getContext($context, "attributeTypes")), array($context["code"] => $this->env->getExtension('translator')->trans($context["label"])));
                // line 13
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["attributeTypes"]) ? $context["attributeTypes"] : $this->getContext($context, "attributeTypes"))));
            foreach ($context['_seq'] as $context["code"] => $context["label"]) {
                // line 16
                echo "                    <div class=\"pull-left\">
                        <a class=\"btn btn-large attribute-choice fullwidth\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_attribute_create", array("attribute_type" => $context["code"])), "html", null, true);
                echo "\">
                            <i class=\"icon-";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('pim_attribute_extension')->attributeIcon($context["code"]), "html", null, true);
                echo " pull-left\"></i>
                            ";
                // line 19
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "
                        </a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </div>
        ";
            $context["modalContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "        <script type=\"text/javascript\">
            require(
                ['jquery', 'oro/navigation', 'backbone/bootstrap-modal'],
                function(\$, navigation) {
                    \$(function() {
                        var modal = null;
                        \$('#create-attribute').on('click', function() {
                            if (modal) {
                                modal.open();
                            } else {
                                modal = new Backbone.BootstrapModal({
                                    title: '";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose the attribute type"), "html", null, true);
            echo "',
                                    content: ";
            // line 37
            echo twig_jsonencode_filter((isset($context["modalContent"]) ? $context["modalContent"] : $this->getContext($context, "modalContent")));
            echo "
                                });

                                modal.open();
                                modal.\$el.css({
                                    'width': '700px',
                                    'margin-left': '-350px'
                                }).find('.modal-footer').remove();

                                modal.\$el.on('click', 'a.attribute-choice', function(e) {
                                    e.preventDefault();
                                    modal.close();
                                    modal.\$el.remove();
                                    navigation.getInstance().navigate('#url=' + \$(this).attr('href'), { trigger: true });
                                });
                            }
                        });
                    });
                }
            );
        </script>
    ";
        }
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        // line 62
        echo "    ";
        ob_start();
        // line 63
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "attribute", 1 => null, 2 => array("id" => "create-attribute"), 3 => "pim_enrich_attribute_create"), "method"), "html", null, true);
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
    ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 68
        echo $context["dataGrid"]->getrenderStatefulGrid("attribute-grid", array("localeCode" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 68,  154 => 66,  151 => 65,  145 => 63,  142 => 62,  139 => 61,  112 => 37,  108 => 36,  95 => 25,  91 => 23,  81 => 19,  77 => 18,  73 => 17,  70 => 16,  66 => 15,  63 => 14,  57 => 13,  54 => 12,  50 => 11,  47 => 10,  44 => 9,  42 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% set title = 'attribute.overview'|trans %}*/
/* */
/* {% block head_script_component %}*/
/*     {{ parent() }}*/
/*     {% if resource_granted('pim_enrich_attribute_create') %}*/
/*         {% set modalContent %}*/
/*             <div class="attribute-type-selector">*/
/*                 {% for code, label in attributeTypes %}*/
/*                     {% set attributeTypes = attributeTypes|merge({ (code): label|trans }) %}*/
/*                 {% endfor %}*/
/* */
/*                 {% for code, label in attributeTypes|sort %}*/
/*                     <div class="pull-left">*/
/*                         <a class="btn btn-large attribute-choice fullwidth" href="{{ path('pim_enrich_attribute_create', { attribute_type: code }) }}">*/
/*                             <i class="icon-{{ attribute_icon(code) }} pull-left"></i>*/
/*                             {{ label }}*/
/*                         </a>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endset %}*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['jquery', 'oro/navigation', 'backbone/bootstrap-modal'],*/
/*                 function($, navigation) {*/
/*                     $(function() {*/
/*                         var modal = null;*/
/*                         $('#create-attribute').on('click', function() {*/
/*                             if (modal) {*/
/*                                 modal.open();*/
/*                             } else {*/
/*                                 modal = new Backbone.BootstrapModal({*/
/*                                     title: '{{ 'Choose the attribute type'|trans }}',*/
/*                                     content: {{ modalContent|json_encode|raw }}*/
/*                                 });*/
/* */
/*                                 modal.open();*/
/*                                 modal.$el.css({*/
/*                                     'width': '700px',*/
/*                                     'margin-left': '-350px'*/
/*                                 }).find('.modal-footer').remove();*/
/* */
/*                                 modal.$el.on('click', 'a.attribute-choice', function(e) {*/
/*                                     e.preventDefault();*/
/*                                     modal.close();*/
/*                                     modal.$el.remove();*/
/*                                     navigation.getInstance().navigate('#url=' + $(this).attr('href'), { trigger: true });*/
/*                                 });*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% set buttons %}*/
/*         {{ elements.createBtn('attribute', null, { id: 'create-attribute' }, 'pim_enrich_attribute_create') }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderStatefulGrid('attribute-grid', { localeCode: locale_code() }) }}*/
/* {% endblock %}*/
/* */
