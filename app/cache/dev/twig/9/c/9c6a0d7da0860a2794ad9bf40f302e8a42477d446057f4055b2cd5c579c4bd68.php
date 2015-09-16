<?php

/* PimEnrichBundle:Group/Tab:product.html.twig */
class __TwigTemplate_4ed1763cc9b50e0de18788358d7adc76641078079b42f773a6d795e02687f200 extends Twig_Template
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
        echo "<div class=\"tab-pane ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "products", array())) == 0)) {
            // line 3
            echo "        <div class=\"alert alert-info\">
            <button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button>
            ";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.group.select products"), "html", null, true);
            echo "
        ";
            // line 6
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "type", array()), "isVariant", array())) {
                // line 7
                echo "            <br />";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.group.selectable products"), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "        </div>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataGrid"]) ? $context["dataGrid"] : $this->getContext($context, "dataGrid")), "renderGrid", array(0 => (isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), 1 => array("dataLocale" => $this->env->getExtension('pim_locale_extension')->currentLocaleCode(), "currentGroup" => (isset($context["currentGroup"]) ? $context["currentGroup"] : $this->getContext($context, "currentGroup")))), "method"), "html", null, true);
        echo "

    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appendProducts", array()), 'widget', array("id" => "appendProducts"));
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removeProducts", array()), 'widget', array("id" => "removeProducts"));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group/Tab:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 14,  51 => 12,  48 => 11,  44 => 9,  38 => 7,  36 => 6,  32 => 5,  28 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {% if form.vars.data.products|length == 0 %}*/
/*         <div class="alert alert-info">*/
/*             <button data-dismiss="alert" class="close" type="button">×</button>*/
/*             {{ 'info.group.select products'|trans }}*/
/*         {% if form.vars.data.type.isVariant %}*/
/*             <br />{{ 'info.group.selectable products'|trans }}*/
/*         {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {{ dataGrid.renderGrid(gridName, { dataLocale: locale_code(), currentGroup: currentGroup }) }}*/
/* */
/*     {{ form_widget(form.appendProducts, {'id': 'appendProducts'}) }}*/
/*     {{ form_widget(form.removeProducts, {'id': 'removeProducts'}) }}*/
/* </div>*/
/* */
