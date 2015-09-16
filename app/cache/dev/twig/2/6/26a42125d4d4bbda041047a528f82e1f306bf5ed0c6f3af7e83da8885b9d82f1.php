<?php

/* OroFilterBundle:Filter:layout.js.twig */
class __TwigTemplate_89b93569e04993d1abe6a85154ed70ec3e3cfbfcffc9b74e33bf5f2d1f8aaebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_type_text_filter_js' => array($this, 'block_oro_type_text_filter_js'),
            'oro_type_number_filter_js' => array($this, 'block_oro_type_number_filter_js'),
            'oro_type_date_range_filter_js' => array($this, 'block_oro_type_date_range_filter_js'),
            'oro_type_datetime_range_filter_js' => array($this, 'block_oro_type_datetime_range_filter_js'),
            'oro_type_select_filter_js' => array($this, 'block_oro_type_select_filter_js'),
            'oro_type_selectrow_filter_js' => array($this, 'block_oro_type_selectrow_filter_js'),
            'oro_type_multiselect_filter_js' => array($this, 'block_oro_type_multiselect_filter_js'),
            'oro_type_choice_filter_js' => array($this, 'block_oro_type_choice_filter_js'),
            'oro_type_entity_filter_js' => array($this, 'block_oro_type_entity_filter_js'),
            'oro_type_boolean_filter_js' => array($this, 'block_oro_type_boolean_filter_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_type_text_filter_js', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('oro_type_number_filter_js', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('oro_type_date_range_filter_js', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('oro_type_datetime_range_filter_js', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('oro_type_select_filter_js', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('oro_type_selectrow_filter_js', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('oro_type_multiselect_filter_js', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('oro_type_choice_filter_js', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('oro_type_entity_filter_js', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('oro_type_boolean_filter_js', $context, $blocks);
    }

    // line 1
    public function block_oro_type_text_filter_js($context, array $blocks = array())
    {
        // line 2
        echo "    new (ChoiceFilter.extend({
        'name':    ";
        // line 3
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 4
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 5
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 6
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "type", array()), "vars", array()), "choices", array())));
        echo "
    }))
";
    }

    // line 10
    public function block_oro_type_number_filter_js($context, array $blocks = array())
    {
        // line 11
        echo "    new (NumberFilter.extend({
        'name':    ";
        // line 12
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 13
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 14
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 15
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "type", array()), "vars", array()), "choices", array())));
        echo ",
        'formatterOptions': ";
        // line 16
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "formatter_options", array()));
        echo "
    }))
";
    }

    // line 20
    public function block_oro_type_date_range_filter_js($context, array $blocks = array())
    {
        // line 21
        echo "    new (DateFilter.extend({
        'name':    ";
        // line 22
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 23
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 24
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 25
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "type", array()), "vars", array()), "choices", array())));
        echo ",
        'typeValues': ";
        // line 26
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "type_values", array()));
        echo "
    }))
";
    }

    // line 30
    public function block_oro_type_datetime_range_filter_js($context, array $blocks = array())
    {
        // line 31
        echo "    new (DatetimeFilter.extend({
        'name':    ";
        // line 32
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 33
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 34
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 35
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "type", array()), "vars", array()), "choices", array())));
        echo ",
        'typeValues': ";
        // line 36
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "type_values", array()));
        echo "
    }))
";
    }

    // line 40
    public function block_oro_type_select_filter_js($context, array $blocks = array())
    {
        // line 41
        echo "    new (SelectFilter.extend({
        'name':             ";
        // line 42
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':            ";
        // line 43
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled':          ";
        // line 44
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'populateDefault':  ";
        // line 45
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "populate_default", array()));
        echo ",
        'choices':          ";
        // line 46
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "value", array()), "vars", array()), "choices", array())));
        echo "
    }))
";
    }

    // line 50
    public function block_oro_type_selectrow_filter_js($context, array $blocks = array())
    {
        // line 51
        echo "    new (SelectRowFilter.extend({
        'name':    ";
        // line 52
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 53
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 54
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 55
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "value", array()), "vars", array()), "choices", array())));
        echo "
    }))
";
    }

    // line 59
    public function block_oro_type_multiselect_filter_js($context, array $blocks = array())
    {
        // line 60
        echo "    new (MultiselectFilter.extend({
        'name':    ";
        // line 61
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 62
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 63
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 64
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "value", array()), "vars", array()), "choices", array())));
        echo "
    }))
