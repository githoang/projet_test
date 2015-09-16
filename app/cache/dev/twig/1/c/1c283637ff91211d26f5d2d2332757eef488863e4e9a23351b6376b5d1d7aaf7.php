<?php

/* A2lixTranslationFormBundle::macros.html.twig */
class __TwigTemplate_51762259f893e46eca71144b47afa9f19e260479e2878766784954304d3e1d19 extends Twig_Template
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
        // line 9
        echo "
";
        // line 37
        echo "
";
    }

    // line 10
    public function getpartialTranslations($__form__ = null, $__fieldsNames__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 14
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 15
                echo "
            <li ";
                // line 16
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo "\">
                   ";
                // line 18
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 26
                echo "            ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 27
                echo "
            <div class=\"a2lix_translationsFields-";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "active";
                }
                echo "\">
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    if (twig_in_filter($this->getAttribute($this->getAttribute($context["translationsField"], "vars", array()), "name", array()), (isset($context["fieldsNames"]) ? $context["fieldsNames"] : $this->getContext($context, "fieldsNames")))) {
                        // line 30
                        echo "                ";
                        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsField"], 'widget');
                        echo "
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 38
    public function getpartialTranslationsGedmo($__form__ = null, $__fieldsNames__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "fieldsNames" => $__fieldsNames__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 39
            echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 42
                echo "            ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
                // line 43
                echo "
            ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 45
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 46
                    echo "
                <li ";
                    // line 47
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                    <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 48
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo "\">
                        ";
                    // line 49
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                    echo " ";
                    if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                        echo "[Default]";
                    }
                    // line 50
                    echo "                    </a>
                </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 58
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 59
                    echo "                ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 60
                    echo "
                <div class=\"a2lix_translationsFields-";
                    // line 61
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "active";
                    }
                    echo "\">
                ";
                    // line 62
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["translationsFields"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                        if (twig_in_filter($this->getAttribute($this->getAttribute($context["translationsField"], "vars", array()), "name", array()), (isset($context["fieldsNames"]) ? $context["fieldsNames"] : $this->getContext($context, "fieldsNames")))) {
                            // line 63
                            echo "                    ";
                            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsField"], 'widget');
                            echo "
                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 68,  249 => 67,  242 => 65,  232 => 63,  227 => 62,  219 => 61,  216 => 60,  213 => 59,  208 => 58,  204 => 57,  199 => 54,  193 => 53,  185 => 50,  179 => 49,  175 => 48,  169 => 47,  166 => 46,  163 => 45,  159 => 44,  156 => 43,  153 => 42,  149 => 41,  145 => 39,  132 => 38,  119 => 34,  112 => 32,  102 => 30,  97 => 29,  89 => 28,  86 => 27,  83 => 26,  79 => 25,  74 => 22,  64 => 18,  60 => 17,  54 => 16,  51 => 15,  48 => 14,  44 => 13,  40 => 11,  27 => 10,  22 => 37,  19 => 9,);
    }
}
/* {#*/
/* Example:*/
/* */
/* {% import "A2lixTranslationFormBundle::macros.html.twig" as a2lixTranslations %}*/
/* */
/* {{ a2lixTranslations.partialTranslations(editForm.translations, ['title','description']) }}*/
/* {{ a2lixTranslations.partialTranslations(editForm.translations, ['url']) }}*/
/* #}*/
/* */
/* {% macro partialTranslations(form, fieldsNames) %}*/
/*     <div class="a2lix_translations tabbable">*/
/*         <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*         {% for translationsFields in form %}*/
/*             {% set locale = translationsFields.vars.name %}*/
/* */
/*             <li {% if app.request.locale == locale %}class="active"{% endif %}>*/
/*                 <a href="javascript:void(0)" data-toggle="tab" data-target=".a2lix_translationsFields-{{ locale }}">*/
/*                    {{ locale|capitalize }}*/
/*                 </a>*/
/*             </li>*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*         <div class="a2lix_translationsFields tab-content">*/
/*         {% for translationsFields in form %}*/
/*             {% set locale = translationsFields.vars.name %}*/
/* */
/*             <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}">*/
/*             {% for translationsField in translationsFields if translationsField.vars.name in fieldsNames %}*/
/*                 {{ form_widget(translationsField) }}*/
/*             {% endfor %}*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro partialTranslationsGedmo(form, fieldsNames) %}*/
/*     <div class="a2lix_translations tabbable">*/
/*         <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*         {% for translationsLocales in form %}*/
/*             {% set isDefaultLocale = 'defaultLocale' == translationsLocales.vars.name %}*/
/* */
/*             {% for translationsFields in translationsLocales %}*/
/*                 {% set locale = translationsFields.vars.name %}*/
/* */
/*                 <li {% if app.request.locale == locale %}class="active"{% endif %}>*/
/*                     <a href="javascript:void(0)" data-toggle="tab" data-target=".a2lix_translationsFields-{{ locale }}">*/
/*                         {{ locale|capitalize }} {% if isDefaultLocale %}[Default]{% endif %}*/
/*                     </a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         </ul>*/
/* */
/*         <div class="a2lix_translationsFields tab-content">*/
/*         {% for translationsLocales in form %}*/
/*             {% for translationsFields in translationsLocales %}*/
/*                 {% set locale = translationsFields.vars.name %}*/
/* */
/*                 <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}">*/
/*                 {% for translationsField in translationsFields if translationsField.vars.name in fieldsNames %}*/
/*                     {{ form_widget(translationsField) }}*/
/*                 {% endfor %}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
