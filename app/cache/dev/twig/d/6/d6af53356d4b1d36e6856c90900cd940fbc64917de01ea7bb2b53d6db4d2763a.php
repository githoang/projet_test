<?php

/* OroConfigBundle:Configuration:system.html.twig */
class __TwigTemplate_71e2d47eb78abe0a8ac8d0c9cd53a427b320b960b0e7293cd39392682239f48c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroConfigBundle:Configuration:system.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        if ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) {
            // line 3
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroConfigBundle:Form:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig"));
        }
        // line 5
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroConfigBundle:Configuration:system.html.twig", 5);
        // line 7
        $context["pageTitle"] = "Configuration";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo $context["configUI"]->getrenderTitleAndSearch((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), array());
        echo "
    ";
        // line 11
        echo $context["configUI"]->getrenderScrollData((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup")));
        echo "

    <script type=\"text/javascript\">
        /* jshint browser:true, devel:true */
        /* global require */
        require(['oro/form/state'], function (formState) {
            'use strict';
            new formState();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Configuration:system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  40 => 10,  37 => 9,  33 => 1,  31 => 7,  29 => 5,  26 => 3,  24 => 2,  18 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% if form %}*/
/*     {% form_theme form with ['OroConfigBundle:Form:fields.html.twig', 'OroFormBundle:Form:fields.html.twig'] %}*/
/* {% endif %}*/
/* {% import 'OroConfigBundle::macros.html.twig' as configUI %}*/
/* */
/* {% set pageTitle = 'Configuration' %}*/
/* */
/* {% block content %}*/
/*     {{ configUI.renderTitleAndSearch(pageTitle, []) }}*/
/*     {{ configUI.renderScrollData(data, form, activeGroup, activeSubGroup) }}*/
/* */
/*     <script type="text/javascript">*/
/*         /* jshint browser:true, devel:true *//**/
/*         /* global require *//**/
/*         require(['oro/form/state'], function (formState) {*/
/*             'use strict';*/
/*             new formState();*/
/*         });*/
/*     </script>*/
/* {% endblock content %}*/
/* */
