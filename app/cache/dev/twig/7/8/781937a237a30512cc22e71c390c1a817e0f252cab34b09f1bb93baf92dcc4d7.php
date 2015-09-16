<?php

/* OroUIBundle:actions:update.html.twig */
class __TwigTemplate_4c62eed64641e3f3876b06ab4ce348932b2f8dbc0336b146acbd87bc319837db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroUIBundle:actions:update.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:update.html.twig", 2);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_container($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "        <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"post\" data-collect=\"true\" class=\"scrollable-substructure\">
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-right\">
                        <div class=\"pull-right\">
                            ";
        // line 13
        echo "                            ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 14
        echo "                            ";
        // line 15
        echo "
                            <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"pull-right user-info-state\">
                            <ul class=\"inline-decorate\">
                            ";
        // line 20
        $context["audit_entity_id"] = ((((array_key_exists("audit_entity_id", $context)) ? (_twig_default_filter((isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id")))) : (""))) ? ((isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id"))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array()))) : (""))));
        // line 21
        echo "
                            ";
        // line 22
        if (((array_key_exists("audit_entity_class", $context) && (isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id"))) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dataaudit_history"))) {
            // line 23
            echo "                                ";
            $this->loadTemplate("OroDataAuditBundle::change_history_link.html.twig", "OroUIBundle:actions:update.html.twig", 23)->display(array_merge($context, array("entity" => (isset($context["audit_entity_class"]) ? $context["audit_entity_class"] : $this->getContext($context, "audit_entity_class")), "id" => (isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id")), "title" => ((array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) ? $context["audit_title"] : $this->getContext($context, "audit_title")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()))) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()))), "audit_path" => ((array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) ? $context["audit_path"] : $this->getContext($context, "audit_path")), "oro_dataaudit_history")) : ("oro_dataaudit_history")))));
            // line 24
            echo "                            ";
        }
        // line 25
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"span9\">
                        ";
        // line 29
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 65
        echo "                    </div>
                </div>
            </div>
            <div class=\"layout-content\">
                ";
        // line 69
        $this->displayBlock('content_data', $context, $blocks);
        // line 73
        echo "            </div>
        </form>
        ";
        // line 75
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
    }

    // line 13
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 29
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 30
        echo "                            <div class=\"clearfix customer-info ";
        if ( !$this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true)) {
            echo "customer-simple";
        }
        echo " well-small\">
                                ";
        // line 31
        if (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true) && $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "hasAvatar", array()))) {
            // line 32
            echo "                                    <div class=\"visual\">
                                        <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
            echo "\"/>
                                    </div>
                                ";
        }
        // line 36
        echo "                                <div class=\"customer-content pull-left\">
                                    <div class=\"clearfix\">
                                        ";
        // line 38
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 51
        echo "                                    </div>
                                    <div class=\"clearfix\">
                                        <ul class=\"inline\">
                                            ";
        // line 54
        $this->displayBlock('stats', $context, $blocks);
        // line 60
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
    }

    // line 38
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 39
        echo "                                            <div class=\"pull-left\">
                                                <div class=\"sub-title\"><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexPath", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexLabel", array())), "html", null, true);
        echo "</a></div>
                                                <span class=\"separator\">/</span>
                                                ";
        // line 42
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array(), "any", true, true)) {
            // line 43
            echo "                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "additional", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 44
                echo "                                                    <div class=\"sub-title\"><a href=\"";
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
            // line 47
            echo "                                                ";
        }
        // line 48
        echo "                                                <h1 class=\"user-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
        echo "</h1>
                                            </div>
                                        ";
    }

    // line 54
    public function block_stats($context, array $blocks = array())
    {
        // line 55
        echo "                                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "createdAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "updatedAt", array(), "any", true, true))) {
            // line 56
            echo "                                                    <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array()))) : ("N/A"));
            echo "</li>
                                                    <li>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array()))) : ("N/A"));
            echo "</li>
                                                ";
        }
        // line 59
        echo "                                            ";
    }

    // line 69
    public function block_content_data($context, array $blocks = array())
    {
        // line 70
        echo "                    ";
        $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        // line 71
        echo "                    ";
        echo $context["UI"]->getscrollData((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 71,  233 => 70,  230 => 69,  226 => 59,  219 => 57,  212 => 56,  209 => 55,  206 => 54,  198 => 48,  195 => 47,  183 => 44,  178 => 43,  176 => 42,  169 => 40,  166 => 39,  163 => 38,  155 => 60,  153 => 54,  148 => 51,  146 => 38,  142 => 36,  134 => 33,  131 => 32,  129 => 31,  122 => 30,  119 => 29,  114 => 13,  108 => 75,  104 => 73,  102 => 69,  96 => 65,  94 => 29,  88 => 25,  85 => 24,  82 => 23,  80 => 22,  77 => 21,  75 => 20,  68 => 16,  65 => 15,  63 => 14,  60 => 13,  46 => 6,  39 => 5,  36 => 4,  32 => 1,  30 => 2,  24 => 1,);
    }
}
/* {% extends bap.layout%}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% block page_container %}*/
/*     {% block content %}*/
/*         <form id="{{ form.vars.name }}" action="{{ formAction }}" {{ form_enctype(form) }}*/
/*               method="post" data-collect="true" class="scrollable-substructure">*/
/*             <div class="navigation clearfix navbar-extra navbar-extra-right">*/
/*                 <div class="row">*/
/*                     <div class="pull-right">*/
/*                         <div class="pull-right">*/
/*                             {% placeholder update_navButtons_before with {entity: entity} %}*/
/*                             {% block navButtons %}{% endblock navButtons %}*/
/*                             {% placeholder update_navButtons_after with {entity: entity} %}*/
/* */
/*                             <input type="hidden" name="input_action" value="" data-form-id="{{ form.vars.name }}"/>*/
/*                         </div>*/
/*                         <div class="pull-right user-info-state">*/
/*                             <ul class="inline-decorate">*/
/*                             {% set audit_entity_id = audit_entity_id|default ? audit_entity_id : form.vars.value.id|default %}*/
/* */
/*                             {% if (audit_entity_class is defined and audit_entity_id and resource_granted('oro_dataaudit_history')) %}*/
/*                                 {% placeholder change_history_block with {'entity': audit_entity_class, 'id': audit_entity_id, 'title': audit_title|default(form.vars.value), 'audit_path': audit_path|default('oro_dataaudit_history') } %}*/
/*                             {% endif %}*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="span9">*/
/*                         {% block pageHeader %}*/
/*                             <div class="clearfix customer-info {% if (breadcrumbs.hasAvatar is not defined) %}customer-simple{% endif %} well-small">*/
/*                                 {% if (breadcrumbs.hasAvatar is defined and breadcrumbs.hasAvatar) %}*/
/*                                     <div class="visual">*/
/*                                         <img src="{{ breadcrumbs.imagePath ? breadcrumbs.imagePath | imagine_filter('avatar_med') : asset('bundles/oroui/img/info-user.png') }}" alt="{{ breadcrumbs.entityTitle }}"/>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                                 <div class="customer-content pull-left">*/
/*                                     <div class="clearfix">*/
/*                                         {% block breadcrumbs %}*/
/*                                             <div class="pull-left">*/
/*                                                 <div class="sub-title"><a href="{{ breadcrumbs.indexPath }}">{{ breadcrumbs.indexLabel|trans }}</a></div>*/
/*                                                 <span class="separator">/</span>*/
/*                                                 {% if breadcrumbs.additional is defined %}*/
/*                                                     {% for breadcrumb in breadcrumbs.additional %}*/
/*                                                     <div class="sub-title"><a href="{{ breadcrumb.indexPath }}">{{ breadcrumb.indexLabel|trans }}</a></div>*/
/*                                                     <span class="separator">/</span>*/
/*                                                     {% endfor %}*/
/*                                                 {% endif %}*/
/*                                                 <h1 class="user-name">{{ breadcrumbs.entityTitle }}</h1>*/
/*                                             </div>*/
/*                                         {% endblock breadcrumbs %}*/
/*                                     </div>*/
/*                                     <div class="clearfix">*/
/*                                         <ul class="inline">*/
/*                                             {% block stats %}*/
/*                                                 {% if breadcrumbs.entity.createdAt is defined and breadcrumbs.entity.updatedAt is defined %}*/
/*                                                     <li>{{ 'Created'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                                     <li>{{ 'Updated'|trans }}: {{ breadcrumbs.entity.updatedAt ? breadcrumbs.entity.updatedAt|oro_format_datetime : 'N/A' }}</li>*/
/*                                                 {% endif %}*/
/*                                             {% endblock stats %}*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endblock pageHeader %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="layout-content">*/
/*                 {% block content_data %}*/
/*                     {% set data = oro_form_process(data, form) %}*/
/*                     {{ UI.scrollData(id, data, form) }}*/
/*                 {% endblock content_data %}*/
/*             </div>*/
/*         </form>*/
/*         {{ oro_form_js_validation(form) }}*/
/*     {% endblock content %}*/
/* {% endblock %}*/
/* */
