<?php

/* OroUIBundle:actions:index.html.twig */
class __TwigTemplate_d98d596d4215d95766d7419d088c82fece8cfe845ac6326ee0cbb42764bb9df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroUIBundle:actions:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 3);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head_script($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 6
        if (array_key_exists("gridId", $context)) {
        }
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra\">
            <div class=\"row\">
                <div class=\"span9\">
                    <div class=\"pull-left\">
                        <div class=\"container-fluid\">
                            <h1 class=\"oro-subtitle\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(((array_key_exists("pageTitle", $context)) ? ((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle"))) : (""))), "html", null, true);
        echo "</h1>
                        </div>
                    </div>
                </div>
                <div class=\"pull-right title-buttons-container\">
                    ";
        // line 21
        echo "                    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 22
        echo "                    ";
        // line 23
        echo "                </div>
            </div>
        </div>
    </div>

    ";
        // line 28
        $this->displayBlock('content_datagrid', $context, $blocks);
    }

    // line 21
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 28
    public function block_content_datagrid($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 30
            echo "            ";
            if (array_key_exists("params", $context)) {
                // line 31
                echo "                ";
                echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
                echo "
            ";
            } else {
                // line 33
                echo "                ";
                echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")));
                echo "
            ";
            }
            // line 35
            echo "        ";
        }
        // line 36
        echo "
        ";
        // line 38
        echo "        ";
        if (array_key_exists("gridId", $context)) {
            // line 39
            echo "            ";
            echo $context["UI"]->getgridBlock((isset($context["gridId"]) ? $context["gridId"] : $this->getContext($context, "gridId")));
            echo "
        ";
        }
        // line 41
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  118 => 39,  115 => 38,  112 => 36,  109 => 35,  103 => 33,  97 => 31,  94 => 30,  91 => 29,  88 => 28,  83 => 21,  79 => 28,  72 => 23,  70 => 22,  67 => 21,  59 => 15,  51 => 9,  48 => 8,  43 => 6,  38 => 5,  35 => 4,  31 => 1,  29 => 3,  27 => 2,  21 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% import 'OroDataGridBundle::macros.html.twig' as dataGrid %}*/
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     {% if gridId is defined %}{% placeholder prepare_grid with {'datagrid': datagrid, 'selector': '#' ~ gridId} %}{% endif %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container-fluid page-title">*/
/*         <div class="navigation clearfix navbar-extra">*/
/*             <div class="row">*/
/*                 <div class="span9">*/
/*                     <div class="pull-left">*/
/*                         <div class="container-fluid">*/
/*                             <h1 class="oro-subtitle">{{ (pageTitle is defined ? pageTitle : '')|trans }}</h1>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="pull-right title-buttons-container">*/
/*                     {% placeholder index_navButtons_before %}*/
/*                     {% block navButtons %}{% endblock navButtons %}*/
/*                     {% placeholder index_navButtons_after %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block content_datagrid %}*/
/*         {% if gridName is defined %}*/
/*             {% if params is defined %}*/
/*                 {{ dataGrid.renderGrid(gridName, params) }}*/
/*             {% else %}*/
/*                 {{ dataGrid.renderGrid(gridName) }}*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {# fallback for OroGridBundle grids #}*/
/*         {% if gridId is defined %}*/
/*             {{ UI.gridBlock(gridId) }}*/
/*         {% endif %}*/
/*     {% endblock content_datagrid %}*/
/* {% endblock content %}*/
/* */
