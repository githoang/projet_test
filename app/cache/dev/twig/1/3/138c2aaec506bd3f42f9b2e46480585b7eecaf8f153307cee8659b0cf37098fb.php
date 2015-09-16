<?php

/* OroUserBundle:Status:index.html.twig */
class __TwigTemplate_dd8b09d465c3ceddab2e3f2cfc9d3496bf3aa8816e9270bf67c01bf11eb6d91b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array(), "any", true, true)) ? ($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array())) : ("OroUserBundle::layout.html.twig")), "OroUserBundle:Status:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("User Statuses.", array(), "messages");
        // line 5
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentStatus", array())) {
            // line 6
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Current Status", array(), "messages");
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentStatus", array()), "status", array()), "html", null, true);
            echo "
        ";
        }
        // line 8
        echo "    </h2>
    ";
        // line 9
        echo $this->env->getExtension('knp_pagination')->render((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 11
            echo "        <div class=\"alert ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentStatus", array()) == $context["status"])) {
                echo "alert-success";
            }
            echo "\">
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_user_status_delete", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
            echo "\" class=\"close\" type=\"button\"><i class=\"icon-trash\"></i></a>
            ";
            // line 13
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "currentStatus", array()) != $context["status"])) {
                // line 14
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_user_status_set_current", array("id" => $this->getAttribute($context["status"], "id", array()))), "html", null, true);
                echo "\" class=\"close\" type=\"button\"><i class=\"icon-plus-sign\"></i></a>
            ";
            } else {
                // line 16
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("oro_user_status_clear_current");
                echo "\" class=\"close\" type=\"button\"><i class=\"icon-minus-sign\"></i></a>
            ";
            }
            // line 18
            echo "            <p>";
            echo $this->env->getExtension('oro_locale_datetime')->formatDate($this->getAttribute($context["status"], "createdAt", array()));
            echo "</p>
            <h3>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["status"], "status", array()), "html", null, true);
            echo "</h3>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        echo $this->env->getExtension('knp_pagination')->render((isset($context["statuses"]) ? $context["statuses"] : $this->getContext($context, "statuses")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Status:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  85 => 19,  80 => 18,  74 => 16,  68 => 14,  66 => 13,  62 => 12,  55 => 11,  51 => 10,  47 => 9,  44 => 8,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends bap.layout is defined ? bap.layout : 'OroUserBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h2>{% trans %}User Statuses.{% endtrans %}*/
/*         {% if user.currentStatus %}*/
/*             {% trans %}Current Status{% endtrans %}: {{ user.currentStatus.status }}*/
/*         {% endif %}*/
/*     </h2>*/
/*     {{ knp_pagination_render(statuses) }}*/
/*     {% for status in statuses %}*/
/*         <div class="alert {% if user.currentStatus == status %}alert-success{% endif %}">*/
/*             <a href="{{ path('oro_user_status_delete', { id: status.id }) }}" class="close" type="button"><i class="icon-trash"></i></a>*/
/*             {% if user.currentStatus != status %}*/
/*                 <a href="{{ path('oro_user_status_set_current', { id: status.id }) }}" class="close" type="button"><i class="icon-plus-sign"></i></a>*/
/*             {% else %}*/
/*                 <a href="{{ path('oro_user_status_clear_current') }}" class="close" type="button"><i class="icon-minus-sign"></i></a>*/
/*             {% endif %}*/
/*             <p>{{ status.createdAt|oro_format_date }}</p>*/
/*             <h3>{{ status.status }}</h3>*/
/*         </div>*/
/*     {% endfor %}*/
/*     {{ knp_pagination_render(statuses) }}*/
/* {% endblock %}*/
/* */
