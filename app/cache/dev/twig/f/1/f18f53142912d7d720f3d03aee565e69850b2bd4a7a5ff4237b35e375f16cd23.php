<?php

/* PimCommentBundle:Comment:_buttons.html.twig */
class __TwigTemplate_772dc9ad3341101a218496d28730f5e9af321f853a9e6ad24c5dddb5ebee7d60 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()))) {
            // line 2
            echo "    <a href=\"javascript:void(0);\"
       class=\"comment-delete-dialog pull-right\"
       title=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.delete")), "html", null, true);
            echo "\"
       data-comment=\"#comment";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
            echo "\"
       data-method=\"DELETE\"
       data-message=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirmation.remove.comment"), "html", null, true);
            echo "\"
       data-title=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirmation.delete"), "html", null, true);
            echo "\"
       data-success-message=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.delete.success"), "html", null, true);
            echo "\"
       data-error-message=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.delete.error"), "html", null, true);
            echo "\"
       data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pim_comment_comment_delete", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
            echo "\"
    >
        <i class=\"icon-trash\"></i>
    </a>
";
        }
        // line 16
        echo "<a href=\"javascript:void(0);\" title=\"";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("btn.reply")), "html", null, true);
        echo "\">
    <i class=\"icon-reply pull-right\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user == comment.author %}*/
/*     <a href="javascript:void(0);"*/
/*        class="comment-delete-dialog pull-right"*/
/*        title="{{ 'btn.delete'|trans|capitalize }}"*/
/*        data-comment="#comment{{ comment.id }}"*/
/*        data-method="DELETE"*/
/*        data-message="{{ 'confirmation.remove.comment'|trans }}"*/
/*        data-title="{{ 'confirmation.delete'|trans }}"*/
/*        data-success-message="{{ 'flash.comment.delete.success'|trans }}"*/
/*        data-error-message="{{ 'flash.comment.delete.error'|trans }}"*/
/*        data-url="{{ path('pim_comment_comment_delete', { 'id': comment.id }) }}"*/
/*     >*/
/*         <i class="icon-trash"></i>*/
/*     </a>*/
/* {% endif %}*/
/* <a href="javascript:void(0);" title="{{ 'btn.reply'|trans|capitalize }}">*/
/*     <i class="icon-reply pull-right"></i>*/
/* </a>*/
/* */
