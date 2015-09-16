<?php

/* PimEnrichBundle:Group:_group.html.twig */
class __TwigTemplate_25d5a049242804aceee9444328f2544329ebe49f44f5102457853675320a8187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:Group:_group.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimEnrichBundle:Group:_group.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%group.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 4
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath(        // line 9
(isset($context["editRoute"]) ? $context["editRoute"] : $this->getContext($context, "editRoute")), array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans(        // line 12
(isset($context["entityType"]) ? $context["entityType"] : $this->getContext($context, "entityType"))))))));
        // line 14
        echo "

        ";
        // line 16
        $context["title"] = (((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array()));
        // line 17
        echo "
        ";
        // line 18
        ob_start();
        // line 19
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => $this->env->getExtension('routing')->getPath((isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute")))), "method"), "html", null, true);
        echo "
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => $this->env->getExtension('routing')->getPath(        // line 21
(isset($context["removeRoute"]) ? $context["removeRoute"] : $this->getContext($context, "removeRoute")), array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), 1 => "pim_enrich_group_remove", 2 => $this->env->getExtension('routing')->getPath(        // line 23
(isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute"))), 3 => $this->env->getExtension('translator')->trans(        // line 24
(isset($context["confirmationMessage"]) ? $context["confirmationMessage"] : $this->getContext($context, "confirmationMessage")), array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), 4 => $this->env->getExtension('translator')->trans(        // line 25
(isset($context["removeMessage"]) ? $context["removeMessage"] : $this->getContext($context, "removeMessage")))), "method"), "html", null, true);
        // line 26
        echo "
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(), "method"), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
        ";
        // line 30
        ob_start();
        // line 31
        echo "            <ul class=\"inline\">
                <li>
                    ";
        // line 33
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("code")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "code", array()), "html", null, true);
        echo "
                </li>
                <li>
                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("type")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "code", array()), "html", null, true);
        echo "
                </li>
                ";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()), "isVariant", array())) {
            // line 39
            echo "                    ";
            ob_start();
            // line 40
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "attributes", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                // line 42
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    ";
            $context["variantGroupAttributes"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 44
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("axis")), "html", null, true);
            echo ": <span>";
            echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, (isset($context["variantGroupAttributes"]) ? $context["variantGroupAttributes"] : $this->getContext($context, "variantGroupAttributes"))), $this->env->getExtension('translator')->trans("N/A")), "html", null, true);
            echo "</span></li>
                ";
        }
        // line 46
        echo "
                ";
        // line 47
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "products", array())) > 0)) {
            // line 48
            echo "                    <li>";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("products")), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "products", array())), "html", null, true);
            echo "</li>
                ";
        }
        // line 50
        echo "           </ul>
        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 52
        echo "
        ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => $this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"))), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content group-edit\">
            ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

            ";
        // line 60
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
        </div>
        ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group:_group.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 62,  190 => 60,  185 => 58,  179 => 55,  174 => 53,  171 => 52,  167 => 50,  159 => 48,  157 => 47,  154 => 46,  146 => 44,  143 => 43,  129 => 42,  123 => 41,  105 => 40,  102 => 39,  100 => 38,  93 => 36,  85 => 33,  81 => 31,  79 => 30,  76 => 29,  71 => 27,  68 => 26,  66 => 25,  65 => 24,  64 => 23,  63 => 21,  62 => 20,  57 => 19,  55 => 18,  52 => 17,  50 => 16,  46 => 14,  44 => 12,  43 => 9,  42 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% oro_title_set({ params: { "%group.label%": form.vars.data.label } }) %}*/
/* */
/* {% block content %}*/
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': path(editRoute, { id: form.vars.value.id}),*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': entityType|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set title = title ~ ' - ' ~ form.vars.data.label %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(path(indexRoute)) }}*/
/*             {{ elements.deleteLink(*/
/*                 path(removeRoute, { id: form.vars.value.id }),*/
/*                 'pim_enrich_group_remove',*/
/*                 path(indexRoute),*/
/*                 confirmationMessage|trans({'%name%': form.vars.value.label}),*/
/*                 removeMessage|trans*/
/*             ) }}*/
/*             {{ elements.submitBtn() }}*/
/*         {% endset %}*/
/* */
/*         {% set left %}*/
/*             <ul class="inline">*/
/*                 <li>*/
/*                     {{ 'code'|trans|capitalize }}: {{ form.vars.value.code }}*/
/*                 </li>*/
/*                 <li>*/
/*                     {{ 'type'|trans|capitalize }}: {{ form.vars.value.type.code }}*/
/*                 </li>*/
/*                 {% if form.vars.value.type.isVariant %}*/
/*                     {% set variantGroupAttributes %}*/
/*                         {% for attribute in form.vars.value.attributes %}*/
/*                             {{ attribute }}{% if not loop.last %},{% endif %}*/
/*                         {% endfor %}*/
/*                     {% endset %}*/
/*                     <li>{{ 'axis'|trans|capitalize }}: <span>{{ variantGroupAttributes|capitalize|default('N/A'|trans) }}</span></li>*/
/*                 {% endif %}*/
/* */
/*                 {% if form.vars.data.products|length > 0 %}*/
/*                     <li>{{ 'products'|trans|capitalize }}: {{ form.vars.data.products|length }}</li>*/
/*                 {% endif %}*/
/*            </ul>*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, left, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*         <div class="row-fluid tab-content group-edit">*/
/*             {{ elements.form_errors(form) }}*/
/* */
/*             {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
