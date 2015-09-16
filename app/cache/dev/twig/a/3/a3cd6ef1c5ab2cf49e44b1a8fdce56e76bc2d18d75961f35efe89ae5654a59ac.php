<?php

/* OroEmailBundle:Email/dialog:view.html.twig */
class __TwigTemplate_49e28650865156374fb1892a7b7dfb6325750d0c5bbe6eb4bf714cb26e4a9397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/dialog:view.html.twig", 5);
        // line 6
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/dialog:view.html.twig", 6);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container-fluid email-body-holder widget-content\">
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "</div>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <div class=\"form-horizontal\">
        <div class=\"control-group\">
            ";
        // line 13
        echo $context["UI"]->getattibuteRow("Sent", $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sentAt", array())));
        echo "
            ";
        // line 14
        echo $context["UI"]->getattibuteRow("From", $context["EA"]->getemail_address($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromEmailAddress", array()), $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromName", array()), true));
        echo "
            ";
        // line 15
        echo $context["UI"]->getattibuteRow("To", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "to"), "method"), true));
        echo "
            ";
        // line 16
        echo $context["UI"]->getattibuteRow("Cc", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "cc"), "method"), true));
        echo "
            ";
        // line 17
        echo $context["UI"]->getattibuteRow("Bcc", $context["EA"]->getrecipient_email_addresses($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "recipients", array(0 => "bcc"), "method"), true));
        echo "
            ";
        // line 18
        echo $context["UI"]->getattibuteRow("Subject", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()));
        echo "
            ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()), "hasAttachments", array())) {
            // line 20
            echo "                ";
            echo $context["UI"]->getattibuteRow("Attachments", $context["EA"]->getattachments($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()), "attachments", array())));
            echo "
            ";
        }
        // line 22
        echo "            ";
        echo $context["EA"]->getbody($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "emailBody", array()), "scrollable-container");
        echo "
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/dialog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  77 => 20,  75 => 19,  71 => 18,  67 => 17,  63 => 16,  59 => 15,  55 => 14,  51 => 13,  47 => 11,  44 => 10,  39 => 26,  37 => 10,  34 => 9,  28 => 8,  25 => 7,  23 => 6,  21 => 5,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity       - email entity Oro\Bundle\EmailBundle\Entity\Email*/
/* #}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* */
/* {% block page_container %}*/
/* <div class="container-fluid email-body-holder widget-content">*/
/*     {% block content %}*/
/*     <div class="form-horizontal">*/
/*         <div class="control-group">*/
/*             {{ UI.attibuteRow('Sent', entity.sentAt|oro_format_datetime) }}*/
/*             {{ UI.attibuteRow('From', EA.email_address(entity.fromEmailAddress, entity.fromName, true)) }}*/
/*             {{ UI.attibuteRow('To', EA.recipient_email_addresses(entity.recipients('to'), true)) }}*/
/*             {{ UI.attibuteRow('Cc', EA.recipient_email_addresses(entity.recipients('cc'), true)) }}*/
/*             {{ UI.attibuteRow('Bcc', EA.recipient_email_addresses(entity.recipients('bcc'), true)) }}*/
/*             {{ UI.attibuteRow('Subject', entity.subject) }}*/
/*             {% if entity.emailBody.hasAttachments %}*/
/*                 {{ UI.attibuteRow('Attachments', EA.attachments(entity.emailBody.attachments)) }}*/
/*             {% endif %}*/
/*             {{ EA.body(entity.emailBody, 'scrollable-container') }}*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
