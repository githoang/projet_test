<?php

/* OroUIBundle:Default:formHorizontal.html.twig */
class __TwigTemplate_fd0c234905e9006588ea9e157c083f140b5e59795afdf9e5ae3ec81b4d5e1817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:formHorizontal.html.twig", 1);
        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"layout-content\">
    <div class=\"clearfix\"><div class=\"navbar application-menu\">
            <div class=\"cleearfix\">
                <div class=\"container\">
                    <div class=\" navbar-responsive-collapse\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"home\"><a href=\"#myhome\"><span>Home</span></a></li>
                            <li><a href=\"#mycrm\">My CRM</a></li>
                            <li><a href=\"#mypim\">My PIM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div></div>
    <div class=\"clearfix application-menu\">
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"myhome\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mycrm\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mypim\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard pim</a>
                    </li>
                    <li><a href=\"#\">Leads pim</a></li>
                    <li><a href=\"#\">Customers pim</a></li>
                    <li><a href=\"#\">Accounts pim</a></li>
                    <li><a href=\"#\">Forecasts pim</a></li>
                    <li><a href=\"#\">Reports pim</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        require(['jquery', 'jquery-ui', 'bootstrap'],
        function(\$) {
            \$(function () {
                \$('#myTab a:last').tab('show');
                \$('#myTab a').click(function (e) {
                    e.preventDefault();
                    \$(this).tab('show');
                });
                \$('a.popup-me').popover();
            });
        });
    </script>

    ";
        // line 72
        echo "        <div class=\"responsive-section\">
            <h4 class=\"scrollspy-title\" id=\"scroll-main\">Overview</h4>
            <div class=\"row-fluid row-fluid-divider\">
                <fieldset class=\"form-horizontal span6\">
                    <h5 class=\"user-fiedset\"><span>Basic Information</span></h5>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_enabled\" class=\"control-label\">Enabled</label>
                        <div class=\"controls validation-error\">
                            <select name=\"oro_user_user_form[enabled]\" id=\"oro_user_user_form_enabled\" class=\"error\">
                                <option selected=\"selected\" value=\"1\">Active</option>
                                <option value=\"0\">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_username\" class=\"control-label required\"><em>*</em>Username</label>
                        <div class=\"controls validation-error\">
                            <input class=\"error\" type=\"text\" value=\"micky.figueroa_36a4c\" required=\"required\" name=\"oro_user_user_form[username]\" id=\"oro_user_user_form_username\" />
                            <span class=\"validation-faled\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("should have min 3 symbols"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_firstName\" class=\"control-label required\"><em>*</em>First name</label>
                        <div class=\"controls\">
                            <input type=\"text\" value=\"Micky\" required=\"required\" name=\"oro_user_user_form[firstName]\" id=\"oro_user_user_form_firstName\" />
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_lastName\" class=\"control-label required\"><em>*</em>Last name</label>
                        <div class=\"controls\">
                            <input type=\"text\" value=\"Figueroa\" required=\"required\" name=\"oro_user_user_form[lastName]\" id=\"oro_user_user_form_lastName\" />
                        </div>
                    </div>
                    <div class=\"control-group datepicker \">
                        <label for=\"oro_user_user_form_birthday\" class=\"control-label\">Date of birth</label>
                        <div class=\"controls validation-error\">
                            <input type=\"text\" value=\"11/16/56\" data-dateformat=\"m/d/y\" placeholder=\"m/d/y\" class=\"datepicker hasdatepicker error\" name=\"oro_user_user_form[birthday]\" id=\"oro_user_user_form_birthday\" />
                            <span class=\"validation-faled\">";
        // line 109
        echo $this->env->getExtension('translator')->trans("some msgs span two lines <br/> use mm/dd/yy format");
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Avatar</label>
                        <div class=\"controls\">
                             <input type=\"file\" name=\"oro_user_user_form[imageFile]\" id=\"oro_user_user_form_imageFile\" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class=\"form-horizontal span6\">
                    <h5 class=\"user-fiedset\"><span>Contact Information</span></h5>
                    <div class=\"control-group validation-error\">
                        <label for=\"oro_user_user_form_email\" class=\"control-label required\"><em>*</em>E-mail</label>
                        <div class=\"controls\">
                            <input type=\"email\" value=\"micky.figueroa_36a5a@example.com\" required=\"required\" name=\"oro_user_user_form[email]\" id=\"oro_user_user_form_email\" class=\"error\" />
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">Additional emails:</label>
                        <div class=\"controls\">
                            <div class=\"row-oro\">
                                <div data-prototype=\"&lt;div data-content=&quot;tag__name__&quot;&gt; &lt;div class=&quot;row-oro oro-multiselect-holder&quot;&gt;
                &lt;input type=&quot;email&quot; id=&quot;oro_user_user_form_emails_tag__name___email&quot; name=&quot;oro_user_user_form[emails][tag__name__][email]&quot; /&gt;
                &lt;select class=&quot;oro-multiselect&quot;&gt;
                                &lt;option&gt;Work&lt;/option&gt;
                                &lt;option&gt;Home&lt;/option&gt;
                                &lt;option&gt;Cell&lt;/option&gt;
                                &lt;/select&gt;
            &lt;button class=&quot;removeRow btn-action btn-link&quot; type=&quot;button&quot; data-related=&quot;tag__name__&quot;&gt;×&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
