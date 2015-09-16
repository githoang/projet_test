<?php

/* OroEmailBundle:Email:view.html.twig */
class __TwigTemplate_94bfaf4c57c8200ee32290e730d8b1d82c9895ef29d837d9636a46d8e0df3d2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 5
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEmailBundle:Email:view.html.twig", 5);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:view.html.twig", 6);
        // line 7
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email:view.html.twig", 7);

        $this->env->getExtension("oro_title")->set(array("params" => array("%subject%" => $this->getAttribute(        // line 8
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()))));
        // line 5
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $context["breadcrumbs"] = array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexLabel" => "Emails", "entityTitle" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()));
        // line 12
        echo "    ";
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 15
    public function block_stats($context, array $blocks = array())
    {
        // line 16
        echo "    <li>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo ": ";
        echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array()))) : ("N/A"));
        echo "</li>
";
    }

    // line 19
    public function block_content_data($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context["id"] = "email-profile";
        // line 21
        echo "
    ";
        // line 22
        $context["attributes"] = array(0 =>         // line 23
$context["UI"]->getattibuteRow("Sent", $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sentAt", array()))), 1 =>         // line 24
$context["UI"]->getattibuteRow("From", $context["EA"]->getemail_address($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromEmailAddress", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromName", array()))), 2 =>         // line 25
$context["UI"]->getattibuteRow("To", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "to"), "method"))), 3 =>         // line 26
$context["UI"]->getattibuteRow("Cc", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "cc"), "method"))), 4 =>         // line 27
$context["UI"]->getattibuteRow("Bcc", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "bcc"), "method"))), 5 =>         // line 28
$context["UI"]->getattibuteRow("Subject", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array())));
        // line 31
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()), "hasAttachments", array())) {
            // line 32
            echo "        ";
            $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array(0 => $context["UI"]->getattibuteRow("Attachments", $context["EA"]->getattachments($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()), "attachments", array())))));
            // line 33
            echo "    ";
        }
        // line 34
        echo "    ";
        $context["attributes"] = twig_array_merge((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), array(0 => $context["EA"]->getbody($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()))));
        // line 35
        echo "
    ";
        // line 36
        $context["data"] = array("dataBlocks" => array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" =>         // line 46
(isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")))))));
        // line 53
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 53,  96 => 46,  95 => 36,  92 => 35,  89 => 34,  86 => 33,  83 => 32,  80 => 31,  78 => 28,  77 => 27,  76 => 26,  75 => 25,  74 => 24,  73 => 23,  72 => 22,  69 => 21,  66 => 20,  63 => 19,  54 => 16,  51 => 15,  44 => 12,  41 => 11,  38 => 10,  34 => 5,  32 => 8,  29 => 7,  27 => 6,  11 => 5,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity       - email entity Oro\Bundle\EmailBundle\Entity\Email*/
/* #}*/
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* {% oro_title_set({params : {"%subject%": entity.subject} }) %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {'entity': entity, 'indexLabel': 'Emails', 'entityTitle': entity.subject } %}*/
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block stats %}*/
/*     <li>{{ 'Created'|trans }}: {{ breadcrumbs.entity.createdAt ? breadcrumbs.entity.createdAt|oro_format_datetime : 'N/A' }}</li>*/
/* {% endblock stats %}*/
/* */
/* {% block content_data %}*/
/*     {% set id = 'email-profile' %}*/
/* */
/*     {% set attributes = [*/
/*             UI.attibuteRow('Sent', entity.sentAt|oro_format_datetime),*/
/*             UI.attibuteRow('From', EA.email_address(entity.fromEmailAddress, entity.fromName)),*/
/*             UI.attibuteRow('To', EA.recipient_email_addresses(entity.recipients('to'))),*/
/*             UI.attibuteRow('Cc', EA.recipient_email_addresses(entity.recipients('cc'))),*/
/*             UI.attibuteRow('Bcc', EA.recipient_email_addresses(entity.recipients('bcc'))),*/
/*             UI.attibuteRow('Subject', entity.subject)*/
/*         ]*/
/*     %}*/
/*     {% if entity.emailBody.hasAttachments %}*/
/*         {% set attributes = attributes | merge([UI.attibuteRow('Attachments', EA.attachments(entity.emailBody.attachments))]) %}*/
/*     {% endif %}*/
/*     {% set attributes = attributes | merge([EA.body(entity.emailBody)]) %}*/
/* */
/*     {% set data = {*/
/*         'dataBlocks':*/
/*             [*/
/*                 {*/
/*                     'title': 'General',*/
/*                     'class': 'active',*/
/*                     'subblocks': [*/
/*                         {*/
/*                             'title': null,*/
/*                             'useSpan': false,*/
/*                             'data': attributes*/
/*                         }*/
/*                     ]*/
/*                 }*/
/*             ]*/
/*         }*/
/*     %}*/
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
