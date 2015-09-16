<?php

/* OroUserBundle:Role:update.html.twig */
class __TwigTemplate_0891474bc5124b0d6fd4c02a6287b2d83cf87bff922d27efa2ba86b5c14770e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "OroUserBundle:Role:update.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "OroUserBundle:Role:update.html.twig", 2);
        // line 3
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:Role:update.html.twig", 3);

        $this->env->getExtension("oro_title")->set(array("params" => array("%role%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 61
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(
            ['jquery'],
            function (\$) {
                'use strict';

                \$(function() {
                    var decorateTabs = function() {
                        \$('.tab-groups').find('li.tab>a').each(function() {
                            var \$target = \$(\$(this).attr('href'));
                            var hasGranted = \$target.find('.acl-permission:not(.default-field) .acl-permission-toggle.granted').length;
                            var hasMissing = \$target.find('.acl-permission:not(.default-field) .acl-permission-toggle.non-granted').length;
                            var iconClass = hasMissing ? (hasGranted ? 'circle' : 'remove') : 'ok';
                            var \$icon = \$(this).find('i').first();
                            \$icon.removeClass('icon-ok icon-remove icon-circle').addClass('icon-' + iconClass);
                        });
                    };

                    var togglePermission = function(\$icon, callback) {
                        if (\$icon.parent().hasClass('default-field-toggle')) {
                            var permission = \$icon.parent().data('permission');
                            var \$defaultIcon = \$('.default-field[data-permission=\"' + permission + '\"]').find('i.' + (\$icon.hasClass('granted') ? 'granted' : 'non-granted'));
                            \$defaultIcon.toggleClass('icon-ok granted').toggleClass('icon-remove non-granted');
                            var \$defaultInput = \$defaultIcon.siblings('input[type=\"checkbox\"]').eq(0);
                            \$defaultInput.prop('checked', !\$defaultInput.is(':checked'));
                        }
                        \$icon.toggleClass('icon-ok granted').toggleClass('icon-remove non-granted');
                        var \$input = \$icon.siblings('input[type=\"checkbox\"]').eq(0);
                        \$input.prop('checked', !\$input.is(':checked')).trigger('change');
                        (callback || \$.noop)();
                    };

                    \$('.acl-permission i').on('click', function() {
                        togglePermission(\$(this), decorateTabs)
                    });

                    \$('.tab-groups').on('click', 'li.tab .acl-group-permission-toggle', function() {
                        var classToToggle = \$(this).hasClass('icon-ok') ? 'granted' : 'non-granted';
                        var \$target = \$(\$(this).parent().attr('href'));
                        \$target.find('.acl-permission:not(.default-field) i.' + classToToggle).each(function() {
                            togglePermission(\$(this));
                        });
                        decorateTabs();
                    });

                    decorateTabs();
                });
            }
        );
    </script>
";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => ((        // line 66
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('routing')->getPath("oro_user_role_update", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))))) : ($this->env->getExtension('routing')->getPath("oro_user_role_create"))), "attr" => array("class" => "form-tabbed", "data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("role.title"))))));
        // line 72
        echo "

        ";
        // line 74
        $context["title"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ((($this->env->getExtension('translator')->trans("role.edit") . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))) : ($this->env->getExtension('translator')->trans("role.create")));
        // line 75
        echo "
        ";
        // line 76
        ob_start();
        // line 77
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath("oro_user_role_index")), "method"), "html", null, true);
        echo "
            ";
        // line 78
        if ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) {
            // line 79
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath("oro_api_delete_role", array("id" =>             // line 80
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), 1 => "oro_user_role_remove", 2 => $this->env->getExtension('routing')->getPath("oro_user_role_index"), 3 => $this->env->getExtension('translator')->trans("Are you sure you want to delete this role?"), 4 => $this->env->getExtension('translator')->trans("Role removed")), "method"), "html", null, true);
            // line 85
            echo "
            ";
        }
        // line 87
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array()), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 89
        echo "
        ";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => null, 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 92
        $context["tabs"] = array(0 => "General");
        // line 93
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["privilegesConfig"]) ? $context["privilegesConfig"] : $this->getContext($context, "privilegesConfig"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 94
            echo "            ";
            $context["tabs"] = twig_array_merge((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), array(0 => ("rights." . $context["item"])));
            // line 95
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        ";
        $context["tabs"] = twig_array_merge((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), array(0 => "Users"));
        // line 97
        echo "
        ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => (isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")), 1 => ""), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content\">

            ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            <div class=\"tab-pane active buffer-top\" id=\"general\">
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
                ";
        // line 106
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 107
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner", array()), 'row', array("attr" => array("class" => "hide")));
            echo "
                ";
        }
        // line 109
        echo "            </div>

            ";
        // line 111
        $context["groups"] = $this->env->getExtension('pim_acl_groups_extension')->getAclGroups();
        // line 112
        echo "
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privilegesConfig"]) ? $context["privilegesConfig"] : $this->getContext($context, "privilegesConfig")));
        foreach ($context['_seq'] as $context["privilegeBlock"] => $context["privilegeConfig"]) {
            // line 114
            echo "                <div class=\"tab-pane\" id=\"rights-";
            echo twig_escape_filter($this->env, $context["privilegeBlock"], "html", null, true);
            echo "\">
                    ";
            // line 115
            if (("groups" == $this->getAttribute($context["privilegeConfig"], "view_type", array()))) {
                // line 116
                echo "                        <div class=\"tab-groups\">
                            <ul class=\"nav nav-list\">
                                ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 119
                    echo "                                    <li class=\"tab";
                    echo ((($this->getAttribute($context["loop"], "index", array()) == 1)) ? (" active") : (""));
                    echo "\">
                                        <a href=\"#tabs-";
                    // line 120
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["group"], array(" " => "-", "." => "-"))), "html", null, true);
                    echo "\" data-toggle=\"tab\">
                                            <i class=\"acl-group-permission-toggle\"></i>
                                            ";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group"]), "html", null, true);
                    echo "
                                        </a>
                                    </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["privilegeBlock"], array(), "array"), "children", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    if (((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) == "entity")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) != "(default)"))) {
                        // line 127
                        echo "                                    ";
                        $context["groupName"] = ("oro_security.acl_group." . twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array())));
                        // line 128
                        echo "                                    <li class=\"tab\">
                                        <a href=\"#tabs-";
                        // line 129
                        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["groupName"]) ? $context["groupName"] : $this->getContext($context, "groupName")), array(" " => "-", "." => "-")), "html", null, true);
                        echo "\" data-toggle=\"tab\">
                                            <i class=\"acl-group-permission-toggle\"></i>
                                            ";
                        // line 131
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["groupName"]) ? $context["groupName"] : $this->getContext($context, "groupName"))), "html", null, true);
                        echo "
                                        </a>
                                    </li>
                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                                <li class=\"tab\">
                                    <a href=\"#tabs-group-system\" data-toggle=\"tab\">
                                        <i class=\"acl-group-permission-toggle\"></i>
                                        ";
                // line 138
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("System"), "html", null, true);
                echo "
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"tab-content\">
                            ";
                // line 144
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
                foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                    // line 145
                    echo "                                <div id=\"tabs-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["group"], array(" " => "-", "." => "-"))), "html", null, true);
                    echo "\" class=\"tab-pane fullheight\">
                                    <h3>";
                    // line 146
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group"]), "html", null, true);
                    echo "</h3>
                                    <div class=\"acl-group\">
                                        ";
                    // line 148
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["privilegeBlock"], array(), "array"), "children", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        if (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()) == $context["group"])) {
                            // line 149
                            echo "                                            ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                            echo "
                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 151
                    echo "                                    </div>
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["privilegeBlock"], array(), "array"), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    if (((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) == "entity")) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) != "(default)"))) {
                        // line 155
                        echo "                                ";
                        $context["groupName"] = ("oro_security.acl_group." . twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array())));
                        // line 156
                        echo "                                <div id=\"tabs-";
                        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["groupName"]) ? $context["groupName"] : $this->getContext($context, "groupName")), array(" " => "-", "." => "-")), "html", null, true);
                        echo "\" class=\"tab-pane fullheight\">
                                    <h3>";
                        // line 157
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["groupName"]) ? $context["groupName"] : $this->getContext($context, "groupName"))), "html", null, true);
                        echo "</h3>
                                    <div class=\"acl-group\">
                                        ";
                        // line 159
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                        echo "
                                    </div>
                                </div>
                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "                            <div id=\"tabs-group-system\" class=\"tab-pane fullheight\">
                                <h3>";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("System"), "html", null, true);
                echo "</h3>
                                <div class=\"acl-group\">
                                    ";
                // line 166
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["privilegeBlock"], array(), "array"), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    if ((!twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "group", array()), (isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups"))) && (($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "extensionKey", array()) != "entity") || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")))) {
                        // line 167
                        echo "                                        ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                        echo "
                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                                </div>
                            </div>
                        </div>
                    ";
            } else {
                // line 173
                echo "                        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["privilegeBlock"], array(), "array"), 'widget');
                echo "
                    ";
            }
            // line 175
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['privilegeBlock'], $context['privilegeConfig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "
            <div class=\"tab-pane\" id=\"users\">
                ";
        // line 179
        echo $context["dataGrid"]->getrenderGrid("pim-role-user-grid", array("role_id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))));
        echo "
                ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers"));
        echo "
                ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers"));
        echo "
            </div>
        </div>

    ";
        // line 185
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 185,  429 => 181,  425 => 180,  421 => 179,  417 => 177,  410 => 175,  404 => 173,  398 => 169,  388 => 167,  383 => 166,  378 => 164,  375 => 163,  364 => 159,  359 => 157,  354 => 156,  351 => 155,  345 => 154,  337 => 151,  327 => 149,  322 => 148,  317 => 146,  312 => 145,  308 => 144,  299 => 138,  294 => 135,  283 => 131,  278 => 129,  275 => 128,  272 => 127,  266 => 126,  248 => 122,  243 => 120,  238 => 119,  221 => 118,  217 => 116,  215 => 115,  210 => 114,  206 => 113,  203 => 112,  201 => 111,  197 => 109,  191 => 107,  189 => 106,  185 => 105,  179 => 102,  172 => 98,  169 => 97,  166 => 96,  160 => 95,  157 => 94,  152 => 93,  150 => 92,  145 => 90,  142 => 89,  136 => 87,  132 => 85,  130 => 80,  128 => 79,  126 => 78,  121 => 77,  119 => 76,  116 => 75,  114 => 74,  110 => 72,  108 => 66,  107 => 65,  102 => 64,  99 => 63,  42 => 8,  39 => 7,  35 => 1,  33 => 61,  31 => 5,  28 => 3,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% oro_title_set({params : { "%role%": form.vars.value.label } }) %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery'],*/
/*             function ($) {*/
/*                 'use strict';*/
/* */
/*                 $(function() {*/
/*                     var decorateTabs = function() {*/
/*                         $('.tab-groups').find('li.tab>a').each(function() {*/
/*                             var $target = $($(this).attr('href'));*/
/*                             var hasGranted = $target.find('.acl-permission:not(.default-field) .acl-permission-toggle.granted').length;*/
/*                             var hasMissing = $target.find('.acl-permission:not(.default-field) .acl-permission-toggle.non-granted').length;*/
/*                             var iconClass = hasMissing ? (hasGranted ? 'circle' : 'remove') : 'ok';*/
/*                             var $icon = $(this).find('i').first();*/
/*                             $icon.removeClass('icon-ok icon-remove icon-circle').addClass('icon-' + iconClass);*/
/*                         });*/
/*                     };*/
/* */
/*                     var togglePermission = function($icon, callback) {*/
/*                         if ($icon.parent().hasClass('default-field-toggle')) {*/
/*                             var permission = $icon.parent().data('permission');*/
/*                             var $defaultIcon = $('.default-field[data-permission="' + permission + '"]').find('i.' + ($icon.hasClass('granted') ? 'granted' : 'non-granted'));*/
/*                             $defaultIcon.toggleClass('icon-ok granted').toggleClass('icon-remove non-granted');*/
/*                             var $defaultInput = $defaultIcon.siblings('input[type="checkbox"]').eq(0);*/
/*                             $defaultInput.prop('checked', !$defaultInput.is(':checked'));*/
/*                         }*/
/*                         $icon.toggleClass('icon-ok granted').toggleClass('icon-remove non-granted');*/
/*                         var $input = $icon.siblings('input[type="checkbox"]').eq(0);*/
/*                         $input.prop('checked', !$input.is(':checked')).trigger('change');*/
/*                         (callback || $.noop)();*/
/*                     };*/
/* */
/*                     $('.acl-permission i').on('click', function() {*/
/*                         togglePermission($(this), decorateTabs)*/
/*                     });*/
/* */
/*                     $('.tab-groups').on('click', 'li.tab .acl-group-permission-toggle', function() {*/
/*                         var classToToggle = $(this).hasClass('icon-ok') ? 'granted' : 'non-granted';*/
/*                         var $target = $($(this).parent().attr('href'));*/
/*                         $target.find('.acl-permission:not(.default-field) i.' + classToToggle).each(function() {*/
/*                             togglePermission($(this));*/
/*                         });*/
/*                         decorateTabs();*/
/*                     });*/
/* */
/*                     decorateTabs();*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% set entityId = form.vars.value.id %}*/
/* */
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': entityId ? path('oro_user_role_update', { 'id': entityId}) : path('oro_user_role_create'),*/
/*         'attr': {*/
/*             'class': 'form-tabbed',*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'role.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = entityId ? 'role.edit'|trans ~ ' - ' ~ form.vars.value.label : 'role.create'|trans %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('oro_user_role_index')) }}*/
/*             {% if entityId %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('oro_api_delete_role', { id: entityId }),*/
/*                     'oro_user_role_remove',*/
/*                     path('oro_user_role_index'),*/
/*                     'Are you sure you want to delete this role?'|trans,*/
/*                     'Role removed'|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*             {{ elements.submitBtn }}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, null, elements.updated(form.vars.id)) }}*/
/* */
/*         {% set tabs = ['General'] %}*/
/*         {% for item in privilegesConfig|keys %}*/
/*             {% set tabs = tabs|merge(['rights.' ~ item]) %}*/
/*         {% endfor %}*/
/*         {% set tabs = tabs|merge(['Users']) %}*/
/* */
/*         {{ elements.form_navbar(tabs, '') }}*/
/* */
/*         <div class="row-fluid tab-content">*/
/* */
/*             {{ elements.form_errors(form) }}*/
/* */
/*             <div class="tab-pane active buffer-top" id="general">*/
/*                 {{ form_row(form.label) }}*/
/*                 {% if form.owner is defined %}*/
/*                     {{ form_row(form.owner, {attr : { class: 'hide' }}) }}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {% set groups = acl_groups() %}*/
/* */
/*             {% for privilegeBlock, privilegeConfig in privilegesConfig %}*/
/*                 <div class="tab-pane" id="rights-{{ privilegeBlock }}">*/
/*                     {% if 'groups' == privilegeConfig.view_type %}*/
/*                         <div class="tab-groups">*/
/*                             <ul class="nav nav-list">*/
/*                                 {% for group in groups %}*/
/*                                     <li class="tab{{ loop.index == 1 ? ' active' : '' }}">*/
/*                                         <a href="#tabs-{{ group|replace({' ': '-', '.': '-'})|lower }}" data-toggle="tab">*/
/*                                             <i class="acl-group-permission-toggle"></i>*/
/*                                             {{ group|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                                 {% for child in form[privilegeBlock].children|reverse if child.vars.value.group not in groups and child.vars.value.extensionKey == 'entity' and child.vars.value.identity.name != '(default)' %}*/
/*                                     {% set groupName = 'oro_security.acl_group.' ~ child.vars.value.identity.name|lower %}*/
/*                                     <li class="tab">*/
/*                                         <a href="#tabs-{{ groupName|replace({' ': '-', '.': '-'}) }}" data-toggle="tab">*/
/*                                             <i class="acl-group-permission-toggle"></i>*/
/*                                             {{ groupName|trans }}*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 {% endfor %}*/
/*                                 <li class="tab">*/
/*                                     <a href="#tabs-group-system" data-toggle="tab">*/
/*                                         <i class="acl-group-permission-toggle"></i>*/
/*                                         {{ 'System'|trans }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="tab-content">*/
/*                             {% for group in groups %}*/
/*                                 <div id="tabs-{{ group|replace({' ': '-', '.': '-'})|lower }}" class="tab-pane fullheight">*/
/*                                     <h3>{{ group|trans }}</h3>*/
/*                                     <div class="acl-group">*/
/*                                         {% for child in form[privilegeBlock].children if child.vars.value.group == group %}*/
/*                                             {{ form_widget(child) }}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                             {% for child in form[privilegeBlock].children if child.vars.value.group not in groups and child.vars.value.extensionKey == 'entity' and child.vars.value.identity.name != '(default)' %}*/
/*                                 {% set groupName = 'oro_security.acl_group.' ~ child.vars.value.identity.name|lower %}*/
/*                                 <div id="tabs-{{ groupName|replace({' ': '-', '.': '-'}) }}" class="tab-pane fullheight">*/
/*                                     <h3>{{ groupName|trans }}</h3>*/
/*                                     <div class="acl-group">*/
/*                                         {{ form_widget(child) }}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                             <div id="tabs-group-system" class="tab-pane fullheight">*/
/*                                 <h3>{{ 'System'|trans }}</h3>*/
/*                                 <div class="acl-group">*/
/*                                     {% for child in form[privilegeBlock].children if child.vars.value.group not in groups and (child.vars.value.extensionKey != 'entity' or child.vars.value.identity.name == '(default)') %}*/
/*                                         {{ form_widget(child) }}*/
/*                                     {% endfor %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         {{ form_widget(form[privilegeBlock]) }}*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*             <div class="tab-pane" id="users">*/
/*                 {{ dataGrid.renderGrid('pim-role-user-grid', {role_id: entityId}) }}*/
/*                 {{ form_widget(form.appendUsers, {'id': 'roleAppendUsers'}) }}*/
/*                 {{ form_widget(form.removeUsers, {'id': 'roleRemoveUsers'}) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
