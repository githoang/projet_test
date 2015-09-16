<?php

/* OroEmailBundle::macros.html.twig */
class __TwigTemplate_970edc656bbcec60e83e4859b7fa482926c813f952e6e313da691250c6841a76 extends Twig_Template
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
        // line 42
        echo "
";
        // line 118
        echo "
";
        // line 147
        echo "
";
        // line 168
        echo "
";
        // line 184
        echo "
";
        // line 198
        echo "
";
    }

    // line 1
    public function getrenderAvailableVariablesWidget($__entityName__ = null, $__dependentFieldId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entityName" => $__entityName__,
            "dependentFieldId" => $__dependentFieldId__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'oro/email/variable/view', 'oro/email/variable/model'],
        function(\$, View, Model){
            \$(function() {
                'use strict';
                new View({
                    el:       \$('#oro-email-available-variables'),
                    template: \$('#available-variables-lists-template'),
                    target:   \$('#";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["dependentFieldId"]) ? $context["dependentFieldId"] : $this->getContext($context, "dependentFieldId")), "html", null, true);
            echo "'),
                    model:    new Model(";
            // line 11
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_emailtemplate_available_variables", array("entityName" => (isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")))));
            echo ")
                });
            });
        });
    </script>

    <script type=\"text/template\" id=\"available-variables-lists-template\">
        <% if (userVars.length > 0) { %>
        <div>
            <h4>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logged in user:"), "html", null, true);
            echo "</h4>
            <ul class=\"nav nav-list\">
                <% _.each(userVars, function(variable, i) { %>
                    <li><a href=\"javascript:void(0);\">";
            // line 23
            echo "{{ user.<%= variable %> }}";
            echo "</a></li>
                <% }); %>
            </ul>
        </div>
        <% } %>
        <% if (entityVars.length > 0) { %>
        <div>
            <h4>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Related entity:"), "html", null, true);
            echo "</h4>
            <ul class=\"nav nav-list\">
                <% _.each(entityVars, function(variable, i) { %>
                    <li><a href=\"javascript:void(0);\">";
            // line 33
            echo "{{ entity.<%= variable %> }}";
            echo "</a></li>
                <% }); %>
            </ul>
        </div>
        <% } %>
    </script>

    <div class=\"well well-small\" id=\"oro-email-available-variables\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function getrenderPreviewDialog($__formName__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "formName" => $__formName__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 44
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'oro/translator', 'oro/modal'],
        function(\$, _, __, Modal){
            \$(function () {
                var showEmailPreviewDialog = function(el) {
                    var iframeId = 'preview-frame';
                    var iframe = \$('<iframe />', {
                        name: iframeId,
                        id: iframeId,
                        class: \"scrollable-container\",
                        frameborder: 0,
                        marginwidth: 0,
                        marginheight: 0,
                        allowfullscreen: true,
                        width: '100%',
                        height: '98%'
                    });

                    var form = \$('#";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["formName"]) ? $context["formName"] : $this->getContext($context, "formName")), "html", null, true);
            echo "');
                    var formAction = form.attr('action');

                    form.submit(function(e) {
                        if (!\$(this).data('preview')) {
                            return;
                        }

                        var confirmModal = new Modal({
                            title: __('Preview'),
                            content: '<div class=\"loading-content\">Loading...</div>',
                            okText: __('Ok'),
                            className: 'modal oro-modal-normal',
                            template: _.template('<% if (title) { %>' +
                                '<div class=\"modal-header\">' +
                                    '<% if (allowCancel) { %>' +
                                    '<a class=\"close\">×</a>' +
                                    '<% } %>' +
                                    '<h3><%- title %></h3>' +
                                '</div>' +
                                '<% } %>' +
                                '<div class=\"modal-body\"><%= content %></div>'
                            )
                        });
                        confirmModal.open();
                        confirmModal.\$content.append(iframe);
                        \$('.modal-body .loading-content').show();

                        form.attr('target', iframeId);
                        form.attr('action', \$(el).attr('href'));

                        // prevent hash navigation form processing
                        e.stopImmediatePropagation();
                    });
                    form.data('preview', true);

                    iframe.load(function() {
                        \$(this).show();
                        form.attr('action', formAction);
                        form.removeAttr('target');
                        form.data('preview', false);

                        \$('.modal-body .loading-content').hide();
                    });

                    form.submit();
                };

                \$('.dialog-form-renderer').click(function (e) {
                    showEmailPreviewDialog(this);
                    e.preventDefault();
                });
            });
        });
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 128
    public function getemail_address_text($__emailAddress__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 129
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('oro_locale_name')->format($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array())), "N/A"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function getemail_address_link($__emailAddress__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((((twig_lower_filter($this->env, twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "class", array()), "\\"))) . "_") . twig_lower_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "class", array()), "\\")))) . "_view"), array("id" => $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method");
            echo "</a>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getemail_address($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 135
            if ((null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()))) {
                // line 136
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly")), false)) : (false))) {
                    // line 137
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "html", null, true);
                }
            } else {
                // line 140
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), false)) : (false))) {
                    // line 141
                    echo $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method");
                } else {
                    // line 143
                    echo $this->getAttribute($this, "email_address_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method");
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 155
    public function getrecipient_email_addresses($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 156
            $context["addresses"] = array();
            // line 157
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : $this->getContext($context, "recipients")));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 158
                $context["address"] = $this->getAttribute($this, "email_address", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => (isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly"))), "method");
                // line 159
                if ((twig_length_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address"))) > 0)) {
                    // line 160
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")), array(0 => (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address"))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 164
                echo twig_escape_filter($this->env, $context["address"], "html", null, true);
                // line 165
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "; ";
                }
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getattachment_row_data($__values__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "values" => $__values__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 177
                echo "<a class=\"no-hash\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_attachment", array("id" => $this->getAttribute($context["val"], "id", array()))), "html", null, true);
                echo "\">
            <span class=\"label label-info\">";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["val"], "fileName", array()), "html", null, true);
                echo "</span>
        </a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 174
    public function getattachments($__attachments__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attachments" => $__attachments__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 182
            echo $this->getAttribute($this, "attachment_row_data", array(0 => (isset($context["attachments"]) ? $context["attachments"] : $this->getContext($context, "attachments"))), "method");
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 191
    public function getbody($__emailBody__ = null, $__cssClass__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "cssClass" => $__cssClass__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 192
            if ($this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "bodyIsText", array())) {
                // line 193
                echo "<pre class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "content", array()), "html", null, true);
                echo "</pre>";
            } else {
                // line 195
                echo "<iframe class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "html", null, true);
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_body", array("id" => $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "id", array()))), "html", null, true);
                echo "\"></iframe>";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 199
    public function getrenderJs()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 200
            echo "    <script type=\"text/javascript\">
        !function() {
            /* global:require */
            require(['oro/init-email']);
        }();
    </script>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEmailBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 200,  491 => 199,  472 => 195,  462 => 193,  460 => 192,  447 => 191,  436 => 182,  424 => 174,  407 => 178,  402 => 177,  398 => 176,  386 => 175,  361 => 165,  359 => 164,  342 => 163,  335 => 160,  333 => 159,  331 => 158,  327 => 157,  325 => 156,  311 => 155,  298 => 143,  295 => 141,  293 => 140,  289 => 137,  287 => 136,  285 => 135,  270 => 127,  255 => 133,  243 => 131,  232 => 129,  220 => 128,  153 => 62,  133 => 44,  120 => 43,  100 => 33,  94 => 30,  84 => 23,  78 => 20,  66 => 11,  62 => 10,  52 => 2,  39 => 1,  34 => 198,  31 => 184,  28 => 168,  25 => 147,  22 => 118,  19 => 42,);
    }
}
/* {% macro renderAvailableVariablesWidget(entityName, dependentFieldId) %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/email/variable/view', 'oro/email/variable/model'],*/
/*         function($, View, Model){*/
/*             $(function() {*/
/*                 'use strict';*/
/*                 new View({*/
/*                     el:       $('#oro-email-available-variables'),*/
/*                     template: $('#available-variables-lists-template'),*/
/*                     target:   $('#{{ dependentFieldId }}'),*/
/*                     model:    new Model({{ render(path('oro_api_get_emailtemplate_available_variables', { 'entityName': entityName }))}})*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     <script type="text/template" id="available-variables-lists-template">*/
/*         <% if (userVars.length > 0) { %>*/
/*         <div>*/
/*             <h4>{{ 'Logged in user:'|trans }}</h4>*/
/*             <ul class="nav nav-list">*/
/*                 <% _.each(userVars, function(variable, i) { %>*/
/*                     <li><a href="javascript:void(0);">{% verbatim %}{{ user.<%= variable %> }}{% endverbatim %}</a></li>*/
/*                 <% }); %>*/
/*             </ul>*/
/*         </div>*/
/*         <% } %>*/
/*         <% if (entityVars.length > 0) { %>*/
/*         <div>*/
/*             <h4>{{ 'Related entity:'|trans }}</h4>*/
/*             <ul class="nav nav-list">*/
/*                 <% _.each(entityVars, function(variable, i) { %>*/
/*                     <li><a href="javascript:void(0);">{% verbatim %}{{ entity.<%= variable %> }}{% endverbatim %}</a></li>*/
/*                 <% }); %>*/
/*             </ul>*/
/*         </div>*/
/*         <% } %>*/
/*     </script>*/
/* */
/*     <div class="well well-small" id="oro-email-available-variables"></div>*/
/* {% endmacro %}*/
/* */
/* {% macro renderPreviewDialog(formName, title) %}*/
/*     <script type="text/javascript">*/
/*         require(['jquery', 'underscore', 'oro/translator', 'oro/modal'],*/
/*         function($, _, __, Modal){*/
/*             $(function () {*/
/*                 var showEmailPreviewDialog = function(el) {*/
/*                     var iframeId = 'preview-frame';*/
/*                     var iframe = $('<iframe />', {*/
/*                         name: iframeId,*/
/*                         id: iframeId,*/
/*                         class: "scrollable-container",*/
/*                         frameborder: 0,*/
/*                         marginwidth: 0,*/
/*                         marginheight: 0,*/
/*                         allowfullscreen: true,*/
/*                         width: '100%',*/
/*                         height: '98%'*/
/*                     });*/
/* */
/*                     var form = $('#{{ formName }}');*/
/*                     var formAction = form.attr('action');*/
/* */
/*                     form.submit(function(e) {*/
/*                         if (!$(this).data('preview')) {*/
/*                             return;*/
/*                         }*/
/* */
/*                         var confirmModal = new Modal({*/
/*                             title: __('Preview'),*/
/*                             content: '<div class="loading-content">Loading...</div>',*/
/*                             okText: __('Ok'),*/
/*                             className: 'modal oro-modal-normal',*/
/*                             template: _.template('<% if (title) { %>' +*/
/*                                 '<div class="modal-header">' +*/
/*                                     '<% if (allowCancel) { %>' +*/
/*                                     '<a class="close">×</a>' +*/
/*                                     '<% } %>' +*/
/*                                     '<h3><%- title %></h3>' +*/
/*                                 '</div>' +*/
/*                                 '<% } %>' +*/
/*                                 '<div class="modal-body"><%= content %></div>'*/
/*                             )*/
/*                         });*/
/*                         confirmModal.open();*/
/*                         confirmModal.$content.append(iframe);*/
/*                         $('.modal-body .loading-content').show();*/
/* */
/*                         form.attr('target', iframeId);*/
/*                         form.attr('action', $(el).attr('href'));*/
/* */
/*                         // prevent hash navigation form processing*/
/*                         e.stopImmediatePropagation();*/
/*                     });*/
/*                     form.data('preview', true);*/
/* */
/*                     iframe.load(function() {*/
/*                         $(this).show();*/
/*                         form.attr('action', formAction);*/
/*                         form.removeAttr('target');*/
/*                         form.data('preview', false);*/
/* */
/*                         $('.modal-body .loading-content').hide();*/
/*                     });*/
/* */
/*                     form.submit();*/
/*                 };*/
/* */
/*                 $('.dialog-form-renderer').click(function (e) {*/
/*                     showEmailPreviewDialog(this);*/
/*                     e.preventDefault();*/
/*                 });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endmacro %}*/
/* */
/* {#*/
/*     Render email address name, owner name or a link to owner view page can be rendered depends on given parameters*/
/*     Parameters:*/
/*         emailAddress - email address entity Oro\Bundle\EmailBundle\Entity\EmailAddress*/
/*         emailAddressName - a string contains an email address. It is used if the email address has no owner*/
/*         noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false*/
/*         knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false*/
/* #}*/
/* {% macro email_address(emailAddress, emailAddressName, noLink, knownOnly) -%}*/
/*     {% macro email_address_text(emailAddress) -%}*/
/*         {{ emailAddress.owner|oro_format_name|default('N/A')|escape }}*/
/*     {%- endmacro -%}*/
/*     {% macro email_address_link(emailAddress) -%}*/
/*         {#- TODO: we need EntityConfig to get view url for an entity -#}*/
/*         <a href="{{ path(emailAddress.owner.class|split('\\')|first|lower ~ '_' ~ emailAddress.owner.class|split('\\')|last|lower ~ '_view', {id:emailAddress.owner.id}) }}">{{ _self.email_address_text(emailAddress) }}</a>*/
/*     {%- endmacro -%}*/
/*     {% if emailAddress.owner is null -%}*/
/*         {% if not knownOnly|default(false) -%}*/
/*             {{ emailAddressName }}*/
/*         {%- endif %}*/
/*     {%- else -%}*/
/*         {% if noLink|default(false) -%}*/
/*             {{ _self.email_address_text(emailAddress) }}*/
/*         {%- else -%}*/
/*             {{ _self.email_address_link(emailAddress)|raw }}*/
/*         {%- endif %}*/
/*     {%- endif %}*/
/* {%- endmacro %}*/
/* */
/* {#*/
/*     Render the given email recipients*/
/*     Parameters:*/
/*         recipients - an array of Oro\Bundle\EmailBundle\Entity\EmailRecipients*/
/*         noLink - determines whether the rendering of a link to the owner view page is forbidden or not. Default value is false*/
/*         knownOnly - if true renders only emails which have an owner; otherwise, all emails. Default value is false*/
/* #}*/
/* {% macro recipient_email_addresses(recipients, noLink, knownOnly) -%}*/
/*     {% set addresses = {} -%}*/
/*     {% for recipient in recipients -%}*/
/*         {% set address = _self.email_address(recipient.emailAddress, recipient.name, noLink, knownOnly) %}*/
/*         {%- if address|length > 0 -%}*/
/*             {% set addresses = addresses|merge([address]) %}*/
/*         {%- endif %}*/
/*     {%- endfor -%}*/
/*     {% for address in addresses -%}*/
/*         {{ address }}*/
/*         {%- if not loop.last %}; {% endif %}*/
/*     {%- endfor %}*/
/* {%- endmacro %}*/
/* */
/* {#*/
/*     Render the given email attachments*/
/*     Parameters:*/
/*         attachments - an array of Oro\Bundle\EmailBundle\Entity\EmailAttachment*/
/* #}*/
/* {% macro attachments(attachments) -%}*/
/*     {% macro attachment_row_data(values) -%}*/
/*         {%- for val in values -%}*/
/*         <a class="no-hash" href="{{ path('oro_email_attachment', {id:val.id}) }}">*/
/*             <span class="label label-info">{{ val.fileName }}</span>*/
/*         </a>*/
/*         {%- endfor -%}*/
/*     {%- endmacro -%}*/
/*     {{ _self.attachment_row_data(attachments)|raw }}*/
/* {%- endmacro %}*/
/* */
/* {#*/
/*     Render email body*/
/*     Parameters:*/
/*         emailBody - email body entity Oro\Bundle\EmailBundle\Entity\EmailBody*/
/*         cssClass - used to specify an additional CSS class for email body container HTML element*/
/* #}*/
/* {% macro body(emailBody, cssClass) -%}*/
/*     {% if emailBody.bodyIsText -%}*/
/*         <pre class="email-body{% if cssClass is defined %} {{ cssClass }}{% endif %}">{{ emailBody.content }}</pre>*/
/*     {%- else -%}*/
/*         <iframe class="email-body{% if cssClass is defined %} {{ cssClass }}{% endif %}" src="{{ path('oro_email_body', {id:emailBody.id}) }}"></iframe>*/
/*     {%- endif %}*/
/* {%- endmacro %}*/
/* */
/* {% macro renderJs() %}*/
/*     <script type="text/javascript">*/
/*         !function() {*/
/*             /* global:require *//**/
/*             require(['oro/init-email']);*/
/*         }();*/
/*     </script>*/
/* {% endmacro %}*/
/* */
