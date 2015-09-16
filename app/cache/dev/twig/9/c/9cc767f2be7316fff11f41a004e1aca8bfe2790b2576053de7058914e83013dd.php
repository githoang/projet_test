<?php

/* PimCommentBundle:Comment:_commentReply.html.twig */
class __TwigTemplate_c011c3ba756b36b7e4d3d92d124829f598e73d9c07a6e48e371d4c76d644b99f extends Twig_Template
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
        $context["fullname"] = _twig_default_filter($this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "author", array())), "N/A");
        // line 2
        echo "
<div class=\"span1 text-right\">
    <img width=\"25\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "author", array()), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "author", array()), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo "\"/>
</div>
<div class=\"span11\">
    <div>
        <span class=\"author\"><strong>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo "</strong></span>
        <span class=\"date\">&nbsp;&#8211;&nbsp;";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "createdAt", array()), "M jS \\a\\t g:ia"), "html", null, true);
        echo "</span>
    </div>
    <div>
        <span class=\"message\">";
        // line 12
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "body", array()), "html", null, true));
        echo "</span>
        <span class=\"comment-buttons pull-right\">
            ";
        // line 14
        $this->loadTemplate("PimCommentBundle:Comment:_buttons.html.twig", "PimCommentBundle:Comment:_commentReply.html.twig", 14)->display(array_merge($context, array("comment" => (isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")))));
        // line 15
        echo "        </span>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_commentReply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  49 => 14,  44 => 12,  38 => 9,  34 => 8,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set fullname = reply.author|oro_format_name|default('N/A') %}*/
/* */
/* <div class="span1 text-right">*/
/*     <img width="25" src="{{ reply.author.imagePath ? reply.author.imagePath | imagine_filter('avatar_med') : asset('bundles/oroui/img/info-user.png') }}" alt="{{ fullname }}"/>*/
/* </div>*/
/* <div class="span11">*/
/*     <div>*/
/*         <span class="author"><strong>{{ fullname }}</strong></span>*/
/*         <span class="date">&nbsp;&#8211;&nbsp;{{ reply.createdAt|date("M jS \\a\\t g:ia") }}</span>*/
/*     </div>*/
/*     <div>*/
/*         <span class="message">{{ reply.body|nl2br }}</span>*/
/*         <span class="comment-buttons pull-right">*/
/*             {% include 'PimCommentBundle:Comment:_buttons.html.twig' with {'comment': reply} %}*/
/*         </span>*/
/*     </div>*/
/* </div>*/
/* */
