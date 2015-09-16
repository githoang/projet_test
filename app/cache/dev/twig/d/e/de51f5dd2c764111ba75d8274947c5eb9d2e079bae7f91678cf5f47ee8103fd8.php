<?php

/* OroUserBundle:Reset:request.html.twig */
class __TwigTemplate_31e308a099c9865152b0e9a9600514dc75fdf1c6ef80dba65a6f356368a9a716 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Reset:request.html.twig", 1);
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
    ";
        // line 5
        // asset "d8d5cd9"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8d5cd9") : $this->env->getExtension('assets')->getAssetUrl("css/pim_all.css");
        // line 12
        echo "    <link rel=\"stylesheet\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
    ";
        unset($context["asset_url"]);
    }

    // line 16
    public function block_bodyClass($context, array $blocks = array())
    {
        echo "login-page";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"container\">
    <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("oro_user_reset_send_email");
        echo "\" method=\"post\" class=\"form-signin form-reset\">
        <div class=\"title-box\">
            <h1 class=\"oro-title\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"Akeneo\">
            </h1>
            <h2 class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot Password"), "html", null, true);
        echo "</h2>
        </div>

        ";
        // line 28
        if (array_key_exists("invalid_username", $context)) {
            // line 29
            echo "        <div class=\"well-small-oro\">
            <div class=\"alert alert-error\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("The username or email address \"%username%\" does not exist.", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username")))), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 35
        echo "
        <fieldset class=\"oro-forgot-password\">
            <div class=\"input-prepend\">
                <input type=\"text\" id=\"prepended-input-request\" class=\"span2 input-request\" name=\"username\" required=\"required\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\" autofocus=\"autofocus\"/>
            </div>
            <div class=\"form-row\">
                <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("oro_user_security_login");
        echo "\" class=\"btn extra-btn-large btn-large\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn extra-submit btn-large btn-primary\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Request"), "html", null, true);
        echo "</button>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 42,  102 => 41,  96 => 38,  91 => 35,  84 => 31,  80 => 29,  78 => 28,  72 => 25,  67 => 23,  61 => 20,  58 => 19,  55 => 18,  49 => 16,  41 => 12,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUserBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/*     {% stylesheets*/
/*         'bundles/pimui/css/pim.less'*/
/* */
/*         debug=false*/
/*         filter='cssrewrite,lessphp'*/
/*         output='css/pim_all.css'*/
/*     %}*/
/*     <link rel="stylesheet" media="all" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/* {% endblock %}*/
/* */
/* {% block bodyClass %}login-page{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="container">*/
/*     <form action="{{ path('oro_user_reset_send_email') }}" method="post" class="form-signin form-reset">*/
/*         <div class="title-box">*/
/*             <h1 class="oro-title">*/
/*                 <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="Akeneo">*/
/*             </h1>*/
/*             <h2 class="title">{{ 'Forgot Password'|trans }}</h2>*/
/*         </div>*/
/* */
/*         {% if invalid_username is defined %}*/
/*         <div class="well-small-oro">*/
/*             <div class="alert alert-error">*/
/*                 {{ 'The username or email address "%username%" does not exist.'|trans({ '%username%': invalid_username }) }}*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <fieldset class="oro-forgot-password">*/
/*             <div class="input-prepend">*/
/*                 <input type="text" id="prepended-input-request" class="span2 input-request" name="username" required="required" placeholder="{{ 'Username or Email'|trans }}" autofocus="autofocus"/>*/
/*             </div>*/
/*             <div class="form-row">*/
/*                 <a href="{{ path('oro_user_security_login') }}" class="btn extra-btn-large btn-large">{{ 'Cancel'|trans }}</a>*/
/*                 <button type="submit" class="btn extra-submit btn-large btn-primary">{{ 'Request'|trans }}</button>*/
/*             </div>*/
/*         </fieldset>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
