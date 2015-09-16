<?php

/* OroUserBundle:Group:index.html.twig */
class __TwigTemplate_70b441c99dc945b59d6b426691f22194bf5f1de64b9e644b79c14fa1541b9f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "OroUserBundle:Group:index.html.twig", 1);
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
        $context["dataGrid"] = $this->loadTemplate("PimDataGridBundle::macros.html.twig", "OroUserBundle:Group:index.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    ";
        // line 6
        $context["title"] = $this->env->getExtension('translator')->trans("user-group.overview");
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "createBtn", array(0 => "user-group", 1 => $this->env->getExtension('routing')->getPath("oro_user_group_create"), 2 => null, 3 => "oro_user_group_create"), "method"), "html", null, true);
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"))), "method"), "html", null, true);
        echo "

    ";
        // line 14
        echo $context["dataGrid"]->getrenderGrid("pim-user-group-grid", array());
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  53 => 12,  50 => 11,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* {% import 'PimDataGridBundle::macros.html.twig' as dataGrid %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set title = 'user-group.overview'|trans %}*/
/* */
/*     {% set buttons %}*/
/*         {{ elements.createBtn('user-group', path('oro_user_group_create'), null, 'oro_user_group_create') }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons) }}*/
/* */
/*     {{ dataGrid.renderGrid('pim-user-group-grid', { }) }}*/
/* */
/* {% endblock %}*/
/* */
