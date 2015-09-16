<?php

/* OroFormBundle:Form:fields.html.twig */
class __TwigTemplate_d0aff12a55599a1588c91d046e1ca68607269bc85cf407e9bff5cfff67c7df58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroFormBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'genemu_jqueryselect2_country_row' => array($this, 'block_genemu_jqueryselect2_country_row'),
            'genemu_jqueryselect2_choice_row' => array($this, 'block_genemu_jqueryselect2_choice_row'),
            'genemu_jqueryselect2_entity_row' => array($this, 'block_genemu_jqueryselect2_entity_row'),
            'genemu_jqueryselect2_row' => array($this, 'block_genemu_jqueryselect2_row'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
            'genemu_jqueryselect2_entity_widget' => array($this, 'block_genemu_jqueryselect2_entity_widget'),
            'genemu_jqueryselect2_entity_widget_collapsed' => array($this, 'block_genemu_jqueryselect2_entity_widget_collapsed'),
            'oro_ticker_symbol_widget' => array($this, 'block_oro_ticker_symbol_widget'),
            'oro_jqueryselect2_hidden_row' => array($this, 'block_oro_jqueryselect2_hidden_row'),
            'oro_icon_select_widget' => array($this, 'block_oro_icon_select_widget'),
            'oro_combobox_dataconfig_autocomplete' => array($this, 'block_oro_combobox_dataconfig_autocomplete'),
            'oro_combobox_dataconfig_relation' => array($this, 'block_oro_combobox_dataconfig_relation'),
            'oro_combobox_dataconfig_grid' => array($this, 'block_oro_combobox_dataconfig_grid'),
            'oro_multiple_entity_widget' => array($this, 'block_oro_multiple_entity_widget'),
            'form_label' => array($this, 'block_form_label'),
            'oro_money_currency_addon' => array($this, 'block_oro_money_currency_addon'),
            'oro_money_widget' => array($this, 'block_oro_money_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_datetime_widget' => array($this, 'block_oro_datetime_widget'),
            'oro_collection_widget' => array($this, 'block_oro_collection_widget'),
            'oro_form_js_validation' => array($this, 'block_oro_form_js_validation'),
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
    public function block_genemu_jqueryselect2_country_row($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock("genemu_jqueryselect2_row", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_genemu_jqueryselect2_choice_row($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayBlock("genemu_jqueryselect2_row", $context, $blocks);
        echo "
";
    }

    // line 11
    public function block_genemu_jqueryselect2_entity_row($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->displayBlock("genemu_jqueryselect2_row", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_genemu_jqueryselect2_row($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("attr" => array("class" => "select2")));
        echo "
    ";
        // line 17
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    // line 20
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 22
        echo "    <div class=\"input-append\">
        ";
        // line 23
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 24
        echo "        <input class=\"input-addon\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        <span class=\"add-on\">%</span>
    </div>
";
    }

    // line 29
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 30
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oro/select2-config', 'jquery.select2'],
        function(\$, Select2Config){
            var \$field = \$('#";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 35
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 76
        echo "        });
    </script>
";
    }

    // line 35
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        $context["url"] = "";
        // line 37
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "ajax", array(), "any", false, true), "url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array()))) {
            // line 38
            echo "            ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array());
            // line 39
            echo "            ";
        } elseif (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()))) {
            // line 40
            echo "            ";
            $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()));
            // line 41
            echo "            ";
        }
        // line 42
        echo "
            ";
        // line 43
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "placeholder", array(), "any", true, true)) {
            // line 44
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("placeholder" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "placeholder", array()))));
            // line 45
            echo "            ";
        }
        // line 46
        echo "            ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "result_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "result_template_twig", array()))) {
            // line 47
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("result_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "result_template_twig", array()))));
            // line 48
            echo "            ";
        }
        // line 49
        echo "            ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "selection_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "selection_template_twig", array()))) {
            // line 50
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("selection_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "selection_template_twig", array()))));
            // line 51
            echo "            ";
        }
        // line 52
        echo "
            var select2Config = ";
        // line 53
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";
            ";
        // line 54
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "extra_config", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "extra_config", array()))) {
            // line 55
            echo "            ";
            $this->displayBlock(("oro_combobox_dataconfig_" . $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "extra_config", array())), $context, $blocks);
            echo "
            ";
        }
        // line 57
        echo "
            ";
        // line 58
        if ( !array_key_exists("excluded", $context)) {
            // line 59
            echo "                ";
            $context["excluded"] = array();
            // line 60
            echo "            ";
        }
        // line 61
        echo "            if (\$field.length) {
                var configurator = new Select2Config(
                    select2Config,
                    \$field[0].tagName.toLowerCase(),
                    ";
        // line 65
        echo twig_jsonencode_filter((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo ",
                    ";
        // line 66
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array()), 10)) : (10)), "html", null, true);
        echo ",
                    ";
        // line 67
        echo twig_jsonencode_filter((isset($context["excluded"]) ? $context["excluded"] : $this->getContext($context, "excluded")));
        echo "
                );
                select2Config = configurator.getConfig();
            }

            \$field.select2(select2Config);

            \$field.trigger('select2-init');
            ";
    }

    // line 80
    public function block_genemu_jqueryselect2_entity_widget($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        ob_start();
        // line 82
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 83
            echo "            ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
        ";
        } else {
            // line 85
            echo "            ";
            $this->displayBlock("genemu_jqueryselect2_entity_widget_collapsed", $context, $blocks);
            echo "
        ";
        }
        // line 87
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 90
    public function block_genemu_jqueryselect2_entity_widget_collapsed($context, array $blocks = array())
    {
        // line 91
        echo "    ";
        ob_start();
        // line 92
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 93
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 94
            echo "                <option ";
            if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo " selected=\"selected\"";
            }
            echo " value=\"\">
                    ";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                </option>
            ";
        }
        // line 98
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 99
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 100
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 101
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 102
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 104
            echo "            ";
        }
        // line 105
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 106
        echo "            ";
        $this->displayBlock("choice_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 111
    public function block_oro_ticker_symbol_widget($context, array $blocks = array())
    {
        // line 112
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    // line 161
    public function block_oro_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        // line 162
        echo "    ";
        $this->displayBlock("genemu_jqueryselect2_row", $context, $blocks);
        echo "
";
    }

    // line 165
    public function block_oro_icon_select_widget($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 167
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    // line 170
    public function block_oro_combobox_dataconfig_autocomplete($context, array $blocks = array())
    {
        // line 171
        echo "    ";
        $context["url"] = "";
        // line 172
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "ajax", array(), "any", false, true), "url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array()))) {
            // line 173
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array());
            // line 174
            echo "    ";
        } elseif (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()))) {
            // line 175
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()));
            // line 176
            echo "    ";
        }
        // line 177
        echo "    select2Config.ajax = {
        'url': ";
        // line 178
        echo twig_jsonencode_filter((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo ",
        'data': function (query, page) {
            return {
                'page': page,
                'per_page': ";
        // line 182
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array()), 10)) : (10)), "html", null, true);
        echo ",
                'name': \"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "autocomplete_alias", array()), "html", null, true);
        echo "\",
                'query': query
            };
        },
        'results': function (data, page) {
            return data;
        }
    };
