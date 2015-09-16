<?php

/* OroEmailBundle:Email:searchResult.html.twig */
class __TwigTemplate_0b6781cd6a7f853a56c128e1ce76fa8cfa5ec7b64182d3e6f9eef667518f476b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("OroSearchBundle:Search:searchResultItem.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 6);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroSearchBundle:Search:searchResultItem.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["UI"] = $this->loadTemplate("OroUserBundle::macros.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 7);
        // line 8
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email:searchResult.html.twig", 8);
        // line 10
        $context["iconType"] = "envelope";
        // line 12
        $context["recordUrl"] = $this->getAttribute((isset($context["indexer_item"]) ? $context["indexer_item"] : $this->getContext($context, "indexer_item")), "recordUrl", array());
        // line 13
        $context["title"] = (((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) ? ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array())) : ($this->getAttribute((isset($context["indexer_item"]) ? $context["indexer_item"] : $this->getContext($context, "indexer_item")), "recordTitle", array())));
        // line 15
        $context["entityType"] = $this->env->getExtension('translator')->trans("Email");
        // line 17
        $context["entityInfo"] = array(0 => array("title" => "Sent", "value" => $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute(        // line 18
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sentAt", array()))), 1 => array("title" => "From", "value" =>         // line 19
$context["EA"]->getemail_address($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromEmailAddress", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromName", array()))), 2 => array("title" => "To", "value" =>         // line 20
$context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "to"), "method"))));
        // line 6
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:searchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  39 => 20,  38 => 19,  37 => 18,  36 => 17,  34 => 15,  32 => 13,  30 => 12,  28 => 10,  26 => 8,  24 => 7,  11 => 6,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity       - email entity Oro\Bundle\EmailBundle\Entity\Email*/
/*     * indexer_item - indexer item Oro\Bundle\SearchBundle\Query\Result\Item*/
/* #}*/
/* {% extends 'OroSearchBundle:Search:searchResultItem.html.twig' %}*/
/* {% import 'OroUserBundle::macros.html.twig' as UI %}*/
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* */
/* {% set iconType = 'envelope' %}*/
/* */
/* {% set recordUrl = indexer_item.recordUrl %}*/
/* {% set title = entity ? entity.subject : indexer_item.recordTitle %}*/
/* */
/* {% set entityType = 'Email'|trans %}*/
/* */
/* {% set entityInfo = [*/
/*     {'title': 'Sent', 'value': entity.sentAt|oro_format_datetime},*/
/*     {'title': 'From', 'value': EA.email_address(entity.fromEmailAddress, entity.fromName)},*/
/*     {'title': 'To', 'value': EA.recipient_email_addresses(entity.recipients('to'))},*/
/* ] %}*/
/* */
