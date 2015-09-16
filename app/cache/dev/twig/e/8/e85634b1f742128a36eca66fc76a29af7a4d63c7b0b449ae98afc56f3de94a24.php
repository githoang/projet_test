<?php

/* PimCommentBundle:Comment:reply.html.twig */
class __TwigTemplate_b3da9e8c76c7844e81315c4dffc4800918575ac839ab53fcc9831d50cdb3f9cd extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimCommentBundle:Comment:reply.html.twig", 3);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 6
        echo "
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), 'form_start', array("id" => ("pim_comment_comment_reply_" . $this->getAttribute(        // line 8
(isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array())), "action" => $this->env->getExtension('routing')->getPath("pim_comment_comment_reply"), "class" => "unspaced"));
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"));
        echo "

    ";
        // line 14
        echo $context["elements"]->getform_errors($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"));
        echo "

<div class=\"row-fluid\">
    <div class=\"span12\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), "body", array()), 'widget', array("id" => ("pim_comment_comment_body_reply_" . $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array())), "attr" => array("class" => "exclude span12")));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), "resourceName", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), "resourceId", array()), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), "parent", array()), 'row');
        echo "
        <button class=\"btn comment-btn pull-right\">";
        // line 22
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.reply")), "html", null, true);
        echo "</button>
        <input class=\"btn cancel comment-btn pull-right\" type=\"reset\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.cancel")), "html", null, true);
        echo "\"/>
    </div>
</div>
";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute((isset($context["replyForms"]) ? $context["replyForms"] : $this->getContext($context, "replyForms")), $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), array(), "array"), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 23,  65 => 22,  61 => 21,  57 => 20,  53 => 19,  49 => 18,  42 => 14,  37 => 12,  34 => 11,  32 => 8,  31 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ form_start(replyForms[comment.id], {*/
/*     'id': 'pim_comment_comment_reply_' ~ comment.id,*/
/*     'action': path('pim_comment_comment_reply'),*/
/*     'class': 'unspaced'*/
/* }) }}*/
/*     {{ JSFV(replyForms[comment.id]) }}*/
/* */
/*     {{ elements.form_errors(replyForms[comment.id]) }}*/
/* */
/* <div class="row-fluid">*/
/*     <div class="span12">*/
/*         {{ form_widget(replyForms[comment.id].body, { 'id': 'pim_comment_comment_body_reply_' ~ comment.id, 'attr': {'class': 'exclude span12'} }) }}*/
/*         {{ form_row(replyForms[comment.id].resourceName) }}*/
/*         {{ form_row(replyForms[comment.id].resourceId) }}*/
/*         {{ form_row(replyForms[comment.id].parent) }}*/
/*         <button class="btn comment-btn pull-right">{{ 'btn.reply'|trans|capitalize }}</button>*/
/*         <input class="btn cancel comment-btn pull-right" type="reset" value="{{ 'btn.cancel'|trans|capitalize }}"/>*/
/*     </div>*/
/* </div>*/
/* {{ form_end(replyForms[comment.id]) }}*/
/* */
