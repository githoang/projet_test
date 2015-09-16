<?php

/* PimEnrichBundle:Family/Tab:property.html.twig */
class __TwigTemplate_da7af7c1ce6f4841cf3e7d28019ded2c79e1647ff9a94f8f09e2d283872d1b00 extends Twig_Template
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
        echo "<div class=\"tab-pane tab-property ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeAsLabel", array()), 'row');
        echo "
    ";
        $context["generalProperties"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.general_properties" =>         // line 8
(isset($context["generalProperties"]) ? $context["generalProperties"] : $this->getContext($context, "generalProperties")), "pane.accordion.locale_values" =>         // line 9
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row'))), "method"), "html", null, true);
        // line 10
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Family/Tab:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  43 => 9,  42 => 8,  41 => 7,  38 => 6,  33 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-property {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% set generalProperties %}*/
/*         {{ form_row(form.code) }}*/
/*         {{ form_row(form.attributeAsLabel) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.accordion({*/
/*         'pane.accordion.general_properties': generalProperties,*/
/*         'pane.accordion.locale_values': form_row(form.label)*/
/*     }) }}*/
/* </div>*/
/* */
