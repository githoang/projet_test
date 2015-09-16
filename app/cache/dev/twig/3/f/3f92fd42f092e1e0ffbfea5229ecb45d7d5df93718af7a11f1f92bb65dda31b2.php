<?php

/* PimEnrichBundle:Product:_locale-switcher.html.twig */
class __TwigTemplate_f060e07cd388f958813f64c333850336b0097f3af44c607bcc2b5af072272cdf extends Twig_Template
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
        echo "<div id=\"locale-switcher\" class=\"btn-group sub-title\">
    <span class=\"product-name dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 3
        echo $this->env->getExtension('pim_locale_extension')->flag($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")));
        echo "
        <span class=\"title\">
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array()), "html", null, true);
        echo "
        </span>
        <i class=\"icon-caret-down\"></i>
    </span>
    <ul class=\"dropdown-menu\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 11
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["locale"], "code", array()) == (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))) ? ("active") : (""));
            echo "\">
                <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_product_edit", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "dataLocale" => $this->getAttribute($context["locale"], "code", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
            echo "\">
                    <span class=\"indicator\">
                        ";
            // line 14
            if (($this->getAttribute($context["locale"], "code", array()) == (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))) {
                // line 15
                echo "                            <i class=\"icon-circle\"></i>
                        ";
            }
            // line 17
            echo "                      </span>
                     ";
            // line 18
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()));
            echo "
                     <span class=\"title\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "label", array(0 => $this->getAttribute($context["locale"], "code", array())), "method"), "html", null, true);
            echo "</span>
                  </a>
             </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_locale-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  65 => 19,  61 => 18,  58 => 17,  54 => 15,  52 => 14,  45 => 12,  40 => 11,  36 => 10,  28 => 5,  23 => 3,  19 => 1,);
    }
}
/* <div id="locale-switcher" class="btn-group sub-title">*/
/*     <span class="product-name dropdown-toggle" data-toggle="dropdown">*/
/*         {{ dataLocale|flag }}*/
/*         <span class="title">*/
/*             {{ product.label }}*/
/*         </span>*/
/*         <i class="icon-caret-down"></i>*/
/*     </span>*/
/*     <ul class="dropdown-menu">*/
/*         {% for locale in locales %}*/
/*             <li class="{{ locale.code == dataLocale ? 'active' : '' }}">*/
/*                 <a href="{{ path('pim_enrich_product_edit', {id: product.id, dataLocale: locale.code}) }}" title="{{ locale_label(locale.code) }}">*/
/*                     <span class="indicator">*/
/*                         {% if locale.code == dataLocale %}*/
/*                             <i class="icon-circle"></i>*/
/*                         {% endif %}*/
/*                       </span>*/
/*                      {{ locale.code|flag }}*/
/*                      <span class="title">{{ product.label(locale.code) }}</span>*/
/*                   </a>*/
/*              </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
