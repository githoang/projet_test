<?php

/* OroUserBundle::macros.html.twig */
class __TwigTemplate_09eceea71b8994bded399461679e8b6a5ba61e8bb0680ffdab312189940a7525 extends Twig_Template
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
    }

    // line 1
    public function getcollection_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro\">
            ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 13
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
                ";
                // line 14
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
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
        return "OroUserBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 17,  81 => 16,  73 => 14,  68 => 13,  64 => 12,  60 => 11,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }
}
/* {% macro collection_prototype(widget) %}*/
/*     {% if 'prototype' in widget.vars|keys %}*/
/*         {% set form = widget.vars.prototype %}*/
/*         {% set name = widget.vars.prototype.vars.name %}*/
/*     {% else %}*/
/*         {% set form = widget %}*/
/*         {% set name = widget.vars.full_name %}*/
/*     {% endif %}*/
/*     <div data-content="{{ name }}">*/
/*         <div class="row-oro">*/
/*             {{ form_errors(form) }}*/
/*             {% for child in form %}*/
/*                 {{ form_errors(child) }}*/
/*                 {{ form_widget(child) }}*/
/*             {% endfor %}*/
/*             {{ form_rest(form) }}*/
/*             <button class="removeRow btn btn-action btn-link" type="button" data-related="{{ name }}">×</button>*/
/*         </div>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
