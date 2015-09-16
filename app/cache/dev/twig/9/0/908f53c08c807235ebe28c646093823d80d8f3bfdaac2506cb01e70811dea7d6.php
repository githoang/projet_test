<?php

/* PimEnrichBundle:Product:_sequentialEdit.html.twig */
class __TwigTemplate_b91558bb589da350e20077d8e32cd7b2c1dc15f0cb3c6c87aee3a163afdff914 extends Twig_Template
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
        if ((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit"))) {
            // line 2
            echo "    ";
            $context["previousProduct"] = $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "previous", array());
            // line 3
            echo "    ";
            $context["nextProduct"] = $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "next", array());
            // line 4
            echo "    ";
            $context["ratio"] = (($this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "countEditedProducts", array(0 => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))), "method") / $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "countObjectSet", array())) * 100);
            // line 5
            echo "
    <div class=\"row-fluid\" id=\"sequentialEdit\">
        <span class=\"span3 right-aligned\">
            ";
            // line 8
            if ((isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct"))) {
                // line 9
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute((isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "compareWith" => (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))), "html", null, true);
                echo "\" class=\"left\"
                data-original-title=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.sequential_edit_action.product.previous", array("%product%" => (isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct")))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">
                <i class=\"icon-chevron-left\"></i>&nbsp;&nbsp;";
                // line 11
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct")), "label", array())) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct")), "label", array()), 0, 22) . "...")) : ((isset($context["previousProduct"]) ? $context["previousProduct"] : $this->getContext($context, "previousProduct")))), "html", null, true);
                echo "
            </a>
            ";
            }
            // line 14
            echo "        </span>
        <span class=\"span6\">
            <div class=\"progress progress-bar\">
                <div class=\"bar\" style=\"width: ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")), "html", null, true);
            echo "%;\">
                ";
            // line 18
            echo ((((isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")) < 30)) ? ("</div>&nbsp;&nbsp;") : (""));
            echo "
                    ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "countEditedProducts", array(0 => (isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))), "method"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sequentialEdit"]) ? $context["sequentialEdit"] : $this->getContext($context, "sequentialEdit")), "countObjectSet", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Products"), "html", null, true);
            echo "
                ";
            // line 20
            echo ((((isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")) >= 30)) ? ("</div>") : (""));
            echo "
            </div>
        </span>
        <span class=\"span3\">
            ";
            // line 24
            if ((isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct"))) {
                // line 25
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute((isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct")), "id", array()), "dataLocale" => (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")), "compareWith" => (isset($context["comparisonLocale"]) ? $context["comparisonLocale"] : $this->getContext($context, "comparisonLocale")))), "html", null, true);
                echo "\" class=\"right\"
                data-original-title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_enrich.sequential_edit_action.product.next", array("%product%" => (isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct")))), "html", null, true);
                echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\">
                ";
                // line 27
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct")), "label", array())) > 25)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct")), "label", array()), 0, 22) . "...")) : ((isset($context["nextProduct"]) ? $context["nextProduct"] : $this->getContext($context, "nextProduct")))), "html", null, true);
                echo "&nbsp;&nbsp;<i class=\"icon-chevron-right\"></i>
            </a>
            ";
            }
            // line 30
            echo "        </span>
    </div>
    <hr class=\"small\" />
";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_sequentialEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  91 => 27,  87 => 26,  82 => 25,  80 => 24,  73 => 20,  65 => 19,  61 => 18,  57 => 17,  52 => 14,  46 => 11,  42 => 10,  37 => 9,  35 => 8,  30 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if sequentialEdit %}*/
/*     {% set previousProduct = sequentialEdit.previous %}*/
/*     {% set nextProduct = sequentialEdit.next %}*/
/*     {% set ratio = sequentialEdit.countEditedProducts(product) / sequentialEdit.countObjectSet * 100 %}*/
/* */
/*     <div class="row-fluid" id="sequentialEdit">*/
/*         <span class="span3 right-aligned">*/
/*             {% if previousProduct %}*/
/*             <a href="{{ path('pim_enrich_product_edit', { id: previousProduct.id, dataLocale: dataLocale, compareWith: comparisonLocale  }) }}" class="left"*/
/*                 data-original-title="{{ 'pim_enrich.sequential_edit_action.product.previous'|trans({ '%product%': previousProduct }) }}" data-toggle="tooltip" data-placement="bottom">*/
/*                 <i class="icon-chevron-left"></i>&nbsp;&nbsp;{{ previousProduct.label|length > 25 ? previousProduct.label|slice(0, 22) ~ '...' : previousProduct }}*/
/*             </a>*/
/*             {% endif %}*/
/*         </span>*/
/*         <span class="span6">*/
/*             <div class="progress progress-bar">*/
/*                 <div class="bar" style="width: {{ ratio }}%;">*/
/*                 {{ ratio < 30  ? '</div>&nbsp;&nbsp;' }}*/
/*                     {{ sequentialEdit.countEditedProducts(product) }} / {{ sequentialEdit.countObjectSet }} {{ 'Products'|trans }}*/
/*                 {{ ratio >= 30 ? '</div>' }}*/
/*             </div>*/
/*         </span>*/
/*         <span class="span3">*/
/*             {% if nextProduct %}*/
/*             <a href="{{ path('pim_enrich_product_edit', { id: nextProduct.id, dataLocale: dataLocale, compareWith: comparisonLocale  }) }}" class="right"*/
/*                 data-original-title="{{ 'pim_enrich.sequential_edit_action.product.next'|trans({ '%product%': nextProduct }) }}" data-toggle="tooltip" data-placement="bottom">*/
/*                 {{ nextProduct.label|length > 25 ? nextProduct.label|slice(0, 22) ~ '...' : nextProduct }}&nbsp;&nbsp;<i class="icon-chevron-right"></i>*/
/*             </a>*/
/*             {% endif %}*/
/*         </span>*/
/*     </div>*/
/*     <hr class="small" />*/
/* {% endif %}*/
/* */
