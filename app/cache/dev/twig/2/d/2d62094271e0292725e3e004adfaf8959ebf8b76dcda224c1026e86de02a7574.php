<?php

/* OroEmailBundle:Email:activity.html.twig */
class __TwigTemplate_8a8c50099c2ff8982725e136306ea245abcf428bb82fcff85867e651442e3499 extends Twig_Template
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
        // line 6
        echo "<tr>
    <td class=\"integer-cell\" style=\"display: none;\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
    <td class=\"string-cell\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["EA"]) ? $context["EA"] : $this->getContext($context, "EA")), "email_address", array(0 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromEmailAddress", array()), 1 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fromName", array()), 2 => (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format"))), "method"), "html", null, true);
        echo "</td>
    <td class=\"string-cell\"><a class=\"view-email-button no-hash\" title=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_view", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "subject", array()), "html", null, true);
        echo "</a></td>
    <td class=\"datetime-cell\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Locale"]) ? $context["Locale"] : $this->getContext($context, "Locale")), "time", array(0 => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sentAt", array())), "method"), "html", null, true);
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:activity.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity - email entity Oro\Bundle\EmailBundle\Entity\Email*/
/* #}*/
/* {# TODO: This is a demo template. It need to be replaced with a real one #}*/
/* <tr>*/
/*     <td class="integer-cell" style="display: none;">{{ entity.id }}</td>*/
/*     <td class="string-cell">{{ EA.email_address(entity.fromEmailAddress, entity.fromName, format) }}</td>*/
/*     <td class="string-cell"><a class="view-email-button no-hash" title="{{ entity.subject }}" href="{{ path('oro_email_view', {id:entity.id}) }}">{{ entity.subject }}</a></td>*/
/*     <td class="datetime-cell">{{ Locale.time(entity.sentAt) }}</td>*/
/* </tr>*/
/* */