";
    }

    // line 68
    public function block_oro_type_choice_filter_js($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "value", array()), "vars", array()), "multiple", array())) {
            // line 70
            echo "        ";
            $this->displayBlock("oro_type_multiselect_filter_js", $context, $blocks);
            echo "
    ";
        } else {
            // line 72
            echo "        ";
            $this->displayBlock("oro_type_select_filter_js", $context, $blocks);
            echo "
    ";
        }
    }

    // line 76
    public function block_oro_type_entity_filter_js($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->displayBlock("oro_type_choice_filter_js", $context, $blocks);
        echo "
";
    }

    // line 80
    public function block_oro_type_boolean_filter_js($context, array $blocks = array())
    {
        // line 81
        echo "    new (SelectFilter.extend({
        'name':    ";
        // line 82
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "name", array()));
        echo ",
        'label':   ";
        // line 83
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "label", array()));
        echo ",
        'enabled': ";
        // line 84
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "vars", array()), "show_filter", array()));
        echo ",
        'choices': ";
        // line 85
        echo twig_jsonencode_filter($this->env->getExtension('oro_filter_render_layout')->getChoices($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formView"]) ? $context["formView"] : $this->getContext($context, "formView")), "children", array()), "value", array()), "vars", array()), "choices", array())));
        echo ",
        'contextSearch': false
    }))
";
    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Filter:layout.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  317 => 85,  313 => 84,  309 => 83,  305 => 82,  302 => 81,  299 => 80,  292 => 77,  289 => 76,  281 => 72,  275 => 70,  272 => 69,  269 => 68,  262 => 64,  258 => 63,  254 => 62,  250 => 61,  247 => 60,  244 => 59,  237 => 55,  233 => 54,  229 => 53,  225 => 52,  222 => 51,  219 => 50,  212 => 46,  208 => 45,  204 => 44,  200 => 43,  196 => 42,  193 => 41,  190 => 40,  183 => 36,  179 => 35,  175 => 34,  171 => 33,  167 => 32,  164 => 31,  161 => 30,  154 => 26,  150 => 25,  146 => 24,  142 => 23,  138 => 22,  135 => 21,  132 => 20,  125 => 16,  121 => 15,  117 => 14,  113 => 13,  109 => 12,  106 => 11,  103 => 10,  96 => 6,  92 => 5,  88 => 4,  84 => 3,  81 => 2,  78 => 1,  74 => 80,  71 => 79,  69 => 76,  66 => 75,  64 => 68,  61 => 67,  59 => 59,  56 => 58,  54 => 50,  51 => 49,  49 => 40,  46 => 39,  44 => 30,  41 => 29,  39 => 20,  36 => 19,  34 => 10,  31 => 9,  29 => 1,);
    }
}
/* {% block oro_type_text_filter_js %}*/
/*     new (ChoiceFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.type.vars.choices|oro_filter_choices|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_number_filter_js %}*/
/*     new (NumberFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.type.vars.choices|oro_filter_choices|json_encode|raw }},*/
/*         'formatterOptions': {{ formView.vars.formatter_options|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_date_range_filter_js %}*/
/*     new (DateFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.type.vars.choices|oro_filter_choices|json_encode|raw }},*/
/*         'typeValues': {{ formView.vars.type_values|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_datetime_range_filter_js %}*/
/*     new (DatetimeFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.type.vars.choices|oro_filter_choices|json_encode|raw }},*/
/*         'typeValues': {{ formView.vars.type_values|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_select_filter_js %}*/
/*     new (SelectFilter.extend({*/
/*         'name':             {{ formView.vars.name|json_encode|raw }},*/
/*         'label':            {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled':          {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'populateDefault':  {{ formView.vars.populate_default|json_encode|raw }},*/
/*         'choices':          {{ formView.children.value.vars.choices|oro_filter_choices|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_selectrow_filter_js %}*/
/*     new (SelectRowFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.value.vars.choices|oro_filter_choices|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_multiselect_filter_js %}*/
/*     new (MultiselectFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.value.vars.choices|oro_filter_choices|json_encode|raw }}*/
/*     }))*/
/* {% endblock %}*/
/* */
/* {% block oro_type_choice_filter_js %}*/
/*     {% if formView.children.value.vars.multiple %}*/
/*         {{ block('oro_type_multiselect_filter_js') }}*/
/*     {% else %}*/
/*         {{ block('oro_type_select_filter_js') }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block oro_type_entity_filter_js %}*/
/*     {{ block('oro_type_choice_filter_js') }}*/
/* {% endblock %}*/
/* */
/* {% block oro_type_boolean_filter_js %}*/
/*     new (SelectFilter.extend({*/
/*         'name':    {{ formView.vars.name|json_encode|raw }},*/
/*         'label':   {{ formView.vars.label|json_encode|raw }},*/
/*         'enabled': {{ formView.vars.show_filter|json_encode|raw }},*/
/*         'choices': {{ formView.children.value.vars.choices|oro_filter_choices|json_encode|raw }},*/
/*         'contextSearch': false*/
/*     }))*/
/* {% endblock %}*/
/* */
