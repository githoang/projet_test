<?php

/* PimCommentBundle:Comment:_commentList.html.twig */
class __TwigTemplate_f831738ebf36d28ab1ef61d292393da59fb1a6d41b45db7be6d12fb87b61bb10 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    require(
        ['jquery', 'oro/messenger', 'pim/dialog'],
        function (\$, messenger, Dialog) {
            'use strict';
            \$('.tab-comment').on('click', '.comment-delete-dialog', function () {
                var \$el      = \$(this),
                    \$comment = \$(\$el.data('comment')),
                    message  = \$el.data('message'),
                    title    = \$el.data('title'),
                    doAction = function () {
                        \$.ajax({
                            url: \$el.attr('data-url'),
                            type: 'POST',
                            headers: { accept:'application/json' },
                            data: { _method: \$el.data('method') },
                            success: function() {
                                \$comment.remove();
                                messenger.notificationFlashMessage('success', \$el.attr('data-success-message'));
                            },
                            error: function(xhr) {
                                messenger.notificationFlashMessage(
                                    'error',
                                    (xhr.responseJSON && xhr.responseJSON.message) ?
                                        xhr.responseJSON.message :
                                        \$el.attr('data-error-message')
                                );
                            }
                        });
                    };
                \$el.off('click');
                Dialog.confirm(message, title, doAction);

                return false;
            });

            \$(\".tab-comment .comment-create\").on(\"click\", function() {
                \$(\".tab-comment .active\").removeClass(\"active\");
                \$(this).addClass(\"active\");
            });

            \$(\".tab-comment .cancel\").on(\"click\", function(e) {
                e.stopPropagation();
                \$(\".tab-comment .active\").removeClass(\"active\");
                \$(\".tab-comment textarea\").val('');
            });
        }
    );
</script>

<div class=\"row span5\" >
    <ol class=\"unstyled\" id=\"comment_threads\">
        <li class=\"comment-create\">
            ";
        // line 54
        $this->loadTemplate("PimCommentBundle:Comment:_commentCreateAction.html.twig", "PimCommentBundle:Comment:_commentList.html.twig", 54)->display($context);
        // line 55
        echo "        </li>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 57
            echo "            <li>
                ";
            // line 58
            $this->loadTemplate("PimCommentBundle:Comment:_thread.html.twig", "PimCommentBundle:Comment:_commentList.html.twig", 58)->display(array_merge($context, array("comment" => $context["comment"])));
            // line 59
            echo "            </li>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 61
            echo "            <li class=\"no-data\" style=\"display: block;\">
                <p>
                    ";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comment.index.empty"), "html", null, true);
            echo "
                </p>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </ol>
</div>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_commentList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 67,  120 => 63,  116 => 61,  102 => 59,  100 => 58,  97 => 57,  79 => 56,  76 => 55,  74 => 54,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(*/
/*         ['jquery', 'oro/messenger', 'pim/dialog'],*/
/*         function ($, messenger, Dialog) {*/
/*             'use strict';*/
/*             $('.tab-comment').on('click', '.comment-delete-dialog', function () {*/
/*                 var $el      = $(this),*/
/*                     $comment = $($el.data('comment')),*/
/*                     message  = $el.data('message'),*/
/*                     title    = $el.data('title'),*/
/*                     doAction = function () {*/
/*                         $.ajax({*/
/*                             url: $el.attr('data-url'),*/
/*                             type: 'POST',*/
/*                             headers: { accept:'application/json' },*/
/*                             data: { _method: $el.data('method') },*/
/*                             success: function() {*/
/*                                 $comment.remove();*/
/*                                 messenger.notificationFlashMessage('success', $el.attr('data-success-message'));*/
/*                             },*/
/*                             error: function(xhr) {*/
/*                                 messenger.notificationFlashMessage(*/
/*                                     'error',*/
/*                                     (xhr.responseJSON && xhr.responseJSON.message) ?*/
/*                                         xhr.responseJSON.message :*/
/*                                         $el.attr('data-error-message')*/
/*                                 );*/
/*                             }*/
/*                         });*/
/*                     };*/
/*                 $el.off('click');*/
/*                 Dialog.confirm(message, title, doAction);*/
/* */
/*                 return false;*/
/*             });*/
/* */
/*             $(".tab-comment .comment-create").on("click", function() {*/
/*                 $(".tab-comment .active").removeClass("active");*/
/*                 $(this).addClass("active");*/
/*             });*/
/* */
/*             $(".tab-comment .cancel").on("click", function(e) {*/
/*                 e.stopPropagation();*/
/*                 $(".tab-comment .active").removeClass("active");*/
/*                 $(".tab-comment textarea").val('');*/
/*             });*/
/*         }*/
/*     );*/
/* </script>*/
/* */
/* <div class="row span5" >*/
/*     <ol class="unstyled" id="comment_threads">*/
/*         <li class="comment-create">*/
/*             {% include 'PimCommentBundle:Comment:_commentCreateAction.html.twig' %}*/
/*         </li>*/
/*         {% for comment in comments %}*/
/*             <li>*/
/*                 {% include 'PimCommentBundle:Comment:_thread.html.twig' with {'comment': comment} %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li class="no-data" style="display: block;">*/
/*                 <p>*/
/*                     {{ 'comment.index.empty'|trans }}*/
/*                 </p>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ol>*/
/* </div>*/
/* */
