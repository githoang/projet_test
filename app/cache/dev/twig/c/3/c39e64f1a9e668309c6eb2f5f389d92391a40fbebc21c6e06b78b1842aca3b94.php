<?php

/* PimUserBundle:User/Tab:group_and_role.html.twig */
class __TwigTemplate_c8b9eb418865fbe0c6dacefad3ee3f707848594269bab682a362530f2b942e19 extends Twig_Template
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
        echo "<div class=\"tab-pane ";
        echo (($this->getAttribute($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "loop", array()), "first", array())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["viewElement"]) ? $context["viewElement"] : $this->getContext($context, "viewElement")), "alias", array()), array(" " => "-", "." => "-"))), "html", null, true);
        echo "\">
    ";
        // line 2
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "groups", array(), "any", true, true)) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "groups", array()), 'row', array("attr" => array("class" => "horizontal")))) : (""));
        echo "
    ";
        // line 3
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rolesCollection", array(), "any", true, true)) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rolesCollection", array()), 'row', array("attr" => array("class" => "horizontal")))) : (""));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "PimUserBundle:User/Tab:group_and_role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 2,  19 => 1,);
    }
}
/* <div class="tab-pane {{ viewElement.loop.first ? 'active' : '' }}" id="{{ viewElement.alias|replace({' ': '-', '.': '-'})|lower }}">*/
/*     {{ form.groups is defined ? form_row(form.groups, { attr: { class: 'horizontal' } }) : '' }}*/
/*     {{ form.rolesCollection is defined ? form_row(form.rolesCollection, { attr: { class: 'horizontal' } }) : '' }}*/
/* </div>*/
/* */
