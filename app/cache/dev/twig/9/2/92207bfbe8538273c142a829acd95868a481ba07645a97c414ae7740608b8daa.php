<?php

/* OroUserBundle:User:update.html.twig */
class __TwigTemplate_526b2b8a83142fd9448a2b95b73e2b357a6098c1a1d9f61773a42558a193de15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroUserBundle:User:update.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User:update.html.twig", 2);
        // line 3
        $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "OroUserBundle:User:update.html.twig", 3);
        // line 5
        $context["fullname"] = _twig_default_filter($this->env->getExtension('oro_locale_name')->format($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 6
(isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")))));
        // line 7
        $context["title"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ((($this->env->getExtension('translator')->trans("Edit user") . " - ") . (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")))) : ($this->env->getExtension('translator')->trans("New user")));
        // line 8
        if ((isset($context["editRoute"]) ? $context["editRoute"] : $this->getContext($context, "editRoute"))) {
            // line 9
            $context["formAction"] = $this->env->getExtension('routing')->getPath((isset($context["editRoute"]) ? $context["editRoute"] : $this->getContext($context, "editRoute")));
        } else {
            // line 11
            $context["formAction"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("oro_user_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("oro_user_create")));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_head_script($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        $this->loadTemplate("OroUIBundle:Js:jquery_jstree.config.js.twig", "OroUserBundle:User:update.html.twig", 16)->display($context);
        // line 17
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'pim/initselect2', 'datepicker', 'jquery.jstree', 'jstree/jquery.hotkeys'],
        function (\$, initSelect2, datepicker) {
            \$(function() {
                \$('.navbar-content.pull-left').css('width', '80%')

                \$('#business_units_tree').jstree({
                    \"checkbox\": {
                        real_checkboxes: true,
                        real_checkboxes_names: function (n) {
                            return ['businessUnits[' + n.data('id') + ']', 1]
                        },
                        two_state: true
                    }
                });

                \$('#";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').find('select').addClass('select2');
                initSelect2.init(\$('#";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "'));

                _.each(\$('#";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " input.datepicker:not(.hasPicker)'), function (field) {
                    datepicker.init(field.getAttribute('id'));
                });

                ";
        // line 40
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rolesCollection", array(), "any", true, true)) {
            // line 41
            echo "                    var \$roles = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rolesCollection", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

                    var checkRoles = function() {
                        if (\$roles.find('input:checked').length) {
                            \$('a[href=\"#pim_user-user-tab-group_and_role\"]').removeClass('error');
                            \$roles.parent().removeClass('validation-error');
                        } else {
                            \$('a[href=\"#pim_user-user-tab-group_and_role\"]').addClass('error');
                            \$roles.addClass('error').parent().addClass('validation-error');
                        }
                    };

                    \$roles.on('change', 'input', checkRoles);

                    checkRoles();
                ";
        }
        // line 57
        echo "            });
        });
    </script>
";
    }

    // line 62
    public function block_page_container($context, array $blocks = array())
    {
        // line 63
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 65
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" =>         // line 66
(isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans("user.title"))))));
        // line 71
        echo "

        ";
        // line 73
        ob_start();
        // line 74
        echo "            ";
        echo $context["elements"]->getbackLink($this->env->getExtension('routing')->getPath("oro_user_index"));
        echo "
            ";
        // line 75
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 76
            echo "                ";
            echo $context["elements"]->getdeleteLink($this->env->getExtension('routing')->getPath("oro_api_delete_user", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 77
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "oro_user_user_delete", $this->env->getExtension('routing')->getPath("oro_user_index"), $this->env->getExtension('translator')->trans("confirmation.remove.user", array("%name%" =>             // line 80
(isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")))), $this->env->getExtension('translator')->trans("flash.user.removed"));
            // line 82
            echo "
            ";
        }
        // line 84
        echo "            ";
        echo $context["elements"]->getsubmitBtn();
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 86
        echo "
        ";
        // line 87
        ob_start();
        // line 88
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 89
            echo "                <div class=\"customer-info well-small\">
                    <div class=\"visual\">
                        <img src=\"";
            // line 91
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
            echo "\"/>
                    </div>
                </div>
                <ul class=\"inline\">
                    <li>";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "createdAt", array()))) : ("N/A"));
            echo "</li>
                    <li>";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "updatedAt", array()))) : ("N/A"));
            echo "</li>
                    <li>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last logged in"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "lastLogin", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "lastLogin", array()))) : ("N/A"));
            echo "</li>
                    <li>";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login count"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "loginCount", array()), 0)) : (0)), "html", null, true);
            echo "</li>
                </ul>
            ";
        }
        // line 101
        echo "        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 102
        echo "
        ";
        // line 103
        echo $context["elements"]->getpage_header((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), null, (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), $context["elements"]->getupdated($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        echo "

        ";
        // line 105
        echo $context["elements"]->getform_navbar($this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab")));
        echo "

        <div class=\"row-fluid tab-content buffer-top\">
            ";
        // line 108
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

            ";
        // line 110
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
        </div>
    ";
        // line 112
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 112,  234 => 110,  229 => 108,  223 => 105,  218 => 103,  215 => 102,  212 => 101,  204 => 98,  198 => 97,  192 => 96,  186 => 95,  177 => 91,  173 => 89,  170 => 88,  168 => 87,  165 => 86,  159 => 84,  155 => 82,  153 => 80,  152 => 77,  150 => 76,  148 => 75,  143 => 74,  141 => 73,  137 => 71,  135 => 66,  134 => 65,  129 => 64,  123 => 63,  120 => 62,  113 => 57,  93 => 41,  91 => 40,  84 => 36,  79 => 34,  75 => 33,  57 => 17,  54 => 16,  52 => 15,  49 => 14,  45 => 1,  42 => 11,  39 => 9,  37 => 8,  35 => 7,  33 => 6,  30 => 5,  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* */
/* {% set fullname = form.vars.value|oro_format_name|default('N/A') %}*/
/* {% oro_title_set({params : {"%username%": fullname }}) %}*/
/* {% set title = form.vars.value.id ? 'Edit user'|trans ~ ' - ' ~ fullname : 'New user'|trans %}*/
/* {% if editRoute %}*/
/*     {% set formAction = path(editRoute) %}*/
/* {% else %}*/
/*     {% set formAction = form.vars.value.id ? path('oro_user_update', { id: form.vars.value.id}) : path('oro_user_create') %}*/
/* {% endif %}*/
/* */
/* {% block head_script %}*/
/*     {# TODO: Find a better way to handle such dependencies in https://magecore.atlassian.net/browse/BAP-1971 #}*/
/*     {% include 'OroUIBundle:Js:jquery_jstree.config.js.twig' %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'pim/initselect2', 'datepicker', 'jquery.jstree', 'jstree/jquery.hotkeys'],*/
/*         function ($, initSelect2, datepicker) {*/
/*             $(function() {*/
/*                 $('.navbar-content.pull-left').css('width', '80%')*/
/* */
/*                 $('#business_units_tree').jstree({*/
/*                     "checkbox": {*/
/*                         real_checkboxes: true,*/
/*                         real_checkboxes_names: function (n) {*/
/*                             return ['businessUnits[' + n.data('id') + ']', 1]*/
/*                         },*/
/*                         two_state: true*/
/*                     }*/
/*                 });*/
/* */
/*                 $('#{{ form.vars.id }}').find('select').addClass('select2');*/
/*                 initSelect2.init($('#{{ form.vars.id }}'));*/
/* */
/*                 _.each($('#{{ form.vars.id }} input.datepicker:not(.hasPicker)'), function (field) {*/
/*                     datepicker.init(field.getAttribute('id'));*/
/*                 });*/
/* */
/*                 {% if form.rolesCollection is defined %}*/
/*                     var $roles = $('#{{ form.rolesCollection.vars.id }}');*/
/* */
/*                     var checkRoles = function() {*/
/*                         if ($roles.find('input:checked').length) {*/
/*                             $('a[href="#pim_user-user-tab-group_and_role"]').removeClass('error');*/
/*                             $roles.parent().removeClass('validation-error');*/
/*                         } else {*/
/*                             $('a[href="#pim_user-user-tab-group_and_role"]').addClass('error');*/
/*                             $roles.addClass('error').parent().addClass('validation-error');*/
/*                         }*/
/*                     };*/
/* */
/*                     $roles.on('change', 'input', checkRoles);*/
/* */
/*                     checkRoles();*/
/*                 {% endif %}*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block page_container %}*/
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': formAction,*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': 'user.title'|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path('oro_user_index')) }}*/
/*             {% if form.vars.value.id and form.vars.value.id != app.user.id %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('oro_api_delete_user', {'id': form.vars.value.id}),*/
/*                     'oro_user_user_delete',*/
/*                     path('oro_user_index'),*/
/*                     'confirmation.remove.user'|trans({ '%name%': fullname }),*/
/*                     'flash.user.removed'|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*             {{ elements.submitBtn }}*/
/*         {% endset %}*/
/* */
/*         {% set left %}*/
/*             {% if form.vars.value.id %}*/
/*                 <div class="customer-info well-small">*/
/*                     <div class="visual">*/
/*                         <img src="{{ form.vars.value.imagePath ? form.vars.value.imagePath | imagine_filter('avatar_med') : asset('bundles/oroui/img/info-user.png') }}" alt="{{ fullname }}"/>*/
/*                     </div>*/
/*                 </div>*/
/*                 <ul class="inline">*/
/*                     <li>{{ 'Created'|trans }}: {{ form.vars.value.createdAt ? form.vars.value.createdAt|oro_format_datetime : 'N/A' }}</li>*/
/*                     <li>{{ 'Updated'|trans }}: {{ form.vars.value.updatedAt ? form.vars.value.updatedAt|oro_format_datetime : 'N/A' }}</li>*/
/*                     <li>{{ 'Last logged in'|trans }}: {{ form.vars.value.lastLogin ? form.vars.value.lastLogin|oro_format_datetime : 'N/A' }}</li>*/
/*                     <li>{{ 'Login count'|trans }}: {{ form.vars.value.loginCount|default(0) }}</li>*/
/*                 </ul>*/
/*             {% endif %}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, left, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="row-fluid tab-content buffer-top">*/
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* {% endblock %}*/
/* */
