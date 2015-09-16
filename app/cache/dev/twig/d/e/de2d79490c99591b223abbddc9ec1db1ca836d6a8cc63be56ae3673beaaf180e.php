<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_b8e0a73c3663aaf4acaafa144da67f6b4736dd6bad4573c0d6b6ef35bb0422f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'script' => array($this, 'block_script'),
            'scripts_before' => array($this, 'block_scripts_before'),
            'hash_nav' => array($this, 'block_hash_nav'),
            'head_script' => array($this, 'block_head_script'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'main' => array($this, 'block_main'),
            'right_panel' => array($this, 'block_right_panel'),
            'left_panel' => array($this, 'block_left_panel'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'messages' => array($this, 'block_messages'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !$this->env->getExtension('oro_hash_nav')->checkIsHashNavigation()) {
            // line 2
            echo "    <!DOCTYPE html>
    <html>
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 45
            echo "    </head>
    <body class=\"";
            // line 46
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 48
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 49
            echo $this->env->getExtension('translator')->getTranslator()->trans("Loading ...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 56
            $this->displayBlock('header', $context, $blocks);
            // line 91
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 193
            echo "        </div>
    </div>
    ";
            // line 196
            echo "    </body>
    </html>
";
        } else {
            // line 200
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "OroUIBundle:Default:index.html.twig", 200)->display(array_merge($context, array("script" => $this->renderBlock("head_script", $context, $blocks), "content" => $this->renderBlock("page_container", $context, $blocks), "menu" => $this->renderBlock("application_menu", $context, $blocks), "breadcrumb" => $this->renderBlock("breadcrumb", $context, $blocks), "userMenu" => $this->renderBlock("user_menu", $context, $blocks))));
        }
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            ";
        // line 9
        $this->displayBlock('head_style', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('script', $context, $blocks);
        // line 44
        echo "        ";
    }

    // line 9
    public function block_head_style($context, array $blocks = array())
    {
        // line 10
        echo "                <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
               ";
        // line 11
        $this->loadTemplate("OroAsseticBundle:Assets:oro_css.html.twig", "OroUIBundle:Default:index.html.twig", 11)->display($context);
        // line 12
        echo "            ";
    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        // line 15
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 18
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUIBundle:Default:index.html.twig", 18)->display(array_merge($context, array("compressed" =>  !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array()))));
        // line 19
        echo "                <script type=\"text/javascript\">
                    require(['oro/init-layout', 'oro/init-user', 'oro/widget-manager', 'jquery.uniform']);
                ";
        // line 21
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 22
            echo "                    require(['oro/app'], function(app){app.debug = true;});
                ";
        }
        // line 24
        echo "                </script>
                <!--[if lte IE 9]>
                <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/css/ie.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\" />
                <script type=\"text/javascript\">
                    require.config({shim: {'oroui/lib/jquery/jquery.placeholder': {deps: ['jquery']}}});
                    require(['jquery', 'oroui/lib/html5', 'oroui/lib/jquery/jquery.placeholder'],
                    function(\$){
                        \$(function() {
                            \$('input[placeholder], textarea[placeholder]').placeholder();
                        });
                    });
                </script>
                <![endif]-->
                ";
        // line 37
        $this->displayBlock('hash_nav', $context, $blocks);
        // line 40
        echo "                ";
        $this->loadTemplate("OroWindowsBundle:Include:javascript.html.twig", "OroUIBundle:Default:index.html.twig", 40)->display($context);
        $this->loadTemplate("OroLocaleBundle::locale_settings.html.twig", "OroUIBundle:Default:index.html.twig", 40)->display($context);
        // line 41
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 43
        echo "            ";
    }

    // line 15
    public function block_scripts_before($context, array $blocks = array())
    {
        // line 16
        echo "                    ";
        $this->loadTemplate("OroNavigationBundle:Js:dot.menu.js.twig", "OroUIBundle:Default:index.html.twig", 16)->display($context);
        $this->loadTemplate("OroNavigationBundle:Js:pinbar.js.twig", "OroUIBundle:Default:index.html.twig", 16)->display($context);
        // line 17
        echo "                ";
    }

    // line 37
    public function block_hash_nav($context, array $blocks = array())
    {
        // line 38
        echo "                    ";
        $this->loadTemplate("OroNavigationBundle:HashNav:script.js.twig", "OroUIBundle:Default:index.html.twig", 38)->display($context);
        // line 39
        echo "                ";
    }

    // line 41
    public function block_head_script($context, array $blocks = array())
    {
        // line 42
        echo "                ";
    }

    // line 46
    public function block_bodyClass($context, array $blocks = array())
    {
    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        // line 57
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 58
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig", "OroUIBundle:Default:index.html.twig", 58)->display($context);
        // line 59
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 61
        $this->loadTemplate("OroUIBundle:Default:logo.html.twig", "OroUIBundle:Default:index.html.twig", 61)->display($context);
        // line 62
        echo "                            <div class=\"navbar-responsive-collapse\">
                                ";
        // line 63
        $this->displayBlock('navbar', $context, $blocks);
        // line 68
        echo "                                <div class=\"divider-vertical small-divider\"></div>
                                <div id=\"main-menu\">
                                    ";
        // line 70
        $this->displayBlock('application_menu', $context, $blocks);
        // line 73
        echo "                                 </div>
                                ";
        // line 74
        $this->displayBlock('user_menu', $context, $blocks);
        // line 85
        echo "                            </div>
                        </div>
                    </div>
                    ";
        // line 89
        echo "                </header>
            ";
    }

    // line 63
    public function block_navbar($context, array $blocks = array())
    {
        // line 64
        echo "                                <div class=\"nav pull-left top-search shortcuts\">
                                    ";
        // line 65
        $this->loadTemplate("OroNavigationBundle:Shortcut:shortcuts.html.twig", "OroUIBundle:Default:index.html.twig", 65)->display($context);
        // line 66
        echo "                                </div>
                                ";
    }

    // line 70
    public function block_application_menu($context, array $blocks = array())
    {
        // line 71
        echo "                                        ";
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig", "OroUIBundle:Default:index.html.twig", 71)->display($context);
        // line 72
        echo "                                    ";
    }

    // line 74
    public function block_user_menu($context, array $blocks = array())
    {
        // line 75
        echo "                                    <ul class=\"nav pull-right user-menu\">
                                        ";
        // line 76
        $this->loadTemplate("PimNotificationBundle:Default:notifications.html.twig", "OroUIBundle:Default:index.html.twig", 76)->display($context);
        $this->loadTemplate("OroUserBundle:Menu:menuProfile.html.twig", "OroUIBundle:Default:index.html.twig", 76)->display($context);
        $this->loadTemplate("OroUIBundle:Default:help.html.twig", "OroUIBundle:Default:index.html.twig", 76)->display($context);
        // line 77
        echo "                                        ";
        // line 83
        echo "                                    </ul>
                                ";
    }

    // line 91
    public function block_main($context, array $blocks = array())
    {
        // line 92
        echo "                <div id=\"main\" >
                    ";
        // line 93
        $this->displayBlock('right_panel', $context, $blocks);
        // line 96
        echo "                    ";
        $this->displayBlock('left_panel', $context, $blocks);
        // line 99
        echo "                    ";
        $this->displayBlock('before_content', $context, $blocks);
        // line 141
        echo "                    <div class=\"hash-loading-mask\"></div>
                    <div id=\"container\" class=\"scrollable-container\">
                        ";
        // line 143
        $this->displayBlock('page_container', $context, $blocks);
        // line 190
        echo "                    </div>
                </div>
            ";
    }

    // line 93
    public function block_right_panel($context, array $blocks = array())
    {
        // line 94
        echo "                        ";
        // line 95
        echo "                    ";
    }

    // line 96
    public function block_left_panel($context, array $blocks = array())
    {
        // line 97
        echo "                        ";
        // line 98
        echo "                    ";
    }

    // line 99
    public function block_before_content($context, array $blocks = array())
    {
        // line 100
        echo "                    <div class=\"container-fluid breadcrumb-pin\">
                        <div id=\"breadcrumb\">
                            ";
        // line 102
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 105
        echo "                        </div>
                        ";
        // line 106
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:pinButton.html.twig", "OroUIBundle:Default:index.html.twig", 106)->display($context);
        // line 107
        echo "                        <div id=\"flash-messages\">
                            ";
        // line 108
        $this->displayBlock('messages', $context, $blocks);
        // line 137
        echo "                        </div>

                    </div>
                    ";
    }

    // line 102
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 103
        echo "                                ";
        $this->loadTemplate("OroNavigationBundle:ApplicationMenu:breabcrumbs.html.twig", "OroUIBundle:Default:index.html.twig", 103)->display($context);
        // line 104
        echo "                            ";
    }

    // line 108
    public function block_messages($context, array $blocks = array())
    {
        // line 109
        echo "                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"></div>
                                </div>
                                <script type=\"text/template\" id=\"message-item-template\">
                                    <div class=\"alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages \">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        <div class=\"message\"><%= message %></div>
                                    </div>
                                </script>
                                <script type=\"text/javascript\">
                                    require(['jquery', 'oro/messenger'],
                                            function(\$, messenger) {
                                                messenger.setup({
                                                    container: '#flash-messages .flash-messages-holder',
                                                    template: _.template(\$.trim(\$('#message-item-template').html()))
                                                });
                                                ";
        // line 125
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 126
            echo "                                                \$(function() {
                                                    ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 128
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 129
                    echo "                                                    messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($context["message"]));
                    echo ");
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "                                                });
                                                ";
        }
        // line 134
        echo "                                            });
                                </script>
                            ";
    }

    // line 143
    public function block_page_container($context, array $blocks = array())
    {
        // line 144
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 189
        echo "                        ";
    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
        // line 145
        echo "                                ";
        // line 146
        echo "                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column");
        echo "\">1 column </a></li>
                                                <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_toolbar");
        echo "\">1 column with toolbar</a></li>
                                                <li><a href=\"";
        // line 154
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_menu");
        echo "\">1 column with menu</a></li>
                                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_page");
        echo "\">grid page</a></li>
                                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_without_bar_page");
        echo "\">grid page without bar</a></li>
                                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_left");
        echo "\">2 columns - left</a></li>
                                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_right");
        echo "\">2 columns - right</a></li>
                                                <li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("oro_ui_3columns");
        echo "\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("oro_ui_forgot_password");
        echo "\">Forgot password</a></li>
                                                <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("oro_ui_login");
        echo "\">Login page</a></li>
                                                <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("oro_ui_registration");
        echo "\">Registration page</a></li>
                                                <li><a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("oro_ui_404");
        echo "\">404</a></li>
                                                <li><a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("oro_ui_503");
        echo "\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 171
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_elements");
        echo "\">Form elements</a></li>
                                                <li><a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_horizontal");
        echo "\">Form Horizontal</a></li>
                                                <li><a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("oro_ui_messages");
        echo "\">System messages</a></li>
                                                <li><a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("oro_ui_title_bar");
        echo "\">Entity Title Bar</a></li>
                                                <li><a href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("oro_ui_buttons");
        echo "\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("oro_ui_tables");
        echo "\">Tables</a></li>
                                                <li><a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("oro_ui_general_elements");
        echo "\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 182
        echo $this->env->getExtension('routing')->getPath("oro_ui_dialog_styled");
        echo "\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 188
        echo "                            ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 188,  542 => 182,  535 => 178,  531 => 177,  526 => 175,  522 => 174,  518 => 173,  514 => 172,  510 => 171,  503 => 167,  499 => 166,  495 => 165,  491 => 164,  487 => 163,  480 => 159,  476 => 158,  472 => 157,  468 => 156,  464 => 155,  460 => 154,  456 => 153,  452 => 152,  444 => 146,  442 => 145,  439 => 144,  435 => 189,  432 => 144,  429 => 143,  423 => 134,  419 => 132,  413 => 131,  402 => 129,  397 => 128,  393 => 127,  390 => 126,  388 => 125,  370 => 109,  367 => 108,  363 => 104,  360 => 103,  357 => 102,  350 => 137,  348 => 108,  345 => 107,  343 => 106,  340 => 105,  338 => 102,  334 => 100,  331 => 99,  327 => 98,  325 => 97,  322 => 96,  318 => 95,  316 => 94,  313 => 93,  307 => 190,  305 => 143,  301 => 141,  298 => 99,  295 => 96,  293 => 93,  290 => 92,  287 => 91,  282 => 83,  280 => 77,  276 => 76,  273 => 75,  270 => 74,  266 => 72,  263 => 71,  260 => 70,  255 => 66,  253 => 65,  250 => 64,  247 => 63,  242 => 89,  237 => 85,  235 => 74,  232 => 73,  230 => 70,  226 => 68,  224 => 63,  221 => 62,  219 => 61,  215 => 59,  213 => 58,  210 => 57,  207 => 56,  202 => 46,  198 => 42,  195 => 41,  191 => 39,  188 => 38,  185 => 37,  181 => 17,  177 => 16,  174 => 15,  170 => 43,  167 => 41,  163 => 40,  161 => 37,  147 => 26,  143 => 24,  139 => 22,  137 => 21,  133 => 19,  130 => 18,  127 => 15,  124 => 14,  120 => 12,  118 => 11,  113 => 10,  110 => 9,  106 => 44,  104 => 14,  101 => 13,  99 => 9,  94 => 7,  89 => 6,  86 => 5,  81 => 200,  76 => 196,  72 => 193,  69 => 91,  67 => 56,  57 => 49,  54 => 48,  50 => 46,  47 => 45,  45 => 5,  40 => 2,  38 => 1,);
    }
}
/* {% if not oro_is_hash_navigation() %}*/
/*     <!DOCTYPE html>*/
/*     <html>*/
/*     <head>*/
/*         {% block head %}*/
/*             <title>{% trans %}Loading...{% endtrans %}</title>*/
/*             <script id="page-title" type="text/html">{{ oro_title_render() }}</script>*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*             {% block head_style %}*/
/*                 <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*                {% placeholder head_style %}*/
/*             {% endblock %}*/
/* */
/*             {% block script %}*/
/*                 {% block scripts_before %}*/
/*                     {% placeholder scripts_before %}*/
/*                 {% endblock %}*/
/*                 {% include 'OroRequireJSBundle::scripts.html.twig' with {compressed: not app.debug} %}*/
/*                 <script type="text/javascript">*/
/*                     require(['oro/init-layout', 'oro/init-user', 'oro/widget-manager', 'jquery.uniform']);*/
/*                 {% if app.debug %}*/
/*                     require(['oro/app'], function(app){app.debug = true;});*/
/*                 {% endif %}*/
/*                 </script>*/
/*                 <!--[if lte IE 9]>*/
/*                 <link href="{{ asset('bundles/oroui/css/ie.css') }}" rel="stylesheet" media="all" />*/
/*                 <script type="text/javascript">*/
/*                     require.config({shim: {'oroui/lib/jquery/jquery.placeholder': {deps: ['jquery']}}});*/
/*                     require(['jquery', 'oroui/lib/html5', 'oroui/lib/jquery/jquery.placeholder'],*/
/*                     function($){*/
/*                         $(function() {*/
/*                             $('input[placeholder], textarea[placeholder]').placeholder();*/
/*                         });*/
/*                     });*/
/*                 </script>*/
/*                 <![endif]-->*/
/*                 {% block hash_nav %}*/
/*                     {% placeholder hash_nav %}*/
/*                 {% endblock %}*/
/*                 {% placeholder scripts_after %}*/
/*                 {% block head_script %}*/
/*                 {% endblock %}*/
/*             {% endblock %}*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="{% block bodyClass %}{% endblock %}">*/
/*     {% placeholder after_body_start %}*/
/*     <div id="progressbar">*/
/*         <h3>{% trans %}Loading ...{% endtrans %}</h3>*/
/*         <div class="progress progress-striped active">*/
/*             <div class="bar" style="width: 90%;"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div id="page" style="display:none;">*/
/*         <div id="top-page">*/
/*             {% block header %}*/
/*                 <header class="navbar" id="oroplatform-header">*/
/*                     {% placeholder before_navigation %}*/
/*                     <div class="navbar-inner">*/
/*                         <div class="container">*/
/*                             {% placeholder header_logo %}*/
/*                             <div class="navbar-responsive-collapse">*/
/*                                 {% block navbar %}*/
/*                                 <div class="nav pull-left top-search shortcuts">*/
/*                                     {% placeholder navbar %}*/
/*                                 </div>*/
/*                                 {% endblock navbar %}*/
/*                                 <div class="divider-vertical small-divider"></div>*/
/*                                 <div id="main-menu">*/
/*                                     {% block application_menu %}*/
/*                                         {% placeholder application_menu %}*/
/*                                     {% endblock application_menu %}*/
/*                                  </div>*/
/*                                 {% block user_menu %}*/
/*                                     <ul class="nav pull-right user-menu">*/
/*                                         {% placeholder user_menu %}*/
/*                                         {# Disabled notification icon till it will be implemented*/
/*                                         {% block notifications %}*/
/*                                         <li class="divider-vertical small-divider"></li>*/
/*                                         <li><a class="notifications" href="#"><i class="icon-bullhorn"></i><span class="badge badge-important">1</span></a></li>*/
/*                                         {% endblock notifications %}*/
/*                                         #}*/
/*                                     </ul>*/
/*                                 {% endblock %}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% placeholder after_navigation %}*/
/*                 </header>*/
/*             {% endblock header %}*/
/*             {% block main %}*/
/*                 <div id="main" >*/
/*                     {% block right_panel %}*/
/*                         {% placeholder right_panel %}*/
/*                     {% endblock right_panel %}*/
/*                     {% block left_panel %}*/
/*                         {% placeholder left_panel %}*/
/*                     {% endblock left_panel %}*/
/*                     {% block before_content %}*/
/*                     <div class="container-fluid breadcrumb-pin">*/
/*                         <div id="breadcrumb">*/
/*                             {% block breadcrumb %}*/
/*                                 {% placeholder breadcrumb %}*/
/*                             {% endblock breadcrumb %}*/
/*                         </div>*/
/*                         {% placeholder pin_button %}*/
/*                         <div id="flash-messages">*/
/*                             {% block messages %}*/
/*                                 <div class="flash-messages-frame">*/
/*                                     <div class="flash-messages-holder"></div>*/
/*                                 </div>*/
/*                                 <script type="text/template" id="message-item-template">*/
/*                                     <div class="alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages ">*/
/*                                         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*                                         <div class="message"><%= message %></div>*/
/*                                     </div>*/
/*                                 </script>*/
/*                                 <script type="text/javascript">*/
/*                                     require(['jquery', 'oro/messenger'],*/
/*                                             function($, messenger) {*/
/*                                                 messenger.setup({*/
/*                                                     container: '#flash-messages .flash-messages-holder',*/
/*                                                     template: _.template($.trim($('#message-item-template').html()))*/
/*                                                 });*/
/*                                                 {% if app.session.flashbag.peekAll|length > 0 %}*/
/*                                                 $(function() {*/
/*                                                     {% for type, messages in app.session.flashbag.all %}*/
/*                                                     {% for message in messages %}*/
/*                                                     messenger.notificationFlashMessage({{ type|json_encode|raw }}, {{ message|trans|json_encode|raw }});*/
/*                                                     {% endfor %}*/
/*                                                     {% endfor %}*/
/*                                                 });*/
/*                                                 {% endif %}*/
/*                                             });*/
/*                                 </script>*/
/*                             {% endblock messages %}*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                     {% endblock before_content %}*/
/*                     <div class="hash-loading-mask"></div>*/
/*                     <div id="container" class="scrollable-container">*/
/*                         {% block page_container %}*/
/*                             {% block content %}*/
/*                                 {% placeholder content_before %}*/
/*                                 <div class="container" style="background: #fff">*/
/*                                     <div class="row">*/
/*                                         <div class="span4">*/
/*                                             <hr />*/
/*                                             <h3>Layout pages</h3>*/
/*                                             <ul>*/
/*                                                 <li><a href="{{ path('oro_ui_1column') }}">1 column </a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_1column_toolbar') }}">1 column with toolbar</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_1column_menu') }}">1 column with menu</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_grid_page') }}">grid page</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_grid_without_bar_page') }}">grid page without bar</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_2columns_left') }}">2 columns - left</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_2columns_right') }}">2 columns - right</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_3columns') }}">3 columns</a></li>*/
/*                                             </ul>*/
/*                                             <h3>Static pages</h3>*/
/*                                             <ul>*/
/*                                                 <li><a href="{{ path('oro_ui_forgot_password') }}">Forgot password</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_login') }}">Login page</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_registration') }}">Registration page</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_404') }}">404</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_503') }}">503</a></li>*/
/*                                             </ul>*/
/*                                             <h3>Example pages</h3>*/
/*                                             <ul>*/
/*                                                 <li><a href="{{ path('oro_ui_form_elements') }}">Form elements</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_form_horizontal') }}">Form Horizontal</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_messages') }}">System messages</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_title_bar') }}">Entity Title Bar</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_buttons') }}">Buttons</a></li>*/
/*                                                 <li><a href="#">Print page</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_tables') }}">Tables</a></li>*/
/*                                                 <li><a href="{{ path('oro_ui_general_elements') }}">General elements</a></li>*/
/*                                             </ul>*/
/*                                             <h3>Js use page</h3>*/
/*                                             <ul>*/
/*                                                 <li><a href="{{ path('oro_ui_dialog_styled') }}">jQuery Dialog styled</a></li>*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% placeholder content_after %}*/
/*                             {% endblock content %}*/
/*                         {% endblock page_container %}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock main %}*/
/*         </div>*/
/*     </div>*/
/*     {% placeholder before_body_end %}*/
/*     </body>*/
/*     </html>*/
/* {% else %}*/
/* {# Template for hash tag navigation#}*/
/* {% include 'OroNavigationBundle:HashNav:hashNavAjax.html.twig'*/
/*     with {*/
/*         'script': block('head_script'),*/
/*         'content': block('page_container'),*/
/*         'menu': block('application_menu'),*/
/*         'breadcrumb': block('breadcrumb'),*/
/*         'userMenu': block('user_menu')*/
/*     }*/
/*     %}*/
/* {% endif %}*/
/* */
