<?php

/* PimUIBundle:Form:pim-fields.html.twig */
class __TwigTemplate_7e01c7c3276ad5ce91c9ca423a782d5f0da20434d4fd89121d2a4d541f7f5ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "PimUIBundle:Form:pim-fields.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_row_field' => array($this, 'block_form_row_field'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_info' => array($this, 'block_form_info'),
            'form_errors' => array($this, 'block_form_errors'),
            'pim_wysiwyg_widget' => array($this, 'block_pim_wysiwyg_widget'),
            'pim_translatable_field_row' => array($this, 'block_pim_translatable_field_row'),
            'pim_enrich_media_row' => array($this, 'block_pim_enrich_media_row'),
            'pim_enrich_image_row' => array($this, 'block_pim_enrich_image_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'switch_widget' => array($this, 'block_switch_widget'),
            'pim_enrich_metric_row' => array($this, 'block_pim_enrich_metric_row'),
            'pim_enrich_price_collection_row' => array($this, 'block_pim_enrich_price_collection_row'),
            'pim_enrich_price_collection_widget' => array($this, 'block_pim_enrich_price_collection_widget'),
            'pim_enrich_price_widget' => array($this, 'block_pim_enrich_price_widget'),
            'pim_enrich_attribute_requirement_widget' => array($this, 'block_pim_enrich_attribute_requirement_widget'),
            'pim_ajax_entity_row' => array($this, 'block_pim_ajax_entity_row'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'pim_number_widget' => array($this, 'block_pim_number_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
            'pim_acl_access_level_selector_widget' => array($this, 'block_pim_acl_access_level_selector_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    ";
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 6
        echo "    ";
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 7
            echo "        ";
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["form_method"] = "POST";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        $context["formClass"] = ((array_key_exists("class", $context)) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ("form-horizontal"));
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 13
            echo "        ";
            $context["class"] = (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ") . (isset($context["formClass"]) ? $context["formClass"] : $this->getContext($context, "formClass")));
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "        ";
            $context["class"] = (isset($context["formClass"]) ? $context["formClass"] : $this->getContext($context, "formClass"));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))));
        // line 18
        echo "    <form id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">
    ";
        // line 19
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 20
            echo "        <input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 25
    public function block_form_end($context, array $blocks = array())
    {
        // line 26
        ob_start();
        // line 27
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
</form>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block_form_row_field($context, array $blocks = array())
    {
        // line 33
        echo "    <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()), "html", null, true);
        }
        echo "\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => "control-label"))));
        echo "
        <div class=\"controls";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " validation-error";
        }
        echo "\">
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 37
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())) == 0)) {
            // line 38
            echo "                ";
            $this->displayBlock("form_info", $context, $blocks);
            echo "
            ";
        }
        // line 40
        echo "        </div>
    </div>
