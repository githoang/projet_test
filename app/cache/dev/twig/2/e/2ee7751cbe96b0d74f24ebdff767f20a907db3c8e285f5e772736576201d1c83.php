<?php

/* PimUIBundle::measures.html.twig */
class __TwigTemplate_8d30af40caec6e7769a5fa7139feb2aa0603c8c079b695584ba3c9d09203b95d extends Twig_Template
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
        echo "{
";
        // line 3
        echo "    values: ";
        echo twig_jsonencode_filter($this->getAttribute((isset($context["measures"]) ? $context["measures"] : $this->getContext($context, "measures")), "measures_config", array()));
        echo ",
";
        // line 5
        echo "    getMetricTypes: function() {
        var types = [];
        for (var i in this.values) {
            types.push({ id:i, text:_.__(i) });
        }
        return types;
    },
    getMetricUnits: function(metricType) {
        var units = [];
        if (!this.values[metricType]) {
            return units;
        }
        for (var i in this.values[metricType].units) {
            units.push({ id:i, text:_.__(i) });
        }
        return units;
    }
}
";
    }

    public function getTemplateName()
    {
        return "PimUIBundle::measures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 5,  22 => 3,  19 => 1,);
    }
}
/* {*/
/* {% autoescape false %}*/
/*     values: {{ measures.measures_config|json_encode() }},*/
/* {% endautoescape %}*/
/*     getMetricTypes: function() {*/
/*         var types = [];*/
/*         for (var i in this.values) {*/
/*             types.push({ id:i, text:_.__(i) });*/
/*         }*/
/*         return types;*/
/*     },*/
/*     getMetricUnits: function(metricType) {*/
/*         var units = [];*/
/*         if (!this.values[metricType]) {*/
/*             return units;*/
/*         }*/
/*         for (var i in this.values[metricType].units) {*/
/*             units.push({ id:i, text:_.__(i) });*/
/*         }*/
/*         return units;*/
/*     }*/
/* }*/
/* */
