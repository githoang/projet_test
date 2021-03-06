<?php

/* OroUIBundle:Default:registrationPage.html.twig */
class __TwigTemplate_04fe203fcc566268bb0371a3c621122be0dd22b88dc355612ca2a4af534da3ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:registrationPage.html.twig", 1);
        $this->blocks = array(
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"container-fluid\" >
        <div class=\"row-fluid one-column\">
            <div class=\"container-fluid\">
                <form class=\"form-register\" action=\"#\" >
                    <fieldset>
                        <legend>Registration page</legend>
                        <div class=\"form-row\">
                            <label>Name</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <label>Company</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <label>Phone</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <label>Email Address</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <label>Password</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <label>Re-enter Password</label>
                            <input type=\"text\"  class=\"input\" />
                        </div>
                        <div class=\"form-row\">
                            <div class=\"form-inline\">
                                <input type=\"checkbox\" class=\"checkbox small-text\" />
                                <label class=\"checkbox small-text\">I agree to the <a href=\"#\">Terms of Service</a> and <a href=\"#\">Privacy Policy</a></label>
                            </div>
                        </div>
                        <div class=\"form-row\">
                            <button type=\"submit\" class=\"btn btn-large\">Sign Up</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:registrationPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  34 => 4,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block header %}*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div class="container-fluid" >*/
/*         <div class="row-fluid one-column">*/
/*             <div class="container-fluid">*/
/*                 <form class="form-register" action="#" >*/
/*                     <fieldset>*/
/*                         <legend>Registration page</legend>*/
/*                         <div class="form-row">*/
/*                             <label>Name</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <label>Company</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <label>Phone</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <label>Email Address</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <label>Password</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <label>Re-enter Password</label>*/
/*                             <input type="text"  class="input" />*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <div class="form-inline">*/
/*                                 <input type="checkbox" class="checkbox small-text" />*/
/*                                 <label class="checkbox small-text">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-row">*/
/*                             <button type="submit" class="btn btn-large">Sign Up</button>*/
/*                         </div>*/
/*                     </fieldset>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock content %}*/
