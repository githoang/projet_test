<?php

/* OroInstallerBundle:Process/Step:setup.html.twig */
class __TwigTemplate_7da2417ce2453d70fc20f94135ee1836d69115d4c3781f96a9451f583cd86826 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:setup.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:setup.html.twig", 2);
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
        $context["step"] = "setup";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.setup.header"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.setup.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well horizontal-form\">
    <form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "setup")), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"validation-error\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "loadFixtures", array()), 'row');
        echo "
            </div>

            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>

        <div class=\"button-set\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_display", array("scenarioAlias" => "oro_installer", "stepName" => "configure")), "html", null, true);
        echo "\" class=\"button back\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
                <button class=\"primary button icon-settings\" type=\"submit\"><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.install"), "html", null, true);
        echo "</span></button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  118 => 36,  110 => 31,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  79 => 21,  71 => 16,  66 => 14,  59 => 10,  56 => 9,  53 => 8,  45 => 6,  41 => 1,  39 => 4,  33 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends 'OroInstallerBundle::layout.html.twig' %}*/
/* {% use 'OroInstallerBundle::progress.html.twig' %}*/
/* */
/* {% set step = 'setup' %}*/
/* */
/* {% block title %}{{ 'process.step.setup.header'|trans }} - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-title">*/
/*     <h2>{{ 'process.step.setup.header'|trans }}</h2>*/
/* </div>*/
/* */
/* <div class="well horizontal-form">*/
/*     <form action="{{ path('sylius_flow_forward', { scenarioAlias: 'oro_installer', stepName: 'setup' }) }}" method="post">*/
/*         <div class="validation-error">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <h3 class="sub-title">{{ form.vars.label|trans }}</h3>*/
/* */
/*                 {{ form_row(form.username) }}*/
/*                 {{ form_row(form.plainPassword) }}*/
/*                 {{ form_row(form.email) }}*/
/*                 {{ form_row(form.firstName) }}*/
/*                 {{ form_row(form.lastName) }}*/
/*                 {{ form_row(form.loadFixtures) }}*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/* */
/*         <div class="button-set">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ path('sylius_flow_display', { scenarioAlias: 'oro_installer', stepName: 'configure' }) }}" class="button back"><span>{{ 'process.button.back'|trans }}</span></a>*/
/*                 <button class="primary button icon-settings" type="submit"><span>{{ 'process.button.install'|trans }}</span></button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
