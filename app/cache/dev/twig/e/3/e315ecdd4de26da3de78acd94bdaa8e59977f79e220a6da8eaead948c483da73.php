<?php

/* OroNavigationBundle:Menu:shortcuts.html.twig */
class __TwigTemplate_c6fbb6285396beabca554a18ff306387fb631693ed12c1a2e122317b1fc46ec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:shortcuts.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "        <script type=\"text/javascript\">
            require(['jquery', 'oro/navigation/shortcuts/view'],
            function(\$, ShortcutsView) {
                \$(function() {
                    /** @type {oro.navigation.shortcuts.View} */
                    new ShortcutsView({
                        el: '.shortcuts .input',
                        source: ";
            // line 12
            echo twig_jsonencode_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "source", array()));
            echo "
                    });
                });
            });
        </script>
            <div class=\"dropdown header-dropdown-shortcut header-utility-dropdown\">
                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
            // line 18
            echo $this->env->getExtension('translator')->getTranslator()->trans("Shortcuts", array(), "messages");
            echo "\"><i class=\"icon-share-sign\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"nav-header nav-header-title\">";
            // line 20
            echo $this->env->getExtension('translator')->getTranslator()->trans("Shortcuts", array(), "messages");
            echo "</li>
                    <li class=\"dark\">
                        <form>
                            <input type=\"text\" placeholder=\"Enter shortcut action\" class=\"input\">
                            <div class=\"clearfix\">
                                <div class=\"extra-small\">";
            // line 25
            echo $this->env->getExtension('translator')->getTranslator()->trans("Example: Create user, Users list", array(), "messages");
            // line 26
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "details", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("See full list", array(), "messages");
            echo "</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <div class=\"nav-header\">";
            // line 31
            echo $this->env->getExtension('translator')->getTranslator()->trans("Most Used Actions", array(), "messages");
            echo "</div>
                    ";
            // line 32
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            </div>
    ";
        }
    }

    // line 38
    public function block_item($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "isCustomAction", array(), "any", true, true)) {
            // line 40
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:shortcuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  95 => 39,  92 => 38,  83 => 32,  79 => 31,  68 => 26,  66 => 25,  58 => 20,  53 => 18,  44 => 12,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'OroNavigationBundle:Menu:menu.html.twig' %}*/
/* */
/* {% block list %}*/
/*     {% if item.hasChildren and options.depth is not sameas(0) and item.displayChildren %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery', 'oro/navigation/shortcuts/view'],*/
/*             function($, ShortcutsView) {*/
/*                 $(function() {*/
/*                     /** @type {oro.navigation.shortcuts.View} *//**/
/*                     new ShortcutsView({*/
/*                         el: '.shortcuts .input',*/
/*                         source: {{ options.source|json_encode|raw }}*/
/*                     });*/
/*                 });*/
/*             });*/
/*         </script>*/
/*             <div class="dropdown header-dropdown-shortcut header-utility-dropdown">*/
/*                 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" title="{% trans %}Shortcuts{% endtrans %}"><i class="icon-share-sign"></i></a>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li class="nav-header nav-header-title">{% trans %}Shortcuts{% endtrans %}</li>*/
/*                     <li class="dark">*/
/*                         <form>*/
/*                             <input type="text" placeholder="Enter shortcut action" class="input">*/
/*                             <div class="clearfix">*/
/*                                 <div class="extra-small">{% trans %}Example: Create user, Users list{% endtrans %}*/
/*                                     <a href="{{ options.details }}">{% trans %}See full list{% endtrans %}</a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </li>*/
/*                     <div class="nav-header">{% trans %}Most Used Actions{% endtrans %}</div>*/
/*                     {{ block('children') }}*/
/*                 </ul>*/
/*             </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block item %}*/
/*     {% if item.extras.isCustomAction is defined %}*/
/*         {{ block('item_renderer') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
