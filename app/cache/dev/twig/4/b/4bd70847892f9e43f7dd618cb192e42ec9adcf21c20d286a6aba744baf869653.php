<?php

/* PimEnrichBundle:Group:edit.html.twig */
class __TwigTemplate_7eba00e6823b4be93d7b74caeceed853db547d061166831e1f919a35959acba8 extends Twig_Template
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
        $this->loadTemplate("PimEnrichBundle:Group:_group.html.twig", "PimEnrichBundle:Group:edit.html.twig", 1)->display(array_merge($context, array("indexRoute" => "pim_enrich_group_index", "editRoute" => "pim_enrich_group_edit", "removeRoute" => "pim_enrich_group_remove", "confirmationMessage" => "confirmation.remove.group", "removeMessage" => "flash.group.removed", "entityType" => "group", "title" => $this->env->getExtension('translator')->trans("group.edit"), "gridName" => "product-group-grid")));
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {% include 'PimEnrichBundle:Group:_group.html.twig'*/
/*     with {*/
/*         'indexRoute':  'pim_enrich_group_index',*/
/*         'editRoute':   'pim_enrich_group_edit',*/
/*         'removeRoute': 'pim_enrich_group_remove',*/
/*         'confirmationMessage': 'confirmation.remove.group',*/
/*         'removeMessage':       'flash.group.removed',*/
/*         'entityType': 'group',*/
/*         'title':      'group.edit'|trans,*/
/*         'gridName':   'product-group-grid'*/
/*     } %}*/
/* */
