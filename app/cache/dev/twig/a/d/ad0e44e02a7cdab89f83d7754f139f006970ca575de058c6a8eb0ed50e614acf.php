<?php

/* OroDataAuditBundle::change_history_link.html.twig */
class __TwigTemplate_297608546851c9f0dafed451c38046c799d6d4c660cf8bc4828ce22c8b272c88 extends Twig_Template
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
        echo "<li><a class=\"no-hash\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["audit_path"]) ? $context["audit_path"] : $this->getContext($context, "audit_path")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"
     id=\"view-activity-btn\" title=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Change History"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Change History"), "html", null, true);
        echo "</a></li>

";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle::change_history_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <li><a class="no-hash" href="{{ path(audit_path, {entity:entity, id:id}) }}"*/
/*      id="view-activity-btn" title="{{ title }} - {{ 'Change History'|trans }}">{{ 'Change History'|trans }}</a></li>*/
/* */
/* */
