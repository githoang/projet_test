<?php

/* PimEnrichBundle:Locale:_flag.html.twig */
class __TwigTemplate_34252daea486ad7c7341f72da6a1142c79295409a8f31f14508bbc4f864ecc9b extends Twig_Template
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
        echo "<span class=\"flag-language\">
    <i class=\"flag flag-";
        // line 2
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["region"]) ? $context["region"] : $this->getContext($context, "region"))), "html", null, true);
        echo "\"></i>
    ";
        // line 3
        if ((isset($context["short"]) ? $context["short"] : $this->getContext($context, "short"))) {
            // line 4
            echo "        <span class=\"language\">";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["language"]) ? $context["language"] : $this->getContext($context, "language"))), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "
    ";
        }
        // line 8
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Locale:_flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  28 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <span class="flag-language">*/
/*     <i class="flag flag-{{ region|lower }}"></i>*/
/*     {% if short %}*/
/*         <span class="language">{{ language|lower }}</span>*/
/*     {% else %}*/
/*         {{ label }}*/
/*     {% endif %}*/
/* </span>*/
/* */