";
    }

    // line 193
    public function block_oro_combobox_dataconfig_relation($context, array $blocks = array())
    {
        // line 194
        echo "    ";
        $context["url"] = "";
        // line 195
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "ajax", array(), "any", false, true), "url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array()))) {
            // line 196
            echo "    ";
            $context["url"] = $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array());
            // line 197
            echo "    ";
        } elseif (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()))) {
            // line 198
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()));
            // line 199
            echo "    ";
        }
        // line 200
        echo "    select2Config.ajax = {
        'url': ";
        // line 201
        echo twig_jsonencode_filter((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo ",
        'data': function (query, page) {
            return {
                'page': page,
                'per_page': ";
        // line 205
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array()), 10)) : (10)), "html", null, true);
        echo ",
                'name': \"";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "autocomplete_alias", array()), "html", null, true);
        echo "\",
                'query': query + ',";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "target_entity", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "target_field", array()), "html", null, true);
        echo "'
            };
        },
        'results': function (data, page) {
            return data;
        }
    };
";
    }

    // line 216
    public function block_oro_combobox_dataconfig_grid($context, array $blocks = array())
    {
        // line 217
        echo "    ";
        $context["url"] = (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "ajax", array(), "any", false, true), "url", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "ajax", array()), "url", array())) : ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route", array()), array("_format" => "json"))));
        // line 218
        echo "    select2Config.ajax = {
        'url': ";
        // line 219
        echo twig_jsonencode_filter((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        echo ",
        'data': function (query, page) {
            return {
                '";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array()), "html", null, true);
        echo "[_pager][_page]': page,
                '";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array()), "html", null, true);
        echo "[_pager][_per_page]': ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "per_page", array()), 10)) : (10)), "html", null, true);
        echo ",
                '";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array()), "html", null, true);
        echo "[_sort_by][";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "sort_by", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "sort_by", array()), $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "properties", array()), 0, array(), "array"))) : ($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "properties", array()), 0, array(), "array"))), "html", null, true);
        echo "]': \"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "sort_order", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "sort_order", array()), "ASC")) : ("ASC")), "html", null, true);
        echo "\",
                '";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array()), "html", null, true);
        echo "[_filter][";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "properties", array()), 0, array(), "array"), "html", null, true);
        echo "][type]': 1,
                '";
        // line 226
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array()), "html", null, true);
        echo "[_filter][";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "properties", array()), 0, array(), "array"), "html", null, true);
        echo "][value]': query
            };
        },
        'results': function (data, page) {
            return {
                results: \$.map(data.data, function(item) {
                    return {'id': item.id, 'text': item.";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "properties", array()), 0, array(), "array"), "html", null, true);
        echo "};
                }),
                more: page*10 < data.options.totalRecords
            };
        }
    };
";
    }

    // line 240
    public function block_oro_multiple_entity_widget($context, array $blocks = array())
    {
        // line 241
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <style type=\"text/css\">
        #";
        // line 244
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container .entity-item {
            padding: 5px 7px;
            margin-left: 0;
            margin-right: 1.5%;
            margin-top: 15px;
            height: 80px;
            min-width: 290px;
        }

        #";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container .entity-item h4 {
            margin: 3px 0;
        }
    </style>

    <div id=\"";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container\"></div>

    <script type=\"text/javascript\">
        require(['jquery',
            'oro/multiple-entity', 'oro/multiple-entity/collection', 'oro/multiple-entity/model',
            'text!";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entities.html"), "html", null, true);
        echo "',
            'text!";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entity.html"), "html", null, true);
        echo "'
        ],
        function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel, EntitiesTpl, EntityTpl) {
            var widget = new MultipleEntity({
                el: '#";
        // line 268
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container',
                template: EntitiesTpl,
                elementTemplate: EntityTpl,
                addedElement: '#";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_added',
                removedElement: '#";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_removed',
                name: ";
        // line 273
        echo twig_jsonencode_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo ",
                defaultElement: ";
        // line 274
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "default_element", array()));
        echo ",
                selectionUrl: ";
        // line 275
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_url", array()));
        echo ",
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: ";
        // line 277
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "selector_window_title", array())));
        echo "
            });
            var data = [];
            ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["initial_elements"]) ? $context["initial_elements"] : $this->getContext($context, "initial_elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 281
            echo "                data.push(new MultipleEntityModel(";
            echo twig_jsonencode_filter($context["element"]);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 283
        echo "            widget.getCollection().reset(data);
        });
    </script>
