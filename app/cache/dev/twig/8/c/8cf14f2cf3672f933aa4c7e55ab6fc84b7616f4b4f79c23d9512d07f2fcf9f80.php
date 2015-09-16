<?php

/* PimEnrichBundle:Product/Tab:category.html.twig */
class __TwigTemplate_f2942f850057e461cdff7a4f8b6fec1089f4f9d40e623a453d69041b6941c1ca extends Twig_Template
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
        echo "<div class=\"tab-pane ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
   <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/tree/associate'],
            function (\$, TreeAssociate) {
                'use strict';
                \$(function () {
                    new TreeAssociate('#trees', '#";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
                });
            }
        );
    </script>

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'widget', array("attr" => array("class" => "hide")));
        echo "

    <div id=\"trees-list\" class=\"tab-groups\">
        <ul class=\"nav nav-list\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 19
            echo "                ";
            $context["aClass"] = "";
            // line 20
            echo "                ";
            $context["iClass"] = "gray";
            // line 21
            echo "                ";
            if (($this->getAttribute($context["tree"], "productCount", array(), "array") > 0)) {
                // line 22
                echo "                    ";
                $context["aClass"] = "tree-has-product";
                // line 23
                echo "                    ";
                $context["iClass"] = "green";
                // line 24
                echo "                ";
            }
            // line 25
            echo "                <li>
                    <a class=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["aClass"]) ? $context["aClass"] : $this->getContext($context, "aClass")), "html", null, true);
            echo "\" href=\"javascript:void(0);\" data-toggle=\"tab\" id=\"tree-link-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "id", array()), "html", null, true);
            echo "\">
                        <i class=\"icon-ok ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["iClass"]) ? $context["iClass"] : $this->getContext($context, "iClass")), "html", null, true);
            echo "\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "label", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "productCount", array(), "array"), "html", null, true);
            echo ")
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </div>

    <div class=\"tab-content fullheight\">
        ";
        // line 35
        $context["selectedTree"] = 0;
        // line 36
        echo "        ";
        if ((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees"))) {
            // line 37
            echo "            ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "defaultTree", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "defaultTree", array(), "any", false, true), "code", array(), "any", true, true))) {
                // line 38
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
                foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
                    // line 39
                    echo "                    ";
                    if (($this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "code", array()) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "defaultTree", array()), "code", array()))) {
                        // line 40
                        echo "                        ";
                        $context["selectedTree"] = $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "id", array());
                        // line 41
                        echo "                    ";
                    }
                    // line 42
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            ";
            } else {
                // line 44
                echo "                ";
                $context["firstTree"] = twig_first($this->env, (isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
                // line 45
                echo "                ";
                $context["selectedTree"] = $this->getAttribute($this->getAttribute((isset($context["firstTree"]) ? $context["firstTree"] : $this->getContext($context, "firstTree")), "tree", array(), "array"), "id", array());
                // line 46
                echo "            ";
            }
            // line 47
            echo "        ";
        }
        // line 48
        echo "        <div id=\"trees\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
        echo "\" data-datalocale=\"";
        echo twig_escape_filter($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "html", null, true);
        echo "\" data-selected-tree=\"";
        echo twig_escape_filter($this->env, (isset($context["selectedTree"]) ? $context["selectedTree"] : $this->getContext($context, "selectedTree")), "html", null, true);
        echo "\">
            ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trees"]) ? $context["trees"] : $this->getContext($context, "trees")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 50
            echo "                <div class=\"tree root-unselectable\" data-tree-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "id", array()), "html", null, true);
            echo "\">
                    <h3>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "label", array()), "html", null, true);
            echo "</h3>
                    <div id=\"tree-";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["tree"], "tree", array(), "array"), "id", array()), "html", null, true);
            echo "\" class=\"buffer-small-left\"></div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>

</div>
";
        // line 59
        $context["activeTab"] = true;
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product/Tab:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  173 => 55,  164 => 52,  160 => 51,  155 => 50,  151 => 49,  142 => 48,  139 => 47,  136 => 46,  133 => 45,  130 => 44,  127 => 43,  121 => 42,  118 => 41,  115 => 40,  112 => 39,  107 => 38,  104 => 37,  101 => 36,  99 => 35,  93 => 31,  79 => 27,  73 => 26,  70 => 25,  67 => 24,  64 => 23,  61 => 22,  58 => 21,  55 => 20,  52 => 19,  48 => 18,  41 => 14,  32 => 8,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*    <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/tree/associate'],*/
/*             function ($, TreeAssociate) {*/
/*                 'use strict';*/
/*                 $(function () {*/
/*                     new TreeAssociate('#trees', '#{{ form.categories.vars.id }}');*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* */
/*     {{ form_widget(form.categories, { attr: { 'class': 'hide' } }) }}*/
/* */
/*     <div id="trees-list" class="tab-groups">*/
/*         <ul class="nav nav-list">*/
/*             {% for tree in trees %}*/
/*                 {% set aClass = "" %}*/
/*                 {% set iClass = "gray" %}*/
/*                 {% if (tree['productCount'] > 0) %}*/
/*                     {% set aClass = "tree-has-product" %}*/
/*                     {% set iClass = "green" %}*/
/*                 {% endif %}*/
/*                 <li>*/
/*                     <a class="{{ aClass }}" href="javascript:void(0);" data-toggle="tab" id="tree-link-{{ tree['tree'].id }}">*/
/*                         <i class="icon-ok {{ iClass }}"></i>{{ tree['tree'].label }} ({{ tree['productCount'] }})*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div class="tab-content fullheight">*/
/*         {% set selectedTree = 0 %}*/
/*         {% if trees %}*/
/*             {% if app.user.defaultTree is defined and app.user.defaultTree.code is defined %}*/
/*                 {% for tree in trees %}*/
/*                     {% if tree['tree'].code == app.user.defaultTree.code %}*/
/*                         {% set selectedTree = tree['tree'].id %}*/
/*                     {% endif %}*/
/*                 {% endfor %}*/
/*             {% else %}*/
/*                 {% set firstTree = trees|first %}*/
/*                 {% set selectedTree = firstTree['tree'].id %}*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         <div id="trees" data-id="{{ product.id }}" data-datalocale="{{ dataLocale }}" data-selected-tree="{{ selectedTree }}">*/
/*             {% for tree in trees %}*/
/*                 <div class="tree root-unselectable" data-tree-id="{{ tree['tree'].id }}">*/
/*                     <h3>{{ tree['tree'].label }}</h3>*/
/*                     <div id="tree-{{ tree['tree'].id }}" class="buffer-small-left"></div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* {% set activeTab = true %}*/
/* */
