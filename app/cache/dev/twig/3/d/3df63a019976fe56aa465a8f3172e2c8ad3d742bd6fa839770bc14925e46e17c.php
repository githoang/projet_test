<?php

/* OroInstallerBundle:Process/Step:final.html.twig */
class __TwigTemplate_74491dd19280973a9267a3ef40d27f3375e4fa3b091562ee4fecaa7b7f9e7462 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:final.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:final.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroInstallerBundle::progress.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'content' => array($this, 'block_content'),
                'javascript' => array($this, 'block_javascript'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "OroInstallerBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["step"] = "final";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.final.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"page-title\">
    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.final.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well\">
    <p>";
        // line 14
        echo $this->env->getExtension('translator')->trans("process.step.final.content");
        echo "</p>
</div>

<div class=\"button-set\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("oro_default");
        echo "\" class=\"button primary\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.finish"), "html", null, true);
        echo "</a>
</div>
";
    }

    // line 22
    public function block_javascript($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$.get('";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_display", array("scenarioAlias" => "oro_installer", "stepName" => "schema")), "html", null, true);
        echo "?action=cache');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  86 => 23,  83 => 22,  74 => 18,  67 => 14,  60 => 10,  57 => 9,  54 => 8,  46 => 6,  42 => 1,  40 => 4,  34 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends 'OroInstallerBundle::layout.html.twig' %}*/
/* {% use 'OroInstallerBundle::progress.html.twig' %}*/
/* */
/* {% set step = 'final' %}*/
/* */
/* {% block title %}{{ 'process.step.final.header'|trans }} - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-title">*/
/*     <h2>{{ 'process.step.final.header'|trans }}</h2>*/
/* </div>*/
/* */
/* <div class="well">*/
/*     <p>{{ 'process.step.final.content'|trans|raw }}</p>*/
/* </div>*/
/* */
/* <div class="button-set">*/
/*     <a href="{{ path('oro_default') }}" class="button primary" target="_blank">{{ 'process.button.finish'|trans }}</a>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $.get('{{ path('sylius_flow_display', { scenarioAlias: 'oro_installer', stepName: 'schema' }) }}?action=cache');*/
/*         });*/
/*     </script>*/
/* {% endblock javascript %}*/
