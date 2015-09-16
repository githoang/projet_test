<?php

/* OroInstallerBundle:Process/Step:installation.html.twig */
class __TwigTemplate_d8ed0f28a920898a1c85ca5e2b7843bc641a518a25a3cc136cc55312a8df9e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroInstallerBundle::layout.html.twig", "OroInstallerBundle:Process/Step:installation.html.twig", 1);
        $_trait_0 = $this->loadTemplate("OroInstallerBundle::progress.html.twig", "OroInstallerBundle:Process/Step:installation.html.twig", 2);
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
        list($context["step"], $context["steps"]) =         array("administration", array(0 => "search", 1 => "navigation", 2 => "js-routing", 3 => "localization", 4 => "assets", 5 => "assetic", 6 => "assetic-oro", 7 => "translation", 8 => "requirejs", 9 => "finish"));
        // line 6
        if ((isset($context["loadFixtures"]) ? $context["loadFixtures"] : $this->getContext($context, "loadFixtures"))) {
            // line 7
            $context["steps"] = twig_array_merge(array(0 => "fixtures"), (isset($context["steps"]) ? $context["steps"] : $this->getContext($context, "steps")));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.installation.header"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"page-title\">
    <h2>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.step.installation.header"), "html", null, true);
        echo "</h2>
</div>

<div class=\"well\">
    <table class=\"table\">
         <col width=\"75%\" valign=\"top\">
         <col width=\"25%\" valign=\"top\">
         <thead>
             <tr>
                 <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.operation"), "html", null, true);
        echo "</th>
                 <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.status"), "html", null, true);
        echo "</th>
             </tr>
         </thead>
         <tbody>
             ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["steps"]) ? $context["steps"] : $this->getContext($context, "steps")));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 29
            echo "             <tr>
                 <td><span id=\"step-";
            // line 30
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "\"></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("process.step.installation." . $context["step"])), "html", null, true);
            echo "</td>
                 <td>&nbsp;</td>
             </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "         </tbody>
    </table>

    <div class=\"button-set\">
        <div class=\"pull-right\">
            <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_display", array("scenarioAlias" => "oro_installer", "stepName" => "setup")), "html", null, true);
        echo "\" class=\"button back\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.back"), "html", null, true);
        echo "</span></a>
            <a href=\"javascript: void(0)\" class=\"button next primary disabled\">
                <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("process.button.next"), "html", null, true);
        echo "</span>
            </a>
        </div>
    </div>
</div>
";
    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            ajaxQueue(
                [";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["steps"]) ? $context["steps"] : $this->getContext($context, "steps")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            echo "'";
            echo twig_escape_filter($this->env, $context["step"], "html", null, true);
            echo "'";
            echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sylius_flow_forward", array("scenarioAlias" => "oro_installer", "stepName" => "installation")), "html", null, true);
        echo "'
            );
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Process/Step:installation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 55,  143 => 54,  134 => 49,  131 => 48,  121 => 41,  114 => 39,  107 => 34,  95 => 30,  92 => 29,  88 => 28,  81 => 24,  77 => 23,  65 => 14,  62 => 13,  59 => 12,  51 => 10,  47 => 1,  44 => 7,  42 => 6,  40 => 4,  34 => 1,  14 => 2,  11 => 1,);
    }
}
/* {% extends 'OroInstallerBundle::layout.html.twig' %}*/
/* {% use 'OroInstallerBundle::progress.html.twig' %}*/
/* */
/* {% set step, steps = 'administration', ['search', 'navigation', 'js-routing', 'localization', 'assets', 'assetic', 'assetic-oro', 'translation', 'requirejs', 'finish'] %}*/
/* */
/* {% if loadFixtures %}*/
/*     {% set steps = ['fixtures']|merge(steps) %}*/
/* {% endif %}*/
/* */
/* {% block title %}{{ 'process.step.installation.header'|trans }} - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-title">*/
/*     <h2>{{ 'process.step.installation.header'|trans }}</h2>*/
/* </div>*/
/* */
/* <div class="well">*/
/*     <table class="table">*/
/*          <col width="75%" valign="top">*/
/*          <col width="25%" valign="top">*/
/*          <thead>*/
/*              <tr>*/
/*                  <th>{{ 'process.operation'|trans }}</th>*/
/*                  <th>{{ 'process.status'|trans }}</th>*/
/*              </tr>*/
/*          </thead>*/
/*          <tbody>*/
/*              {% for step in steps %}*/
/*              <tr>*/
/*                  <td><span id="step-{{ step }}"></span>{{ ('process.step.installation.' ~ step)|trans }}</td>*/
/*                  <td>&nbsp;</td>*/
/*              </tr>*/
/*              {% endfor %}*/
/*          </tbody>*/
/*     </table>*/
/* */
/*     <div class="button-set">*/
/*         <div class="pull-right">*/
/*             <a href="{{ path('sylius_flow_display', { scenarioAlias: 'oro_installer', stepName: 'setup' }) }}" class="button back"><span>{{ 'process.button.back'|trans }}</span></a>*/
/*             <a href="javascript: void(0)" class="button next primary disabled">*/
/*                 <span>{{ 'process.button.next'|trans }}</span>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             ajaxQueue(*/
/*                 [{% for step in steps %}'{{ step}}'{{ loop.last ? '' : ', ' }}{% endfor %}],*/
/*                 '{{ path('sylius_flow_forward', { scenarioAlias: 'oro_installer', stepName: 'installation' }) }}'*/
/*             );*/
/*         });*/
/*     </script>*/
/* {% endblock javascript %}*/
/* */
