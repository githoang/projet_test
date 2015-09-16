<?php

/* OroNavigationBundle:Menu:_htabs.html.twig */
class __TwigTemplate_5ef62807e9837feaf5c06ca45b57a53e072f7a38e4539aa0ee96d8450785a2f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
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
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "        ";
            $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 5);
            // line 6
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" =>             // line 7
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "nav", 1 => "nav-tabs"))));
            // line 9
            echo "        <ul";
            echo $context["oro_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 10
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
    }

    // line 15
    public function block_item($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => 2), "method")) {
            // line 17
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
    }

    // line 22
    public function block_linkElement($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 23);
        // line 24
        echo "    ";
        $context["itemLink"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array());
        // line 25
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 26
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("data-toggle" => "tab"));
            // line 27
            echo "        ";
            $context["itemLink"] = ("#" . trim(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), array(" " => "_", "#" => "_")))));
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("class" =>             // line 30
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), "class", array(0 => "empty"))));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["itemLink"]) ? $context["itemLink"] : $this->getContext($context, "itemLink")), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 33,  99 => 32,  97 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  80 => 24,  77 => 23,  74 => 22,  67 => 19,  64 => 18,  62 => 17,  59 => 16,  56 => 15,  48 => 10,  43 => 9,  41 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block list %}*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*         {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*         {% set listAttributes = listAttributes|merge(*/
/*         {'class': oro_menu.add_attribute_values(listAttributes, 'class', ['nav', 'nav-tabs'])})*/
/*         %}*/
/*         <ul{{ oro_menu.attributes(listAttributes) }}>*/
/*             {{ block('children') }}*/
/*         </ul>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {% if matcher.isAncestor(item, 2) %}*/
/*         {%- set classes = classes|merge([options.ancestorClass]) %}*/
/*     {% endif %}*/
/*     {{ block('item_renderer') }}*/
/* {% endblock %}*/
/* */
/* {% block linkElement %}*/
/*     {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/*     {% set itemLink = item.uri %}*/
/*     {% if item.hasChildren and item.displayChildren %}*/
/*         {% set linkAttributes = linkAttributes|merge({'data-toggle': 'tab'}) %}*/
/*         {% set itemLink = '#' ~ item.name|replace({' ': '_', '#': '_'})|lower|trim %}*/
/*     {% else %}*/
/*         {% set linkAttributes = linkAttributes|merge(*/
/*         {'class': oro_menu.add_attribute_values(linkAttributes, 'class', ['empty'])})*/
/*         %}*/
/*     {% endif %}*/
/*     <a href="{{ itemLink }}"{{ oro_menu.attributes(linkAttributes) }}>{{ block('label') }}</a>*/
/* {% endblock %}*/
/* */
