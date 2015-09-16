<?php

/* OroConfigBundle::macros.html.twig */
class __TwigTemplate_7511d5c7eecf18885309020a631c0115ad0c2ef13e8e3a5554e478c9e1d3f5f8 extends Twig_Template
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
        // line 23
        echo "
";
        // line 73
        echo "
";
        // line 91
        echo "
";
        // line 127
        echo "
";
        // line 180
        echo "
";
    }

    // line 4
    public function getrenderTitleAndSearch($__pageTitle__ = null, $__buttons__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 5
            echo "    <div class=\"container-fluid search-header clearfix\">
        <h1>
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle"))), "html", null, true);
            echo "
            <div class=\"pull-right\">
                ";
            // line 9
            if (array_key_exists("buttons", $context)) {
                // line 10
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 11
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["button"], "html", null, true);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                ";
            }
            // line 14
            echo "                ";
            // line 19
            echo "            </div>
        </h1>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getrenderScrollData($__data__ = null, $__form__ = null, $__activeTab__ = false, $__activeVTab__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "form" => $__form__,
            "activeTab" => $__activeTab__,
            "activeVTab" => $__activeVTab__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["__"] = $this;
            // line 34
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 34);
            // line 35
            echo "
    <div class=\"system-configuration-container\">
        ";
            // line 37
            if (((isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")) && ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != false))) {
                // line 38
                echo "            ";
                // line 39
                echo "            <div class=\"pull-absolute-right\">
                ";
                // line 40
                echo $context["UI"]->getsaveAndStayButton();
                echo "
            </div>
        ";
            }
            // line 43
            echo "        <div class=\"container-fluid\">
            <ul class=\"nav nav-tabs\">
                ";
            // line 45
            if (twig_test_iterable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                // line 46
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 47
                    echo "                        ";
                    $context["tabData"] = twig_array_merge(array("isActive" => (                    // line 48
(isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) && ((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == $this->getAttribute($context["tab"], "name", array()))), "url" => $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" => $this->getAttribute(                    // line 49
$context["tab"], "name", array())))), $this->getAttribute(                    // line 50
$context["tab"], "toViewData", array()));
                    // line 52
                    echo "
                        ";
                    // line 53
                    if ($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "isActive", array())) {
                        // line 54
                        echo "                            ";
                        $context["activeTab"] = $context["tab"];
                        // line 55
                        echo "                        ";
                    }
                    // line 56
                    echo "                        ";
                    echo $context["__"]->getrenderTabNavItem((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")));
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                echo "                ";
            }
            // line 59
            echo "            </ul>
        </div>
        <div class=\"scrollable-container\">
            <div class=\"container-fluid\">
                <div class=\"row-fluid row-fluid-divider\">
                    ";
            // line 64
            if (((isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")) && ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != false))) {
                // line 65
                echo "                        ";
                echo $context["__"]->getrenderVerticalSubmenu((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")), (isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")));
                echo "
                        ";
                // line 66
                echo $context["__"]->getrenderTab((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" => $this->getAttribute((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")), "name", array()), "activeSubGroup" => (isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")))));
                echo "
                    ";
            }
            // line 68
            echo "                </div>
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

    // line 83
    public function getrenderTabNavItem($__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 84
            echo "    <li ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "isActive", array())) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 85
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "isActive", array())) {
                echo "javascript:void(0);";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "url", array()), "html", null, true);
            }
            echo "\">
            ";
            // line 86
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "icon", array()) != ""))) {
                echo "<i class=\"icon ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 87
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array())), "html", null, true);
            echo "
        </a>
    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 100
    public function getrenderVerticalSubmenu($__data__ = null, $__activeVTab__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "activeVTab" => $__activeVTab__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 101
            echo "    ";
            $context["__"] = $this;
            // line 102
            echo "    <div class=\"span2 system-configuration-sidebar\">
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 104
                echo "            ";
                $context["groupData"] = $this->getAttribute($context["group"], "toViewData", array());
                // line 105
                echo "            <dl>
                <dt>
                    <h4>";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "title", array())), "html", null, true);
                echo "</h4>
                </dt>
                <dd>
                    ";
                // line 110
                if ($this->getAttribute($context["group"], "count", array())) {
                    // line 111
                    echo "                        <ul class=\"nav nav-pills nav-stacked\">
                            ";
                    // line 112
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["group"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                        // line 113
                        echo "                                ";
                        $context["tabData"] = twig_array_merge(array("isActive" => (                        // line 114
(isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")) && ((isset($context["activeVTab"]) ? $context["activeVTab"] : $this->getContext($context, "activeVTab")) == $this->getAttribute($context["tab"], "name", array()))), "url" => $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" => $this->getAttribute(                        // line 115
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name", array()), "activeSubGroup" => $this->getAttribute($context["tab"], "name", array())))), $this->getAttribute(                        // line 116
$context["tab"], "toViewData", array()));
                        // line 118
                        echo "                                ";
                        echo $context["__"]->getrenderTabNavItem((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                        </ul>
                    ";
                }
                // line 122
                echo "                </dd>
            </dl>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 134
    public function getrenderTab($__form__ = null, $__formAction__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "formAction" => $__formAction__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 135
            echo "    ";
            $context["__"] = $this;
            // line 136
            echo "
    ";
            // line 137
            $context["data"] = array("formErrors" =>             // line 138
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors'), "dataBlocks" => call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context,             // line 139
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), "hiddenData" =>             // line 140
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
            // line 142
            echo "
    ";
            // line 143
            $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            // line 144
            echo "
    <div class=\"span10 form-container\">
        <form id=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
            echo "\" method=\"post\"
              data-collect=\"true\" class=\"scrollable-substructure\">
            <div class=\"pull-right\">
                <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
            echo "\"/>
            </div>
            ";
            // line 151
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array())))) {
                // line 152
                echo "                <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                    <div class=\"alert alert-error\">
                        <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                        ";
                // line 155
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array());
                echo "
                    </div>
                </div>
            ";
            }
            // line 159
            echo "
            ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 161
                echo "                <div class=\"clearfix\">
                    <h4 class=\"scrollspy-title\">";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["scrollBlock"], "title", array())), "html", null, true);
                echo "</h4>

                    ";
                // line 164
                if (($this->getAttribute($context["scrollBlock"], "description", array(), "any", true, true) && ($this->getAttribute($context["scrollBlock"], "description", array()) != ""))) {
                    // line 165
                    echo "                        <p>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["scrollBlock"], "description", array()), "html", null, true);
                    echo "</p>
                    ";
                }
                // line 167
                echo "
                    ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["scrollBlock"], "subblocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 169
                    echo "                        ";
                    echo $context["__"]->getrenderFiedset($context["subblock"]);
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "            <div class=\"hide\">
                ";
            // line 174
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hiddenData", array());
            echo "
            </div>
        </form>
        ";
            // line 177
            echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 188
    public function getrenderFiedset($__block__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "block" => $__block__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 189
            echo "    ";
            $context["__"] = $this;
            // line 190
            echo "    <fieldset class=\"form-horizontal\">
        <h5 class=\"user-fiedset\">
            <span>";
            // line 192
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array())), "html", null, true);
            echo "</span>
        </h5>

        ";
            // line 195
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array(), "any", true, true) && ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "description", array()) != ""))) {
                // line 196
                echo "            <div class=\"container-fluid\">
                <p>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "description", array()), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            // line 200
            echo "
        ";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 202
                echo "            ";
                echo $context["dataBlock"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "    </fieldset>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 204,  512 => 202,  508 => 201,  505 => 200,  499 => 197,  496 => 196,  494 => 195,  488 => 192,  484 => 190,  481 => 189,  469 => 188,  455 => 177,  449 => 174,  446 => 173,  439 => 171,  430 => 169,  426 => 168,  423 => 167,  417 => 165,  415 => 164,  410 => 162,  407 => 161,  403 => 160,  400 => 159,  393 => 155,  388 => 152,  386 => 151,  381 => 149,  371 => 146,  367 => 144,  365 => 143,  362 => 142,  360 => 140,  359 => 139,  358 => 138,  357 => 137,  354 => 136,  351 => 135,  338 => 134,  326 => 125,  318 => 122,  314 => 120,  305 => 118,  303 => 116,  302 => 115,  301 => 114,  299 => 113,  295 => 112,  292 => 111,  290 => 110,  284 => 107,  280 => 105,  277 => 104,  273 => 103,  270 => 102,  267 => 101,  254 => 100,  238 => 87,  232 => 86,  224 => 85,  217 => 84,  205 => 83,  190 => 68,  185 => 66,  180 => 65,  178 => 64,  171 => 59,  168 => 58,  159 => 56,  156 => 55,  153 => 54,  151 => 53,  148 => 52,  146 => 50,  145 => 49,  144 => 48,  142 => 47,  137 => 46,  135 => 45,  131 => 43,  125 => 40,  122 => 39,  120 => 38,  118 => 37,  114 => 35,  111 => 34,  108 => 33,  93 => 32,  79 => 19,  77 => 14,  74 => 13,  65 => 11,  60 => 10,  58 => 9,  53 => 7,  49 => 5,  36 => 4,  31 => 180,  28 => 127,  25 => 91,  22 => 73,  19 => 23,);
    }
}
/* {#*/
/*     Displays title and search form*/
/* #}*/
/* {% macro renderTitleAndSearch(pageTitle, buttons) %}*/
/*     <div class="container-fluid search-header clearfix">*/
/*         <h1>*/
/*             {{ pageTitle|trans }}*/
/*             <div class="pull-right">*/
/*                 {% if buttons is defined %}*/
/*                     {% for button in buttons %}*/
/*                         {{ button }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*                 {#*/
/*                     <form class="form-inline search-form configuration-search-form">*/
/*                         <input type="text" id="search" class="span2 search" name="search" value="Find an Option">*/
/*                     </form>*/
/*                 #}*/
/*             </div>*/
/*         </h1>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render page scrollable data*/
/*     params:*/
/*         data        - tree of current configuration*/
/*         form        - form view of active group*/
/*         activeTab   - active tab name*/
/*         activeVTab  - active vertical tab name*/
/* #}*/
/* {% macro renderScrollData(data, form, activeTab = false, activeVTab = false) %}*/
/*     {% import _self as __ %}*/
/*     {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/*     <div class="system-configuration-container">*/
/*         {% if activeVTab and form != false %}*/
/*             {# @TODO move back to renderTab macro, when styles will be ready #}*/
/*             <div class="pull-absolute-right">*/
/*                 {{ UI.saveAndStayButton() }}*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="container-fluid">*/
/*             <ul class="nav nav-tabs">*/
/*                 {% if data is iterable %}*/
/*                     {% for tab in data %}*/
/*                         {% set tabData = {*/
/*                             isActive: activeTab and activeTab == tab.name,*/
/*                             url: path('oro_config_configuration_system', {activeGroup: tab.name})*/
/*                             }|merge(tab.toViewData)*/
/*                         %}*/
/* */
/*                         {% if tabData.isActive %}*/
/*                             {% set activeTab = tab %}*/
/*                         {% endif %}*/
/*                         {{ __.renderTabNavItem(tabData) }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div>*/
/*         <div class="scrollable-container">*/
/*             <div class="container-fluid">*/
/*                 <div class="row-fluid row-fluid-divider">*/
/*                     {% if activeVTab and form != false %}*/
/*                         {{ __.renderVerticalSubmenu(activeTab, activeVTab) }}*/
/*                         {{ __.renderTab(form, path('oro_config_configuration_system', {activeGroup: activeTab.name, activeSubGroup: activeVTab})) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Renders tab navigation item*/
/*     params:*/
/*         data.isActive    - Tab is active*/
/*         data.name        - Tab name*/
/*         data.title       - Tab title*/
/*         data.icon        - Tab icon*/
/*         data.url         - Tab view url*/
/* #}*/
/* {% macro renderTabNavItem(data) %}*/
/*     <li {% if data.isActive %}class="active"{% endif %}>*/
/*         <a href="{% if data.isActive %}javascript:void(0);{% else %}{{ data.url }}{% endif %}">*/
/*             {% if data.icon is defined and data.icon != '' %}<i class="icon {{ data.icon }}"></i>{% endif %}*/
/*             {{ data.title|trans }}*/
/*         </a>*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Renders submenu*/
/*     params:*/
/*         data.children             - Submenu groups*/
/*         data.children[].title     - Group title*/
/*         data.children[].children  - Vertical menu items*/
/*         activeVTab                - Active vertical tab name*/
/* #}*/
/* {% macro renderVerticalSubmenu(data, activeVTab = false) %}*/
/*     {% import _self as __ %}*/
/*     <div class="span2 system-configuration-sidebar">*/
/*         {% for group in data %}*/
/*             {% set groupData = group.toViewData %}*/
/*             <dl>*/
/*                 <dt>*/
/*                     <h4>{{ groupData.title|trans }}</h4>*/
/*                 </dt>*/
/*                 <dd>*/
/*                     {% if group.count %}*/
/*                         <ul class="nav nav-pills nav-stacked">*/
/*                             {% for tab in group %}*/
/*                                 {% set tabData = {*/
/*                                     isActive: activeVTab and activeVTab == tab.name,*/
/*                                     url: path('oro_config_configuration_system', {activeGroup: data.name, activeSubGroup: tab.name })*/
/*                                     }|merge(tab.toViewData)*/
/*                                 %}*/
/*                                 {{ __.renderTabNavItem(tabData) }}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 </dd>*/
/*             </dl>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Renders tab form*/
/*     params:*/
/*         form        - form view for active tab tree configuration*/
/*         formAction  - current url for submitting form*/
/* #}*/
/* {% macro renderTab(form, formAction) %}*/
/*     {% import _self as __ %}*/
/* */
/*     {% set data = {*/
/*         'formErrors': form_errors(form),*/
/*         'dataBlocks': form_data_blocks(form),*/
/*         'hiddenData': form_rest(form)*/
/*     } %}*/
/* */
/*     {% set data = oro_form_process(data, form) %}*/
/* */
/*     <div class="span10 form-container">*/
/*         <form id="{{ form.vars.name }}" {{ form_enctype(form) }} action="{{ formAction }}" method="post"*/
/*               data-collect="true" class="scrollable-substructure">*/
/*             <div class="pull-right">*/
/*                 <input type="hidden" name="input_action" value="" data-form-id="{{ form.vars.name }}"/>*/
/*             </div>*/
/*             {% if data.formErrors is defined and data.formErrors | length %}*/
/*                 <div class="customer-info-actions container-fluid well-small alert-wrap">*/
/*                     <div class="alert alert-error">*/
/*                         <button class="close" type="button" data-dismiss="alert" data-target=".alert-wrap">×</button>*/
/*                         {{ data.formErrors|raw }}*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {% for scrollBlock in data.dataBlocks %}*/
/*                 <div class="clearfix">*/
/*                     <h4 class="scrollspy-title">{{ scrollBlock.title|trans }}</h4>*/
/* */
/*                     {% if scrollBlock.description is defined and scrollBlock.description != '' %}*/
/*                         <p>{{ scrollBlock.description }}</p>*/
/*                     {% endif %}*/
/* */
/*                     {% for subblock in scrollBlock.subblocks %}*/
/*                         {{ __.renderFiedset(subblock) }}*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             {% endfor %}*/
/*             <div class="hide">*/
/*                 {{ data.hiddenData|raw }}*/
/*             </div>*/
/*         </form>*/
/*         {{ oro_form_js_validation(form) }}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Renders fieldset*/
/*     params:*/
/*         block.title       - fieldset label*/
/*         block.description - fieldset description (optional)*/
/*         block.data        - fields data*/
/* #}*/
/* {% macro renderFiedset(block) %}*/
/*     {% import _self as __ %}*/
/*     <fieldset class="form-horizontal">*/
/*         <h5 class="user-fiedset">*/
/*             <span>{{ block.title|trans }}</span>*/
/*         </h5>*/
/* */
/*         {% if block.description is defined and block.description != '' %}*/
/*             <div class="container-fluid">*/
/*                 <p>{{ block.description }}</p>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% for dataBlock in block.data %}*/
/*             {{ dataBlock|raw }}*/
/*         {% endfor %}*/
/*     </fieldset>*/
/* {% endmacro %}*/
/* */