\" class=\"collection-fields-list\">
                                    <div>
                                        <div data-content=\"tag0\">
                                            <div class=\"row-oro oro-multiselect-holder validation-error\">
                                                <input type=\"email\" name=\"oro_user_user_form[emails][tag0][email]\" id=\"oro_user_user_form_emails_tag0_email\" class=\"error\" />
                                                <select class=\"oro-multiselect\">
                                                    <option>Work</option>
                                                    <option>Home</option>
                                                    <option>Cell</option>
                                                </select>
                                                <button data-related=\"tag0\" type=\"button\" class=\"removeRow btn-action btn-link\">×</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"javascript: void(0);\" class=\"btn add-list-item\">Add another email</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Avatar</label>
                        <div class=\"controls validation-error\">
                            <textarea cols=\"30\" rows=\"10\" class=\"error\" placeholder=\"Enter text\"></textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">test</label>
                        <div class=\"controls validation-error\">
                            <div class=\"error validate-group\">
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" value=\"\">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" value=\"\">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">test</label>
                        <div class=\"controls validation-error\">
                            <label class=\"checkbox error\">
                                <input type=\"checkbox\" value=\"\">
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Radio</label>
                        <div class=\"controls validation-error\">
                            <div class=\"error validate-group\">
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    ";
        // line 209
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:formHorizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 209,  143 => 109,  121 => 90,  101 => 72,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block content %}*/
/*     <div class="layout-content">*/
/*     <div class="clearfix"><div class="navbar application-menu">*/
/*             <div class="cleearfix">*/
/*                 <div class="container">*/
/*                     <div class=" navbar-responsive-collapse">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class="home"><a href="#myhome"><span>Home</span></a></li>*/
/*                             <li><a href="#mycrm">My CRM</a></li>*/
/*                             <li><a href="#mypim">My PIM</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div></div>*/
/*     <div class="clearfix application-menu">*/
/*         <div class="tab-content">*/
/*             <div class="tab-pane" id="myhome">*/
/*                 <ul class="nav nav-pills">*/
/*                     <li class="active">*/
/*                         <a href="#">Dashboard</a>*/
/*                     </li>*/
/*                     <li><a href="#">Leads</a></li>*/
/*                     <li><a href="#">Customers</a></li>*/
/*                     <li><a href="#">Accounts</a></li>*/
/*                     <li><a href="#">Forecasts</a></li>*/
/*                     <li><a href="#">Reports</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="tab-pane" id="mycrm">*/
/*                 <ul class="nav nav-pills">*/
/*                     <li class="active">*/
/*                         <a href="#">Dashboard</a>*/
/*                     </li>*/
/*                     <li><a href="#">Leads</a></li>*/
/*                     <li><a href="#">Customers</a></li>*/
/*                     <li><a href="#">Accounts</a></li>*/
/*                     <li><a href="#">Forecasts</a></li>*/
/*                     <li><a href="#">Reports</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="tab-pane" id="mypim">*/
/*                 <ul class="nav nav-pills">*/
/*                     <li class="active">*/
/*                         <a href="#">Dashboard pim</a>*/
/*                     </li>*/
/*                     <li><a href="#">Leads pim</a></li>*/
/*                     <li><a href="#">Customers pim</a></li>*/
/*                     <li><a href="#">Accounts pim</a></li>*/
/*                     <li><a href="#">Forecasts pim</a></li>*/
/*                     <li><a href="#">Reports pim</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <script>*/
/*         require(['jquery', 'jquery-ui', 'bootstrap'],*/
/*         function($) {*/
/*             $(function () {*/
/*                 $('#myTab a:last').tab('show');*/
/*                 $('#myTab a').click(function (e) {*/
/*                     e.preventDefault();*/
/*                     $(this).tab('show');*/
/*                 });*/
/*                 $('a.popup-me').popover();*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/*     {# horizontal example #}*/
/*         <div class="responsive-section">*/
/*             <h4 class="scrollspy-title" id="scroll-main">Overview</h4>*/
/*             <div class="row-fluid row-fluid-divider">*/
/*                 <fieldset class="form-horizontal span6">*/
/*                     <h5 class="user-fiedset"><span>Basic Information</span></h5>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_enabled" class="control-label">Enabled</label>*/
/*                         <div class="controls validation-error">*/
/*                             <select name="oro_user_user_form[enabled]" id="oro_user_user_form_enabled" class="error">*/
/*                                 <option selected="selected" value="1">Active</option>*/
/*                                 <option value="0">Inactive</option>*/
/*                             </select>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_username" class="control-label required"><em>*</em>Username</label>*/
/*                         <div class="controls validation-error">*/
/*                             <input class="error" type="text" value="micky.figueroa_36a4c" required="required" name="oro_user_user_form[username]" id="oro_user_user_form_username" />*/
/*                             <span class="validation-faled">{{ 'should have min 3 symbols'|trans }}</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_firstName" class="control-label required"><em>*</em>First name</label>*/
/*                         <div class="controls">*/
/*                             <input type="text" value="Micky" required="required" name="oro_user_user_form[firstName]" id="oro_user_user_form_firstName" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_lastName" class="control-label required"><em>*</em>Last name</label>*/
/*                         <div class="controls">*/
/*                             <input type="text" value="Figueroa" required="required" name="oro_user_user_form[lastName]" id="oro_user_user_form_lastName" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group datepicker ">*/
/*                         <label for="oro_user_user_form_birthday" class="control-label">Date of birth</label>*/
/*                         <div class="controls validation-error">*/
/*                             <input type="text" value="11/16/56" data-dateformat="m/d/y" placeholder="m/d/y" class="datepicker hasdatepicker error" name="oro_user_user_form[birthday]" id="oro_user_user_form_birthday" />*/
/*                             <span class="validation-faled">{{ 'some msgs span two lines <br/> use mm/dd/yy format'|trans|raw }}</span>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_imageFile" class="control-label">Avatar</label>*/
/*                         <div class="controls">*/
/*                              <input type="file" name="oro_user_user_form[imageFile]" id="oro_user_user_form_imageFile" />*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/*                 <fieldset class="form-horizontal span6">*/
/*                     <h5 class="user-fiedset"><span>Contact Information</span></h5>*/
/*                     <div class="control-group validation-error">*/
/*                         <label for="oro_user_user_form_email" class="control-label required"><em>*</em>E-mail</label>*/
/*                         <div class="controls">*/
/*                             <input type="email" value="micky.figueroa_36a5a@example.com" required="required" name="oro_user_user_form[email]" id="oro_user_user_form_email" class="error" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label class="control-label">Additional emails:</label>*/
/*                         <div class="controls">*/
/*                             <div class="row-oro">*/
/*                                 <div data-prototype="&lt;div data-content=&quot;tag__name__&quot;&gt; &lt;div class=&quot;row-oro oro-multiselect-holder&quot;&gt;*/
/*                 &lt;input type=&quot;email&quot; id=&quot;oro_user_user_form_emails_tag__name___email&quot; name=&quot;oro_user_user_form[emails][tag__name__][email]&quot; /&gt;*/
/*                 &lt;select class=&quot;oro-multiselect&quot;&gt;*/
/*                                 &lt;option&gt;Work&lt;/option&gt;*/
/*                                 &lt;option&gt;Home&lt;/option&gt;*/
/*                                 &lt;option&gt;Cell&lt;/option&gt;*/
/*                                 &lt;/select&gt;*/
/*             &lt;button class=&quot;removeRow btn-action btn-link&quot; type=&quot;button&quot; data-related=&quot;tag__name__&quot;&gt;×&lt;/button&gt;*/
/*         &lt;/div&gt;*/
/*     &lt;/div&gt;*/
/* " class="collection-fields-list">*/
/*                                     <div>*/
/*                                         <div data-content="tag0">*/
/*                                             <div class="row-oro oro-multiselect-holder validation-error">*/
/*                                                 <input type="email" name="oro_user_user_form[emails][tag0][email]" id="oro_user_user_form_emails_tag0_email" class="error" />*/
/*                                                 <select class="oro-multiselect">*/
/*                                                     <option>Work</option>*/
/*                                                     <option>Home</option>*/
/*                                                     <option>Cell</option>*/
/*                                                 </select>*/
/*                                                 <button data-related="tag0" type="button" class="removeRow btn-action btn-link">×</button>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <a href="javascript: void(0);" class="btn add-list-item">Add another email</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_imageFile" class="control-label">Avatar</label>*/
/*                         <div class="controls validation-error">*/
/*                             <textarea cols="30" rows="10" class="error" placeholder="Enter text"></textarea>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_imageFile" class="control-label">test</label>*/
/*                         <div class="controls validation-error">*/
/*                             <div class="error validate-group">*/
/*                                 <label class="checkbox">*/
/*                                     <input type="checkbox" value="">*/
/*                                     Option one is this and that—be sure to include why it's great*/
/*                                 </label>*/
/*                                 <label class="checkbox">*/
/*                                     <input type="checkbox" value="">*/
/*                                     Option one is this and that—be sure to include why it's great*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_imageFile" class="control-label">test</label>*/
/*                         <div class="controls validation-error">*/
/*                             <label class="checkbox error">*/
/*                                 <input type="checkbox" value="">*/
/*                                 Option one is this and that—be sure to include why it's great*/
/*                             </label>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="control-group">*/
/*                         <label for="oro_user_user_form_imageFile" class="control-label">Radio</label>*/
/*                         <div class="controls validation-error">*/
/*                             <div class="error validate-group">*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>*/
/*                                     Option one is this and that—be sure to include why it's great*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">*/
/*                                     Option two can be something else and selecting it will deselect option one*/
/*                                 </label>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </div>*/
/*         </div>*/
/*     {# horizontal example end #}*/
/* */
/*     </div>*/
/* {% endblock content %}*/
/* */
