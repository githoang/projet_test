<?php

/* OroUserBundle:Include:fields.html.twig */
class __TwigTemplate_27917db1654a5dcfb1186ed8479052f4e96db84932648ae1bc7e12acef5a5ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_change_password_widget' => array($this, 'block_oro_change_password_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_change_password_widget', $context, $blocks);
    }

    public function block_oro_change_password_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_password", array()), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Include:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  31 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block oro_change_password_widget %}*/
/*     {{ form_errors(form) }}*/
/*     {{ form_row(form.current_password) }}*/
/*     {{ form_row(form.new_password) }}*/
/* {%  endblock %}*/
/* */
