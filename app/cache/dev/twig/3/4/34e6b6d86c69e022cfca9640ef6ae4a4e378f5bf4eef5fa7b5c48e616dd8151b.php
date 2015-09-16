<?php

/* OroUIBundle:actions:view.html.twig */
class __TwigTemplate_de43a160b588b5b6216bff25aa95e732a1c8351de62aac7cac187884720a8269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageActions' => array($this, 'block_pageActions'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroUIBundle:actions:view.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:view.html.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"layout-content\">
    <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
        <div class=\"row\">
            <div class=\"pull-right\">
                <div class=\"pull-right\">
                    ";
        // line 11
        echo "                    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 12
        echo "                    ";
        // line 13
        echo "                </div>
                <div class=\"pull-right user-info-state\">
                    <ul class=\"inline-decorate\">
                        ";
        // line 16
        $this->displayBlock('pageActions', $context, $blocks);
        // line 42
        echo "                        ";
        if (((array_key_exists("entity", $context) && array_key_exists("audit_entity_class", $context)) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dataaudit_history"))) {
            // line 43
            echo "                            ";
            $this->loadTemplate("OroDataAuditBundle::change_history_link.html.twig", "OroUIBundle:actions:view.html.twig", 43)->display(array_merge($context, array("entity" => (isset($context["audit_entity_class"]) ? $context["audit_entity_class"] : $this->getContext($context, "audit_entity_class")), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "title" => ((array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) ? $context["audit_title"] : $this->getContext($context, "audit_title")), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))) : ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))), "audit_path" => ((array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) ? $context["audit_path"] : $this->getContext($context, "audit_path")), "oro_dataaudit_history")) : ("oro_dataaudit_history")))));
            // line 44
            echo "                        ";
        }
        // line 45
        echo "                    </ul>
                </div>
            </div>
            <div class=\"span9\">
            ";
        // line 49
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 91
        echo "            </div>
        </div>
    </div>
    <div class=\"layout-content scrollable-container\">
        ";
        // line 95
        $this->displayBlock('content_data', $context, $blocks);
        // line 98
        echo "    </div>
