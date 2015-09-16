<?php

/* PimEnrichBundle:Completeness:_healthbar.html.twig */
class __TwigTemplate_b79a9823510d869f9b6a0d666f92abf3d71290ebcaca849cb637944d625c6be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"progress-cell\">
";
        // line 2
        if ((null === $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "getFamily", array()))) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.product.no family defined"), "html", null, true);
            echo "
";
        } elseif ((null ===         // line 4
(isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")))) {
            // line 5
            echo "    ";
            if ($this->getAttribute((isset($context["channel"]) ? $context["channel"] : $this->getContext($context, "channel")), "hasLocale", array(0 => (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "method")) {
                // line 6
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.completeness.not calculated"), "html", null, true);
                echo "
    ";
            } else {
                // line 8
                echo "        <div class=\"progress\">
            <div class=\"bar bar-disabled\" style=\"width: 100%;\"></div>
        </div>
    ";
            }
        } else {
            // line 13
            echo "    ";
            $context["titleProgressBar"] = $this->env->getExtension('translator')->transchoice("pim_enrich.completeness.progress_bar.title", $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "requiredCount", array()), array("%ratio%" => twig_number_format_filter($this->env, $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "ratio", array()), 0)));
            // line 14
            echo "    <div class=\"progress\" data-toggle=\"tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, (isset($context["titleProgressBar"]) ? $context["titleProgressBar"] : $this->getContext($context, "titleProgressBar")), "html", null, true);
            echo "\">
        ";
            // line 15
            if (($this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "ratio", array()) == 100)) {
                // line 16
                echo "            ";
                $context["progressClass"] = "success";
                // line 17
                echo "        ";
            } elseif (($this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "ratio", array()) == 0)) {
                // line 18
                echo "            ";
                $context["progressClass"] = "danger";
                // line 19
                echo "        ";
            } else {
                // line 20
                echo "            ";
                $context["progressClass"] = "warning";
                // line 21
                echo "        ";
            }
            // line 22
            echo "        <div class=\"bar bar-";
            echo twig_escape_filter($this->env, (isset($context["progressClass"]) ? $context["progressClass"] : $this->getContext($context, "progressClass")), "html", null, true);
            echo "\" style=\"width: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "ratio", array()), "html", null, true);
            echo "%;\"></div>
    </div>

    ";
            // line 25
            if (($this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "missingCount", array()) == 0)) {
                // line 26
                echo "        <div class=\"center\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("pim_enrich.completeness.subtitle", $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "missingCount", array())), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 28
                echo "        ";
                ob_start();
                // line 29
                echo "        <ul>
            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["missingAttributes"]) ? $context["missingAttributes"] : $this->getContext($context, "missingAttributes")));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 31
                    echo "                <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "label", array()), "html", null, true);
                    echo "</li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "        </ul>
        ";
                $context["titleMissing"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 35
                echo "        <div class=\"center\" data-toggle=\"popover\" data-placement=\"bottom\" data-html=\"true\" data-trigger=\"hover\" data-content=\"";
                echo (isset($context["titleMissing"]) ? $context["titleMissing"] : $this->getContext($context, "titleMissing"));
                echo "\"
            data-original-title=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("pim_enrich.completeness.missing_attributes", $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "missingCount", array())), "html", null, true);
                echo ":\">
            <span class=\"progress-info\">";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("pim_enrich.completeness.subtitle", $this->getAttribute((isset($context["completeness"]) ? $context["completeness"] : $this->getContext($context, "completeness")), "missingCount", array())), "html", null, true);
                echo "</span>
        </div>
    ";
            }
            // line 40
            echo "
";
        }
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Completeness:_healthbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 42,  130 => 40,  124 => 37,  120 => 36,  115 => 35,  111 => 33,  102 => 31,  98 => 30,  95 => 29,  92 => 28,  86 => 26,  84 => 25,  75 => 22,  72 => 21,  69 => 20,  66 => 19,  63 => 18,  60 => 17,  57 => 16,  55 => 15,  50 => 14,  47 => 13,  40 => 8,  34 => 6,  31 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="progress-cell">*/
/* {% if product.getFamily is null %}*/
/*     {{ 'info.product.no family defined'|trans }}*/
/* {% elseif completeness is null %}*/
/*     {% if channel.hasLocale(locale) %}*/
/*         {{ 'info.completeness.not calculated'|trans }}*/
/*     {% else %}*/
/*         <div class="progress">*/
/*             <div class="bar bar-disabled" style="width: 100%;"></div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set titleProgressBar = 'pim_enrich.completeness.progress_bar.title'|transchoice(completeness.requiredCount, {'%ratio%': completeness.ratio|number_format(0)}) %}*/
/*     <div class="progress" data-toggle="tooltip" data-original-title="{{ titleProgressBar }}">*/
/*         {% if completeness.ratio == 100 %}*/
/*             {% set progressClass = 'success' %}*/
/*         {% elseif completeness.ratio == 0 %}*/
/*             {% set progressClass = 'danger' %}*/
/*         {% else %}*/
/*             {% set progressClass = 'warning' %}*/
/*         {% endif %}*/
/*         <div class="bar bar-{{ progressClass }}" style="width: {{ completeness.ratio }}%;"></div>*/
/*     </div>*/
/* */
/*     {% if completeness.missingCount == 0 %}*/
/*         <div class="center">{{ 'pim_enrich.completeness.subtitle'|transchoice(completeness.missingCount) }}</div>*/
/*     {% else %}*/
/*         {% set titleMissing %}*/
/*         <ul>*/
/*             {% for attribute in missingAttributes %}*/
/*                 <li>{{ attribute.label }}</li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*         {% endset %}*/
/*         <div class="center" data-toggle="popover" data-placement="bottom" data-html="true" data-trigger="hover" data-content="{{ titleMissing|raw }}"*/
/*             data-original-title="{{ 'pim_enrich.completeness.missing_attributes'|transchoice(completeness.missingCount) }}:">*/
/*             <span class="progress-info">{{ 'pim_enrich.completeness.subtitle'|transchoice(completeness.missingCount) }}</span>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* {% endif %}*/
/* </div>*/
/* */