";
    }

    // line 44
    public function block_form_row($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        ob_start();
        // line 46
        echo "        ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_form_label($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 53
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 54
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 55
                echo "        ";
            }
            // line 56
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 57
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 58
                echo "        ";
            }
            // line 59
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 60
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 61
                echo "        ";
            }
            // line 62
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 63
            echo "        ";
            $context["label"] = $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
            // line 64
            echo "        ";
            if (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "truncate", array(), "any", true, true) && $this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "truncate", array()))) {
                // line 65
                echo "            ";
                $context["label_attr"] = twig_array_merge(array("title" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
                // line 66
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), "class", array()) . " ")) : ("")) . "truncate")));
                // line 67
                echo "        ";
            }
            // line 68
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (($context["attrname"] != "truncate")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
            ";
            // line 69
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "mode", array())))) {
                // line 70
                echo "                <input type=\"checkbox\" class=\"comparisonSelection exclude\" />
            ";
            } else {
                // line 72
                echo "                ";
                if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : $this->getContext($context, "isRadioLabel")))) {
                    echo "<em>*</em>";
                }
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "
            ";
            }
            // line 74
            echo "        </label>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 80
        echo "    ";
        $context["client_validation"] = false;
        // line 81
        echo "    ";
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        echo "
";
    }

    // line 84
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 85
        echo "    ";
        $context["client_validation"] = false;
        // line 86
        echo "    ";
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 89
    public function block_form_info($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        ob_start();
        // line 91
        echo "        ";
        if (( !array_key_exists("type", $context) || ((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) != "hidden"))) {
            // line 92
            echo "            <div class=\"icons-container\">
                ";
            // line 93
            if (array_key_exists("help", $context)) {
                // line 94
                echo "                    <i class=\"icon-info-sign\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["help"]) ? $context["help"] : $this->getContext($context, "help"))), "html", null, true);
                echo "\"></i>
                ";
            }
            // line 96
            echo "                ";
            if (array_key_exists("from_variant", $context)) {
                // line 97
                echo "                    <i class=\"icon-lock\" data-trigger=\"hover\" data-toggle=\"popover\" data-placement=\"right\" data-title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product_value.tooltip.from_variant.title"), "html", null, true);
                echo "\" data-content=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product_value.tooltip.from_variant.content"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["from_variant"]) ? $context["from_variant"] : $this->getContext($context, "from_variant")), "code", array()), "html", null, true);
                echo "\" data-container=\"body\"></i>
                ";
            }
            // line 99
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 102
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 109
    public function block_form_errors($context, array $blocks = array())
    {
        ob_start();
        // line 110
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 111
            echo "        <script type=\"text/javascript\">
            require(['jquery'], function (\$) {
                'use strict';

                \$(function() {
                    \$('#";
            // line 116
            echo $this->getAttribute($this, "getRootId", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method");
            echo "').trigger('change');
                });
            });
        </script>
        ";
            // line 120
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                // line 121
                echo "            ";
                $context["combinedError"] = "";
                // line 122
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 123
                    echo "                ";
                    $context["error"] = (((null === $this->getAttribute($context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('translator')->trans($this->getAttribute(                    // line 124
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")) : ($this->env->getExtension('translator')->transchoice($this->getAttribute(                    // line 125
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators")));
                    // line 126
                    echo "                ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) . "; ") . $context["error"])) : ($context["error"]));
                    // line 127
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "            <i class=\"validation-tooltip\" data-placement=\"right\" data-toggle=\"tooltip\" data-original-title=\"";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")), "html", null, true);
                echo "\"></i>
        ";
            } else {
                // line 130
                echo "            ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
        ";
            }
            // line 132
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 135
    public function block_pim_wysiwyg_widget($context, array $blocks = array())
    {
        // line 136
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "wysiwyg")));
        // line 137
        echo "    ";
        $this->displayBlock("textarea_widget", $context, $blocks);
        echo "
";
    }

    // line 140
    public function block_pim_translatable_field_row($context, array $blocks = array())
    {
        // line 141
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <table class=\"table table-condensed\">
        <thead>
            <tr>
                ";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 146
            echo "                    <th>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'label');
            echo "</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </tr>
        </thead>
        <tbody>
            <tr>
                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translation"]) {
            // line 153
            echo "                    <td>
                        ";
            // line 154
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'errors');
            echo "
                        ";
            // line 155
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translation"], 'widget');
            echo "
                    </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "            </tr>
        </tbody>
    </table>
";
    }

    // line 163
    public function block_pim_enrich_media_row($context, array $blocks = array())
    {
        // line 164
        echo "    ";
        ob_start();
        // line 165
        echo "
    ";
        // line 166
        $context["empty"] = ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()) ||  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "filename", array()));
        // line 167
        echo "    ";
        if ( !(((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true)) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "mode", array())))) {
            // line 168
            echo "        <div class=\"control-group\">
            ";
            // line 169
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()))));
            echo "
            <div class=\"controls\">
                <label class=\"upload-zone file";
            // line 171
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                echo " empty";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                echo " disabled";
            }
            echo "\">
                    <div class=\"upload-info\">
                        ";
            // line 173
            if ( !(isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                // line 174
                echo "                            <a class=\"no-hash upload-preview\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "filename", array()))), "html", null, true);
                echo "\" target=\"_blank\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "originalFilename", array()), "html", null, true);
                echo "\">
                                <i class=\"icon-file upload-preview\"></i>
                            </a>
                            ";
                // line 177
                $context["filename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "originalFilename", array());
                // line 178
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename"))) > 20)) {
                    // line 179
                    echo "                                ";
                    $context["filename"] = (twig_slice($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), 0, 17) . "...");
                    // line 180
                    echo "                            ";
                }
                // line 181
                echo "                        ";
            } else {
                // line 182
                echo "                            <i class=\"icon-file upload-preview empty\"></i>
                        ";
            }
            // line 184
            echo "                        <span class=\"upload-filename\" data-empty-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop a file or click here"), "html", null, true);
            echo "\">";
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop a file or click here"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
            }
            echo "</span>
                    </div>
                    ";
            // line 186
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) || ("comparison" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "mode", array())))) {
                // line 187
                echo "                        <a class=\"btn no-hash remove-upload";
                if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                    echo " hide";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                    echo " disabled";
                }
                echo "\">
                            <i class=\"icon-trash\"></i>
                        </a>
                    ";
            }
            // line 191
            echo "                    ";
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                // line 192
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
                echo "
                    ";
            } else {
                // line 194
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "hide", "disabled" => "disabled")));
                echo "
                        ";
                // line 195
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removed", array()), 'widget', array("attr" => array("class" => "hide")));
                echo "
                    ";
            }
            // line 197
            echo "                </label>
                ";
            // line 198
            $this->displayBlock("form_info", $context, $blocks);
            echo "
                ";
            // line 199
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
            echo "
                ";
            // line 200
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "copyFrom", array()), 'widget');
            echo "
            </div>
        </div>
        <script type=\"text/javascript\">
            require(
                ['pim/fileinput'],
                function(fileinput) {
                    fileinput.init('";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                }
            );
        </script>
    ";
        } else {
            // line 212
            echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"upload-zone file empty\">
                    <div class=\"upload-info\">
                        <span class=\"upload-filename\">
                            ";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product.no_compared_media"), "html", null, true);
            echo "
                        </span>
                    </div>
                </label>
            </div>
        </div>
    ";
        }
        // line 224
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 228
    public function block_pim_enrich_image_row($context, array $blocks = array())
    {
        // line 229
        echo "    ";
        ob_start();
        // line 230
        echo "
    ";
        // line 231
        $context["empty"] = ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()) ||  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "filename", array()));
        // line 232
        echo "    ";
        if ( !(((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true)) && ("comparison" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "mode", array())))) {
            // line 233
            echo "        <div class=\"control-group\">
            ";
            // line 234
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()))));
            echo "
            <div class=\"controls\">
                <label class=\"upload-zone image";
            // line 236
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                echo " empty";
            }
            if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                echo " disabled";
            }
            echo "\">
                    <div class=\"upload-info\">
                        ";
            // line 238
            if ( !(isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                // line 239
                echo "                            <a class=\"no-hash upload-preview\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "filename", array()), "filter" => "image_preview")), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "originalFilename", array()), "html", null, true);
                echo "\" rel=\"slimbox\">
                                <img src=\"";
                // line 240
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_media_show", array("filename" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "filename", array()), "filter" => "thumbnail_small")), "html", null, true);
                echo "\">
                            </a>
                            ";
                // line 242
                $context["filename"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "originalFilename", array());
                // line 243
                echo "                            ";
                if ((twig_length_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename"))) > 20)) {
                    // line 244
                    echo "                                ";
                    $context["filename"] = (twig_slice($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), 0, 17) . "...");
                    // line 245
                    echo "                            ";
                }
                // line 246
                echo "                        ";
            } else {
                // line 247
                echo "                            <i class=\"icon-camera-retro upload-preview empty\"></i>
                        ";
            }
            // line 249
            echo "                        <span class=\"upload-filename\" data-empty-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop an image or click here"), "html", null, true);
            echo "\">";
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Drop an image or click here"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
            }
            echo "</span>
                    </div>
                    ";
            // line 251
            if (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "mode", array(), "any", true, true) || ("comparison" != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "mode", array())))) {
                // line 252
                echo "                        <a class=\"btn no-hash remove-upload";
                if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                    echo " hide";
                }
                if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
                    echo " disabled";
                }
                echo "\">
                            <i class=\"icon-trash\"></i>
                        </a>
                    ";
            }
            // line 256
            echo "                    ";
            if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
                // line 257
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
                echo "
                    ";
            } else {
                // line 259
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget', array("attr" => array("class" => "hide", "disabled" => "disabled")));
                echo "
                        ";
                // line 260
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removed", array()), 'widget', array("attr" => array("class" => "hide")));
                echo "
                    ";
            }
            // line 262
            echo "                </label>
                ";
            // line 263
            $this->displayBlock("form_info", $context, $blocks);
            echo "
                ";
            // line 264
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget');
            echo "
                ";
            // line 265
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "copyFrom", array()), 'widget');
            echo "
            </div>
        </div>
        <script type=\"text/javascript\">
            require(
                ['pim/fileinput'],
                function(fileinput) {
                    fileinput.init('";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
                }
            );
        </script>
    ";
        } else {
            // line 277
            echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <label class=\"upload-zone image empty\">
                    <div class=\"upload-info\">
                        <span class=\"upload-filename\">
                            ";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.product.no_compared_media"), "html", null, true);
            echo "
                        </span>
                    </div>
                </label>
            </div>
        </div>
    ";
        }
        // line 289
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 293
    public function block_widget_attributes($context, array $blocks = array())
    {
        // line 294
        if ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true)) {
            // line 295
            echo "    ";
            if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
                // line 296
                echo "        ";
                if (!twig_in_filter("input-", $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()))) {
                    // line 297
                    echo "            ";
                    $context["class"] = ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " input-large");
                    // line 298
                    echo "        ";
                } else {
                    // line 299
                    echo "            ";
                    $context["class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array());
                    // line 300
                    echo "        ";
                }
                // line 301
                echo "    ";
            } else {
                // line 302
                echo "        ";
                $context["class"] = "input-large";
                // line 303
                echo "    ";
            }
            // line 304
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))));
        }
        // line 306
        ob_start();
        // line 307
        echo "    id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        if ((isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length"))) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, (isset($context["max_length"]) ? $context["max_length"] : $this->getContext($context, "max_length")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern"))) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, (isset($context["pattern"]) ? $context["pattern"] : $this->getContext($context, "pattern")), "html", null, true);
            echo "\"";
        }
        // line 308
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\" ";
            } else {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 312
    public function block_switch_widget($context, array $blocks = array())
    {
        // line 313
        ob_start();
        // line 314
        echo "    ";
        $context["originalId"] = (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        // line 315
        echo "    ";
        $context["id"] = ("input-" . (isset($context["originalId"]) ? $context["originalId"] : $this->getContext($context, "originalId")));
        // line 316
        echo "    ";
        $context["switchId"] = ("switch-" . (isset($context["originalId"]) ? $context["originalId"] : $this->getContext($context, "originalId")));
        // line 317
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : $this->getContext($context, "switchId")), "html", null, true);
        echo "\" class=\"switch switch-";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array())) : ("small")), "html", null, true);
        echo "\" data-on-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-on-label", array(), "array", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "data-on-label", array(), "array")) : ("switch_on"))), "html", null, true);
        echo "\" data-off-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-off-label", array(), "array", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "data-off-label", array(), "array")) : ("switch_off"))), "html", null, true);
        echo "\">
        ";
        // line 318
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            $context["required"] = false;
        }
        // line 319
        echo "        <input id=\"";
        echo twig_escape_filter($this->env, (isset($context["originalId"]) ? $context["originalId"] : $this->getContext($context, "originalId")), "html", null, true);
        echo "\" type=\"checkbox\" ";
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
        <input type=\"hidden\" ";
        // line 320
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "checked", array(), "any", true, true) && $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "checked", array())))) {
            echo " value=\"1\"";
        }
        echo ">
    </div>
    <script type=\"text/javascript\">
    require(
        ['jquery'],
        function (\$) {
            'use strict';
            \$(function() {
                \$('#";
        // line 328
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : $this->getContext($context, "switchId")), "html", null, true);
        echo "').closest('form').on('switch-change', '#";
        echo twig_escape_filter($this->env, (isset($context["switchId"]) ? $context["switchId"] : $this->getContext($context, "switchId")), "html", null, true);
        echo "', function (e, data) {
                    \$('#";
        // line 329
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(+data.value);
                });
            });
        }
    );
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 338
    public function block_pim_enrich_metric_row($context, array $blocks = array())
    {
        // line 339
        ob_start();
        // line 340
        echo "    <div class=\"control-group\">
        ";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "control-label", "for" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "id", array()))));
        echo "
        <div class=\"controls metric input-append\">
            ";
        // line 343
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), 'widget', array("attr" => array("class" => "input-small")));
        echo "
            ";
        // line 344
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unit", array()), 'widget', array("attr" => array("class" => "select2 input-small append")));
        echo "
            ";
        // line 345
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "family", array()), 'widget');
        echo "
            ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), 'errors');
        echo "
            ";
        // line 347
        $this->displayBlock("form_info", $context, $blocks);
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_pim_enrich_price_collection_row($context, array $blocks = array())
    {
        // line 354
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("attr" => array("class" => "hide")));
        echo "