";
    }

    // line 288
    public function block_form_label($context, array $blocks = array())
    {
        // line 289
        echo "    ";
        ob_start();
        // line 290
        echo "        ";
        if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 291
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 292
            echo "        ";
        }
        // line 293
        echo "        ";
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 294
            echo "            ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            // line 295
            echo "        ";
        }
        // line 296
        echo "        ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 297
            echo "            ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 298
            echo "        ";
        }
        // line 299
        echo "        ";
        $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
        // line 300
        echo "        <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
        echo ">
            ";
        // line 301
        if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")))) {
            // line 302
            echo "                ";
            $context["tooltip"] = $this->env->getExtension('translator')->trans((isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")));
            // line 303
            echo "                ";
            if (((array_key_exists("tooltip_details_enabled", $context) && (isset($context["tooltip_details_enabled"]) ? $context["tooltip_details_enabled"] : $this->getContext($context, "tooltip_details_enabled"))) || (            // line 304
array_key_exists("tooltip_details_anchor", $context) || array_key_exists("tooltip_details_link", $context)))) {
                // line 305
                echo "                    ";
                $context["helpLink"] = ((array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter((isset($context["tooltip_details_link"]) ? $context["tooltip_details_link"] : $this->getContext($context, "tooltip_details_link")), $this->env->getExtension('oro_help')->getHelpLinkUrl())) : ($this->env->getExtension('oro_help')->getHelpLinkUrl()));
                // line 306
                echo "                    ";
                if ((array_key_exists("tooltip_details_anchor", $context) && (isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : $this->getContext($context, "tooltip_details_anchor")))) {
                    // line 307
                    echo "                        ";
                    $context["helpLink"] = (((isset($context["helpLink"]) ? $context["helpLink"] : $this->getContext($context, "helpLink")) . "#") . (isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : $this->getContext($context, "tooltip_details_anchor")));
                    // line 308
                    echo "                    ";
                }
                // line 309
                echo "                    ";
                $context["tooltip"] = ((((((isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                 // line 310
(isset($context["helpLink"]) ? $context["helpLink"] : $this->getContext($context, "helpLink"))) . "\">") . $this->env->getExtension('translator')->trans("Read more")) . "</a></div></div>");
                // line 311
                echo "                ";
            }
            // line 312
            echo "                <i class=\"icon-info-sign\"
                    style=\"color: #6b92d0;font-size: 13px;\"
                    ";
            // line 314
            if (array_key_exists("tooltip_placement", $context)) {
                echo "data-placement=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : $this->getContext($context, "tooltip_placement")), "html", null, true);
                echo "\"";
            }
            // line 315
            echo "                    data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
            echo "\"
                    data-toggle=\"popover\"></i>
            ";
        }
        // line 318
        echo "            ";
        if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : $this->getContext($context, "isRadioLabel")))) {
            // line 319
            echo "                <em>*</em>
            ";
        }
        // line 321
        echo "            ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))), "html", null, true);
        echo "
        </label>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 326
    public function block_oro_money_currency_addon($context, array $blocks = array())
    {
        // line 327
        echo "    <span class=\"add-on\">";
        echo twig_escape_filter($this->env, (isset($context["currency_symbol"]) ? $context["currency_symbol"] : $this->getContext($context, "currency_symbol")), "html", null, true);
        echo "</span>
";
    }

    // line 330
    public function block_oro_money_widget($context, array $blocks = array())
    {
        // line 331
        echo "    ";
        ob_start();
        // line 332
        echo "        ";
        if ((null === (isset($context["currency_symbol_prepend"]) ? $context["currency_symbol_prepend"] : $this->getContext($context, "currency_symbol_prepend")))) {
            // line 333
            echo "            ";
            $context["div_input_class"] = "";
            // line 334
            echo "        ";
        } elseif (((isset($context["currency_symbol_prepend"]) ? $context["currency_symbol_prepend"] : $this->getContext($context, "currency_symbol_prepend")) == true)) {
            // line 335
            echo "            ";
            $context["div_input_class"] = "input-prepend";
            // line 336
            echo "        ";
        } else {
            // line 337
            echo "            ";
            $context["div_input_class"] = "input-append";
            // line 338
            echo "        ";
        }
        // line 339
        echo "
        ";
        // line 340
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " input-addon"))));
        // line 341
        echo "
        <div class=\"";
        // line 342
        echo twig_escape_filter($this->env, (isset($context["div_input_class"]) ? $context["div_input_class"] : $this->getContext($context, "div_input_class")), "html", null, true);
        echo "\">
            ";
        // line 343
        $context["money_field"] = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"));
        // line 344
        echo "            ";
        $context["money_field"] = twig_replace_filter((isset($context["money_field"]) ? $context["money_field"] : $this->getContext($context, "money_field")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        // line 345
        echo "            ";
        $context["money_field"] = twig_replace_filter((isset($context["money_field"]) ? $context["money_field"] : $this->getContext($context, "money_field")), array("{{ currency }}" => $this->renderBlock("oro_money_currency_addon", $context, $blocks)));
        // line 346
        echo "            ";
        echo (isset($context["money_field"]) ? $context["money_field"] : $this->getContext($context, "money_field"));
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 351
    public function block_oro_date_widget($context, array $blocks = array())
    {
        // line 352
        echo "    ";
        $context["actual_id"] = (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        // line 353
        echo "    ";
        $context["selector_name"] = ("date_selector_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 354
        echo "    ";
        $context["selector_id"] = (isset($context["selector_name"]) ? $context["selector_name"] : $this->getContext($context, "selector_name"));
        // line 355
        echo "
    ";
        // line 357
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-input-id" => (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id"))));
        // line 358
        echo "    <span style=\"display:none\">";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "</span>

    ";
        // line 361
        echo "    <input type=\"text\"
           name=\"";
        // line 362
        echo twig_escape_filter($this->env, (isset($context["selector_name"]) ? $context["selector_name"] : $this->getContext($context, "selector_name")), "html", null, true);
        echo "\"
           id=\"";
        // line 363
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id")), "html", null, true);
        echo "\"
           placeholder=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\">
        require(['jquery', 'oro/formatter/datetime', 'jquery-ui'],
        function(\$, datetimeFormatter) {
            var selector = \$(\"#";
        // line 369
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id")), "html", null, true);
        echo "\");
            var actual = \$(\"#";
        // line 370
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : $this->getContext($context, "actual_id")), "html", null, true);
        echo "\");
            var sync = function() {
                selector.val(datetimeFormatter.formatDate(actual.val()));
            };
            actual.on('change', sync);
            if (actual.val() && actual.val().length) {
                sync();
            }
            selector.datepicker({
                altField: '#";
        // line 379
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : $this->getContext($context, "actual_id")), "html", null, true);
        echo "',
                altFormat: 'yy-mm-dd',
                changeMonth: true,
                changeYear: true,
                yearRange: '-80:+1',
                showButtonPanel: true
            });
            selector.keyup(
                function () {
                    var selectorValue = selector.val();
                    if (datetimeFormatter.isDateValid(selectorValue)) {
                        actual.val(datetimeFormatter.convertDateToBackendFormat(selectorValue));
                    } else {
                        actual.val('');
                    }
                }
            );
        });
    </script>
