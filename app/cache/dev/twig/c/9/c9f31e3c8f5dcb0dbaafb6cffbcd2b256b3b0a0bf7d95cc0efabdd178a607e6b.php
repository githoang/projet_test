<?php

/* PimEnrichBundle:CategoryTree:index.html.twig */
class __TwigTemplate_bb433c218d1ee4f29b20dc636e1a413d136668f5d02e0f35350be753a4a57589 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimEnrichBundle:CategoryTree:index.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 5
        $this->loadTemplate("PimEnrichBundle:CategoryTree:_scripts.html.twig", "PimEnrichBundle:CategoryTree:index.html.twig", 5)->display($context);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "    <div id=\"category-tree-container\" class=\"row-fluid\">
        <div id=\"tree\" ";
        // line 10
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_edit")) {
            echo " data-movable=\"true\"";
        }
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_create")) {
            echo " data-creatable=\"true\"";
        }
        echo "></div>

        <div id=\"category-form\">
            <div class=\"sub-title buffer-extra-top buffer-left fullwidth text-center\">
                ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.suggest selection"), "html", null, true);
        echo "
                ";
        // line 15
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_category_create")) {
            // line 16
            echo "                    <br/>
                    <br/>
                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.or"), "html", null, true);
            echo "
                    <a href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("pim_enrich_categorytree_create");
            echo "\">
                        <span class=\"label link-label large\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("category.create new"), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 23,  77 => 20,  73 => 19,  69 => 18,  65 => 16,  63 => 15,  59 => 14,  47 => 10,  44 => 9,  41 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     {% include "PimEnrichBundle:CategoryTree:_scripts.html.twig" %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="category-tree-container" class="row-fluid">*/
/*         <div id="tree" {% if resource_granted("pim_enrich_category_edit") %} data-movable="true"{% endif %}{% if resource_granted("pim_enrich_category_create") %} data-creatable="true"{% endif %}></div>*/
/* */
/*         <div id="category-form">*/
/*             <div class="sub-title buffer-extra-top buffer-left fullwidth text-center">*/
/*                 {{ 'category.suggest selection'|trans }}*/
/*                 {% if resource_granted('pim_enrich_category_create') %}*/
/*                     <br/>*/
/*                     <br/>*/
/*                     {{ 'category.or'|trans }}*/
/*                     <a href="{{ path('pim_enrich_categorytree_create') }}">*/
/*                         <span class="label link-label large">{{ 'category.create new'|trans }}</span>*/
/*                     </a>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
