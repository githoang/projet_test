<?php

/* OroNavigationBundle:Pinbar:help.html.twig */
class __TwigTemplate_c2e82c52ccdad373d10fb11de413ddc73b3e128616d97cd75492b1759625043a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroNavigationBundle:Pinbar:help.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("How to use Pinbar", array(), "messages");
    }

    // line 4
    public function block_page_container($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"container-fluid\">
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "</div>
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"clearfix\">

        <h3>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("How To Use Pinbar", array(), "messages");
        echo "</h3>

        <p>
            ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro_navigation.pinbar.pin.help"), "html", null, true);
        echo "
            <br />
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro_navigation.pinbar.restore.help"), "html", null, true);
        echo "
        </p>

    </div>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Pinbar:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  61 => 12,  55 => 9,  51 => 7,  48 => 6,  43 => 19,  41 => 6,  38 => 5,  35 => 4,  29 => 3,  20 => 1,);
    }
}
/* {% extends bap.layout %}*/
/* */
/* {% block title %}{% trans %}How to use Pinbar{% endtrans %}{% endblock %}*/
/* {% block page_container %}*/
/* <div class="container-fluid">*/
/* {% block content %}*/
/*     <div class="clearfix">*/
/* */
/*         <h3>{% trans %}How To Use Pinbar{% endtrans %}</h3>*/
/* */
/*         <p>*/
/*             {{ 'oro_navigation.pinbar.pin.help'|trans }}*/
/*             <br />*/
/*             {{ 'oro_navigation.pinbar.restore.help'|trans }}*/
/*         </p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
