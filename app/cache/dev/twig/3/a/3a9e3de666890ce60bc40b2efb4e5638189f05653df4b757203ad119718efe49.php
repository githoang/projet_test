<?php

/* OroInstallerBundle:Form:fields.html.twig */
class __TwigTemplate_688296bf235bc6c67c25e0718761079b2ea1bbd65ef542dd0ab9abea96f8ebbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroFormBundle:Form:fields.html.twig", "OroInstallerBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            '_oro_installer_configuration_mailer_oro_installer_mailer_transport_row' => array($this, 'block__oro_installer_configuration_mailer_oro_installer_mailer_transport_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block__oro_installer_configuration_mailer_oro_installer_mailer_transport_row($context, array $blocks = array())
    {
        // line 4
        echo "<script type=\"text/javascript\">
    \$(function () {
        var con = \$('#oro_installer_configuration_mailer');

        checkTransport();

        con.find('.control-group:first select').change(checkTransport);

        function checkTransport() {
            if (con.find('.control-group:first select').val() != 'smtp') {
                con.find('.control-group:not(:first)').hide()
                   .find('input').attr('disabled', 'disabled');
            } else {
                con.find('.control-group:not(:first)').show()
                    .find('input').attr('disabled', null);
            }
        }
    });
</script>
";
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "OroInstallerBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 23,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'OroFormBundle:Form:fields.html.twig' %}*/
/* */
/* {% block _oro_installer_configuration_mailer_oro_installer_mailer_transport_row %}*/
/* <script type="text/javascript">*/
/*     $(function () {*/
/*         var con = $('#oro_installer_configuration_mailer');*/
/* */
/*         checkTransport();*/
/* */
/*         con.find('.control-group:first select').change(checkTransport);*/
/* */
/*         function checkTransport() {*/
/*             if (con.find('.control-group:first select').val() != 'smtp') {*/
/*                 con.find('.control-group:not(:first)').hide()*/
/*                    .find('input').attr('disabled', 'disabled');*/
/*             } else {*/
/*                 con.find('.control-group:not(:first)').show()*/
/*                     .find('input').attr('disabled', null);*/
/*             }*/
/*         }*/
/*     });*/
/* </script>*/
/* {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
