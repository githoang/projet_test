<?php

/* PimImportExportBundle:JobExecution:show.html.twig */
class __TwigTemplate_b8c8c3a8dcde52bedf23dd3a62770c68ea4e9ccb4dd524e2ab1bc2e5721d6904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PimEnrichBundle::layout.html.twig", "PimImportExportBundle:JobExecution:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'head_script' => array($this, 'block_head_script'),
            'job_execution_summary' => array($this, 'block_job_execution_summary'),
            'job_execution_status' => array($this, 'block_job_execution_status'),
            'job_execution_buttons' => array($this, 'block_job_execution_buttons'),
            'job_execution_log_button' => array($this, 'block_job_execution_log_button'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PimEnrichBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $context["title"] = ((((($this->env->getExtension('translator')->trans("execution details") . " - ") . $this->getAttribute($this->getAttribute((isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "jobInstance", array()), "label", array())) . " [") . $this->getAttribute($this->getAttribute(        // line 6
(isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "jobInstance", array()), "code", array())) . "]");
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "backLink", array(0 => (isset($context["indexRoute"]) ? $context["indexRoute"] : $this->getContext($context, "indexRoute"))), "method"), "html", null, true);
        echo "
        <span id=\"archives\"></span>
        <span id=\"log\"></span>
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "Show profile", 1 => $this->env->getExtension('routing')->getPath((isset($context["show_profile_route"]) ? $context["show_profile_route"] : $this->getContext($context, "show_profile_route")), array("id" => $this->getAttribute($this->getAttribute((isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "jobInstance", array()), "id", array())))), "method"), "html", null, true);
        echo "
    ";
        $context["buttons"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "
    ";
        // line 15
        ob_start();
        // line 16
        echo "        <ul class=\"inline\" id=\"status\">
           <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status"), "html", null, true);
        echo ": ...</li>
       </ul>
    ";
        $context["left"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "page_header", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")), 2 => "", 3 => (isset($context["left"]) ? $context["left"] : $this->getContext($context, "left"))), "method"), "html", null, true);
        echo "

    <div class=\"container-fluid grid-container\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/pimimportexport/images/loading.gif"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Loading ..."), "html", null, true);
        echo "\" class=\"transparent loading\" />
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "link", array(0 => "Refresh", 1 => $this->env->getExtension('routing')->getPath((isset($context["refresh_route"]) ? $context["refresh_route"] : $this->getContext($context, "refresh_route")), array("id" => $this->getAttribute((isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "id", array()))), 2 => array("icon" => "refresh", "class" => "transparent loading btn-mini")), "method"), "html", null, true);
        echo "
        <table class=\"table table-bordered groups\" id=\"job-execution\">
            <thead>
                <th>";
        // line 28
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Step")), "html", null, true);
        echo "</th>
                <th>";
        // line 29
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Status")), "html", null, true);
        echo "</th>
                <th>";
        // line 30
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Summary")), "html", null, true);
        echo "</th>
                <th>";
        // line 31
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("Start")), "html", null, true);
        echo "</th>
                <th>";
        // line 32
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('translator')->trans("End")), "html", null, true);
        echo "</th>
            </thead>
            <tbody>
                <tr>
                    <td colspan=\"5\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Collecting data about job execution..."), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>

