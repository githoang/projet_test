<?php

/* PimEnrichBundle:AttributeGroup:index.html.twig */
class __TwigTemplate_4a96f1d6dac2d1187a349c790480589fcc6aab1eb4da45f5e2a7d2cab309bcba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:AttributeGroup:index.html.twig", 1);
        $this->blocks = array(
            'head_script_component' => array($this, 'block_head_script_component'),
            'content' => array($this, 'block_content'),
            'groupTab' => array($this, 'block_groupTab'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["currentGroup"] = (((array_key_exists("group", $context) &&  !twig_test_empty((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group"))))) ? ($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array())) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "
    ";
        // line 7
        $context["sortFieldId"] = (((array_key_exists("form", $context) && $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sort_order", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sort_order", array()), "vars", array()), "id", array())) : (null));
        // line 8
        echo "    ";
        $this->loadTemplate("PimEnrichBundle:AttributeGroup:_js-handler.html.twig", "PimEnrichBundle:AttributeGroup:index.html.twig", 8)->display(array_merge($context, array("sortFieldId" => (isset($context["sortFieldId"]) ? $context["sortFieldId"] : $this->getContext($context, "sortFieldId")), "currentGroup" => (isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")))));
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div id=\"group-container\" class=\"row-fluid\">
        <div class=\"sidebar-list\">
            ";
        // line 14
        $context["editGranted"] = $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_edit");
        // line 15
        echo "            ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_sort")) {
            // line 16
            echo "                <form id=\"pim_enrich_attributegroup_sort\" action=\"";
            echo $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_sort");
            echo "\" method=\"POST\">
                    <ul id=\"entities-sortable\">
                        ";
            // line 18
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
            foreach ($context['_seq'] as $context["groupId"] => $context["groupName"]) {
                // line 19
                echo "                            <li class=\"";
                echo ((($context["groupId"] == (isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")))) ? ("active") : (""));
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $context["groupId"], "html", null, true);
                echo "\">
                                <span class=\"handle\">
                                    <i class=\"icon-reorder\"></i>
                                    <input name=\"";
                // line 22
                echo twig_escape_filter($this->env, $context["groupId"], "html", null, true);
                echo "\" type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">
                                </span>
                                ";
                // line 24
                if ((isset($context["editGranted"]) ? $context["editGranted"] : $this->getContext($context, "editGranted"))) {
                    // line 25
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_edit", array("id" => $context["groupId"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</a>
                                ";
                } else {
                    // line 27
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "
                                ";
                }
                // line 29
                echo "                            </li>
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
            unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['groupName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                    </ul>
                </form>
            ";
        } else {
            // line 34
            echo "                <ul>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["groupId"] => $context["groupName"]) {
                // line 36
                echo "                        <li class=\"";
                echo ((($context["groupId"] == (isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")))) ? ("active") : (""));
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $context["groupId"], "html", null, true);
                echo "\">
                            ";
                // line 37
                if ((isset($context["editGranted"]) ? $context["editGranted"] : $this->getContext($context, "editGranted"))) {
                    // line 38
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_edit", array("id" => $context["groupId"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "</a>
                            ";
                } else {
                    // line 40
                    echo "                                ";
                    echo twig_escape_filter($this->env, $context["groupName"], "html", null, true);
                    echo "
                            ";
                }
                // line 42
                echo "                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['groupId'], $context['groupName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </ul>
            ";
        }
        // line 46
        echo "        </div>
        <div id=\"form-tab\">
            ";
        // line 48
        $this->displayBlock('groupTab', $context, $blocks);
        // line 61
        echo "        </div>
    </div>
";
    }

    // line 48
    public function block_groupTab($context, array $blocks = array())
    {
        // line 49
        echo "                <div class=\"sub-title buffer-extra-top buffer-left fullwidth text-center\">
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attribute group.suggest creation"), "html", null, true);
        echo "
                    ";
        // line 51
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_attribute_group_create")) {
            // line 52
            echo "                        <br/>
                        <br/>
                        ";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attribute group.or"), "html", null, true);
            echo "
                        <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("pim_enrich_attributegroup_create");
            echo "\">
                            <span class=\"label link-label large\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("attribute group.create new"), "html", null, true);
            echo "</span>
                        </a>
                    ";
        }
        // line 59
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:AttributeGroup:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 59,  212 => 56,  208 => 55,  204 => 54,  200 => 52,  198 => 51,  194 => 50,  191 => 49,  188 => 48,  182 => 61,  180 => 48,  176 => 46,  172 => 44,  165 => 42,  159 => 40,  151 => 38,  149 => 37,  142 => 36,  138 => 35,  135 => 34,  130 => 31,  115 => 29,  109 => 27,  101 => 25,  99 => 24,  92 => 22,  83 => 19,  66 => 18,  60 => 16,  57 => 15,  55 => 14,  51 => 12,  48 => 11,  43 => 8,  41 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% set currentGroup = group is defined and group is not empty ? group.id : null %}*/
/* */
/* {% block head_script_component %}*/
/*     {{ parent() }}*/
/*     {% set sortFieldId = form is defined and form.sort_order is defined ? form.sort_order.vars.id : null %}*/
/*     {% include 'PimEnrichBundle:AttributeGroup:_js-handler.html.twig' with { sortFieldId: sortFieldId, currentGroup: currentGroup } %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="group-container" class="row-fluid">*/
/*         <div class="sidebar-list">*/
/*             {% set editGranted = resource_granted('pim_enrich_attribute_group_edit') %}*/
/*             {% if resource_granted('pim_enrich_attribute_group_sort') %}*/
/*                 <form id="pim_enrich_attributegroup_sort" action="{{ path('pim_enrich_attributegroup_sort') }}" method="POST">*/
/*                     <ul id="entities-sortable">*/
/*                         {% for groupId, groupName in groups %}*/
/*                             <li class="{{ groupId == currentGroup ? 'active' : '' }}" data-id="{{ groupId }}">*/
/*                                 <span class="handle">*/
/*                                     <i class="icon-reorder"></i>*/
/*                                     <input name="{{ groupId }}" type="hidden" value="{{ loop.index }}">*/
/*                                 </span>*/
/*                                 {% if editGranted %}*/
/*                                     <a href="{{ path('pim_enrich_attributegroup_edit', {'id': groupId}) }}">{{ groupName }}</a>*/
/*                                 {% else %}*/
/*                                     {{ groupName }}*/
/*                                 {% endif %}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </form>*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for groupId, groupName in groups %}*/
/*                         <li class="{{ groupId == currentGroup ? 'active' : '' }}" data-id="{{ groupId }}">*/
/*                             {% if editGranted %}*/
/*                                 <a href="{{ path('pim_enrich_attributegroup_edit', {'id': groupId}) }}">{{ groupName }}</a>*/
/*                             {% else %}*/
/*                                 {{ groupName }}*/
/*                             {% endif %}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div id="form-tab">*/
/*             {% block groupTab %}*/
/*                 <div class="sub-title buffer-extra-top buffer-left fullwidth text-center">*/
/*                     {{ 'attribute group.suggest creation'|trans }}*/
/*                     {% if resource_granted('pim_enrich_attribute_group_create') %}*/
/*                         <br/>*/
/*                         <br/>*/
/*                         {{ 'attribute group.or'|trans }}*/
/*                         <a href="{{ path('pim_enrich_attributegroup_create') }}">*/
/*                             <span class="label link-label large">{{ 'attribute group.create new'|trans }}</span>*/
/*                         </a>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             {% endblock groupTab %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
