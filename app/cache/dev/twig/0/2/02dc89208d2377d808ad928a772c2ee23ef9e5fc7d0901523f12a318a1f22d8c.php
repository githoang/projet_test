<?php

/* OroNavigationBundle:Menu:navbar.html.twig */
class __TwigTemplate_9a06a9faa68e6bdcdf633e9432609cf695d61fc73c2cb66bef1e85e5beed24d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'brand' => array($this, 'block_brand'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'label' => array($this, 'block_label'),
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
        echo "    <div class=\"navbar\">
        <div class=\"navbar-inner\">
            ";
        // line 6
        $this->displayBlock("brand", $context, $blocks);
        echo "

            ";
        // line 8
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 9
        echo "            ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 9);
        // line 10
        echo "            ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" =>         // line 11
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "nav"))));
        // line 13
        echo "            ";
        $this->displayBlock("list", $context, $blocks);
        // line 14
        echo "</div>
    </div>
";
    }

    // line 18
    public function block_brand($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "brand"), "method"))) {
            // line 20
            echo "        ";
            $context["brandLink"] = (( !(null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "brandLink"), "method"))) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "brandLink"), "method")) : ("/"));
            // line 21
            echo "        <a class=\"brand\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["brandLink"]) ? $context["brandLink"] : $this->getContext($context, "brandLink")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "brand"), "method"), "html", null, true);
            echo "</a>
    ";
        }
    }

    // line 25
    public function block_item($context, array $blocks = array())
    {
        // line 26
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 27
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 0)) {
                // line 28
                $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
                // line 29
                echo "        ";
            }
            // line 30
            echo "        ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) {
                // line 31
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 32
                echo "        ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) {
                // line 33
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown-submenu"));
                // line 34
                echo "        ";
            }
        }
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 41
    public function block_linkElement($context, array $blocks = array())
    {
        // line 42
        if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 43
            echo "        ";
            $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:navbar.html.twig", 43);
            // line 44
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("class" =>             // line 45
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
        }
        // line 48
        echo "
    ";
        // line 49
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
";
    }

    // line 52
    public function block_label($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $this->displayParentBlock("label", $context, $blocks);
        echo "
    ";
        // line 54
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) == 1)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 55
            echo "        <b class=\"caret\"></b>
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 55,  146 => 54,  141 => 53,  138 => 52,  132 => 49,  129 => 48,  126 => 45,  125 => 44,  122 => 43,  120 => 42,  117 => 41,  111 => 38,  108 => 37,  104 => 34,  102 => 33,  99 => 32,  97 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  56 => 14,  53 => 13,  51 => 11,  49 => 10,  46 => 9,  44 => 8,  39 => 6,  35 => 4,  32 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     <div class="navbar">*/
/*         <div class="navbar-inner">*/
/*             {{ block('brand') }}*/
/* */
/*             {% set listAttributes = item.childrenAttributes %}*/
/*             {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*             {% set listAttributes = listAttributes|merge(*/
/*                 {'class': oro_menu.add_attribute_values(listAttributes, 'class', ['nav'])}*/
/*             ) %}*/
/*             {{ block('list') -}}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block brand %}*/
/*     {% if item.extra('brand') is not none %}*/
/*         {% set brandLink = item.extra('brandLink') is not null ? item.extra('brandLink') : '/' %}*/
/*         <a class="brand" href="{{ brandLink }}">{{ item.extra('brand')}}</a>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {%- if item.hasChildren and item.displayChildren %}*/
/*         {% if item.level > 0 %}*/
/*             {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}*/
/*         {% endif %}*/
/*         {% if item.level == 1 %}*/
/*             {%- set classes = classes|merge(['dropdown']) %}*/
/*         {% elseif item.level > 1 %}*/
/*             {%- set classes = classes|merge(['dropdown-submenu']) %}*/
/*         {% endif %}*/
/* */
/*     {%- endif %}*/
/* */
/*     {{ block('item_renderer') }}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {%- if item.level == 1 and item.hasChildren and item.displayChildren %}*/
/*         {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*         {%- set linkAttributes = linkAttributes|merge(*/
/*             {'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['dropdown-toggle']), 'data-toggle': 'dropdown'}*/
/*         ) %}*/
/*     {%- endif %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block label %}*/
/*     {{ parent() }}*/
/*     {% if item.hasChildren and item.level == 1 and item.displayChildren %}*/
/*         <b class="caret"></b>*/
/*     {%  endif %}*/
/* {% endblock %}*/
/* */
