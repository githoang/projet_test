<?php

/* OroConfigBundle:Form:fields.html.twig */
class __TwigTemplate_3fd1df951c1c3cd3f5bcb7733b664a3153a772d87f20016709c48ccab45f14a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_config_form_field_type_widget' => array($this, 'block_oro_config_form_field_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_config_form_field_type_widget', $context, $blocks);
    }

    public function block_oro_config_form_field_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["additionalOptions"] = array("disabled" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), "vars", array()), "data", array()) == true));
        // line 3
        echo "    ";
        $context["valueContainerId"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), "vars", array()), "id", array()) . "_container");
        // line 4
        echo "
    <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["valueContainerId"]) ? $context["valueContainerId"] : $this->getContext($context, "valueContainerId")), "html", null, true);
        echo "\"
         class=\"controls control-subgroup";
        // line 6
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), 'widget', (isset($context["additionalOptions"]) ? $context["additionalOptions"] : $this->getContext($context, "additionalOptions")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), 'errors');
        echo "
    </div>

    <div class=\"horizontal parent-scope-checkbox\">
        <div class=\"oro-clearfix\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), 'widget');
        echo "
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), 'label');
        echo "
        </div>
    </div>

    <script type=\"text/javascript\">
        /* jshint browser:true, devel:true */
        /* global require */
        require(['jquery', 'underscore'],
                function (\$, _) {
                    'use strict';

                    \$(function () {
                        var checkboxEl = \$('#";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
                        var valueEls = \$('#";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["valueContainerId"]) ? $context["valueContainerId"] : $this->getContext($context, "valueContainerId")), "html", null, true);
        echo "').find(':input');

                        checkboxEl.change(function () {
                            var value = \$(this).is(':checked');
                            valueEls.each(function (i, el) {
                                \$(el)
                                        .prop('disabled', value)
                                        .data('disabled', value);

                                if (!_.isUndefined(\$.uniform) && _.contains(\$.uniform.elements, el)) {
                                    \$(el).uniform('update');
                                }
                            });
                        });
                    });
                }
        );
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  76 => 26,  61 => 14,  57 => 13,  49 => 8,  45 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block oro_config_form_field_type_widget %}*/
/*     {% set additionalOptions = {disabled: form.use_parent_scope_value.vars.data == true} %}*/
/*     {% set valueContainerId = form.value.vars.id ~ '_container' %}*/
/* */
/*     <div id="{{ valueContainerId }}"*/
/*          class="controls control-subgroup{% if form.value.vars.errors|length > 0 %} validation-error{% endif %}">*/
/*         {{ form_widget(form.value, additionalOptions) }}*/
/*         {{ form_errors(form.value) }}*/
/*     </div>*/
/* */
/*     <div class="horizontal parent-scope-checkbox">*/
/*         <div class="oro-clearfix">*/
/*             {{ form_widget(form.use_parent_scope_value) }}*/
/*             {{ form_label(form.use_parent_scope_value) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         /* jshint browser:true, devel:true *//**/
/*         /* global require *//**/
/*         require(['jquery', 'underscore'],*/
/*                 function ($, _) {*/
/*                     'use strict';*/
/* */
/*                     $(function () {*/
/*                         var checkboxEl = $('#{{ form.use_parent_scope_value.vars.id }}');*/
/*                         var valueEls = $('#{{ valueContainerId }}').find(':input');*/
/* */
/*                         checkboxEl.change(function () {*/
/*                             var value = $(this).is(':checked');*/
/*                             valueEls.each(function (i, el) {*/
/*                                 $(el)*/
/*                                         .prop('disabled', value)*/
/*                                         .data('disabled', value);*/
/* */
/*                                 if (!_.isUndefined($.uniform) && _.contains($.uniform.elements, el)) {*/
/*                                     $(el).uniform('update');*/
/*                                 }*/
/*                             });*/
/*                         });*/
/*                     });*/
/*                 }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
