<?php

/* OroUIBundle::widget_loader.html.twig */
class __TwigTemplate_7be31920259cd9038e2189f6ea88d17f8ff01cec667955ebcea37d4ca7ba5dab extends Twig_Template
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
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["elementId"]) ? $context["elementId"] : $this->getContext($context, "elementId")), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('actions')->renderUri($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "url", array()), array());
        echo "</div>

<script type=\"text/javascript\">
    require(['jquery', 'oro/";
        // line 4
        echo twig_escape_filter($this->env, ((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")) . "-widget"), "html", null, true);
        echo "'],
    function(\$, Widget){
        \$(function(){
            var widget = new Widget(";
        // line 7
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo ");
            widget.render();
        })
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::widget_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  19 => 1,);
    }
}
/* <div id="{{ elementId }}">{% render options.url %}</div>*/
/* */
/* <script type="text/javascript">*/
/*     require(['jquery', 'oro/{{ widgetType ~ '-widget' }}'],*/
/*     function($, Widget){*/
/*         $(function(){*/
/*             var widget = new Widget({{ options|json_encode|raw }});*/
/*             widget.render();*/
/*         })*/
/*     });*/
/* </script>*/
/* */
