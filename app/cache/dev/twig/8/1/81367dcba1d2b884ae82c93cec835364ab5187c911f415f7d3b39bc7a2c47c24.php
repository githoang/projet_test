<?php

/* PimEnrichBundle:Channel/Tab:property.html.twig */
class __TwigTemplate_105b89a275730faa216c93df47c1b51f195c68532f2f550befb919307888a95f extends Twig_Template
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
        echo "<div class=\"tab-pane tab-property ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'row');
        echo "
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "color", array()), 'row');
        echo "
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currencies", array()), 'row');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locales", array()), 'row');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
    ";
        $context["generalProperties"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conversionUnits", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["conversionUnitForm"]) {
            // line 12
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["conversionUnitForm"], 'row');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversionUnitForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context["conversionOptions"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "accordion", array(0 => array("pane.accordion.general_properties" =>         // line 16
(isset($context["generalProperties"]) ? $context["generalProperties"] : $this->getContext($context, "generalProperties")), "pim_enrich.channel.pick_conversion_unit" =>         // line 17
(isset($context["conversionOptions"]) ? $context["conversionOptions"] : $this->getContext($context, "conversionOptions")))), "method"), "html", null, true);
        // line 18
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Channel/Tab:property.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 18,  77 => 17,  76 => 16,  74 => 15,  71 => 14,  62 => 12,  57 => 11,  54 => 10,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane tab-property {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% set generalProperties %}*/
/*         {{ form_row(form.code) }}*/
/*         {{ form_row(form.label) }}*/
/*         {{ form_row(form.color) }}*/
/*         {{ form_row(form.currencies) }}*/
/*         {{ form_row(form.locales) }}*/
/*         {{ form_row(form.category) }}*/
/*     {% endset %}*/
/*     {% set conversionOptions %}*/
/*         {% for conversionUnitForm in form.conversionUnits %}*/
/*             {{ form_row(conversionUnitForm) }}*/
/*         {% endfor %}*/
/*     {% endset %}*/
/*     {{ elements.accordion({*/
/*         'pane.accordion.general_properties': generalProperties,*/
/*         'pim_enrich.channel.pick_conversion_unit': conversionOptions*/
/*     }) }}*/
/* </div>*/
/* */
