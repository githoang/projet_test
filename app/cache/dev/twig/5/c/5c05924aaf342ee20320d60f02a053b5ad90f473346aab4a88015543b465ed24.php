<?php

/* OroNavigationBundle:Menu:dropdown.html.twig */
class __TwigTemplate_0acc02f9f4515cb43cafd65ca3c9fb1c9b3d369f1af99ae5dedec5c694c1b1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 5
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 5);
        // line 6
        echo "    ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" =>         // line 8
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "dropdown-menu")), "role" => "menu", "aria-labelledby" => "dropdownMenu"));
        // line 12
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  39 => 8,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {% set listAttributes = item.childrenAttributes %}*/
/*     {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*     {% set listAttributes = listAttributes|merge(*/
/*         {*/
/*             'class': oro_menu.add_attribute_values(listAttributes, 'class', ['dropdown-menu']),*/
/*             'role': 'menu', 'aria-labelledby': 'dropdownMenu'*/
/*         }*/
/*     ) %}*/
/*     {{ block('list') -}}*/
/* {% endblock %}*/
/* */
