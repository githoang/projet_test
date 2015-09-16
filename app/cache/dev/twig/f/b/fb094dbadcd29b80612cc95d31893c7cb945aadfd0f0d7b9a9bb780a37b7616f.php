<?php

/* OroUIBundle::skype_button.html.twig */
class __TwigTemplate_39793b3fe42179c0532a2ef5f250676f71aeaa1c53473f9e80c8126e6ab35271 extends Twig_Template
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
        echo "<a href=\"skype:";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "participants", array()), ";"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "name", array()), "html", null, true);
        echo "\"
    class=\"skype-button\"
    id=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "element", array()), "html", null, true);
        echo "\"><i class=\"icon-skype\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Call"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::skype_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  19 => 1,);
    }
}
/* <a href="skype:{{ options.participants|join(';') }}?{{ options.name }}"*/
/*     class="skype-button"*/
/*     id="{{ options.element }}"><i class="icon-skype"></i> {{ 'Call'|trans }}</a>*/
/* */
