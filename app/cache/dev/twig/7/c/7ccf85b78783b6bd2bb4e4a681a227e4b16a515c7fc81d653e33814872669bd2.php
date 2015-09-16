<?php

/* OroUserBundle:Mail:layout.html.twig */
class __TwigTemplate_fc85167b311f4916afcf971c1d7a0da60bdf7a7560d40d57ab9d7fcfd165d841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 3.2 Final//EN\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
</head>
<body leftmargin=\"0\" rightmargin=\"0\" topmargin=\"0\" bottommargin=\"0\" bgcolor=\"#ffffff\">
    ";
        // line 7
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "
    <br>
    <hr>
    <p>
        Regards,<br>
        the Akeneo Team
    </p>
</body>
</html>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "OroUserBundle:Mail:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  30 => 8,  28 => 7,  20 => 1,);
    }
}
/* <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">*/
/* <html>*/
/* <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">*/
/* </head>*/
/* <body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" bgcolor="#ffffff">*/
/*     {% block content %}{% endblock %}*/
/* */
/*     <br>*/
/*     <hr>*/
/*     <p>*/
/*         Regards,<br>*/
/*         the Akeneo Team*/
/*     </p>*/
/* </body>*/
/* </html>*/
/* */
