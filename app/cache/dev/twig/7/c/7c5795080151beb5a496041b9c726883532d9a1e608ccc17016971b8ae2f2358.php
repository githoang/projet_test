<?php

/* PimEnrichBundle::base.html.twig */
class __TwigTemplate_6f9a82af2bd4a85ec3de1ba9c6c63a443435fc2ed94b2ad8f2bc7f875317a4e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "PimEnrichBundle::base.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'head_style' => array($this, 'block_head_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        require(['pim/init'], function(init) {
            init();
        });
    </script>
    ";
        // line 10
        if ( !(null === (isset($context["uservoice_key"]) ? $context["uservoice_key"] : $this->getContext($context, "uservoice_key")))) {
            // line 11
            echo "        ";
            $this->loadTemplate("PimUIBundle:Default:pim_uservoice.js.twig", "PimEnrichBundle::base.html.twig", 11)->display($context);
            // line 12
            echo "    ";
        }
        // line 13
        echo "    ";
        $this->displayBlock("head_script_component", $context, $blocks);
        echo "
";
    }

    // line 16
    public function block_head_style($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "
    ";
        // line 18
        // asset "2db1c9d"
        $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2db1c9d") : $this->env->getExtension('assets')->getAssetUrl("css/pim_all.css");
        // line 26
        echo "    <link rel=\"stylesheet\" media=\"all\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
        echo "\" />
    ";
        unset($context["asset_url"]);
        // line 28
        echo "    ";
        $this->displayBlock("head_style_component", $context, $blocks);
        echo "
";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "
    ";
        // line 33
        echo $this->env->getExtension('oro_windows')->render($this->env);
        echo "
";
    }

    public function getTemplateName()
    {
        return "PimEnrichBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 33,  85 => 32,  82 => 31,  75 => 28,  69 => 26,  66 => 18,  61 => 17,  58 => 16,  51 => 13,  48 => 12,  45 => 11,  43 => 10,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript">*/
/*         require(['pim/init'], function(init) {*/
/*             init();*/
/*         });*/
/*     </script>*/
/*     {% if uservoice_key is not null %}*/
/*         {% include 'PimUIBundle:Default:pim_uservoice.js.twig' %}*/
/*     {% endif %}*/
/*     {{ block('head_script_component') }}*/
/* {% endblock %}*/
/* */
/* {% block head_style %}*/
/*     {{ parent() }}*/
/*     {% stylesheets*/
/*         'bundles/pimui/css/pim.less'*/
/*         'bundles/pimcomment/css/comment.less'*/
/* */
/*         debug=false*/
/*         filter='cssrewrite,lessphp'*/
/*         output='css/pim_all.css'*/
/*     %}*/
/*     <link rel="stylesheet" media="all" href="{{ asset_url }}" />*/
/*     {% endstylesheets %}*/
/*     {{ block('head_style_component') }}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {{ parent() }}*/
/*     {{ oro_windows_restore() }}*/
/* {% endblock %}*/
/* */
