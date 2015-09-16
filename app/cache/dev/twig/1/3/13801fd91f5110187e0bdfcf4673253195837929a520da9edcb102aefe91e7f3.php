<?php

/* OroUIBundle:Default:forgotPassword.html.twig */
class __TwigTemplate_ada1a4531cc8636e74b634653d4f5c7ada873bc99abe390cd0f9d783bcdca688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:forgotPassword.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"container\">
        <form class=\"form-pass-reset\">
            <h2 class=\"form-signin-heading\">Password reset Request</h2>
            <div class=\"form-row\">
                <label class=\"\">Enter your registered email address :</label>
                <input type=\"text\" class=\"\" />
            </div>
            <button type=\"submit\" class=\"btn \">Request</button>
            <button type=\"submit\" class=\"btn \">Cancel</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:forgotPassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  45 => 7,  40 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block head %}*/
/*     {{ parent() }}*/
/* {% endblock head %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container">*/
/*         <form class="form-pass-reset">*/
/*             <h2 class="form-signin-heading">Password reset Request</h2>*/
/*             <div class="form-row">*/
/*                 <label class="">Enter your registered email address :</label>*/
/*                 <input type="text" class="" />*/
/*             </div>*/
/*             <button type="submit" class="btn ">Request</button>*/
/*             <button type="submit" class="btn ">Cancel</button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock content %}*/
