<?php

/* APYJsFormValidationBundle::JsFormValidation.js.twig */
class __TwigTemplate_c849df1f85af7c3d64b393f58515bba3463a68287e76d179d65d0f4e096642b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'before' => array($this, 'block_before'),
            'getFieldValue' => array($this, 'block_getFieldValue'),
            'removeErrors' => array($this, 'block_removeErrors'),
            'getVal' => array($this, 'block_getVal'),
            'addError' => array($this, 'block_addError'),
            'removeErrors_method' => array($this, 'block_removeErrors_method'),
            'addError_method' => array($this, 'block_addError_method'),
            'onEvent' => array($this, 'block_onEvent'),
            'onFirstEvent' => array($this, 'block_onFirstEvent'),
            'getters_constraints_field' => array($this, 'block_getters_constraints_field'),
            'getters_constraints_submit' => array($this, 'block_getters_constraints_submit'),
            'onReady' => array($this, 'block_onReady'),
            'after' => array($this, 'block_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * Custom javascript form validation for PIM
 */

require(['jquery', 'oro/translator', 'bootstrap-tooltip'],
function(\$, __){
";
        // line 7
        $this->displayBlock('before', $context, $blocks);
        // line 8
        echo "
var jsfv = new function () {
    function getComputeMessage(key, placeholders, number) {

        var result = __(key, placeholders, number);
        if (undefined == result && number != undefined) {
            // Try to get translated string without a number parameter.
            result = __(key, placeholders);
        }

        return result;
    }

    function isNotDefined(value) {
        return (typeof value === 'undefined' || null === value || '' === value);
    }

    function showErrorsOnGroups() {
        var \$groups = \$('div.tab-groups ul');
        if (!\$groups.length) {
            return;
        }

        var \$error = \$('<i class=\"validation-tooltip\" data-placement=\"right\" data-toggle=\"tooltip\" data-original-title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("There are errors in this tab!"), "js", null, true);
        echo "\"></i>');

        \$groups.find('a').each(
            function() {
                var target = \$(this).attr('href');
                if (!target || target == '#' || target == 'javascript:void(0);') {
                    return;
                }

                if (\$(target).find('.validation-tooltip').length) {
                    if (!\$(this).find('.validation-tooltip').length) {
                        \$(this).append(\$error.tooltip());
                    }
                } else {
                    \$(this).find('.validation-tooltip').remove();
                }
            }
        )
    }

    function highlightTabsWithErrors() {
        var \$tabs = \$('#form-navbar ul.nav');
        if (!\$tabs.length) {
            return;
        }

        \$tabs.find('a').each(
            function() {
                var target = \$(this).attr('href');
                if (!target || target == '#' || target == 'javascript:void(0);') {
                    return;
                }

                if (\$(target).find('.validation-tooltip').length) {
                    \$(this).addClass('error');
                } else {
                    \$(this).removeClass('error');
                }
            }
        )
    }

    function showFirstTabWithErrors() {
        \$errors = \$('.validation-tooltip');
        if (!\$errors.length || \$errors.filter(':visible').length) {
            return;
        }

        \$error = \$errors.first();
        \$('a[href=\"#'+\$error.closest('.tab-pane').attr('id')+'\"]').click();
    }

";
        // line 83
        $this->displayBlock('getFieldValue', $context, $blocks);
        // line 136
        echo "
    function checkError(field, checkFunction, parameters, value) {
        field = jsfv.id(field);
        // Remove old errors of the field
        ";
        // line 140
        $this->displayBlock('removeErrors', $context, $blocks);
        // line 141
        echo "        // Check the value
        errorMessage = checkFunction((value === undefined ? getFieldValue(field) : value), parameters);
        ";
        // line 145
        echo "/*// ";
        $this->displayBlock('getVal', $context, $blocks);
        echo " */

        if (errorMessage != true) {
";
        // line 148
        $this->displayBlock('addError', $context, $blocks);
        // line 153
        echo "
            return false;
        }
        highlightTabsWithErrors();
        showErrorsOnGroups();

        return true;
    }

";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["librairyCalls"]) ? $context["librairyCalls"] : $this->getContext($context, "librairyCalls")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["librairyCall"]) {
            // line 163
            echo "
";
            // line 164
            $this->loadTemplate($context["librairyCall"], "APYJsFormValidationBundle::JsFormValidation.js.twig", 164)->display($context);
            // line 165
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['librairyCall'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "
";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["getterHandlers"]) ? $context["getterHandlers"] : $this->getContext($context, "getterHandlers")));
        foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
            // line 169
            echo "
";
            // line 170
            echo $context["handler"];
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "
    return {
        id: function (id) {
            return document.getElementById(id) || document.getElementById(id+'_data');
        },
";
        // line 178
        $this->displayBlock('removeErrors_method', $context, $blocks);
        // line 188
        $this->displayBlock('addError_method', $context, $blocks);
        // line 203
        echo "        onEvent: function (field, eventType, handler) {
            if (typeof field === 'string') {
                field = jsfv.id(field);
            }
";
        // line 207
        $this->displayBlock('onEvent', $context, $blocks);
        // line 210
        echo "        },
        onFirstEvent: function (field, eventType, handler) {
            if (typeof field === 'string') {
                field = jsfv.id(field);
            }
";
        // line 215
        $this->displayBlock('onFirstEvent', $context, $blocks);
        // line 218
        echo "        },
";
        // line 219
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
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
        foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
            // line 220
            echo "        check_";
            echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
            echo ": function() {
            var gv;
            result = true;
";
            // line 223
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["constraints"]);
            foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                // line 224
                echo "            result = result && checkError('";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["constraint"], "name", array()), "js", null, true);
                echo ", ";
                echo $this->getAttribute($context["constraint"], "parameters", array());
                echo " );
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 226
            $context["resultvar"] = "result";
            // line 227
            $this->displayBlock('getters_constraints_field', $context, $blocks);
            // line 239
            echo "            return result;
        },
";
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
        unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        onReady: function() {
";
        // line 243
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "submit", array())) {
            // line 244
            echo "            // On submit checks
            var form = jsfv.id('";
            // line 245
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
            echo "');

            // Form exists ?
            if (form) {
                // Get the form
                if ( form.nodeName.toLowerCase() != 'form') {
                    form = jsfv.id('";
            // line 251
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "js", null, true);
            echo "__token').form;
                }

                // Remove HTML5 validation
                \$(form).attr('novalidate', 'novalidate');
                highlightTabsWithErrors();
                showErrorsOnGroups();

                jsfv.onFirstEvent(form, 'submit', function(e) {
                    var gv, submitForm = true;
";
            // line 261
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 262
                echo "                    submitForm = jsfv.check_";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo "() && submitForm;
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 264
            $context["resultvar"] = "submitForm";
            $context["fieldName"] = ".";
            // line 265
            $this->displayBlock('getters_constraints_submit', $context, $blocks);
            // line 266
            echo "                    if (!submitForm) {
                        e.stopImmediatePropagation();
                        showFirstTabWithErrors();
                        \$(form).trigger('validate');
                    }
                    return submitForm;
                });
            }
";
        }
        // line 275
        echo "
";
        // line 276
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "blur", array())) {
            // line 277
            echo "            // On blur checks
";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 279
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo "', 'blur', jsfv.check_";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 282
        echo "
";
        // line 283
        if ($this->getAttribute((isset($context["check_modes"]) ? $context["check_modes"] : $this->getContext($context, "check_modes")), "change", array())) {
            // line 284
            echo "            // On change checks
";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fieldConstraints"]) ? $context["fieldConstraints"] : $this->getContext($context, "fieldConstraints")));
            foreach ($context['_seq'] as $context["fieldName"] => $context["constraints"]) {
                // line 286
                echo "            jsfv.onEvent('";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo "', 'change', jsfv.check_";
                echo twig_escape_filter($this->env, $context["fieldName"], "js", null, true);
                echo ");
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['fieldName'], $context['constraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 289
        echo "        }
    };
}

