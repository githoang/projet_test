<?php

/* PimEnrichBundle:Group/Tab:history.html.twig */
class __TwigTemplate_c86ae557d129c79839e13d79776d62507eee2fcda5383301dca52cc7f2cef764 extends Twig_Template
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
        echo "<div class=\"tab-pane tab-history ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_group_history", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group/Tab:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div class="tab-pane tab-history {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}" data-url="{{ path('pim_enrich_group_history', {id: form.vars.value.id}) }}"></div>*/
/* */
