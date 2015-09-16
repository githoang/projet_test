<?php

/* OroOrganizationBundle:Form:fields.html.twig */
class __TwigTemplate_a3fb6d9ca6fa5eed64e699fc57a75133152f4414cea3b1c68deaccac3c23f0ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_type_choice_ownership_type_widget' => array($this, 'block_oro_type_choice_ownership_type_widget'),
            'oro_business_unit_tree_select_widget' => array($this, 'block_oro_business_unit_tree_select_widget'),
            'choice_bu_widget_collapsed' => array($this, 'block_choice_bu_widget_collapsed'),
            'choice_bu_widget_options' => array($this, 'block_choice_bu_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_type_choice_ownership_type_widget', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('oro_business_unit_tree_select_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('choice_bu_widget_collapsed', $context, $blocks);
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('choice_bu_widget_options', $context, $blocks);
    }

    // line 1
    public function block_oro_type_choice_ownership_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 4
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 5
                echo "                ";
                if (($this->getAttribute($context["choice"], "value", array()) == (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    // line 6
                    echo "                    <p class=\"control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "label", array()), "html", null, true);
                    echo "</p>
                ";
                }
                // line 8
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 11
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 13
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 16
    public function block_oro_business_unit_tree_select_widget($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context["entityId"] = false;
        // line 18
        echo "    ";
        if (("oro_business_unit_form" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array()))) {
            // line 19
            echo "        ";
            $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "id", array());
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 23
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        ";
            $this->displayBlock("choice_bu_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
    }

    // line 29
    public function block_choice_bu_widget_collapsed($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 32
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 33
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            ";
        }
        // line 35
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 36
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 37
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 38
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 39
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 41
            echo "            ";
        }
        // line 42
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 43
        echo "            ";
        $this->displayBlock("choice_bu_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 48
    public function block_choice_bu_widget_options($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 51
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 52
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                    ";
                // line 53
                $context["options"] = $context["choice"];
                // line 54
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 57
                echo "                ";
                $context["disable"] = "";
                // line 58
                echo "                ";
                if (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) && ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) == $this->getAttribute($context["choice"], "value", array())))) {
                    // line 59
                    echo "                    ";
                    $context["disable"] = "disabled=\"disabled\"";
                    // line 60
                    echo "                ";
                }
                // line 61
                echo "                <option ";
                echo twig_escape_filter($this->env, (isset($context["disable"]) ? $context["disable"] : $this->getContext($context, "disable")), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"
                ";
                // line 62
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 63
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
                // line 64
                echo "</option>
            ";
            }
            // line 66
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 67,  253 => 66,  249 => 64,  247 => 63,  242 => 62,  235 => 61,  232 => 60,  229 => 59,  226 => 58,  223 => 57,  216 => 54,  214 => 53,  209 => 52,  206 => 51,  188 => 50,  185 => 49,  182 => 48,  173 => 43,  170 => 42,  167 => 41,  161 => 39,  159 => 38,  154 => 37,  151 => 36,  148 => 35,  138 => 33,  136 => 32,  128 => 31,  125 => 30,  122 => 29,  114 => 25,  108 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  83 => 13,  77 => 11,  71 => 9,  65 => 8,  59 => 6,  56 => 5,  51 => 4,  48 => 3,  45 => 2,  42 => 1,  38 => 48,  35 => 47,  33 => 29,  30 => 28,  28 => 16,  25 => 15,  23 => 1,);
    }
}
/* {% block oro_type_choice_ownership_type_widget %}*/
/*     {% spaceless %}*/
/*         {% if value %}*/
/*             {% for choice in choices %}*/
/*                 {% if choice.value == value %}*/
/*                     <p class="control-label">{{ choice.label }}</p>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             {{ block('hidden_widget') }}*/
/*         {% else %}*/
/*             {{ block('choice_widget') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block oro_business_unit_tree_select_widget %}*/
/*     {% set entityId = false %}*/
/*     {% if "oro_business_unit_form" == form.parent.vars.name%}*/
/*         {% set entityId = form.parent.vars.value.id %}*/
/*     {% endif %}*/
/* */
/*     {% if expanded %}*/
/*         {{ block('choice_widget_expanded') }}*/
/*     {% else %}*/
/*         {{ block('choice_bu_widget_collapsed') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block choice_bu_widget_collapsed %}*/
/*     {% spaceless %}*/
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*             {% if empty_value is not none %}*/
/*                 <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 and separator is not none %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_bu_widget_options') }}*/
/*         </select>*/
/*     {% endspaceless %}*/
/* {% endblock choice_bu_widget_collapsed %}*/
/* */
/* {% block choice_bu_widget_options %}*/
/*     {% spaceless %}*/
/*         {% for group_label, choice in options %}*/
/*             {% if choice is iterable %}*/
/*                 <optgroup label="{{ group_label|trans({}, translation_domain) }}">*/
/*                     {% set options = choice %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                 </optgroup>*/
/*             {% else %}*/
/*                 {% set disable = '' %}*/
/*                 {% if entityId and entityId == choice.value %}*/
/*                     {% set disable = 'disabled="disabled"' %}*/
/*                 {% endif %}*/
/*                 <option {{ disable }} value="{{ choice.value }}"*/
/*                 {% if choice is selectedchoice(value) %} selected="selected"{% endif %}>*/
/*                     {{- choice.label|trans({}, translation_domain)|raw -}}*/
/*                 </option>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_bu_widget_options %}*/