";
        // line 293
        $this->displayBlock('onReady', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('after', $context, $blocks);
        // line 298
        echo "});
";
    }

    // line 7
    public function block_before($context, array $blocks = array())
    {
    }

    // line 83
    public function block_getFieldValue($context, array $blocks = array())
    {
        // line 84
        echo "    function getFieldValue(field) {
        if (!field || !field.nodeName) {
            return undefined;
        }

        var resolveField = function(field) {
            if (-1 != \$.inArray(field.nodeName.toLowerCase(), ['input', 'select', 'textarea'])) {
                return \$(field);
            }
            var select = \$('select', field);
            if (select.length) {
                return select;
            }
            var input = \$('input', field);
            if (input.length) {
                if (!input.filter('[type=checkbox]') && !input.filter('[type=radio]')) {
                    return input.first();
                }
                return input;
            }
            var textarea = \$('textarea', field);
                if (textarea.length) {
                return textarea.get(0);
            }
            return undefined;
        }

        var \$field = resolveField(field);
        var isMultiple = \$field.length > 1 || \$field.filter('select[multiple=multiple]').length;
        var value = undefined;

        if (\$field.filter('input[type=\"checkbox\"]').length) {
            value = \$field.filter(':checked').map(function(i, cb) { return \$(cb).val(); }).get();
        } else if (\$field.filter('input[type=\"radio\"]').length) {
            value = \$field.filter(':checked').val();
        } else {
            value = \$field.val();
        }

        if (!isMultiple && value instanceof Array) {
            value = value.pop();
        } else if (isMultiple && !value instanceof Array) {
            if (value && value != '') {
                value = [value];
            } else {
                value = [];
            }
        }

        return value;
    }
