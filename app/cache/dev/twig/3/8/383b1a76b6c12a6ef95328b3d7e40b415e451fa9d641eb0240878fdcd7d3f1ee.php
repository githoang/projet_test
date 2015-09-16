<?php

/* OroUserBundle:Mail:reset.html.twig */
class __TwigTemplate_6f145972be2c8a2640f82140dd734051c0704e50ca4b15b5bd059bec2955d0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimUserBundle:Mail:layout.html.twig", "OroUserBundle:Mail:reset.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimUserBundle:Mail:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Hello, ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "!</h1>

";
        // line 6
        $context["url"] = $this->env->getExtension('routing')->getUrl("oro_user_reset_reset", array("token" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "confirmationToken", array())));
        // line 7
        echo "
<p>To reset your password - please visit <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "</a></p>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Mail:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'PimUserBundle:Mail:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* <h1>Hello, {{ user.username }}!</h1>*/
/* */
/* {% set url = url('oro_user_reset_reset', { token: user.confirmationToken }) %}*/
/* */
/* <p>To reset your password - please visit <a href="{{ url }}">{{ url }}</a></p>*/
/* {% endblock %}*/
/* */
