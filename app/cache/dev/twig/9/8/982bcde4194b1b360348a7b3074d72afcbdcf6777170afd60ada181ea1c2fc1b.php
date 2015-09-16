<?php

/* PimEnrichBundle:CategoryTree:_scripts.html.twig */
class __TwigTemplate_ff28a3cb8a0f9d0946789742ac8b79f083d8aaee5970292906587b1bb17db861 extends Twig_Template
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
        ['jquery', 'backbone', 'pim/tree/manage', 'jquery.sidebarize', 'bootstrap-tooltip'],
        function(\$, Backbone, TreeManage){
            'use strict';
            \$(function() {
                var buttons = [];
                ";
        // line 8
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_create")) {
            // line 9
            echo "                    buttons.push(\$('<a>', {
                        'class': 'no-hash',
                        'data-toggle': 'tooltip',
                        'data-placement': 'right',
                        'data-original-title': '";
            // line 13
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.create.tree")), "html", null, true);
            echo "'
                    }).html(
                        \$('<i>', { 'class': 'icon-plus-sign' })
                    ).on('click', function () {
                        Backbone.history.navigate('url=";
            // line 17
            echo $this->env->getExtension('routing')->getPath("pim_enrich_categorytree_create");
            echo "', { trigger: true });
                    }).tooltip());
                ";
        }
        // line 20
        echo "                // Instantiate sidebar
                \$('#category-tree-container').sidebarize({ buttons: buttons });
                new TreeManage('#tree');
            });
        }
    );
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:_scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 20,  43 => 17,  36 => 13,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'backbone', 'pim/tree/manage', 'jquery.sidebarize', 'bootstrap-tooltip'],*/
/*         function($, Backbone, TreeManage){*/
/*             'use strict';*/
/*             $(function() {*/
/*                 var buttons = [];*/
/*                 {% if resource_granted('pim_enrich_category_create') %}*/
/*                     buttons.push($('<a>', {*/
/*                         'class': 'no-hash',*/
/*                         'data-toggle': 'tooltip',*/
/*                         'data-placement': 'right',*/
/*                         'data-original-title': '{{ "btn.create.tree"|trans|capitalize }}'*/
/*                     }).html(*/
/*                         $('<i>', { 'class': 'icon-plus-sign' })*/
/*                     ).on('click', function () {*/
/*                         Backbone.history.navigate('url={{ path("pim_enrich_categorytree_create") }}', { trigger: true });*/
/*                     }).tooltip());*/
/*                 {% endif %}*/
/*                 // Instantiate sidebar*/
/*                 $('#category-tree-container').sidebarize({ buttons: buttons });*/
/*                 new TreeManage('#tree');*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
