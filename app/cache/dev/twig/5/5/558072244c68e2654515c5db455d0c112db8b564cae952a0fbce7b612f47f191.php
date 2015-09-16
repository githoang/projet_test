<?php

/* OroEmailBundle:Form:fields.html.twig */
class __TwigTemplate_2aec315feb11ee032eaf8d2fe737b9f1773b768bed5efeab5373039b512ad536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_email_template_list_row' => array($this, 'block_oro_email_template_list_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_email_template_list_row', $context, $blocks);
    }

    public function block_oro_email_template_list_row($context, array $blocks = array())
    {
        // line 2
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oro/email/template/view', 'oro/email/template/collection'],
        function(\$, View, Collection) {
            \$(function () {
                'use strict';
                new View({
                    el: \$('#";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "children", array()), (isset($context["depends_on_parent_field"]) ? $context["depends_on_parent_field"] : $this->getContext($context, "depends_on_parent_field")), array(), "array"), "vars", array()), "id", array()), "html", null, true);
        echo "'),
                    target: \$('#";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'),
                    collection: new Collection()
                });
            });
        })
    </script>
    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%= entity.get('id') %>\"><%= entity.get('name') %></option>
        <% }); %>
    </script>

    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  38 => 9,  34 => 8,  26 => 2,  20 => 1,);
    }
}
/* {% block oro_email_template_list_row %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/email/template/view', 'oro/email/template/collection'],*/
/*         function($, View, Collection) {*/
/*             $(function () {*/
/*                 'use strict';*/
/*                 new View({*/
/*                     el: $('#{{ form.parent.children[depends_on_parent_field].vars.id }}'),*/
/*                     target: $('#{{ id }}'),*/
/*                     collection: new Collection()*/
/*                 });*/
/*             });*/
/*         })*/
/*     </script>*/
/*     <script type="text/template" id="emailtemplate-chooser-template">*/
/*         <% _.each(entities, function(entity, i) { %>*/
/*         <option value="<%= entity.get('id') %>"><%= entity.get('name') %></option>*/
/*         <% }); %>*/
/*     </script>*/
/* */
/*     {{ form_row(form) }}*/
/* {% endblock %}*/
/* */
