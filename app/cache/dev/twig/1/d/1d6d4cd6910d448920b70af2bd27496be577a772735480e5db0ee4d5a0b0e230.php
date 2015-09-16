<?php

/* PimCommentBundle:Comment:_commentReplyAction.html.twig */
class __TwigTemplate_1a5f57ec27be761ff8fc0c7d2163de94b7242934ea8285cc7e449ee3fd599d9e extends Twig_Template
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
        echo "<div class=\"row-fluid\">
    ";
        // line 2
        $this->loadTemplate("PimCommentBundle:Comment:reply.html.twig", "PimCommentBundle:Comment:_commentReplyAction.html.twig", 2)->display($context);
        // line 3
        echo "</div>

<script type=\"text/javascript\">
    require(['jquery', 'oro/messenger'], function(\$, messenger) {
        \$(function() {
            \$('#pim_comment_comment_reply_";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "').on('submit', function(e) {
                e.preventDefault();
                \$.ajax({
                    url: '";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pim_comment_comment_reply");
        echo "',
                    type: 'POST',
                    data: \$('#pim_comment_comment_reply_";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "').serialize(),
                    success: function(data) {
                        \$('#comment";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "').replaceWith(data);
                        \$('#pim_comment_comment_body_reply_";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "').val('');

                        messenger.notificationFlashMessage('success', '";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.reply.success"), "html", null, true);
        echo "');
                    },
                    error: function(xhr) {
                        messenger.notificationFlashMessage(
                                'error',
                                (xhr.responseJSON && xhr.responseJSON.message) ?
                                        xhr.responseJSON.message :
                                        '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.reply.error"), "html", null, true);
        echo "'
                        );
                    }
                });
            });

            \$(\".tab-comment .comment-thread\").on(\"click\", function() {
                \$(\".tab-comment .active\").removeClass(\"active\");
                \$(this).addClass(\"active\");
            });

            \$(\".tab-comment .cancel\").on(\"click\", function(e) {
                e.stopPropagation();
                \$(\".tab-comment .active\").removeClass(\"active\");
                \$(\".tab-comment textarea\").val('');
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_commentReplyAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 25,  56 => 18,  51 => 16,  47 => 15,  42 => 13,  37 => 11,  31 => 8,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="row-fluid">*/
/*     {% include 'PimCommentBundle:Comment:reply.html.twig' %}*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     require(['jquery', 'oro/messenger'], function($, messenger) {*/
/*         $(function() {*/
/*             $('#pim_comment_comment_reply_{{ comment.id }}').on('submit', function(e) {*/
/*                 e.preventDefault();*/
/*                 $.ajax({*/
/*                     url: '{{ path('pim_comment_comment_reply')}}',*/
/*                     type: 'POST',*/
/*                     data: $('#pim_comment_comment_reply_{{ comment.id }}').serialize(),*/
/*                     success: function(data) {*/
/*                         $('#comment{{ comment.id }}').replaceWith(data);*/
/*                         $('#pim_comment_comment_body_reply_{{ comment.id }}').val('');*/
/* */
/*                         messenger.notificationFlashMessage('success', '{{ 'flash.comment.reply.success'|trans }}');*/
/*                     },*/
/*                     error: function(xhr) {*/
/*                         messenger.notificationFlashMessage(*/
/*                                 'error',*/
/*                                 (xhr.responseJSON && xhr.responseJSON.message) ?*/
/*                                         xhr.responseJSON.message :*/
/*                                         '{{ 'flash.comment.reply.error'|trans }}'*/
/*                         );*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $(".tab-comment .comment-thread").on("click", function() {*/
/*                 $(".tab-comment .active").removeClass("active");*/
/*                 $(this).addClass("active");*/
/*             });*/
/* */
/*             $(".tab-comment .cancel").on("click", function(e) {*/
/*                 e.stopPropagation();*/
/*                 $(".tab-comment .active").removeClass("active");*/
/*                 $(".tab-comment textarea").val('');*/
/*             });*/
/*         });*/
/*     });*/
/* </script>*/
/* */
