<?php

/* OroTranslationBundle:Form:fields.html.twig */
class __TwigTemplate_a62cbaba2cc0229e804d704744af0e0f2184ae1536f7f65859311f5dd03b2a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_jqueryselect2_translatable_entity_widget' => array($this, 'block_genemu_jqueryselect2_translatable_entity_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('genemu_jqueryselect2_translatable_entity_widget', $context, $blocks);
    }

    public function block_genemu_jqueryselect2_translatable_entity_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        $this->displayBlock("genemu_jqueryselect2_entity_widget", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block genemu_jqueryselect2_translatable_entity_widget %}*/
/*     {% spaceless %}*/
/*         {{ block('genemu_jqueryselect2_entity_widget') }}*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
