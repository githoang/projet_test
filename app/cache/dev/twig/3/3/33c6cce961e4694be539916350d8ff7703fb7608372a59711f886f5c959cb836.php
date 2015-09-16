<?php

/* OroInstallerBundle:Process/Step:configure.html.twig */
class __TwigTemplate_ec5b96989acb7082381982bd802448818a3dbb6df9f9c2a3be84f4f1f2801a47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:configure.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:configure.html.twig", 2);
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
        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "OroInstallerBundle:Form:fields.html.twig");
        // line 5
        $context["step"] = "configure";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.configure.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"page-title\">
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.configure.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well horizontal-form\">
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "configure")), "html", null, true);
        echo "\" method=\"post\">
        <div class=\"validation-error\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "database", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "database", array()), 'widget');
        echo "
            </div>
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mailer", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mailer", array()), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "system", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "system", array()), 'widget');
        echo "
            </div>
            <div class=\"box\">
                <h3 class=\"sub-title\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "websocket", array()), "vars", array()), "label", array())), "html", null, true);
        echo "</h3>

                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "websocket", array()), 'widget');
        echo "
            </div>

            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        </div>

        <div class=\"button-set\">
            <div class=\"pull-right\">
                <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array()), "html", null, true);
        echo "/install.php\" class=\"button back\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
                <button class=\"primary button next\" type=\"submit\"><span>";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.next"), "html", null, true);
        echo "</span></button>
            </div>
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:configure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  135 => 49,  127 => 44,  121 => 41,  116 => 39,  110 => 36,  105 => 34,  97 => 29,  92 => 27,  86 => 24,  81 => 22,  73 => 17,  68 => 15,  61 => 11,  58 => 10,  55 => 9,  47 => 7,  43 => 1,  41 => 5,  39 => 3,  33 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends 'OroInstallerBundle::layout.html.twig' %}*/
/* {% use 'OroInstallerBundle::progress.html.twig' %}*/
/* {% form_theme form with 'OroInstallerBundle:Form:fields.html.twig' %}*/
/* */
/* {% set step = 'configure' %}*/
/* */
/* {% block title %}{{ 'process.step.configure.header'|trans }} - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-title">*/
/*     <h2>{{ 'process.step.configure.header'|trans }}</h2>*/
/* </div>*/
/* */
/* <div class="well horizontal-form">*/
/*     <form action="{{ path('sylius_flow_forward', { scenarioAlias: 'oro_installer', stepName: 'configure'}) }}" method="post">*/
/*         <div class="validation-error">*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <h3 class="sub-title">{{ form.database.vars.label|trans }}</h3>*/
/* */
/*                 {{ form_widget(form.database) }}*/
/*             </div>*/
/*             <div class="box">*/
/*                 <h3 class="sub-title">{{ form.mailer.vars.label|trans }}</h3>*/
/* */
/*                 {{ form_widget(form.mailer) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="box">*/
/*                 <h3 class="sub-title">{{ form.system.vars.label|trans }}</h3>*/
/* */
/*                 {{ form_widget(form.system) }}*/
/*             </div>*/
/*             <div class="box">*/
/*                 <h3 class="sub-title">{{ form.websocket.vars.label|trans }}</h3>*/
/* */
/*                 {{ form_widget(form.websocket) }}*/
/*             </div>*/
/* */
/*             {{ form_rest(form) }}*/
/*         </div>*/
/* */
/*         <div class="button-set">*/
/*             <div class="pull-right">*/
/*                 <a href="{{ app.request.basePath }}/install.php" class="button back"><span>{{ 'process.button.back'|trans }}</span></a>*/
/*                 <button class="primary button next" type="submit"><span>{{ 'process.button.next'|trans }}</span></button>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* </div>*/
/* {% endblock %}*/
/* */
