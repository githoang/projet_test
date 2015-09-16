<?php

/* OroWindowsBundle::states.html.twig */
class __TwigTemplate_6e20a1980399048dfb013b083dc1e428e012dd7a9069e731824533bc125098b2 extends Twig_Template
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
        if ((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states"))) {
            // line 2
            echo "    <div style=\"display: none\" id=\"widget-states-container\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
            foreach ($context['_seq'] as $context["stateId"] => $context["state"]) {
                // line 4
                echo "            ";
                if ($this->getAttribute($context["state"], "url", array())) {
                    // line 5
                    echo "                <div id=\"widget-restored-state-";
                    echo twig_escape_filter($this->env, ((array_key_exists("stateId", $context)) ? (_twig_default_filter($context["stateId"], "none")) : ("none")), "html", null, true);
                    echo "\">

                    ";
                    // line 7
                    echo $this->env->getExtension('actions')->renderUri($this->getAttribute($context["state"], "cleanUrl", array()), array());
                    // line 8
                    echo "                </div>
            ";
                }
                // line 10
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stateId'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oro/dialog-widget', 'oro/dialog/state/model'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["states"]) ? $context["states"] : $this->getContext($context, "states")));
            foreach ($context['_seq'] as $context["stateId"] => $context["state"]) {
                // line 18
                echo "                var widget = new DialogWidget({
                    model: new StateModel(";
                // line 19
                echo twig_jsonencode_filter(array("data" => $context["state"], "id" => $context["stateId"]));
                echo ")
                });
                widget.render();
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stateId'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "OroWindowsBundle::states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  64 => 19,  61 => 18,  57 => 17,  49 => 11,  43 => 10,  39 => 8,  37 => 7,  31 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if states %}*/
/*     <div style="display: none" id="widget-states-container">*/
/*         {% for stateId, state in states %}*/
/*             {% if state.url %}*/
/*                 <div id="widget-restored-state-{{ stateId|default("none") }}">*/
/* */
/*                     {% render state.cleanUrl %}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/*     </div>*/
/* */
/*     <script type="text/javascript">*/
/*         require(['jquery', 'oro/dialog-widget', 'oro/dialog/state/model'],*/
/*         function($, DialogWidget, StateModel) {*/
/*             $(function(){*/
/*                 {% for stateId, state in states %}*/
/*                 var widget = new DialogWidget({*/
/*                     model: new StateModel({{ {'data': state, 'id': stateId}|json_encode|raw }})*/
/*                 });*/
/*                 widget.render();*/
/*                 {% endfor %}*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endif %}*/
