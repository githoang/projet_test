<?php

/* PimEnrichBundle:CategoryTree/Tab:property.html.twig */
class __TwigTemplate_4e980a552a599af9dfba85ed337fed3129ea4b002c2046e630a7bf4d891a68b3 extends Twig_Template
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
        $context["generalProperties"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
    ";
        $context["nodeValues"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.general_properties" => (isset($context["generalProperties"]) ? $context["generalProperties"] : $this->getContext($context, "generalProperties")), "pane.accordion.node_values" => (isset($context["nodeValues"]) ? $context["nodeValues"] : $this->getContext($context, "nodeValues")))), "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree/Tab:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  45 => 9,  39 => 7,  37 => 6,  34 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-property {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% set generalProperties %}*/
/*         {{ form_row(form.code) }}*/
/*     {% endset %}*/
/* */
/*     {% set nodeValues %}*/
/*         {{ form_row(form.label) }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.accordion({ 'pane.accordion.general_properties': generalProperties, 'pane.accordion.node_values': nodeValues }) }}*/
/* </div>*/
/* */
