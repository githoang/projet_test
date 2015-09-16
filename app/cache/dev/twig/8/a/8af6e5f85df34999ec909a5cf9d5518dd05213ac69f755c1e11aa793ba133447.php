<?php

/* OroUserBundle:Status:create.html.twig */
class __TwigTemplate_593db674ac451e5783758dc6b8bf8e152f2a8254dfc5b80f4716643b2b070545 extends Twig_Template
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
        return $this->loadTemplate((($this->getAttribute((isset($context["bap"]) ? $context["bap"] : null), "layout", array(), "any", true, true)) ? ($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array())) : ("OroUserBundle::layout.html.twig")), "OroUserBundle:Status:create.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("oro_user_status_create");
        echo "\" method=\"POST\" class=\"form-status\">
        <fieldset>
            <legend>Add status</legend>

            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            <div class=\"form-row\">
                <button class=\"btn btn-large btn-primary\" type=\"submit\">Save</button>
            </div>
        </fieldset>
    </form>
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Status:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  30 => 4,  27 => 3,  18 => 1,);
    }
}
/* {% extends bap.layout is defined ? bap.layout : 'OroUserBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <form action="{{ path('oro_user_status_create') }}" method="POST" class="form-status">*/
/*         <fieldset>*/
/*             <legend>Add status</legend>*/
/* */
/*             {{ form_widget(form) }}*/
/* */
/*             <div class="form-row">*/
/*                 <button class="btn btn-large btn-primary" type="submit">Save</button>*/
/*             </div>*/
/*         </fieldset>*/
/*     </form>*/
/* {% endblock %}*/
/* */
