<?php

/* PimEnrichBundle:Group/Tab:property.html.twig */
class __TwigTemplate_04dbd2eab27ab352b1af4b02b607c630f3e7f90dc40493e61c0aa9d47e647eec extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'row');
        echo "
        ";
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "type", array()), "isVariant", array())) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributes", array()), 'row');
            echo "
        ";
        }
        // line 8
        echo "    ";
        $context["generalProperties"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.general_properties" =>         // line 10
(isset($context["generalProperties"]) ? $context["generalProperties"] : $this->getContext($context, "generalProperties")), "pane.accordion.label" =>         // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row'))), "method"), "html", null, true);
        // line 12
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group/Tab:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  51 => 11,  50 => 10,  48 => 9,  45 => 8,  39 => 6,  37 => 5,  33 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-property {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% set generalProperties %}*/
/*         {{ form_row(form.code) }}*/
/*         {{ form_row(form.type) }}*/
/*         {% if form.vars.data.type.isVariant %}*/
/*             {{ form_row(form.attributes) }}*/
/*         {% endif %}*/
/*     {% endset %}*/
/*     {{ elements.accordion({*/
/*         'pane.accordion.general_properties': generalProperties,*/
/*         'pane.accordion.label': form_row(form.label)*/
/*     }) }}*/
/* </div>*/
/* */
