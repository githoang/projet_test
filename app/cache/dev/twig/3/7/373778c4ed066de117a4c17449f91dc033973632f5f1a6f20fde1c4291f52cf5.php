<?php

/* PimCommentBundle:Comment:_commentCreateAction.html.twig */
class __TwigTemplate_aab5b6309f954ba738786d645d693a76d0b2ccb6b06481be7744315504e2ef47 extends Twig_Template
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
    require(['jquery', 'oro/messenger'], function(\$, messenger) {
        \$(function() {
            \$('#pim_comment_comment_create').on('submit', function(e) {
                e.preventDefault();
                \$.ajax({
                    url: '";
        // line 7
        echo $this->env->getExtension('routing')->getPath("pim_comment_comment_create");
        echo "',
                    type: 'POST',
                    data: \$('#pim_comment_comment_create').serialize(),
                    success: function(data) {
                        \$('#comment_threads > li:first-child').after('<li>' + data + '</li>');
                        \$('#pim_comment_comment_body_create').val('');
                        if (0 < \$('li.no-data').length) {
                            \$('li.no-data').remove();
                        }
                        messenger.notificationFlashMessage('success', '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.create.success"), "html", null, true);
        echo "');
                    },
                    error: function(xhr) {
                        messenger.notificationFlashMessage(
                            'error',
                            (xhr.responseJSON && xhr.responseJSON.message) ?
                                xhr.responseJSON.message :
                                '";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("flash.comment.create.error"), "html", null, true);
        echo "'
                        );
                    }
                });
            });
        });
    });
</script>

<div class=\"row-fluid\">
    ";
        // line 33
        $this->loadTemplate("PimCommentBundle:Comment:create.html.twig", "PimCommentBundle:Comment:_commentCreateAction.html.twig", 33)->display($context);
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "PimCommentBundle:Comment:_commentCreateAction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  62 => 33,  49 => 23,  39 => 16,  27 => 7,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     require(['jquery', 'oro/messenger'], function($, messenger) {*/
/*         $(function() {*/
/*             $('#pim_comment_comment_create').on('submit', function(e) {*/
/*                 e.preventDefault();*/
/*                 $.ajax({*/
/*                     url: '{{ path('pim_comment_comment_create')}}',*/
/*                     type: 'POST',*/
/*                     data: $('#pim_comment_comment_create').serialize(),*/
/*                     success: function(data) {*/
/*                         $('#comment_threads > li:first-child').after('<li>' + data + '</li>');*/
/*                         $('#pim_comment_comment_body_create').val('');*/
/*                         if (0 < $('li.no-data').length) {*/
/*                             $('li.no-data').remove();*/
/*                         }*/
/*                         messenger.notificationFlashMessage('success', '{{ 'flash.comment.create.success'|trans }}');*/
/*                     },*/
/*                     error: function(xhr) {*/
/*                         messenger.notificationFlashMessage(*/
/*                             'error',*/
/*                             (xhr.responseJSON && xhr.responseJSON.message) ?*/
/*                                 xhr.responseJSON.message :*/
/*                                 '{{ 'flash.comment.create.error'|trans }}'*/
/*                         );*/
/*                     }*/
/*                 });*/
/*             });*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <div class="row-fluid">*/
/*     {% include 'PimCommentBundle:Comment:create.html.twig' %}*/
/* </div>*/
/* */
