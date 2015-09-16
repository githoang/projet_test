<?php

/* OroEntityBundle:Entities:view.html.twig */
class __TwigTemplate_3b39475897775896b4235fadcd5d8f6891495449429ba3f58fc637ac2c3b1d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:view.html.twig", "OroEntityBundle:Entities:view.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'stats' => array($this, 'block_stats'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:view.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {

        $this->env->getExtension("oro_title")->set(array("params" => array("%entityName%" => (($this->getAttribute(        // line 4
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")), "%recordName%" => ("Item #" . (($this->getAttribute(        // line 5
(isset($context["entity"]) ? $context["entity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "N/A")) : ("N/A"))))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_navButtons($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", ("entity:" . (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class"))))) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "button", array(0 => array("path" => $this->env->getExtension('routing')->getPath("oro_entity_update", array("entity_id" => (isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")), "id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "iClass" => "icon-edit ", "title" => "Edit user", "label" => "Edit")), "method"), "html", null, true);
            echo "
    ";
        }
    }

    // line 14
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context["breadcrumbs"] = array("entity" =>         // line 16
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "indexPath" => $this->env->getExtension('routing')->getPath("oro_entityconfig_index"), "indexLabel" => "Entities", "entityTitle" => ("Item #" . (($this->getAttribute(        // line 19
(isset($context["entity"]) ? $context["entity"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()), "N/A")) : ("N/A"))), "additional" => array(0 => array("indexPath" => $this->env->getExtension('routing')->getPath("oro_entity_index", array("id" =>         // line 21
(isset($context["parent"]) ? $context["parent"] : $this->getContext($context, "parent")))), "indexLabel" => (($this->getAttribute(        // line 22
(isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["entity_config"]) ? $context["entity_config"] : null), "get", array(0 => "label"), "method"), "N/A")) : ("N/A")))));
        // line 25
        echo "
    ";
        // line 26
        $this->displayParentBlock("pageHeader", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_stats($context, array $blocks = array())
    {
    }

    // line 42
    public function block_content_data($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $context["general_fields"] = array();
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("entity_fields", $context)) ? (_twig_default_filter((isset($context["entity_fields"]) ? $context["entity_fields"] : $this->getContext($context, "entity_fields")))) : ("")));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 45
            echo "        ";
            if (twig_test_iterable($context["value"])) {
                // line 46
                echo "            ";
                $context["data"] = "";
                // line 47
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["value"], "values", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 48
                    echo "                ";
                    if (($this->getAttribute($context["item"], "link", array(), "any", true, true) && ($this->getAttribute($context["item"], "link", array()) != false))) {
                        // line 49
                        echo "                    ";
                        $context["data"] = ((((((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) . "<a href=\"") . $this->getAttribute($context["item"], "link", array())) . "\">") . $this->getAttribute($context["item"], "title", array())) . "</a>");
                        // line 50
                        echo "                ";
                    } else {
                        // line 51
                        echo "                    ";
                        $context["data"] = ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) . $this->getAttribute($context["item"], "title", array()));
                        // line 52
                        echo "                ";
                    }
                    // line 53
                    echo "                ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 54
                        echo "                    ";
                        $context["data"] = ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) . ", ");
                        // line 55
                        echo "                ";
                    }
                    // line 56
                    echo "            ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            ";
                $context["value"] = (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
                // line 58
                echo "        ";
            }
            // line 59
            echo "
        ";
            // line 60
            $context["general_fields"] = twig_array_merge((isset($context["general_fields"]) ? $context["general_fields"] : $this->getContext($context, "general_fields")), array(0 => $this->getAttribute($this, "attibuteRow", array(0 => twig_capitalize_string_filter($this->env, $context["key"]), 1 => $context["value"]), "method")));
            // line 61
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
    ";
        // line 63
        $context["data"] = array("dataBlocks" => array(0 => array("title" => "General", "class" => "active", "subblocks" => array(0 => array("title" => "General Information", "data" =>         // line 68
(isset($context["general_fields"]) ? $context["general_fields"] : $this->getContext($context, "general_fields")))))));
        // line 71
        echo "
    ";
        // line 72
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
    }

    // line 34
    public function getattribute_data($__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "        <div class=\"clearfix-oro\">
            <p class=\"control-label\">";
            // line 36
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "</p>
        </div>
    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getattibuteRow($__title__ = null, $__value__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 33
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityBundle:Entities:view.html.twig", 33);
            // line 34
            echo "    ";
            // line 39
            echo "    ";
            echo $context["UI"]->getrenderAttribute((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), $this->getAttribute($this, "attribute_data", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 39,  224 => 34,  221 => 33,  208 => 32,  194 => 36,  191 => 35,  179 => 34,  173 => 72,  170 => 71,  168 => 68,  167 => 63,  164 => 62,  158 => 61,  156 => 60,  153 => 59,  150 => 58,  147 => 57,  133 => 56,  130 => 55,  127 => 54,  124 => 53,  121 => 52,  118 => 51,  115 => 50,  112 => 49,  109 => 48,  91 => 47,  88 => 46,  85 => 45,  80 => 44,  77 => 43,  74 => 42,  69 => 29,  63 => 26,  60 => 25,  58 => 22,  57 => 21,  56 => 19,  55 => 16,  53 => 15,  50 => 14,  42 => 10,  39 => 9,  36 => 8,  32 => 1,  30 => 5,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'OroUIBundle:actions:view.html.twig' %}*/
/* */
/* {% oro_title_set({params : {*/
/*     "%entityName%": entity_config.get('label')|default('N/A'),*/
/*     "%recordName%": 'Item #'~entity.id|default('N/A') },*/
/* }) %}*/
/* */
/* {% block navButtons %}*/
/*     {% if resource_granted('EDIT', 'entity:'~entity_class) %}*/
/*         {{ UI.button({'path' : path('oro_entity_update', { 'entity_id': parent, id: entity.id }), 'iClass' : 'icon-edit ', 'title' : 'Edit user', 'label' : 'Edit'}) }}*/
/*     {% endif %}*/
/* {% endblock navButtons %}*/
/* */
/* {% block pageHeader %}*/
/*     {% set breadcrumbs = {*/
/*         'entity':      entity,*/
/*         'indexPath':   path('oro_entityconfig_index'),*/
/*         'indexLabel': 'Entities',*/
/*         'entityTitle': 'Item #'~entity.id|default('N/A'),*/
/*         'additional': [{*/
/*             'indexPath'  : path('oro_entity_index', {id: parent}),*/
/*             'indexLabel' : entity_config.get('label')|default('N/A')*/
/*         }]*/
/*     }%}*/
/* */
/*     {{ parent() }}*/
/* {% endblock pageHeader %}*/
/* */
/* {% block stats %}*/
/* {% endblock stats%}*/
/* */
/* {% macro attibuteRow(title, value) %}*/
/*     {% import 'OroUIBundle::macros.html.twig' as UI %}*/
/*     {% macro attribute_data(value) %}*/
/*         <div class="clearfix-oro">*/
/*             <p class="control-label">{{ value|raw }}</p>*/
/*         </div>*/
/*     {% endmacro %}*/
/*     {{ UI.renderAttribute(title, _self.attribute_data(value)) }}*/
/* {% endmacro %}*/
/* */
/* {% block content_data %}*/
/*     {% set general_fields = [ ] %}*/
/*     {% for key, value in entity_fields|default %}*/
/*         {% if value is iterable %}*/
/*             {% set data = '' %}*/
/*             {% for item in value.values %}*/
/*                 {% if item.link is defined and item.link != false  %}*/
/*                     {% set data = data ~ '<a href="' ~ item.link ~ '">' ~ item.title ~ '</a>' %}*/
/*                 {% else %}*/
/*                     {% set data = data ~ item.title %}*/
/*                 {% endif %}*/
/*                 {% if not loop.last %}*/
/*                     {% set data = data ~ ', ' %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*             {% set value = data %}*/
/*         {% endif %}*/
/* */
/*         {% set general_fields = general_fields|merge([_self.attibuteRow(key|capitalize, value)])%}*/
/*     {% endfor %}*/
/* */
/*     {% set data = { 'dataBlocks': [{*/
/*         'title': 'General',*/
/*         'class': 'active',*/
/*         'subblocks': [{*/
/*             'title': 'General Information',*/
/*             'data':  general_fields*/
/*         }]*/
/*     }] } %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock content_data %}*/
/* */
