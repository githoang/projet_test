<?php

/* PimEnrichBundle:Attribute/Tab:parameter.html.twig */
class __TwigTemplate_ff9bb6e25a98ecbe9cc0d7945ea1296df5637422818a8fa2b3bf7c33d2bfa5f9 extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:Attribute/Tab:parameter.html.twig", 4);
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row', array("label" => $this->env->getExtension('translator')->trans("Code")));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributeType", array()), 'row');
        echo "

        ";
        // line 12
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scopable", array(), "any", true, true)) {
            // line 13
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "scopable", array()), 'row', array("label" => $this->env->getExtension('translator')->trans("Scope")));
            echo "
        ";
        }
        // line 15
        echo "
        ";
        // line 16
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "localizable", array(), "any", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "localizable", array()), 'row', array("label" => $this->env->getExtension('translator')->trans("Localizable")));
            echo "
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "unique", array(), "any", true, true)) {
            // line 21
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unique", array()), 'row', array("label" => $this->env->getExtension('translator')->trans("Unique value")));
            echo "
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "availableLocales", array(), "any", true, true)) {
            // line 25
            echo "            <div class=\"control-group\">
                <label class=\"control-label\" for=\"limitLocales\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Locale specific"), "html", null, true);
            echo "</label>
                <div class=\"controls\">
                    <div id=\"limitLocales-switch\" class=\"switch switch-small\" data-on-label=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_on"), "html", null, true);
            echo "\" data-off-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("switch_off"), "html", null, true);
            echo "\">
                        <input type=\"checkbox\" name=\"limitLocales\">
                    </div>
                </div>
            </div>
            ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "availableLocales", array()), 'row');
            echo "
        ";
        }
        // line 35
        echo "    ";
        $context["generalParameters"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    ";
        // line 37
        ob_start();
        // line 38
        echo "        ";
        $context["validationFields"] = array(0 => "dateMin", 1 => "dateMax", 2 => "negativeAllowed", 3 => "decimalsAllowed", 4 => "numberMin", 5 => "numberMax", 6 => "maxCharacters", 7 => "wysiwygEnabled", 8 => "metricFamily", 9 => "defaultMetricUnit", 10 => "maxFileSize", 11 => "allowedExtensions", 12 => "validationRule", 13 => "validationRegexp", 14 => "minimumInputLength", 15 => "defaultValue", 16 => "sortOrder");
        // line 41
        echo "
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "properties", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 43
            echo "            ";
            $context["validationFields"] = twig_array_merge((isset($context["validationFields"]) ? $context["validationFields"] : $this->getContext($context, "validationFields")), array(0 => $context["property"]));
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["validationFields"]) ? $context["validationFields"] : $this->getContext($context, "validationFields")));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 47
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), $context["field"], array(), "array", true, true)) {
                // line 48
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $context["field"], array(), "array"), 'row');
                echo "
            ";
            }
            // line 50
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $context["validationParameters"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
    ";
        // line 53
        ob_start();
        // line 54
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "group", array()), 'row', array("label" => "Attribute group"));
        echo "

        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useableAsGridFilter", array()), 'row');
        echo "
    ";
        $context["backendParameters"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 58
        echo "
    ";
        // line 59
        $context["panes"] = array("pane.accordion.general_parameters" => (isset($context["generalParameters"]) ? $context["generalParameters"] : $this->getContext($context, "generalParameters")));
        // line 60
        echo "    ";
        if ( !twig_test_empty(trim((isset($context["validationParameters"]) ? $context["validationParameters"] : $this->getContext($context, "validationParameters"))))) {
            // line 61
            echo "        ";
            $context["panes"] = twig_array_merge((isset($context["panes"]) ? $context["panes"] : $this->getContext($context, "panes")), array("pane.accordion.validation_parameters" => (isset($context["validationParameters"]) ? $context["validationParameters"] : $this->getContext($context, "validationParameters"))));
            // line 62
            echo "    ";
        }
        // line 63
        echo "    ";
        $context["panes"] = twig_array_merge((isset($context["panes"]) ? $context["panes"] : $this->getContext($context, "panes")), array("pane.accordion.backend_parameters" => (isset($context["backendParameters"]) ? $context["backendParameters"] : $this->getContext($context, "backendParameters"))));
        // line 64
        echo "
    ";
        // line 65
        echo $context["elements"]->getaccordion((isset($context["panes"]) ? $context["panes"] : $this->getContext($context, "panes")));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute/Tab:parameter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 65,  198 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  184 => 59,  181 => 58,  176 => 56,  170 => 54,  168 => 53,  165 => 52,  162 => 51,  156 => 50,  150 => 48,  147 => 47,  143 => 46,  140 => 45,  134 => 44,  131 => 43,  127 => 42,  124 => 41,  121 => 38,  119 => 37,  116 => 36,  113 => 35,  108 => 33,  98 => 28,  93 => 26,  90 => 25,  88 => 24,  85 => 23,  79 => 21,  77 => 20,  74 => 19,  68 => 17,  66 => 16,  63 => 15,  57 => 13,  55 => 12,  50 => 10,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% spaceless %}*/
