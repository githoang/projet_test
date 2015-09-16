<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_a639562ec6de85c5debc5eb4e48e4384ae598391ceecf552f8172ce6c1ad8403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(            // line 57
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url", array()))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" =>             // line 62
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(            // line 100
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage", array()))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength", array())))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), "vars", array()), "id", array()))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), "vars", array()), "id", array()))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality", array()), "vars", array()), "id", array()))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), "vars", array()), "id", array()))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 421
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 422
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 423
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 424
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (( !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto", array()) === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array())), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array()), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 506
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('assets')->getAssetUrl($this->getAttribute(        // line 507
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 508
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 509
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail", array()), "width", array())) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height", array())) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1328 => 662,  1325 => 661,  1319 => 664,  1317 => 661,  1312 => 659,  1308 => 657,  1305 => 656,  1299 => 648,  1295 => 646,  1288 => 642,  1284 => 641,  1278 => 638,  1274 => 637,  1270 => 636,  1266 => 634,  1264 => 633,  1243 => 615,  1235 => 610,  1225 => 603,  1213 => 594,  1164 => 550,  1161 => 549,  1159 => 548,  1123 => 515,  1116 => 510,  1114 => 509,  1113 => 508,  1112 => 507,  1111 => 506,  1110 => 505,  1101 => 499,  1097 => 498,  1092 => 496,  1088 => 495,  1085 => 494,  1082 => 493,  1075 => 651,  1073 => 493,  1069 => 492,  1065 => 490,  1063 => 489,  1060 => 488,  1046 => 472,  1040 => 468,  1025 => 455,  1023 => 454,  1006 => 440,  1003 => 439,  999 => 437,  989 => 431,  987 => 430,  980 => 425,  978 => 424,  977 => 423,  976 => 422,  975 => 421,  974 => 420,  968 => 417,  965 => 416,  962 => 415,  955 => 483,  953 => 415,  949 => 414,  945 => 412,  943 => 411,  940 => 410,  933 => 405,  926 => 400,  924 => 399,  919 => 397,  914 => 395,  909 => 392,  906 => 391,  903 => 390,  900 => 389,  897 => 387,  894 => 386,  891 => 385,  889 => 384,  886 => 383,  883 => 382,  880 => 381,  878 => 380,  875 => 379,  872 => 378,  869 => 377,  867 => 376,  864 => 375,  861 => 374,  858 => 373,  856 => 372,  853 => 371,  850 => 370,  847 => 369,  844 => 368,  842 => 367,  840 => 366,  837 => 365,  830 => 357,  826 => 356,  822 => 355,  819 => 354,  816 => 353,  809 => 360,  807 => 353,  802 => 351,  798 => 349,  796 => 348,  793 => 347,  786 => 342,  780 => 338,  778 => 337,  773 => 334,  767 => 332,  759 => 327,  756 => 326,  754 => 325,  749 => 323,  745 => 322,  741 => 320,  739 => 319,  736 => 318,  729 => 313,  719 => 305,  717 => 304,  714 => 303,  703 => 294,  701 => 293,  696 => 290,  690 => 288,  684 => 287,  681 => 286,  676 => 285,  673 => 284,  665 => 279,  662 => 278,  660 => 277,  652 => 271,  647 => 268,  635 => 258,  633 => 257,  624 => 251,  620 => 250,  616 => 248,  614 => 247,  611 => 246,  601 => 238,  595 => 237,  589 => 236,  586 => 235,  581 => 234,  578 => 233,  572 => 231,  570 => 230,  561 => 224,  557 => 223,  554 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  539 => 217,  536 => 216,  534 => 215,  528 => 211,  523 => 208,  521 => 207,  514 => 203,  510 => 202,  506 => 200,  504 => 199,  501 => 198,  490 => 192,  486 => 190,  484 => 189,  481 => 188,  474 => 183,  464 => 175,  448 => 163,  446 => 162,  441 => 160,  432 => 154,  428 => 152,  426 => 151,  423 => 150,  414 => 144,  405 => 138,  401 => 137,  397 => 136,  393 => 134,  391 => 133,  388 => 132,  382 => 124,  371 => 116,  367 => 115,  362 => 114,  360 => 113,  353 => 111,  349 => 110,  345 => 109,  341 => 107,  338 => 106,  335 => 105,  333 => 104,  330 => 103,  327 => 102,  325 => 100,  323 => 99,  321 => 98,  318 => 97,  315 => 96,  308 => 127,  306 => 96,  298 => 94,  293 => 91,  291 => 90,  288 => 89,  281 => 84,  276 => 80,  265 => 72,  262 => 71,  260 => 70,  257 => 68,  252 => 65,  249 => 64,  247 => 62,  245 => 60,  242 => 59,  240 => 57,  238 => 56,  235 => 55,  233 => 54,  230 => 53,  209 => 39,  201 => 35,  199 => 34,  196 => 33,  178 => 18,  173 => 15,  171 => 14,  168 => 13,  162 => 11,  156 => 9,  144 => 4,  139 => 3,  137 => 2,  134 => 1,  129 => 667,  127 => 656,  124 => 655,  122 => 488,  119 => 487,  117 => 410,  114 => 409,  112 => 365,  109 => 364,  107 => 347,  104 => 346,  102 => 318,  99 => 317,  97 => 246,  94 => 245,  92 => 198,  89 => 197,  87 => 188,  84 => 187,  82 => 150,  79 => 149,  77 => 132,  74 => 131,  72 => 89,  69 => 88,  67 => 53,  64 => 52,  62 => 33,  59 => 32,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  47 => 9,  44 => 8,  42 => 1,);
    }
}
/* {% block form_javascript %}*/
/* {% spaceless %}*/
/*     {% for child in form %}*/
/*         {{ form_javascript(child) }}*/
/*     {% endfor %}*/
/* {% endspaceless %}*/
/* {% endblock form_javascript %}*/
/* */
/* {% block field_javascript "" %}*/
/* */
/* {% block button_javascript "" %}*/
/* */
/* {% block genemu_captcha_javascript %}*/
/* {% spaceless %}*/
/*     <!--[if lte IE 7]>*/
/*     <script type="text/javascript">*/
/*         $(function () {*/
/*             var pathBase64 = "{{ path('genemu_base64')}}";*/
/* */
/*             $(document.images).each(function(){*/
/*                 var src = $(this).attr("src");*/
/*                 if (/^data:.*;base64/i.test(src)) {*/
/*                     src = src.slice(5);*/
/*                     $(this).attr("src",pathBase64+"?"+src);*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/*     <![endif]-->*/
/* {% endspaceless %}*/
/* {% endblock genemu_captcha_javascript %}*/
/* */
/* {% block genemu_recaptcha_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript" src="{{ asset("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js") }}"></script>*/
/*     <script type="text/javascript">*/
/*         function genemu_recaptcha_load()*/
/*         {*/
/*             Recaptcha.create('{{ public_key }}', '{{ id }}_div', {{ configs|json_encode|raw }});*/
/*         }*/
/* */
/*         if (window.addEventListener) {*/
/*             window.addEventListener('load', genemu_recaptcha_load, false);*/
/*         } else if (window.attachEvent) {*/
/*             window.attachEvent('onload', genemu_recaptcha_load);*/
/*         } else {*/
/*             window.onload = genemu_recaptcha_load;*/
/*         }*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_recaptcha_javascript %}*/
/* */
/* {% block genemu_tinymce_javascript %}*/
/* {% spaceless %}*/
/*     {% if configs.script_url is defined %}*/
/*         {% set configs = configs|merge({*/
/*             "script_url": asset(configs.script_url)*/
/*         }) %}*/
/*     {% else %}*/
/*         {% set configs = configs|merge({*/
/*             "mode": "exact",*/
/*             "elements": id*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*         {%- if configs.script_url is defined %}*/
/* */
/*             var $textarea = jQuery('#{{ id }}');*/
/*             if($textarea.is('[required]')) {*/
/*                 $configs.oninit = function(editor) {*/
/*                     editor.onChange.add(function(ed, l) { ed.save(); });*/
/*                 };*/
/*             }*/
/*             $textarea.tinymce($configs);*/
/*         {% else %}*/
/* */
/*             tinyMCE.init($configs);*/
/*         {% endif -%}*/
/* */
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_tinymce_javascript %}*/
/* */
/* {% block genemu_jquerydate_javascript %}*/
/* {% spaceless %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{% if widget != "single_text" %}datepicker_{% endif %}{{ id }}');*/
/*         */
/*         {% block genemu_jquerydate_javascript_prototype %}*/
/* */
/*         {% if configs.buttonImage is defined %}*/
/*             {% set configs = configs|merge({*/
/*                 "buttonImage": asset(configs.buttonImage)*/
/*             }) %}*/
/*         {% endif %}*/
/* */
/*         {% if culture == "en" %}*/
/*             {% set culture = "en-GB" %}*/
/*         {% endif %}*/
/* */
/*             var $configs = $.extend({*/
/*                 minDate: new Date({{ min_year }}, 0, 1),*/
/*                 maxDate: new Date({{ max_year }}, 11, 31)*/
/*             }, $.datepicker.regional['{{ culture }}'] ,{{ configs|json_encode|raw }});*/
/* */
/*         {% if widget != "single_text" %}*/
/*             var $year = $('#{{ form.year.vars.id }}');*/
/*             var $month = $('#{{ form.month.vars.id }}');*/
/*             var $day = $('#{{ form.day.vars.id }}');*/
/* */
/*             $configs.onSelect = function(date) {*/
/*                 $year.val(parseInt(date.substring(0, 4), 10));*/
/*                 $month.val(parseInt(date.substring(5, 7), 10));*/
/*                 $day.val(parseInt(date.substring(8), 10));*/
/*             }*/
/*         {% endif %}*/
/* */
/*             $field.datepicker($configs);*/
/*         {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryslider_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 value: {{ value ? value : 0 }},*/
/*                 slide: function(event, ui) {*/
/*                     $field.val(ui.value);*/
/*                 }*/
/*             });*/
/* */
/*             $('#{{ id }}_slider').slider($configs);*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryslider_javascript %}*/
/* */
/* {% block genemu_jquerycolor_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $configs = $.extend({*/
/*                 color: '#' + $field.val(),*/
/*                 onBeforeShow: function() {*/
/*                     $(this).ColorPickerSetColor($field.val());*/
/*                 }*/
/*             }, {{ configs|json_encode|raw }});*/
/* */
/*         {% if widget == "image" %}*/
/*             $picker = $('#{{ id }}_color');*/
/* */
/*             $picker.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex);*/
/* */
/*                     $('div', $picker).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% else %}*/
/*             $field.ColorPicker($.extend({*/
/*                 onChange: function(hsb, hex, rgb) {*/
/*                     $field.val(hex).css({*/
/*                         backgroundColor: '#' + hex*/
/*                     });*/
/*                 }*/
/*             }, $configs));*/
/*         {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerycolor_javascript %}*/
/* */
/* {% block genemu_jqueryrating_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $('[name="{{ full_name }}"]').rating({{ configs|json_encode|raw }});*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryrating_javascript %}*/
/* */
/* {% block genemu_jquerytokeninput_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $tokeninput = $('#tokeninput_{{ id }}');*/
/* */
/*             var update_hidden_sourceinput = function(item) {*/
/*                 var $val = $tokeninput.tokenInput('get');*/
/*             {% if multiple is empty %}*/
/*                 for (first in $val) break;*/
/*                 $val = $val[first];*/
/*             {% endif %}*/
/* */
/*                 $field.val(JSON.stringify($val));*/
/*             };*/
/* */
/*             {% if value is not empty %}*/
/*                 {% if multiple is empty %}*/
/*                     {% set prePopulate = '[' ~ value ~ ']' %}*/
/*                 {% else %}*/
/*                     {% set prePopulate = value %}*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             var $configs = $.extend({{ configs|json_encode|raw }}, {*/
/*                 prePopulate: {{ prePopulate|raw }},*/
/*                 onAdd: update_hidden_sourceinput,*/
/*                 onDelete: update_hidden_sourceinput*/
/*             });*/
/* */
/*             $tokeninput.tokenInput(*/
/*             {% if route_name %}*/
/*                 '{{ path(route_name) }}'*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 {{ sourceChoices|json_encode|raw }}*/
/*             {% endif %},*/
/*                 $configs*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerytokeninput_javascript %}*/
/* */
/* {% block genemu_jqueryautocompleter_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $field = $('#{{ id }}');*/
/*             var $autocompleter = $('#autocompleter_{{ id }}');*/
/*             var $configs = {*/
/*                 focus: function(event, ui) {*/
/*                     return false;*/
/*                 },*/
/*                 select: function(event, ui) {*/
/*                 {% if multiple %}*/
/*                     terms = this.value.split(/,\s*//*);*/
/*                     terms.pop();*/
/*                     terms.push(ui.item.label);*/
/*                     terms.push('');*/
/*                     this.value = terms.join(', ');*/
/* */
/*                     terms = $field.val();*/
/*                     terms = !terms?[]:JSON.parse(terms);*/
/*                     terms.push(ui.item);*/
/*                 {% else %}*/
/*                     this.value = ui.item.label;*/
/*                     terms = ui.item;*/
/*                 {% endif %}*/
/*                     $field.val(JSON.stringify(terms));*/
/* */
/*                     return false;*/
/*                 }*/
/*             };*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 {% set sourceChoices = [] %}*/
/*                 {% for choice in choices %}*/
/*                     {% set sourceChoices = sourceChoices|merge([{'value': choice.value, 'label': choice.label}]) %}*/
/*                 {% endfor %}*/
/*                 $configs.source = {{ sourceChoices|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*                 $autocompleter.autocomplete($configs);*/
/* */
/*             {% if free_values %}*/
/*                 $autocompleter.keyup(function(){*/
/*                     var val ={}*/
/*                     var fieldval = $(this).val();*/
/*                     val['value'] = fieldval;*/
/*                     val['label'] = fieldval;*/
/* */
/*                     $field.val(JSON.stringify(val));*/
/*                 });*/
/*             {% endif %}*/
/* */
/*             {% if multiple %}*/
/*                 var $source = $autocompleter.data('autocomplete').source;*/
/* */
/*                 $autocompleter.autocomplete('option', 'source', function(request, response) {*/
/*                     request.term = request.term.split(/,\s*//*).pop();*/
/* */
/*                     $source(request, response);*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jqueryautocompleter_javascript %}*/
/* */
/* {% block genemu_jqueryautocomplete_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             var $autocompleter = $('#{{ id }}');*/
/*             var $configs = {{ configs|json_encode|raw }};*/
/* */
/*             {% if route_name %}*/
/*                 $configs.source = function(request, response) {*/
/*                     $.getJSON('{{ path(route_name) }}', {*/
/*                         term: request.term*/
/*                     }, response);*/
/*                 };*/
/*             {% else %}*/
/*                 $configs.source = {{ suggestions|json_encode|raw }};*/
/*             {% endif %}*/
/* */
/*             $autocompleter.autocomplete($configs);*/
/*             */
/*             {% if configs.minLength is defined and 0 == configs.minLength %}*/
/*                 $autocompleter.focus(function() {*/
/*                     $(this).autocomplete("search", "");*/
/*                 });*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerychosen_javascript %}*/
/* {% spaceless %}*/
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ id }}');*/
/* */
/*             {% block genemu_jquerychosen_javascript_prototype %}*/
/*                 $field.chosen({*/
/*                     no_results_text: "{{ no_results_text|trans({}, translation_domain) }}",*/
/*                     allow_single_deselect: {{ allow_single_deselect ? 'true' : 'false' }},*/
/*                     disable_search_threshold: {{ disable_search_threshold }}*/
/*                 });*/
/*             {% endblock %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jquerygeolocation_javascript %}*/
/* {% spaceless %}*/
/*     {# Elements generation #}*/
/*     {% if map is sameas(true) %}*/
/*         {% set elements = elements|merge({"map": "#" ~ id ~ "_map"}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.latitude is defined %}*/
/*         {% set elements = elements|merge({"lat": "#" ~ form.latitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.longitude is defined %}*/
/*         {% set elements = elements|merge({"lng": "#" ~ form.longitude.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.locality is defined %}*/
/*         {% set elements = elements|merge({"locality": "#" ~ form.locality.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {% if form.country is defined %}*/
/*         {% set elements = elements|merge({"country": "#" ~ form.country.vars.id}) %}*/
/*     {% endif %}*/
/* */
/*     {# Configs generation #}*/
/*     {% if elements | length > 0 %}*/
/*         {% set configs = configs|merge({"elements": elements}) %}*/
/*     {% endif %}*/
/* */
/*     <script type="text/javascript">*/
/*         jQuery(document).ready(function($) {*/
/*             $field = $('#{{ form.address.vars.id }}');*/
/* */
/*             $field.addresspicker({{ configs|json_encode|raw }});*/
/* */
/*             {% if map is sameas(true) %}*/
/*                 var gmarker = $field.addresspicker('marker');*/
/*                 gmarker.setVisible(true);*/
/* */
/*                 $field.addresspicker('updatePosition');*/
/*             {% endif %}*/
/*         });*/
/*     </script>*/
/* {% endspaceless %}*/
/* {% endblock genemu_jquerygeolocation_javascript %}*/
/* */
/* {% block genemu_jqueryfile_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryfile_javascript_prototype %}*/
/*         var $form = $field.closest('form');*/
/*         var $queue = $('#{{ id }}_queue');*/
/*         var $nbQueue = 0;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     {% if multiple %}*/
/*                         var value = $('#{{ id }}').val();*/
/*                         if (value != '') {*/
/*                             value += ",";*/
/*                         }*/
/*                         value += data.file;*/
/*                     {% else %}*/
/*                         var value = data.file;*/
/*                     {% endif %}*/
/* */
/*                     $('#{{ id }}').val(value);*/
/*                     $nbQueue--;*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onSelect: function(file) {*/
/*                 $nbQueue++;*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*     {% if configs.auto is not defined or configs.auto is sameas(false) %}*/
/*         $configs.onAllComplete = function(event, data) {*/
/*             $form.submit();*/
/*         };*/
/* */
/*         $form.submit(function(event) {*/
/*             if (0 === $nbQueue) {*/
/*                 return $joinFiles();*/
/*             } else {*/
/*                 $field.uploadifyUpload();*/
/*                 event.preventDefault();*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $form.submit(function(event) {*/
/*             return $joinFiles();*/
/*         });*/
/*     {% endif %}*/
/* */
/*         var $joinFiles = function() {*/
/*             if ($files = $field.data('files')) {*/
/*                 $field.val($files.join(','));*/
/*             }*/
/* */
/*             return true;*/
/*         }*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryimage_javascript %}*/
/* {% spaceless %}*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         var $field   = $('#{{ id }}_upload');*/
/*         {% block genemu_jqueryimage_javascript_prototype %}*/
/*         var $form    = $field.closest('form');*/
/*         var $preview = $('#{{ id }}_img_preview');*/
/*         var $options = $('#{{ id }}_options');*/
/*         // Base path for apps not on DocumentRoot*/
/*         var $basePath = '{{ asset(configs.folder) }}';*/
/*         $basePath = $basePath.substr(0, $basePath.length - '{{ configs.folder }}'.length);*/
/* */
/*         var $coords = {};*/
/*         var $crop = null;*/
/*         var $ratio = 1;*/
/* */
/*         var $configs = $.extend({{ configs|merge({*/
/*             'swf':       asset(configs.swf),*/
/*             'cancelImg': asset(configs.cancelImg),*/
/*             'uploader':  path(configs.script),*/
/*             'queueID':   id ~ '_queue'*/
/*         })|json_encode|raw }}, {*/
/*             onUploadSuccess: function(file, data, response) {*/
/*                 data = jQuery.parseJSON(data);*/
/* */
/*                 if (data.result == '1') {*/
/*                     $('#{{ id }}').val(data.file);*/
/* */
/*                     // add if and only if path is relative*/
/*                     if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                         data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*                     }*/
/* */
/*                     createCrop({*/
/*                         image:      data.image,*/
/*                         thumbnail:  data.thumbnail*/
/*                     });*/
/*                 } else {*/
/*                     alert('Error');*/
/*                 }*/
/*             },*/
/*             onUploadError: function(file, errorCode, errorMsg, errorString) {*/
/*                 alert('error');*/
/*             }*/
/*         });*/
/* */
/*         var createCrop = function (data) {*/
/*             if ($crop) {*/
/*                 $crop.destroy();*/
/*             }*/
/* */
/*             // add if and only if path is relative*/
/*             if (data.thumbnail.file.search(/^[/\\]/) < 0) {*/
/*                 data.thumbnail.file = $basePath + data.thumbnail.file;*/
/*             }*/
/*             var $img = new Image();*/
/* */
/*             console.log(data);*/
/*             $($img).load(function() {*/
/*                 {% set widthMax = data.thumbnail is defined ? data.thumbnail.width : 500 %}*/
/* */
/*                 $ratio = data.image.width > {{ widthMax }} ? data.image.width / {{ widthMax }} : 1;*/
/*                 $('.crop', $options).hide();*/
/* */
/*                 $preview*/
/*                     .width(Math.round(data.image.width / $ratio))*/
/*                     .height(Math.round(data.image.height / $ratio))*/
/*                     .attr('src', this.src);*/
/* */
/*                 if (!$crop) {*/
/*                     $options.fadeIn();*/
/*                 }*/
/* */
/*                 $preview.Jcrop({*/
/*                     onSelect: checkCoords,*/
/*                     onChange: checkCoords*/
/*                 }, function() {*/
/*                     $crop = this;*/
/*                 });*/
/*             }).attr('src', data.thumbnail.file);*/
/*         }*/
/* */
/*         var checkCoords = function(coords) {*/
/* */
/*             if (coords.w > 0 && coords.h > 0) {*/
/*                 $('.crop', $options).fadeIn();*/
/* */
/*                 $coords = {*/
/*                     x: coords.x * $ratio,*/
/*                     y: coords.y * $ratio,*/
/*                     w: coords.w * $ratio,*/
/*                     h: coords.h * $ratio*/
/*                 };*/
/*             } else {*/
/*                 $('.crop', $options).fadeOut();*/
/*             }*/
/*         }*/
/* */
/*         $('.change', $options).click(function() {*/
/*             var $this = $(this);*/
/*             var $regex = new RegExp('^\\b(.*?) (.*)\\b', 'g');*/
/*             var $filter = $this.attr('class').replace($regex, '$1');*/
/* */
/*             var $data = {*/
/*                 filter: $filter,*/
/*                 image: $('#{{ id }}').val(),*/
/*                 opacity: 0.5*/
/*             };*/
/* */
/*             if ('crop' === $filter && !$.isEmptyObject($coords)) {*/
/*                 $data = $.extend($data, $coords);*/
/*             }*/
/* */
/*             if (*/
/*                 $.inArray($filter, {{ filters|json_encode|raw }}) !== -1 ||*/
/*                 ( 'crop' === $filter && !$.isEmptyObject($coords) )*/
/*             ) {*/
/*                 $this.addClass('loading');*/
/* */
/*                 $.ajax({*/
/*                     type: 'POST',*/
/*                     url: '{{ path('genemu_form_image') }}',*/
/*                     data: $data,*/
/*                     dataType: 'json',*/
/*                     success: function(data) {*/
/*                         if (data.result == '1') {*/
/*                             $('#{{ id }}').val(data.file);*/
/* */
/*                             createCrop({*/
/*                                 image: data.image,*/
/*                                 thumbnail: $.isEmptyObject(data.thumbnail) ? $.extend(data.image, {*/
/*                                     file: data.file*/
/*                                 }) : data.thumbnail*/
/*                             });*/
/*                         } else {*/
/*                             alert('Error');*/
/*                         }*/
/* */
/*                         $this.removeClass('loading');*/
/*                     }*/
/*                 });*/
/*             }*/
/*         });*/
/* */
/*     {% if value %}*/
/*         createCrop({*/
/*             thumbnail: {*/
/*                 file: '{{ thumbnail is defined ? thumbnail.file : value }}',*/
/*                 width: {{ thumbnail is defined ? thumbnail.width : width }},*/
/*                 height: {{ thumbnail is defined ? thumbnail.height : height }},*/
/*             },*/
/*             image: {*/
/*                 width: {{ width }},*/
/*                 height: {{ height }}*/
/*             }*/
/*         });*/
/*     {% else %}*/
/*         $options.hide();*/
/*     {% endif %}*/
/* */
/*         $field.uploadify($configs);*/
/*         {% endblock %}*/
/*     });*/
/* </script>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block genemu_jqueryselect2_javascript %}*/
/*     <script type="text/javascript">*/
/*     jQuery(document).ready(function($) {*/
/*         $field = $('#{{ id }}');*/
/* */
/*         {% block genemu_jqueryselect2_javascript_prototype %}*/
/*             $field.select2({{ configs|json_encode|raw }});*/
/*         {% endblock %}*/
/*     });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* */
