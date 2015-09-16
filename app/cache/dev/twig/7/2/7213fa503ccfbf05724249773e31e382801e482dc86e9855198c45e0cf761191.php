<?php

/* OroUserBundle:Reset:checkEmail.html.twig */
class __TwigTemplate_689d55c90f74866367df7ef327b605a40035cdd653b0687e83993b07131d9807 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Reset:checkEmail.html.twig", 1);
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
    <form action=\"\" class=\"form-signin form-reset\">
        <div class=\"title-box\">
            <h1 class=\"oro-title\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"Akeneo\">
            </h1>
            <h2 class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Check Email"), "html", null, true);
        echo "</h2>
        </div>
        <fieldset>
            <h3 class=\"oro-justify\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("password_reset_email_sent", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")))), "html", null, true);
        echo "</h3>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("oro_default");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Go to homepage"), "html", null, true);
        echo "</a>
        </fieldset>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Reset:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  75 => 28,  69 => 25,  64 => 23,  58 => 19,  55 => 18,  49 => 16,  41 => 12,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
/*     <form action="" class="form-signin form-reset">*/
/*         <div class="title-box">*/
/*             <h1 class="oro-title">*/
/*                 <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="Akeneo">*/
/*             </h1>*/
/*             <h2 class="title">{{ 'Check Email'|trans }}</h2>*/
/*         </div>*/
/*         <fieldset>*/
/*             <h3 class="oro-justify">{{ 'password_reset_email_sent'|trans({ '%email%': email }) }}</h3>*/
/*             <a href="{{ path('oro_default') }}">{{ 'Go to homepage'|trans }}</a>*/
/*         </fieldset>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