";
    }

    // line 357
    public function block_pim_enrich_price_collection_widget($context, array $blocks = array())
    {
        // line 358
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 359
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 360
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($context["child"], "data", array()), 'errors');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        echo "    ";
        $this->displayBlock("form_info", $context, $blocks);
        echo "
";
    }

    // line 365
    public function block_pim_enrich_price_widget($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    ";
        $context["metadata"] = array("label" => $this->env->getExtension('pim_locale_extension')->currencySymbol($this->getAttribute($this->getAttribute($this->getAttribute(        // line 368
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency", array()), "vars", array()), "value", array())), "currency" => array("fieldName" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 370
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency", array()), "vars", array()), "full_name", array()), "fieldId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 371
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency", array()), "vars", array()), "id", array()), "data" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 372
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency", array()), "vars", array()), "value", array()), "disabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 373
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "disabled", array())), "value" => array("fieldName" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 376
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "full_name", array()), "fieldId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 377
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "id", array()), "data" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 378
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "value", array()), "disabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 379
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "data", array()), "vars", array()), "disabled", array())));
        // line 382
        echo "    <div class=\"currency-field\" data-metadata=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["metadata"]) ? $context["metadata"] : $this->getContext($context, "metadata"))), "html", null, true);
        echo "\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 386
    public function block_pim_enrich_attribute_requirement_widget($context, array $blocks = array())
    {
        // line 387
        echo "    ";
        $context["requiredTitle"] = $this->env->getExtension('translator')->trans("Required");
        // line 388
        echo "    ";
        $context["nonRequiredTitle"] = $this->env->getExtension('translator')->trans("Not required");
        // line 389
        echo "    <div class=\"attribute-requirement\" data-required-title=\"";
        echo twig_escape_filter($this->env, (isset($context["requiredTitle"]) ? $context["requiredTitle"] : $this->getContext($context, "requiredTitle")), "html", null, true);
        echo "\" data-not-required-title=\"";
        echo twig_escape_filter($this->env, (isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : $this->getContext($context, "nonRequiredTitle")), "html", null, true);
        echo "\">
        ";
        // line 390
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "keep_non_required", array())) {
            // line 391
            echo "            <input type=\"hidden\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" class=\"hide\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "value", array())) ? ("1") : ("0"));
            echo "\" />
            <i class=\"icon-";
            // line 392
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "value", array())) ? ("ok ") : ("circle non-"));
            echo "required\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "value", array())) ? ((isset($context["requiredTitle"]) ? $context["requiredTitle"] : $this->getContext($context, "requiredTitle"))) : ((isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : $this->getContext($context, "nonRequiredTitle")))), "html", null, true);
            echo "\"></i>
        ";
        } else {
            // line 394
            echo "            <input type=\"checkbox\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "full_name", array()), "html", null, true);
            echo "\" class=\"hide\" ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "checked", array())) {
                echo "checked=\"checked\"";
            }
            echo " />
            <i class=\"icon-";
            // line 395
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "checked", array())) ? ("ok ") : ("circle non-"));
            echo "required\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "required", array()), "vars", array()), "checked", array())) ? ((isset($context["requiredTitle"]) ? $context["requiredTitle"] : $this->getContext($context, "requiredTitle"))) : ((isset($context["nonRequiredTitle"]) ? $context["nonRequiredTitle"] : $this->getContext($context, "nonRequiredTitle")))), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 397
        echo "    </div>
