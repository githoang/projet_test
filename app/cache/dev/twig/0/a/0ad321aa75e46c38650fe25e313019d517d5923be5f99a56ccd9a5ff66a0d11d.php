<?php

/* PimEnrichBundle:Product/Tab:association.html.twig */
class __TwigTemplate_43ef2e919b2b69502ca1c5ec8ef8b521325beddbd4a25aefd4455c3167dd8850 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "associations", array()), 'widget', array("attr" => array("class" => "hide")));
        echo "
<div class=\"tab-pane ";
        // line 2
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_associations", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product/Tab:association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {{ form_widget(form.associations, { 'attr': { 'class': 'hide' }}) }}*/
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}" data-url="{{ path('pim_enrich_associations', { id: product.id , dataLocale: dataLocale}) }}">*/
/* </div>*/
/* */
