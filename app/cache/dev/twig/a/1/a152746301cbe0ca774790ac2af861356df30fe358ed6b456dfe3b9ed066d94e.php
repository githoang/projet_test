<?php

/* OroEntityConfigBundle:Config:index.html.twig */
class __TwigTemplate_96b2fcc0c2e44bb42474e2bd7c5a52600dce600a719e624e654a2dab019e9648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 2);
        // line 4
        $context["gridName"] = "entityconfig-grid";
        // line 5
        $context["pageTitle"] = "Entities";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")))) {
            // line 9
            echo "        <script type=\"text/javascript\">
            require(";
            // line 10
            echo twig_jsonencode_filter((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")));
            echo ")
        </script>
    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["buttonConfig"]) ? $context["buttonConfig"] : $this->getContext($context, "buttonConfig")));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 19
                echo "            ";
                echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath($this->getAttribute(                // line 20
$context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array()))), "title" => (($this->getAttribute(                // line 21
$context["button"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "title", array()), $this->getAttribute($context["button"], "name", array()))) : ($this->getAttribute($context["button"], "name", array()))), "label" => $this->getAttribute(                // line 22
$context["button"], "name", array()), "aClass" => (($this->getAttribute(                // line 23
$context["button"], "aClass", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "aClass", array()), "")) : (""))));
                // line 24
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  76 => 24,  74 => 23,  73 => 22,  72 => 21,  71 => 20,  69 => 19,  64 => 18,  61 => 17,  58 => 16,  51 => 13,  45 => 10,  42 => 9,  39 => 8,  36 => 7,  32 => 1,  30 => 5,  28 => 4,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:index.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% set gridName = 'entityconfig-grid' %}*/
/* {% set pageTitle = 'Entities' %}*/
/* */
/* {% block content %}*/
/*     {% if require_js|length %}*/
/*         <script type="text/javascript">*/
/*             require({{ require_js|json_encode|raw }})*/
/*         </script>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('oro_entityconfig_manage') %}*/
/*         {% for button in buttonConfig %}*/
/*             {{ UI.addButton({*/
/*                 'path': path(button.route, button.args|default({})),*/
/*                 'title': button.title|default(button.name),*/
/*                 'label': button.name,*/
/*                 'aClass': button.aClass|default('')*/
/*             }) }}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
