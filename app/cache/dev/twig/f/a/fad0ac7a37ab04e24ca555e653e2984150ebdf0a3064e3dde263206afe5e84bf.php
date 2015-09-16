<?php

/* OroNavigationBundle:Menu:_tabs-content.html.twig */
class __TwigTemplate_7f15094a73f6d01bc1a748662dd60d306f4b084ae54908b2958216dab06bde9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_tabs-content.html.twig", 1);
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
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_tabs-content.html.twig", 4);
        // line 5
        echo "
    ";
        // line 6
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 7
        echo "    ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => $context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "nav", 1 => "nav-pills"))));
        // line 8
        echo "
    <div class=\"tab-content\">
        ";
        // line 10
        $context["items"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "            ";
            $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["item"], "extras", array()), "showNonAuthorized", array()));
            // line 13
            echo "            ";
            $context["displayable"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : $this->getContext($context, "showNonAuthorized")));
            // line 14
            echo "            ";
            if ((((isset($context["displayable"]) ? $context["displayable"] : $this->getContext($context, "displayable")) && $this->getAttribute($context["item"], "hasChildren", array())) && $this->getAttribute($context["item"], "displayChildren", array()))) {
                // line 15
                echo "                ";
                $context["tabClasses"] = array(0 => "tab-pane");
                // line 16
                echo "                ";
                $context["tabClasses"] = (($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => $context["item"], 1 => 2), "method")) ? (twig_array_merge((isset($context["tabClasses"]) ? $context["tabClasses"] : $this->getContext($context, "tabClasses")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())))) : ((isset($context["tabClasses"]) ? $context["tabClasses"] : $this->getContext($context, "tabClasses"))));
                // line 17
                echo "                ";
                $context["tabClasses"] = (($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => $context["item"]), "method")) ? (twig_array_merge((isset($context["tabClasses"]) ? $context["tabClasses"] : $this->getContext($context, "tabClasses")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())))) : ((isset($context["tabClasses"]) ? $context["tabClasses"] : $this->getContext($context, "tabClasses"))));
                // line 18
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["tabClasses"]) ? $context["tabClasses"] : $this->getContext($context, "tabClasses")), " "), "html", null, true);
                echo "\"
                     id=\"";
                // line 19
                echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["item"], "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
                echo "\">
                    ";
                // line 20
                $this->displayBlock("list", $context, $blocks);
                // line 21
                echo "</div>
            ";
            }
            // line 23
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        ";
        $context["item"] = (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"));
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  113 => 24,  99 => 23,  95 => 21,  93 => 20,  89 => 19,  84 => 18,  81 => 17,  78 => 16,  75 => 15,  72 => 14,  69 => 13,  66 => 12,  48 => 11,  46 => 10,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block root %}*/
/*     {% import 'OroNavigationBundle:Menu:menu.html.twig' as oro_menu %}*/
/* */
/*     {% set listAttributes = item.childrenAttributes %}*/
/*     {% set listAttributes = listAttributes|merge({'class': oro_menu.add_attribute_values(listAttributes, 'class', ['nav', 'nav-pills'])}) %}*/
/* */
/*     <div class="tab-content">*/
/*         {% set items = item %}*/
/*         {% for item in items %}*/
/*             {% set showNonAuthorized = item.extras.showNonAuthorized is defined and item.extras.showNonAuthorized %}*/
/*             {% set displayable = item.extras.isAllowed or showNonAuthorized %}*/
/*             {% if displayable and item.hasChildren and item.displayChildren %}*/
/*                 {% set tabClasses = ['tab-pane'] %}*/
/*                 {% set tabClasses = matcher.isAncestor(item, 2) ? tabClasses|merge([options.ancestorClass]) : tabClasses %}*/
/*                 {% set tabClasses = matcher.isCurrent(item) ? tabClasses|merge([options.currentClass]) : tabClasses %}*/
/*                 <div class="{{ tabClasses|join(' ')  }}"*/
/*                      id="{{- item.name|replace({' ': '_', '#': '_'})|lower|trim -}}">*/
/*                     {{ block('list') -}}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*         {% set item = items %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
