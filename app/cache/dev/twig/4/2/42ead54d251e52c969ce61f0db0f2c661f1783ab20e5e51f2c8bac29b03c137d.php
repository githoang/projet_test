<?php

/* OroRequireJSBundle::scripts.html.twig */
class __TwigTemplate_99fd03e0db639990b61617a00f33ed99897af40ccf7996c4742edf535d938aa7 extends Twig_Template
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
        if (((isset($context["compressed"]) ? $context["compressed"] : $this->getContext($context, "compressed")) && call_user_func_array($this->env->getFunction('requirejs_build_exists')->getCallable(), array()))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        ";
            // line 8
            $this->loadTemplate("OroUIBundle::requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 8)->display($context);
            $this->loadTemplate("OroTranslationBundle::requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 8)->display($context);
            $this->loadTemplate("OroNavigationBundle:Js:requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 8)->display($context);
            $this->loadTemplate("PimUIBundle::pim.requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 8)->display($context);
            // line 9
            echo "        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(call_user_func_array($this->env->getFunction('get_requirejs_build_path')->getCallable(), array())), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 13
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ororequirejs/lib/require.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        ";
            // line 15
            echo call_user_func_array($this->env->getFunction('get_requirejs_config')->getCallable(), array());
            echo "
    </script>
    <script type=\"text/javascript\">
        ";
            // line 18
            $this->loadTemplate("OroUIBundle::requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 18)->display($context);
            $this->loadTemplate("OroTranslationBundle::requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 18)->display($context);
            $this->loadTemplate("OroNavigationBundle:Js:requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 18)->display($context);
            $this->loadTemplate("PimUIBundle::pim.requirejs.config.js.twig", "OroRequireJSBundle::scripts.html.twig", 18)->display($context);
            // line 19
            echo "    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  55 => 18,  49 => 15,  43 => 13,  38 => 11,  34 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% if compressed and requirejs_build_exists() %}*/
/*     <script type="text/javascript">*/
/*         var require = (function(){*/
/*             var r=function(c){m(r.c,c)};r.c={};function m(a,b){*/
/*                 for (var i in b)b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}*/
/*             return r;*/
/*         }());*/
/*         {% placeholder requirejs_config_extend %}*/
/*         require = require.c;*/
/*     </script>*/
/*     <script type="text/javascript" src="{{ asset(get_requirejs_build_path()) }}"></script>*/
/* {% else %}*/
/*     <script type="text/javascript" src="{{ asset('bundles/ororequirejs/lib/require.js') }}"></script>*/
/*     <script type="text/javascript">*/
/*         {{ get_requirejs_config() }}*/
/*     </script>*/
/*     <script type="text/javascript">*/
/*         {% placeholder requirejs_config_extend %}*/
/*     </script>*/
/* {% endif %}*/
