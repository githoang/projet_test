<?php

/* OroDataAuditBundle:Datagrid/Property:data.html.twig */
class __TwigTemplate_db21ffffc41f9ece5d2866981c82b71723c54cdd7c651ae018449758ac55d327 extends Twig_Template
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
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["fieldValue"], "new", array()));
                foreach ($context['_seq'] as $context["collKey"] => $context["collValue"]) {
                    // line 5
                    echo "        <li>
            <b>";
                    // line 6
                    echo twig_escape_filter($this->env, $context["collKey"], "html", null, true);
                    echo ":</b>
            ";
                    // line 7
                    if (twig_length_filter($this->env, $this->getAttribute($context["fieldValue"], "old", array()))) {
                        // line 8
                        echo "                <s>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fieldValue"], "old", array()), $context["collKey"], array(), "array"), "html", null, true);
                        echo "</s>
            ";
                    }
                    // line 10
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["collValue"], "html", null, true);
                    echo "
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['collKey'], $context['collValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "    ";
            } else {
                // line 14
                echo "        <li>
            <b>";
                // line 15
                echo twig_escape_filter($this->env, $context["fieldKey"], "html", null, true);
                echo ":</b>
            ";
                // line 16
                if ($this->getAttribute($this->getAttribute($context["fieldValue"], "old", array(), "any", false, true), "timestamp", array(), "any", true, true)) {
                    // line 17
                    echo "                <s>";
                    echo $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($context["fieldValue"], "old", array()));
                    echo "</s>
            ";
                } else {
                    // line 19
                    echo "                <s>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["fieldValue"], "old", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["fieldValue"], "old", array()), "")) : ("")), "html", null, true);
                    echo "</s>
            ";
                }
                // line 21
                echo "            ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["fieldValue"], "new", array(), "any", false, true), "timestamp", array(), "any", true, true)) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($context["fieldValue"], "new", array()))) : ((($this->getAttribute($context["fieldValue"], "new", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["fieldValue"], "new", array()), "")) : ("")))), "html", null, true);
                echo "
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fieldKey'], $context['fieldValue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:Datagrid/Property:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 25,  83 => 21,  77 => 19,  71 => 17,  69 => 16,  65 => 15,  62 => 14,  59 => 13,  49 => 10,  43 => 8,  41 => 7,  37 => 6,  34 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul>*/
/* {% for fieldKey, fieldValue in value %}*/
/*     {% if fieldKey == 'auditData' %}*/
/*         {% for collKey, collValue in fieldValue.new %}*/
/*         <li>*/
/*             <b>{{ collKey }}:</b>*/
/*             {% if fieldValue.old|length %}*/
/*                 <s>{{ fieldValue.old[collKey] }}</s>*/
/*             {% endif %}*/
/*             {{ collValue }}*/
/*         </li>*/
/*         {% endfor %}*/
/*     {% else %}*/
/*         <li>*/
/*             <b>{{ fieldKey }}:</b>*/
/*             {% if fieldValue.old.timestamp is defined %}*/
/*                 <s>{{ fieldValue.old|oro_format_datetime }}</s>*/
/*             {% else %}*/
/*                 <s>{{ fieldValue.old|default('') }}</s>*/
/*             {% endif %}*/
/*             {{ fieldValue.new.timestamp is defined ? fieldValue.new|oro_format_datetime : fieldValue.new|default('') }}*/
/*         </li>*/
/*     {% endif %}*/
/* {% endfor %}*/
/* </ul>*/
/* */
