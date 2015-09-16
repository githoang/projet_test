<?php

/* OroEntityConfigBundle:Include:fields.html.twig */
class __TwigTemplate_8ed8e90d136fc3c18edb416ee67e3ad1d250d9da05fe86188729f5a9607d1f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_option_set_widget' => array($this, 'block_oro_entity_option_set_widget'),
            'oro_collection_widget' => array($this, 'block_oro_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_entity_option_set_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('oro_collection_widget', $context, $blocks);
        // line 57
        echo "
";
    }

    // line 1
    public function block_oro_entity_option_set_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"email-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Default"), "html", null, true);
        echo "\">
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_default", array()), 'widget');
        echo "
            </label>
            <label class=\"add-on\" title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Priority"), "html", null, true);
        echo "\">
                <i class=\"icon-list handle\"></i>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'widget', array("attr" => array("class" => "priority")));
        echo "
            </label>
        </div>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$('#oro_entity_config_type_extend_set_options_collection').sortable({
                cursor: 'move',
                delay : 100,
                handle: '.handle',
                containment: \"parent\",
                stop  : function () {
                    var index = 1;
                    \$('#oro_entity_config_type_extend_set_options_collection input.priority').each(function(i, el){
                        \$(el).val(index++);
                    })
                }
            });
        });
    </script>
