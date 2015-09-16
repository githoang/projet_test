<?php

/* PimEnrichBundle:Group:_productList.html.twig */
class __TwigTemplate_7518ba07504f6dbe47c73f47d17a4e41b9dc8fbdf80a933a8a8c7ca345541e1a extends Twig_Template
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
        echo "<body>
<div class=\"clearfix\">
    <div class=\"container-fluid\">
        <div class=\"grid-container\">
            ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) > 0)) {
            // line 6
            echo "                <table class=\"grid table table-hover table-bordered table-condensed groups\">
                    <thead>
                        <tr>
                            ";
            // line 9
            $context["product"] = twig_first($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            // line 10
            echo "                            <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "identifier", array()), "attribute", array()), "label", array()), "html", null, true);
            echo "</th>
                            <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Label"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                echo "                            <tr>
                                <td><a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "identifier", array()), "html", null, true);
                echo "</a></td>
                                <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "label", array()), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                        ";
            if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) < (isset($context["productCount"]) ? $context["productCount"] : $this->getContext($context, "productCount")))) {
                // line 22
                echo "                            <tr>
                                <td colspan=\"2\">";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.group.more products", array("%count%" => ((isset($context["productCount"]) ? $context["productCount"] : $this->getContext($context, "productCount")) - twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")))))), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            // line 26
            echo "                    </tbody>
                </table>
            ";
        }
        // line 29
        echo "        </div>
    </div>
</div>
</body>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group:_productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 29,  80 => 26,  74 => 23,  71 => 22,  68 => 21,  59 => 18,  53 => 17,  50 => 16,  46 => 15,  39 => 11,  34 => 10,  32 => 9,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <body>*/
/* <div class="clearfix">*/
/*     <div class="container-fluid">*/
/*         <div class="grid-container">*/
/*             {% if products|length > 0 %}*/
/*                 <table class="grid table table-hover table-bordered table-condensed groups">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             {% set product = products|first %}*/
/*                             <th>{{ product.identifier.attribute.label }}</th>*/
/*                             <th>{{ 'Label'|trans }}</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         {% for product in products %}*/
/*                             <tr>*/
/*                                 <td><a href="{{ path('pim_enrich_product_edit', {'id': product.id}) }}">{{ product.identifier }}</a></td>*/
/*                                 <td>{{ product.label }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         {% if products|length < productCount %}*/
/*                             <tr>*/
/*                                 <td colspan="2">{{ 'info.group.more products'|trans({'%count%': productCount - products|length}) }}</td>*/
/*                             </tr>*/
/*                         {% endif %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* */
