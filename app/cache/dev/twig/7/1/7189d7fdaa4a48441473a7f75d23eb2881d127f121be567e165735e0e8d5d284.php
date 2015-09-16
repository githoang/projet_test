<?php

/* PimEnrichBundle:AttributeGroup:_attribute-sort-form.html.twig */
class __TwigTemplate_6da72e54c7d46e22a163c8f6361610b4f68364d3a5eefb5c2aa0b46ea5811442 extends Twig_Template
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
        $context["sortFormId"] = "pim_enrich_attribute_sort";
        // line 2
        $context["sortFormPath"] = $this->env->getExtension('routing')->getPath("pim_enrich_attribute_sort");
        // line 3
        echo "
<form id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["sortFormId"]) ? $context["sortFormId"] : $this->getContext($context, "sortFormId")), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["sortFormPath"]) ? $context["sortFormPath"] : $this->getContext($context, "sortFormPath")), "html", null, true);
        echo "\" method=\"POST\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 6
            echo "        <input name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "id", array()), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "sortOrder", array()), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</form>

<script>
require(
    ['jquery', 'jquery-ui-full'],
    function (\$) {
        'use strict';

        \$(function () {
            var \$form = \$('#";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["sortFormId"]) ? $context["sortFormId"] : $this->getContext($context, "sortFormId")), "html", null, true);
        echo "');
            var \$list = \$('";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")), "html", null, true);
        echo "');

            function updateAttributeSortOrder() {
                var num = 0;
                \$list.find('tr').each(function() {
                    var \$input = \$(this).find('.handle input');
                    var id = \$input.attr('name');
                    \$input.val(num);
                    \$('input[name=\"'+id+'\"]').val(num);
                    num++;
                });

                \$.ajax({
                    url: '";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["sortFormPath"]) ? $context["sortFormPath"] : $this->getContext($context, "sortFormPath")), "html", null, true);
        echo "',
                    type: 'POST',
                    data: \$form.serialize()
                });
            }

            \$list.sortable({
                handle: '.handle',
                containment: 'parent',
                tolerance: 'pointer',
                update: updateAttributeSortOrder,
                helper: function(e, tr) {
                    var \$originals = tr.children();
                    var \$helper = tr.clone();
                    \$helper.children().each(function(index) {
                        \$(this).width(\$originals.eq(index).width());
                    });

                    return \$helper;
                }
            });
        });
    }
);
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup:_attribute-sort-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 31,  62 => 18,  58 => 17,  47 => 8,  36 => 6,  32 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set sortFormId   = 'pim_enrich_attribute_sort' %}*/
/* {% set sortFormPath = path('pim_enrich_attribute_sort') %}*/
/* */
/* <form id="{{ sortFormId }}" action="{{ sortFormPath }}" method="POST">*/
/*     {% for attribute in attributes %}*/
/*         <input name="{{ attribute.id }}" type="hidden" value="{{ attribute.sortOrder }}">*/
/*     {% endfor %}*/
/* </form>*/
/* */
/* <script>*/
/* require(*/
/*     ['jquery', 'jquery-ui-full'],*/
/*     function ($) {*/
/*         'use strict';*/
/* */
/*         $(function () {*/
/*             var $form = $('#{{ sortFormId }}');*/
/*             var $list = $('{{ list }}');*/
/* */
/*             function updateAttributeSortOrder() {*/
/*                 var num = 0;*/
/*                 $list.find('tr').each(function() {*/
/*                     var $input = $(this).find('.handle input');*/
/*                     var id = $input.attr('name');*/
/*                     $input.val(num);*/
/*                     $('input[name="'+id+'"]').val(num);*/
/*                     num++;*/
/*                 });*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ sortFormPath }}',*/
/*                     type: 'POST',*/
/*                     data: $form.serialize()*/
/*                 });*/
/*             }*/
/* */
/*             $list.sortable({*/
/*                 handle: '.handle',*/
/*                 containment: 'parent',*/
/*                 tolerance: 'pointer',*/
/*                 update: updateAttributeSortOrder,*/
/*                 helper: function(e, tr) {*/
/*                     var $originals = tr.children();*/
/*                     var $helper = tr.clone();*/
/*                     $helper.children().each(function(index) {*/
/*                         $(this).width($originals.eq(index).width());*/
/*                     });*/
/* */
/*                     return $helper;*/
/*                 }*/
/*             });*/
/*         });*/
/*     }*/
/* );*/
/* </script>*/
/* */
