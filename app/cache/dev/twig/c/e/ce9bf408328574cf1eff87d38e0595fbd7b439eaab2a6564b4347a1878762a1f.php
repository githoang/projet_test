<?php

/* PimCommentBundle:Comment:create.html.twig */
class __TwigTemplate_08dcd4263d0b21da33bc22f8ca19006a685908faf6dfaf52d38b0901f14794f5 extends Twig_Template
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
        ob_start();
        // line 2
        if ( !array_key_exists("elements", $context)) {
            // line 3
            echo "    ";
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimCommentBundle:Comment:create.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'form_start', array("id" => "pim_comment_comment_create", "action" => $this->env->getExtension('routing')->getPath("pim_comment_comment_create"), "class" => "unspaced"));
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")));
        echo "

    ";
        // line 14
        echo $context["elements"]->getform_errors((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")));
        echo "

    <div class=\"row-fluid\">
        <div class=\"span12\">
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), "body", array()), 'widget', array("id" => "pim_comment_comment_body_create", "attr" => array("class" => "exclude span12")));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), "resourceName", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), "resourceId", array()), 'row');
        echo "
            <span class=\"comment-buttons toggle-active\">
                <button class=\"btn btn-primary comment-btn pull-right\">";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.post")), "html", null, true);
        echo "</button>
                <input class=\"btn cancel comment-btn pull-right\" type=\"reset\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")), "html", null, true);
        echo "\"/>
            </span>
        </div>
    </div>
";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["createForm"]) ? $context["createForm"] : $this->getContext($context, "createForm")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 27,  65 => 23,  61 => 22,  56 => 20,  52 => 19,  48 => 18,  41 => 14,  36 => 12,  33 => 11,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(createForm, {*/
/*     'id': 'pim_comment_comment_create',*/
/*     'action': path('pim_comment_comment_create'),*/
/*     'class': 'unspaced'*/
/* }) }}*/
/*     {{ JSFV(createForm) }}*/
/* */
/*     {{ elements.form_errors(createForm) }}*/
/* */
/*     <div class="row-fluid">*/
/*         <div class="span12">*/
/*             {{ form_widget(createForm.body, { 'id': 'pim_comment_comment_body_create', 'attr': {'class': 'exclude span12'} }) }}*/
/*             {{ form_row(createForm.resourceName) }}*/
/*             {{ form_row(createForm.resourceId) }}*/
/*             <span class="comment-buttons toggle-active">*/
/*                 <button class="btn btn-primary comment-btn pull-right">{{ 'btn.post'|trans|capitalize }}</button>*/
/*                 <input class="btn cancel comment-btn pull-right" type="reset" value="{{ 'btn.cancel'|trans|capitalize }}"/>*/
/*             </span>*/
/*         </div>*/
/*     </div>*/
/* {{ form_end(createForm) }}*/
/* */
