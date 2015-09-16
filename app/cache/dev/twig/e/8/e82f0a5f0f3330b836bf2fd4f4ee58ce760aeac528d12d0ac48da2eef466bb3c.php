<?php

/* PimEnrichBundle:Attribute/Tab:value.html.twig */
class __TwigTemplate_cb6c2524277cc6bbcb9922df3e619907d9f933ea073e96ebc412bc1b8aee4be6 extends Twig_Template
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
    ";
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ( !array_key_exists("elements", $context)) {
            // line 4
            echo "        ";
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Attribute/Tab:value.html.twig", 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 7
        echo "    ";
        $context["accordionContent"] = array("pane.accordion.label_translations" => $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row'));
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "autoOptionSorting", array(), "array", true, true)) {
            // line 9
            echo "        ";
            ob_start();
            // line 10
            echo "            ";
            if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))) {
                // line 11
                echo "                ";
                $context["sortable"] = (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "autoOptionSorting", array(), "array", true, true)) ? ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autoOptionSorting", array(), "array"), "vars", array()), "data", array())) ? ("1") : ("0"))) : ("1"));
                // line 12
                echo "                <div id=\"attribute-option-grid\" data-attribute-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "html", null, true);
                echo "\" data-locales=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales"))), "html", null, true);
                echo "\" data-sortable=\"";
                echo twig_escape_filter($this->env, (isset($context["sortable"]) ? $context["sortable"] : $this->getContext($context, "sortable")), "html", null, true);
                echo "\"></div>

                <script type=\"text/javascript\">
                    require(['jquery', 'pim/attributeoptionview'], function(\$, attributeoptiongrid) {
                        attributeoptiongrid(\$('#attribute-option-grid'));
                    });
                </script>
            ";
            } else {
                // line 20
                echo "                <div class=\"well\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("save_attribute_before_manage_option"), "html", null, true);
                echo "</div>
            ";
            }
            // line 22
            echo "        ";
            $context["optionsContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "        ";
            $context["accordionContent"] = twig_array_merge((isset($context["accordionContent"]) ? $context["accordionContent"] : $this->getContext($context, "accordionContent")), array("pane.accordion.options" => (isset($context["optionsContent"]) ? $context["optionsContent"] : $this->getContext($context, "optionsContent"))));
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $context["elements"]->getaccordion((isset($context["accordionContent"]) ? $context["accordionContent"] : $this->getContext($context, "accordionContent")), 2);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute/Tab:value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  86 => 25,  83 => 24,  80 => 23,  77 => 22,  71 => 20,  55 => 12,  52 => 11,  49 => 10,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% spaceless %}*/
/*     {% if elements is not defined %}*/
/*         {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/*     {% endif %}*/
/*     {% endspaceless %}*/
/*     {% set accordionContent = { 'pane.accordion.label_translations': form_row(form.label) } %}*/
/*     {% if form['autoOptionSorting'] is defined %}*/
/*         {% set optionsContent %}*/
/*             {% if form.vars.value.id is not null %}*/
/*                 {% set sortable = form['autoOptionSorting'] is defined ? (not form['autoOptionSorting'].vars.data ? '1' : '0') : '1' %}*/
/*                 <div id="attribute-option-grid" data-attribute-id="{{ form.vars.value.id }}" data-locales="{{ locales|json_encode() }}" data-sortable="{{ sortable }}"></div>*/
/* */
/*                 <script type="text/javascript">*/
/*                     require(['jquery', 'pim/attributeoptionview'], function($, attributeoptiongrid) {*/
/*                         attributeoptiongrid($('#attribute-option-grid'));*/
/*                     });*/
/*                 </script>*/
/*             {% else %}*/
/*                 <div class="well">{{ 'save_attribute_before_manage_option'|trans }}</div>*/
/*             {% endif %}*/
/*         {% endset %}*/
/*         {% set accordionContent = accordionContent|merge({ 'pane.accordion.options': optionsContent }) %}*/
/*     {% endif %}*/
/* */
/*     {{ elements.accordion(accordionContent, 2) }}*/
/* </div>*/
/* */
