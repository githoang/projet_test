<?php

/* PimUserBundle:User/Tab:business_unit.html.twig */
class __TwigTemplate_27ce90920655d3b5d0ac76cf7b22aa94b5172b37dc40b518544385e9b9cd53dd extends Twig_Template
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
        echo "<div class=\"tab-pane ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    <div id=\"business_units_tree\">
        ";
        // line 3
        $this->loadTemplate("OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig", "PimUserBundle:User/Tab:business_unit.html.twig", 3)->display(array_merge($context, array("businessUnits" => (isset($context["businessUnits"]) ? $context["businessUnits"] : $this->getContext($context, "businessUnits")), "hasId" => (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? (true) : (false)))));
        // line 4
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimUserBundle:User/Tab:business_unit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  27 => 3,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     <div id="business_units_tree">*/
/*         {% include 'OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig' with {'businessUnits': businessUnits, 'hasId': form.vars.value.id ? true : false} %}*/
/*     </div>*/
/* </div>*/
/* */