";
    }

    // line 400
    public function block_oro_datetime_widget($context, array $blocks = array())
    {
        // line 401
        echo "    ";
        $context["actual_id"] = (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        // line 402
        echo "    ";
        $context["selector_name"] = ("datetime_selector_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 403
        echo "    ";
        $context["selector_id"] = (isset($context["selector_name"]) ? $context["selector_name"] : $this->getContext($context, "selector_name"));
        // line 404
        echo "
    ";
        // line 406
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-input-id" => (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id"))));
        // line 407
        echo "    <span style=\"display:none\">";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "</span>

    ";
        // line 410
        echo "    <input type=\"text\"
           name=\"";
        // line 411
        echo twig_escape_filter($this->env, (isset($context["selector_name"]) ? $context["selector_name"] : $this->getContext($context, "selector_name")), "html", null, true);
        echo "\"
           id=\"";
        // line 412
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id")), "html", null, true);
        echo "\"
           placeholder=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))), "html", null, true);
        echo "\" />

    <script type=\"text/javascript\">
        require(['jquery', 'oro/formatter/datetime', 'jquery-ui-timepicker'],
        function(\$, datetimeFormatter) {
            var selector = \$(\"#";
        // line 418
        echo twig_escape_filter($this->env, (isset($context["selector_id"]) ? $context["selector_id"] : $this->getContext($context, "selector_id")), "html", null, true);
        echo "\");
            var actual = \$(\"#";
        // line 419
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : $this->getContext($context, "actual_id")), "html", null, true);
        echo "\");
            var sync = function() {
                selector.val(datetimeFormatter.formatDateTime(actual.val()));
            };
            actual.on('change', sync);
            if (actual.val() && actual.val().length) {
                sync();
            }
            selector.datetimepicker({
                altField: '#";
        // line 428
        echo twig_escape_filter($this->env, (isset($context["actual_id"]) ? $context["actual_id"] : $this->getContext($context, "actual_id")), "html", null, true);
        echo "',
                altFormat: 'yy-mm-dd',
                altTimeFormat: 'HH:mm:ssz',
                altFieldTimeOnly: false,
                altSeparator: 'T',
                changeMonth: true,
                changeYear: true,
                yearRange: '-80:+1',
                showButtonPanel: true
            });
            selector.keyup(
                function () {
                    var selectorValue = selector.val();
                    if (datetimeFormatter.isDateTimeValid(selectorValue)) {
                        actual.val(datetimeFormatter.convertDateTimeToBackendFormat(selectorValue));
                    } else {
                        actual.val('');
                    }
                }
            );
        });
    </script>
";
    }

    // line 468
    public function block_oro_collection_widget($context, array $blocks = array())
    {
        // line 469
        echo "    ";
        ob_start();
        // line 470
        echo "        ";
        $context["prototypeHtml"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method");
        // line 471
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 472
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
        // line 473
        echo "        <div class=\"row-oro\">
            <div ";
        // line 474
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["prototypeHtml"]) ? $context["prototypeHtml"] : $this->getContext($context, "prototypeHtml")));
        echo "\">
                ";
        // line 475
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()))) {
            // line 476
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 477
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 479
            echo "                ";
        } elseif ((isset($context["show_form_when_empty"]) ? $context["show_form_when_empty"] : $this->getContext($context, "show_form_when_empty"))) {
            // line 480
            echo "                    ";
            echo twig_replace_filter((isset($context["prototypeHtml"]) ? $context["prototypeHtml"] : $this->getContext($context, "prototypeHtml")), array("__name__" => "0"));
            echo "
                ";
        }
        // line 482
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
        ";
        // line 485
        echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 513
    public function block_oro_form_js_validation($context, array $blocks = array())
    {
        // line 514
        echo "<script type=\"text/javascript\">
    require(['jquery', 'jquery.validate'],
    function (\$) {
        var options = ";
        // line 517
        echo (((isset($context["js_options"]) ? $context["js_options"] : $this->getContext($context, "js_options"))) ? (twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : $this->getContext($context, "js_options")))) : ("{}"));
        echo ";
        \$('#";
        // line 518
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "').validate(options);
    });
