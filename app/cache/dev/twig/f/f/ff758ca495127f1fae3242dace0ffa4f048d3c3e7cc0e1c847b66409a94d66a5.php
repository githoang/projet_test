<?php

/* PimEnrichBundle:Product:_left-details.html.twig */
class __TwigTemplate_b2ec07776ebb5916433277eedf65bdca7a51cd43c72a17a8a40ced7d80bcc18a extends Twig_Template
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
        echo "<li>
    ";
        // line 2
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("Family")), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, _twig_default_filter(twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "family", array())), $this->env->getExtension('translator')->trans("N/A")), "html", null, true);
        echo "
    ";
        // line 3
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("pim_enrich_product_change_family")) {
            // line 4
            echo "        <i id=\"edit-family\" class=\"icon-pencil\"></i>
    ";
        }
        // line 6
        echo "</li>

";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "groups", array())) != 0)) {
            // line 9
            echo "    <li>
        ";
            // line 10
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("Groups")), "html", null, true);
            echo ":
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "groups", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 12
                echo "            <a id=\"group-products-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" href=\"#\"
            ";
                // line 13
                if ($this->getAttribute($this->getAttribute($context["group"], "type", array()), "isVariant", array())) {
                    // line 14
                    echo "                data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\"
                data-original-title=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("info.group.axis", array("%attributes%" => twig_join_filter($this->getAttribute($context["group"], "attributes", array()), ", "))), "html", null, true);
                    echo "\"
            ";
                }
                // line 17
                echo "            >
                ";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "label", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 19
                echo "            </a>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </li>
";
        }
        // line 23
        echo "
<li>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created"))) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "loggedAt", array()), "Y-m-d H:i:s")) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("by"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created"))) ? ($this->getAttribute((isset($context["created"]) ? $context["created"] : $this->getContext($context, "created")), "author", array())) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
        echo "</li>
<li>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Last update"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated"))) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated")), "loggedAt", array()), "Y-m-d H:i:s")) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("by"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated"))) ? ($this->getAttribute((isset($context["updated"]) ? $context["updated"] : $this->getContext($context, "updated")), "author", array())) : ($this->env->getExtension('translator')->trans("N/A"))), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:Product:_left-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 25,  110 => 24,  107 => 23,  103 => 21,  88 => 19,  82 => 18,  79 => 17,  74 => 15,  71 => 14,  69 => 13,  64 => 12,  47 => 11,  43 => 10,  40 => 9,  38 => 8,  34 => 6,  30 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     {{ 'Family'|trans|capitalize }}: {{ form.vars.value.family|capitalize|default('N/A'|trans) }}*/
/*     {% if resource_granted('pim_enrich_product_change_family') %}*/
/*         <i id="edit-family" class="icon-pencil"></i>*/
/*     {% endif %}*/
/* </li>*/
/* */
/* {% if form.vars.value.groups|length != 0 %}*/
/*     <li>*/
/*         {{ 'Groups'|trans|capitalize }}:*/
/*         {% for group in form.vars.value.groups %}*/
/*             <a id="group-products-{{ group.id }}" href="#"*/
/*             {% if group.type.isVariant %}*/
/*                 data-toggle="tooltip" data-placement="bottom" data-html="true"*/
/*                 data-original-title="{{ 'info.group.axis'|trans({'%attributes%': group.attributes|join(', ')}) }}"*/
/*             {% endif %}*/
/*             >*/
/*                 {{ group.label }}</a>{% if not loop.last %}, {% endif %}*/
/*             </a>*/
/*         {% endfor %}*/
/*     </li>*/
/* {% endif %}*/
/* */
/* <li>{{ 'Created'|trans }}: {{ created ? created.loggedAt|date("Y-m-d H:i:s") : 'N/A'|trans }} {{ 'by'|trans }} {{ created ? created.author : 'N/A'|trans }}</li>*/
/* <li>{{ 'Last update'|trans }}: {{ updated ? updated.loggedAt|date("Y-m-d H:i:s") : 'N/A'|trans }} {{ 'by'|trans }} {{ updated ? updated.author : 'N/A'|trans }}</li>*/
/* */
