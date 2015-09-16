<?php

/* OroInstallerBundle::layout.html.twig */
class __TwigTemplate_65ebd4ef1dc92f5fcba16b152d7aeca7dab14003d48ee37c5495e19a241c59cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascript' => array($this, 'block_javascript'),
            'progress' => array($this, 'block_progress'),
            'content' => array($this, 'block_content'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<!--[if IE 7 ]><html class=\"no-js ie ie7\" lang=\"en\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"en\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"en\"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroinstaller/css/style.css"), "html", null, true);
        echo "\" />
    <script type=\"text/javascript\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroinstaller/lib/jquery-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroinstaller/lib/jquery.ajaxQueue.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 14
        $this->displayBlock('javascript', $context, $blocks);
        // line 68
        echo "</head>
<body>
    <header class=\"header\">
        <h1 class=\"logo\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title"), "html", null, true);
        echo "</h1>
    </header>
    <div class=\"wrapper\">
        <div class=\"content\">
            ";
        // line 75
        $this->displayBlock('progress', $context, $blocks);
        // line 76
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "        </div>
    </div>
    ";
        // line 79
        $this->displayBlock('bottom', $context, $blocks);
        // line 80
        echo "</body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title"), "html", null, true);
    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        // line 15
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$('.progress-bar li:last-child em.fix-bg').width(\$('.progress-bar li:last-child').width() / 2);
            \$('.progress-bar li:first-child em.fix-bg').width(\$('.progress-bar li:first-child').width() / 2);

            \$('form').submit(function () {
                \$(this).find(':submit').attr('disabled', true).addClass('disabled');
            });

        });

        function ajaxQueue(actions, url) {
            var finRes = true;

            \$.each(actions, function(i) {
                var stepCon = \$('#step-' + this);

                stepCon.closest('tr').find('td:last').text('";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("wait"), "html", null, true);
        echo "');

                if (i == 0) {
                    stepCon
                        .addClass('icon-wait')
                        .closest('tr').find('td:last').text('";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("progress"), "html", null, true);
        echo "');
                }

                \$.ajaxQueue({
                    url: '?action=' + this,
                }).done(function(data) {
                    var curRes = typeof data.result != 'undefined' && data.result;
                        finRes = finRes || curRes;

                    stepCon
                        .removeClass('icon-wait')
                        .addClass('icon-' + (curRes ? 'yes' : 'no'))
                        .closest('tr')
                            .find('td:last').text(curRes ? '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("passed"), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("failed"), "html", null, true);
        echo "').end()
                        .closest('tr').next()
                            .find('td:last').text('";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("progress"), "html", null, true);
        echo "').end()
                            .find('span').addClass('icon-wait');

                    if (i == actions.length - 1 && finRes) {
                        \$('a.primary').removeClass('disabled').attr('href', url);
                    }
                }).fail(function() {
                    stepCon
                        .removeClass('icon-wait')
                        .addClass('icon-no')
                        .closest('tr').find('td:last').text('";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("failed"), "html", null, true);
        echo "');
                });
            });
        }
    </script>
    ";
    }

    // line 75
    public function block_progress($context, array $blocks = array())
    {
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 79
    public function block_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 79,  169 => 76,  164 => 75,  154 => 62,  141 => 52,  134 => 50,  118 => 37,  110 => 32,  91 => 15,  88 => 14,  82 => 9,  76 => 80,  74 => 79,  70 => 77,  67 => 76,  65 => 75,  58 => 71,  53 => 68,  51 => 14,  47 => 13,  43 => 12,  39 => 11,  34 => 9,  24 => 1,);
    }
}
/* <!doctype html>*/
/* <!--[if IE 7 ]><html class="no-js ie ie7" lang="en"> <![endif]-->*/
/* <!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->*/
/* <!--[if IE 9 ]><html class="no-js ie ie9" lang="en"> <![endif]-->*/
/* <!--[if (gte IE 10)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*     <title>{% block title %}{{ 'title'|trans }}{% endblock %}</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('bundles/oroinstaller/css/style.css') }}" />*/
/*     <script type="text/javascript" src="{{ asset('bundles/oroinstaller/lib/jquery-2.0.3.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/oroinstaller/lib/jquery.ajaxQueue.min.js') }}"></script>*/
/*     {% block javascript %}*/
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.progress-bar li:last-child em.fix-bg').width($('.progress-bar li:last-child').width() / 2);*/
/*             $('.progress-bar li:first-child em.fix-bg').width($('.progress-bar li:first-child').width() / 2);*/
/* */
/*             $('form').submit(function () {*/
/*                 $(this).find(':submit').attr('disabled', true).addClass('disabled');*/
/*             });*/
/* */
/*         });*/
/* */
/*         function ajaxQueue(actions, url) {*/
/*             var finRes = true;*/
/* */
/*             $.each(actions, function(i) {*/
/*                 var stepCon = $('#step-' + this);*/
/* */
/*                 stepCon.closest('tr').find('td:last').text('{{ 'wait'|trans }}');*/
/* */
/*                 if (i == 0) {*/
/*                     stepCon*/
/*                         .addClass('icon-wait')*/
/*                         .closest('tr').find('td:last').text('{{ 'progress'|trans }}');*/
/*                 }*/
/* */
/*                 $.ajaxQueue({*/
/*                     url: '?action=' + this,*/
/*                 }).done(function(data) {*/
/*                     var curRes = typeof data.result != 'undefined' && data.result;*/
/*                         finRes = finRes || curRes;*/
/* */
/*                     stepCon*/
/*                         .removeClass('icon-wait')*/
/*                         .addClass('icon-' + (curRes ? 'yes' : 'no'))*/
/*                         .closest('tr')*/
/*                             .find('td:last').text(curRes ? '{{ 'passed'|trans }}' : '{{ 'failed'|trans }}').end()*/
/*                         .closest('tr').next()*/
/*                             .find('td:last').text('{{ 'progress'|trans }}').end()*/
/*                             .find('span').addClass('icon-wait');*/
/* */
/*                     if (i == actions.length - 1 && finRes) {*/
/*                         $('a.primary').removeClass('disabled').attr('href', url);*/
/*                     }*/
/*                 }).fail(function() {*/
/*                     stepCon*/
/*                         .removeClass('icon-wait')*/
/*                         .addClass('icon-no')*/
/*                         .closest('tr').find('td:last').text('{{ 'failed'|trans }}');*/
/*                 });*/
/*             });*/
/*         }*/
/*     </script>*/
/*     {% endblock javascript %}*/
/* </head>*/
/* <body>*/
/*     <header class="header">*/
/*         <h1 class="logo">{{ 'title'|trans }}</h1>*/
/*     </header>*/
/*     <div class="wrapper">*/
/*         <div class="content">*/
/*             {% block progress %}{% endblock %}*/
/*             {% block content %}{% endblock %}*/
/*         </div>*/
/*     </div>*/
/*     {% block bottom %}{% endblock bottom %}*/
/* </body>*/
/* </html>*/
/* */
