<?php

/* PimEnrichBundle:MassEditAction:layout.html.twig */
class __TwigTemplate_d72633a7ab6212949a8e70f7f2caea6d119a2c71c408488bd4da653cb221234d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:MassEditAction:layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'head_script_component' => array($this, 'block_head_script_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row wizard-header\">
        <ul class=\"wizard\">
            ";
        // line 6
        ob_start();
        // line 7
        echo "            <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".steps.first")), "html", null, true);
        echo "</li>
            <li>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".steps.second")), "html", null, true);
        echo "</li>
            <li>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".steps.third")), "html", null, true);
        echo "</li>
            <li>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((("pim_enrich.mass_edit_action." . $this->getAttribute((isset($context["operator"]) ? $context["operator"] : $this->getContext($context, "operator")), "name", array())) . ".steps.fourth")), "html", null, true);
        echo "</li>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 12
        echo "        </ul>
    </div>
";
    }

    // line 16
    public function block_head_script_component($context, array $blocks = array())
    {
        // line 17
        echo "
    <script type=\"text/javascript\" charset=\"utf-8\">
        require(
            ['jquery', 'jquery.wizard'],
            function(\$) {
                \$(function() {
                    \$('.wizard').wizard({
                        currentStep: ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["currentStep"]) ? $context["currentStep"] : $this->getContext($context, "currentStep")), "html", null, true);
        echo "
                    });
                });
            }
        );
    </script>

";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  65 => 17,  62 => 16,  56 => 12,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <div class="row wizard-header">*/
/*         <ul class="wizard">*/
/*             {% spaceless %}*/
/*             <li>{{ ('pim_enrich.mass_edit_action.' ~ operator.name ~  '.steps.first')|trans }}</li>*/
/*             <li>{{ ('pim_enrich.mass_edit_action.' ~ operator.name ~  '.steps.second')|trans }}</li>*/
/*             <li>{{ ('pim_enrich.mass_edit_action.' ~ operator.name ~  '.steps.third')|trans }}</li>*/
/*             <li>{{ ('pim_enrich.mass_edit_action.' ~ operator.name ~  '.steps.fourth')|trans }}</li>*/
/*             {% endspaceless %}*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block head_script_component %}*/
/* */
/*     <script type="text/javascript" charset="utf-8">*/
/*         require(*/
/*             ['jquery', 'jquery.wizard'],*/
/*             function($) {*/
/*                 $(function() {*/
/*                     $('.wizard').wizard({*/
/*                         currentStep: {{ currentStep }}*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
