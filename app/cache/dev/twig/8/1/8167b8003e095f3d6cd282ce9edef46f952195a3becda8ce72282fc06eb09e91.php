<?php

/* PimImportExportBundle:JobProfile:_show_headers.html.twig */
class __TwigTemplate_cb1f8e65ce7bc708d476b1fc30f960ccb866b724dcbece2eed5b77fae2d27d2d extends Twig_Template
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
        $context["title"] = ((((($this->env->getExtension('translator')->trans(((isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")) . ".title")) . " - ") . $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "label", array())) . " [") . $this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "code", array())) . "]");
        // line 2
        echo "
";
        // line 3
        ob_start();
        // line 4
        echo "    <ul class=\"inline\">
        <li>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Job"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "job", array()), "name", array())), "html", null, true);
        echo "</li>
        <li>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Connector"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "connector", array())), "html", null, true);
        echo "</li>
    </ul>
";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        ob_start();
        // line 11
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => (isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute"))), "method"), "html", null, true);
        echo "
    ";
        // line 12
        if (($this->getAttribute((isset($context["jobInstance"]) ? $context["jobInstance"] : $this->getContext($context, "jobInstance")), "status", array()) != twig_constant("Akeneo\\Bundle\\BatchBundle\\Entity\\JobInstance::STATUS_IN_PROGRESS"))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "Edit", 1 => (isset($context["editRoute"]) ? $context["editRoute"] : $this->getContext($context, "editRoute")), 2 => array("icon" => "edit")), "method"), "html", null, true);
            echo "
    ";
        }
        // line 15
        echo "    ";
        if (((isset($context["uploadAllowed"]) ? $context["uploadAllowed"] : $this->getContext($context, "uploadAllowed")) && (twig_length_filter($this->env, (isset($context["uploadViolations"]) ? $context["uploadViolations"] : $this->getContext($context, "uploadViolations"))) == 0))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => ("Upload and " . (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), 1 => null, 2 => array("icon" => "upload-alt", "class" => "btn-primary", "attr" => array("data-form-toggle" => "pim_importexport_import_upload"))), "method"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["violations"]) ? $context["violations"] : $this->getContext($context, "violations"))) == 0)) {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) . " now"), 1 => (isset($context["launchRoute"]) ? $context["launchRoute"] : $this->getContext($context, "launchRoute")), 2 => array("icon" => "cogs", "class" => "btn-primary")), "method"), "html", null, true);
            echo "
    ";
        }
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => null, 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left"))), "method"), "html", null, true);
        echo "

";
        // line 25
        if ((((array_key_exists("uploadForm", $context) &&  !twig_test_empty((isset($context["uploadForm"]) ? $context["uploadForm"] : $this->getContext($context, "uploadForm")))) && (isset($context["uploadAllowed"]) ? $context["uploadAllowed"] : $this->getContext($context, "uploadAllowed"))) && (twig_length_filter($this->env, (isset($context["uploadViolations"]) ? $context["uploadViolations"] : $this->getContext($context, "uploadViolations"))) == 0))) {
            // line 26
            echo "    ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["uploadForm"]) ? $context["uploadForm"] : $this->getContext($context, "uploadForm")), 'form_start', array("id" => "pim_importexport_import_upload", "action" =>             // line 28
(isset($context["launchUploadRoute"]) ? $context["launchUploadRoute"] : $this->getContext($context, "launchUploadRoute")), "attr" => array("class" => "form-upload hide")));
            // line 32
            echo "
        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "form_errors", array(0 => (isset($context["uploadForm"]) ? $context["uploadForm"] : $this->getContext($context, "uploadForm"))), "method"), "html", null, true);
            echo "
        <div class=\"row-fluid\">
            ";
            // line 35
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["uploadForm"]) ? $context["uploadForm"] : $this->getContext($context, "uploadForm")), "file", array()), 'row');
            echo "
            ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "submitBtn", array(0 => (("Upload and " . (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))) . " now")), "method"), "html", null, true);
            echo "
        </div>
    ";
            // line 38
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["uploadForm"]) ? $context["uploadForm"] : $this->getContext($context, "uploadForm")), 'form_end');
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobProfile:_show_headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  106 => 36,  102 => 35,  97 => 33,  94 => 32,  92 => 28,  90 => 26,  88 => 25,  83 => 23,  80 => 22,  73 => 19,  70 => 18,  64 => 16,  61 => 15,  55 => 13,  53 => 12,  48 => 11,  46 => 10,  43 => 9,  35 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set title = (entityName ~ '.title')|trans ~ ' - ' ~ jobInstance.label ~ ' [' ~ jobInstance.code ~ ']'  %}*/
/* */
/* {% set left %}*/
/*     <ul class="inline">*/
/*         <li>{{ 'Job'|trans }}: {{ jobInstance.job.name|trans }}</li>*/
/*         <li>{{ 'Connector'|trans }}: {{ jobInstance.connector|trans }}</li>*/
/*     </ul>*/
/* {% endset %}*/
/* */
/* {% set buttons %}*/
/*     {{ elements.backLink(indexRoute) }}*/
/*     {% if jobInstance.status != constant('Akeneo\\Bundle\\BatchBundle\\Entity\\JobInstance::STATUS_IN_PROGRESS') %}*/
/*         {{ elements.link('Edit', editRoute, { icon: 'edit' }) }}*/
/*     {% endif %}*/
/*     {% if uploadAllowed and uploadViolations|length == 0 %}*/
/*         {{ elements.link('Upload and '~action, null, {icon: 'upload-alt', class: 'btn-primary', attr: { 'data-form-toggle': 'pim_importexport_import_upload'}}) }}*/
/*     {% endif %}*/
/*     {% if violations|length == 0 %}*/
/*         {{ elements.link(action~' now', launchRoute, {icon: 'cogs', class: 'btn-primary'}) }}*/
/*     {% endif %}*/
/* {% endset %}*/
/* */
/* {{ elements.page_header(title, buttons, null, left) }}*/
/* */
/* {% if uploadForm is defined and uploadForm is not empty and uploadAllowed and uploadViolations|length == 0 %}*/
/*     {{ form_start(uploadForm, {*/
/*         'id': 'pim_importexport_import_upload',*/
/*         'action': launchUploadRoute,*/
/*         'attr': {*/
/*             'class': 'form-upload hide'*/
/*         }*/
/*     }) }}*/
/*         {{ elements.form_errors(uploadForm) }}*/
/*         <div class="row-fluid">*/
/*             {{ form_row(uploadForm.file) }}*/
/*             {{ elements.submitBtn('Upload and '~action~' now') }}*/
/*         </div>*/
/*     {{ form_end(uploadForm) }}*/
/* {% endif %}*/
/* */