";
    }

    // line 140
    public function block_removeErrors($context, array $blocks = array())
    {
        ob_start();
        echo "jsfv.removeErrors(field);";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 145
    public function block_getVal($context, array $blocks = array())
    {
    }

    // line 148
    public function block_addError($context, array $blocks = array())
    {
        // line 149
        echo "            jsfv.addError(field, errorMessage);
            highlightTabsWithErrors();
            showErrorsOnGroups();
";
    }

    // line 178
    public function block_removeErrors_method($context, array $blocks = array())
    {
        // line 179
        echo "        removeErrors: function (field) {
            \$(field).removeClass('error').parent().filter('.controls').removeClass('validation-error');
            if (\$(field).siblings('.icons-container').length) {
                \$(field).siblings('.icons-container').find('.validation-tooltip').remove();
            } else {
                \$(field).closest('.controls').find('.icons-container').find('.validation-tooltip').remove();
            }
        },
";
    }

    // line 188
    public function block_addError_method($context, array $blocks = array())
    {
        // line 189
        echo "        addError: function (field, errorMessage) {
            // Add errors block
            var \$field = \$(field);
            var \$iconContainer = \$field.siblings('.icons-container').first();
            if (!\$iconContainer.length) {
                \$iconContainer = \$field.closest('.controls').find('.icons-container').first();
            }
            if (\$iconContainer.find('.validation-tooltip').length === 0)  {
                \$('<i class=\"validation-tooltip\" data-placement=\"right\" data-toggle=\"tooltip\"></i>').appendTo(\$iconContainer);
            }
            \$iconContainer.find('.validation-tooltip').attr('data-original-title', errorMessage).tooltip();
            \$field.addClass('error').closest('.controls').addClass('validation-error');
        },
