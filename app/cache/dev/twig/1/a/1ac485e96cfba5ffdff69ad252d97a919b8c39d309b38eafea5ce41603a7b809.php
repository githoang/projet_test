<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_40961ac39cf94271c0d77ddf9dbee67c0380eda95fbeb4cf3c1c383315c3c64d extends Twig_Template
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
        echo "require({
    baseUrl: ";
        // line 2
        echo twig_jsonencode_filter($this->env->getExtension('assets')->getAssetUrl("bundles"));
        echo "
});
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* require({*/
/*     baseUrl: {{ asset('bundles')|json_encode|raw }}*/
/* });*/
/* */
