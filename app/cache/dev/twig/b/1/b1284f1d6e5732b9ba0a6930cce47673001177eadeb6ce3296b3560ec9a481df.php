<?php

/* OroUIBundle:Default:loginPage.html.twig */
class __TwigTemplate_19c38d6588ed232af29dae60f33ab29418f6e614215e6843bad9c90873264390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:loginPage.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
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
    public function block_bodyClass($context, array $blocks = array())
    {
        // line 3
        echo "    login-page
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
        <form class=\"form-signin\">
            <div class=\"title-box\">
                <h1 class=\"oro-title\">Oro</h1>
                <span class=\"divider-vertical\"></span>
                <h2 class=\"title\">Login</h2>
            </div>
            <fieldset>
                <div class=\"input-prepend\">
                    <span class=\"add-on\">Username</span>
                    <input type=\"text\" placeholder=\"login\" id=\"prependedInput\" class=\"span2\">
                </div>
                <div class=\"input-prepend\">
                    <span class=\"add-on\">Password</span>
                    <input type=\"password\" placeholder=\"pass\" id=\"prependedInput2\" class=\"span2\">
                </div>
                <div class=\"form-row\">
                    <label class=\"checkbox\">
                        <input type=\"checkbox\" value=\"remember-me\"> Remember me on this computer
                    </label>
                </div>
                <button type=\"submit\" class=\"btn btn-large btn-primary\">Log in</button>
                <div class=\"form-row\">
                    <a href=\"#\">Forgot your username?</a>
                    <span class=\"divider-vertical\">|</span>
                    <a href=\"#\">Forgot your password?</a>
                </div>
            </fieldset>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:loginPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block bodyClass %}*/
/*     login-page*/
/* {% endblock %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container">*/
/*         <form class="form-signin">*/
/*             <div class="title-box">*/
/*                 <h1 class="oro-title">Oro</h1>*/
/*                 <span class="divider-vertical"></span>*/
/*                 <h2 class="title">Login</h2>*/
/*             </div>*/
/*             <fieldset>*/
/*                 <div class="input-prepend">*/
/*                     <span class="add-on">Username</span>*/
/*                     <input type="text" placeholder="login" id="prependedInput" class="span2">*/
/*                 </div>*/
/*                 <div class="input-prepend">*/
/*                     <span class="add-on">Password</span>*/
/*                     <input type="password" placeholder="pass" id="prependedInput2" class="span2">*/
/*                 </div>*/
/*                 <div class="form-row">*/
/*                     <label class="checkbox">*/
/*                         <input type="checkbox" value="remember-me"> Remember me on this computer*/
/*                     </label>*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-large btn-primary">Log in</button>*/
/*                 <div class="form-row">*/
/*                     <a href="#">Forgot your username?</a>*/
/*                     <span class="divider-vertical">|</span>*/
/*                     <a href="#">Forgot your password?</a>*/
/*                 </div>*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/* {% endblock content %}*/
