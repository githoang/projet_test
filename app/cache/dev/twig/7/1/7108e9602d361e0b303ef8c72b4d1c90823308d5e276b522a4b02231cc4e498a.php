<?php

/* OroNavigationBundle:Shortcut:actionslist.html.twig */
class __TwigTemplate_606abcad84f57ec8035a760958c365c46b987d7f104c4f96f7cbb34d395dd607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroNavigationBundle:Shortcut:actionslist.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Shortcut Actions List", array(), "messages");
    }

    // line 4
    public function block_page_container($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid\">
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "</div>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"clearfix\">
            <h3>";
        // line 8
        echo $this->env->getExtension('translator')->getTranslator()->trans("Shortcut Actions List", array(), "messages");
        echo "</h3>

            ";
        // line 10
        if ((twig_length_filter($this->env, (isset($context["actionsList"]) ? $context["actionsList"] : $this->getContext($context, "actionsList"))) > 0)) {
            // line 11
            echo "                <table class=\"table table-bordered table-striped\">
                    <thead>
                        <tr>
                            <th>Action Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actionsList"]) ? $context["actionsList"] : $this->getContext($context, "actionsList")));
            foreach ($context['_seq'] as $context["code"] => $context["action"]) {
                // line 20
                echo "                        <tr>
                            <td><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "url", array(), "array"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "</a></td>
                            <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "description", array(), "array"), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </tbody>
                </table>
            ";
        } else {
            // line 28
            echo "                <h2>";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Sorry, you don't have any action", array(), "messages");
            echo "</h2>
            ";
        }
        // line 30
        echo "
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Shortcut:actionslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  98 => 28,  93 => 25,  84 => 22,  78 => 21,  75 => 20,  71 => 19,  61 => 11,  59 => 10,  54 => 8,  51 => 7,  48 => 6,  43 => 34,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  20 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* */
/* {% block title %}{% trans %}Shortcut Actions List{% endtrans %}{% endblock %}*/
/* {% block page_container %}*/
/* <div class="container-fluid">*/
/*     {% block content %}*/
/*         <div class="clearfix">*/
/*             <h3>{% trans %}Shortcut Actions List{% endtrans %}</h3>*/
/* */
/*             {% if actionsList|length > 0 %}*/
/*                 <table class="table table-bordered table-striped">*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <th>Action Name</th>*/
/*                             <th>Description</th>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for code, action in actionsList %}*/
/*                         <tr>*/
/*                             <td><a href="{{ action["url"] }}" target="_blank">{{ code }}</a></td>*/
/*                             <td>{{ action["description"] }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             {% else %}*/
/*                 <h2>{% trans %}Sorry, you don't have any action{% endtrans %}</h2>*/
/*             {% endif %}*/
/* */
/*         </div>*/
/* */
/*     {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