</div>
";
    }

    // line 11
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 16
    public function block_pageActions($context, array $blocks = array())
    {
        // line 17
        echo "                            ";
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "owner", array(), "any", true, true) && $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()))) {
            // line 18
            echo "                                ";
            $context["ownerType"] = $this->env->getExtension('oro_owner_type')->getOwnerType((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
            // line 19
            echo "                                <li>
                                    ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Owner"), "html", null, true);
            echo ":
                                    ";
            // line 21
            if (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "USER")) {
                // line 22
                echo "                                        ";
                if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_view")) {
                    // line 23
                    echo "                                            ";
                    $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "id", array())));
                    // line 24
                    echo "                                            ";
                    $context["ownerName"] = $this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()));
                    // line 25
                    echo "                                        ";
                }
                // line 26
                echo "                                    ";
            } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "BUSINESS_UNIT")) {
                // line 27
                echo "                                        ";
                if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_business_unit_view")) {
                    // line 28
                    echo "                                            ";
                    $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_business_unit_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "id", array())));
                    // line 29
                    echo "                                            ";
                    $context["ownerName"] = $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "name", array());
                    // line 30
                    echo "                                        ";
                }
                // line 31
                echo "                                    ";
            }
            // line 32
            echo "                                    ";
            if (array_key_exists("ownerName", $context)) {
                // line 33
                echo "                                        ";
                if (array_key_exists("ownerPath", $context)) {
                    // line 34
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["ownerPath"]) ? $context["ownerPath"] : $this->getContext($context, "ownerPath")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                    echo "</a>
                                        ";
                } else {
                    // line 36
                    echo "                                            ";
                    echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                    echo "
                                        ";
                }
                // line 38
                echo "                                    ";
            }
            // line 39
            echo "                                </li>
                            ";
        }
        // line 41
        echo "                        ";
    }

    // line 49
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 50
        echo "                <div class=\"customer-info ";
        if ( !$this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true)) {
            echo "customer-simple";
        }
        echo " well-small\">
                    ";
        // line 51
        if (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true) && $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "hasAvatar", array()))) {
            // line 52
            echo "                        <div class=\"visual\">
                            <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
            echo "\"/>
                        </div>
                    ";
        }
        // line 56
        echo "                    <div class=\"customer-content pull-left\">
                        <div class=\"clearfix\">
                            ";
        // line 58
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 79
        echo "                        </div>
                        <div class=\"clearfix\">
                            <ul class=\"inline\">
                                ";
        // line 82
        $this->displayBlock('stats', $context, $blocks);
        // line 86
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            ";
    }

    // line 58
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 59
        echo "                                <div class=\"pull-left\">
                                    ";
        // line 60
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexLabel", array(), "any", true, true)) {
            // line 61
            echo "                                    <div class=\"sub-title\">";
            // line 62
            if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "indexPath", array(), "any", true, true)) {
                // line 63
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexPath", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexLabel", array())), "html", null, true);
                echo "</a>";
            } else {
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexLabel", array())), "html", null, true);
            }
            // line 67
            echo "</div>
                                    <span class=\"separator\">/</span>
                                    ";
        }
        // line 70
        echo "                                    ";
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array(), "any", true, true)) {
            // line 71
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "additional", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 72
                echo "                                            <div class=\"sub-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexPath", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["breadcrumb"], "indexLabel", array())), "html", null, true);
                echo "</a></div>
                                            <span class=\"separator\">/</span>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                    ";
        }
        // line 76
        echo "                                    <h1 class=\"user-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
        echo "</h1>
                                </div>
                            ";
    }

    // line 82
    public function block_stats($context, array $blocks = array())
    {
        // line 83
        echo "                                    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
                                    <li>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array()))) : ("N/A"));
        echo "</li>
                                ";
    }

    // line 95
    public function block_content_data($context, array $blocks = array())
    {
        // line 96
        echo "            ";
        echo $context["UI"]->getscrollData((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 96,  293 => 95,  285 => 84,  278 => 83,  275 => 82,  267 => 76,  264 => 75,  252 => 72,  247 => 71,  244 => 70,  239 => 67,  236 => 65,  229 => 63,  227 => 62,  225 => 61,  223 => 60,  220 => 59,  217 => 58,  209 => 86,  207 => 82,  202 => 79,  200 => 58,  196 => 56,  188 => 53,  185 => 52,  183 => 51,  176 => 50,  173 => 49,  169 => 41,  165 => 39,  162 => 38,  156 => 36,  148 => 34,  145 => 33,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  130 => 28,  127 => 27,  124 => 26,  121 => 25,  118 => 24,  115 => 23,  112 => 22,  110 => 21,  106 => 20,  103 => 19,  100 => 18,  97 => 17,  94 => 16,  89 => 11,  83 => 98,  81 => 95,  75 => 91,  73 => 49,  67 => 45,  64 => 44,  61 => 43,  58 => 42,  56 => 16,  51 => 13,  49 => 12,  46 => 11,  39 => 5,  36 => 4,  32 => 1,  30 => 2,  24 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% block content %}*/
/* <div class="layout-content">*/
/*     <div class="navigation clearfix navbar-extra navbar-extra-right">*/
/*         <div class="row">*/
/*             <div class="pull-right">*/
/*                 <div class="pull-right">*/
/*                     {% placeholder view_navButtons_before with {entity: entity} %}*/
/*                     {% block navButtons %}{% endblock navButtons %}*/
/*                     {% placeholder view_navButtons_after with {entity: entity} %}*/
/*                 </div>*/
/*                 <div class="pull-right user-info-state">*/
/*                     <ul class="inline-decorate">*/
/*                         {% block pageActions %}*/
/*                             {% if entity.owner is defined and entity.owner %}*/
/*                                 {% set ownerType = oro_get_owner_type(entity) %}*/
/*                                 <li>*/
/*                                     {{ 'Owner'|trans }}:*/
/*                                     {% if (ownerType == 'USER') %}*/
/*                                         {% if resource_granted('oro_user_user_view') %}*/
/*                                             {% set ownerPath = path('oro_user_view', {'id': entity.owner.id}) %}*/
/*                                             {% set ownerName = entity.owner|oro_format_name %}*/
/*                                         {% endif %}*/
/*                                     {% elseif (ownerType == 'BUSINESS_UNIT') %}*/
/*                                         {% if resource_granted('oro_business_unit_view') %}*/
/*                                             {% set ownerPath = path('oro_business_unit_view', {'id': entity.owner.id}) %}*/
/*                                             {% set ownerName = entity.owner.name %}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                     {% if ownerName is defined %}*/
/*                                         {% if ownerPath is defined %}*/
/*                                             <a href="{{ ownerPath }}">{{ ownerName }}</a>*/
/*                                         {% else %}*/
/*                                             {{ ownerName }}*/
/*                                         {% endif %}*/
/*                                     {% endif %}*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                         {% endblock pageActions %}*/
/*                         {% if (entity is defined and audit_entity_class is defined and resource_granted('oro_dataaudit_history')) %}*/
/*                             {% placeholder change_history_block with {'entity': audit_entity_class, 'id': entity.id, 'title': audit_title|default(entity), 'audit_path': audit_path|default('oro_dataaudit_history') } %}*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="span9">*/
/*             {% block pageHeader %}*/
/*                 <div class="customer-info {% if (breadcrumbs.hasAvatar is not defined) %}customer-simple{% endif %} well-small">*/
/*                     {% if breadcrumbs.hasAvatar is defined and breadcrumbs.hasAvatar %}*/
/*                         <div class="visual">*/
/*                             <img src="{{ breadcrumbs.imagePath ? breadcrumbs.imagePath | imagine_filter('avatar_med') : asset('bundles/oroui/img/info-user.png') }}" alt="{{ breadcrumbs.entityTitle }}"/>*/
/*                         </div>*/
/*                     {% endif %}*/
/*                     <div class="customer-content pull-left">*/
/*                         <div class="clearfix">*/
/*                             {% block breadcrumbs %}*/
/*                                 <div class="pull-left">*/
/*                                     {% if breadcrumbs.indexLabel is defined %}*/
/*                                     <div class="sub-title">*/
/*                                     {%- if breadcrumbs.indexPath is defined -%}*/
/*                                         <a href="{{ breadcrumbs.indexPath }}">{{ breadcrumbs.indexLabel|trans }}</a>*/
/*                                     {%- else -%}*/
/*                                         {{ breadcrumbs.indexLabel|trans }}*/
/*                                     {%- endif -%}*/
/*                                     </div>*/
/*                                     <span class="separator">/</span>*/
/*                                     {% endif %}*/
/*                                     {% if breadcrumbs.additional is defined %}*/
/*                                         {% for breadcrumb in breadcrumbs.additional %}*/
/*                                             <div class="sub-title"><a href="{{ breadcrumb.indexPath }}">{{ breadcrumb.indexLabel|trans }}</a></div>*/
/*                                             <span class="separator">/</span>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                     <h1 class="user-name">{{ breadcrumbs.entityTitle }}</h1>*/
/*                                 </div>*/
/*                             {% endblock breadcrumbs %}*/
/*                         </div>*/
/*                         <div class="clearfix">*/
/*                             <ul class="inline">*/
/*                                 {% block stats %}*/
/*                                     <li>{{ 'Created'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                     <li>{{ 'Updated'|trans }}: {{ breadcrumbs.entity.updatedAt ? breadcrumbs.entity.updatedAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                 {% endblock stats %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endblock pageHeader %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="layout-content scrollable-container">*/
/*         {% block content_data %}*/
/*             {{ UI.scrollData(id, data) }}*/
/*         {% endblock content_data %}*/
/*     </div>*/
/* </div>*/
/* {% endblock content %}*/
/* */
