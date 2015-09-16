<?php

/* PimEnrichBundle:MassEditAction:choose.html.twig */
class __TwigTemplate_6dcc9f8795da94c91c9bc32e86dc3b54666ce6eb7e137cd7d69e8c7382b6de8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle:MassEditAction:layout.html.twig", "PimEnrichBundle:MassEditAction:choose.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'head_script_component' => array($this, 'block_head_script_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle:MassEditAction:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["title"] = $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".page_title"));
        // line 5
        echo "    ";
        $context["subtitle"] = $this->env->getExtension('translator')->transchoice((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".page_subtitle"), (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")));
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => null, 2 => (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle"))), "method"), "html", null, true);
        echo "

    ";
        // line 8
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    <div class=\"row\">
        <div class=\"offset1\">
            <h3>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h3>
            <h4>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["subtitle"]) ? $context["subtitle"] : $this->getContext($context, "subtitle")), "html", null, true);
        echo "</h4>
        </div>
    </div>

    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("pim_enrich_mass_edit_action_choose", (isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")))));
        echo "

        <div class=\"row\">
            <div class=\"offset1\">
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operationAlias", array()), 'widget');
        echo "
            </div>
        </div>

        <div class=\"row buffer-top\">
            <div class=\"offset1\">
                ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "btn.cancel", 1 => $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "performedOperationRedirectionRoute", array()))), "method"), "html", null, true);
        echo "
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(0 => "btn.next"), "method"), "html", null, true);
        echo "
            </div>
        </div>

    ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    // line 35
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context["currentStep"] = 2;
        // line 37
        echo "    ";
        $this->displayParentBlock("head_script_component", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction:choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 37,  98 => 36,  95 => 35,  89 => 32,  82 => 28,  78 => 27,  69 => 21,  62 => 17,  55 => 13,  51 => 12,  44 => 8,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle:MassEditAction:layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {% set title = ('pim_enrich.mass_edit_action.' ~ operator.name ~  '.page_title')|trans %}*/
/*     {% set subtitle = ('pim_enrich.mass_edit_action.' ~ operator.name ~ '.page_subtitle')|transchoice(count) %}*/
/*     {{ elements.page_header(title, null, subtitle) }}*/
/* */
/*     {{ parent() }}*/
/* */
/*     <div class="row">*/
/*         <div class="offset1">*/
/*             <h3>{{ title }}</h3>*/
/*             <h4>{{ subtitle }}</h4>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_start(form, { 'action': path('pim_enrich_mass_edit_action_choose', queryParams ) }) }}*/
/* */
/*         <div class="row">*/
/*             <div class="offset1">*/
/*                 {{ form_widget(form.operationAlias) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row buffer-top">*/
/*             <div class="offset1">*/
/*                 {{ elements.link('btn.cancel', path(operator.performedOperationRedirectionRoute)) }}*/
/*                 {{ elements.submitBtn('btn.next') }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/*     {% set currentStep = 2 %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