";
    }

    // line 400
    public function block_pim_ajax_entity_row($context, array $blocks = array())
    {
        // line 401
        echo "    ";
        $this->displayBlock("form_row_field", $context, $blocks);
        echo "
";
    }

    // line 404
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 405
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "datepicker"), "placeholder" => $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))));
        // line 406
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "disabled", array())) {
            // line 407
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("disabled" => "disabled"));
            // line 408
            echo "    ";
        }
        // line 409
        echo "
    ";
        // line 410
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
    }

    // line 413
    public function block_pim_number_widget($context, array $blocks = array())
    {
        // line 414
        echo "    ";
        $this->displayBlock("number_widget", $context, $blocks);
        echo "
";
    }

    // line 417
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 418
        echo "    ";
        ob_start();
        // line 419
        echo "        ";
        if (("groups" == $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "view_type", array()))) {
            // line 420
            echo "            ";
            if ((("entity" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "extensionKey", array())) && ("(default)" != $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "identity", array()), "name", array())))) {
                // line 421
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity", array()), "id", array()), 'widget');
                echo "
                ";
                // line 422
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions", array()), 'widget');
                echo "
            ";
            } else {
                // line 424
                echo "                <div class=\"acl-permission";
                echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field") : (""));
                echo "\">
                    ";
                // line 425
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity", array()), 'widget');
                echo "
                    ";
                // line 426
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 429
            echo "        ";
        } else {
            // line 430
            echo "            <tr class=\"acl-permission";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) ? (" default-field") : (""));
            echo "\">
                <td>
                    ";
            // line 432
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity", array()), 'widget');
            echo "
                </td>
                ";
            // line 434
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions", array()), 'widget');
            echo "
            </tr>
        ";
        }
        // line 437
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 440
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 441
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
    ";
        // line 442
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accessLevel", array()), 'widget');
        echo "
";
    }

    // line 445
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 446
        echo "    ";
        if (("entity" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "extensionKey", array()))) {
            // line 447
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 448
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 449
                        echo "                ";
                        $context["additionalClass"] = (((($context["field"] == "ASSIGN") || ("(default)" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())))) ? (" default-field") : (""));
                        // line 450
                        echo "                ";
                        if (("entity:Oro\\Bundle\\UserBundle\\Entity\\Role" == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "identity", array()), "id", array()))) {
                            // line 451
                            echo "                    ";
                            $context["additionalClass"] = ((isset($context["additionalClass"]) ? $context["additionalClass"] : $this->getContext($context, "additionalClass")) . " default-field-toggle");
                            // line 452
                            echo "                ";
                        }
                        // line 453
                        echo "                <div class=\"acl-permission";
                        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) ? $context["additionalClass"] : $this->getContext($context, "additionalClass")), "html", null, true);
                        echo "\" data-permission=\"";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "\">
                    <strong>";
                        // line 454
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(twig_lower_filter($this->env, ((("oro_security.acl." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "identity", array()), "name", array())) . ".") . $context["field"]))), "html", null, true);
                        echo "</strong>
                    ";
                        // line 455
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
                </div>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 458
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 459
            echo "    ";
        } else {
            // line 460
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 461
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                        // line 462
                        echo "                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 465
            echo "    ";
        }
    }

    // line 468
    public function block_pim_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 469
        echo "    <i class=\"icon-";
        echo (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "checked", array())) ? ("ok ") : ("remove non-"));
        echo "granted acl-permission-toggle\"></i>
    ";
        // line 470
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => "hide"));
        // line 471
        echo "    ";
        $this->displayBlock("checkbox_widget", $context, $blocks);
        echo "
