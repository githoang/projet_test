<?php

/* PimEnrichBundle:AttributeGroup:_js-handler.html.twig */
class __TwigTemplate_ffb2fef88034f91ff7450f383e5c752ae777ce02d9ed6d1ad2d443b28844423a extends Twig_Template
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
        echo "<script type=\"text/javascript\">
require(
    ['jquery', 'backbone', 'jquery-ui-full', 'jquery.sidebarize', 'bootstrap-tooltip'],
    function (\$, Backbone){
        'use strict';
        \$(function() {
            function updateSortOrder() {
                var num = 0;
                \$('#entities-sortable').find('li').each(function() {
                    ";
        // line 10
        if (((isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")) && (isset($context["sortFieldId"]) ? $context["sortFieldId"] : $this->getContext($context, "sortFieldId")))) {
            // line 11
            echo "                        if (\$(this).data('id') == '";
            echo twig_escape_filter($this->env, (isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")), "html", null, true);
            echo "') {
                            \$('#";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["sortFieldId"]) ? $context["sortFieldId"] : $this->getContext($context, "sortFieldId")), "html", null, true);
            echo "').val(num);
                        }
                    ";
        }
        // line 15
        echo "
                    \$(this).find('.handle input').val(num);
                    num++;
                });

                \$.ajax({
                    url: '";
        // line 21
        echo $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_sort");
        echo "',
                    type: 'POST',
                    data: \$('#pim_enrich_attributegroup_sort').serialize()
                });
            }

            \$('#entities-sortable').sortable({
                handle: '.handle',
                containment: 'parent',
                tolerance: 'pointer',
                update: updateSortOrder
            });

            var buttons = [];
            ";
        // line 35
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_create")) {
            // line 36
            echo "                buttons.push(\$('<a>', {
                    'class': 'no-hash',
                    'data-toggle': 'tooltip',
                    'data-placement': 'right',
                    'data-original-title': '";
            // line 40
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.create.attribute group")), "html", null, true);
            echo "'
                }).html(
                    \$('<i>', { 'class': 'icon-plus-sign' })
                ).on('click', function() {
                    Backbone.history.navigate('url=";
            // line 44
            echo $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_create");
            echo "', { trigger: true });
                }).tooltip());
            ";
        }
        // line 47
        echo "
            \$('#group-container').sidebarize({ buttons: buttons });
        });
    }
);
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup:_js-handler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 47,  83 => 44,  76 => 40,  70 => 36,  68 => 35,  51 => 21,  43 => 15,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/* require(*/
/*     ['jquery', 'backbone', 'jquery-ui-full', 'jquery.sidebarize', 'bootstrap-tooltip'],*/
/*     function ($, Backbone){*/
/*         'use strict';*/
/*         $(function() {*/
/*             function updateSortOrder() {*/
/*                 var num = 0;*/
/*                 $('#entities-sortable').find('li').each(function() {*/
/*                     {% if currentGroup and sortFieldId %}*/
/*                         if ($(this).data('id') == '{{ currentGroup }}') {*/
/*                             $('#{{ sortFieldId }}').val(num);*/
/*                         }*/
/*                     {% endif %}*/
/* */
/*                     $(this).find('.handle input').val(num);*/
/*                     num++;*/
/*                 });*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ path("pim_enrich_attributegroup_sort") }}',*/
/*                     type: 'POST',*/
/*                     data: $('#pim_enrich_attributegroup_sort').serialize()*/
/*                 });*/
/*             }*/
/* */
/*             $('#entities-sortable').sortable({*/
/*                 handle: '.handle',*/
/*                 containment: 'parent',*/
/*                 tolerance: 'pointer',*/
/*                 update: updateSortOrder*/
/*             });*/
/* */
/*             var buttons = [];*/
/*             {% if resource_granted('pim_enrich_attribute_group_create') %}*/
/*                 buttons.push($('<a>', {*/
/*                     'class': 'no-hash',*/
/*                     'data-toggle': 'tooltip',*/
/*                     'data-placement': 'right',*/
/*                     'data-original-title': '{{ "btn.create.attribute group"|trans|capitalize }}'*/
/*                 }).html(*/
/*                     $('<i>', { 'class': 'icon-plus-sign' })*/
/*                 ).on('click', function() {*/
/*                     Backbone.history.navigate('url={{ path("pim_enrich_attributegroup_create") }}', { trigger: true });*/
/*                 }).tooltip());*/
/*             {% endif %}*/
/* */
/*             $('#group-container').sidebarize({ buttons: buttons });*/
/*         });*/
/*     }*/
/* );*/
/* </script>*/
/* */
