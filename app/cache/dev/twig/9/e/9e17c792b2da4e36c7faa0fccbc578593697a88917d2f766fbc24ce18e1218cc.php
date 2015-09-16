<?php

/* OroNavigationBundle:HashNav:hashNavAjax.html.twig */
class __TwigTemplate_6cd70582b0b6c12dacf7ebabd5b0000850324a82fa8ee2c03992fc425e1fe8bf extends Twig_Template
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
        // line 7
        $context["is_entity"] = false;
        // line 8
        $context["md5_string"] = "e7c714f84f25c28eb3f9e4f6ef82d52d";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "hash-navigation-md5"), "method")) {
            // line 10
            echo "    ";
            $context["data"] = array("content_md5" =>             // line 11
(isset($context["md5_string"]) ? $context["md5_string"] : $this->getContext($context, "md5_string")));
        } else {
            // line 14
            echo "    ";
            $context["data"] = array("title" => $this->env->getExtension('oro_title')->render(), "titleSerialized" => $this->env->getExtension('oro_title')->renderSerialized(), "titleShort" => $this->env->getExtension('oro_title')->renderShort(), "scripts" =>             // line 18
(isset($context["script"]) ? $context["script"] : $this->getContext($context, "script")), "mainMenu" =>             // line 19
(isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "userMenu" =>             // line 20
(isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")), "breadcrumb" =>             // line 21
(isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb")), "flashMessages" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()), "history" => $this->env->getExtension('oro_menu')->render("history"), "mostviewed" => $this->env->getExtension('oro_menu')->render("mostviewed"), "content" =>             // line 25
(isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "showPinButton" => ($this->getAttribute($this->getAttribute($this->getAttribute(            // line 26
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != $this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "start_route", array())), "is_entity_page" =>             // line 27
(isset($context["is_entity"]) ? $context["is_entity"] : $this->getContext($context, "is_entity")), "content_md5" =>             // line 28
(isset($context["md5_string"]) ? $context["md5_string"] : $this->getContext($context, "md5_string")));
        }
        // line 31
        echo "    ";
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:hashNavAjax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 31,  42 => 28,  41 => 27,  40 => 26,  39 => 25,  38 => 22,  37 => 21,  36 => 20,  35 => 19,  34 => 18,  32 => 14,  29 => 11,  27 => 10,  25 => 9,  23 => 8,  21 => 7,  19 => 1,);
    }
}
/* {% spaceless %}*/
/* {#*/
/*     Get page unique hash*/
/*     If we have entity object (view page) or form (edit page), return md5 of serialized object*/
/*     Othewise return md5 of full page content*/
/* #}*/
/* {% set is_entity = false %}*/
/* {% set md5_string = 'e7c714f84f25c28eb3f9e4f6ef82d52d' %}*/
/* {% if (app.request.get('hash-navigation-md5')) %}*/
/*     {% set data = {*/
/*         'content_md5': md5_string*/
/*     } %}*/
/* {% else %}*/
/*     {% set data = {*/
/*     'title': oro_title_render(),*/
/*     'titleSerialized': oro_title_render_serialized(),*/
/*     'titleShort': oro_title_render_short(),*/
/*     'scripts': script,*/
/*     'mainMenu': menu,*/
/*     'userMenu': userMenu,*/
/*     'breadcrumb': breadcrumb,*/
/*     'flashMessages': app.session.flashbag.all,*/
/*     'history': oro_menu_render('history'),*/
/*     'mostviewed': oro_menu_render('mostviewed'),*/
/*     'content': content,*/
/*     'showPinButton': (app.request.attributes.get('_route') != bap.start_route),*/
/*     'is_entity_page': is_entity,*/
/*     'content_md5': md5_string*/
/*     } %}*/
/* {% endif %}*/
/*     {{ data|json_encode|raw }}*/
/* {% endspaceless %}*/
/* */
