<?php

/* OroDataGridBundle::macros.html.twig */
class __TwigTemplate_6beacf910a522b30baecf06738d8adbb8268177a2979cb7f89a4340a3e824adf extends Twig_Template
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
    }

    // line 8
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    ";
            $context["metaData"] = $this->env->getExtension('oro_datagrid_metadata')->getGridMetadata((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
            // line 10
            echo "
    <div id=\"grid-";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-type=\"datagrid\" data-data=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('oro_datagrid_metadata')->getGridData($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params"))));
            echo "\"
         ";
            // line 12
            if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                echo " class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "cssClass", array()), "html", null, true);
                echo "\" ";
            }
            // line 13
            echo "         data-metadata=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData"))), "html", null, true);
            echo "\"></div>
    <script type=\"text/javascript\">
        require(['jquery', 'oro/datagrid-builder'].concat(";
            // line 15
            echo twig_jsonencode_filter($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), "requireJSModules", array()));
            echo "),
        function (\$, datagridBuilder) {
            var builders = _.toArray(arguments).slice(2);
            \$(function () {
                datagridBuilder(builders);
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 13,  47 => 12,  41 => 11,  38 => 10,  35 => 9,  21 => 8,);
    }
}
/* {#*/
/*     Renders datagrid widget*/
/* */
/*     parameters:*/
/*         name: datagrid name*/
/*         params: additional parameters for url*/
/* #}*/
/* {% macro renderGrid(name, params = {}, renderParams = {}) %}*/
/*     {% set metaData = oro_datagrid_metadata(name, params) %}*/
/* */
/*     <div id="grid-{{ name }}" data-type="datagrid" data-data="{{ oro_datagrid_data(name, params)|escape }}"*/
/*          {% if renderParams.cssClass is defined %} class="{{ renderParams.cssClass }}" {% endif %}*/
/*          data-metadata="{{ metaData|json_encode }}"></div>*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/datagrid-builder'].concat({{ metaData.requireJSModules|json_encode|raw }}),*/
/*         function ($, datagridBuilder) {*/
/*             var builders = _.toArray(arguments).slice(2);*/
/*             $(function () {*/
/*                 datagridBuilder(builders);*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endmacro %}*/
/* */
