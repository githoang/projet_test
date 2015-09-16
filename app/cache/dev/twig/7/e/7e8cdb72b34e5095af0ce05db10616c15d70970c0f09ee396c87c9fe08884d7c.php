<?php

/* OroUserBundle:Status:statusForm.html.twig */
class __TwigTemplate_d1c82915305dfc8d9f0f6a1ee98dfa3da524eebeb5ff2ad9c68603e7ae6602b4 extends Twig_Template
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
        echo "<form id=\"create-status-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("oro_user_status_create");
        echo "\" method=\"POST\" class=\"form-status\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-row\">
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Save</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Status:statusForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <form id="create-status-form" action="{{ path('oro_user_status_create') }}" method="POST" class="form-status">*/
/*     {{ form_widget(form) }}*/
/*     <div class="form-row">*/
/*         <button class="btn btn-large btn-primary" type="submit">Save</button>*/
/*     </div>*/
/* </form>*/
/* */
