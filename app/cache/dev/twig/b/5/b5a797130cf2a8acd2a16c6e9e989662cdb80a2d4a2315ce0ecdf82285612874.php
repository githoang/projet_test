<?php

/* APYJsFormValidationBundle:Constraints:LanguageValidator.js.twig */
class __TwigTemplate_e1fe991258041ed18ddf51968c5ec85d8811c082a4cdb99315e05ca5430abe22 extends Twig_Template
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
        echo "function Language(field, params)
{
    var value = field && field.nodeName ? ";
        // line 3
        echo $this->env->getExtension('JsFormValidation')->getJsFormElementValue("field");
        echo " : field;

    if (isNotDefined(value)) {
        return true;
    }

    value = String(value);

    var languages = ";
        // line 11
        echo $this->env->getExtension('JsFormValidation')->getLanguages();
        echo ";

    for (key in languages) {
        if (languages[key] == value) {
            return true;
        }
    }

    return getComputeMessage(params.message);
}";
    }

    public function getTemplateName()
    {
        return "APYJsFormValidationBundle:Constraints:LanguageValidator.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  23 => 3,  19 => 1,);
    }
}
/* function Language(field, params)*/
/* {*/
/*     var value = field && field.nodeName ? {{ getJsFormElementValue('field') }} : field;*/
/* */
/*     if (isNotDefined(value)) {*/
/*         return true;*/
/*     }*/
/* */
/*     value = String(value);*/
/* */
/*     var languages = {{ getLanguages()|raw }};*/
/* */
/*     for (key in languages) {*/
/*         if (languages[key] == value) {*/
/*             return true;*/
/*         }*/
/*     }*/
/* */
/*     return getComputeMessage(params.message);*/
/* }*/
