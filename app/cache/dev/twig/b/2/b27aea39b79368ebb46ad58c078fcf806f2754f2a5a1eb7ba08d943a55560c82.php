<?php

/* PimEnrichBundle:Form:simple_layout.html.twig */
class __TwigTemplate_4c5921eae8ae9440a8f30fdb73d9a5c9a9ca047cc9bcd789e7ae8d5fef475228 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Form:simple_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     {{ form_widget(form) }}*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