";
    }

    // line 35
    public function block_oro_collection_widget($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        ob_start();
        // line 37
        echo "        ";
        $context["_form"] = $this->loadTemplate("OroFormBundle:Form:fields.html.twig", "OroEntityConfigBundle:Include:fields.html.twig", 37);
        // line 38
        echo "        ";
        $context["prototypeHtml"] = $context["_form"]->getoro_collection_item_prototype((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        // line 39
        echo "
        ";
        // line 40
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 41
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
        // line 42
        echo "        <div class=\"row-oro\">
            <div ";
        // line 43
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-prototype=\"";
        echo twig_escape_filter($this->env, (isset($context["prototypeHtml"]) ? $context["prototypeHtml"] : $this->getContext($context, "prototypeHtml")));
        echo "\">
                ";
        // line 44
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()))) {
            // line 45
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 46
                echo "                        ";
                echo $context["_form"]->getoro_collection_item_prototype($context["child"]);
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        } elseif ((isset($context["show_form_when_empty"]) ? $context["show_form_when_empty"] : $this->getContext($context, "show_form_when_empty"))) {
            // line 49
            echo "                    ";
            echo twig_replace_filter((isset($context["prototypeHtml"]) ? $context["prototypeHtml"] : $this->getContext($context, "prototypeHtml")), array("__name__" => "0"));
            echo "
                ";
        }
        // line 51
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
        ";
        // line 54
        echo $this->getAttribute($this, "oro_item_collection_validate_default_js", array(0 => $context), "method");
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 58
    public function getoro_item_collection_validate_default_js($__context__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 59
            echo "    ";
            $context["form"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "form", array());
            // line 60
            echo "    ";
            $context["id"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array());
            // line 61
            echo "    ";
            $context["show_form_when_empty"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "show_form_when_empty", array());
            // line 62
            echo "    ";
            $context["has_default"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "is_default", array(), "any", true, true);
            // line 63
            echo "
    ";
            // line 64
            if (((isset($context["has_default"]) ? $context["has_default"] : $this->getContext($context, "has_default")) || (isset($context["show_form_when_empty"]) ? $context["show_form_when_empty"] : $this->getContext($context, "show_form_when_empty")))) {
                // line 65
                echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
                echo "');

                    ";
                // line 71
                if ((isset($context["has_default"]) ? $context["has_default"] : $this->getContext($context, "has_default"))) {
                    // line 72
                    echo "                    container.on('click', '[name\$=\"[is_default]\"]', function() {
                        var is_expanded = \$('form select#oro_entity_config_type_extend_set_expanded option:selected').attr('value');
                        if (is_expanded == 0) {
                            container.find('[name\$=\"[is_default]\"]').each(function (idx, el) {
                                el.checked = false;
                            });
                            this.checked = true;
                        }
                    });
                    ";
                }
                // line 82
                echo "
                    var change_defaults_type = function() {
                        var el = \$(this),
                            is_expanded = el.find('option:selected').attr('value');

                        container.find('[name\$=\"[is_default]\"]').each(function (idx, el) {
                            el.type = (is_expanded == 1) ? 'checkbox' : 'radio';
                            el.checked = false;
                        });
                    };

                    var set_default_type = function() {
                        var is_expanded = \$('form select#oro_entity_config_type_extend_set_expanded option:selected').attr('value');
                        container.find('[name\$=\"[is_default]\"]').each(function (idx, el) {
                            el.type = (is_expanded == 1) ? 'checkbox' : 'radio';
                        });
                    };

                    \$(document).ready(set_default_type);
                    \$(document).on('change', 'form select#oro_entity_config_type_extend_set_expanded', change_defaults_type);
                    \$(document).on('click', 'a.add-list-item', set_default_type);
                });
            });
        </script>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Include:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 82,  207 => 72,  205 => 71,  200 => 69,  194 => 65,  192 => 64,  189 => 63,  186 => 62,  183 => 61,  180 => 60,  177 => 59,  165 => 58,  158 => 54,  153 => 52,  150 => 51,  144 => 49,  141 => 48,  132 => 46,  127 => 45,  125 => 44,  119 => 43,  116 => 42,  113 => 41,  111 => 40,  108 => 39,  105 => 38,  102 => 37,  99 => 36,  96 => 35,  73 => 15,  68 => 13,  62 => 10,  57 => 8,  52 => 6,  48 => 5,  44 => 4,  36 => 2,  33 => 1,  28 => 57,  26 => 35,  23 => 34,  21 => 1,);
    }
}
/* {% block oro_entity_option_set_widget %}*/
/*     <div class="email-holder {% if form.label.vars.errors|length > 0 %} validation-error{% endif %}">*/
/*         <div class="input-append collection-element-primary">*/
/*             {{ form_widget(form.label) }}*/
/*             <label class="add-on" title="{{ 'Default'|trans }}">*/
/*                 {{ form_widget(form.is_default) }}*/
/*             </label>*/
/*             <label class="add-on" title="{{ 'Priority'|trans }}">*/
/*                 <i class="icon-list handle"></i>*/
/*                 {{ form_widget(form.priority, {'attr': {'class': 'priority'}}) }}*/
/*             </label>*/
/*         </div>*/
/*         {{ form_errors(form.label) }}*/
/*     </div>*/
/*     {{ form_rest(form) }}*/
/*     <script type="text/javascript">*/
/*         require(['jquery'],*/
/*         function($){*/
/*             $('#oro_entity_config_type_extend_set_options_collection').sortable({*/
/*                 cursor: 'move',*/
/*                 delay : 100,*/
/*                 handle: '.handle',*/
/*                 containment: "parent",*/
/*                 stop  : function () {*/
/*                     var index = 1;*/
/*                     $('#oro_entity_config_type_extend_set_options_collection input.priority').each(function(i, el){*/
/*                         $(el).val(index++);*/
/*                     })*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% block oro_collection_widget %}*/
/*     {% spaceless %}*/
/*         {% import 'OroFormBundle:Form:fields.html.twig' as _form %}*/
/*         {% set prototypeHtml = _form.oro_collection_item_prototype(form) %}*/
/* */
/*         {% set attr = attr|merge({'class': (attr.class is defined ? attr.class ~ ' ' : '') ~ 'oro-item-collection collection-fields-list' }) %}*/
/*         {% set id = id ~ '_collection' %}*/
/*         <div class="row-oro">*/
/*             <div {{ block('widget_container_attributes') }} data-prototype="{{ prototypeHtml|escape }}">*/
/*                 {% if form.children|length %}*/
/*                     {% for child in form.children %}*/
/*                         {{ _form.oro_collection_item_prototype(child) }}*/
/*                     {% endfor %}*/
/*                 {% elseif show_form_when_empty %}*/
/*                     {{ prototypeHtml|replace({'__name__': '0'})|raw }}*/
/*                 {% endif %}*/
/*             </div>*/
/*             <a class="btn add-list-item" href="javascript: void(0);"><i class="icon-plus"></i>{{ 'Add'|trans }}</a>*/
/*         </div>*/
/*         {{ _self.oro_item_collection_validate_default_js(_context) }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% macro oro_item_collection_validate_default_js(context) %}*/
/*     {% set form = context.form %}*/
/*     {% set id = context.id %}*/
/*     {% set show_form_when_empty = context.show_form_when_empty %}*/
/*     {% set has_default = form.vars.prototype.is_default is defined %}*/
/* */
/*     {% if has_default or show_form_when_empty %}*/
/*         <script type="text/javascript">*/
/*             require(['jquery'],*/
/*             function($){*/
/*                 $(function() {*/
/*                     var container = $('#{{ context.id }}');*/
/* */
/*                     {% if has_default %}*/
/*                     container.on('click', '[name$="[is_default]"]', function() {*/
/*                         var is_expanded = $('form select#oro_entity_config_type_extend_set_expanded option:selected').attr('value');*/
/*                         if (is_expanded == 0) {*/
/*                             container.find('[name$="[is_default]"]').each(function (idx, el) {*/
/*                                 el.checked = false;*/
/*                             });*/
/*                             this.checked = true;*/
/*                         }*/
/*                     });*/
/*                     {% endif %}*/
/* */
/*                     var change_defaults_type = function() {*/
/*                         var el = $(this),*/
/*                             is_expanded = el.find('option:selected').attr('value');*/
/* */
/*                         container.find('[name$="[is_default]"]').each(function (idx, el) {*/
/*                             el.type = (is_expanded == 1) ? 'checkbox' : 'radio';*/
/*                             el.checked = false;*/
/*                         });*/
/*                     };*/
/* */
/*                     var set_default_type = function() {*/
/*                         var is_expanded = $('form select#oro_entity_config_type_extend_set_expanded option:selected').attr('value');*/
/*                         container.find('[name$="[is_default]"]').each(function (idx, el) {*/
/*                             el.type = (is_expanded == 1) ? 'checkbox' : 'radio';*/
/*                         });*/
/*                     };*/
/* */
/*                     $(document).ready(set_default_type);*/
/*                     $(document).on('change', 'form select#oro_entity_config_type_extend_set_expanded', change_defaults_type);*/
/*                     $(document).on('click', 'a.add-list-item', set_default_type);*/
/*                 });*/
/*             });*/
/*         </script>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
