<?php

/* OroUIBundle:Default:logo.html.twig */
class __TwigTemplate_0d9a708be2a55d587ef03072c7924458b2e68e24ca6a96c40dd02f47a0775254 extends Twig_Template
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
        echo "<h1 class=\"logo\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("oro_default");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->getUserValue("oro_ui.application_title"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/pimui/images/logo.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('config_extension')->getUserValue("oro_ui.application_name"), "html", null, true);
        echo "\">
    </a>
</h1>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <h1 class="logo">*/
/*     <a href="{{ path('oro_default') }}" title="{{ oro_config_value('oro_ui.application_title') }}">*/
/*         <img src="{{ asset('/bundles/pimui/images/logo.png') }}" alt="{{ oro_config_value('oro_ui.application_name') }}">*/
/*     </a>*/
/* </h1>*/
/* */
