<?php

/* OroUserBundle:User:view.html.twig */
class __TwigTemplate_78c28f370cc9b2c075244bcea1d7eb33b367ce9b2809bf9fa28793322d350774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroUserBundle:User:view.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'pageActions' => array($this, 'block_pageActions'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:User:view.html.twig", 2);
        // line 4
        $context["fullname"] = _twig_default_filter($this->env->getExtension('oro_locale_name')->format((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))), "N/A");

        $this->env->getExtension("oro_title")->set(array("params" => array("%username%" =>         // line 5
(isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")))));
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
                \$(function() {
                    \$('#container .navigation .span9').removeClass('span9').addClass('span10');
                });
            }
        );
    </script>
";
    }

    // line 33
    public function block_navButtons($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (array_key_exists("editRoute", $context)) {
            // line 35
            echo "        ";
            echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('routing')->getPath((isset($context["editRoute"]) ? $context["editRoute"] : $this->getContext($context, "editRoute"))), "iClass" => "icon-edit ", "title" => "Edit profile", "label" => "Edit"));
            echo "
    ";
        } else {
            // line 37
            echo "        ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_update")) {
                // line 38
                echo "            ";
                echo $context["UI"]->getbutton(array("path" => $this->env->getExtension('routing')->getPath("oro_user_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "iClass" => "icon-edit ", "title" => "Edit user", "label" => "Edit"));
                echo "
        ";
            }
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_delete") && ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 42
            echo "        ";
            echo $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_user", array("id" => $this->getAttribute(            // line 43
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_user_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(            // line 47
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "dataMessage" => $this->env->getExtension('translator')->trans("Are you sure you want to delete this user?"), "successMessage" => $this->env->getExtension('translator')->trans("User deleted"), "title" => "Delete user", "label" => "Delete"));
            // line 52
            echo "
    ";
        }
    }

    // line 56
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 57
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 58
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexPath" => $this->env->getExtension('routing')->getPath("oro_user_index"), "indexLabel" => $this->env->getExtension('translator')->trans("Users"), "entityTitle" =>         // line 61
(isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "hasAvatar" => true, "imagePath" => $this->getAttribute(        // line 63
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "imagePath", array()));
        // line 66
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 69
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 70
        echo "    ";
        $this->displayParentBlock("breadcrumbs", $context, $blocks);
        echo "
    <div class=\"status-enabled pull-left\">
        ";
        // line 72
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "enabled", array())) {
            // line 73
            echo "            <div class=\"badge badge-enabled status-enabled\"><i class=\"icon-status-enabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Active"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 75
            echo "            <div class=\"badge badge-enabled status-disabled\"><i class=\"icon-status-disabled icon-circle\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Inactive"), "html", null, true);
            echo "</div>
        ";
        }
        // line 77
        echo "    </div>