/*     {% if elements is not defined %}*/
/*         {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/*     {% endif %}*/
/*     {% endspaceless %}*/
/* */
/*     {% set generalParameters %}*/
/*         {{ form_row(form.code, { 'label': 'Code'|trans }) }}*/
/*         {{ form_row(form.attributeType) }}*/
/* */
/*         {% if form.scopable is defined %}*/
/*             {{ form_row(form.scopable, { 'label': 'Scope'|trans }) }}*/
/*         {% endif %}*/
/* */
/*         {% if form.localizable is defined %}*/
/*             {{ form_row(form.localizable, { 'label': 'Localizable'|trans }) }}*/
/*         {% endif %}*/
/* */
/*         {% if form.unique is defined %}*/
/*             {{ form_row(form.unique, { 'label': 'Unique value'|trans }) }}*/
/*         {% endif %}*/
/* */
/*         {% if form.availableLocales is defined %}*/
/*             <div class="control-group">*/
/*                 <label class="control-label" for="limitLocales">{{ 'Locale specific'|trans }}</label>*/
/*                 <div class="controls">*/
/*                     <div id="limitLocales-switch" class="switch switch-small" data-on-label="{{ 'switch_on'|trans }}" data-off-label="{{ 'switch_off'|trans }}">*/
/*                         <input type="checkbox" name="limitLocales">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {{ form_row(form.availableLocales) }}*/
/*         {% endif %}*/
/*     {% endset %}*/
/* */
/*     {% set validationParameters %}*/
/*         {% set validationFields = ['dateMin', 'dateMax', 'negativeAllowed', 'decimalsAllowed', 'numberMin',*/
/*         'numberMax', 'maxCharacters', 'wysiwygEnabled', 'metricFamily', 'defaultMetricUnit', 'maxFileSize',*/
/*         'allowedExtensions', 'validationRule', 'validationRegexp', 'minimumInputLength', 'defaultValue', 'sortOrder'] %}*/
/* */
/*         {% for property in form.vars.value.properties|keys %}*/
/*             {% set validationFields = validationFields|merge([property]) %}*/
/*         {% endfor %}*/
/* */
/*         {% for field in validationFields %}*/
/*             {% if form[field] is defined %}*/
/*                 {{ form_row(form[field]) }}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     {% endset %}*/
/* */
/*     {% set backendParameters %}*/
/*         {{ form_row(form.group, { 'label': 'Attribute group' }) }}*/
/* */
/*         {{ form_row(form.useableAsGridFilter) }}*/
/*     {% endset %}*/
/* */
/*     {% set panes = {'pane.accordion.general_parameters': generalParameters} %}*/
/*     {% if validationParameters|trim is not empty %}*/
/*         {% set panes = panes|merge({'pane.accordion.validation_parameters': validationParameters}) %}*/
/*     {% endif %}*/
/*     {% set panes = panes|merge({'pane.accordion.backend_parameters': backendParameters}) %}*/
/* */
/*     {{ elements.accordion(panes) }}*/
/* </div>*/
/* */
