<?php

/* AkeneoBatchBundle:Mails:notification.txt.twig */
class __TwigTemplate_35cfd9ba3b9acb07af2e283f376deb4cc50296a8f2cc61f122e773539bc1eb48 extends Twig_Template
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
        echo "Akeneo successfully completed your batch ";
        echo $this->getAttribute($this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "jobInstance", array()), "type", array());
        echo ".

Started on ";
        // line 3
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "startTime", array()), "Y-m-d");
        echo " at ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "startTime", array()), "H:i:s");
        echo ".
Ended on ";
        // line 4
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "endTime", array()), "Y-m-d");
        echo " at ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "endTime", array()), "H:i:s");
        echo ".

Results:
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jobExecution"]) ? $context["jobExecution"] : $this->getContext($context, "jobExecution")), "stepExecutions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stepExecution"]) {
            // line 8
            echo "  - ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($context["stepExecution"], "stepName", array()));
            echo " [";
            echo $this->getAttribute($context["stepExecution"], "status", array());
            echo "]
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stepExecution'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
--
Akeneo Batch
";
    }

    public function getTemplateName()
    {
        return "AkeneoBatchBundle:Mails:notification.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  43 => 8,  39 => 7,  31 => 4,  25 => 3,  19 => 1,);
    }
}
/* Akeneo successfully completed your batch {{ jobExecution.jobInstance.type }}.*/
/* */
/* Started on {{ jobExecution.startTime|date("Y-m-d") }} at {{ jobExecution.startTime|date("H:i:s")  }}.*/
/* Ended on {{ jobExecution.endTime|date("Y-m-d") }} at {{ jobExecution.endTime|date("H:i:s")  }}.*/
/* */
/* Results:*/
/* {% for stepExecution in jobExecution.stepExecutions %}*/
/*   - {{ stepExecution.stepName|trans }} [{{ stepExecution.status }}]*/
/* {% endfor %}*/
/* */
/* --*/
/* Akeneo Batch*/
/* */
