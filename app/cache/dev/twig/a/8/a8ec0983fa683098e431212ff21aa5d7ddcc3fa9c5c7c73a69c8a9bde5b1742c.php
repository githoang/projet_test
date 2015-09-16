<?php

/* APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig */
class __TwigTemplate_daa26a920c2c796224798ab2f7e09ef3db71bfd596226c534ab0f9a59765526a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'check_uniquity_async_request' => array($this, 'block_check_uniquity_async_request'),
            'check_uniquity_handler' => array($this, 'block_check_uniquity_handler'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/**
 * @author   Vitaliy Demidov   <zend@i.ua>
 */
function UniqueEntity(field, params)
{
    var value = field && field.nodeName ? ";
        // line 6
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;
    var cache, url, cacheindex = 'm' + value + '';
    if (params && params.fields && field.nodeName) {
        //TODO This part is compartible only with jquery
        cache = \$(field).data('_uniqueEntityCache');
        if (!cache) cache = {};
        if (cache[cacheindex] != undefined) {
            if (cache[cacheindex] === false) {
                return getComputeMessage(params.message);
            } else return true;
        }
";
        // line 17
        $this->displayBlock('check_uniquity_async_request', $context, $blocks);
        // line 41
        echo "    }
    return true;
}
";
    }

    // line 17
    public function block_check_uniquity_async_request($context, array $blocks = array())
    {
        // line 18
        echo "        \$.ajax({
            type: 'POST',
            url: '";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apy_js_form_validation_unique_entity", array("_format" => "json", "_locale" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))), "js", null, true);
        echo "',
            data: {
                'entity': params.entity,
                'target': params.fields,
                'value': value,
                'ignore': params.identifier_field_id ? self.id(params.identifier_field_id).value : ''
            },
            success: function(data, textStatus) {
";
        // line 28
        $this->displayBlock('check_uniquity_handler', $context, $blocks);
        // line 37
        echo "            },
            dataType: 'json'
       });
";
    }

    // line 28
    public function block_check_uniquity_handler($context, array $blocks = array())
    {
        // line 29
        echo "                if (data.status && data.status == 'ok') {
                    cache[cacheindex] = data.isUnique;
                    \$(field).data('_uniqueEntityCache', cache);
                    if (!cache[cacheindex]) {
                        checkError(\$(field).attr('id'), UniqueEntity, params);
                    }
                }
";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:UniqueEntityValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  78 => 28,  71 => 37,  69 => 28,  58 => 20,  54 => 18,  51 => 17,  44 => 41,  42 => 17,  28 => 6,  21 => 1,);
    }
}
/* /***/
/*  * @author   Vitaliy Demidov   <zend@i.ua>*/
/*  *//**/
/* function UniqueEntity(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/*     var cache, url, cacheindex = 'm' + value + '';*/
/*     if (params && params.fields && field.nodeName) {*/
/*         //TODO This part is compartible only with jquery*/
/*         cache = $(field).data('_uniqueEntityCache');*/
/*         if (!cache) cache = {};*/
/*         if (cache[cacheindex] != undefined) {*/
/*             if (cache[cacheindex] === false) {*/
/*                 return getComputeMessage(params.message);*/
/*             } else return true;*/
/*         }*/
/* {% block check_uniquity_async_request %}*/
/*         $.ajax({*/
/*             type: 'POST',*/
/*             url: '{{ path('apy_js_form_validation_unique_entity', {'_format': 'json', '_locale': app.request.locale}) }}',*/
/*             data: {*/
/*                 'entity': params.entity,*/
/*                 'target': params.fields,*/
/*                 'value': value,*/
/*                 'ignore': params.identifier_field_id ? self.id(params.identifier_field_id).value : ''*/
/*             },*/
/*             success: function(data, textStatus) {*/
/* {% block check_uniquity_handler %}*/
/*                 if (data.status && data.status == 'ok') {*/
/*                     cache[cacheindex] = data.isUnique;*/
/*                     $(field).data('_uniqueEntityCache', cache);*/
/*                     if (!cache[cacheindex]) {*/
/*                         checkError($(field).attr('id'), UniqueEntity, params);*/
/*                     }*/
/*                 }*/
/* {% endblock %}*/
/*             },*/
/*             dataType: 'json'*/
/*        });*/
/* {% endblock %}*/
/*     }*/
/*     return true;*/
/* }*/
/* */
