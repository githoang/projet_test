<?php

/* A2lixTranslationFormBundle::default.html.twig */
class __TwigTemplate_84e1166645da49027b774e0cc2b8a6d207d1a3cc7dd048155f364d671e9412fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translations_gedmo_widget' => array($this, 'block_a2lix_translations_gedmo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 26
        echo "


";
        // line 29
        $this->displayBlock('a2lix_translations_gedmo_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
    }

    // line 29
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "simple_way", array())) {
            // line 31
            echo "        ";
            $this->displayBlock("a2lix_translations_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 33
            echo "        <div class=\"a2lix_translations tabbable\">
            <ul class=\"a2lix_translationsLocales nav nav-tabs\">
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 36
                echo "                ";
                $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
                // line 37
                echo "
                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 39
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 40
                    echo "
                    <li ";
                    // line 41
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                        <a href=\"javascript:void(0)\" data-toggle=\"tab\" data-target=\".a2lix_translationsFields-";
                    // line 42
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo "\">
                            ";
                    // line 43
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                    echo " ";
                    if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                        echo "[Default]";
                    }
                    // line 44
                    echo "                        </a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </ul>

            <div class=\"a2lix_translationsFields tab-content\">
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                    // line 53
                    echo "                    ";
                    $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                    // line 54
                    echo "
                    <div class=\"a2lix_translationsFields-";
                    // line 55
                    echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                    echo " tab-pane ";
                    if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                        echo "active";
                    }
                    echo "\">
                        ";
                    // line 56
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "A2lixTranslationFormBundle::default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  216 => 60,  210 => 59,  201 => 56,  193 => 55,  190 => 54,  187 => 53,  182 => 52,  178 => 51,  173 => 48,  167 => 47,  159 => 44,  153 => 43,  149 => 42,  143 => 41,  140 => 40,  137 => 39,  133 => 38,  130 => 37,  127 => 36,  123 => 35,  119 => 33,  113 => 31,  110 => 30,  107 => 29,  101 => 23,  92 => 20,  84 => 19,  81 => 18,  78 => 17,  74 => 16,  69 => 13,  59 => 9,  55 => 8,  49 => 7,  46 => 6,  43 => 5,  39 => 4,  35 => 2,  32 => 1,  28 => 29,  23 => 26,  21 => 1,);
    }
}
/* {% block a2lix_translations_widget %}*/
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
/*                 {{ form_widget(translationsFields) }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block a2lix_translations_gedmo_widget %}*/
/*     {% if form.vars.simple_way %}*/
/*         {{ block('a2lix_translations_widget') }}*/
/*     {% else %}*/
/*         <div class="a2lix_translations tabbable">*/
/*             <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*             {% for translationsLocales in form %}*/
/*                 {% set isDefaultLocale = 'defaultLocale' == translationsLocales.vars.name %}*/
/* */
/*                 {% for translationsFields in translationsLocales %}*/
/*                     {% set locale = translationsFields.vars.name %}*/
/* */
/*                     <li {% if app.request.locale == locale %}class="active"{% endif %}>*/
/*                         <a href="javascript:void(0)" data-toggle="tab" data-target=".a2lix_translationsFields-{{ locale }}">*/
/*                             {{ locale|capitalize }} {% if isDefaultLocale %}[Default]{% endif %}*/
/*                         </a>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*             </ul>*/
/* */
/*             <div class="a2lix_translationsFields tab-content">*/
/*             {% for translationsLocales in form %}*/
/*                 {% for translationsFields in translationsLocales %}*/
/*                     {% set locale = translationsFields.vars.name %}*/
/* */
/*                     <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if app.request.locale == locale %}active{% endif %}">*/
/*                         {{ form_widget(translationsFields) }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
