<?php

/* PimEnrichBundle:MassEditAction/configure:classify.html.twig */
class __TwigTemplate_bd2e186440b9e64031e51157801fb9905e61a97e2733ad2a5b612fae52940507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:configure/layout.html.twig", "PimEnrichBundle:MassEditAction/configure:classify.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'formContent' => array($this, 'block_formContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:configure/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        require(
            ['jquery', 'underscore', 'pim/tree/associate'],
            function(\$, _, TreeAssociate){
                'use strict';
                \$(function() {
                    new TreeAssociate('#trees', '#";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "categories", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
                    var \$nextBtn = \$('a.next');
                    \$nextBtn.hide();
                    \$('#";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "categories", array()), "vars", array()), "id", array()), "html", null, true);
        echo "').on('change', function() {
                        if (\$(this).val()) {
                            \$nextBtn.show();
                        } else {
                            \$nextBtn.hide();
                        }
                    });
                });
            }
        );
    </script>
";
    }

    // line 28
    public function block_formContent($context, array $blocks = array())
    {
        // line 29
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "categories", array()), 'widget');
        echo "

    ";
        // line 32
        $context["trees"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "operation", array()), "trees", array());
        // line 33
        echo "
    <div class=\"classify\">
        <div class=\"tab-pane\">
            <div id=\"trees-list\" class=\"tab-groups\">
                <ul class=\"nav nav-list\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 39
            echo "                        ";
            $context["aClass"] = "";
            // line 40
            echo "                        ";
            $context["iClass"] = "gray";
            // line 41
            echo "                        <li>
                            <a class=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["aClass"]) ? $context["aClass"] : $this->getContext($context, "aClass")), "html", null, true);
            echo "\" href=\"javascript:void(0);\" id=\"tree-link-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo "\">
                                <i class=\"icon-ok ";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["iClass"]) ? $context["iClass"] : $this->getContext($context, "iClass")), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "label", array()), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </ul>
            </div>

            <div class=\"tab-content\">
                ";
        // line 51
        $context["selectedTree"] = 0;
        // line 52
        echo "                ";
        if ((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees"))) {
            // line 53
            echo "                    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "defaulttree", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "defaultTree", array(), "any", false, true), "code", array(), "any", true, true))) {
                // line 54
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
                    // line 55
                    echo "                            ";
                    if (($this->getAttribute($context["loop"], "first", array()) || ($this->getAttribute($context["tree"], "code", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "defaulttree", array()), "code", array())))) {
                        // line 56
                        echo "                                ";
                        $context["selectedTree"] = $this->getAttribute($context["tree"], "id", array());
                        // line 57
                        echo "                            ";
                    }
                    // line 58
                    echo "                        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                ";
        }
        // line 61
        echo "                <div id=\"trees\" data-selected-tree=\"";
        echo twig_escape_filter($this->env, (isset($context["selectedTree"]) ? $context["selectedTree"] : $this->getContext($context, "selectedTree")), "html", null, true);
        echo "\">
                    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 63
            echo "                        <div class=\"tree root-unselectable\" data-tree-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo "\">
                            <h3>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "label", array()), "html", null, true);
            echo "</h3>
                            <div id=\"tree-";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo "\"></div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction/configure:classify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 68,  196 => 65,  192 => 64,  187 => 63,  183 => 62,  178 => 61,  175 => 60,  172 => 59,  158 => 58,  155 => 57,  152 => 56,  149 => 55,  131 => 54,  128 => 53,  125 => 52,  123 => 51,  117 => 47,  105 => 43,  99 => 42,  96 => 41,  93 => 40,  90 => 39,  86 => 38,  79 => 33,  77 => 32,  72 => 30,  69 => 29,  66 => 28,  50 => 15,  44 => 12,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:configure/layout.html.twig' %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'underscore', 'pim/tree/associate'],*/
/*             function($, _, TreeAssociate){*/
/*                 'use strict';*/
/*                 $(function() {*/
/*                     new TreeAssociate('#trees', '#{{ form.operation.categories.vars.id }}');*/
/*                     var $nextBtn = $('a.next');*/
/*                     $nextBtn.hide();*/
/*                     $('#{{ form.operation.categories.vars.id }}').on('change', function() {*/
/*                         if ($(this).val()) {*/
/*                             $nextBtn.show();*/
/*                         } else {*/
/*                             $nextBtn.hide();*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block formContent %}*/
/* */
/*     {{ form_widget(form.operation.categories) }}*/
/* */
/*     {% set trees = form.vars.value.operation.trees %}*/
/* */
/*     <div class="classify">*/
/*         <div class="tab-pane">*/
/*             <div id="trees-list" class="tab-groups">*/
/*                 <ul class="nav nav-list">*/
/*                     {% for tree in trees %}*/
/*                         {% set aClass = "" %}*/
/*                         {% set iClass = "gray" %}*/
/*                         <li>*/
/*                             <a class="{{ aClass }}" href="javascript:void(0);" id="tree-link-{{ tree.id }}">*/
/*                                 <i class="icon-ok {{ iClass }}"></i>{{ tree.label }}*/
/*                             </a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="tab-content">*/
/*                 {% set selectedTree = 0 %}*/
/*                 {% if trees %}*/
/*                     {% if app.user.defaulttree is defined and app.user.defaultTree.code is defined %}*/
/*                         {% for tree in trees %}*/
/*                             {% if loop.first or tree.code == app.user.defaulttree.code %}*/
/*                                 {% set selectedTree = tree.id %}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*                 <div id="trees" data-selected-tree="{{ selectedTree }}">*/
/*                     {% for tree in trees %}*/
/*                         <div class="tree root-unselectable" data-tree-id="{{ tree.id }}">*/
/*                             <h3>{{ tree.label }}</h3>*/
/*                             <div id="tree-{{ tree.id }}"></div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