</script>
";
    }

    // line 452
    public function getoro_collection_item_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 453
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array())))) {
                // line 454
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 455
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 456
                echo "    ";
            } else {
                // line 457
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 458
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 459
                echo "    ";
            }
            // line 460
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-validation-optional-group>
        <div class=\"row-oro oro-multiselect-holder\">
            ";
            // line 462
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 463
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 489
    public function getoro_collection_validate_primary_js($__context__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 490
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "primary", array(), "any", true, true)) {
                // line 491
                echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 495
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
                echo "');
                    /**
                     * Allow only 1 primary checkbox to be checked.
                     * This logic convert checkbox logic to logic used in radiobutton
                     */
                    container.on('click', '[name\$=\"[primary]\"]', function() {
                        container.find('[name\$=\"[primary]\"]').each(function (idx, el) {
                            el.checked = false;
                        });
                        this.checked = true;
                    });
                });
            });
        </script>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1194 => 495,  1188 => 491,  1185 => 490,  1173 => 489,  1158 => 463,  1154 => 462,  1148 => 460,  1145 => 459,  1142 => 458,  1139 => 457,  1136 => 456,  1133 => 455,  1130 => 454,  1127 => 453,  1115 => 452,  1107 => 518,  1103 => 517,  1098 => 514,  1095 => 513,  1088 => 485,  1083 => 483,  1080 => 482,  1074 => 480,  1071 => 479,  1062 => 477,  1057 => 476,  1055 => 475,  1049 => 474,  1046 => 473,  1043 => 472,  1040 => 471,  1037 => 470,  1034 => 469,  1031 => 468,  1004 => 428,  992 => 419,  988 => 418,  980 => 413,  976 => 412,  972 => 411,  969 => 410,  963 => 407,  960 => 406,  957 => 404,  954 => 403,  951 => 402,  948 => 401,  945 => 400,  921 => 379,  909 => 370,  905 => 369,  897 => 364,  893 => 363,  889 => 362,  886 => 361,  880 => 358,  877 => 357,  874 => 355,  871 => 354,  868 => 353,  865 => 352,  862 => 351,  853 => 346,  850 => 345,  847 => 344,  845 => 343,  841 => 342,  838 => 341,  836 => 340,  833 => 339,  830 => 338,  827 => 337,  824 => 336,  821 => 335,  818 => 334,  815 => 333,  812 => 332,  809 => 331,  806 => 330,  799 => 327,  796 => 326,  787 => 321,  783 => 319,  780 => 318,  773 => 315,  767 => 314,  763 => 312,  760 => 311,  758 => 310,  756 => 309,  753 => 308,  750 => 307,  747 => 306,  744 => 305,  742 => 304,  740 => 303,  737 => 302,  735 => 301,  719 => 300,  716 => 299,  713 => 298,  710 => 297,  707 => 296,  704 => 295,  701 => 294,  698 => 293,  695 => 292,  692 => 291,  689 => 290,  686 => 289,  683 => 288,  676 => 283,  667 => 281,  663 => 280,  657 => 277,  652 => 275,  648 => 274,  644 => 273,  640 => 272,  636 => 271,  630 => 268,  623 => 264,  619 => 263,  611 => 258,  603 => 253,  591 => 244,  584 => 241,  581 => 240,  570 => 232,  559 => 226,  553 => 225,  545 => 224,  539 => 223,  535 => 222,  529 => 219,  526 => 218,  523 => 217,  520 => 216,  506 => 207,  502 => 206,  498 => 205,  491 => 201,  488 => 200,  485 => 199,  482 => 198,  479 => 197,  476 => 196,  473 => 195,  470 => 194,  467 => 193,  454 => 183,  450 => 182,  443 => 178,  440 => 177,  437 => 176,  434 => 175,  431 => 174,  428 => 173,  425 => 172,  422 => 171,  419 => 170,  413 => 167,  408 => 166,  405 => 165,  398 => 162,  395 => 161,  389 => 158,  345 => 117,  338 => 112,  335 => 111,  326 => 106,  323 => 105,  320 => 104,  314 => 102,  312 => 101,  307 => 100,  304 => 99,  301 => 98,  295 => 95,  288 => 94,  286 => 93,  278 => 92,  275 => 91,  272 => 90,  267 => 87,  261 => 85,  255 => 83,  252 => 82,  249 => 81,  246 => 80,  233 => 67,  229 => 66,  225 => 65,  219 => 61,  216 => 60,  213 => 59,  211 => 58,  208 => 57,  202 => 55,  200 => 54,  196 => 53,  193 => 52,  190 => 51,  187 => 50,  184 => 49,  181 => 48,  178 => 47,  175 => 46,  172 => 45,  169 => 44,  167 => 43,  164 => 42,  161 => 41,  158 => 40,  155 => 39,  152 => 38,  149 => 37,  146 => 36,  143 => 35,  137 => 76,  135 => 35,  130 => 33,  125 => 30,  122 => 29,  105 => 24,  103 => 23,  100 => 22,  97 => 21,  94 => 20,  88 => 17,  83 => 16,  80 => 15,  73 => 12,  70 => 11,  63 => 8,  60 => 7,  53 => 4,  50 => 3,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:Form:fields.html.twig' %}*/
