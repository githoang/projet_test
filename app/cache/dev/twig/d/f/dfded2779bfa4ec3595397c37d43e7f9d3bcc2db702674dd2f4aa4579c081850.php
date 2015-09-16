<?php

/* PimImportExportBundle:JobProfile:edit.html.twig */
class __TwigTemplate_e1a6602de6a689abd2f5cc37cefc129120b0c4fbf76315928d9119833fde6d54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimImportExportBundle:JobProfile:edit.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "PimImportExportBundle:JobProfile:edit.html.twig", 2);
        // line 3
        $context["title"] = ((((($this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".edit")) . " - ") . $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "label", array())) . " [") . $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "code", array())) . "]");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    ";
        // line 7
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" =>         // line 9
(isset($context["actionRoute"]) ? $context["actionRoute"] : $this->getContext($context, "actionRoute")), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans((        // line 12
(isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".title")))))));
        // line 14
        echo "

        ";
        // line 16
        ob_start();
        // line 17
        echo "            <ul class=\"inline\">
                <li>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Job"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "job", array()), "name", array())), "html", null, true);
        echo "</li>
                <li>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connector"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "connector", array())), "html", null, true);
        echo "</li>
            </ul>
        ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
        ";
        // line 23
        ob_start();
        // line 24
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => (isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute"))), "method"), "html", null, true);
        echo "
            ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "deleteLink", array(0 => (isset($context["removeRoute"]) ? $context["removeRoute"] : $this->getContext($context, "removeRoute")), 1 => (isset($context["removeAcl"]) ? $context["removeAcl"] : $this->getContext($context, "removeAcl")), 2 => (isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute")), 3 => (isset($context["removeMessage"]) ? $context["removeMessage"] : $this->getContext($context, "removeMessage")), 4 => (isset($context["removeSuccessMessage"]) ? $context["removeSuccessMessage"] : $this->getContext($context, "removeSuccessMessage"))), "method"), "html", null, true);
        echo "
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array()), "html", null, true);
        echo "
        ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left")), 4 => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "updated", array(0 => $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())), "method")), "method"), "html", null, true);
        echo "

        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method"), "html", null, true);
        echo "

        ";
        // line 33
        $context["navbarTabs"] = array(0 => "General properties");
        // line 34
        echo "        ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted((("pim_importexport_" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array())) . "_profile_history"))) {
            // line 35
            echo "            ";
            $context["navbarTabs"] = twig_array_merge((isset($context["navbarTabs"]) ? $context["navbarTabs"] : $this->getContext($context, "navbarTabs")), array(0 => "History"));
            // line 36
            echo "        ";
        }
        // line 37
        echo "
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_navbar", array(0 => (isset($context["navbarTabs"]) ? $context["navbarTabs"] : $this->getContext($context, "navbarTabs")), 1 => ""), "method"), "html", null, true);
        echo "

        <div class=\"row-fluid tab-content\">
            <div class=\"tab-pane buffer-top active\" id=\"general-properties\">

                ";
        // line 43
        ob_start();
        // line 44
        echo "                    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
                ";
        $context["properties"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 47
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.properties" => (isset($context["properties"]) ? $context["properties"] : $this->getContext($context, "properties"))), 1 => 1), "method"), "html", null, true);
        echo "

                ";
        // line 49
        ob_start();
        // line 50
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job", array()), "steps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 51
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["step"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 52
                echo "                            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                ";
        $context["globalSettings"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 56
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.global_settings" => (isset($context["globalSettings"]) ? $context["globalSettings"] : $this->getContext($context, "globalSettings"))), 1 => 2), "method"), "html", null, true);
        echo "
            </div>

            ";
        // line 59
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted((("pim_importexport_" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array())) . "_profile_history"))) {
            // line 60
            echo "                <div class=\"tab-pane\" id=\"history\">
                    ";
            // line 61
            echo $context["dataGrid"]->getrenderHistoryGrid($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()));
            echo "
                </div>
            ";
        }
        // line 64
        echo "        </div>

    ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 66,  190 => 64,  184 => 61,  181 => 60,  179 => 59,  172 => 56,  169 => 55,  163 => 54,  154 => 52,  149 => 51,  144 => 50,  142 => 49,  136 => 47,  131 => 45,  126 => 44,  124 => 43,  116 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  102 => 33,  97 => 31,  92 => 29,  89 => 28,  84 => 26,  80 => 25,  75 => 24,  73 => 23,  70 => 22,  62 => 19,  56 => 18,  53 => 17,  51 => 16,  47 => 14,  45 => 12,  44 => 9,  43 => 8,  39 => 7,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {% set title =  (entityName ~ '.edit')|trans ~ ' - ' ~ jobInstance.label ~ ' [' ~ jobInstance.code ~ ']'  %}*/
/* */
/* {% block content %}*/
/* */
/*     {{ JSFV(form) }}*/
/*     {{ form_start(form, {*/
/*         'action': actionRoute,*/
/*         'attr': {*/
/*             'data-updated-title': 'confirmation.leave'|trans,*/
/*             'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': (entityName ~ '.title')|trans })*/
/*         }*/
/*     }) }}*/
/* */
/*         {% set left %}*/
/*             <ul class="inline">*/
/*                 <li>{{ 'Job'|trans }}: {{ jobInstance.job.name|trans }}</li>*/
/*                 <li>{{ 'Connector'|trans }}: {{ jobInstance.connector|trans }}</li>*/
/*             </ul>*/
/*         {% endset %}*/
/* */
/*         {% set buttons %}*/
/*             {{ elements.backLink(indexRoute) }}*/
/*             {{ elements.deleteLink(removeRoute, removeAcl, indexRoute, removeMessage, removeSuccessMessage) }}*/
/*             {{ elements.submitBtn }}*/
/*         {% endset %}*/
/* */
/*         {{ elements.page_header(title, buttons, null, left, elements.updated(form.vars.id)) }}*/
/* */
/*         {{ elements.form_errors(form) }}*/
/* */
/*         {% set navbarTabs = ['General properties'] %}*/
/*         {% if resource_granted('pim_importexport_' ~ form.vars.value.type ~ '_profile_history') %}*/
/*             {% set navbarTabs = navbarTabs|merge(['History']) %}*/
/*         {% endif %}*/
/* */
/*         {{ elements.form_navbar(navbarTabs, '') }}*/
/* */
/*         <div class="row-fluid tab-content">*/
/*             <div class="tab-pane buffer-top active" id="general-properties">*/
/* */
/*                 {% set properties %}*/
/*                     {{ form_row(form.code) }}*/
/*                     {{ form_row(form.label) }}*/
/*                 {% endset %}*/
/*                 {{ elements.accordion({ 'pane.accordion.properties': properties }, 1) }}*/
/* */
/*                 {% set globalSettings %}*/
/*                     {% for step in form.job.steps %}*/
/*                         {% for child in step.children %}*/
/*                             {{ form_widget(child) }}*/
/*                         {% endfor %}*/
/*                     {% endfor %}*/
/*                 {% endset %}*/
/*                 {{ elements.accordion({ 'pane.accordion.global_settings': globalSettings }, 2) }}*/
/*             </div>*/
/* */
/*             {% if resource_granted('pim_importexport_' ~ form.vars.value.type ~ '_profile_history') %}*/
/*                 <div class="tab-pane" id="history">*/
/*                     {{ dataGrid.renderHistoryGrid(form.vars.value) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
