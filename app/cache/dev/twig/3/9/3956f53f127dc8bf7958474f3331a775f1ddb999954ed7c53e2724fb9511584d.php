<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_28d0eb6ba3ac4a4441e12b6115b74f4337baad16632b269af301c21060caa2f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroUIBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'collection_render' => array($this, 'block_collection_render'),
            '_oro_entity_config_config_field_type_widget' => array($this, 'block__oro_entity_config_config_field_type_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 7
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "control-label"))));
            echo "
            ";
        }
        // line 9
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if ((isset($context["client_validation"]) ? $context["client_validation"] : $this->getContext($context, "client_validation"))) {
            // line 19
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                \$('#";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').on('uniformInit', function () {
                    \$(this).filter('.error:not([multiple])').removeClass('error').closest('.selector').addClass('error');
                });
            });
        });
    </script>
    ";
        }
        // line 30
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 33
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (((array_key_exists("type", $context) && ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) && (isset($context["client_validation"]) ? $context["client_validation"] : $this->getContext($context, "client_validation")))) {
            // line 35
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                \$('#";
            // line 39
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').on('uniformInit', function () {
                    \$(this).filter('.error').removeClass('error').closest('.uploader').addClass('error');
                });
            });
        });
    </script>
    ";
        }
        // line 46
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 49
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 51
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " error")) : ("error"))));
            // line 52
            echo "    ";
        }
        // line 53
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
    }

    // line 56
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 58
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " error")) : ("error"))));
            // line 59
            echo "    ";
        }
        // line 60
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
    }

    // line 63
    public function block_form_errors($context, array $blocks = array())
    {
        // line 64
        ob_start();
        // line 65
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 66
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                // line 67
                echo "                ";
                $context["combinedError"] = "";
                // line 68
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 69
                    echo "                    ";
                    $context["error"] = (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                    // line 70
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                    // line 71
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")));
                    // line 72
                    echo "                    ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) . "; ") . $context["error"])) : ($context["error"]));
                    // line 73
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                <span class=\"validation-faled\">";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 76
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 78
            echo "        ";
        }
        // line 79
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 82
    public function block_date_widget($context, array $blocks = array())
    {
        // line 83
        echo "    ";
        ob_start();
        // line 84
        echo "        ";
        $context["type"] = "text";
        // line 85
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 86
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 88
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 89
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 90
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 91
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 92
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 93
            echo "
            </div>
        ";
        }
        // line 96
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 99
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        ob_start();
        // line 101
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 102
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " validate-group")));
        // line 103
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 105
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 106
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_choice_widget_options($context, array $blocks = array())
    {
        // line 115
        echo "    ";
        ob_start();
        // line 116
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
            // line 117
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 118
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_translate_group", array(), "any", true, true) &&  !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_translate_group", array()))) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\">
                    ";
                // line 119
                $context["options"] = $context["choice"];
                // line 120
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 123
                echo "                ";
                $context["label"] = ((($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_translate_option", array(), "any", true, true) &&  !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_translate_option", array()))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
                // line 124
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_safe", array()))) {
                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 126
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
        // line 127
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 130
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        // line 131
        ob_start();
        // line 132
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label", array()), "attr", array())) > 0))) {
            // line 133
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 138
    public function block_collection_render($context, array $blocks = array())
    {
        // line 139
        echo "    ";
        ob_start();
        // line 140
        echo "        ";
        $context["__internal_e112bae4fbab6ab7146840a13c3cc90a5827e57c574224b4eb52817e9525be7b"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Form:fields.html.twig", 140);
        // line 141
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 142
        echo twig_escape_filter($this->env, $context["__internal_e112bae4fbab6ab7146840a13c3cc90a5827e57c574224b4eb52817e9525be7b"]->getcollection_prototype((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform"))));
        echo "\">
                ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 144
            echo "                    ";
            echo $context["__internal_e112bae4fbab6ab7146840a13c3cc90a5827e57c574224b4eb52817e9525be7b"]->getcollection_prototype($context["field"]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 152
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = array())
    {
        // line 153
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 154
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 154,  461 => 153,  458 => 152,  450 => 147,  447 => 146,  438 => 144,  434 => 143,  430 => 142,  427 => 141,  424 => 140,  421 => 139,  418 => 138,  412 => 134,  399 => 133,  396 => 132,  394 => 131,  391 => 130,  386 => 127,  372 => 126,  354 => 124,  351 => 123,  344 => 120,  342 => 119,  337 => 118,  334 => 117,  316 => 116,  313 => 115,  310 => 114,  304 => 110,  295 => 107,  291 => 106,  288 => 105,  284 => 104,  279 => 103,  276 => 102,  273 => 101,  270 => 100,  267 => 99,  262 => 96,  257 => 93,  255 => 92,  254 => 91,  253 => 90,  252 => 89,  247 => 88,  241 => 86,  238 => 85,  235 => 84,  232 => 83,  229 => 82,  224 => 79,  221 => 78,  215 => 76,  209 => 74,  203 => 73,  200 => 72,  198 => 71,  197 => 70,  195 => 69,  190 => 68,  187 => 67,  184 => 66,  182 => 65,  180 => 64,  177 => 63,  170 => 60,  167 => 59,  164 => 58,  161 => 57,  158 => 56,  151 => 53,  148 => 52,  145 => 51,  142 => 50,  139 => 49,  132 => 46,  122 => 39,  116 => 35,  113 => 34,  110 => 33,  103 => 30,  93 => 23,  87 => 19,  84 => 18,  81 => 17,  72 => 11,  68 => 10,  61 => 9,  55 => 7,  53 => 6,  45 => 5,  42 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         <div class="control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}">*/
/*             {% if label is not sameas(false) %}*/
/*             {{ form_label(form, '' , { label_attr: label_attr|merge({ class: 'control-label' })}) }}*/
/*             {% endif %}*/
/*             <div class="controls{% if errors|length > 0 %} validation-error{% endif %}">*/
/*                 {{ form_widget(form) }}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% if client_validation %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery'],*/
/*         function($){*/
/*             $(function() {*/
/*                 $('#{{ id }}').on('uniformInit', function () {*/
/*                     $(this).filter('.error:not([multiple])').removeClass('error').closest('.selector').addClass('error');*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% if type is defined and type == 'file' and client_validation %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery'],*/
/*         function($){*/
/*             $(function() {*/
/*                 $('#{{ id }}').on('uniformInit', function () {*/
/*                     $(this).filter('.error').removeClass('error').closest('.uploader').addClass('error');*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block widget_attributes %}*/
/*     {% if errors|length > 0 %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock widget_attributes %}*/
/* */
/* {% block widget_container_attributes %}*/
/*     {% if errors|length > 0 %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' error' : 'error'}) %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock widget_container_attributes %}*/
/* */
/* {% block form_errors %}*/
/*     {%- spaceless -%}*/
/*         {% if errors|length > 0 %}*/
/*             {% if form.parent %}*/
/*                 {% set combinedError = '' %}*/
/*                 {% for error in errors %}*/
/*                     {% set error = error.messagePluralization is null*/
/*                         ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                         : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators') %}*/
/*                     {% set combinedError = (combinedError != '') ? combinedError ~ '; ' ~ error : error %}*/
/*                 {% endfor %}*/
/*                 <span class="validation-faled">{{ combinedError }}</span>*/
/*             {% else %}*/
/*                 {{ parent() }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_errors %}*/
/* */
/* {% block date_widget %}*/
/*     {% spaceless %}*/
/*         {% set type = 'text' %}*/
/*         {% if widget == 'single_text' %}*/
/*             {{ block('form_widget_simple')|raw }}*/
/*         {% else %}*/
/*             <div {{ block('widget_container_attributes') }}>*/
/*                 {{ date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*                 })|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock date_widget %}*/
/* */
/* {% block choice_widget_expanded %}*/
/*     {% spaceless %}*/
/*         {% set attr = attr|merge({'class': attr.class is defined ? attr.class ~ ' horizontal' : 'horizontal'}) %}*/
/*         {% set attr = attr|merge({'class': attr.class ~ ' validate-group'}) %}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {% for child in form %}*/
/*                 <div class="oro-clearfix">*/
/*                     {{ form_widget(child) }}*/
/*                     {{ form_label(child) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_expanded %}*/
/* */
/* {% block choice_widget_options %}*/
/*     {% spaceless %}*/
/*         {% for group_label, choice in options %}*/
/*             {% if choice is iterable %}*/
/*                 <optgroup label="{{ configs.is_translate_group is defined and not configs.is_translate_group ? group_label : group_label|trans({}, translation_domain) }}">*/
/*                     {% set options = choice %}*/
/*                     {{ block('choice_widget_options') }}*/
/*                 </optgroup>*/
/*             {% else %}*/
/*                 {% set label = configs.is_translate_option is defined and not configs.is_translate_option ? choice.label : choice.label|trans({}, translation_domain) %}*/
/*                 <option {{ block('choice_widget_option_attributes') }} value="{{ choice.value }}"{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{% if (configs.is_safe is defined and configs.is_safe) %}{{ label|raw }}{% else %}{{ label }}{% endif %}</option>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endspaceless %}*/
/* {% endblock choice_widget_options %}*/
/* */
/* {% block choice_widget_option_attributes %}*/
/* {% spaceless %}*/
/*     {% if choice.label.attr is defined and choice.label.attr|length > 0 %}*/
/*         {% for attrname, attrvalue in choice.label.attr %}{{ attrname }}="{{ attrvalue }}" {% endfor %}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock choice_widget_option_attributes %}*/
/* */
/* {% block collection_render %}*/
/*     {% spaceless %}*/
/*         {% from 'OroUIBundle::macros.html.twig' import collection_prototype as collection  %}*/
/*         <div class="row-oro">*/
/*             <div class="collection-fields-list" data-prototype="{{ collection(subform)|escape }}">*/
/*                 {% for field in subform.children %}*/
/*                     {{ collection(field) }}*/
/*                 {% endfor %}*/
/*             </div>*/
/*             <a class="btn add-list-item" href="javascript: void(0);"><i class="icon-plus"></i>{{ 'Add'|trans }}</a>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block _oro_entity_config_config_field_type_widget %}*/
/*     {% for field in form.children %}*/
/*         {{ form_widget(field) }}*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