/* */
/* {% block genemu_jqueryselect2_country_row %}*/
/*     {{ block('genemu_jqueryselect2_row') }}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_choice_row %}*/
/*     {{ block('genemu_jqueryselect2_row') }}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_entity_row %}*/
/*     {{ block('genemu_jqueryselect2_row') }}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_row %}*/
/*     {{ form_row(form, { 'attr': {'class': 'select2'} }) }}*/
/*     {{ form_javascript(form) }}*/
/* {% endblock %}*/
/* */
/* {% block percent_widget %}*/
/*     {% set type = type|default('text') %}*/
/*     <div class="input-append">*/
/*         {% set type = type|default('text') %}*/
/*         <input class="input-addon" type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         <span class="add-on">%</span>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_javascript %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/select2-config', 'jquery.select2'],*/
/*         function($, Select2Config){*/
/*             var $field = $('#{{ id }}');*/
/* */
/*             {% block genemu_jqueryselect2_javascript_prototype %}*/
/*             {% set url = '' %}*/
/*             {% if configs.ajax.url is defined and configs.ajax.url%}*/
/*             {% set url = configs.ajax.url %}*/
/*             {% elseif configs.route_name is defined and configs.route_name %}*/
/*             {% set url = path(configs.route_name) %}*/
/*             {% endif %}*/
/* */
/*             {% if configs.placeholder is defined %}*/
/*             {% set configs = configs|merge({'placeholder': configs.placeholder|trans }) %}*/
/*             {% endif %}*/
/*             {% if configs.result_template_twig is defined and configs.result_template_twig %}*/
/*             {% set configs = configs|merge({'result_template': include(configs.result_template_twig) }) %}*/
/*             {% endif %}*/
/*             {% if configs.selection_template_twig is defined and configs.selection_template_twig %}*/
/*             {% set configs = configs|merge({'selection_template': include(configs.selection_template_twig) }) %}*/
/*             {% endif %}*/
/* */
/*             var select2Config = {{ configs|json_encode|raw }};*/
/*             {% if configs.extra_config is defined and configs.extra_config %}*/
/*             {{ block('oro_combobox_dataconfig_' ~ configs.extra_config) }}*/
/*             {% endif %}*/
/* */
/*             {% if excluded is not defined %}*/
/*                 {% set excluded = [] %}*/
/*             {% endif %}*/
/*             if ($field.length) {*/
/*                 var configurator = new Select2Config(*/
/*                     select2Config,*/
/*                     $field[0].tagName.toLowerCase(),*/
/*                     {{ url|json_encode|raw }},*/
/*                     {{ configs.per_page|default(10) }},*/
/*                     {{ excluded|json_encode|raw }}*/
/*                 );*/
/*                 select2Config = configurator.getConfig();*/
/*             }*/
/* */
/*             $field.select2(select2Config);*/
/* */
/*             $field.trigger('select2-init');*/
/*             {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_entity_widget %}*/
/*     {% spaceless %}*/
/*         {% if expanded %}*/
/*             {{ block('choice_widget_expanded') }}*/
/*         {% else %}*/
/*             {{ block('genemu_jqueryselect2_entity_widget_collapsed') }}*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_entity_widget_collapsed %}*/
/*     {% spaceless %}*/
/*         <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*             {% if empty_value is not none %}*/
/*                 <option {% if value is empty %} selected="selected"{% endif %} value="">*/
/*                     {{ empty_value|trans({}, translation_domain) }}*/
/*                 </option>*/
/*             {% endif %}*/
/*             {% if preferred_choices|length > 0 %}*/
/*                 {% set options = preferred_choices %}*/
/*                 {{ block('choice_widget_options') }}*/
/*                 {% if choices|length > 0 and separator is not none %}*/
/*                     <option disabled="disabled">{{ separator }}</option>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*             {% set options = choices %}*/
/*             {{ block('choice_widget_options') }}*/
/*         </select>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block oro_ticker_symbol_widget %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'bootstrap'],*/
/*         function($){*/
/*             $(function() {*/
/*                 var cache = {};*/
/*                 $("#{{ id }}").typeahead({*/
/*                     source: function (request, process) {*/
/*                         YAHOO = {*/
/*                             Finance: {*/
/*                                 SymbolSuggest: {*/
/*                                     ssCallback: function (data) {*/
/*                                         var result = $.map(data.ResultSet.Result, function (item) {*/
/*                                             return item.name + " (" + item.symbol + ")";*/
/*                                         });*/
/*                                         $.each(data.ResultSet.Result, function (itemKey, item) {*/
/*                                             cache[item.name + " (" + item.symbol + ")"] = item.symbol;*/
/*                                         });*/
/*                                         process(result)*/
/*                                     }*/
/*                                 }*/
/*                             }*/
/*                         };*/
/*                         $.ajax({*/
/*                             type: "GET",*/
/*                             dataType: "jsonp",*/
/*                             jsonp: "callback",*/
/*                             jsonpCallback: "YAHOO.Finance.SymbolSuggest.ssCallback",*/
/*                             data: {*/
/*                                 query: request*/
/*                             },*/
/*                             cache: true,*/
/*                             url: "http://autoc.finance.yahoo.com/autoc"*/
/*                         });*/
/*                     },*/
/*                     updater: function(item) {*/
/*                         if (typeof cache[item] != 'undefined') {*/
/*                             return cache[item];*/
/*                         } else {*/
/*                             return item;*/
/*                         }*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {{ form_widget(form) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_jqueryselect2_hidden_row %}*/
/*     {{ block('genemu_jqueryselect2_row') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_icon_select_widget %}*/
/*     {{ form_widget(form) }}*/
/*     {{ form_javascript(form) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_combobox_dataconfig_autocomplete %}*/
/*     {% set url = '' %}*/
/*     {% if configs.ajax.url is defined and configs.ajax.url%}*/
/*     {% set url = configs.ajax.url %}*/
/*     {% elseif configs.route_name is defined and configs.route_name %}*/
/*         {% set url = path(configs.route_name) %}*/
/*     {% endif %}*/
/*     select2Config.ajax = {*/
/*         'url': {{ url|json_encode|raw }},*/
/*         'data': function (query, page) {*/
/*             return {*/
/*                 'page': page,*/
/*                 'per_page': {{ configs.per_page|default(10) }},*/
/*                 'name': "{{ configs.autocomplete_alias }}",*/
/*                 'query': query*/
/*             };*/
/*         },*/
/*         'results': function (data, page) {*/
/*             return data;*/
/*         }*/
/*     };*/
/* {% endblock %}*/
/* */
/* {% block oro_combobox_dataconfig_relation %}*/
/*     {% set url = '' %}*/
/*     {% if configs.ajax.url is defined and configs.ajax.url%}*/
/*     {% set url = configs.ajax.url %}*/
/*     {% elseif configs.route_name is defined and configs.route_name %}*/
/*         {% set url = path(configs.route_name) %}*/
/*     {% endif %}*/
/*     select2Config.ajax = {*/
/*         'url': {{ url|json_encode|raw }},*/
/*         'data': function (query, page) {*/
/*             return {*/
/*                 'page': page,*/
/*                 'per_page': {{ configs.per_page|default(10) }},*/
/*                 'name': "{{ configs.autocomplete_alias }}",*/
/*                 'query': query + ',{{ configs.target_entity }},{{ configs.target_field }}'*/
/*             };*/
/*         },*/
/*         'results': function (data, page) {*/
/*             return data;*/
/*         }*/
/*     };*/
/* {% endblock %}*/
/* */
/* {% block oro_combobox_dataconfig_grid %}*/
/*     {% set url = configs.ajax.url is defined ? configs.ajax.url : path(configs.route, {'_format': 'json'}) %}*/
/*     select2Config.ajax = {*/
/*         'url': {{ url|json_encode|raw }},*/
/*         'data': function (query, page) {*/
/*             return {*/
/*                 '{{ configs.grid.name }}[_pager][_page]': page,*/
/*                 '{{ configs.grid.name }}[_pager][_per_page]': {{ configs.per_page|default(10) }},*/
/*                 '{{ configs.grid.name }}[_sort_by][{{ configs.grid.sort_by|default(configs.properties[0]) }}]': "{{ configs.grid.sort_order|default('ASC') }}",*/
/*                 '{{ configs.grid.name }}[_filter][{{ configs.properties[0] }}][type]': 1,*/
/*                 '{{ configs.grid.name }}[_filter][{{ configs.properties[0] }}][value]': query*/
/*             };*/
/*         },*/
/*         'results': function (data, page) {*/
/*             return {*/
/*                 results: $.map(data.data, function(item) {*/
/*                     return {'id': item.id, 'text': item.{{- configs.properties[0] -}} };*/
/*                 }),*/
/*                 more: page*10 < data.options.totalRecords*/
/*             };*/
/*         }*/
/*     };*/
/* {% endblock %}*/
/* */
/* {% block oro_multiple_entity_widget %}*/
/*     {{ form_widget(form) }}*/
/* */
/*     <style type="text/css">*/
/*         #{{ id }}-container .entity-item {*/
/*             padding: 5px 7px;*/
/*             margin-left: 0;*/
/*             margin-right: 1.5%;*/
/*             margin-top: 15px;*/
/*             height: 80px;*/
/*             min-width: 290px;*/
/*         }*/
/* */
/*         #{{ id }}-container .entity-item h4 {*/
/*             margin: 3px 0;*/
/*         }*/
/*     </style>*/
/* */
/*     <div id="{{ id }}-container"></div>*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery',*/
/*             'oro/multiple-entity', 'oro/multiple-entity/collection', 'oro/multiple-entity/model',*/
/*             'text!{{ asset('bundles/oroform/js/multiple-entity/templates/multiple-entities.html') }}',*/
/*             'text!{{ asset('bundles/oroform/js/multiple-entity/templates/multiple-entity.html') }}'*/
/*         ],*/
/*         function($, MultipleEntity, MultipleEntityCollection, MultipleEntityModel, EntitiesTpl, EntityTpl) {*/
/*             var widget = new MultipleEntity({*/
/*                 el: '#{{ id }}-container',*/
/*                 template: EntitiesTpl,*/
/*                 elementTemplate: EntityTpl,*/
/*                 addedElement: '#{{ id }}_added',*/
/*                 removedElement: '#{{ id }}_removed',*/
/*                 name: {{ id|json_encode|raw }},*/
/*                 defaultElement: {{ form.vars.default_element|json_encode|raw }},*/
/*                 selectionUrl: {{ form.vars.grid_url|json_encode|raw }},*/
/*                 collection: new MultipleEntityCollection(),*/
/*                 selectorWindowTitle: {{ form.vars.selector_window_title|trans|json_encode|raw }}*/
/*             });*/
/*             var data = [];*/
/*             {% for element in initial_elements %}*/
/*                 data.push(new MultipleEntityModel({{ element|json_encode|raw }}));*/
/*             {% endfor %}*/
/*             widget.getCollection().reset(data);*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block form_label %}*/
/*     {% spaceless %}*/
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
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {% if tooltip is defined and tooltip %}*/
/*                 {% set tooltip = tooltip|trans %}*/
/*                 {% if (tooltip_details_enabled is defined and tooltip_details_enabled)*/
/*                     or (tooltip_details_anchor is defined or tooltip_details_link is defined) %}*/
/*                     {% set helpLink = tooltip_details_link|default(get_help_link()) %}*/
/*                     {% if tooltip_details_anchor is defined and tooltip_details_anchor %}*/
/*                         {% set helpLink = helpLink ~ '#' ~ tooltip_details_anchor %}*/
/*                     {% endif %}*/
/*                     {% set tooltip = tooltip*/
/*                         ~ '<div class="clearfix"><div class="pull-right"><a href="' ~ helpLink ~ '">' ~ 'Read more'|trans ~ '</a></div></div>' %}*/
/*                 {% endif %}*/
/*                 <i class="icon-info-sign"*/
/*                     style="color: #6b92d0;font-size: 13px;"*/
/*                     {% if tooltip_placement is defined %}data-placement="{{ tooltip_placement }}"{% endif %}*/
/*                     data-content="{{ tooltip }}"*/
/*                     data-toggle="popover"></i>*/
/*             {% endif %}*/
/*             {% if required and not isRadioLabel %}*/
/*                 <em>*</em>*/
/*             {% endif %}*/
/*             {{ label|trans({}, translation_domain)|capitalize }}*/
/*         </label>*/
/*     {% endspaceless %}*/
/* {% endblock form_label %}*/
/* */
/* {% block oro_money_currency_addon %}*/
/*     <span class="add-on">{{ currency_symbol }}</span>*/
/* {% endblock oro_money_currency_addon %}*/
/* */
/* {% block oro_money_widget %}*/
/*     {% spaceless %}*/
/*         {% if currency_symbol_prepend is null %}*/
/*             {% set div_input_class = '' %}*/
/*         {% elseif currency_symbol_prepend == true %}*/
/*             {% set div_input_class = 'input-prepend' %}*/
/*         {% else %}*/
/*             {% set div_input_class = 'input-append' %}*/
/*         {% endif %}*/
/* */
/*         {% set attr = attr|merge({'class': (attr.class|default('') ~ ' input-addon')|trim}) %}*/
/* */
/*         <div class="{{ div_input_class }}">*/
/*             {% set money_field = money_pattern %}*/
/*             {% set money_field = money_field|replace({ '{{ widget }}': block('form_widget_simple') }) %}*/
/*             {% set money_field = money_field|replace({ '{{ currency }}': block('oro_money_currency_addon') }) %}*/
/*             {{ money_field|raw }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock oro_money_widget %}*/
/* */
/* {% block oro_date_widget %}*/
/*     {% set actual_id = id %}*/
/*     {% set selector_name = 'date_selector_' ~ id %}*/
/*     {% set selector_id = selector_name %}*/
/* */
/*     {# Actual date field that uses ISO format #}*/
/*     {% set attr = attr|merge({'data-input-id': selector_id}) %}*/
/*     <span style="display:none">{{ block('date_widget') }}</span>*/
/* */
/*     {# Visible fake datepicker field that uses localized format #}*/
/*     <input type="text"*/
/*            name="{{ selector_name }}"*/
/*            id="{{ selector_id }}"*/
/*            placeholder="{{ placeholder|trans }}" />*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/formatter/datetime', 'jquery-ui'],*/
/*         function($, datetimeFormatter) {*/
/*             var selector = $("#{{ selector_id }}");*/
/*             var actual = $("#{{ actual_id }}");*/
/*             var sync = function() {*/
/*                 selector.val(datetimeFormatter.formatDate(actual.val()));*/
/*             };*/
/*             actual.on('change', sync);*/
/*             if (actual.val() && actual.val().length) {*/
/*                 sync();*/
/*             }*/
/*             selector.datepicker({*/
/*                 altField: '#{{ actual_id }}',*/
/*                 altFormat: 'yy-mm-dd',*/
/*                 changeMonth: true,*/
/*                 changeYear: true,*/
/*                 yearRange: '-80:+1',*/
/*                 showButtonPanel: true*/
/*             });*/
/*             selector.keyup(*/
/*                 function () {*/
/*                     var selectorValue = selector.val();*/
/*                     if (datetimeFormatter.isDateValid(selectorValue)) {*/
/*                         actual.val(datetimeFormatter.convertDateToBackendFormat(selectorValue));*/
/*                     } else {*/
/*                         actual.val('');*/
/*                     }*/
/*                 }*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock oro_date_widget %}*/
/* */
/* {% block oro_datetime_widget %}*/
/*     {% set actual_id = id %}*/
/*     {% set selector_name = 'datetime_selector_' ~ id %}*/
/*     {% set selector_id = selector_name %}*/
/* */
/*     {# Actual date field that uses ISO format #}*/
/*     {% set attr = attr|merge({'data-input-id': selector_id}) %}*/
/*     <span style="display:none">{{ block('datetime_widget') }}</span>*/
/* */
/*     {# Visible fake datetimepicker field that uses localized format #}*/
/*     <input type="text"*/
/*            name="{{ selector_name }}"*/
/*            id="{{ selector_id }}"*/
/*            placeholder="{{ placeholder|trans }}" />*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/formatter/datetime', 'jquery-ui-timepicker'],*/
/*         function($, datetimeFormatter) {*/
/*             var selector = $("#{{ selector_id }}");*/
/*             var actual = $("#{{ actual_id }}");*/
/*             var sync = function() {*/
/*                 selector.val(datetimeFormatter.formatDateTime(actual.val()));*/
/*             };*/
/*             actual.on('change', sync);*/
/*             if (actual.val() && actual.val().length) {*/
/*                 sync();*/
/*             }*/
/*             selector.datetimepicker({*/
/*                 altField: '#{{ actual_id }}',*/
/*                 altFormat: 'yy-mm-dd',*/
/*                 altTimeFormat: 'HH:mm:ssz',*/
/*                 altFieldTimeOnly: false,*/
/*                 altSeparator: 'T',*/
/*                 changeMonth: true,*/
/*                 changeYear: true,*/
/*                 yearRange: '-80:+1',*/
/*                 showButtonPanel: true*/
/*             });*/
/*             selector.keyup(*/
/*                 function () {*/
/*                     var selectorValue = selector.val();*/
/*                     if (datetimeFormatter.isDateTimeValid(selectorValue)) {*/
/*                         actual.val(datetimeFormatter.convertDateTimeToBackendFormat(selectorValue));*/
/*                     } else {*/
/*                         actual.val('');*/
/*                     }*/
/*                 }*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock oro_datetime_widget %}*/
/* */
/* {% macro oro_collection_item_prototype(widget) %}*/
/*     {% if 'prototype' in widget.vars|keys %}*/
/*         {% set form = widget.vars.prototype %}*/
/*         {% set name = widget.vars.prototype.vars.name %}*/
/*     {% else %}*/
/*         {% set form = widget %}*/
/*         {% set name = widget.vars.full_name %}*/
/*     {% endif %}*/
/*     <div data-content="{{ name }}" data-validation-optional-group>*/
/*         <div class="row-oro oro-multiselect-holder">*/
/*             {{ form_widget(form) }}*/
/*             <button class="removeRow btn btn-action btn-link" type="button" data-related="{{ name }}">×</button>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% block oro_collection_widget %}*/
/*     {% spaceless %}*/
/*         {% set prototypeHtml = _self.oro_collection_item_prototype(form) %}*/
/*         {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection collection-fields-list' }) %}*/
/*         {% set id = id ~ '_collection' %}*/
/*         <div class="row-oro">*/
/*             <div {{ block('widget_container_attributes') }} data-prototype="{{ prototypeHtml|escape }}">*/
/*                 {% if form.children|length %}*/
/*                     {% for child in form.children %}*/
/*                         {{ _self.oro_collection_item_prototype(child) }}*/
/*                     {% endfor %}*/
/*                 {% elseif show_form_when_empty %}*/
/*                     {{ prototypeHtml|replace({'__name__': '0'})|raw }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <a class="btn add-list-item" href="javascript: void(0);"><i class="icon-plus"></i>{{ 'Add'|trans }}</a>*/
/*         </div>*/
/*         {{ _self.oro_collection_validate_primary_js(_context) }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% macro oro_collection_validate_primary_js(context) %}*/
/*     {% if context.form.vars.prototype.primary is defined %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery'],*/
/*             function($){*/
/*                 $(function() {*/
/*                     var container = $('#{{ context.id }}');*/
/*                     /***/
/*                      * Allow only 1 primary checkbox to be checked.*/
/*                      * This logic convert checkbox logic to logic used in radiobutton*/
/*                      *//**/
/*                     container.on('click', '[name$="[primary]"]', function() {*/
/*                         container.find('[name$="[primary]"]').each(function (idx, el) {*/
/*                             el.checked = false;*/
/*                         });*/
/*                         this.checked = true;*/
/*                     });*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% block oro_form_js_validation %}*/
/* <script type="text/javascript">*/
/*     require(['jquery', 'jquery.validate'],*/
/*     function ($) {*/
/*         var options = {{ js_options ? js_options|json_encode|raw : '{}' }};*/
/*         $('#{{ form.vars.name }}').validate(options);*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
/* */
