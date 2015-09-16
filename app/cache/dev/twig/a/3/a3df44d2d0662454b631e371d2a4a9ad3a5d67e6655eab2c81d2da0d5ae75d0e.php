<?php

/* OroUIBundle::page_title_block.html.twig */
class __TwigTemplate_aa504bcd71b6ef7fb06e598df901cd13d4d609a9356ddd2863b6902ccea4da2a extends Twig_Template
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
        if (array_key_exists("title", $context)) {
            // line 2
            echo "    <div class=\"pull-left\">
        <div class=\"container-fluid\">
            <div class=\"container-fluid\">
                <h1 class=\"oro-subtitle\">";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h1>
            </div>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle::page_title_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if title is defined %}*/
/*     <div class="pull-left">*/
/*         <div class="container-fluid">*/
/*             <div class="container-fluid">*/
/*                 <h1 class="oro-subtitle">{{ title }}</h1>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
