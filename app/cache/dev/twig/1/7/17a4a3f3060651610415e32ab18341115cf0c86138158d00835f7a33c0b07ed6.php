<?php

/* OroEmailBundle:Email:activities.html.twig */
class __TwigTemplate_90143f03e51df74199fe9db8f3af78a6294d7a1769b41dc348396d924f307dd2 extends Twig_Template
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
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email:activities.html.twig", 6);
        // line 7
        $context["EA"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Email:activities.html.twig", 7);
        // line 8
        echo "
<div id=\"emails-grid\">
    <div class=\"clearfix\">
        <div class=\"clearfix\">
            <div class=\"container-fluid\">
                <div class=\"grid-container\">
                    <table class=\"grid table-hover table table-bordered table-condensed\" style=\"display: table;\">
                        <thead>
                        <tr>
                            <th style=\"display: none;\"><span>ID</span></th>
                            <th><span>From </span></th>
                            <th><span>To </span></th>
                            <th><span>Subject </span></th>
                            <th><span>Sent </span></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                            <tr>
                                <td class=\"integer-cell\" style=\"display: none;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                                <td class=\"string-cell\">";
            // line 28
            echo $context["EA"]->getemail_address($this->getAttribute($context["entity"], "fromEmailAddress", array()), $this->getAttribute($context["entity"], "fromName", array()));
            echo "</td>
                                <td class=\"string-cell\"><a class=\"view-email-entity-btn no-hash\" title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subject", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_view", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subject", array()), "html", null, true);
            echo "</a></td>
                                <td class=\"datetime-cell\">";
            // line 30
            echo $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($context["entity"], "sentAt", array()));
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email:activities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  65 => 30,  57 => 29,  53 => 28,  49 => 27,  46 => 26,  42 => 25,  23 => 8,  21 => 7,  19 => 6,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entities - array of activity entities. Which items of this array is an associative array contains subset of fields of an activity entity*/
/* #}*/
/* {# TODO: This is a temporary template created for demo purposes. It will be removed when 'display activities' functionality is implemented  #}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* {% import 'OroEmailBundle::macros.html.twig' as EA %}*/
/* */
/* <div id="emails-grid">*/
/*     <div class="clearfix">*/
/*         <div class="clearfix">*/
/*             <div class="container-fluid">*/
/*                 <div class="grid-container">*/
/*                     <table class="grid table-hover table table-bordered table-condensed" style="display: table;">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th style="display: none;"><span>ID</span></th>*/
/*                             <th><span>From </span></th>*/
/*                             <th><span>To </span></th>*/
/*                             <th><span>Subject </span></th>*/
/*                             <th><span>Sent </span></th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr>*/
/*                                 <td class="integer-cell" style="display: none;">{{ entity.id }}</td>*/
/*                                 <td class="string-cell">{{ EA.email_address(entity.fromEmailAddress, entity.fromName) }}</td>*/
/*                                 <td class="string-cell"><a class="view-email-entity-btn no-hash" title="{{ entity.subject }}" href="{{ path('oro_email_view', {id:entity.id}) }}">{{ entity.subject }}</a></td>*/
/*                                 <td class="datetime-cell">{{ entity.sentAt|oro_format_datetime }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
