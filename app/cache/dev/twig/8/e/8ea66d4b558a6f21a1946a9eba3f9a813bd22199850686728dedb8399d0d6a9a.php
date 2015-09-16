<?php

/* PimUIBundle:Default:pim_uservoice.js.twig */
class __TwigTemplate_6e5945ad5f72e0e96db425b1973ceb027b28be2fbb4454d20ae9fbf86a5becab extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["uservoice_key"]) ? $context["uservoice_key"] : $this->getContext($context, "uservoice_key")), "js", null, true);
        echo ".js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();
    UserVoice.push(['set', { accent_color: '#66279c', trigger_color: 'white', trigger_background_color: '#66279c'}]);
    UserVoice.push(['identify', {}]);
    UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);
    UserVoice.push(['autoprompt', {}]);
</script>
";
    }

    public function getTemplateName()
    {
        return "PimUIBundle:Default:pim_uservoice.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     UserVoice=window.UserVoice||[];(function(){var uv=document.createElement('script');uv.type='text/javascript';uv.async=true;uv.src='//widget.uservoice.com/{{ uservoice_key }}.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(uv,s)})();*/
/*     UserVoice.push(['set', { accent_color: '#66279c', trigger_color: 'white', trigger_background_color: '#66279c'}]);*/
/*     UserVoice.push(['identify', {}]);*/
/*     UserVoice.push(['addTrigger', { mode: 'contact', trigger_position: 'bottom-right' }]);*/
/*     UserVoice.push(['autoprompt', {}]);*/
/* </script>*/
/* */
