<?php

/* OroUIBundle::pager.html.twig */
class __TwigTemplate_b2c6e84f23127cddfd4d3374336e271cfa8c10979d463cb0ce557cbc0333be03 extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "<div class=\"pagination\">
    <ul>
        ";
            // line 4
            if (array_key_exists("previous", $context)) {
                // line 5
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">← Previous</a></li>
        ";
            } else {
                // line 7
                echo "        <li class=\"disabled\"><span>← Previous</span></li>
        ";
            }
            // line 9
            echo "
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 11
                echo "            ";
                if (($context["page"] != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                    // line 12
                    echo "            <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 14
                    echo "            <li class=\"active\"><span>";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
            ";
                }
                // line 16
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "
        ";
            // line 18
            if (array_key_exists("next", $context)) {
                // line 19
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                echo "\">Next →</a></li>
        ";
            } else {
                // line 21
                echo "        <li class=\"disabled\"><span>Next →</span></li>
        ";
            }
            // line 23
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "OroUIBundle::pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  72 => 19,  70 => 18,  67 => 17,  61 => 16,  55 => 14,  47 => 12,  44 => 11,  40 => 10,  37 => 9,  33 => 7,  27 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if pageCount > 1 %}*/
/* <div class="pagination">*/
/*     <ul>*/
/*         {% if previous is defined %}*/
/*         <li><a href="{{ path(route, query|merge({ (pageParameterName): previous })) }}">← Previous</a></li>*/
/*         {% else %}*/
/*         <li class="disabled"><span>← Previous</span></li>*/
/*         {% endif %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% if page != current %}*/
/*             <li><a href="{{ path(route, query|merge({ (pageParameterName): page })) }}">{{ page }}</a></li>*/
/*             {% else %}*/
/*             <li class="active"><span>{{ page }}</span></li>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if next is defined %}*/
/*         <li><a href="{{ path(route, query|merge({ (pageParameterName): next })) }}">Next →</a></li>*/
/*         {% else %}*/
/*         <li class="disabled"><span>Next →</span></li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* */
