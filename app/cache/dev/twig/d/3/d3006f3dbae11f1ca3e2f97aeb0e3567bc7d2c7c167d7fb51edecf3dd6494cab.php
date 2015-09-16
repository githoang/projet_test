<?php

/* PimEnrichBundle:Completeness:_completeness.html.twig */
class __TwigTemplate_8fccaf24600dac20b51241d816068bb6acf52bdd977398cae74f7d4264bfe434 extends Twig_Template
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
        echo "<div class=\"tab-content container-fluid\">
    <table id=\"progress-table\" class=\"table table-bordered groups\">
        <thead>
            <th width=\"200\">";
        // line 4
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Locales")), "html", null, true);
        echo "</th>
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 6
            echo "                <th class=\"channel\" width=\"150\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["channel"], "label", array())), "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            <th>&nbsp;</th>
        </thead>

        <tbody>
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 13
            echo "            <tr>
                <td>";
            // line 14
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()), false);
            echo "</td>
                ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) ? $context["channels"] : $this->getContext($context, "channels")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 16
                echo "                <td>
                    ";
                // line 17
                $this->loadTemplate("PimEnrichBundle:Completeness:_healthbar.html.twig", "PimEnrichBundle:Completeness:_completeness.html.twig", 17)->display(array_merge($context, array("channel" =>                 // line 19
$context["channel"], "locale" =>                 // line 20
$context["locale"], "completeness" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 21
(isset($context["completenesses"]) ? $context["completenesses"] : $this->getContext($context, "completenesses")), $this->getAttribute($context["locale"], "code", array()), array(), "array"), $this->getAttribute($context["channel"], "code", array()), array(), "array"), "completeness", array(), "array"), "missingAttributes" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 22
(isset($context["completenesses"]) ? $context["completenesses"] : $this->getContext($context, "completenesses")), $this->getAttribute($context["locale"], "code", array()), array(), "array"), $this->getAttribute($context["channel"], "code", array()), array(), "array"), "missing", array(), "array"), "product" =>                 // line 23
(isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")))));
                // line 25
                echo "                </td>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                <td>&nbsp;</td>
            </tr>
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <div id=\"legend\">
        <div class=\"row-fluid\">
            <div class=\"pull-left progress-bars\">
                <div class=\"progress\">
                    <div class=\"bar bar-disabled\" style=\"width: 100%;\"></div>
                </div>
            </div>
            <div class=\"pull-left progress-legend\">
                <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.completeness.legend.locale_not_associated"), "html", null, true);
        echo "</span>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Completeness:_completeness.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  129 => 30,  113 => 27,  98 => 25,  96 => 23,  95 => 22,  94 => 21,  93 => 20,  92 => 19,  91 => 17,  88 => 16,  71 => 15,  67 => 14,  64 => 13,  47 => 12,  41 => 8,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="tab-content container-fluid">*/
/*     <table id="progress-table" class="table table-bordered groups">*/
/*         <thead>*/
/*             <th width="200">{{ 'Locales'|trans|upper }}</th>*/
/*             {% for channel in channels %}*/
/*                 <th class="channel" width="150">{{ channel.label|upper }}</th>*/
/*             {% endfor %}*/
/*             <th>&nbsp;</th>*/
/*         </thead>*/
/* */
/*         <tbody>*/
/*             {% for locale in locales %}*/
/*             <tr>*/
/*                 <td>{{ locale.code|flag(false) }}</td>*/
/*                 {% for channel in channels %}*/
/*                 <td>*/
/*                     {% include 'PimEnrichBundle:Completeness:_healthbar.html.twig'*/
/*                         with {*/
/*                             'channel': channel,*/
/*                             'locale': locale,*/
/*                             'completeness': completenesses[locale.code][channel.code]['completeness'],*/
/*                             'missingAttributes': completenesses[locale.code][channel.code]['missing'],*/
/*                             'product': product*/
/*                     } %}*/
/*                 </td>*/
/*                 {% endfor %}*/
/*                 <td>&nbsp;</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <div id="legend">*/
/*         <div class="row-fluid">*/
/*             <div class="pull-left progress-bars">*/
/*                 <div class="progress">*/
/*                     <div class="bar bar-disabled" style="width: 100%;"></div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="pull-left progress-legend">*/
/*                 <span>{{ 'pim_enrich.completeness.legend.locale_not_associated'|trans }}</span>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
