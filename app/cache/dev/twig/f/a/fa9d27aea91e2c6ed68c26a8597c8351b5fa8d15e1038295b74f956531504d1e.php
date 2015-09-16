<?php

/* OroSecurityBundle:Form:fields.html.twig */
class __TwigTemplate_d1e67dfdf17cdc1a88f2cde0f33b222debd32b3748003b7a24a5801408453a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_acl_access_level_selector_widget' => array($this, 'block_oro_acl_access_level_selector_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'oro_acl_object_name_widget' => array($this, 'block_oro_acl_object_name_widget'),
            'oro_acl_collection_widget' => array($this, 'block_oro_acl_collection_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"access_level_value\"
         data-identity=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["identity"]) ? $context["identity"] : $this->getContext($context, "identity")), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"
         data-value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"
    >
        <div class=\"access_level_value_link\">
            <a href=\"javascript:void(0);\">
                ";
        // line 10
        if ((isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label"))) {
            // line 11
            echo "                    ";
            $context["label"] = ("oro.security.access-level." . (isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label")));
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                ";
        } else {
            // line 14
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.security.access-level.NONE", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                ";
        }
        // line 16
        echo "            </a>
            ";
        // line 17
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 18
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
        <div class=\"access_level_value_choice\" style=\"display: none\"></div>
    </div>
";
    }

    // line 24
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "</strong>
";
    }

    // line 28
    public function block_oro_acl_object_name_widget($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oid", array()), 'widget');
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
";
    }

    // line 33
    public function block_oro_acl_collection_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        if (($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "view_type", array()) == "grid")) {
            // line 35
            echo "        <table class=\"table table-striped acl-table\">
            <tbody>
            <tr>
                <th>
                    &nbsp;
                </th>
                ";
            // line 41
            $context["width"] = twig_number_format_filter($this->env, ((100 / (twig_length_filter($this->env, $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array")) + 1)) - 1), 0);
            // line 42
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 43
                echo "                    <th width=\"";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
                echo "%\">
                        ";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["field"]), "html", null, true);
                echo "
                    </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </tr>
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 49
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 54
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 55
                echo "            <div class=\"security-row\">
                ";
                // line 56
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "    ";
        }
    }

    // line 62
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 63
        echo "     ";
        ob_start();
        // line 64
        echo "         <tr ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
             <td>
                 ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity", array()), 'widget');
        echo "
             </td>
             ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions", array()), 'widget');
        echo "
         </tr>
     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accessLevel", array()), 'widget');
        echo "
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
";
    }

    // line 78
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 80
            echo "        <td>
            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 82
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                    // line 83
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                    echo "
                ";
                }
                // line 85
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            &nbsp;
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 86,  284 => 85,  278 => 83,  275 => 82,  271 => 81,  268 => 80,  263 => 79,  260 => 78,  254 => 75,  249 => 74,  246 => 73,  238 => 68,  233 => 66,  225 => 64,  222 => 63,  219 => 62,  214 => 59,  205 => 56,  202 => 55,  197 => 54,  192 => 51,  183 => 49,  179 => 48,  176 => 47,  167 => 44,  162 => 43,  157 => 42,  155 => 41,  147 => 35,  144 => 34,  141 => 33,  135 => 30,  130 => 29,  127 => 28,  120 => 25,  117 => 24,  107 => 18,  105 => 17,  102 => 16,  96 => 14,  90 => 12,  87 => 11,  85 => 10,  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  60 => 1,  56 => 78,  53 => 77,  51 => 73,  48 => 72,  46 => 62,  43 => 61,  41 => 33,  38 => 32,  36 => 28,  33 => 27,  31 => 24,  28 => 23,  26 => 1,);
    }
}
/* {% block oro_acl_access_level_selector_widget %}*/
/*     <div class="access_level_value"*/
/*          data-identity="{{ identity }}"*/
/*          data-selector-id="{{ id }}"*/
/*          data-selector-name="{{ full_name }}"*/
/*          data-value="{{ value }}"*/
/*     >*/
/*         <div class="access_level_value_link">*/
/*             <a href="javascript:void(0);">*/
/*                 {% if level_label %}*/
/*                     {% set label = 'oro.security.access-level.' ~ level_label %}*/
/*                     {{ label|trans({}, translation_domain) }}*/
/*                 {% else %}*/
/*                     {{ 'oro.security.access-level.NONE'|trans({}, translation_domain) }}*/
/*                 {% endif %}*/
/*             </a>*/
/*             {% set type = type|default('hidden') %}*/
/*             {{ block('form_widget_simple') }}*/
/*         </div>*/
/*         <div class="access_level_value_choice" style="display: none"></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_label_widget %}*/
/*     <strong>{{ value|trans }}</strong>*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_object_name_widget %}*/
/*     {{ form_widget(form.oid) }}*/
/*     {{ form_widget(form.name) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_collection_widget %}*/
/*     {% if privileges_config.view_type == 'grid' %}*/
/*         <table class="table table-striped acl-table">*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>*/
/*                     &nbsp;*/
/*                 </th>*/
/*                 {% set width = ((100/(privileges_config['permissions']|length + 1))-1)|number_format(0) %}*/
/*                 {% for field in privileges_config['permissions'] %}*/
/*                     <th width="{{ width }}%">*/
/*                         {{ field|trans }}*/
/*                     </th>*/
/*                 {% endfor %}*/
/*             </tr>*/
/*             {% for child in form %}*/
/*                 {{ form_widget(child) }}*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% else %}*/
/*         {% for child in form %}*/
/*             <div class="security-row">*/
/*                 {{ form_widget(child) }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_privilege_widget %}*/
/*      {% spaceless %}*/
/*          <tr {% if form.vars.value.identity.name == "(default)" %}class="default-field"{% endif %}>*/
/*              <td>*/
/*                  {{ form_widget(form.identity) }}*/
/*              </td>*/
/*              {{ form_widget(form.permissions) }}*/
/*          </tr>*/
/*      {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_widget %}*/
/*     {{ form_widget(form.accessLevel) }}*/
/*     {{ form_widget(form.name) }}*/
/* {% endblock %}*/
/* */
/* {% block oro_acl_permission_collection_widget %}*/
/*     {% for field in privileges_config['permissions'] %}*/
/*         <td>*/
/*             {% for permission in form %}*/
/*                 {% if permission.vars.value.name == field %}*/
/*                     {{ form_widget(permission) }}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             &nbsp;*/
/*         </td>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
