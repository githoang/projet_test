<?php

/* OroNavigationBundle:Menu:mostviewed.html.twig */
class __TwigTemplate_caf407c1321df7b3d352431577520fe4d4609baf2e7c186e799e5ae22c0389b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:history.html.twig", "OroNavigationBundle:Menu:mostviewed.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_linkElement($context, array $blocks = array())
    {
        // line 4
        if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
            // line 5
            echo "        <a class=\"menu-close\" href=\"#\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : $this->getContext($context, "oro_menu")), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes"))), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        } else {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : $this->getContext($context, "oro_menu")), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes"))), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:mostviewed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:history.html.twig' %}*/
/* */
/* {% block linkElement %}*/
/*     {%- if matcher.isCurrent(item) %}*/
/*         <a class="menu-close" href="#"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/*     {%- else %}*/
/*         <a href="{{ item.uri }}"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/*     {%- endif %}*/
/* {% endblock %}*/
/* */
