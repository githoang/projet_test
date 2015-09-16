<?php

/* OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig */
class __TwigTemplate_e3c007573cd2e5f98699f23345045b424ac1bd4012407edc08f7dc718c24165e extends Twig_Template
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
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["businessUnits"]) ? $context["businessUnits"] : $this->getContext($context, "businessUnits")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["businessUnit"]) {
            // line 3
            echo "    ";
            $context["isChecked"] = (((isset($context["hasId"]) ? $context["hasId"] : $this->getContext($context, "hasId"))) ? (($this->getAttribute($context["businessUnit"], "hasUser", array(), "any", true, true) && ($this->getAttribute($context["businessUnit"], "hasUser", array()) == 1))) : (false));
            // line 4
            echo "    ";
            $context["hasChildren"] = ($this->getAttribute($context["businessUnit"], "children", array(), "any", true, true) && $this->getAttribute($context["businessUnit"], "children", array()));
            // line 5
            echo "    <li class=\"";
            if ((isset($context["isChecked"]) ? $context["isChecked"] : $this->getContext($context, "isChecked"))) {
                echo "jstree-checked";
            }
            echo " ";
            if ((isset($context["hasChildren"]) ? $context["hasChildren"] : $this->getContext($context, "hasChildren"))) {
                echo "jstree-open";
            } else {
                echo "jstree-leaf";
            }
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["businessUnit"], "id", array()), "html", null, true);
            echo "\">
        <a href=\"#\" for=\"resource_";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["businessUnit"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["businessUnit"], "name", array())), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["businessUnit"], "name", array())), "html", null, true);
            echo "</a>

        ";
            // line 8
            if ((isset($context["hasChildren"]) ? $context["hasChildren"] : $this->getContext($context, "hasChildren"))) {
                // line 9
                echo "            ";
                $this->loadTemplate("OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig", "OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig", 9)->display(array_merge($context, array("businessUnits" => $this->getAttribute($context["businessUnit"], "children", array()))));
                // line 10
                echo "        ";
            }
            // line 11
            echo "    </li>
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['businessUnit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 13,  77 => 11,  74 => 10,  71 => 9,  69 => 8,  60 => 6,  45 => 5,  42 => 4,  39 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/* {% for businessUnit in businessUnits %}*/
/*     {% set isChecked = hasId ? (businessUnit.hasUser is defined and businessUnit.hasUser == 1) : false%}*/
/*     {% set hasChildren = businessUnit.children is defined and businessUnit.children %}*/
/*     <li class="{% if isChecked %}jstree-checked{% endif %} {% if hasChildren %}jstree-open{% else %}jstree-leaf{% endif %}" data-id="{{ businessUnit.id }}">*/
/*         <a href="#" for="resource_{{ businessUnit.id }}" title="{{ businessUnit.name|trans }}">{{ businessUnit.name|trans }}</a>*/
/* */
/*         {% if hasChildren %}*/
/*             {% include 'OroOrganizationBundle:BusinessUnit:businessUnitsTree.html.twig' with {'businessUnits': businessUnit.children}  %}*/
/*         {% endif %}*/
/*     </li>*/
/* {% endfor %}*/
/* </ul>*/
/* */
