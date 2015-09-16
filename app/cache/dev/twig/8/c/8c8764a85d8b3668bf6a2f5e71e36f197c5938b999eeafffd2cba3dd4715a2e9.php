<?php

/* OroUserBundle:Form:fields.html.twig */
class __TwigTemplate_ea16036244f4e47c47b46eb4d5ec176472e3d2e9a2b2e2e760a7246181c9a1a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_combobox_dataconfig_users_multiselect' => array($this, 'block_oro_combobox_dataconfig_users_multiselect'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_combobox_dataconfig_users_multiselect', $context, $blocks);
    }

    public function block_oro_combobox_dataconfig_users_multiselect($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $this->displayBlock("oro_combobox_dataconfig_autocomplete", $context, $blocks);
        echo "

    select2Config.multiple = true;
";
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
/* {% block oro_combobox_dataconfig_users_multiselect %}*/
/*     {{ block('oro_combobox_dataconfig_autocomplete') }}*/
/* */
/*     select2Config.multiple = true;*/
/* {% endblock %}*/
/* */
