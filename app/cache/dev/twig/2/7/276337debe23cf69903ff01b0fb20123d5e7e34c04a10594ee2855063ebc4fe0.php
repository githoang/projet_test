<?php

/* PimEnrichBundle:MassEditAction:warning.html.twig */
class __TwigTemplate_afb50ef2f960de9abd7b607630c85ab22ed1b504478ff7e4dd68bb99969dc2e9 extends Twig_Template
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
        $context["warningMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "operation", array()), "vars", array()), "data", array()), "getWarningMessages", array());
        // line 2
        if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
            // line 3
            echo "    <div class=\"alert alert-info\">
        <div class=\"message\">
            <ul>
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 7
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["message"], "key", array()), $this->getAttribute($context["message"], "options", array())), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:MassEditAction:warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  32 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set warningMessages = form.operation.vars.data.getWarningMessages %}*/
/* {% if warningMessages|length > 0 %}*/
/*     <div class="alert alert-info">*/
/*         <div class="message">*/
/*             <ul>*/
/*                 {% for message in warningMessages %}*/
/*                     <li>{{ message.key|trans(message.options) }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* {% endif %}*/
/* */
