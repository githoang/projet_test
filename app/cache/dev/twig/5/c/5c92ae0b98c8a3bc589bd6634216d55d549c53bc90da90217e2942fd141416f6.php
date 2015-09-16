<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_ee887f2a95391463bc385daec4bda00fcce11cb52ae89509390ee12537c67f25 extends Twig_Template
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
        // line 26
        echo "
";
        // line 35
        echo "
";
        // line 62
        echo "
";
        // line 77
        echo "
";
        // line 101
        echo "
";
        // line 121
        echo "
";
        // line 164
        echo "
";
        // line 208
        echo "
";
        // line 226
        echo "
";
        // line 230
        echo "
";
        // line 236
        echo "
";
        // line 245
        echo "
";
        // line 275
        echo "
";
        // line 312
        echo "
";
        // line 382
        echo "
";
        // line 405
        echo "
";
        // line 414
        echo "
";
    }

    // line 1
    public function getcollection_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            ";
            // line 12
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 13
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()))) {
                // line 14
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 15
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                    echo "
                    ";
                    // line 16
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            ";
            }
            // line 21
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 22
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

    // line 32
    public function getflexibleAttributeRow($__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            echo $this->getAttribute($this, "attibuteRow", array(0 => $this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "attribute", array()), "label", array()), 1 => (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "__toString", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "__toString", array()), "N/A")) : ("N/A"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getattribute_data($__value__ = null, $__additionalData__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "            <div class=\"clearfix-oro\">
                ";
            // line 46
            if ( !$this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array(), "any", true, true)) {
                // line 47
                echo "                    <p class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</p>
                ";
            } else {
                // line 49
                echo "                    <p class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "hint", array())), "html", null, true);
                echo "</strong></p>
                ";
            }
            // line 51
            echo "            </div>
            ";
            // line 52
            if (twig_length_filter($this->env, (isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")))) {
                // line 53
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 54
                    echo "                    <div class=\"clearfix-oro\">
                        <p class=\"control-label\">";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "field", array())), "html", null, true);
                    echo "</p>
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "            ";
            }
            // line 59
            echo "        ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "        ";
            // line 60
            echo "        ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => $this->getAttribute($this, "attribute_data", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 1 => (isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData"))), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getrenderAttribute($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 73
            echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
            echo "
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function getbutton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
           class=\"btn back icons-holder-text ";
            // line 92
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aClass", array())) : ("")), "html", null, true);
            echo "\"
           title=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array())), "html", null, true);
            echo "\">
            ";
            // line 94
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iClass", array(), "any", true, true)) {
                // line 95
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iClass", array()), "html", null, true);
                echo " hide-text\" >";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
                echo "</i>
            ";
            }
            // line 97
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            echo "
        </a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getaddButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
       class=\"btn btn-primary pull-right ";
            // line 114
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aClass", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aClass", array())) : ("")), "html", null, true);
            echo "\"
       ";
            // line 115
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 116
                echo "            title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array())), "html", null, true);
                echo "\">
       ";
            }
            // line 118
            echo "       ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            echo "
    </a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 135
    public function getdeleteButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 136
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"javascript: void(0);\" class=\"btn icons-holder-text ";
            // line 137
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
            ";
            // line 138
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 139
                echo "                id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 141
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 142
                echo "                data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 144
            echo "            data-message=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataMessage", array())), "html", null, true);
            echo "\"
            data-success-message=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array()), "Item deleted")) : ("Item deleted"))), "html", null, true);
            echo "\"
            ";
            // line 146
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 147
                echo "                data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 149
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 150
                echo "                data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 152
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 153
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 154
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo $context["dataItemValue"];
                    echo "\"
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "            ";
            }
            // line 157
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 158
                echo "                title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array())), "html", null, true);
                echo "\"
            ";
            }
            // line 160
            echo "           ><i class=\"icon-trash\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            // line 161
            echo "</a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 180
    public function getclientButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 181
            echo "    <div class=\"pull-left btn-group icons-holder\">
        <a href=\"javascript: void(0);\" class=\"btn icons-holder-text ";
            // line 182
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
            ";
            // line 183
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 184
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 186
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 187
                echo "            data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 189
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 190
                echo "            data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 192
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) {
                // line 193
                echo "            data-success-message=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "successMessage", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 195
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 196
                echo "            data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 198
            echo "            ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 199
                echo "            title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array()), "html", null, true);
                echo "\"
            ";
            }
            // line 201
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "visible", array(), "any", true, true) &&  !$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "visible", array()))) {
                // line 202
                echo "            style=\"display: none\"
            ";
            }
            // line 204
            echo "><i class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array())) : ("")), "html", null, true);
            echo " hide-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            echo "</i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            // line 205
            echo "</a>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 218
    public function getbuttonType($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 219
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "class", array()), "html", null, true);
            }
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 221
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "action", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 222
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            echo "
        </button>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 227
    public function getsaveAndCloseButton($__label__ = "Save and Close")
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 228
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 231
    public function getsaveAndStayButton($__acl__ = "", $__label__ = "Save")
    {
        $context = $this->env->mergeGlobals(array(
            "acl" => $__acl__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 232
            echo "    ";
            if ((twig_test_empty((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))))) {
                // line 233
                echo "    ";
                echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "btn-success", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "action" => "save_and_stay")), "method");
                echo "
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 240
    public function getbuttonSeparator()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 241
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 255
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__useSpan__ = null, $__spanClass__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "useSpan" => $__useSpan__,
            "spanClass" => $__spanClass__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 256
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter((isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "responsive-cell")) : ("responsive-cell"));
            // line 257
            echo "    ";
            // line 265
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "html", null, true);
            echo "\">
    ";
            // line 266
            if (twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                echo "<h5 class=\"user-fiedset\"><span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
                echo "</span></h5>";
            }
            // line 267
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 268
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "    </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 290
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 291
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            // line 292
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 293
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "</h4>
        <div id=\"";
            // line 294
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"row-fluid";
            // line 295
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class", array()), "html", null, true);
            }
            if ((((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || ((isset($context["useSubBlockDivider"]) ? $context["useSubBlockDivider"] : $this->getContext($context, "useSubBlockDivider")) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), 1 => array(0 => "class")), "method");
            echo ">
            ";
            // line 296
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 297
                echo "                <fieldset class=\"form-horizontal\">
            ";
            } else {
                // line 299
                echo "                <div class=\"form-horizontal\">
            ";
            }
            // line 301
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 302
                echo "                    ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array()))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 3 => (($this->getAttribute($context["subblock"], "useSpan", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "useSpan", array())) : (true)), 4 => (($this->getAttribute($context["subblock"], "spanClass", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "spanClass", array())) : (""))), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "            ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 305
                echo "                </fieldset>
            ";
            } else {
                // line 307
                echo "                </div>
            ";
            }
            // line 309
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 336
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "form" => $__form__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 337
            echo "    ";
            if ((array_key_exists("form", $context) && (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                // line 338
                echo "        ";
                $context["isForm"] = true;
                // line 339
                echo "    ";
            } else {
                // line 340
                echo "        ";
                $context["isForm"] = false;
                // line 341
                echo "    ";
            }
            // line 342
            echo "
    ";
            // line 343
            $context["dataBlocks"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks", array());
            // line 344
            echo "
    <div id=\"";
            // line 345
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 349
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 350
                echo "                        <li ";
                if ($this->getAttribute($context["navElement"], "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "class", array()), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["navElement"], "title", array())), "html", null, true);
                echo "</a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 352
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 357
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array())))) {
                // line 358
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 361
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 365
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 366
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 367
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true))), "method");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true) || (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")))) {
                // line 370
                echo "                <div class=\"hide\">
                    ";
                // line 371
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true)) {
                    // line 372
                    echo "                        ";
                    echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hiddenData", array());
                    echo "
                    ";
                }
                // line 374
                echo "                    ";
                if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                    // line 375
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                    echo "
                    ";
                }
                // line 377
                echo "                </div>
            ";
            }
            // line 379
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 390
    public function getcollectionField($__field__ = null, $__label__ = null, $__buttonCaption__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "buttonCaption" => $__buttonCaption__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 391
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 392
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"collection-fields-list\" data-prototype=\"";
            // line 395
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method"));
            echo "\">
                    ";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
                // line 397
                echo "                        ";
                echo $this->getAttribute($this, "collection_prototype", array(0 => $context["emailField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 399
            echo "                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">";
            // line 400
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["buttonCaption"]) ? $context["buttonCaption"] : $this->getContext($context, "buttonCaption"))), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 411
    public function getgridBlock($__gridId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "gridId" => $__gridId__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 412
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["gridId"]) ? $context["gridId"] : $this->getContext($context, "gridId")), "html", null, true);
            echo "\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 421
    public function getattributes($__attr__ = null, $__excludes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 422
            echo "    ";
            ob_start();
            // line 423
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()));
            // line 424
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute((isset($context["excludes"]) ? $context["excludes"] : null), $context["attrname"], array(), "array", true, true))) {
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
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 425
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1226 => 425,  1204 => 424,  1201 => 423,  1198 => 422,  1185 => 421,  1171 => 412,  1159 => 411,  1143 => 400,  1140 => 399,  1131 => 397,  1127 => 396,  1123 => 395,  1117 => 392,  1114 => 391,  1100 => 390,  1087 => 379,  1083 => 377,  1077 => 375,  1074 => 374,  1068 => 372,  1066 => 371,  1063 => 370,  1060 => 369,  1043 => 367,  1026 => 366,  1017 => 365,  1010 => 361,  1005 => 358,  1003 => 357,  996 => 352,  971 => 350,  954 => 349,  947 => 345,  944 => 344,  942 => 343,  939 => 342,  936 => 341,  933 => 340,  930 => 339,  927 => 338,  924 => 337,  910 => 336,  897 => 309,  893 => 307,  889 => 305,  886 => 304,  877 => 302,  872 => 301,  868 => 299,  864 => 297,  862 => 296,  850 => 295,  846 => 294,  842 => 293,  839 => 292,  836 => 291,  819 => 290,  807 => 270,  798 => 268,  793 => 267,  787 => 266,  782 => 265,  780 => 257,  777 => 256,  761 => 255,  747 => 241,  736 => 240,  721 => 233,  718 => 232,  705 => 231,  691 => 228,  679 => 227,  664 => 222,  656 => 221,  645 => 220,  642 => 219,  630 => 218,  617 => 205,  610 => 204,  606 => 202,  604 => 201,  598 => 199,  595 => 198,  589 => 196,  586 => 195,  580 => 193,  577 => 192,  571 => 190,  568 => 189,  562 => 187,  559 => 186,  553 => 184,  551 => 183,  547 => 182,  544 => 181,  532 => 180,  519 => 161,  516 => 160,  510 => 158,  507 => 157,  504 => 156,  493 => 154,  488 => 153,  485 => 152,  479 => 150,  476 => 149,  470 => 147,  468 => 146,  464 => 145,  459 => 144,  453 => 142,  450 => 141,  444 => 139,  442 => 138,  438 => 137,  435 => 136,  423 => 135,  408 => 118,  402 => 116,  400 => 115,  396 => 114,  391 => 113,  379 => 112,  363 => 97,  355 => 95,  353 => 94,  349 => 93,  345 => 92,  341 => 91,  338 => 90,  326 => 89,  311 => 73,  306 => 71,  303 => 70,  290 => 69,  276 => 60,  274 => 44,  260 => 43,  249 => 59,  246 => 58,  237 => 55,  234 => 54,  229 => 53,  227 => 52,  224 => 51,  216 => 49,  210 => 47,  208 => 46,  205 => 45,  192 => 44,  178 => 33,  166 => 32,  151 => 22,  146 => 21,  140 => 19,  137 => 18,  129 => 16,  124 => 15,  119 => 14,  117 => 13,  113 => 12,  108 => 10,  105 => 9,  102 => 8,  99 => 7,  96 => 6,  93 => 5,  90 => 4,  87 => 3,  84 => 2,  72 => 1,  67 => 414,  64 => 405,  61 => 382,  58 => 312,  55 => 275,  52 => 245,  49 => 236,  46 => 230,  43 => 226,  40 => 208,  37 => 164,  34 => 121,  31 => 101,  28 => 77,  25 => 62,  22 => 35,  19 => 26,);
    }
}
/* {% macro collection_prototype(widget) %}*/
/*     {% if 'prototype' in widget.vars|keys %}*/
/*         {% set form = widget.vars.prototype %}*/
/*         {% set name = widget.vars.prototype.vars.name %}*/
/*     {% else %}*/
/*         {% set form = widget %}*/
/*         {% set name = widget.vars.full_name %}*/
/*     {% endif %}*/
/* */
/*     <div data-content="{{ name }}">*/
/*         <div class="row-oro oro-multiselect-holder">*/
/*             {{ form_errors(form) }}*/
/*             {% if form.children|length  %}*/
/*                 {% for child in form %}*/
/*                     {{ form_errors(child) }}*/
/*                     {{ form_widget(child) }}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 {{ form_widget(form) }}*/
/*             {% endif %}*/
/*             {{ form_rest(form) }}*/
/*             <button class="removeRow btn btn-action btn-link" type="button" data-related="{{ name }}">×</button>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render flexible attribute row*/
/*     Parameters:*/
/*         value - flexible attribute*/
/* #}*/
/* {% macro flexibleAttributeRow(value) %}*/
/*     {{ _self.attibuteRow(value.attribute.label, value.__toString|default('N/A')) }}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render attribute row*/
/*     Parameters:*/
/*         title - attribute title*/
/*         value - attribute value*/
/*         additionalData - array with additional data*/
/* #}*/
/* {% macro attibuteRow(title, value, additionalData) %}*/
/*         {% macro attribute_data(value, additionalData) %}*/
/*             <div class="clearfix-oro">*/
/*                 {% if value.value is not defined  %}*/
/*                     <p class="control-label">{{ value }}</p>*/
/*                 {% else %}*/
/*                     <p class="control-label">{{ value.value }} <strong>{{ value.hint|trans }}</strong></p>*/
/*                 {% endif %}*/
/*             </div>*/
/*             {% if additionalData|length %}*/
/*                 {% for data in additionalData.data %}*/
/*                     <div class="clearfix-oro">*/
/*                         <p class="control-label">{{ attribute(data, additionalData.field) }}</p>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*         {% endmacro %}*/
/*         {{ _self.renderAttribute(title, _self.attribute_data(value, additionalData)) }}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render attribute row with custom data block*/
/*     Parameters:*/
/*         title - row title*/
/*         data - row data*/
/* #}*/
/* {% macro renderAttribute(title, data) %}*/
/*     <div class="control-group">*/
/*         <label class="control-label">{{ title|trans }}</label>*/
/*         <div class="controls">*/
/*             {{ data|raw }}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create the button*/
/*     Parameters - array:*/
/*         [*/
/*             'path' - button url*/
/*             'aClass' - additional button class*/
/*             'title' - button title*/
/*             'iClass' - css class for 'i' tag (icon)*/
/*             'label' - button label*/
/*         ]*/
/* #}*/
/* {% macro button(parameters) %}*/
/*     <div class="pull-left btn-group icons-holder">*/
/*         <a href="{{ parameters.path }}"*/
/*            class="btn back icons-holder-text {{ parameters.aClass is defined? parameters.aClass : '' }}"*/
/*            title="{{ parameters.title|trans }}">*/
/*             {% if parameters.iClass is defined %}*/
/*                 <i class="{{ parameters.iClass }} hide-text" >{{ parameters.label|trans }}</i>*/
/*             {% endif %}*/
/*             {{ parameters.label|trans }}*/
/*         </a>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create 'add' button*/
/*     Parameters - array:*/
/*         [*/
/*             'path' - button url*/
/*             'aClass' - additional button class*/
/*             'title' - button title*/
/*             'label' - button label*/
/*         ]*/
/* #}*/
/* {% macro addButton(parameters) %}*/
/*     <a href="{{ parameters.path }}"*/
/*        class="btn btn-primary pull-right {{ parameters.aClass is defined? parameters.aClass : '' }}"*/
/*        {% if parameters.title is defined %}*/
/*             title="{{ parameters.title|trans }}">*/
/*        {% endif %}*/
/*        {{ parameters.label|trans }}*/
/*     </a>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Delete button with javascript handler*/
/*     Parameters - array:*/
/*         [*/
/*             'aCss' - additional css class for 'a' tag*/
/*             'dataId' - data-id parameter*/
/*             'dataMessage' - message before delete record*/
/*             'dataRedirect' - url to redirect after delete*/
/*             'dataUrl' - data-url parameter*/
/*             'title' - button title*/
/*             'label' - button label*/
/*         ]*/
/* #}*/
/* {% macro deleteButton(parameters) %}*/
/*     <div class="pull-left btn-group icons-holder">*/
/*         <a href="javascript: void(0);" class="btn icons-holder-text {{ parameters.aCss is defined? parameters.aCss : '' }}"*/
/*             {% if (parameters.id is defined) %}*/
/*                 id="{{ parameters.id }}"*/
/*             {% endif %}*/
/*             {% if (parameters.dataId is defined) %}*/
/*                 data-id="{{ parameters.dataId }}"*/
/*             {% endif %}*/
/*             data-message="{{ parameters.dataMessage|trans }}"*/
/*             data-success-message="{{ parameters.successMessage|default('Item deleted')|trans }}"*/
/*             {% if (parameters.dataUrl is defined) %}*/
/*                 data-url="{{ parameters.dataUrl }}"*/
/*             {% endif %}*/
/*             {% if parameters.dataRedirect is defined %}*/
/*                 data-redirect="{{ parameters.dataRedirect  }}"*/
/*             {% endif %}*/
/*             {% if parameters.data is defined %}*/
/*                 {% for dataItemName,dataItemValue in parameters.data %}*/
/*                 data-{{ dataItemName }}="{{ dataItemValue|raw }}"*/
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             {% if (parameters.title is defined) %}*/
/*                 title="{{ parameters.title|trans }}"*/
/*             {% endif %}*/
/*            ><i class="icon-trash"></i>{{ parameters.label|trans -}}*/
/*         </a>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     A button with javascript handler*/
/*     Parameters - array:*/
/*         [*/
/*             'aCss' - additional css class for 'a' tag*/
/*             'iCss' - additional css class for 'i' tag*/
/*             'dataId' - data-id parameter*/
/*             'dataUrl' - data-url parameter*/
/*             'dataRedirect' - url to redirect after an operation finished*/
/*             'successMessage' - a message which will be shown after an operation finished*/
/*             'title' - button title*/
/*             'label' - button label*/
/*             'visible' - determined whether the button is visible or not. Defaults to true*/
/*         ]*/
/* #}*/
/* {% macro clientButton(parameters) %}*/
/*     <div class="pull-left btn-group icons-holder">*/
/*         <a href="javascript: void(0);" class="btn icons-holder-text {{ parameters.aCss is defined ? parameters.aCss : '' }}"*/
/*             {% if (parameters.id is defined) %}*/
/*             id="{{ parameters.id }}"*/
/*             {% endif %}*/
/*             {% if (parameters.dataId is defined) %}*/
/*             data-id="{{ parameters.dataId }}"*/
/*             {% endif %}*/
/*             {% if (parameters.dataUrl is defined) %}*/
/*             data-url="{{ parameters.dataUrl }}"*/
/*             {% endif %}*/
/*             {% if (parameters.successMessage is defined) %}*/
/*             data-success-message="{{ parameters.successMessage }}"*/
/*             {% endif %}*/
/*             {% if parameters.dataRedirect is defined %}*/
/*             data-redirect="{{ parameters.dataRedirect  }}"*/
/*             {% endif %}*/
/*             {% if (parameters.title is defined) %}*/
/*             title="{{ parameters.title }}"*/
/*             {% endif -%}*/
/*             {% if (parameters.visible is defined and not parameters.visible) %}*/
/*             style="display: none"*/
/*             {% endif -%}*/
/*         ><i class="{{ parameters.iCss is defined ? parameters.iCss : '' }} hide-text">{{ parameters.label }}</i>{{ parameters.label -}}*/
/*         </a>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Button macros with custom button type*/
/*     Parameters - array:*/
/*         [*/
/*             'type' - button type*/
/*             'class' - additional button css classes*/
/*             'label' - label of button*/
/*         ]*/
/* #}*/
/* {% macro buttonType(parameters) %}*/
/*     <div class="btn-group">*/
/*         <button type="{{ parameters.type }}" class="btn {% if (parameters.class is defined) %}{{ parameters.class }}{% endif %}{% if (parameters.action is defined) %} action-button{% endif %}"*/
/*                 {% if (parameters.action is defined) %}data-action="{{ parameters.action }}"{% endif %}>*/
/*             {{ parameters.label|trans }}*/
/*         </button>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro saveAndCloseButton(label = 'Save and Close') %}*/
/*     {{ _self.buttonType({'type': 'submit', 'class': 'btn-success', 'label': label}) }}*/
/* {% endmacro %}*/
/* */
/* {% macro saveAndStayButton(acl = '', label = 'Save') %}*/
/*     {% if acl is empty or resource_granted(acl) %}*/
/*     {{ _self.buttonType({'type': 'button', 'class': 'btn-success', 'label': label, 'action': 'save_and_stay'}) }}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Separator between buttons*/
/* #}*/
/* {% macro buttonSeparator() %}*/
/*     <div class="pull-left">*/
/*         <div class="separator-btn"></div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll sub block for scroll block*/
/*     Parameters:*/
/*         title - title of sub block*/
/*         data - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*         isForm - flag what scroll block mut contain the form*/
/*         useSpan - flag to indicate is subblock must have css class specified in spanClass parameter or not*/
/*         spanClass - css class name of subblock, if this parameter is not specified the css class is span6*/
/* #}*/
/* {% macro scrollSubblock(title, data, isForm, useSpan, spanClass) %}*/
/*     {% set spanClass = spanClass|default('responsive-cell') %}*/
/*     {#% if useSpan is not defined or useSpan == true %}*/
/*         {% set span = spanClass %}*/
/*     {% else %}*/
/*         {% set span = '' %}*/
/*     {% endif %}*/
/*     {% if span %}*/
/*         <div class="{{ span }}">*/
/*     {% endif %#}*/
/*     <div class="{{ spanClass }}">*/
/*     {% if title|length %}<h5 class="user-fiedset"><span>{{ title|trans }}</span></h5>{% endif %}*/
/*     {% for dataBlock in data %}*/
/*         {{ dataBlock|raw }}*/
/*     {% endfor %}*/
/*     </div>*/
/*     {#% if span %}*/
/*         </div>*/
/*     {% endif %#}*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll block for scroll data area*/
/*     Parameters:*/
/*         blockId - id of block*/
/*         title - block title*/
/*         'subblocks' - array with scroll sub blocks:*/
/*             [*/
/*                 'title' - title of sub block*/
/*                 'data' - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*             ]*/
/*         isForm - flag what scroll block mut contain the form*/
/*         contentAttributes - additional attributes for block content*/
/*         useSubBlockDivider - indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks*/
/* #}*/
/* {% macro scrollBlock(blockId, title, subblocks, isForm, contentAttributes, useSubBlockDivider) %}*/
/*     {% set cols = subblocks|length %}*/
/*     <div class="responsive-section">*/
/*         <h4 class="scrollspy-title">{{ title|trans }}</h4>*/
/*         <div id="{{ blockId }}" class="scrollspy-nav-target"></div>*/
/*         <div class="row-fluid{% if (contentAttributes is defined and contentAttributes.class is defined and contentAttributes.class|length) %} {{ contentAttributes.class }}{% endif %}{% if cols > 1 and (useSubBlockDivider is not defined or useSubBlockDivider == true) %} row-fluid-divider{% endif %}" {{ _self.attributes(contentAttributes, ['class']) }}>*/
/*             {% if isForm is defined and isForm == true %}*/
/*                 <fieldset class="form-horizontal">*/
/*             {% else %}*/
/*                 <div class="form-horizontal">*/
/*             {% endif %}*/
/*                 {% for subblock in subblocks %}*/
/*                     {{ _self.scrollSubblock(subblock.title|length ? subblock.title : null, subblock.data, isForm, subblock.useSpan is defined ? subblock.useSpan : true, subblock.spanClass is defined ? subblock.spanClass : '') }}*/
/*                 {% endfor %}*/
/*             {% if isForm is defined and isForm == true %}*/
/*                 </fieldset>*/
/*             {% else %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create scroll blocks (like in view or update pages)*/
/*     Parameters:*/
/*         dataTarget - id of scroll block*/
/*         data - array with scroll data blocks*/
/*         form*/
/*     data parameter structure:*/
/*         [*/
/*             'dataBlocks' - array of blocks. each block consist of:*/
/*                 [*/
/*                     'title' - title of scroll block*/
/*                     'class' - additional css class for scroll block menu item*/
/*                     'useSubBlockDivider' - [optional] indicates if 'row-fluid-divider' css class should be added to a row when there are more than one subblocks*/
/*                     'subblocks' - array with scroll sub blocks:*/
/*                         [*/
/*                             'title' - title of sub block*/
/*                             'data' - array with data fields (i.e. form_row() or attibuteRow() data)*/
/*                         ]*/
/*                 ]*/
/*             'formErrors' - errors from the form*/
/*             'hiddenData' - additional data (hidden fields from the form)*/
/*         ]*/
/* #}*/
/* {% macro scrollData(dataTarget, data, form = null) %}*/
/*     {% if form is defined and form %}*/
/*         {% set isForm = true %}*/
/*     {% else %}*/
/*         {% set isForm = false %}*/
/*     {% endif %}*/
/* */
/*     {% set dataBlocks = data.dataBlocks %}*/
/* */
/*     <div id="{{ dataTarget }}" class="navbar navbar-static scrollspy-nav">*/
/*         <div class="navbar-inner">*/
/*             <div class="container-fluid" style="width: auto;">*/
/*                 <ul class="nav">*/
/*                     {% for navElement in dataBlocks %}*/
/*                         <li {% if navElement.class is defined %}class="{{ navElement.class }}"{% endif %}><a href="#scroll-{{ loop.index }}">{{ navElement.title|trans }}</a></li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*         {% if data.formErrors is defined and data.formErrors | length%}*/
/*             <div class="customer-info-actions container-fluid well-small alert-wrap">*/
/*                 <div class="alert alert-error">*/
/*                     <button class="close" type="button" data-dismiss="alert" data-target=".alert-wrap">×</button>*/
/*                     {{ data.formErrors|raw }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div data-spy="scroll" data-target="#{{ dataTarget }}" data-offset="1" class="scrollspy container-fluid scrollable-container{% if isForm %} form-container{% endif %}">*/
/*             {% for scrollBlock in dataBlocks %}*/
/*                 {{ _self.scrollBlock("scroll-" ~ loop.index, scrollBlock.title, scrollBlock.subblocks, isForm, scrollBlock.content_attr is defined ? scrollBlock.content_attr : null, scrollBlock.useSubBlockDivider is defined ? scrollBlock.useSubBlockDivider : true) }}*/
/*             {% endfor %}*/
/*             {% if data.hiddenData is defined or isForm %}*/
/*                 <div class="hide">*/
/*                     {% if data.hiddenData is defined %}*/
/*                         {{ data.hiddenData|raw }}*/
/*                     {% endif %}*/
/*                     {% if isForm %}*/
/*                         {{ form_rest(form) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Create collection field block*/
/*     Parameters:*/
/*         field - form collection field*/
/*         label - label of block*/
/*         buttonCaption - Caption of add entity button*/
/* #}*/
/* {% macro collectionField(field, label, buttonCaption) %}*/
/*     <div class="control-group">*/
/*         <label class="control-label">{{ label|trans }}</label>*/
/*         <div class="controls">*/
/*             <div class="row-oro">*/
/*                 <div class="collection-fields-list" data-prototype="{{ _self.collection_prototype(field)|escape }}">*/
/*                     {% for emailField in field.children %}*/
/*                         {{ _self.collection_prototype(emailField) }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*                 <a class="btn add-list-item" href="javascript: void(0);">{{ buttonCaption|trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render data grid div*/
/*     Parameters:*/
/*         gridId - datagrid div id*/
/* #}*/
/* {% macro gridBlock(gridId) %}*/
/*     <div id="{{ gridId }}"></div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render attributes of HTML element.*/
/*     Parameters:*/
/*         attr - attributes*/
/*         excludes - names of attributes which should not be rendered even if they exist in attr parameter*/
/* #}*/
/* {% macro attributes(attr, excludes) %}*/
/*     {% spaceless %}*/
/*         {% set attr = attr|default({}) %}*/
/*         {% for attrname, attrvalue in attr %}{% if not excludes is defined or not excludes[attrname] is defined %}{% if attrname in ['placeholder', 'title'] %}{{ attrname }}="{{ attrvalue|trans({}, translation_domain) }}" {% else %}{{ attrname }}="{{ attrvalue }}" {% endif %}{% endif %}{% endfor %}*/
/*     {% endspaceless %}*/
/* {% endmacro %}*/
/* */
