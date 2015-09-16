<?php

/* NelmioApiDocBundle::method.html.twig */
class __TwigTemplate_d84856b17f41ee0a715729dc766d6aa36adc46eb9da2ccd2643cf143bbeea5a7 extends Twig_Template
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
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "html", null, true);
        echo " operation\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\">
    <a class=\"heading toggler";
        // line 2
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated", array())) {
            echo " deprecated";
        }
        echo "\" href=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "id", array()), "html", null, true);
        echo "\">
        <h3>
            <span class=\"http_method\">
                <i>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "html", null, true);
        echo "</i>
            </span>

            ";
        // line 8
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "deprecated", array())) {
            // line 9
            echo "            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) {
            // line 15
            echo "                <span class=\"icon lock\" title=\"HTTPS\"></span>
            ";
        }
        // line 17
        echo "            ";
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authentication", array())) {
            // line 18
            echo "                <span class=\"icon keys\" title=\"Needs ";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authenticationRoles", array())) > 0)) ? (twig_join_filter($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "authenticationRoles", array()), ", ")) : ("authentication")), "html", null, true);
            echo "\"></span>
            ";
        }
        // line 20
        echo "
            <span class=\"path\">
                ";
        // line 22
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "host", array(), "any", true, true)) {
            // line 23
            echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "host", array()), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri", array()), "html", null, true);
        echo "
            </span>
        </h3>
        <ul class=\"options\">
            ";
        // line 30
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "description", array(), "any", true, true)) {
            // line 31
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "description", array()), "html", null, true);
            echo "</li>
            ";
        }
        // line 33
        echo "        </ul>
    </a>

    <div class=\"content\" style=\"display: ";
        // line 36
        if ((array_key_exists("displayContent", $context) && ((isset($context["displayContent"]) ? $context["displayContent"] : $this->getContext($context, "displayContent")) == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            <li class=\"selected\" data-pane=\"content\">Documentation</li>
            ";
        // line 39
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 40
            echo "                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 42
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 46
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "documentation", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation", array())))) {
            // line 47
            echo "                <h4>Documentation</h4>
                <div>";
            // line 48
            echo $this->env->getExtension('nelmio_api_doc')->markdown($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "documentation", array()));
            echo "</div>
            ";
        }
        // line 50
        echo "
            ";
        // line 51
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array())))) {
            // line 52
            echo "                <h4>Link</h4>
                <div><a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "link", array()), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array())))) {
            // line 57
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 69
                echo "                            <tr>
                                <td>";
                // line 70
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                                <td>";
                // line 71
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "requirement", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "requirement", array())) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 72
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "dataType", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "dataType", array())) : ("")), "html", null, true);
                echo "</td>
                                <td>";
                // line 73
                echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "description", array())) : ("")), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                    </tbody>
                </table>
            ";
        }
        // line 79
        echo "
            ";
        // line 80
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array())))) {
            // line 81
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 91
                echo "                        <tr>
                            <td>";
                // line 92
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["infos"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 96
                    echo "                                    <tr>
                                        <td>";
                    // line 97
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["key"]), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 98
                    echo twig_escape_filter($this->env, trim(twig_replace_filter(twig_jsonencode_filter($context["value"]), array("\\\\" => "\\")), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                    </tbody>
                </table>
            ";
        }
        // line 108
        echo "
            ";
        // line 109
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array())))) {
            // line 110
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 122
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 123
                echo "                            ";
                if ( !$this->getAttribute($context["infos"], "readonly", array())) {
                    // line 124
                    echo "                                <tr>
                                    <td>";
                    // line 125
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 126
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "dataType", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "dataType", array())) : ("")), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 127
                    echo (($this->getAttribute($context["infos"], "required", array())) ? ("true") : ("false"));
                    echo "</td>
                                    <td>";
                    // line 128
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", array()), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 129
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["infos"], "description", array(), "any", true, true)) ? ($this->getAttribute($context["infos"], "description", array())) : ("")), "html", null, true);
                    echo "</td>
                                </tr>
                            ";
                }
                // line 132
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "                    </tbody>
                </table>
            ";
        }
        // line 136
        echo "
            ";
        // line 137
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "response", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "response", array())))) {
            // line 138
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Versions</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "response", array()));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 150
                echo "                            <tr>
                                <td>";
                // line 151
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                                <td>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 153
                $this->loadTemplate("NelmioApiDocBundle:Components:version.html.twig", "NelmioApiDocBundle::method.html.twig", 153)->display(array("sinceVersion" => $this->getAttribute($context["infos"], "sinceVersion", array()), "untilVersion" => $this->getAttribute($context["infos"], "untilVersion", array())));
                echo "</td>
                                <td>";
                // line 154
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                    </tbody>
                </table>
            ";
        }
        // line 160
        echo "
            ";
        // line 161
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "statusCodes", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes", array())))) {
            // line 162
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "statusCodes", array()));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 172
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 173
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "<a/></td>
                            <td>
                                <ul>
                                    ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["descriptions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 177
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 179
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                    </tbody>
                </table>
            ";
        }
        // line 186
        echo "
            ";
        // line 187
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "cache", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache", array())))) {
            // line 188
            echo "                <h4>Cache</h4>
                <div>";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "cache", array()), "html", null, true);
            echo "s</div>
            ";
        }
        // line 191
        echo "
            </div>

            ";
        // line 194
        if ((isset($context["enableSandbox"]) ? $context["enableSandbox"] : $this->getContext($context, "enableSandbox"))) {
            // line 195
            echo "                <div class=\"pane sandbox\">
                    <form method=\"";
            // line 196
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "method", array())), "html", null, true);
            echo "\" action=\"";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "host", array(), "any", true, true)) {
                echo (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "https", array())) ? ("https://") : ("http://"));
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "host", array()), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "uri", array()), "html", null, true);
            echo "\">
                        <fieldset class=\"parameters\">
                            <legend>Input</legend>
                            ";
            // line 199
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "requirements", array(), "any", true, true)) {
                // line 200
                echo "                                <h4>Requirements</h4>
                                ";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "requirements", array()));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 202
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                    // line 203
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                    // line 205
                    if ($this->getAttribute($context["infos"], "description", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                    } else {
                        echo "Value";
                    }
                    echo "\" ";
                    if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                        echo "\" ";
                    }
                    echo "/> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                echo "                            ";
            }
            // line 209
            echo "                            ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "filters", array(), "any", true, true)) {
                // line 210
                echo "                                <h4>Filters</h4>
                                ";
                // line 211
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "filters", array()));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 212
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                    // line 213
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                    // line 215
                    if ($this->getAttribute($context["infos"], "description", array(), "any", true, true)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                    } else {
                        echo "Value";
                    }
                    echo "\" ";
                    if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                        echo " value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                        echo "\" ";
                    }
                    echo "/> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "                            ";
            }
            // line 219
            echo "                            ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "parameters", array(), "any", true, true)) {
                // line 220
                echo "                                <h4>Parameters</h4>
                                ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "parameters", array()));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 222
                    echo "                                ";
                    if ( !$this->getAttribute($context["infos"], "readonly", array())) {
                        // line 223
                        echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"";
                        // line 224
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 226
                        if ($this->getAttribute($context["infos"], "dataType", array())) {
                            echo "[";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", array()), "html", null, true);
                            echo "] ";
                        }
                        if ($this->getAttribute($context["infos"], "format", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", array()), "html", null, true);
                        }
                        if ($this->getAttribute($context["infos"], "description", array())) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", array()), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["infos"], "default", array(), "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", array()), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                    </p>
                                ";
                    }
                    // line 229
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "                                <button class=\"add\">New parameter</button>
                            ";
            }
            // line 232
            echo "
                        </fieldset>

                        <fieldset class=\"headers\">
                            <legend>Headers</legend>

                            ";
            // line 238
            if ((isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType"))) {
                // line 239
                echo "                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" value=\"Accept\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" value=\"";
                // line 242
                echo twig_escape_filter($this->env, (isset($context["acceptType"]) ? $context["acceptType"] : $this->getContext($context, "acceptType")), "html", null, true);
                echo "\" /> <span class=\"remove\">-</span>
                                </p>
                            ";
            }
            // line 245
            echo "
                            <p class=\"tuple\">
                                <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                <span>=</span>
                                <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                            </p>

                            <button class=\"add\">New header</button>
                        </fieldset>

                        <fieldset class=\"request-content\">
                            <legend>Content</legend>

                            <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                            <p class=\"tuple\">
                                <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                <span>=</span>
                                <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                <button class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                            </p>
                        </fieldset>

                        <div class=\"buttons\">
                            <input type=\"submit\" value=\"Try!\" />
                        </div>
                    </form>

                    <script type=\"text/x-tmpl\" class=\"tuple_template\">
                    <p class=\"tuple\">
                        <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                        <span>=</span>
                        <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                    </p>
                    </script>

                    <div class=\"result\">
                        <h4>Request URL</h4>
                        <pre class=\"url\"></pre>

                        <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small></h4>
                        <pre class=\"headers to-expand\"></pre>

                        <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                        <pre class=\"response prettyprint\"></pre>
                    </div>
                </div>
            ";
        }
        // line 293
        echo "        </div>
    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 293,  621 => 245,  615 => 242,  610 => 239,  608 => 238,  600 => 232,  596 => 230,  590 => 229,  566 => 226,  561 => 224,  558 => 223,  555 => 222,  551 => 221,  548 => 220,  545 => 219,  542 => 218,  523 => 215,  518 => 213,  515 => 212,  511 => 211,  508 => 210,  505 => 209,  502 => 208,  483 => 205,  478 => 203,  475 => 202,  471 => 201,  468 => 200,  466 => 199,  454 => 196,  451 => 195,  449 => 194,  444 => 191,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  393 => 172,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  368 => 157,  359 => 154,  355 => 153,  351 => 152,  347 => 151,  344 => 150,  340 => 149,  327 => 138,  325 => 137,  322 => 136,  317 => 133,  311 => 132,  305 => 129,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  283 => 123,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  246 => 101,  237 => 98,  233 => 97,  230 => 96,  226 => 95,  220 => 92,  217 => 91,  213 => 90,  202 => 81,  200 => 80,  197 => 79,  192 => 76,  183 => 73,  179 => 72,  175 => 71,  171 => 70,  168 => 69,  164 => 68,  151 => 57,  149 => 56,  146 => 55,  139 => 53,  136 => 52,  134 => 51,  131 => 50,  126 => 48,  123 => 47,  121 => 46,  115 => 42,  111 => 40,  109 => 39,  99 => 36,  94 => 33,  88 => 31,  86 => 30,  79 => 26,  76 => 24,  74 => 23,  72 => 22,  68 => 20,  62 => 18,  59 => 17,  55 => 15,  53 => 14,  50 => 13,  44 => 9,  42 => 8,  36 => 5,  26 => 2,  19 => 1,);
    }
}
/* <li class="{{ data.method|lower }} operation" id="{{ data.id }}">*/
/*     <a class="heading toggler{% if data.deprecated %} deprecated{% endif %}" href="#{{ data.id }}">*/
/*         <h3>*/
/*             <span class="http_method">*/
/*                 <i>{{ data.method|upper }}</i>*/
/*             </span>*/
/* */
/*             {% if data.deprecated %}*/
/*             <span class="deprecated">*/
/*                 <i>DEPRECATED</i>*/
/*             </span>*/
/*             {% endif %}*/
/* */
/*             {% if data.https %}*/
/*                 <span class="icon lock" title="HTTPS"></span>*/
/*             {% endif %}*/
/*             {% if data.authentication %}*/
/*                 <span class="icon keys" title="Needs {{ data.authenticationRoles|length > 0 ? data.authenticationRoles|join(', ') : 'authentication' }}"></span>*/
/*             {% endif %}*/
/* */
/*             <span class="path">*/
/*                 {% if data.host is defined -%}*/
/*                     {{ data.https ? 'https://' : 'http://' -}}*/
/*                     {{ data.host -}}*/
/*                 {% endif -%}*/
/*                 {{ data.uri }}*/
/*             </span>*/
/*         </h3>*/
/*         <ul class="options">*/
/*             {% if data.description is defined %}*/
/*                 <li>{{ data.description }}</li>*/
/*             {% endif %}*/
/*         </ul>*/
/*     </a>*/
/* */
/*     <div class="content" style="display: {% if displayContent is defined and displayContent == true %}display{% else %}none{% endif %};">*/
/*         <ul class="tabs">*/
/*             <li class="selected" data-pane="content">Documentation</li>*/
/*             {% if enableSandbox %}*/
/*                 <li data-pane="sandbox">Sandbox</li>*/
/*             {% endif %}*/
/*         </ul>*/
/* */
/*         <div class="panes">*/
/*             <div class="pane content selected">*/
/*             {% if data.documentation is defined and data.documentation is not empty %}*/
/*                 <h4>Documentation</h4>*/
/*                 <div>{{ data.documentation|extra_markdown }}</div>*/
/*             {% endif %}*/
/* */
/*             {% if data.link is defined and data.link is not empty %}*/
/*                 <h4>Link</h4>*/
/*                 <div><a href="{{ data.link }}" target="_blank">{{ data.link }}</a></div>*/
/*             {% endif %}*/
/* */
/*             {% if data.requirements is defined  and data.requirements is not empty %}*/
/*                 <h4>Requirements</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Name</th>*/
/*                             <th>Requirement</th>*/
/*                             <th>Type</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for name, infos in data.requirements %}*/
/*                             <tr>*/
/*                                 <td>{{ name }}</td>*/
/*                                 <td>{{ infos.requirement is defined ? infos.requirement : ''}}</td>*/
/*                                 <td>{{ infos.dataType is defined ? infos.dataType : ''}}</td>*/
/*                                 <td>{{ infos.description is defined ? infos.description : ''}}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.filters is defined and data.filters is not empty %}*/
/*                 <h4>Filters</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Name</th>*/
/*                             <th>Information</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for name, infos in data.filters %}*/
/*                         <tr>*/
/*                             <td>{{ name }}</td>*/
/*                             <td>*/
/*                                 <table>*/
/*                                 {% for key, value in infos %}*/
/*                                     <tr>*/
/*                                         <td>{{ key|title }}</td>*/
/*                                         <td>{{ value|json_encode|replace({'\\\\': '\\'})|trim('"') }}</td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                                 </table>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.parameters is defined and data.parameters is not empty %}*/
/*                 <h4>Parameters</h4>*/
/*                 <table class='fullwidth'>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Parameter</th>*/
/*                             <th>Type</th>*/
/*                             <th>Required?</th>*/
/*                             <th>Format</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for name, infos in data.parameters %}*/
/*                             {% if not infos.readonly %}*/
/*                                 <tr>*/
/*                                     <td>{{ name }}</td>*/
/*                                     <td>{{ infos.dataType is defined ? infos.dataType : '' }}</td>*/
/*                                     <td>{{ infos.required ? 'true' : 'false' }}</td>*/
/*                                     <td>{{ infos.format }}</td>*/
/*                                     <td>{{ infos.description is defined ? infos.description : ''  }}</td>*/
/*                                 </tr>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.response is defined and data.response is not empty %}*/
/*                 <h4>Return</h4>*/
/*                 <table class='fullwidth'>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Parameter</th>*/
/*                             <th>Type</th>*/
/*                             <th>Versions</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for name, infos in data.response %}*/
/*                             <tr>*/
/*                                 <td>{{ name }}</td>*/
/*                                 <td>{{ infos.dataType }}</td>*/
/*                                 <td>{% include 'NelmioApiDocBundle:Components:version.html.twig' with {'sinceVersion': infos.sinceVersion, 'untilVersion': infos.untilVersion} only %}</td>*/
/*                                 <td>{{ infos.description }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.statusCodes is defined and data.statusCodes is not empty %}*/
/*                 <h4>Status Codes</h4>*/
/*                 <table class="fullwidth">*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>Status Code</th>*/
/*                         <th>Description</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for status_code, descriptions in data.statusCodes %}*/
/*                         <tr>*/
/*                             <td><a href="http://en.wikipedia.org/wiki/HTTP_{{ status_code }}" target="_blank">{{ status_code }}<a/></td>*/
/*                             <td>*/
/*                                 <ul>*/
/*                                     {% for description in descriptions %}*/
/*                                         <li>{{ description }}</li>*/
/*                                     {%  endfor %}*/
/*                                 </ul>*/
/*                             </td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/* */
/*             {% if data.cache is defined and data.cache is not empty %}*/
/*                 <h4>Cache</h4>*/
/*                 <div>{{ data.cache }}s</div>*/
/*             {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if enableSandbox %}*/
/*                 <div class="pane sandbox">*/
/*                     <form method="{{ data.method|upper }}" action="{% if data.host is defined %}{{ data.https ? 'https://' : 'http://' }}{{ data.host }}{% endif %}{{ data.uri }}">*/
/*                         <fieldset class="parameters">*/
/*                             <legend>Input</legend>*/
/*                             {% if data.requirements is defined %}*/
/*                                 <h4>Requirements</h4>*/
/*                                 {% for name, infos in data.requirements %}*/
/*                                     <p class="tuple">*/
/*                                         <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                         <span>=</span>*/
/*                                         <input type="text" class="value" placeholder="{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                     </p>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                             {% if data.filters is defined %}*/
/*                                 <h4>Filters</h4>*/
/*                                 {% for name, infos in data.filters %}*/
/*                                     <p class="tuple">*/
/*                                         <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                         <span>=</span>*/
/*                                         <input type="text" class="value" placeholder="{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                     </p>*/
/*                                 {% endfor %}*/
/*                             {% endif %}*/
/*                             {% if data.parameters is defined %}*/
/*                                 <h4>Parameters</h4>*/
/*                                 {% for name, infos in data.parameters %}*/
/*                                 {% if not infos.readonly %}*/
/*                                     <p class="tuple">*/
/*                                         <input type="text" class="key" value="{{ name }}" placeholder="Key" />*/
/*                                         <span>=</span>*/
/*                                         <input type="text" class="value" placeholder="{% if infos.dataType %}[{{ infos.dataType }}] {% endif %}{% if infos.format %}{{ infos.format }}{% endif %}{% if infos.description %}{{ infos.description }}{% else %}Value{% endif %}" {% if infos.default is defined %} value="{{ infos.default }}" {% endif %}/> <span class="remove">-</span>*/
/*                                     </p>*/
/*                                 {% endif %}*/
/*                                 {% endfor %}*/
/*                                 <button class="add">New parameter</button>*/
/*                             {% endif %}*/
/* */
/*                         </fieldset>*/
/* */
/*                         <fieldset class="headers">*/
/*                             <legend>Headers</legend>*/
/* */
/*                             {% if acceptType %}*/
/*                                 <p class="tuple">*/
/*                                     <input type="text" class="key" value="Accept" />*/
/*                                     <span>=</span>*/
/*                                     <input type="text" class="value" value="{{ acceptType }}" /> <span class="remove">-</span>*/
/*                                 </p>*/
/*                             {% endif %}*/
/* */
/*                             <p class="tuple">*/
/*                                 <input type="text" class="key" placeholder="Key" />*/
/*                                 <span>=</span>*/
/*                                 <input type="text" class="value" placeholder="Value" /> <span class="remove">-</span>*/
/*                             </p>*/
/* */
/*                             <button class="add">New header</button>*/
/*                         </fieldset>*/
/* */
/*                         <fieldset class="request-content">*/
/*                             <legend>Content</legend>*/
/* */
/*                             <textarea class="content" placeholder="Content set here will override the parameters that do not match the url"></textarea>*/
/* */
/*                             <p class="tuple">*/
/*                                 <input type="text" class="key content-type" value="Content-Type" disabled="disabled" />*/
/*                                 <span>=</span>*/
/*                                 <input type="text" class="value" placeholder="Value" />*/
/*                                 <button class="set-content-type">Set header</button> <small>Replaces header if set</small>*/
/*                             </p>*/
/*                         </fieldset>*/
/* */
/*                         <div class="buttons">*/
/*                             <input type="submit" value="Try!" />*/
/*                         </div>*/
/*                     </form>*/
/* */
/*                     <script type="text/x-tmpl" class="tuple_template">*/
/*                     <p class="tuple">*/
/*                         <input type="text" class="key" placeholder="Key" />*/
/*                         <span>=</span>*/
/*                         <input type="text" class="value" placeholder="Value" /> <span class="remove">-</span>*/
/*                     </p>*/
/*                     </script>*/
/* */
/*                     <div class="result">*/
/*                         <h4>Request URL</h4>*/
/*                         <pre class="url"></pre>*/
/* */
/*                         <h4>Response Headers&nbsp;<small>[<a href="" class="to-expand">Expand</a>]</small></h4>*/
/*                         <pre class="headers to-expand"></pre>*/
/* */
/*                         <h4>Response Body&nbsp;<small>[<a href="" class="to-raw">Raw</a>]</small></h4>*/
/*                         <pre class="response prettyprint"></pre>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </li>*/
/* */
