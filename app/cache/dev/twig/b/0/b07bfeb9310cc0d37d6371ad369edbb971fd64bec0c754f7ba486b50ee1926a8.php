<?php

/* PimImportExportBundle:ExportProfile:edit.html.twig */
class __TwigTemplate_29a7fc860389d1b53cbf14d438202885b1b4b697cced9a6abdc0574aa24fff28 extends Twig_Template
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

        $this->env->getExtension("oro_title")->set(array("params" => array("%job.label%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 2
        echo "
";
        // line 3
        $context["actionRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())));
        // line 4
        echo "
";
        // line 5
        $context["entityName"] = "export profile";
        // line 6
        $context["title"] = (($this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".edit")) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
        // line 7
        echo "
";
        // line 8
        $context["indexRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_index");
        // line 9
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 10
            echo "    ";
            $context["removeAcl"] = "pim_importexport_export_profile_remove";
            // line 11
            echo "    ";
            $context["removeRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())));
            // line 12
            echo "    ";
            $context["importRoute"] = $this->env->getExtension('routing')->getPath("pim_importexport_export_profile_index");
            // line 13
            echo "    ";
            $context["removeMessage"] = $this->env->getExtension('translator')->trans("confirmation.remove.export profile", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array())));
            // line 14
            echo "    ";
            $context["removeSuccessMessage"] = $this->env->getExtension('translator')->trans("flash.export.removed");
        }
        // line 16
        echo "
";
        // line 17
        $this->loadTemplate("PimImportExportBundle:JobProfile:edit.html.twig", "PimImportExportBundle:ExportProfile:edit.html.twig", 17)->display($context);
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:ExportProfile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  57 => 16,  53 => 14,  50 => 13,  47 => 12,  44 => 11,  41 => 10,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,  20 => 1,);
    }
}
/* {% oro_title_set({ params: {"%job.label%": form.vars.value.label } }) %}*/
/* */
/* {% set actionRoute = path('pim_importexport_export_profile_edit', { 'id': form.vars.value.id }) %}*/
/* */
/* {% set entityName = 'export profile' %}*/
/* {% set title = (entityName ~'.edit')|trans ~ ' - ' ~ form.vars.value.label %}*/
/* */
/* {% set indexRoute = path('pim_importexport_export_profile_index') %}*/
/* {% if form.vars.value.id %}*/
/*     {% set removeAcl = 'pim_importexport_export_profile_remove' %}*/
/*     {% set removeRoute = path('pim_importexport_export_profile_remove', { 'id': form.vars.value.id }) %}*/
/*     {% set importRoute = path('pim_importexport_export_profile_index') %}*/
/*     {% set removeMessage = 'confirmation.remove.export profile'|trans({ '%name%': form.vars.value.label }) %}*/
/*     {% set removeSuccessMessage = 'flash.export.removed'|trans %}*/
/* {% endif %}*/
/* */
/* {% include 'PimImportExportBundle:JobProfile:edit.html.twig' %}*/
/* */
