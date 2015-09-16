<?php

/* OroEntityConfigBundle:Audit:data.html.twig */
class __TwigTemplate_ca6535c01235c4a0ca57e6a38f80ee6584d2ed0a14d495d01176906b8e3c157d extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
            // line 3
            echo "    ";
            $context["items"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config_manager"]) ? $context["config_manager"] : $this->getContext($context, "config_manager")), "getProvider", array(0 => $this->getAttribute($context["val"], "scope", array())), "method"), "getPropertyConfig", array(), "method"), "getItems", array(0 => (((isset($context["is_entity"]) ? $context["is_entity"] : $this->getContext($context, "is_entity"))) ? ("entity") : ("type"))), "method");
            // line 4
            echo "
    ";
            // line 5
            if ((((isset($context["is_entity"]) ? $context["is_entity"] : $this->getContext($context, "is_entity")) && ($this->getAttribute($context["val"], "fieldName", array(), "method") == null)) || (((isset($context["is_entity"]) ? $context["is_entity"] : $this->getContext($context, "is_entity")) == false) && ($this->getAttribute($context["val"], "fieldName", array(), "method") == (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")))))) {
                // line 6
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["val"], "diff", array()));
                foreach ($context['_seq'] as $context["key"] => $context["data"]) {
                    // line 7
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["key"], array(), "array", false, true), "form", array(), "array", false, true), "options", array(), "array", false, true), "label", array(), "array", true, true)) {
                        // line 8
                        echo "                ";
                        $context["label"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), $context["key"], array(), "array"), "form", array(), "array"), "options", array(), "array"), "label", array(), "array");
                        // line 9
                        echo "            ";
                    } elseif ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["key"], array(), "array", false, true), "options", array(), "array", false, true), "label", array(), "array", true, true)) {
                        // line 10
                        echo "                ";
                        $context["label"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), $context["key"], array(), "array"), "options", array(), "array"), "label", array(), "array");
                        // line 11
                        echo "            ";
                    } else {
                        // line 12
                        echo "                ";
                        $context["label"] = twig_replace_filter(twig_capitalize_string_filter($this->env, $context["key"]), "_", " ");
                        // line 13
                        echo "            ";
                    }
                    // line 14
                    echo "            <li>
                <b>";
                    // line 15
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                    echo "</b>: <s>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["data"], 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], 0, array(), "array"), "N/A")) : ("N/A")), "html", null, true);
                    echo "</s> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], 1, array(), "array"), "html", null, true);
                    echo "
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Audit:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  76 => 18,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/* {% for val in value %}*/
/*     {% set items = config_manager.getProvider(val.scope).getPropertyConfig().getItems(is_entity ? 'entity' : 'type') %}*/
/* */
/*     {% if (is_entity and val.fieldName() == null) or (is_entity == false and val.fieldName() == field_name) %}*/
/*         {% for key, data in val.diff %}*/
/*             {% if items[key]['form']['options']['label'] is defined %}*/
/*                 {% set label = items[key]['form']['options']['label'] %}*/
/*             {% elseif items[key]['options']['label'] is defined %}*/
/*                 {% set label = items[key]['options']['label'] %}*/
/*             {% else %}*/
/*                 {% set label = key|capitalize|replace('_',' ') %}*/
/*             {% endif %}*/
/*             <li>*/
/*                 <b>{{ label }}</b>: <s>{{ data[0]|default('N/A') }}</s> {{ data[1] }}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </ul>*/
/* */
