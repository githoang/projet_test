<?php

/* OroAsseticBundle:Assets:oro_css.html.twig */
class __TwigTemplate_a97eb14967ed9d81e6be9073ae62c44c591326fa2615fb73c92d94253564c35c extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        // asset "15df054"
        $context["asset_url"] = $this->env->getExtension('assets')->getAssetUrl("css/oro.css");
        // line 4
        $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
        // line 5
        if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
            // line 6
            echo "<script type=\"text/javascript\">localStorage.clear();</script>
";
        }
        // line 8
        echo "<link ";
        if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
            echo "rel=\"stylesheet/less\"";
        } else {
            echo "rel=\"stylesheet\"";
        }
        echo " media=\"all\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
";
        // line 9
        if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
            // line 10
            echo "<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 13
        echo "

";
    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assets:oro_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  44 => 9,  33 => 8,  29 => 6,  27 => 5,  25 => 4,  22 => 3,  19 => 2,);
    }
}
/* {# Css assetics #}*/
/* */
/* {% oro_css filter='cssrewrite, lessphp' output='css/oro.css' %}*/
/* {% set isLess = ('less' in asset_url|split('.')) %}*/
/* {% if isLess %}*/
/* <script type="text/javascript">localStorage.clear();</script>*/
/* {% endif %}*/
/* <link {% if isLess %}rel="stylesheet/less"{% else %}rel="stylesheet"{% endif %} media="all" href="{{ asset_url }}" />*/
/* {% if isLess %}*/
/* <script type="text/javascript" src="{{ asset('bundles/oroui/lib/less-1.3.3.min.js') }}"></script>*/
/* {% endif %}*/
/* {% endoro_css %}*/
/* */
/* */
/* */
