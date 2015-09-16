<?php

/* PimEnrichBundle:MassEditAction:configure/layout.html.twig */
class __TwigTemplate_48da7ab29a2c79903fa88f5b6e3487b05fc22398175c03ae5127f8bb31bb1bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:layout.html.twig", "PimEnrichBundle:MassEditAction:configure/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'formTitle' => array($this, 'block_formTitle'),
            'formContent' => array($this, 'block_formContent'),
            'head_script_component' => array($this, 'block_head_script_component'),
            'disableFormScript' => array($this, 'block_disableFormScript'),
            'enableFormScript' => array($this, 'block_enableFormScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["title"] = $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".page_title"));
        // line 5
        echo "    ";
        $context["subtitle"] = $this->env->getExtension('translator')->transchoice((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".page_subtitle"), (isset($context["productCount"]) ? $context["productCount"] : $this->getContext($context, "productCount")));
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => null, 2 => (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle"))), "method"), "html", null, true);
        echo "

    ";
        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 10
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_mass_edit_action_perform", twig_array_merge((isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")), array("operationAlias" => $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "operationAlias", array()))))));
        echo "

        <div class=\"row\">
            <div class=\"offset1 span12\">
                <h3>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "operationAlias", array())) . ".label")), "html", null, true);
        echo "</h3>
                <h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "operationAlias", array())) . ".description")), "html", null, true);
        echo "</h4>
                <div class=\"pull-right\">
                    ";
        // line 18
        $this->displayBlock('formTitle', $context, $blocks);
        // line 19
        echo "                </div>
            </div>
        </div>

        <div class=\"row offset1 span12 buffer-top confirmation hide\">
            <div class=\"alert alert-info\">
                ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".confirm"), (isset($context["productCount"]) ? $context["productCount"] : $this->getContext($context, "productCount"))), "html", null, true);
        echo "
            </div>
        </div>

        <div class=\"row buffer-top\">
            <div class=\"offset1 span12 mass-edit-form\">
                <div class=\"errors\">
                    ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "
                </div>
                ";
        // line 34
        $this->displayBlock('formContent', $context, $blocks);
        // line 36
        echo "            </div>
        </div>

        <div class=\"row offset1 buffer-top configuration\">
            ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "btn.back", 1 => $this->env->getExtension('routing')->getPath("pim_enrich_mass_edit_action_choose", (isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")))), "method"), "html", null, true);
        echo "
            ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "btn.next", 1 => null, 2 => array("class" => array(0 => "next", 1 => "btn-primary"))), "method"), "html", null, true);
        echo "
        </div>

        <div class=\"row offset1 buffer-top confirmation hide\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "btn.cancel", 1 => null, 2 => array("class" => "cancel")), "method"), "html", null, true);
        echo "
            ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(0 => "btn.confirm"), "method"), "html", null, true);
        echo "
        </div>

    ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 18
    public function block_formTitle($context, array $blocks = array())
    {
    }

    // line 34
    public function block_formContent($context, array $blocks = array())
    {
        // line 35
        echo "                ";
    }

    // line 52
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 53
        echo "    ";
        $context["currentStep"] = 3;
        // line 54
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "

    ";
        // line 56
        $context["action"] = $this->env->getExtension('routing')->getPath("pim_enrich_mass_edit_action_configure", twig_array_merge((isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")), array("operationAlias" => $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "operationAlias", array()))));
        // line 57
        echo "    <script type=\"text/javascript\">
        require(
            ['jquery', 'oro/mediator', 'wysiwyg', 'jquery.wizard', 'jquery.select2', 'bootstrap.bootstrapswitch', 'jquery.multiselect'],
            function (\$, mediator, wysiwyg) {
                'use strict';

                \$(function () {
                    var disableForm = function() {
                        // Disable common fields
                        \$('input, select, textarea').each(function() {
                            \$(this).prop('readonly', true);
                        });

                        // Disable select2
                        \$('select').select2('readonly', true);

                        // Disable multiselect
                        \$('select.pimmultiselect').multiselect('disable');

                        // Disable switcher
                        \$('.has-switch').bootstrapSwitch('setActive', false);

                        // Trigger jstree lock
                        mediator.trigger('jstree:lock');

                        // Disable wysiwyg
                        \$('textarea.wysiwyg[id]').each(function () {
                            wysiwyg.readonly(\$(this), true);
                        });

                        ";
        // line 87
        $this->displayBlock('disableFormScript', $context, $blocks);
        // line 89
        echo "                    }

                    var enableForm = function() {
                        // Enable common fields
                        \$('input, textarea').each(function() {
                            \$(this).prop('readonly', false);
                        });

                        // Enable select2
                        \$('select').select2('readonly', false);

                        // Enable multiselect
                        \$('select.pimmultiselect').multiselect('enable');

                        // Enable switcher
                        \$('.has-switch').bootstrapSwitch('setActive', true);

                        // Trigger jstree unlock
                        mediator.trigger('jstree:unlock');

                        // Enable wysiwyg
                        \$('textarea.wysiwyg[id]').each(function () {
                            wysiwyg.readonly(\$(this), false);
                        });

                        ";
        // line 114
        $this->displayBlock('enableFormScript', $context, $blocks);
        // line 116
        echo "                    };

                    \$('select.operation-param').change(function () {
                        \$('#";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').attr('action', '";
        echo (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"));
        echo "').submit();
                    });

                    /**
                     * Confirmation
                     */
                    \$('a.next').on('click', function() {
                        \$('.wizard').wizard({ currentStep: 4});
                        disableForm();
                        \$('.configuration').addClass('hide');
                        \$('.confirmation').removeClass('hide');
                    });

                    \$('a.cancel').on('click', function() {
                        \$('.wizard').wizard({ currentStep: 3});
                        enableForm();
                        \$('.configuration').removeClass('hide');
                        \$('.confirmation').addClass('hide');
                    });
                });
            }
        );
    </script>
";
    }

    // line 87
    public function block_disableFormScript($context, array $blocks = array())
    {
        // line 88
        echo "                        ";
    }

    // line 114
    public function block_enableFormScript($context, array $blocks = array())
    {
        // line 115
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction:configure/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 115,  264 => 114,  260 => 88,  257 => 87,  227 => 119,  222 => 116,  220 => 114,  193 => 89,  191 => 87,  159 => 57,  157 => 56,  151 => 54,  148 => 53,  145 => 52,  141 => 35,  138 => 34,  133 => 18,  127 => 49,  121 => 46,  117 => 45,  110 => 41,  106 => 40,  100 => 36,  98 => 34,  93 => 32,  83 => 25,  75 => 19,  73 => 18,  68 => 16,  64 => 15,  57 => 11,  53 => 10,  48 => 8,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {% set title = ('pim_enrich.mass_edit_action.' ~ operator.name ~ '.page_title')|trans %}*/
/*     {% set subtitle = ('pim_enrich.mass_edit_action.' ~ operator.name ~ '.page_subtitle')|transchoice(productCount) %}*/
/*     {{ elements.page_header(title, null, subtitle) }}*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, { 'action': path('pim_enrich_mass_edit_action_perform', queryParams|merge({ 'operationAlias': operator.operationAlias })) }) }}*/
/* */
/*         <div class="row">*/
/*             <div class="offset1 span12">*/
/*                 <h3>{{ ('pim_enrich.mass_edit_action.' ~ operator.operationAlias ~ '.label')|trans }}</h3>*/
/*                 <h4>{{ ('pim_enrich.mass_edit_action.' ~ operator.operationAlias ~ '.description')|trans }}</h4>*/
/*                 <div class="pull-right">*/
/*                     {% block formTitle %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row offset1 span12 buffer-top confirmation hide">*/
/*             <div class="alert alert-info">*/
/*                 {{ ('pim_enrich.mass_edit_action.' ~ operator.name ~ '.confirm')|transchoice(productCount) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row buffer-top">*/
/*             <div class="offset1 span12 mass-edit-form">*/
/*                 <div class="errors">*/
/*                     {{ elements.form_errors(form) }}*/
/*                 </div>*/
/*                 {% block formContent %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row offset1 buffer-top configuration">*/
/*             {{ elements.link('btn.back', path('pim_enrich_mass_edit_action_choose', queryParams)) }}*/
/*             {{ elements.link('btn.next', null, {'class': ['next', 'btn-primary']}) }}*/
/*         </div>*/
/* */
/*         <div class="row offset1 buffer-top confirmation hide">*/
/*             {{ elements.link('btn.cancel', null, {'class': 'cancel'}) }}*/
/*             {{ elements.submitBtn('btn.confirm') }}*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/*     {% set currentStep = 3 %}*/
/*     {{ parent() }}*/
/* */
/*     {% set action = path('pim_enrich_mass_edit_action_configure', queryParams|merge({ 'operationAlias': operator.operationAlias })) %}*/
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'oro/mediator', 'wysiwyg', 'jquery.wizard', 'jquery.select2', 'bootstrap.bootstrapswitch', 'jquery.multiselect'],*/
/*             function ($, mediator, wysiwyg) {*/
/*                 'use strict';*/
/* */
/*                 $(function () {*/
/*                     var disableForm = function() {*/
/*                         // Disable common fields*/
/*                         $('input, select, textarea').each(function() {*/
/*                             $(this).prop('readonly', true);*/
/*                         });*/
/* */
/*                         // Disable select2*/
/*                         $('select').select2('readonly', true);*/
/* */
/*                         // Disable multiselect*/
/*                         $('select.pimmultiselect').multiselect('disable');*/
/* */
/*                         // Disable switcher*/
/*                         $('.has-switch').bootstrapSwitch('setActive', false);*/
/* */
/*                         // Trigger jstree lock*/
/*                         mediator.trigger('jstree:lock');*/
/* */
/*                         // Disable wysiwyg*/
/*                         $('textarea.wysiwyg[id]').each(function () {*/
/*                             wysiwyg.readonly($(this), true);*/
/*                         });*/
/* */
/*                         {% block disableFormScript %}*/
/*                         {% endblock %}*/
/*                     }*/
/* */
/*                     var enableForm = function() {*/
/*                         // Enable common fields*/
/*                         $('input, textarea').each(function() {*/
/*                             $(this).prop('readonly', false);*/
/*                         });*/
/* */
/*                         // Enable select2*/
/*                         $('select').select2('readonly', false);*/
/* */
/*                         // Enable multiselect*/
/*                         $('select.pimmultiselect').multiselect('enable');*/
/* */
/*                         // Enable switcher*/
/*                         $('.has-switch').bootstrapSwitch('setActive', true);*/
/* */
/*                         // Trigger jstree unlock*/
/*                         mediator.trigger('jstree:unlock');*/
/* */
/*                         // Enable wysiwyg*/
/*                         $('textarea.wysiwyg[id]').each(function () {*/
/*                             wysiwyg.readonly($(this), false);*/
/*                         });*/
/* */
/*                         {% block enableFormScript %}*/
/*                         {% endblock %}*/
/*                     };*/
/* */
/*                     $('select.operation-param').change(function () {*/
/*                         $('#{{ form.vars.id }}').attr('action', '{{ action|raw }}').submit();*/
/*                     });*/
/* */
/*                     /***/
/*                      * Confirmation*/
/*                      *//**/
/*                     $('a.next').on('click', function() {*/
/*                         $('.wizard').wizard({ currentStep: 4});*/
/*                         disableForm();*/
/*                         $('.configuration').addClass('hide');*/
/*                         $('.confirmation').removeClass('hide');*/
/*                     });*/
/* */
/*                     $('a.cancel').on('click', function() {*/
/*                         $('.wizard').wizard({ currentStep: 3});*/
/*                         enableForm();*/
/*                         $('.configuration').removeClass('hide');*/
/*                         $('.confirmation').addClass('hide');*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
