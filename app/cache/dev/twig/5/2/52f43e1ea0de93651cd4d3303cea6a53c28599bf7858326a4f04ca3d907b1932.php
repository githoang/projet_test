<?php

/* PimDashboardBundle:Widget:base.html.twig */
class __TwigTemplate_66072164b142e815391d0b6ea62446e54d796ddd7a54a094a89c23bfb1cbaee0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'widget_outer' => array($this, 'block_widget_outer'),
            'widget_inner' => array($this, 'block_widget_inner'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('widget_outer', $context, $blocks);
    }

    public function block_widget_outer($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"quick-launchpad-widget span6\">
        <div class=\"clearfix\">
            ";
        // line 4
        $this->displayBlock('widget_inner', $context, $blocks);
        // line 16
        echo "        </div>
    </div>
";
    }

    // line 4
    public function block_widget_inner($context, array $blocks = array())
    {
        // line 5
        echo "                ";
        if (array_key_exists("widgetTitle", $context)) {
            // line 6
            echo "                    <div class=\"widget-header\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, (isset($context["widgetTitle"]) ? $context["widgetTitle"] : $this->getContext($context, "widgetTitle")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 10
        echo "                ";
        if (array_key_exists("widgetContent", $context)) {
            // line 11
            echo "                    <div class=\"widget-content\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["widgetContent"]) ? $context["widgetContent"] : $this->getContext($context, "widgetContent")), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 15
        echo "            ";
    }

    public function getTemplateName()
    {
        return "PimDashboardBundle:Widget:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  60 => 12,  57 => 11,  54 => 10,  48 => 7,  45 => 6,  42 => 5,  39 => 4,  33 => 16,  31 => 4,  27 => 2,  21 => 1,);
    }
}
/* {% block widget_outer %}*/
/*     <div class="quick-launchpad-widget span6">*/
/*         <div class="clearfix">*/
/*             {% block widget_inner %}*/
/*                 {% if widgetTitle is defined %}*/
/*                     <div class="widget-header">*/
/*                         {{ widgetTitle }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*                 {% if widgetContent is defined %}*/
/*                     <div class="widget-content">*/
/*                         {{ widgetContent }}*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
