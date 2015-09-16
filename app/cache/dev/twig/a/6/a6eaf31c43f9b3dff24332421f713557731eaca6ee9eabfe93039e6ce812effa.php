<?php

/* AkeneoBatchBundle:Mails:notification.html.twig */
class __TwigTemplate_99e3c029b8bafe80843a94aff18f6e3f23610270e9156b4bfad9f8238f3d002c extends Twig_Template
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
        echo "<p>
    Akeneo successfully completed your batch ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "jobInstance", array()), "type", array()), "html", null, true);
        echo ".<br />
    <br />
    Started on ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "startTime", array()), "Y-m-d"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "startTime", array()), "H:i:s"), "html", null, true);
        echo ".<br />
    Ended on ";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "endTime", array()), "Y-m-d"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "endTime", array()), "H:i:s"), "html", null, true);
        echo ".<br />
</p>

<p>
    Results:<br />
    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "stepExecutions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stepExecution"]) {
            // line 12
            echo "        <li>
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["stepExecution"], "stepName", array())), "html", null, true);
            echo " [";
            echo twig_escape_filter($this->env, $this->getAttribute($context["stepExecution"], "status", array()), "html", null, true);
            echo "]
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepExecution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
</p>

<p>
    -- <br />
    Akeneo Batch<br />
</p>
";
    }

    public function getTemplateName()
    {
        return "AkeneoBatchBundle:Mails:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 16,  51 => 13,  48 => 12,  44 => 11,  33 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <p>*/
/*     Akeneo successfully completed your batch {{ jobExecution.jobInstance.type }}.<br />*/
/*     <br />*/
/*     Started on {{ jobExecution.startTime|date("Y-m-d") }} at {{ jobExecution.startTime|date("H:i:s")  }}.<br />*/
/*     Ended on {{ jobExecution.endTime|date("Y-m-d") }} at {{ jobExecution.endTime|date("H:i:s")  }}.<br />*/
/* </p>*/
/* */
/* <p>*/
/*     Results:<br />*/
/*     <ul>*/
/*         {% for stepExecution in jobExecution.stepExecutions %}*/
/*         <li>*/
/*             {{ stepExecution.stepName|trans }} [{{ stepExecution.status }}]*/
/*         </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* </p>*/
/* */
/* <p>*/
/*     -- <br />*/
/*     Akeneo Batch<br />*/
/* </p>*/
/* */
