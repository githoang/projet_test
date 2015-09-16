<?php

/* OroNavigationBundle:HashNav:redirect.html.twig */
class __TwigTemplate_bf680b905212d0c6878adac49cb17ac0d59ef3d4807c4239dc636630feb03176 extends Twig_Template
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
        $context["data"] = array("redirect" => true, "fullRedirect" =>         // line 3
(isset($context["full_redirect"]) ? $context["full_redirect"] : $this->getContext($context, "full_redirect")), "location" =>         // line 4
(isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        // line 6
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  21 => 4,  20 => 3,  19 => 1,);
    }
}
/* {% set data = {*/
/*     'redirect': true,*/
/*     'fullRedirect': full_redirect,*/
/*     'location': location*/
/* } %}*/
/* {{ data|json_encode|raw }}*/
