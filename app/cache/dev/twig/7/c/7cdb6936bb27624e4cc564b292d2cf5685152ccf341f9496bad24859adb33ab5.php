<?php

/* OroWindowsBundle:Include:javascript.html.twig */
class __TwigTemplate_2cb63e70dc8dbe3f87fac47a6fd6f12bfc190d75ecdd75d3b9736157b82d3813 extends Twig_Template
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
    require(['oro/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("oro_api_get_windows"));
        echo ";
    });
</script>";
    }

    public function getTemplateName()
    {
        return "OroWindowsBundle:Include:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(['oro/dialog/state/model'],*/
/*     function(StateModel) {*/
/*         StateModel.prototype.urlRoot = {{ path('oro_api_get_windows')|json_encode|raw }};*/
/*     });*/
/* </script>*/