";
    }

    // line 44
    public function block_head_script($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "

    <script type=\"text/template\" id=\"job-execution-summary\">
        ";
        // line 48
        $this->displayBlock('job_execution_summary', $context, $blocks);
        // line 124
        echo "    </script>

    <script type=\"text/template\" id=\"job-execution-status\">
        ";
        // line 127
        $this->displayBlock('job_execution_status', $context, $blocks);
        // line 130
        echo "    </script>

    <script type=\"text/template\" id=\"job-execution-buttons\">
        ";
        // line 133
        $this->displayBlock('job_execution_buttons', $context, $blocks);
        // line 165
        echo "    </script>

    <script type=\"text/template\" id=\"job-execution-log-button\">
        ";
        // line 168
        $this->displayBlock('job_execution_log_button', $context, $blocks);
        // line 176
        echo "    </script>

    <script type=\"text/javascript\">
        require(
            ['jquery', 'pim/job-execution-view'],
            function(\$, jobExecutionView){
                'use strict';

                \$(function () {
                    jobExecutionView.init({
                        loadingImageSelector:          'img.loading',
                        refreshButtonSelector:         'a.loading',
                        jobExecutionSelector:          '#job-execution tbody',
                        jobExecutionStatusSelector:    '#status',
                        jobExecutionButtonsSelector:   '.navbar-buttons #archives',
                        jobExecutionLogButtonSelector: '.navbar-buttons #log',

                        statusLabel:   '";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Status"), "html", null, true);
        echo "',
                        downloadLabel: '";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Download log"), "html", null, true);
        echo "',

                        path:              '";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["refresh_route"]) ? $context["refresh_route"] : $this->getContext($context, "refresh_route")), array("id" => $this->getAttribute((isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "id", array()), "_format" => "json")), "html", null, true);
        echo "',
                        executionId:       ";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["execution"]) ? $context["execution"] : $this->getContext($context, "execution")), "id", array()), "html", null, true);
        echo ",
                        downloadFileRoute: '";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["download_file_route"]) ? $context["download_file_route"] : $this->getContext($context, "download_file_route")), "html", null, true);
        echo "',
                        downloadLogRoute:  '";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["download_log_route"]) ? $context["download_log_route"] : $this->getContext($context, "download_log_route")), "html", null, true);
        echo "'
                    });
                });
            }
        );
    </script>
";
    }

    // line 48
    public function block_job_execution_summary($context, array $blocks = array())
    {
        // line 49
        echo "        <!-- Step execution information -->
        <% _.each(jobExecution.stepExecutions, function (stepExecution) { %>
            <tr>
                <td><%= stepExecution.label %></td>
                <td><%= stepExecution.status %></td>
                <td>
                    <table class=\"table-striped table-bordered table-hover\">
                        <% _.each(stepExecution.summary, function (value, key) { %>
                            <tr>
                                <td><%= key %></td>
                                <td><%= value %></td>
                            </tr>
                        <% }); %>
                    </table>
                </td>
                <td><%= stepExecution.startedAt %></td>
                <td><%= stepExecution.endedAt %></td>
            </tr>

            <!-- Step execution warnings -->
            <% _.each(stepExecution.warnings, function (warning) { %>
                <tr class=\"warning\">
                    <td colspan=\"5\">
                        <span class=\"title\"><%= warning.label.toUpperCase() %></span>&nbsp;
                        <ul>
                            <% _.each(warning.reason.split(\"\\n\"), function(warningItem) { %>
                                <% if (warningItem) { %>
                                    <li><%= warningItem %></li>
                                <% } %>
                            <% }) %>
                        </ul>
                        <a class=\"data\" href=\"#\"
                            data-display-label=\"<%= showLabel %>\"
                            data-hide-label=\"<%= hideLabel %>\">
                            <%= showLabel %>
                        </a>
                        <table class=\"hide table-striped table-bordered table-hover\">
                            <% _.each(warning.item, function (value, key) { %>
                                <tr>
                                    <td><%= key %></td>
                                    <td>
                                        <% if (typeof value === 'object') { %>
                                            <%= JSON.stringify(value) %>
                                        <% } else { %>
                                            <%= value %>
                                        <% } %>
                                    </td>
                                </tr>
                            <% }); %>
                        </table>
                    </td>
                </tr>
            <% }); %>

            <!-- Step execution failures -->
            <% _.each(stepExecution.failures, function (failure) { %>
                <tr class=\"error\">
                    <td colspan=\"5\">
                        <span class=\"title\"><%= stepExecution.label.toUpperCase() %></span>&nbsp;
                        <%= failure %>
                    </td>
                </tr>
            <% }); %>
        <% }); %>

        <!-- Job execution failures -->
        <% _.each(jobExecution.failures, function (failure) { %>
            <tr class=\"error\">
                <td colspan=\"5\">
                    <span class=\"title\"><%= jobExecution.label.toUpperCase() %></span>&nbsp;
                    <%= failure %>
                </td>
            </tr>
        <% }); %>
        ";
    }

    // line 127
    public function block_job_execution_status($context, array $blocks = array())
    {
        // line 128
        echo "        <li><%= statusLabel %>: <%= jobExecution.status %></li>
        ";
    }

    // line 133
    public function block_job_execution_buttons($context, array $blocks = array())
    {
        // line 134
        echo "        <% _.each(archives, function (archive, archiver) { %>
            <% if (_.size(archive.files) === 1) { %>

                <% _.each(archive.files, function (file, key) { %>
                     <a class=\"btn no-hash icons-holder-text\" title=\"<%= archive.label %>\"
                     href=\"<%= Routing.generate(downloadFileRoute, {id: executionId, archiver: archiver, key: key }) %>\">
                         <i class=\"icon-download\"></i> <%= archive.label %>
                     </a>
                <% }); %>

            <% } else { %>

                <div class=\"btn-group\">
                    <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"icon-download\"></i> <%= archive.label %>
                        <span class=\"caret\"></span>
                    </a>
                    <ul class=\"dropdown-menu\">
                        <% _.each(archive.files, function (file, key) { %>
                        <li>
                            <a href=\"<%= Routing.generate(downloadFileRoute, {id: executionId, archiver: archiver, key: key }) %>\">
                            <%= key %>
                            </a>
                        </li>
                        <% }); %>
                    </ul>
                </div>

            <% } %>
        <% }); %>
        ";
    }

    // line 168
    public function block_job_execution_log_button($context, array $blocks = array())
    {
        // line 169
        echo "        <% if (hasLog) { %>
            <a class=\"btn no-hash icons-holder-text\" title=\"<%= downloadLabel %>\" href=\"<%= Routing.generate(downloadLogRoute, {id: executionId}) %>\">
                <i class=\"icon-download\"></i>
                <%= downloadLabel %>
            </a>
        <% } %>
        ";
    }

    public function getTemplateName()
    {
        return "PimImportExportBundle:JobExecution:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 169,  338 => 168,  304 => 134,  301 => 133,  296 => 128,  293 => 127,  215 => 49,  212 => 48,  201 => 199,  197 => 198,  193 => 197,  189 => 196,  184 => 194,  180 => 193,  161 => 176,  159 => 168,  154 => 165,  152 => 133,  147 => 130,  145 => 127,  140 => 124,  138 => 48,  131 => 45,  128 => 44,  117 => 36,  110 => 32,  106 => 31,  102 => 30,  98 => 29,  94 => 28,  88 => 25,  82 => 24,  76 => 21,  73 => 20,  67 => 17,  64 => 16,  62 => 15,  59 => 14,  54 => 12,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  39 => 5,  36 => 4,  33 => 3,  11 => 1,);
    }
}
/* {% extends 'PimEnrichBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/*     {% set title = "execution details"|trans ~ ' - ' ~ execution.jobInstance.label ~ ' [' ~*/
/*                    execution.jobInstance.code ~ ']' %}*/
/* */
/*     {% set buttons %}*/
/*         {{ elements.backLink(indexRoute) }}*/
/*         <span id="archives"></span>*/
/*         <span id="log"></span>*/
/*         {{ elements.link('Show profile', path(show_profile_route, { 'id': execution.jobInstance.id })) }}*/
/*     {% endset %}*/
/* */
/*     {% set left %}*/
/*         <ul class="inline" id="status">*/
/*            <li>{{ 'Status'|trans }}: ...</li>*/
/*        </ul>*/
/*     {% endset %}*/
/* */
/*     {{ elements.page_header(title, buttons, '', left) }}*/
/* */
/*     <div class="container-fluid grid-container">*/
/*         <img src="{{ asset('bundles/pimimportexport/images/loading.gif') }}" alt="{{ 'Loading ...'|trans }}" class="transparent loading" />*/
/*         {{ elements.link('Refresh', path(refresh_route, { 'id': execution.id }), { icon: 'refresh', class: 'transparent loading btn-mini' }) }}*/
/*         <table class="table table-bordered groups" id="job-execution">*/
/*             <thead>*/
/*                 <th>{{ 'Step' | trans | upper }}</th>*/
/*                 <th>{{ 'Status' | trans | upper }}</th>*/
/*                 <th>{{ 'Summary' | trans | upper }}</th>*/
/*                 <th>{{ 'Start' | trans | upper }}</th>*/
/*                 <th>{{ 'End' | trans | upper }}</th>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td colspan="5">{{ 'Collecting data about job execution...'|trans }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block head_script %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/template" id="job-execution-summary">*/
/*         {% block job_execution_summary %}*/
/*         <!-- Step execution information -->*/
/*         <% _.each(jobExecution.stepExecutions, function (stepExecution) { %>*/
/*             <tr>*/
/*                 <td><%= stepExecution.label %></td>*/
/*                 <td><%= stepExecution.status %></td>*/
/*                 <td>*/
/*                     <table class="table-striped table-bordered table-hover">*/
/*                         <% _.each(stepExecution.summary, function (value, key) { %>*/
/*                             <tr>*/
/*                                 <td><%= key %></td>*/
/*                                 <td><%= value %></td>*/
/*                             </tr>*/
/*                         <% }); %>*/
/*                     </table>*/
/*                 </td>*/
/*                 <td><%= stepExecution.startedAt %></td>*/
/*                 <td><%= stepExecution.endedAt %></td>*/
/*             </tr>*/
/* */
/*             <!-- Step execution warnings -->*/
/*             <% _.each(stepExecution.warnings, function (warning) { %>*/
/*                 <tr class="warning">*/
/*                     <td colspan="5">*/
/*                         <span class="title"><%= warning.label.toUpperCase() %></span>&nbsp;*/
/*                         <ul>*/
/*                             <% _.each(warning.reason.split("\n"), function(warningItem) { %>*/
/*                                 <% if (warningItem) { %>*/
/*                                     <li><%= warningItem %></li>*/
/*                                 <% } %>*/
/*                             <% }) %>*/
/*                         </ul>*/
/*                         <a class="data" href="#"*/
/*                             data-display-label="<%= showLabel %>"*/
/*                             data-hide-label="<%= hideLabel %>">*/
/*                             <%= showLabel %>*/
/*                         </a>*/
/*                         <table class="hide table-striped table-bordered table-hover">*/
/*                             <% _.each(warning.item, function (value, key) { %>*/
/*                                 <tr>*/
/*                                     <td><%= key %></td>*/
/*                                     <td>*/
/*                                         <% if (typeof value === 'object') { %>*/
/*                                             <%= JSON.stringify(value) %>*/
/*                                         <% } else { %>*/
/*                                             <%= value %>*/
/*                                         <% } %>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             <% }); %>*/
/*                         </table>*/
/*                     </td>*/
/*                 </tr>*/
/*             <% }); %>*/
/* */
/*             <!-- Step execution failures -->*/
/*             <% _.each(stepExecution.failures, function (failure) { %>*/
/*                 <tr class="error">*/
/*                     <td colspan="5">*/
/*                         <span class="title"><%= stepExecution.label.toUpperCase() %></span>&nbsp;*/
/*                         <%= failure %>*/
/*                     </td>*/
/*                 </tr>*/
/*             <% }); %>*/
/*         <% }); %>*/
/* */
/*         <!-- Job execution failures -->*/
/*         <% _.each(jobExecution.failures, function (failure) { %>*/
/*             <tr class="error">*/
/*                 <td colspan="5">*/
/*                     <span class="title"><%= jobExecution.label.toUpperCase() %></span>&nbsp;*/
/*                     <%= failure %>*/
/*                 </td>*/
/*             </tr>*/
/*         <% }); %>*/
/*         {% endblock %}*/
/*     </script>*/
/* */
/*     <script type="text/template" id="job-execution-status">*/
/*         {% block job_execution_status %}*/
/*         <li><%= statusLabel %>: <%= jobExecution.status %></li>*/
/*         {% endblock %}*/
/*     </script>*/
/* */
/*     <script type="text/template" id="job-execution-buttons">*/
/*         {% block job_execution_buttons %}*/
/*         <% _.each(archives, function (archive, archiver) { %>*/
/*             <% if (_.size(archive.files) === 1) { %>*/
/* */
/*                 <% _.each(archive.files, function (file, key) { %>*/
/*                      <a class="btn no-hash icons-holder-text" title="<%= archive.label %>"*/
/*                      href="<%= Routing.generate(downloadFileRoute, {id: executionId, archiver: archiver, key: key }) %>">*/
/*                          <i class="icon-download"></i> <%= archive.label %>*/
/*                      </a>*/
/*                 <% }); %>*/
/* */
/*             <% } else { %>*/
/* */
/*                 <div class="btn-group">*/
/*                     <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">*/
/*                         <i class="icon-download"></i> <%= archive.label %>*/
/*                         <span class="caret"></span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <% _.each(archive.files, function (file, key) { %>*/
/*                         <li>*/
/*                             <a href="<%= Routing.generate(downloadFileRoute, {id: executionId, archiver: archiver, key: key }) %>">*/
/*                             <%= key %>*/
/*                             </a>*/
/*                         </li>*/
/*                         <% }); %>*/
/*                     </ul>*/
/*                 </div>*/
/* */
/*             <% } %>*/
/*         <% }); %>*/
/*         {% endblock %}*/
/*     </script>*/
/* */
/*     <script type="text/template" id="job-execution-log-button">*/
/*         {% block job_execution_log_button %}*/
/*         <% if (hasLog) { %>*/
/*             <a class="btn no-hash icons-holder-text" title="<%= downloadLabel %>" href="<%= Routing.generate(downloadLogRoute, {id: executionId}) %>">*/
/*                 <i class="icon-download"></i>*/
/*                 <%= downloadLabel %>*/
/*             </a>*/
/*         <% } %>*/
/*         {% endblock %}*/
/*     </script>*/
/* */
/*     <script type="text/javascript">*/
/*         require(*/
/*             ['jquery', 'pim/job-execution-view'],*/
/*             function($, jobExecutionView){*/
/*                 'use strict';*/
/* */
/*                 $(function () {*/
/*                     jobExecutionView.init({*/
/*                         loadingImageSelector:          'img.loading',*/
/*                         refreshButtonSelector:         'a.loading',*/
/*                         jobExecutionSelector:          '#job-execution tbody',*/
/*                         jobExecutionStatusSelector:    '#status',*/
/*                         jobExecutionButtonsSelector:   '.navbar-buttons #archives',*/
/*                         jobExecutionLogButtonSelector: '.navbar-buttons #log',*/
/* */
/*                         statusLabel:   '{{ 'Status'|trans }}',*/
/*                         downloadLabel: '{{ 'Download log'|trans }}',*/
/* */
/*                         path:              '{{ path(refresh_route, {id:  execution.id, _format:  'json'}) }}',*/
/*                         executionId:       {{ execution.id }},*/
/*                         downloadFileRoute: '{{ download_file_route }}',*/
/*                         downloadLogRoute:  '{{ download_log_route }}'*/
/*                     });*/
/*                 });*/
/*             }*/
/*         );*/
/*     </script>*/
/* {% endblock %}*/
/* */
