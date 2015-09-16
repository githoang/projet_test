<?php

/* OroEmailBundle:Email/dialog:update.html.twig */
class __TwigTemplate_3ca8eed834f99065dd01a75c1c61a3ad954f0563f2687d674fe39ca0e21e32ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroFormBundle:Form:fields.html.twig"));
        // line 8
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Email/dialog:update.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('page_container', $context, $blocks);
    }

    public function block_page_container($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"widget-content email-form\">
    ";
        // line 12
        if ((isset($context["saved"]) ? $context["saved"] : $this->getContext($context, "saved"))) {
            // line 13
            echo "        <script type=\"text/javascript\">
            require(['underscore', 'oro/translator', 'oro/widget-manager', 'oro/messenger', 'oro/mediator'],
            function(_, __, widgetManager, messenger, mediator) {
                widgetManager.getWidgetInstance(";
            // line 16
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ", function(widget) {
                    messenger.notificationFlashMessage('success', __('The email was sent'));
                    widget.remove();
                    ";
            // line 19
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "gridName", array()))) {
                // line 20
                echo "                    mediator.trigger('datagrid:doRefresh:' + ";
                echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "gridName", array()));
                echo ");
                    ";
            }
            // line 22
            echo "                });
            });
        </script>
    ";
        } else {
            // line 26
            echo "        ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "valid", array()) && twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())))) {
                // line 27
                echo "            <div class=\"alert alert-error\">
                <div class=\"message\">
                    ";
                // line 29
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
                echo "
                </div>
            </div>
        ";
            }
            // line 33
            echo "        <div class=\"form-container\">
            <form id=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo $this->env->getExtension('routing')->getPath("oro_email_email_create");
            echo "\" method=\"post\">
                <fieldset class=\"form-horizontal\">
                    ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "gridName", array()), 'row');
            echo "
                    ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "from", array()), 'row', array("label" => "From"));
            echo "
                    ";
            // line 38
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "to", array()), 'row', array("label" => "To"));
            echo "
                    ";
            // line 39
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row', array("label" => "Subject"));
            echo "
                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row', array("label" => "Body", "attr" => array("class" => "email-body")));
            echo "
                    ";
            // line 41
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <button class=\"btn\" type=\"reset\">";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Send"), "html", null, true);
            echo "</button>
                    </div>
                </fieldset>
            </form>
            ";
            // line 48
            echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
        </div>
    ";
        }
        // line 51
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Email/dialog:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 51,  123 => 48,  116 => 44,  112 => 43,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  80 => 34,  77 => 33,  70 => 29,  66 => 27,  63 => 26,  57 => 22,  51 => 20,  49 => 19,  43 => 16,  38 => 13,  36 => 12,  33 => 11,  27 => 10,  24 => 9,  22 => 8,  20 => 7,);
    }
}
/* {#*/
/*     Available variables:*/
/*     * entity       - Oro\Bundle\EmailBundle\Model\Email*/
/*     * form         - Oro\Bundle\EmailBundle\Form\type\EmailType*/
/*     * saved        - bool*/
/* #}*/
/* {% form_theme form with ['OroFormBundle:Form:fields.html.twig'] %}*/
/* {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/* */
/* {% block page_container %}*/
/* <div class="widget-content email-form">*/
/*     {% if saved %}*/
/*         <script type="text/javascript">*/
/*             require(['underscore', 'oro/translator', 'oro/widget-manager', 'oro/messenger', 'oro/mediator'],*/
/*             function(_, __, widgetManager, messenger, mediator) {*/
/*                 widgetManager.getWidgetInstance({{ app.request.get('_wid')|json_encode|raw }}, function(widget) {*/
/*                     messenger.notificationFlashMessage('success', __('The email was sent'));*/
/*                     widget.remove();*/
/*                     {% if form.vars.value.gridName|length %}*/
/*                     mediator.trigger('datagrid:doRefresh:' + {{ form.vars.value.gridName|json_encode|raw }});*/
/*                     {% endif %}*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% else %}*/
/*         {% if not form.vars.valid and form.vars.errors|length %}*/
/*             <div class="alert alert-error">*/
/*                 <div class="message">*/
/*                     {{ form_errors(form) }}*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="form-container">*/
/*             <form id="{{ form.vars.name }}" action="{{ path('oro_email_email_create') }}" method="post">*/
/*                 <fieldset class="form-horizontal">*/
/*                     {{ form_row(form.gridName) }}*/
/*                     {{ form_row(form.from, {'label': 'From'}) }}*/
/*                     {{ form_row(form.to, {'label': 'To'}) }}*/
/*                     {{ form_row(form.subject, {'label': 'Subject'}) }}*/
/*                     {{ form_row(form.body, {'label': 'Body', 'attr': {'class': 'email-body'} }) }}*/
/*                     {{ form_rest(form) }}*/
/*                     <div class="widget-actions form-actions" style="display: none;">*/
/*                         <button class="btn" type="reset">{{ 'Cancel'|trans }}</button>*/
/*                         <button class="btn btn-primary" type="submit">{{ 'Send'|trans }}</button>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </form>*/
/*             {{ oro_form_js_validation(form) }}*/
/*         </div>*/
/*     {% endif %}*/
/* </div>*/
/* {% endblock %}*/
/* */
