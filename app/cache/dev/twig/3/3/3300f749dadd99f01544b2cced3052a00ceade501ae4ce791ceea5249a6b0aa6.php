<?php

/* PimEnrichBundle:VariantGroup:_locale-switcher.html.twig */
class __TwigTemplate_1f355cfa312f71a33f97289e18c4d78cbd0d5556479e7eaf7c44986112a71164 extends Twig_Template
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
        echo "<div id=\"locale-switcher\" class=\"btn-group\">
    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 3
        echo $this->env->getExtension('pim_locale_extension')->flag($this->env, (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")));
        echo "
        <i class=\"icon-caret-down\"></i>
    </button>

    <ul class=\"dropdown-menu\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) ? $context["locales"] : $this->getContext($context, "locales")));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 9
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["locale"], "code", array()) == (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))) ? ("active") : (""));
            echo "\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_enrich_variant_group_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array()), "dataLocale" => $this->getAttribute($context["locale"], "code", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('pim_locale_extension')->localeLabel($this->getAttribute($context["locale"], "code", array())), "html", null, true);
            echo "\">
                    <span class=\"indicator\">
                        ";
            // line 12
            if (($this->getAttribute($context["locale"], "code", array()) == (isset($context["dataLocale"]) ? $context["dataLocale"] : $this->getContext($context, "dataLocale")))) {
                // line 13
                echo "                            <i class=\"icon-circle\"></i>
                        ";
            }
            // line 15
            echo "                      </span>
                     ";
            // line 16
            echo $this->env->getExtension('pim_locale_extension')->flag($this->env, $this->getAttribute($context["locale"], "code", array()));
            echo "
                  </a>
             </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:VariantGroup:_locale-switcher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 20,  56 => 16,  53 => 15,  49 => 13,  47 => 12,  40 => 10,  35 => 9,  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div id="locale-switcher" class="btn-group">*/
/*     <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*         {{ dataLocale|flag }}*/
/*         <i class="icon-caret-down"></i>*/
/*     </button>*/
/* */
/*     <ul class="dropdown-menu">*/
/*         {% for locale in locales %}*/
/*             <li class="{{ locale.code == dataLocale ? 'active' : '' }}">*/
/*                 <a href="{{ path('pim_enrich_variant_group_edit', {id: form.vars.data.id, dataLocale: locale.code}) }}" title="{{ locale_label(locale.code) }}">*/
/*                     <span class="indicator">*/
/*                         {% if locale.code == dataLocale %}*/
/*                             <i class="icon-circle"></i>*/
/*                         {% endif %}*/
/*                       </span>*/
/*                      {{ locale.code|flag }}*/
/*                   </a>*/
/*              </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </div>*/
/* */
