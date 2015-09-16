<?php

/* OroEmailBundle:Email/Datagrid/Property:recipients.html.twig */
class __TwigTemplate_7f0e20ac750f51b6b6e797023eab812f0e1163f59953961f51fa0f67ea634652 extends Twig_Template
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
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email/Datagrid/Property:recipients.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        $context["valueArray"] = $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "toArray", array());
        // line 4
        $context["recipients"] = array();
        // line 5
        if ($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "first", array())) {
            // line 6
            echo "    ";
            $context["recipients"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "first", array()), "email", array()), "getRecipients", array(), "method");
        }
        // line 8
        echo "
";
        // line 9
        echo $context["EA"]->getrecipient_email_addresses((isset($context["recipients"]) ? $context["recipients"] : $this->getContext($context, "recipients")), false, true);
        echo "




";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/Datagrid/Property:recipients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  34 => 8,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* */
/* {% set valueArray = value.toArray %}*/
/* {% set recipients = {} %}*/
/* {% if value.first %}*/
/*     {% set recipients = value.first.email.getRecipients() %}*/
/* {% endif %}*/
/* */
/* {{ EA.recipient_email_addresses(recipients, false, true) }}*/
/* */
/* */
/* */
/* */
/* */
