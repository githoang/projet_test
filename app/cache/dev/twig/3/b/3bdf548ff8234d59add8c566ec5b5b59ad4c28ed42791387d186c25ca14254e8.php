<?php

/* OroUserBundle:Group:dialog.edit.html.twig */
class __TwigTemplate_7bea9559627a84a8cfd570d80b8bf55e8b2169ac051b7c5843080e6a1c72fc37 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "<div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 4
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
<form id=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("oro_user_group_update", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("oro_user_group_create"))), "html", null, true);
        echo "\" method=\"post\" class=\"form-register form-dialog\">
    <fieldset class=\"form-horizontal\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"widget-actions form-actions\">
            <div class=\"pull-right\">
                <button class=\"btn\" type=\"reset\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</button>
                <button class=\"btn btn-primary\" type=\"submit\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </fieldset>
</form>
";
        // line 19
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Group:dialog.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 19,  56 => 14,  52 => 13,  46 => 10,  39 => 8,  36 => 7,  27 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for flashMessage in app.session.flashbag.get('success') %}*/
/* <div class="alert alert-success">*/
/*     <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     {{ flashMessage }}*/
/* </div>*/
/* {% endfor %}*/
/* */
/* <form id="{{ form.vars.name }}" action="{{ form.vars.value.id ? path('oro_user_group_update', { id: form.vars.value.id }) : path('oro_user_group_create') }}" method="post" class="form-register form-dialog">*/
/*     <fieldset class="form-horizontal">*/
/*         {{ form_widget(form) }}*/
/*         <div class="widget-actions form-actions">*/
/*             <div class="pull-right">*/
/*                 <button class="btn" type="reset">{{ 'Cancel'|trans }}</button>*/
/*                 <button class="btn btn-primary" type="submit">{{ 'Save'|trans }}</button>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/* </form>*/
/* {{ oro_form_js_validation(form) }}*/
/* */
