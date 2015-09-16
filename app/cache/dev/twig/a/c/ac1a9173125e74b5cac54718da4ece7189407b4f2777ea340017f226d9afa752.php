<?php

/* OroUIBundle:Form:login.html.twig */
class __TwigTemplate_ffbe88412aedd938f9c48e9922b4cc6a50149b43644b512b7da96f3446462e80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('form_label', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"input-prepend";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " error";
        }
        echo "\">
            <span class=\"add-on\">";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "control-label"))));
        echo "</span>
                ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_form_label($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  59 => 11,  51 => 6,  47 => 5,  43 => 4,  36 => 3,  33 => 2,  30 => 1,  26 => 11,  23 => 10,  21 => 1,);
    }
}
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="input-prepend{% if errors|length > 0 %} error{% endif %}">*/
/*             <span class="add-on">{{ form_label(form, '' , { label_attr: label_attr|merge({ class: 'control-label' })}) }}</span>*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_label %}*/
/*     {% spaceless %}*/
/*         {{ label|trans({}, translation_domain) }}*/
/*     {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
