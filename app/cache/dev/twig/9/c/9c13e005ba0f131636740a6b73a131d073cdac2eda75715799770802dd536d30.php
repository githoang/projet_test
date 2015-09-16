<?php

/* PimEnrichBundle:AssociationType/Tab:property.html.twig */
class __TwigTemplate_d803ce56b490dfb8d1cb087b7d6dbc1f9f8cbf0b16a6b5a3550adbe22b868db3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.general_properties" =>         // line 3
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row'), "pane.accordion.locale_values" =>         // line 4
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row'))), "method"), "html", null, true);
        // line 5
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AssociationType/Tab:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  28 => 4,  27 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-property {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {{ elements.accordion({*/
/*         'pane.accordion.general_properties': form_row(form.code),*/
/*         'pane.accordion.locale_values': form_row(form.label)*/
/*     }) }}*/
/* </div>*/
/* */
