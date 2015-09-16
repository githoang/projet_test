<?php

/* OroNavigationBundle:Js:dot.menu.js.twig */
class __TwigTemplate_4672bc8000b3839ca0de2b78692dc99dfa53ec24c83cbbcbc164ccdf9f9e5201 extends Twig_Template
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
        echo "<script type=\"text/html\" id=\"template-dot-menu-tab\">
    <li id=\"<%= key %>-tab\">
        <a data-toggle=\"tab\" href=\"#<%= key %>-content\"><i class=\"<%= icon %>\"></i><%- title %></a>
    </li>
</script>

<script type=\"text/html\" id=\"template-dot-menu-tab-content\">
    <div id=\"<%= key %>-content\" class=\"tab-pane\">
        <ul class=\"extra-list\">
        </ul>
    </div>
</script>

<script type=\"text/html\" id=\"template-dot-menu-item\">
    <button class=\"close\" type=\"button\">&times;</button><span data-url=\"<%= url %>\"><%- title_rendered %></span>
</script>

<script type=\"text/html\" id=\"template-dot-menu-empty-message\">
    <div class=\"dot-menu-empty-message\">";
        // line 19
        echo $this->env->getExtension('translator')->trans("No items");
        echo "</div>
</script>
";
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:dot.menu.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }
}
/* <script type="text/html" id="template-dot-menu-tab">*/
/*     <li id="<%= key %>-tab">*/
/*         <a data-toggle="tab" href="#<%= key %>-content"><i class="<%= icon %>"></i><%- title %></a>*/
/*     </li>*/
/* </script>*/
/* */
/* <script type="text/html" id="template-dot-menu-tab-content">*/
/*     <div id="<%= key %>-content" class="tab-pane">*/
/*         <ul class="extra-list">*/
/*         </ul>*/
/*     </div>*/
/* </script>*/
/* */
/* <script type="text/html" id="template-dot-menu-item">*/
/*     <button class="close" type="button">&times;</button><span data-url="<%= url %>"><%- title_rendered %></span>*/
/* </script>*/
/* */
/* <script type="text/html" id="template-dot-menu-empty-message">*/
/*     <div class="dot-menu-empty-message">{{ 'No items'|trans|raw }}</div>*/
/* </script>*/
/* */