";
    }

    // line 207
    public function block_onEvent($context, array $blocks = array())
    {
        // line 208
        echo "            \$(field).bind(eventType, handler);
";
    }

    // line 215
    public function block_onFirstEvent($context, array $blocks = array())
    {
        // line 216
        echo "            \$(field).bind(eventType, handler);
";
    }

    // line 227
    public function block_getters_constraints_field($context, array $blocks = array())
    {
        // line 228
        if ($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : null), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array", true, true)) {
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gettersConstraints"]) ? $context["gettersConstraints"] : $this->getContext($context, "gettersConstraints")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), array(), "array"));
            foreach ($context['_seq'] as $context["getterHandler"] => $context["getterConstraints"]) {
                // line 230
                echo "            if (";
                echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "js", null, true);
                echo ") {
                gv = ";
                // line 231
                echo $context["getterHandler"];
                echo "();
";
                // line 232
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["getterConstraints"]);
                foreach ($context['_seq'] as $context["_key"] => $context["constraint"]) {
                    // line 233
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["resultvar"]) ? $context["resultvar"] : $this->getContext($context, "resultvar")), "js", null, true);
                    echo " = checkError(";
                    if (((isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")) == ".")) {
                        echo "form.id";
                    } else {
                        echo "'";
                        echo twig_escape_filter($this->env, (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), "js", null, true);
                        echo "'";
                    }
                    echo ", ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["constraint"], "name", array()), "js", null, true);
                    echo ", ";
                    echo $this->getAttribute($context["constraint"], "parameters", array());
                    echo ", gv);
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['constraint'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 235
                echo "            }
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['getterHandler'], $context['getterConstraints'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    // line 265
    public function block_getters_constraints_submit($context, array $blocks = array())
    {
        $this->displayBlock("getters_constraints_field", $context, $blocks);
    }

    // line 293
    public function block_onReady($context, array $blocks = array())
    {
        // line 294
        echo "\$(jsfv.onReady);
";
    }

    // line 297
    public function block_after($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle::JsFormValidation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 297,  628 => 294,  625 => 293,  619 => 265,  609 => 235,  588 => 233,  584 => 232,  580 => 231,  575 => 230,  571 => 229,  569 => 228,  566 => 227,  561 => 216,  558 => 215,  553 => 208,  550 => 207,  533 => 189,  530 => 188,  518 => 179,  515 => 178,  508 => 149,  505 => 148,  500 => 145,  492 => 140,  437 => 84,  434 => 83,  429 => 7,  424 => 298,  422 => 297,  419 => 296,  417 => 293,  411 => 289,  399 => 286,  395 => 285,  392 => 284,  390 => 283,  387 => 282,  375 => 279,  371 => 278,  368 => 277,  366 => 276,  363 => 275,  352 => 266,  350 => 265,  347 => 264,  338 => 262,  334 => 261,  321 => 251,  312 => 245,  309 => 244,  307 => 243,  304 => 242,  288 => 239,  286 => 227,  284 => 226,  271 => 224,  267 => 223,  260 => 220,  243 => 219,  240 => 218,  238 => 215,  231 => 210,  229 => 207,  223 => 203,  221 => 188,  219 => 178,  212 => 173,  203 => 170,  200 => 169,  196 => 168,  193 => 167,  178 => 165,  176 => 164,  173 => 163,  156 => 162,  145 => 153,  143 => 148,  136 => 145,  132 => 141,  130 => 140,  124 => 136,  122 => 83,  67 => 31,  42 => 8,  40 => 7,  32 => 1,);
    }
}
/* /***/
/*  * Custom javascript form validation for PIM*/
/*  *//**/
/* */
/* require(['jquery', 'oro/translator', 'bootstrap-tooltip'],*/
/* function($, __){*/
/* {% block before %}{% endblock %}*/
/* */
/* var jsfv = new function () {*/
/*     function getComputeMessage(key, placeholders, number) {*/
/* */
/*         var result = __(key, placeholders, number);*/
/*         if (undefined == result && number != undefined) {*/
/*             // Try to get translated string without a number parameter.*/
/*             result = __(key, placeholders);*/
/*         }*/
/* */
/*         return result;*/
/*     }*/
/* */
/*     function isNotDefined(value) {*/
/*         return (typeof value === 'undefined' || null === value || '' === value);*/
/*     }*/
/* */
/*     function showErrorsOnGroups() {*/
/*         var $groups = $('div.tab-groups ul');*/
/*         if (!$groups.length) {*/
/*             return;*/
/*         }*/
/* */
/*         var $error = $('<i class="validation-tooltip" data-placement="right" data-toggle="tooltip" data-original-title="{{ 'There are errors in this tab!'|trans }}"></i>');*/
/* */
/*         $groups.find('a').each(*/
/*             function() {*/
/*                 var target = $(this).attr('href');*/
/*                 if (!target || target == '#' || target == 'javascript:void(0);') {*/
/*                     return;*/
/*                 }*/
/* */
/*                 if ($(target).find('.validation-tooltip').length) {*/
/*                     if (!$(this).find('.validation-tooltip').length) {*/
/*                         $(this).append($error.tooltip());*/
/*                     }*/
/*                 } else {*/
/*                     $(this).find('.validation-tooltip').remove();*/
/*                 }*/
/*             }*/
/*         )*/
/*     }*/
/* */
/*     function highlightTabsWithErrors() {*/
/*         var $tabs = $('#form-navbar ul.nav');*/
/*         if (!$tabs.length) {*/
/*             return;*/
/*         }*/
/* */
/*         $tabs.find('a').each(*/
/*             function() {*/
/*                 var target = $(this).attr('href');*/
/*                 if (!target || target == '#' || target == 'javascript:void(0);') {*/
/*                     return;*/
/*                 }*/
/* */
/*                 if ($(target).find('.validation-tooltip').length) {*/
/*                     $(this).addClass('error');*/
/*                 } else {*/
/*                     $(this).removeClass('error');*/
/*                 }*/
/*             }*/
/*         )*/
/*     }*/
/* */
/*     function showFirstTabWithErrors() {*/
/*         $errors = $('.validation-tooltip');*/
/*         if (!$errors.length || $errors.filter(':visible').length) {*/
/*             return;*/
/*         }*/
/* */
/*         $error = $errors.first();*/
/*         $('a[href="#'+$error.closest('.tab-pane').attr('id')+'"]').click();*/
/*     }*/
/* */
/* {% block getFieldValue %}*/
/*     function getFieldValue(field) {*/
/*         if (!field || !field.nodeName) {*/
/*             return undefined;*/
/*         }*/
/* */
/*         var resolveField = function(field) {*/
/*             if (-1 != $.inArray(field.nodeName.toLowerCase(), ['input', 'select', 'textarea'])) {*/
/*                 return $(field);*/
/*             }*/
/*             var select = $('select', field);*/
/*             if (select.length) {*/
/*                 return select;*/
/*             }*/
/*             var input = $('input', field);*/
/*             if (input.length) {*/
/*                 if (!input.filter('[type=checkbox]') && !input.filter('[type=radio]')) {*/
/*                     return input.first();*/
/*                 }*/
/*                 return input;*/
/*             }*/
/*             var textarea = $('textarea', field);*/
/*                 if (textarea.length) {*/
/*                 return textarea.get(0);*/
/*             }*/
/*             return undefined;*/
/*         }*/
/* */
/*         var $field = resolveField(field);*/
/*         var isMultiple = $field.length > 1 || $field.filter('select[multiple=multiple]').length;*/
/*         var value = undefined;*/
/* */
/*         if ($field.filter('input[type="checkbox"]').length) {*/
/*             value = $field.filter(':checked').map(function(i, cb) { return $(cb).val(); }).get();*/
/*         } else if ($field.filter('input[type="radio"]').length) {*/
/*             value = $field.filter(':checked').val();*/
/*         } else {*/
/*             value = $field.val();*/
/*         }*/
/* */
/*         if (!isMultiple && value instanceof Array) {*/
/*             value = value.pop();*/
/*         } else if (isMultiple && !value instanceof Array) {*/
/*             if (value && value != '') {*/
/*                 value = [value];*/
/*             } else {*/
/*                 value = [];*/
/*             }*/
/*         }*/
/* */
/*         return value;*/
/*     }*/
/* {% endblock %}*/
/* */
/*     function checkError(field, checkFunction, parameters, value) {*/
/*         field = jsfv.id(field);*/
/*         // Remove old errors of the field*/
/*         {% block removeErrors %}{% spaceless %}jsfv.removeErrors(field);{% endspaceless %}{% endblock %}*/
/*         // Check the value*/
/*         errorMessage = checkFunction((value === undefined ? getFieldValue(field) : value), parameters);*/
/*         {# Notice! Block getVal was refused since 2.1 version.*/
/*            Use twig extention function getJsFormElementValue('field') instead. -#}*/
/*         /*//*/ {% block getVal %}{% endblock %} *//**/
/* */
/*         if (errorMessage != true) {*/
/* {% block addError %}*/
/*             jsfv.addError(field, errorMessage);*/
/*             highlightTabsWithErrors();*/
/*             showErrorsOnGroups();*/
/* {% endblock %}*/
/* */
/*             return false;*/
/*         }*/
/*         highlightTabsWithErrors();*/
/*         showErrorsOnGroups();*/
/* */
/*         return true;*/
/*     }*/
/* */
/* {% for librairyCall in librairyCalls %}*/
/* */
/* {% include librairyCall %}*/
/* */
/* {% endfor %}*/
/* */
/* {% for handler in getterHandlers %}*/
/* */
/* {{ handler|raw }}*/
/* */
/* {% endfor %}*/
/* */
/*     return {*/
/*         id: function (id) {*/
/*             return document.getElementById(id) || document.getElementById(id+'_data');*/
/*         },*/
/* {% block removeErrors_method %}*/
/*         removeErrors: function (field) {*/
/*             $(field).removeClass('error').parent().filter('.controls').removeClass('validation-error');*/
/*             if ($(field).siblings('.icons-container').length) {*/
/*                 $(field).siblings('.icons-container').find('.validation-tooltip').remove();*/
/*             } else {*/
/*                 $(field).closest('.controls').find('.icons-container').find('.validation-tooltip').remove();*/
/*             }*/
/*         },*/
/* {% endblock %}*/
/* {% block addError_method %}*/
/*         addError: function (field, errorMessage) {*/
/*             // Add errors block*/
/*             var $field = $(field);*/
/*             var $iconContainer = $field.siblings('.icons-container').first();*/
/*             if (!$iconContainer.length) {*/
/*                 $iconContainer = $field.closest('.controls').find('.icons-container').first();*/
/*             }*/
/*             if ($iconContainer.find('.validation-tooltip').length === 0)  {*/
/*                 $('<i class="validation-tooltip" data-placement="right" data-toggle="tooltip"></i>').appendTo($iconContainer);*/
/*             }*/
/*             $iconContainer.find('.validation-tooltip').attr('data-original-title', errorMessage).tooltip();*/
/*             $field.addClass('error').closest('.controls').addClass('validation-error');*/
/*         },*/
/* {% endblock %}*/
/*         onEvent: function (field, eventType, handler) {*/
/*             if (typeof field === 'string') {*/
/*                 field = jsfv.id(field);*/
/*             }*/
/* {% block onEvent %}*/
/*             $(field).bind(eventType, handler);*/
/* {% endblock %}*/
/*         },*/
/*         onFirstEvent: function (field, eventType, handler) {*/
/*             if (typeof field === 'string') {*/
/*                 field = jsfv.id(field);*/
/*             }*/
/* {% block onFirstEvent %}*/
/*             $(field).bind(eventType, handler);*/
/* {% endblock %}*/
/*         },*/
/* {% for fieldName, constraints in fieldConstraints %}*/
/*         check_{{ fieldName }}: function() {*/
/*             var gv;*/
/*             result = true;*/
/* {% for constraint in constraints %}*/
/*             result = result && checkError('{{   fieldName }}', {{ constraint.name }}, {{ constraint.parameters|raw }} );*/
/* {% endfor %}*/
/* {% set resultvar = 'result' %}*/
/* {% block getters_constraints_field %}*/
/* {% if gettersConstraints[fieldName] is defined %}*/
/* {% for getterHandler, getterConstraints  in gettersConstraints[fieldName] %}*/
/*             if ({{ resultvar }}) {*/
/*                 gv = {{ getterHandler|raw }}();*/
/* {% for constraint in getterConstraints %}*/
/*                 {{ resultvar }} = checkError({% if fieldName == '.' %}form.id{% else %}'{{ fieldName }}'{% endif %}, {{ constraint.name }}, {{ constraint.parameters|raw }}, gv);*/
/* {% endfor %}*/
/*             }*/
/* {% endfor %}*/
/* {% endif %}*/
/* {% endblock %}*/
/*             return result;*/
/*         },*/
/* {% endfor %}*/
/*         onReady: function() {*/
/* {% if check_modes.submit %}*/
/*             // On submit checks*/
/*             var form = jsfv.id('{{ formName }}');*/
/* */
/*             // Form exists ?*/
/*             if (form) {*/
/*                 // Get the form*/
/*                 if ( form.nodeName.toLowerCase() != 'form') {*/
/*                     form = jsfv.id('{{ formName }}__token').form;*/
/*                 }*/
/* */
/*                 // Remove HTML5 validation*/
/*                 $(form).attr('novalidate', 'novalidate');*/
/*                 highlightTabsWithErrors();*/
/*                 showErrorsOnGroups();*/
/* */
/*                 jsfv.onFirstEvent(form, 'submit', function(e) {*/
/*                     var gv, submitForm = true;*/
/* {% for fieldName, constraints in fieldConstraints %}*/
/*                     submitForm = jsfv.check_{{ fieldName }}() && submitForm;*/
/* {% endfor %}*/
/* {% set resultvar = 'submitForm' %}{% set fieldName = '.' %}*/
/* {% block getters_constraints_submit %}{{ block('getters_constraints_field') }}{% endblock %}*/
/*                     if (!submitForm) {*/
/*                         e.stopImmediatePropagation();*/
/*                         showFirstTabWithErrors();*/
/*                         $(form).trigger('validate');*/
/*                     }*/
/*                     return submitForm;*/
/*                 });*/
/*             }*/
/* {% endif %}*/
/* */
/* {% if check_modes.blur %}*/
/*             // On blur checks*/
/* {% for fieldName, constraints in fieldConstraints %}*/
/*             jsfv.onEvent('{{ fieldName }}', 'blur', jsfv.check_{{ fieldName }});*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
/* {% if check_modes.change %}*/
/*             // On change checks*/
/* {% for fieldName, constraints in fieldConstraints %}*/
/*             jsfv.onEvent('{{ fieldName }}', 'change', jsfv.check_{{ fieldName }});*/
/* {% endfor %}*/
/* {% endif %}*/
/*         }*/
/*     };*/
/* }*/
/* */
/* {% block onReady %}*/
/* $(jsfv.onReady);*/
/* {% endblock %}*/
/* */
/* {% block after %}{% endblock %}*/
/* });*/
/* */
