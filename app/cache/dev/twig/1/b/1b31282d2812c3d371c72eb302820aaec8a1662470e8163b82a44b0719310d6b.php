<?php

/* PimEnrichBundle:Form/Tab:history.html.twig */
class __TwigTemplate_a9fd7a88e636122f4c315770cf21baf2f8a1005e7e67729211f71c91cdfe32c8 extends Twig_Template
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
        if ( !array_key_exists("dataGrid", $context)) {
            // line 2
            echo "    ";
            $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Form/Tab:history.html.twig", 2);
        }
        // line 4
        echo "
<div class=\"tab-pane tab-history ";
        // line 5
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 6
        echo $context["dataGrid"]->getrenderHistoryGrid($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Form/Tab:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if dataGrid is not defined %}*/
/*     {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {% endif %}*/
/* */
/* <div class="tab-pane tab-history {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {{ dataGrid.renderHistoryGrid(form.vars.value) }}*/
/* </div>*/
/* */
