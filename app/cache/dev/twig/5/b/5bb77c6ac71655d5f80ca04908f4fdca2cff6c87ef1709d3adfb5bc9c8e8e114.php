<?php

/* OroUserBundle::layout.html.twig */
class __TwigTemplate_d5239d42d3c5702a7beef70fd32d5aa9a7a7f2866662dc15c960328afe972894 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "    ";
        $this->loadTemplate("OroWindowsBundle:Include:javascript.html.twig", "OroUserBundle::layout.html.twig", 49)->display($context);
        $this->loadTemplate("OroLocaleBundle::locale_settings.html.twig", "OroUserBundle::layout.html.twig", 49)->display($context);
        // line 50
        echo "</head>
<body class=\"";
        // line 51
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <div id=\"top-page\">
            ";
        // line 54
        ob_start();
        // line 55
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 56
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 57
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 58
                    echo "                    <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 59
                    echo $this->env->getExtension('translator')->trans($context["message"]);
                    echo "
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            ";
        }
        // line 64
        echo "            ";
        $context["messagesContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 65
        echo "
            ";
        // line 66
        $this->displayBlock('messages', $context, $blocks);
        // line 69
        echo "
            ";
        // line 70
        $this->displayBlock('header', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "        </div>
    </div>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 8
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 9
            echo "        <script type=\"text/javascript\">localStorage.clear();</script>
        <link rel=\"stylesheet/less\" media=\"all\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/css/less/main.less"), "html", null, true);
            echo "\" />
        <script type=\"text/javascript\" src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
            echo "\"></script>
        <link rel=\"stylesheet\" media=\"all\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/css/all.css"), "html", null, true);
            echo "\" />
    ";
        } else {
            // line 14
            echo "        ";
            // asset "28aa99f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28aa99f") : $this->env->getExtension('assets')->getAssetUrl("css/oro.user.css");
            // line 22
            echo "        <link rel=\"stylesheet\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            unset($context["asset_url"]);
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUserBundle::layout.html.twig", 26)->display(array_merge($context, array("compressed" => false)));
        // line 27
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap', 'oro/init-layout', 'orouser/js/init-signin'],
        function(\$) {
            \$(function() {
                // emulates 'document ready state' for selenium tests
                document['page-rendered'] = true;
            });
        });
    </script>

    <!--[if lte IE 9]>
    <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
    <script type=\"text/javascript\">
        require(['jquery', 'bundles/oroui/lib/html5', 'bundles/oroui/lib/jquery/jquery.placeholder'],
        function(\$){
            \$(function() {
                \$('input[placeholder], textarea[placeholder]').placeholder();
            });
        });
    </script>
    <![endif]-->
    ";
    }

    // line 51
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 66
    public function block_messages($context, array $blocks = array())
    {
        // line 67
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) ? $context["messagesContent"] : $this->getContext($context, "messagesContent")), "html", null, true);
        echo "
            ";
    }

    // line 70
    public function block_header($context, array $blocks = array())
    {
        // line 71
        echo "            ";
    }

    // line 73
    public function block_main($context, array $blocks = array())
    {
        // line 74
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "            ";
    }

    // line 74
    public function block_content($context, array $blocks = array())
    {
        // line 75
        echo "                ";
    }

    public function getTemplateName()
    {
        return "OroUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  215 => 74,  211 => 76,  208 => 74,  205 => 73,  201 => 71,  198 => 70,  191 => 67,  188 => 66,  183 => 51,  168 => 38,  155 => 27,  153 => 26,  150 => 25,  147 => 24,  141 => 22,  137 => 14,  132 => 12,  128 => 11,  124 => 10,  121 => 9,  119 => 8,  112 => 5,  109 => 4,  101 => 77,  99 => 73,  96 => 72,  94 => 70,  91 => 69,  89 => 66,  86 => 65,  83 => 64,  80 => 63,  74 => 62,  65 => 59,  60 => 58,  55 => 57,  50 => 56,  47 => 55,  45 => 54,  39 => 51,  36 => 50,  32 => 49,  30 => 4,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% block head %}*/
/*     <title>{{ oro_title_render() }}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {% if app.debug %}*/
/*         <script type="text/javascript">localStorage.clear();</script>*/
/*         <link rel="stylesheet/less" media="all" href="{{ asset('bundles/oroui/css/less/main.less') }}" />*/
/*         <script type="text/javascript" src="{{ asset('bundles/oroui/lib/less-1.3.3.min.js') }}"></script>*/
/*         <link rel="stylesheet" media="all" href="{{ asset('bundles/oroui/css/all.css') }}" />*/
/*     {% else %}*/
/*         {% stylesheets*/
/*             'bundles/oroui/css/all.css'*/
/*             'bundles/oroui/css/less/main.less'*/
/* */
/*             debug=false*/
/*             filter='cssrewrite,lessphp'*/
/*             output='css/oro.user.css'*/
/*         %}*/
/*         <link rel="stylesheet" media="all" href="{{ asset_url }}" />*/
/*         {% endstylesheets %}*/
/*     {% endif %}*/
/* */
/*     {% include 'OroRequireJSBundle::scripts.html.twig' with {compressed: false} %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'bootstrap', 'oro/init-layout', 'orouser/js/init-signin'],*/
/*         function($) {*/
/*             $(function() {*/
/*                 // emulates 'document ready state' for selenium tests*/
/*                 document['page-rendered'] = true;*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <!--[if lte IE 9]>*/
/*     <link href="{{ asset('bundles/oroui/css/ie.css') }}" rel="stylesheet" media="all" />*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'bundles/oroui/lib/html5', 'bundles/oroui/lib/jquery/jquery.placeholder'],*/
/*         function($){*/
/*             $(function() {*/
/*                 $('input[placeholder], textarea[placeholder]').placeholder();*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <![endif]-->*/
/*     {% endblock %}*/
/*     {% placeholder scripts_after %}*/
/* </head>*/
/* <body class="{% block bodyClass %}{% endblock %}">*/
/*     <div id="page">*/
/*         <div id="top-page">*/
/*             {% set messagesContent %}*/
/*             {% if app.session.flashbag.peekAll|length > 0 %}*/
/*                 {% for type, messages in app.session.flashbag.all %}*/
/*                     {% for message in messages %}*/
/*                     <div class="alert{{ type ? ' alert-'~type : '' }}">*/
/*                     {{ message|trans|raw }}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             {% endset %}*/
/* */
/*             {% block messages %}*/
/*                 {{ messagesContent }}*/
/*             {% endblock %}*/
/* */
/*             {% block header %}*/
/*             {% endblock header %}*/
/* */
/*             {% block main %}*/
/*                 {% block content %}*/
/*                 {% endblock content %}*/
/*             {% endblock main %}*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
