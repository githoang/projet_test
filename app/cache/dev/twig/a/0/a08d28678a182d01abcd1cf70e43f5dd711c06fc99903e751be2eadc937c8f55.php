<?php

/* OroEntityBundle:Choice/entity_field:result.html.twig */
class __TwigTemplate_296c687c8dc7c07d37976a0d5f70e3d65bffc64f738567b6bb7d370b1540a1d9 extends Twig_Template
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
        echo "<% if (!_.isUndefined(\$(element).data('related-entity-name'))) { %><i class=\"<%= \$(element).data('related-entity-icon') %> hide-text\"></i>&nbsp;<%= \$(element).data('related-entity-plural-label') %> (<%= highlight(_.escape(text)) %>)<% } else { %><%= highlight(_.escape(text)) %><% } %>
";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Choice/entity_field:result.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <% if (!_.isUndefined($(element).data('related-entity-name'))) { %><i class="<%= $(element).data('related-entity-icon') %> hide-text"></i>&nbsp;<%= $(element).data('related-entity-plural-label') %> (<%= highlight(_.escape(text)) %>)<% } else { %><%= highlight(_.escape(text)) %><% } %>*/
/* */
