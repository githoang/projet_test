<?php

/* OroDataAuditBundle:Datagrid/Property:new.html.twig */
class __TwigTemplate_862dd4d4fcdff967ca5076406e475bb5515f7ffd766c4a4ce821166fc7072800 extends Twig_Template
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
        echo "<ul>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["fieldKey"] => $context["fieldValue"]) {
            // line 3
            echo "    ";
            if (($context["fieldKey"] == "auditData")) {
                // line 4
                echo "        ";
                if (twig_length_filter($this->env, $this->getAttribute($context["fieldValue"], "new", array()))) {
                    // line 5
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fieldValue"], "new", array()));
                    foreach ($context['_seq'] as $context["collKey"] => $context["collValue"]) {
                        // line 6
                        echo "    <li>
        <b>";
                        // line 7
                        echo twig_escape_filter($this->env, $context["collKey"], "html", null, true);
                        echo ":</b> ";
                        echo twig_escape_filter($this->env, $context["collValue"], "html", null, true);
                        echo "
    </li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['collKey'], $context['collValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 10
                    echo "        ";
                }
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "    <li>
        <b>";
                // line 13
                echo twig_escape_filter($this->env, $context["fieldKey"], "html", null, true);
                echo ":</b> ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["fieldValue"], "new", array(), "any", false, true), "timestamp", array(), "any", true, true)) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($context["fieldValue"], "new", array()))) : ($this->getAttribute($context["fieldValue"], "new", array()))), "html", null, true);
                echo "
    </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldKey'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Datagrid/Property:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  60 => 13,  57 => 12,  54 => 11,  51 => 10,  40 => 7,  37 => 6,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/* {% for fieldKey, fieldValue in value %}*/
/*     {% if fieldKey == 'auditData' %}*/
/*         {% if fieldValue.new|length %}*/
/*         {% for collKey, collValue in fieldValue.new %}*/
/*     <li>*/
/*         <b>{{ collKey }}:</b> {{ collValue }}*/
/*     </li>*/
/*         {% endfor %}*/
/*         {% endif %}*/
/*     {% else %}*/
/*     <li>*/
/*         <b>{{ fieldKey }}:</b> {{ fieldValue.new.timestamp is defined ? fieldValue.new|oro_format_datetime : fieldValue.new }}*/
/*     </li>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </ul>*/
/* */
