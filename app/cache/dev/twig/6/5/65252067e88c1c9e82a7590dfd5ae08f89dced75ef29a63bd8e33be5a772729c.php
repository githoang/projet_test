<?php

/* OroEntityBundle:Entities:detailed.html.twig */
class __TwigTemplate_c631bacf4a321e1bd4d6d1bcffbd94e74d359dbc1297edd133b4a702661a1875 extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:detailed.html.twig", 1);
        // line 2
        $context["Locale"] = $this->loadTemplate("OroLocaleBundle::macros.html.twig", "OroEntityBundle:Entities:detailed.html.twig", 2);
        // line 3
        $context["_tag"] = $this->loadTemplate("OroTagBundle::macros.html.twig", "OroEntityBundle:Entities:detailed.html.twig", 3);
        // line 4
        echo "
";
        // line 10
        echo "
<style>
    .entity-info {min-height: 380px;}
</style>

<div class=\"widget-content entity-info form-horizontal box-content row-fluid\">
    <div class=\"span6\">
        ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["dynamic"]) ? $context["dynamic"] : $this->getContext($context, "dynamic")))) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dynamic"]) ? $context["dynamic"] : $this->getContext($context, "dynamic")));
            foreach ($context['_seq'] as $context["label"] => $context["item"]) {
                // line 19
                echo "                ";
                echo $this->getAttribute($this, "renderRow", array(0 => $this->env->getExtension('translator')->trans($context["label"]), 1 => $context["item"]), "method");
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        }
        // line 22
        echo "    </div>
</div>
";
    }

    // line 6
    public function getrenderRow($__label__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "value" => $__value__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    ";
            $context["macros"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:detailed.html.twig", 7);
            // line 8
            echo "    ";
            echo $context["macros"]->getrenderAttribute((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), (("<p class=\"control-label\">" . ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->env->getExtension('translator')->trans("N/A"))) : ($this->env->getExtension('translator')->trans("N/A")))) . "</p>"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:detailed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 8,  75 => 7,  62 => 6,  56 => 22,  53 => 21,  44 => 19,  39 => 18,  37 => 17,  28 => 10,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'OroUIBundle::macros.html.twig' as macros %}*/
/* {% import 'OroLocaleBundle::macros.html.twig' as Locale %}*/
/* {% import 'OroTagBundle::macros.html.twig' as _tag %}*/
/* */
/* {# TODO: Move this to OroUIBundle::macros.html.twig #}*/
/* {% macro renderRow(label, value) %}*/
/*     {% import 'OroUIBundle::macros.html.twig' as macros %}*/
/*     {{ macros.renderAttribute(label, '<p class="control-label">' ~ value|default('N/A'|trans) ~ '</p>') }}*/
/* {% endmacro %}*/
/* */
/* <style>*/
/*     .entity-info {min-height: 380px;}*/
/* </style>*/
/* */
/* <div class="widget-content entity-info form-horizontal box-content row-fluid">*/
/*     <div class="span6">*/
/*         {% if dynamic|length %}*/
/*             {% for label, item in dynamic %}*/
/*                 {{ _self.renderRow(label|trans, item) }}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
