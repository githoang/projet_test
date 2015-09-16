<?php

/* OroUserBundle:Security:login.html.twig */
class __TwigTemplate_5eaf067942910a60c6856a07a1dd658a7299695d482ca683dec53aaeafbb621a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"all\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/css/oro.css"), "html", null, true);
        echo "\" />
    ";
        // line 6
        // asset "d8d5cd9"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8d5cd9") : $this->env->getExtension('assets')->getAssetUrl("css/pim_all.css");
        // line 13
        echo "        <link rel=\"stylesheet\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
    ";
        unset($context["asset_url"]);
        // line 15
        echo "    <script type=\"text/javascript\">
        if (sessionStorage) {
            sessionStorage.clear()
        }
    </script>
";
    }

    // line 22
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"container\">
    ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 27
            echo "    <div class=\"alert alert-error\">
        <button data-dismiss=\"alert\" class=\"close\" type=\"button\">&times;</button>
        <div>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))), "html", null, true);
            echo "</div>
    </div>
    ";
        }
        // line 32
        echo "
    <form action=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("oro_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            <h1 class=\"oro-title\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"Akeneo\">
            </h1>
        </div>
        <fieldset>
            <div class=\"input-prepend\">
                <label for=\"prependedInput\" class=\"add-on\" title=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\"><i class=\"icon-user\"></i></label>
                <input type=\"text\" id=\"prependedInput\" autofocus=\"autofocus\" class=\"span2\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"input-prepend\">
                <label for=\"prependedInput2\" class=\"add-on\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\"><i class=\"icon-lock\"></i></label>
                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <div class=\"form-row\">
                <label class=\"checkbox\">
                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me on this computer"), "html", null, true);
        echo "
                </label>
            </div>
            <div class=\"form-row\">
                <button type=\"submit\" class=\"btn btn-large btn-primary\" id=\"_submit\" name=\"_submit\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log in"), "html", null, true);
        echo "</button>
            </div>
            <div class=\"signin-help\">
                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("oro_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
            </div>
        </fieldset>
        <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 61,  137 => 57,  131 => 54,  124 => 50,  117 => 46,  113 => 45,  105 => 42,  101 => 41,  93 => 36,  87 => 33,  84 => 32,  78 => 29,  74 => 27,  72 => 26,  69 => 25,  66 => 24,  60 => 22,  51 => 15,  45 => 13,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUserBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" media="all" href="{{ asset('/css/oro.css') }}" />*/
/*     {% stylesheets*/
/*         'bundles/pimui/css/pim.less'*/
/* */
/*         debug=false*/
/*         filter='cssrewrite,lessphp'*/
/*         output='css/pim_all.css'*/
/*     %}*/
/*         <link rel="stylesheet" media="all" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     <script type="text/javascript">*/
/*         if (sessionStorage) {*/
/*             sessionStorage.clear()*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block bodyClass %}login-page{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     {% if error %}*/
/*     <div class="alert alert-error">*/
/*         <button data-dismiss="alert" class="close" type="button">&times;</button>*/
/*         <div>{{ error|trans }}</div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('oro_user_security_check') }}" method="post" class="form-signin">*/
/*         <div class="title-box">*/
/*             <h1 class="oro-title">*/
/*                 <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="Akeneo">*/
/*             </h1>*/
/*         </div>*/
/*         <fieldset>*/
/*             <div class="input-prepend">*/
/*                 <label for="prependedInput" class="add-on" title="{{ 'Username or Email'|trans }}"><i class="icon-user"></i></label>*/
/*                 <input type="text" id="prependedInput" autofocus="autofocus" class="span2" name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'Username or Email'|trans }}" />*/
/*             </div>*/
/*             <div class="input-prepend">*/
/*                 <label for="prependedInput2" class="add-on" title="{{ 'Password'|trans }}"><i class="icon-lock"></i></label>*/
/*                 <input type="password" id="prependedInput2" class="span2" name="_password" required="required" placeholder="{{ 'Password'|trans }}" autocomplete="off" />*/
/*             </div>*/
/*             <div class="form-row">*/
/*                 <label class="checkbox">*/
/*                     <input type="checkbox" id="remember_me" name="_remember_me" value="on" /> {{ 'Remember me on this computer'|trans }}*/
/*                 </label>*/
/*             </div>*/
/*             <div class="form-row">*/
/*                 <button type="submit" class="btn btn-large btn-primary" id="_submit" name="_submit">{{ 'Log in'|trans }}</button>*/
/*             </div>*/
/*             <div class="signin-help">*/
/*                 <a href="{{ path('oro_user_reset_request') }}">{{ 'Forgot your password?'|trans }}</a>*/
/*             </div>*/
/*         </fieldset>*/
/*         <input type="hidden" name="_target_path" value="" />*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*     </form>*/
/* </div>*/
/* {% endblock content %}*/
/* */