";
    }

    // line 105
    public function getgetRootId($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 106
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) ? ($this->getAttribute($this, "getRootId", array(0 => $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())), "method")) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()))), "html", null, true);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Form:pim-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1381 => 106,  1369 => 105,  1362 => 471,  1360 => 470,  1355 => 469,  1352 => 468,  1347 => 465,  1341 => 464,  1331 => 462,  1325 => 461,  1320 => 460,  1317 => 459,  1311 => 458,  1301 => 455,  1297 => 454,  1290 => 453,  1287 => 452,  1284 => 451,  1281 => 450,  1278 => 449,  1272 => 448,  1267 => 447,  1264 => 446,  1261 => 445,  1255 => 442,  1250 => 441,  1247 => 440,  1242 => 437,  1236 => 434,  1231 => 432,  1225 => 430,  1222 => 429,  1216 => 426,  1212 => 425,  1207 => 424,  1202 => 422,  1197 => 421,  1194 => 420,  1191 => 419,  1188 => 418,  1185 => 417,  1178 => 414,  1175 => 413,  1169 => 410,  1166 => 409,  1163 => 408,  1160 => 407,  1157 => 406,  1154 => 405,  1151 => 404,  1144 => 401,  1141 => 400,  1136 => 397,  1129 => 395,  1118 => 394,  1111 => 392,  1102 => 391,  1100 => 390,  1093 => 389,  1090 => 388,  1087 => 387,  1084 => 386,  1076 => 382,  1074 => 379,  1073 => 378,  1072 => 377,  1071 => 376,  1070 => 373,  1069 => 372,  1068 => 371,  1067 => 370,  1066 => 368,  1064 => 367,  1062 => 366,  1059 => 365,  1052 => 362,  1044 => 360,  1039 => 359,  1034 => 358,  1031 => 357,  1024 => 354,  1021 => 353,  1012 => 347,  1008 => 346,  1004 => 345,  1000 => 344,  996 => 343,  991 => 341,  988 => 340,  986 => 339,  983 => 338,  971 => 329,  965 => 328,  951 => 320,  934 => 319,  930 => 318,  919 => 317,  916 => 316,  913 => 315,  910 => 314,  908 => 313,  905 => 312,  882 => 308,  857 => 307,  855 => 306,  851 => 304,  848 => 303,  845 => 302,  842 => 301,  839 => 300,  836 => 299,  833 => 298,  830 => 297,  827 => 296,  824 => 295,  822 => 294,  819 => 293,  813 => 289,  803 => 282,  796 => 277,  788 => 272,  778 => 265,  774 => 264,  770 => 263,  767 => 262,  762 => 260,  757 => 259,  751 => 257,  748 => 256,  735 => 252,  733 => 251,  721 => 249,  717 => 247,  714 => 246,  711 => 245,  708 => 244,  705 => 243,  703 => 242,  698 => 240,  691 => 239,  689 => 238,  679 => 236,  674 => 234,  671 => 233,  668 => 232,  666 => 231,  663 => 230,  660 => 229,  657 => 228,  651 => 224,  641 => 217,  634 => 212,  626 => 207,  616 => 200,  612 => 199,  608 => 198,  605 => 197,  600 => 195,  595 => 194,  589 => 192,  586 => 191,  573 => 187,  571 => 186,  559 => 184,  555 => 182,  552 => 181,  549 => 180,  546 => 179,  543 => 178,  541 => 177,  532 => 174,  530 => 173,  520 => 171,  515 => 169,  512 => 168,  509 => 167,  507 => 166,  504 => 165,  501 => 164,  498 => 163,  491 => 158,  482 => 155,  478 => 154,  475 => 153,  471 => 152,  465 => 148,  456 => 146,  452 => 145,  444 => 141,  441 => 140,  434 => 137,  431 => 136,  428 => 135,  422 => 132,  416 => 130,  410 => 128,  404 => 127,  401 => 126,  399 => 125,  398 => 124,  396 => 123,  391 => 122,  388 => 121,  386 => 120,  379 => 116,  372 => 111,  369 => 110,  365 => 109,  360 => 102,  353 => 99,  343 => 97,  340 => 96,  334 => 94,  332 => 93,  329 => 92,  326 => 91,  323 => 90,  320 => 89,  313 => 86,  310 => 85,  307 => 84,  300 => 81,  297 => 80,  294 => 79,  287 => 74,  278 => 72,  274 => 70,  272 => 69,  254 => 68,  251 => 67,  248 => 66,  245 => 65,  242 => 64,  239 => 63,  236 => 62,  233 => 61,  230 => 60,  227 => 59,  224 => 58,  221 => 57,  218 => 56,  215 => 55,  212 => 54,  209 => 53,  206 => 52,  204 => 51,  201 => 50,  193 => 46,  190 => 45,  187 => 44,  181 => 40,  175 => 38,  173 => 37,  169 => 36,  163 => 35,  159 => 34,  151 => 33,  148 => 32,  139 => 27,  137 => 26,  134 => 25,  125 => 20,  123 => 19,  98 => 18,  95 => 17,  92 => 16,  89 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  68 => 8,  65 => 7,  62 => 6,  59 => 5,  57 => 4,  54 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:Form:fields.html.twig' %}*/
/* */
/* {% block form_start %}*/
/* {% spaceless %}*/
/*     {% set method = method|upper %}*/
/*     {% if method in ["GET", "POST"] %}*/
/*         {% set form_method = method %}*/
/*     {% else %}*/
/*         {% set form_method = "POST" %}*/
/*     {% endif %}*/
/*     {% set formClass = class is defined ? class : 'form-horizontal' %}*/
/*     {% if attr.class is defined %}*/
/*         {% set class = attr.class ~ ' ' ~ formClass %}*/
/*     {% else %}*/
/*         {% set class = formClass %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': class }) %}*/
/*     <form id="{{ id }}" method="{{ form_method|lower }}" action="{{ action }}"{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {% if form_method != method %}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_start %}*/
/* */
/* {% block form_end %}*/
/* {% spaceless %}*/
/*     {{ form_row(form._token) }}*/
/* </form>*/
/* {% endspaceless %}*/
/* {% endblock form_end %}*/
/* */
/* {% block form_row_field %}*/
/*     <div class="control-group{% if attr.class is defined %} {{ attr.class }}{% endif %}">*/
/*         {{ form_label(form, '', { label_attr: label_attr|merge({ class: 'control-label' })}) }}*/
/*         <div class="controls{% if errors|length > 0 %} validation-error{% endif %}">*/
/*             {{ form_widget(form) }}*/
/*             {% if form.children|length == 0 %}*/
/*                 {{ block('form_info') }}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block form_row %}*/
/*     {% spaceless %}*/
/*         {{ block('form_row_field') }}*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* {% block form_label %}*/
/* {% spaceless %}*/
/*     {% if label is not sameas(false) %}*/
/*         {% if not compound %}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {% endif %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         {% set isRadioLabel = form.parent.vars.expanded|default(false) and checked is defined %}*/
/*         {% set label = label|trans({}, translation_domain) %}*/
/*         {% if label_attr.truncate is defined and label_attr.truncate %}*/
/*             {% set label_attr = { 'title': label }|merge(label_attr) %}*/
/*             {% set label_attr = label_attr|merge({ 'class': (label_attr.class is defined ? label_attr.class ~ ' ' : '') ~ 'truncate' }) %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr if attrname != 'truncate' %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode %}*/
/*                 <input type="checkbox" class="comparisonSelection exclude" />*/
/*             {% else %}*/
/*                 {% if required and not isRadioLabel %}<em>*</em>{% endif %}{{ label }}*/
/*             {% endif %}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block choice_widget_collapsed %}*/
/*     {% set client_validation = false %}*/
/*     {{ parent() }}*/
/* {% endblock choice_widget_collapsed %}*/
/* */
/* {% block form_widget_simple %}*/
/*     {% set client_validation = false %}*/
/*     {{ parent() }}*/
/* {% endblock form_widget_simple %}*/
/* */
/* {% block form_info %}*/
/*     {% spaceless %}*/
/*         {% if type is not defined or type != 'hidden' %}*/
/*             <div class="icons-container">*/
/*                 {% if help is defined %}*/
/*                     <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" data-original-title="{{ help|trans }}"></i>*/
/*                 {% endif %}*/
/*                 {% if from_variant is defined %}*/
/*                     <i class="icon-lock" data-trigger="hover" data-toggle="popover" data-placement="right" data-title="{{ 'pim_enrich.product_value.tooltip.from_variant.title'|trans }}" data-content="{{ 'pim_enrich.product_value.tooltip.from_variant.content'|trans }} : {{ from_variant.code }}" data-container="body"></i>*/
/*                 {% endif %}*/
/*                 {{ form_errors(form) }}*/
/*             </div>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock form_info %}*/
/* */
/* {% macro getRootId(form) -%}*/
/*     {{ form.parent ? _self.getRootId(form.parent) : form.vars.id }}*/
/* {%- endmacro %}*/
/* */
/* {% block form_errors %}{% spaceless %}*/
/*     {% if errors|length > 0 %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery'], function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     $('#{{ _self.getRootId(form) }}').trigger('change');*/
/*                 });*/
/*             });*/
/*         </script>*/
/*         {% if form.parent %}*/
/*             {% set combinedError = '' %}*/
/*             {% for error in errors %}*/
/*                 {% set error = error.messagePluralization is null*/
/*                     ? error.messageTemplate|trans(error.messageParameters, 'validators')*/
/*                     : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'validators') %}*/
/*                 {% set combinedError = (combinedError != '') ? combinedError ~ '; ' ~ error : error %}*/
/*             {% endfor %}*/
/*             <i class="validation-tooltip" data-placement="right" data-toggle="tooltip" data-original-title="{{ combinedError }}"></i>*/
/*         {% else %}*/
/*             {{ parent() }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* {% endspaceless %}{% endblock form_errors %}*/
/* */
/* {% block pim_wysiwyg_widget %}*/
/*     {% set attr = attr|merge({ 'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'wysiwyg' }) %}*/
/*     {{ block('textarea_widget') }}*/
/* {% endblock pim_wysiwyg_widget %}*/
/* */
/* {% block pim_translatable_field_row %}*/
/*     {{ form_errors(form) }}*/
/*     <table class="table table-condensed">*/
/*         <thead>*/
/*             <tr>*/
/*                 {% for translation in form %}*/
/*                     <th>{{ form_label(translation) }}</th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr>*/
/*                 {% for translation in form %}*/
/*                     <td>*/
/*                         {{ form_errors(translation) }}*/
/*                         {{ form_widget(translation) }}*/
/*                     </td>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block pim_enrich_media_row %}*/
/*     {% spaceless %}*/
/* */
/*     {% set empty = not form.vars.value or not form.vars.value.filename %}*/
/*     {% if not (empty and form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode) %}*/
/*         <div class="control-group">*/
/*             {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.file.vars.id} }) }}*/
/*             <div class="controls">*/
/*                 <label class="upload-zone file{% if empty %} empty{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                     <div class="upload-info">*/
/*                         {% if not empty %}*/
/*                             <a class="no-hash upload-preview" href="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.filename }) }}" target="_blank" title="{{ form.vars.value.originalFilename }}">*/
/*                                 <i class="icon-file upload-preview"></i>*/
/*                             </a>*/
/*                             {% set filename = form.vars.value.originalFilename %}*/
/*                             {% if filename|length > 20 %}*/
/*                                 {% set filename = filename|slice(0, 17) ~ '...' %}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <i class="icon-file upload-preview empty"></i>*/
/*                         {% endif %}*/
/*                         <span class="upload-filename" data-empty-title="{{ 'Drop a file or click here'|trans }}">{% if empty %}{{ 'Drop a file or click here'|trans }}{% else %}{{ filename }}{% endif %}</span>*/
/*                     </div>*/
/*                     {% if form.parent.vars.mode is not defined or 'comparison' != form.parent.vars.mode %}*/
/*                         <a class="btn no-hash remove-upload{% if empty %} hide{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                             <i class="icon-trash"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if empty %}*/
/*                         {{ form_widget(form.file) }}*/
/*                     {% else %}*/
/*                         {{ form_widget(form.file, { attr: { 'class': 'hide', 'disabled': 'disabled' }}) }}*/
/*                         {{ form_widget(form.removed, {'attr': { 'class': 'hide' }}) }}*/
/*                     {% endif %}*/
/*                 </label>*/
/*                 {{ block('form_info') }}*/
/*                 {{ form_widget(form.id) }}*/
/*                 {{ form_widget(form.copyFrom) }}*/
/*             </div>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['pim/fileinput'],*/
/*                 function(fileinput) {*/
/*                     fileinput.init('{{ form.file.vars.id }}');*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% else %}*/
/*         <div class="control-group">*/
/*             <div class="controls">*/
/*                 <label class="upload-zone file empty">*/
/*                     <div class="upload-info">*/
/*                         <span class="upload-filename">*/
/*                             {{ 'pim_enrich.product.no_compared_media'|trans }}*/
/*                         </span>*/
/*                     </div>*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block pim_enrich_image_row %}*/
/*     {% spaceless %}*/
/* */
/*     {% set empty = not form.vars.value or not form.vars.value.filename %}*/
/*     {% if not (empty and form.parent.vars.mode is defined and 'comparison' == form.parent.vars.mode) %}*/
/*         <div class="control-group">*/
/*             {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.file.vars.id} }) }}*/
/*             <div class="controls">*/
/*                 <label class="upload-zone image{% if empty %} empty{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                     <div class="upload-info">*/
/*                         {% if not empty %}*/
/*                             <a class="no-hash upload-preview" href="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.filename, 'filter': 'image_preview' }) }}" title="{{ form.vars.value.originalFilename }}" rel="slimbox">*/
/*                                 <img src="{{ path('pim_enrich_media_show', { 'filename': form.vars.value.filename, 'filter': 'thumbnail_small' }) }}">*/
/*                             </a>*/
/*                             {% set filename = form.vars.value.originalFilename %}*/
/*                             {% if filename|length > 20 %}*/
/*                                 {% set filename = filename|slice(0, 17) ~ '...' %}*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <i class="icon-camera-retro upload-preview empty"></i>*/
/*                         {% endif %}*/
/*                         <span class="upload-filename" data-empty-title="{{ 'Drop an image or click here'|trans }}">{% if empty %}{{ 'Drop an image or click here'|trans }}{% else %}{{ filename }}{% endif %}</span>*/
/*                     </div>*/
/*                     {% if form.parent.vars.mode is not defined or 'comparison' != form.parent.vars.mode %}*/
/*                         <a class="btn no-hash remove-upload{% if empty %} hide{% endif %}{% if disabled %} disabled{% endif %}">*/
/*                             <i class="icon-trash"></i>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                     {% if empty %}*/
/*                         {{ form_widget(form.file) }}*/
/*                     {% else %}*/
/*                         {{ form_widget(form.file, { 'attr': { 'class': 'hide', 'disabled': 'disabled' }}) }}*/
/*                         {{ form_widget(form.removed, { 'attr': { 'class': 'hide' }}) }}*/
/*                     {% endif %}*/
/*                 </label>*/
/*                 {{ block('form_info') }}*/
/*                 {{ form_widget(form.id) }}*/
/*                 {{ form_widget(form.copyFrom) }}*/
/*             </div>*/
/*         </div>*/
/*         <script type="text/javascript">*/
/*             require(*/
/*                 ['pim/fileinput'],*/
/*                 function(fileinput) {*/
/*                     fileinput.init('{{ form.file.vars.id }}');*/
/*                 }*/
/*             );*/
/*         </script>*/
/*     {% else %}*/
/*         <div class="control-group">*/
/*             <div class="controls">*/
/*                 <label class="upload-zone image empty">*/
/*                     <div class="upload-info">*/
/*                         <span class="upload-filename">*/
/*                             {{ 'pim_enrich.product.no_compared_media'|trans }}*/
/*                         </span>*/
/*                     </div>*/
/*                 </label>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {% endspaceless %}*/
/* {% endblock pim_enrich_image_row %}*/
/* */
/* {% block widget_attributes %}*/
/* {% if attr.size is not defined %}*/
/*     {% if attr.class is defined %}*/
/*         {% if 'input-' not in attr.class %}*/
/*             {% set class = attr.class ~ ' input-large' %}*/
/*         {% else %}*/
/*             {% set class = attr.class %}*/
/*         {% endif %}*/
/*     {% else %}*/
/*         {% set class = 'input-large' %}*/
/*     {% endif %}*/
/*     {% set attr = attr|merge({'class': class }) %}*/
/* {% endif %}*/
/* {% spaceless %}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if read_only %} readonly="readonly"{% endif %}{% if disabled %} disabled="disabled"{% endif %}{% if required %} required="required"{% endif %}{% if max_length %} maxlength="{{ max_length }}"{% endif %}{% if pattern %} pattern="{{ pattern }}"{% endif %}*/
/*     {% for attrname, attrvalue in attr %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}="{{ attrvalue|trans({}, translation_domain) }}" {% else %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock widget_attributes %}*/
/* */
/* {% block switch_widget %}*/
/* {% spaceless %}*/
/*     {% set originalId = id %}*/
/*     {% set id         = 'input-' ~ originalId %}*/
/*     {% set switchId   = 'switch-' ~ originalId %}*/
/*     <div id="{{ switchId }}" class="switch switch-{{ attr.size is defined ? attr.size : 'small' }}" data-on-label="{{ (attr['data-on-label'] is defined ? attr['data-on-label'] : 'switch_on')|trans }}" data-off-label="{{ (attr['data-off-label'] is defined ? attr['data-off-label'] : 'switch_off')|trans }}">*/
/*         {% if required %}{% set required = false %}{% endif %}*/
/*         <input id="{{ originalId }}" type="checkbox" {% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %}{% if disabled %} disabled="disabled"{% endif %}>*/
/*         <input type="hidden" {{ block('widget_attributes') }}{% if checked or attr.checked is defined and attr.checked %} value="1"{% endif %}>*/
/*     </div>*/
/*     <script type="text/javascript">*/
/*     require(*/
/*         ['jquery'],*/
/*         function ($) {*/
/*             'use strict';*/
/*             $(function() {*/
/*                 $('#{{ switchId }}').closest('form').on('switch-change', '#{{ switchId }}', function (e, data) {*/
/*                     $('#{{ id }}').val(+data.value);*/
/*                 });*/
/*             });*/
/*         }*/
/*     );*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock switch_widget %}*/
/* */
/* {% block pim_enrich_metric_row %}*/
/* {% spaceless %}*/
/*     <div class="control-group">*/
/*         {{ form_label(form, null, { 'label_attr': {'class': 'control-label', 'for': form.data.vars.id} }) }}*/
/*         <div class="controls metric input-append">*/
/*             {{ form_widget(form.data, { 'attr': { 'class': 'input-small' }}) }}*/
/*             {{ form_widget(form.unit, { 'attr': { 'class': 'select2 input-small append' }}) }}*/
/*             {{ form_widget(form.family) }}*/
/*             {{ form_errors(form.data) }}*/
/*             {{ block('form_info') }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock pim_enrich_metric_row %}*/
/* */
/* {% block pim_enrich_price_collection_row %}*/
/*     {{ form_row(form, { attr: { class: 'hide' }}) }}*/
/* {% endblock pim_enrich_price_collection_row %}*/
/* */
/* {% block pim_enrich_price_collection_widget %}*/
/*     {% for child in form.children %}*/
/*         {{ form_widget(child) }}*/
/*         {{ form_errors(child.data) }}*/
/*     {% endfor %}*/
/*     {{ block('form_info') }}*/
/* {% endblock pim_enrich_price_collection_widget %}*/
/* */
/* {% block pim_enrich_price_widget %}*/
/* {% spaceless %}*/
/*     {% set metadata = {*/
/*         label: currency_symbol(form.currency.vars.value),*/
/*         currency: {*/
/*             fieldName: form.currency.vars.full_name,*/
/*             fieldId:   form.currency.vars.id,*/
/*             data:      form.currency.vars.value,*/
/*             disabled:  form.data.vars.disabled*/
/*         },*/
/*         value: {*/
/*             fieldName: form.data.vars.full_name,*/
/*             fieldId:   form.data.vars.id,*/
/*             data:      form.data.vars.value,*/
/*             disabled:  form.data.vars.disabled*/
/*         }*/
/*     } %}*/
/*     <div class="currency-field" data-metadata="{{ metadata|json_encode }}"></div>*/
/* {% endspaceless %}*/
/* {% endblock pim_enrich_price_widget %}*/
/* */
/* {% block pim_enrich_attribute_requirement_widget %}*/
/*     {% set requiredTitle = 'Required'|trans %}*/
/*     {% set nonRequiredTitle = 'Not required'|trans %}*/
/*     <div class="attribute-requirement" data-required-title="{{ requiredTitle }}" data-not-required-title="{{ nonRequiredTitle }}">*/
/*         {% if form.required.vars.keep_non_required %}*/
/*             <input type="hidden" id="{{ form.required.vars.id }}" name="{{ form.required.vars.full_name }}" class="hide" value="{{ form.required.vars.value ? '1': '0' }}" />*/
/*             <i class="icon-{{ form.required.vars.value ? 'ok ' : 'circle non-' }}required" data-toggle="tooltip" data-placement="right" data-original-title="{{ form.required.vars.value ? requiredTitle : nonRequiredTitle }}"></i>*/
/*         {% else %}*/
/*             <input type="checkbox" id="{{ form.required.vars.id }}" name="{{ form.required.vars.full_name }}" class="hide" {% if form.required.vars.checked %}checked="checked"{% endif %} />*/
/*             <i class="icon-{{ form.required.vars.checked ? 'ok ' : 'circle non-' }}required" data-toggle="tooltip" data-placement="right" data-original-title="{{ form.required.vars.checked ? requiredTitle : nonRequiredTitle }}"></i>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock pim_enrich_attribute_requirement_widget %}*/
/* */
/* {% block pim_ajax_entity_row %}*/
/*     {{ block('form_row_field') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_date_widget %}*/
/*     {% set attr = attr|merge({ 'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'datepicker', 'placeholder': placeholder|trans }) %}*/
/*     {% if form.vars.disabled %}*/
/*         {% set attr = attr|merge({'disabled': 'disabled'}) %}*/
/*     {% endif %}*/
/* */
/*     {{ block('date_widget') }}*/
/* {% endblock oro_date_widget %}*/
/* */
/* {% block pim_number_widget %}*/
/*     {{ block('number_widget') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_privilege_widget %}*/
/*     {% spaceless %}*/
/*         {% if 'groups' == privileges_config.view_type %}*/
/*             {% if 'entity' == form.vars.value.extensionKey and '(default)' != form.vars.value.identity.name %}*/
/*                 {{ form_widget(form.identity.id) }}*/
/*                 {{ form_widget(form.permissions) }}*/
/*             {% else %}*/
/*                 <div class="acl-permission{{ form.vars.value.identity.name == '(default)' ? ' default-field' : '' }}">*/
/*                     {{ form_widget(form.identity) }}*/
/*                     {{ form_widget(form.permissions) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <tr class="acl-permission{{ form.vars.value.identity.name == '(default)' ? ' default-field' : '' }}">*/
/*                 <td>*/
/*                     {{ form_widget(form.identity) }}*/
/*                 </td>*/
/*                 {{ form_widget(form.permissions) }}*/
/*             </tr>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_widget %}*/
/*     {{ form_widget(form.name) }}*/
/*     {{ form_widget(form.accessLevel) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_collection_widget %}*/
/*     {% if 'entity' == form.parent.vars.value.extensionKey %}*/
/*         {% for field in privileges_config['permissions'] %}*/
/*             {% for permission in form if permission.vars.value.name == field %}*/
/*                 {% set additionalClass = field == 'ASSIGN' or '(default)' == form.parent.vars.value.identity.name ? ' default-field' : '' %}*/
/*                 {% if 'entity:Oro\\Bundle\\UserBundle\\Entity\\Role' == form.parent.vars.value.identity.id %}*/
/*                     {% set additionalClass = additionalClass ~ ' default-field-toggle' %}*/
/*                 {% endif %}*/
/*                 <div class="acl-permission{{ additionalClass }}" data-permission="{{ field }}">*/
/*                     <strong>{{ ('oro_security.acl.' ~ form.parent.vars.value.identity.name ~ '.' ~ field)|lower|trans }}</strong>*/
/*                     {{ form_widget(permission) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         {% for field in privileges_config['permissions'] %}*/
/*             {% for permission in form if permission.vars.value.name == field %}*/
/*                 {{ form_widget(permission) }}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block pim_acl_access_level_selector_widget %}*/
/*     <i class="icon-{{ form.vars.checked ? 'ok ' : 'remove non-' }}granted acl-permission-toggle"></i>*/
/*     {% set attr = attr|merge({ class: 'hide' }) %}*/
/*     {{ block('checkbox_widget') }}*/
/* {% endblock %}*/
/* */
