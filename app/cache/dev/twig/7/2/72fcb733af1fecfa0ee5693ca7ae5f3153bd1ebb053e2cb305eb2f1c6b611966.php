<?php

/* OroUserBundle:Reset:reset.html.twig */
class __TwigTemplate_97b5330b48dd9b61378e4fc3c979963de446133b295274ec6f8339c06427ee21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Reset:reset.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_user_reset_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"post\" class=\"form-signin\">
        <div class=\"title-box\">
            <h1 class=\"oro-title\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"Akeneo\">
            </h1>
            <h2 class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password Reset"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset>
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'widget');
        echo "
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            <div class=\"form-row\">
                <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("oro_user_security_login");
        echo "\" class=\"btn btn-large extra-btn-large\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn btn-large extra-submit btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html", null, true);
        echo "</button>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  93 => 32,  88 => 30,  84 => 29,  80 => 28,  74 => 25,  69 => 23,  61 => 20,  58 => 19,  55 => 18,  49 => 16,  41 => 12,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
/*     <form action="{{ path('oro_user_reset_reset', { token: token }) }}" {{ form_enctype(form) }} method="post" class="form-signin">*/
/*         <div class="title-box">*/
/*             <h1 class="oro-title">*/
/*                 <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="Akeneo">*/
/*             </h1>*/
/*             <h2 class="title">{{ 'Password Reset'|trans }}</h2>*/
/*         </div>*/
/*         <fieldset>*/
/*             {{ form_errors(form) }}*/
/*             {{ form_widget(form.plainPassword) }}*/
/*             {{ form_widget(form._token) }}*/
/*             <div class="form-row">*/
/*                 <a href="{{ path('oro_user_security_login') }}" class="btn btn-large extra-btn-large">{{ 'Cancel'|trans }}</a>*/
/*                 <button type="submit" class="btn btn-large extra-submit btn-primary">{{ 'Reset'|trans }}</button>*/
/*             </div>*/
/*         </fieldset>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
