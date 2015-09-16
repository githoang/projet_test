<?php

/* OroUIBundle:Js:jquery_jstree.config.js.twig */
class __TwigTemplate_d62039b91559165f781604365e965a3f2b4b57ca2f2c3c34405a45d23182e3ad extends Twig_Template
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
        echo "<script type='text/javascript'>
require(['underscore', 'jquery', 'jquery.jstree'],
function(_, \$){
    \$(function() {
        \$.jstree._themes = ";
        // line 5
        echo twig_jsonencode_filter($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/jstree/themes/"));
        echo ";
        _.extend(\$.jstree.defaults, {
            plugins: ['themes', 'html_data', 'ui', 'checkbox', 'hotkeys']
        });
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Js:jquery_jstree.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
/* <script type='text/javascript'>*/
/* require(['underscore', 'jquery', 'jquery.jstree'],*/
/* function(_, $){*/
/*     $(function() {*/
/*         $.jstree._themes = {{ asset('bundles/oroui/lib/jstree/themes/')|json_encode|raw }};*/
/*         _.extend($.jstree.defaults, {*/
/*             plugins: ['themes', 'html_data', 'ui', 'checkbox', 'hotkeys']*/
/*         });*/
/*     });*/
/* });*/
/* </script>*/
/* */
