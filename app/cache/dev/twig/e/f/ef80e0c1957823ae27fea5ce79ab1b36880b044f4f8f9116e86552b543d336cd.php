<?php

/* PimEnrichBundle:CategoryTree:form.html.twig */
class __TwigTemplate_f03fc65915d25c4dec5256c13f688cde47b9640fa78d98dbcff48232d6d8804f extends Twig_Template
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
            $context["elements"] = $this->loadTemplate("PimUIBundle:Default:page_elements.html.twig", "PimEnrichBundle:CategoryTree:form.html.twig", 3);
        }
        // line 5
        echo "
";
        // line 6
        $context["parentId"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array()), "id", array())) : (null));
        // line 7
        echo "
";
        // line 8
        $context["entityName"] = (((isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId"))) ? ("category") : ("tree"));
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 11
            echo "    ";
            $context["title"] = (($this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".edit")) . " - ") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
        } else {
            // line 13
            echo "    ";
            $context["title"] = $this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".create"));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 16
        echo "
";
        // line 17
        echo $this->env->getExtension('JsFormValidation')->jsFormValidationFunction((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 19
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) ? ($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 20
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_create", array("parent" =>         // line 21
(isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")))))), "attr" => array("data-updated-title" => $this->env->getExtension('translator')->trans("confirmation.leave"), "data-updated-message" => $this->env->getExtension('translator')->trans("confirmation.discard changes", array("%entity%" => $this->env->getExtension('translator')->trans((        // line 24
(isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".title")))))));
        // line 26
        echo "

    ";
        // line 28
        ob_start();
        // line 29
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {
            // line 30
            echo "            ";
            if ($this->env->getExtension('pim_category_extension')->exceedsProductsLimitForRemoval($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), true)) {
                // line 31
                echo "                ";
                echo $context["elements"]->getlink("btn.delete", null, array("icon" => "trash", "title" => "btn.delete", "attr" => array("data-title" => $this->env->getExtension('translator')->trans("confirmation.delete"), "data-dialog" => "alert", "data-message" => $this->env->getExtension('translator')->trans("info.category.products limit exceeded", array("%limit%" => _twig_default_filter($this->env->getExtension('pim_category_extension')->getProductsLimitForRemoval(), "0"))))));
                // line 43
                echo "
            ";
            } else {
                // line 45
                echo "                ";
                echo $context["elements"]->getdeleteLink($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_remove", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 46
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "pim_enrich_category_remove", (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 48
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array())) ? ($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_edit", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array()), "id", array())))) : ($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_create"))), (((($this->env->getExtension('translator')->trans("confirmation.remove.category", array("%name%" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 49
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))) . "<br />") . $this->env->getExtension('translator')->trans("info.category.remove children")) . "<br />") . $this->env->getExtension('translator')->trans("info.category.keep products")), $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute($this->getAttribute(                // line 52
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "parent", array())) ? ("flash.category.removed") : ("flash.tree.removed"))));
                // line 53
                echo "
            ";
            }
            // line 55
            echo "        ";
        } elseif ((isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId"))) {
            // line 56
            echo "            ";
            echo $context["elements"]->getbackLink($this->env->getExtension('routing')->getPath("pim_enrich_categorytree_edit", array("id" => (isset($context["parentId"]) ? $context["parentId"] : $this->getContext($context, "parentId")))), "btn.to parent");
            echo "
        ";
        }
        // line 58
        echo "        ";
        echo $context["elements"]->getsubmitBtn();
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
    ";
        // line 61
        echo $context["elements"]->getpage_header((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), null, null, $context["elements"]->getupdated($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        echo "

    ";
        // line 63
        echo $context["elements"]->getform_navbar($this->env->getExtension('pim_view_element_extension')->getViewElementAliases($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab")));
        echo "

    <div class=\"row-fluid tab-content\">
        ";
        // line 66
        echo $context["elements"]->getform_errors((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "

        ";
        // line 68
        echo $this->env->getExtension('pim_view_element_extension')->renderViewElements($context, ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . ".form_tab"));
        echo "
    </div>
";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<script type=\"text/javascript\">
    document.title = '";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("pim_title.category.edit", array("%category.label%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle:CategoryTree:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 72,  133 => 70,  128 => 68,  123 => 66,  117 => 63,  112 => 61,  109 => 60,  103 => 58,  97 => 56,  94 => 55,  90 => 53,  88 => 52,  87 => 49,  86 => 48,  85 => 46,  83 => 45,  79 => 43,  76 => 31,  73 => 30,  70 => 29,  68 => 28,  64 => 26,  62 => 24,  61 => 21,  60 => 20,  59 => 19,  58 => 18,  54 => 17,  51 => 16,  46 => 13,  42 => 11,  40 => 10,  37 => 9,  35 => 8,  32 => 7,  30 => 6,  27 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {% if elements is not defined %}*/
/*     {% import 'PimUIBundle:Default:page_elements.html.twig' as elements %}*/
/* {% endif %}*/
/* */
/* {% set parentId = form.vars.value.parent ? form.vars.value.parent.id : null %}*/
/* */
/* {% set entityName = parentId ? 'category' : 'tree' %}*/
/* */
/* {% if form.vars.value.id %}*/
/*     {% set title = (entityName ~ '.edit')|trans ~ ' - ' ~ form.vars.value.label %}*/
/* {% else %}*/
/*     {% set title = (entityName ~ '.create')|trans %}*/
/* {% endif %}*/
/* {% endspaceless %}*/
/* */
/* {{ JSFV(form) }}*/
/* {{ form_start(form, {*/
/*     'action': form.vars.value.id ?*/
/*         path('pim_enrich_categorytree_edit', { id: form.vars.value.id }) :*/
/*         path('pim_enrich_categorytree_create', { parent: parentId }),*/
/*     'attr': {*/
/*         'data-updated-title': 'confirmation.leave'|trans,*/
/*         'data-updated-message': 'confirmation.discard changes'|trans({ '%entity%': (entityName ~ '.title')|trans })*/
/*     }*/
/* }) }}*/
/* */
/*     {% set buttons %}*/
/*         {% if form.vars.value.id %}*/
/*             {% if exceeds_products_limit_for_removal(form.vars.value, true) %}*/
/*                 {{ elements.link(*/
/*                     'btn.delete',*/
/*                     null,*/
/*                     {*/
/*                         'icon':  'trash',*/
/*                         'title': 'btn.delete',*/
/*                         'attr': {*/
/*                             'data-title':   'confirmation.delete'|trans,*/
/*                             'data-dialog':  'alert',*/
/*                             'data-message': 'info.category.products limit exceeded'|trans({ '%limit%': get_products_limit_for_removal()|default('0') })*/
/*                         }*/
/*                     }*/
/*                 ) }}*/
/*             {% else %}*/
/*                 {{ elements.deleteLink(*/
/*                     path('pim_enrich_categorytree_remove', { id: form.vars.value.id }),*/
/*                     'pim_enrich_category_remove',*/
/*                     form.vars.value.parent ? path('pim_enrich_categorytree_edit', { id: form.vars.value.parent.id }) : path('pim_enrich_categorytree_create'),*/
/*                     'confirmation.remove.category'|trans({ '%name%': form.vars.value.label }) ~ '<br />'*/
/*                     ~ 'info.category.remove children'|trans ~ '<br />'*/
/*                     ~ 'info.category.keep products'|trans,*/
/*                     (form.vars.value.parent ? 'flash.category.removed' : 'flash.tree.removed')|trans*/
/*                 ) }}*/
/*             {% endif %}*/
/*         {% elseif parentId %}*/
/*             {{ elements.backLink(path('pim_enrich_categorytree_edit', { id: parentId }), 'btn.to parent') }}*/
/*         {% endif %}*/
/*         {{ elements.submitBtn() }}*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons, null, null, elements.updated(form.vars.id)) }}*/
/* */
/*     {{ elements.form_navbar(view_element_aliases(form.vars.id ~ '.form_tab')) }}*/
/* */
/*     <div class="row-fluid tab-content">*/
/*         {{ elements.form_errors(form) }}*/
/* */
/*         {{ view_elements(form.vars.id ~ '.form_tab') }}*/
/*     </div>*/
/* {{ form_end(form) }}*/
/* <script type="text/javascript">*/
/*     document.title = '{{ "pim_title.category.edit"|trans({ "%category.label%": form.vars.value.label }) }}';*/
/* </script>*/
/* */
