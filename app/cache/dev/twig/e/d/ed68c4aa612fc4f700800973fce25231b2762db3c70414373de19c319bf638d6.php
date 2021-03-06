<?php

/* OroUIBundle:Form:translateable.html.twig */
class __TwigTemplate_d6f4136088197715f8cccd2b87534fdc80d5dc2b2a72bdb8ba4b2aacdc3b4824 extends Twig_Template
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
        // line 27
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
                <a href=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\" data-toggle=\"tab\">
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

    // line 27
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 31
            echo "            ";
            $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
            // line 32
            echo "
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 34
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 35
                echo "
                <li ";
                // line 36
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"javascript:void(0);\" data-target=\".a2lix_translationsFields-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo "\" data-toggle=\"tab\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo " ";
                if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                    echo "[Default]";
                }
                // line 39
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 47
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 48
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 49
                echo "
                <div class=\"a2lix_translationsFields-";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 51
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:translateable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  199 => 54,  190 => 51,  182 => 50,  179 => 49,  176 => 48,  171 => 47,  167 => 46,  162 => 43,  156 => 42,  148 => 39,  142 => 38,  138 => 37,  132 => 36,  129 => 35,  126 => 34,  122 => 33,  119 => 32,  116 => 31,  112 => 30,  108 => 28,  105 => 27,  99 => 23,  90 => 20,  82 => 19,  79 => 18,  76 => 17,  72 => 16,  67 => 13,  57 => 9,  53 => 8,  47 => 7,  44 => 6,  41 => 5,  37 => 4,  33 => 2,  30 => 1,  26 => 27,  23 => 26,  21 => 1,);
    }
}
/* {% block a2lix_translations_widget %}*/
/*     <div class="a2lix_translations tabbable">*/
/*         <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*         {% for translationsFields in form %}*/
/*             {% set locale = translationsFields.vars.name %}*/
/* */
/*             <li {% if (app.request.locale == locale) %}class="active"{% endif %}>*/
/*                 <a href=".a2lix_translationsFields-{{ locale }}" data-toggle="tab">*/
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
/*             <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if (app.request.locale == locale) %}active{% endif %}">*/
/*                 {{ form_widget(translationsFields) }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block a2lix_translations_gedmo_widget %}*/
/*     <div class="a2lix_translations tabbable">*/
/*         <ul class="a2lix_translationsLocales nav nav-tabs">*/
/*         {% for translationsLocales in form %}*/
/*             {% set isDefaultLocale = ('defaultLocale' == translationsLocales.vars.name) %}*/
/* */
/*             {% for translationsFields in translationsLocales %}*/
/*                 {% set locale = translationsFields.vars.name %}*/
/* */
/*                 <li {% if (app.request.locale == locale) %}class="active"{% endif %}>*/
/*                     <a href="javascript:void(0);" data-target=".a2lix_translationsFields-{{ locale }}" data-toggle="tab">*/
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
/*                 <div class="a2lix_translationsFields-{{ locale }} tab-pane {% if (app.request.locale == locale) %}active{% endif %}">*/
/*                     {{ form_widget(translationsFields) }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
