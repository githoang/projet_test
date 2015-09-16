<?php

/* APYJsFormValidationBundle:Constraints:EmailValidator.js.twig */
class __TwigTemplate_02e003925663f44c81120b169b01092d17e82914c8dac293391cd9f20cbdf634 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'checkmx_async_request' => array($this, 'block_checkmx_async_request'),
            'checkmx_handler' => array($this, 'block_checkmx_handler'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "function Email(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);
    var pattern = /^([a-zA-Z0-9_\\.\\-])+\\@(([a-zA-Z0-9\\-])+\\.)+([a-zA-Z0-9]{2,4})\$/;

    if ( pattern.test(value) ) {
        if (params && params.checkMX && field.nodeName) {
            //TODO This part is compartible only with jquery
            var cache, cacheindex = 'm' + value + '';
            cache = \$(field).data('_checkMXCache');
            if (!cache) cache = {};
            if (cache[cacheindex] != undefined) {
                if (cache[cacheindex] === false) {
                    return getComputeMessage(params.message);
                } else return true;
            }
            ";
        // line 23
        $this->displayBlock('checkmx_async_request', $context, $blocks);
        // line 42
        echo "}
        return true;
    }

    return getComputeMessage(params.message);
}";
    }

    // line 23
    public function block_checkmx_async_request($context, array $blocks = array())
    {
        // line 24
        echo "\$.ajax({
                type: 'POST',
                url: '";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apy_js_form_validation_checkmx", array("_format" => "json")), "js", null, true);
        echo "',
                data: {address: value.replace(new RegExp(\"^.*@\"), \"\")},
                success: function(data, textStatus) {
                    ";
        // line 29
        $this->displayBlock('checkmx_handler', $context, $blocks);
        // line 38
        echo "},
                dataType: 'json'
            });
            ";
    }

    // line 29
    public function block_checkmx_handler($context, array $blocks = array())
    {
        // line 30
        echo "if (data.status && data.status == 'ok') {
                        cache[cacheindex] = data.result;
                        \$(field).data('_checkMXCache', cache);
                        if (!cache[cacheindex]) {
                            checkError(\$(field).attr('id'), Email, params);
                        }
                    }
                    ";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:EmailValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 30,  81 => 29,  74 => 38,  72 => 29,  66 => 26,  62 => 24,  59 => 23,  50 => 42,  48 => 23,  25 => 3,  21 => 1,);
    }
}
/* function Email(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/*     var pattern = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})$/;*/
/* */
/*     if ( pattern.test(value) ) {*/
/*         if (params && params.checkMX && field.nodeName) {*/
/*             //TODO This part is compartible only with jquery*/
/*             var cache, cacheindex = 'm' + value + '';*/
/*             cache = $(field).data('_checkMXCache');*/
/*             if (!cache) cache = {};*/
/*             if (cache[cacheindex] != undefined) {*/
/*                 if (cache[cacheindex] === false) {*/
/*                     return getComputeMessage(params.message);*/
/*                 } else return true;*/
/*             }*/
/*             {% block checkmx_async_request -%}*/
/*             $.ajax({*/
/*                 type: 'POST',*/
/*                 url: '{{ path('apy_js_form_validation_checkmx', {'_format': 'json'}) }}',*/
/*                 data: {address: value.replace(new RegExp("^.*@"), "")},*/
/*                 success: function(data, textStatus) {*/
/*                     {% block checkmx_handler -%}*/
/*                     if (data.status && data.status == 'ok') {*/
/*                         cache[cacheindex] = data.result;*/
/*                         $(field).data('_checkMXCache', cache);*/
/*                         if (!cache[cacheindex]) {*/
/*                             checkError($(field).attr('id'), Email, params);*/
/*                         }*/
/*                     }*/
/*                     {% endblock -%}*/
/*                 },*/
/*                 dataType: 'json'*/
/*             });*/
/*             {% endblock -%}*/
/*         }*/
/*         return true;*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
