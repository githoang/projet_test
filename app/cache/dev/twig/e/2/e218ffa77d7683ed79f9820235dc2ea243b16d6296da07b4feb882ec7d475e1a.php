<?php

/* PimCommentBundle:Comment:_thread.html.twig */
class __TwigTemplate_d41e60464ad5b507b318d16e58b27d44c72c3a1b650533738414f5f9148c25b2 extends Twig_Template
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
        $context["fullname"] = _twig_default_filter($this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array())), "N/A");
        // line 2
        echo "<ol class=\"comment-thread unstyled\" id=\"comment";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "\">
    <li class=\"comment-topic\">
        <div class=\"row-fluid\">
            <div class=\"span1 text-right\">
                <img width=\"35\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "imagePath", array())) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "imagePath", array()), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"span11\">
                <div>
                    <span class=\"author\"><strong>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["fullname"]) ? $context["fullname"] : $this->getContext($context, "fullname")), "html", null, true);
        echo "</strong></span>
                    <span class=\"date\">&nbsp;&#8211;&nbsp;";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "M jS \\a\\t g:ia"), "html", null, true);
        echo "</span>
                </div>
                <div>
                    <span class=\"message\">";
        // line 14
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body", array()), "html", null, true));
        echo "</span>
                    <span class=\"comment-buttons pull-right\">
                        ";
        // line 16
        $this->loadTemplate("PimCommentBundle:Comment:_buttons.html.twig", "PimCommentBundle:Comment:_thread.html.twig", 16)->display(array_merge($context, array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))));
        // line 17
        echo "                    </span>
                </div>
            </div>
        </div>
    </li>
    <li class=\"row-fluid comment-reply-action toggle-active\">
        ";
        // line 23
        $this->loadTemplate("PimCommentBundle:Comment:_commentReplyAction.html.twig", "PimCommentBundle:Comment:_thread.html.twig", 23)->display($context);
        // line 24
        echo "    </li>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 26
            echo "        <li id=\"comment";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "id", array()), "html", null, true);
            echo "\" class=\"row-fluid comment-reply\">
            ";
            // line 27
            $this->loadTemplate("PimCommentBundle:Comment:_commentReply.html.twig", "PimCommentBundle:Comment:_thread.html.twig", 27)->display(array_merge($context, array("reply" => $context["reply"])));
            // line 28
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 30,  92 => 28,  90 => 27,  85 => 26,  68 => 25,  65 => 24,  63 => 23,  55 => 17,  53 => 16,  48 => 14,  42 => 11,  38 => 10,  29 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% set fullname = comment.author|oro_format_name|default('N/A') %}*/
/* <ol class="comment-thread unstyled" id="comment{{ comment.id }}">*/
/*     <li class="comment-topic">*/
/*         <div class="row-fluid">*/
/*             <div class="span1 text-right">*/
/*                 <img width="35" src="{{ comment.author.imagePath ? comment.author.imagePath | imagine_filter('avatar_med') : asset('bundles/oroui/img/info-user.png') }}" alt="{{ fullname }}"/>*/
/*             </div>*/
/*             <div class="span11">*/
/*                 <div>*/
/*                     <span class="author"><strong>{{ fullname }}</strong></span>*/
/*                     <span class="date">&nbsp;&#8211;&nbsp;{{ comment.createdAt|date("M jS \\a\\t g:ia") }}</span>*/
/*                 </div>*/
/*                 <div>*/
/*                     <span class="message">{{ comment.body|nl2br }}</span>*/
/*                     <span class="comment-buttons pull-right">*/
/*                         {% include 'PimCommentBundle:Comment:_buttons.html.twig' with {id: comment.id} %}*/
/*                     </span>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </li>*/
/*     <li class="row-fluid comment-reply-action toggle-active">*/
/*         {% include 'PimCommentBundle:Comment:_commentReplyAction.html.twig' %}*/
/*     </li>*/
/*     {% for reply in comment.children %}*/
/*         <li id="comment{{ reply.id }}" class="row-fluid comment-reply">*/
/*             {% include 'PimCommentBundle:Comment:_commentReply.html.twig' with {'reply': reply} %}*/
/*         </li>*/
/*     {%  endfor %}*/
/* </ol>*/
/* */