";
    }

    // line 80
    public function block_stats($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $this->displayParentBlock("stats", $context, $blocks);
        echo "
    <li>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last logged in"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "lastLogin", array()))) : ("N/A"));
        echo "</li>
    <li>";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login count"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "loginCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "loginCount", array()), 0)) : (0)), "html", null, true);
        echo "</li>
";
    }

    // line 86
    public function block_pageActions($context, array $blocks = array())
    {
    }

    // line 88
    public function block_content_data($context, array $blocks = array())
    {
        // line 89
        echo "  <div class=\"user-profile-cols\">
    ";
        // line 90
        $context["id"] = "user-profile";
        // line 91
        echo "
    ";
        // line 92
        $context["dataSubBlocks"] = array(0 => $context["UI"]->getattibuteRow("Email", array("value" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "hint" => $this->env->getExtension('translator')->trans("Primary")), ((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emails", array()))) ? (array("data" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emails", array()), "field" => "email")) : (array()))));
        // line 93
        echo "
    ";
        // line 94
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => $this->env->getExtension('translator')->trans("Basic Information"), "data" => array(0 =>         // line 102
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("User name"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array())), 1 => (($this->getAttribute(        // line 103
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namePrefix", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Name prefix"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "namePrefix", array()))) : ("")), 2 =>         // line 104
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("First name"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "firstName", array()), "N/A")) : ("N/A"))), 3 => (($this->getAttribute(        // line 105
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "middleName", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Middle name"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "middleName", array()))) : ("")), 4 =>         // line 106
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Last name"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "lastName", array()), "N/A")) : ("N/A"))), 5 => (($this->getAttribute(        // line 107
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nameSuffix", array())) ? ($context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Name suffix"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nameSuffix", array()))) : ("")), 6 =>         // line 108
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Birthday"), (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthday", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDate($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "birthday", array()))) : ("N/A"))), 7 =>         // line 109
$context["UI"]->getrenderAttribute($this->env->getExtension('translator')->trans("API key"), $this->getAttribute($this, "api_data_block", array(0 => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))), "method")))), 1 => array("title" => $this->env->getExtension('translator')->trans("Contact Information"), "data" =>         // line 114
(isset($context["dataSubBlocks"]) ? $context["dataSubBlocks"] : $this->getContext($context, "dataSubBlocks"))))));
        // line 120
        echo "
    ";
        // line 124
        echo "    ";
        $context["additional"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional Information"), "class" => "active", "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 133
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Catalog locale"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "catalogLocale", array())), 1 =>         // line 134
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Catalog scope"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "catalogScope", array())), 2 =>         // line 135
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("Default tree"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "defaultTree", array())))), 1 => array("title" => "", "useSpan" => false, "data" => array(0 =>         // line 142
$context["UI"]->getattibuteRow($this->env->getExtension('translator')->trans("User salt"), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salt", array())))))));
        // line 149
        echo "
    ";
        // line 150
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), (isset($context["additional"]) ? $context["additional"] : $this->getContext($context, "additional")));
        // line 151
        echo "
    ";
        // line 156
        ob_start();
        $context["additional_data"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 160
        if ( !twig_test_empty((isset($context["additional_data"]) ? $context["additional_data"] : $this->getContext($context, "additional_data")))) {
            // line 161
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional data"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>             // line 168
(isset($context["additional_data"]) ? $context["additional_data"] : $this->getContext($context, "additional_data"))))))));
            // line 173
            echo "    ";
        }
        // line 174
        echo "
    ";
        // line 175
        $context["data"] = array("dataBlocks" => (isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 176
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
  </div>
";
    }

    // line 21
    public function getapi_data_block($__user__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "<div class=\"horizontal\">
    <strong class=\"label label-info\">";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "api", array())) ? ($this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "api", array()), "apiKey", array())) : ("N/A")), "html", null, true);
            echo "</strong>
    ";
            // line 24
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_update")) {
                // line 25
                echo "        <a class=\"btn btn-small no-hash\" id=\"btn-apigen\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_user_apigen", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"
           data-title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key"), "html", null, true);
                echo "\" data-message=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key was successful. New key:"), "html", null, true);
                echo "\">
            ";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Generate key"), "html", null, true);
                echo "
        </a>
    ";
            }
            // line 30
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 30,  273 => 27,  267 => 26,  262 => 25,  260 => 24,  256 => 23,  253 => 22,  241 => 21,  233 => 176,  231 => 175,  228 => 174,  225 => 173,  223 => 168,  221 => 161,  219 => 160,  216 => 156,  213 => 151,  211 => 150,  208 => 149,  206 => 142,  205 => 135,  204 => 134,  203 => 133,  201 => 124,  198 => 120,  196 => 114,  195 => 109,  194 => 108,  193 => 107,  192 => 106,  191 => 105,  190 => 104,  189 => 103,  188 => 102,  187 => 94,  184 => 93,  182 => 92,  179 => 91,  177 => 90,  174 => 89,  171 => 88,  166 => 86,  158 => 83,  152 => 82,  147 => 81,  144 => 80,  139 => 77,  133 => 75,  127 => 73,  125 => 72,  119 => 70,  116 => 69,  109 => 66,  107 => 63,  106 => 61,  105 => 58,  103 => 57,  100 => 56,  94 => 52,  92 => 47,  91 => 43,  89 => 42,  86 => 41,  83 => 40,  77 => 38,  74 => 37,  68 => 35,  65 => 34,  62 => 33,  45 => 8,  42 => 7,  38 => 1,  36 => 5,  33 => 4,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% set fullname = entity|oro_format_name|default('N/A') %}*/
/* {% oro_title_set({params : {"%username%": fullname }}) %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery'],*/
/*             function ($) {*/
/*                 $(function() {*/
/*                     $('#container .navigation .span9').removeClass('span9').addClass('span10');*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% macro api_data_block(user) %}*/
/* <div class="horizontal">*/
/*     <strong class="label label-info">{{ user.api ? user.api.apiKey : 'N/A' }}</strong>*/
/*     {% if resource_granted('oro_user_user_update') %}*/
/*         <a class="btn btn-small no-hash" id="btn-apigen" href="{{ path('oro_user_apigen', { id: user.id }) }}"*/
/*            data-title="{{ 'Generate key'|trans }}" data-message="{{ 'Generate key was successful. New key:'|trans }}">*/
/*             {{ 'Generate key'|trans }}*/
/*         </a>*/
/*     {% endif %}*/
/* </div>*/
/* {% endmacro %}*/
/* */
/* {% block navButtons %}*/
/*     {% if editRoute is defined %}*/
/*         {{ UI.button({'path' : path(editRoute), 'iClass' : 'icon-edit ', 'title' : 'Edit profile', 'label' : 'Edit'}) }}*/
/*     {% else %}*/
/*         {% if resource_granted('oro_user_user_update') %}*/
/*             {{ UI.button({'path' : path('oro_user_update', { id: entity.id }), 'iClass' : 'icon-edit ', 'title' : 'Edit user', 'label' : 'Edit'}) }}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% if resource_granted('oro_user_user_delete') and entity.id!=app.user.id %}*/
/*         {{ UI.deleteButton({*/
/*             'dataUrl': path('oro_api_delete_user', {'id': entity.id}),*/
/*             'dataRedirect': path('oro_user_index'),*/
/*             'aCss': 'no-hash remove-button',*/
/*             'id': 'btn-remove-user',*/
/*             'dataId': entity.id,*/
/*             'dataMessage': 'Are you sure you want to delete this user?'|trans,*/
/*             'successMessage': 'User deleted'|trans,*/
/*             'title': 'Delete user',*/
/*             'label': 'Delete'*/
/*         }) }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_user_index'),*/
/*         'indexLabel': 'Users'|trans,*/
/*         'entityTitle': fullname,*/
/*         'hasAvatar':   true,*/
/*         'imagePath':   entity.imagePath,*/
/*     }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block breadcrumbs %}*/
/*     {{ parent() }}*/
/*     <div class="status-enabled pull-left">*/
/*         {% if entity.enabled %}*/
/*             <div class="badge badge-enabled status-enabled"><i class="icon-status-enabled icon-circle"></i>{{ 'Active'|trans }}</div>*/
/*         {% else %}*/
/*             <div class="badge badge-enabled status-disabled"><i class="icon-status-disabled icon-circle"></i>{{ 'Inactive'|trans }}</div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock breadcrumbs %}*/
/* */
/* {% block stats %}*/
/*     {{ parent() }}*/
/*     <li>{{ 'Last logged in'|trans }}: {{ entity.lastLogin ? entity.lastLogin|oro_format_datetime : 'N/A' }}</li>*/
/*     <li>{{ 'Login count'|trans }}: {{ entity.loginCount|default(0) }}</li>*/
/* {% endblock stats %}*/
/* */
/* {% block pageActions %}{% endblock pageActions %}*/
/* */
/* {% block content_data %}*/
/*   <div class="user-profile-cols">*/
/*     {% set id = 'user-profile' %}*/
/* */
/*     {% set dataSubBlocks = [UI.attibuteRow('Email', {value: entity.email, hint: 'Primary'|trans}, entity.emails|length ? {data: entity.emails, field:'email'} : {})] %}*/
/* */
/*     {% set dataBlocks = [*/
/*         {*/
/*             'title': 'General'|trans,*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': 'Basic Information'|trans,*/
/*                     'data': [*/
/*                         UI.attibuteRow('User name'|trans, entity.username),*/
/*                         entity.namePrefix ? UI.attibuteRow('Name prefix'|trans, entity.namePrefix),*/
/*                         UI.attibuteRow('First name'|trans, entity.firstName|default('N/A')),*/
/*                         entity.middleName ? UI.attibuteRow('Middle name'|trans, entity.middleName),*/
/*                         UI.attibuteRow('Last name'|trans, entity.lastName|default('N/A')),*/
/*                         entity.nameSuffix ? UI.attibuteRow('Name suffix'|trans, entity.nameSuffix),*/
/*                         UI.attibuteRow('Birthday'|trans, entity.birthday ? entity.birthday|oro_format_date : 'N/A'),*/
/*                         UI.renderAttribute('API key'|trans, _self.api_data_block(entity))*/
/*                     ]*/
/*                 },*/
/*                 {*/
/*                     'title': 'Contact Information'|trans,*/
/*                     'data': dataSubBlocks*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/*     %}*/
/* */
/*     {#*/
/*       EntityExtend fields START*/
/*     #}*/
/*     {% set additional = [*/
/*         {*/
/*             'title': 'Additional Information'|trans,*/
/*             'class': 'active',*/
/*             'subblocks': [*/
/*                 {*/
/*                     'title': '',*/
/*                     'useSpan': false,*/
/*                     'data': [*/
/*                         UI.attibuteRow('Catalog locale'|trans, entity.catalogLocale),*/
/*                         UI.attibuteRow('Catalog scope'|trans, entity.catalogScope),*/
/*                         UI.attibuteRow('Default tree'|trans, entity.defaultTree)*/
/*                     ]*/
/*                 },*/
/*                 {*/
/*                     'title': '',*/
/*                     'useSpan': false,*/
/*                     'data': [*/
/*                         UI.attibuteRow('User salt'|trans, entity.salt)*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }*/
/*     ]*/
/*     %}*/
/* */
/*     {% set dataBlocks = dataBlocks|merge(additional) %}*/
/* */
/*     {#*/
/*       EntityExtend fields END*/
/*     #}*/
/* */
/*     {%- set additional_data -%}*/
/*         {% placeholder oro_user_view_additional_data %}*/
/*     {%- endset -%}*/
/* */
/*     {% if additional_data is not empty %}*/
/*         {% set dataBlocks = dataBlocks|merge(*/
/*             [{*/
/*                 'title': 'Additional data'|trans,*/
/*                 'subblocks': [*/
/*                     {*/
/*                         'title': '',*/
/*                         'useSpan': false,*/
/*                         'data': [additional_data]*/
/*                     }*/
/*                 ]*/
/*             }]*/
/*         ) %}*/
/*     {% endif %}*/
/* */
/*     {% set data = { 'dataBlocks': dataBlocks } %}*/
/*     {{ parent() }}*/
/*   </div>*/
/* {% endblock content_data %}*/
/* */
