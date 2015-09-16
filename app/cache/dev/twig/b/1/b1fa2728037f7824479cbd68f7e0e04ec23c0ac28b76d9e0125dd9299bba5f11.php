<?php

/* PimEnrichBundle:Attribute:_available-attributes-form.html.twig */
class __TwigTemplate_4c5402c1fcc11d5685e5ca8bad7e0690cc8d7ed146d9c3718ef9b34762f711ce extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(
        ['jquery', 'pim/popinform'],
        function(\$, PopinForm){
            'use strict';
            \$(function() {
                new PopinForm('";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "');
            });
        }
    );
</script>
";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" =>         // line 13
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "class" => "hide", "attr" => array("data-title" => $this->env->getExtension('translator')->trans("Add attributes"), "data-empty-text" => $this->env->getExtension('translator')->trans("info.product.no available attributes"), "data-placeholder" => $this->env->getExtension('translator')->trans("Search"), "data-target" => "#attribute-buttons", "data-save-button" => $this->env->getExtension('translator')->trans("Add"))));
        // line 22
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "attributes", array()), 'widget');
        echo "
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Attribute:_available-attributes-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 24,  41 => 23,  38 => 22,  36 => 13,  35 => 12,  27 => 7,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'pim/popinform'],*/
/*         function($, PopinForm){*/
/*             'use strict';*/
/*             $(function() {*/
/*                 new PopinForm('{{ form.vars.id }}');*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* {{ form_start(form, {*/
/*     'action': action,*/
/*     'class': 'hide',*/
/*     'attr': {*/
/*         'data-title': 'Add attributes'|trans,*/
/*         'data-empty-text': 'info.product.no available attributes'|trans,*/
/*         'data-placeholder': 'Search'|trans,*/
/*         'data-target': '#attribute-buttons',*/
/*         'data-save-button': 'Add'|trans*/
/*     }*/
/* }) }}*/
/*     {{ form_widget(form.attributes) }}*/
/* {{ form_end(form) }}*/
/* */
