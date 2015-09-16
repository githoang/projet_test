<?php

/* PimImportExportBundle:JobProfile:_show_form.html.twig */
class __TwigTemplate_c84befb964edb7d2c42d00c715c0dbbc1d2b2f41dc58e55e55eebc3e35c9b2ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'configuration' => array($this, 'block_configuration'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row-fluid tab-content\">
    <div class=\"tab-pane active\">
        ";
        // line 3
        $this->displayBlock('configuration', $context, $blocks);
        // line 23
        echo "    </div>
</div>
";
    }

    // line 3
    public function block_configuration($context, array $blocks = array())
    {
        // line 4
        echo "            ";
        ob_start();
        // line 5
        echo "                <table class=\"configuration\">
                    <thead></thead>
                    <tbody>
                        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "job", array()), "steps", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 9
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["step"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 10
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["child"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 11
                    echo "                                <tr>
                                    <td><b>";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($context["element"], "vars", array()), "label", array())), "html", null, true);
                    echo "</b></td>
                                    <td>";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('pim_ie_normalize_configuration')->normalizeValueFilter($this->getAttribute($this->getAttribute($context["element"], "vars", array()), "data", array()))), "html", null, true);
                    echo " ";
                    echo $this->env->getExtension('pim_ie_normalize_configuration')->getViolationsFunction((isset($context["violations"]) ? $context["violations"] : $this->getContext($context, "violations")), $this->getAttribute($this->getAttribute($context["element"], "vars", array()), "name", array()));
                    echo "</td>
                                </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                    </tbody>
                </table>
            ";
        $context["globalSettings"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 21
        echo "            ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.global_settings" => (isset($context["globalSettings"]) ? $context["globalSettings"] : $this->getContext($context, "globalSettings"))), 1 => 1, 2 => true), "method"), "html", null, true);
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:_show_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  92 => 21,  87 => 18,  81 => 17,  75 => 16,  64 => 13,  60 => 12,  57 => 11,  52 => 10,  47 => 9,  43 => 8,  38 => 5,  35 => 4,  32 => 3,  26 => 23,  24 => 3,  20 => 1,);
    }
}
/* <div class="row-fluid tab-content">*/
/*     <div class="tab-pane active">*/
/*         {% block configuration %}*/
/*             {% set globalSettings %}*/
/*                 <table class="configuration">*/
/*                     <thead></thead>*/
/*                     <tbody>*/
/*                         {% for step in form.job.steps %}*/
/*                             {% for child in step.children %}*/
/*                                 {% for element in child.children %}*/
/*                                 <tr>*/
/*                                     <td><b>{{ element.vars.label|trans }}</b></td>*/
/*                                     <td>{{ element.vars.data|normalizeValue|trans }} {{ getViolations(violations, element.vars.name) }}</td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endset %}*/
/*             {{ elements.accordion({ 'pane.accordion.global_settings': globalSettings }, 1, true) }}*/
/*         {% endblock configuration %}*/
/*     </div>*/
/* </div>*/
/* */
