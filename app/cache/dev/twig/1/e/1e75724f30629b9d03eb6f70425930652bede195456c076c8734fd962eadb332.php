<?php

/* OroUIBundle:Default:formElements.html.twig */
class __TwigTemplate_024438ca0a76908eb960440ccd1949f6fdf7dce891fe26e008b2a08f9b5e006a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:formElements.html.twig", 1);
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
    <form action=\"#\">
    <fieldset>
        <legend>legend</legend>
        <div class=\"control-group\">
            <div class=\"clearfix\"><input type=\"text\" class=\"input\" placeholder=\"Text\" /></div>
            <div class=\"clearfix\"><input type=\"text\" class=\"input uneditable-input\" placeholder=\"uneditable-input\" /></div>
            <div class=\"clearfix\"><input class=\"input\" id=\"disabledInput\" type=\"text\" placeholder=\"Disabled input here...\" disabled></div>
            <div class=\"clearfix\"><input type=\"password\" class=\"input\" placeholder=\"Password\" /></div>
            <div class=\"clearfix\">
                <div class=\"input-prepend\">
                    <span class=\"add-on\">@</span>
                    <input class=\"span10\" id=\"prependedInput\" type=\"text\" placeholder=\"input-prepend\" />
                </div>
            </div>
            <div class=\"clearfix\">
                <div class=\"input-prepend input-append\">
                    <span class=\"add-on\">\$</span>
                    <input class=\"span8\" id=\"appendedPrependedInput\" type=\"text\" placeholder=\"Combined\" />
                    <span class=\"add-on\">.00</span>
                </div>
            </div>
            <div class=\"clearfix\">
                <div class=\"input-append\">
                    <input class=\"span10\" id=\"appendedInput\" type=\"text\" placeholder=\"input-append\">
                    <span class=\"add-on\">.00</span>
                </div>
            </div>
            <div class=\"clearfix\">
                <div class=\"input-append\">
                    <input class=\"span8\" id=\"appendedInputButtons\" type=\"text\">
                    <button class=\"btn\" type=\"button\">Search</button>
                    <button class=\"btn\" type=\"button\">Options</button>
                </div>
            </div>
            <div class=\"clearfix new-row\">
                <input class=\"input-mini\" type=\"text\" placeholder=\".input-mini\">
                <input class=\"input-small\" type=\"text\" placeholder=\".input-small\">
                <input class=\"input-medium\" type=\"text\" placeholder=\".input-medium\">
                <input class=\"input-large\" type=\"text\" placeholder=\".input-large\">
                <input class=\"input-xlarge\" type=\"text\" placeholder=\".input-xlarge\">
                <input class=\"input-xxlarge\" type=\"text\" placeholder=\".input-xxlarge\">
            </div>
            <div class=\"clearfix\">
                <input type=\"text\"><span class=\"help-block\">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
            <div class=\"clearfix\"><input type=\"text\"><span class=\"help-inline\">Inline help text</span></div>
            <div class=\"clearfix\">
                <div class=\"control-group warning\">
                    <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>
                    <div class=\"controls\">
                        <input type=\"text\" id=\"inputWarning\">
                        <span class=\"help-inline\">Something may have gone wrong</span>
                    </div>
                </div>
                <div class=\"control-group error\">
                    <label class=\"control-label\" for=\"inputError\">Input with error</label>
                    <div class=\"controls\">
                        <input type=\"text\" id=\"inputError\">
                        <span class=\"help-inline\">Please correct the error</span>
                    </div>
                </div>
                <div class=\"control-group success\">
                    <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>
                    <div class=\"controls\">
                        <input type=\"text\" id=\"inputSuccess\">
                        <span class=\"help-inline\">Woohoo!</span>
                    </div>
                </div>
            </div>
            <hr />
            <div class=\"controls controls-row\">
                <input class=\"span4\" type=\"text\" placeholder=\".span4\">
                <input class=\"span1\" type=\"text\" placeholder=\".span1\">
            </div>
            <div class=\"controls controls-row\">
                <input class=\"span3\" type=\"text\" placeholder=\".span3\">
                <input class=\"span2\" type=\"text\" placeholder=\".span2\">
            </div>
            <div class=\"controls controls-row\">
                <input class=\"span1\" type=\"text\" placeholder=\".span1\">
                <input class=\"span4\" type=\"text\" placeholder=\".span4\">
            </div>

            <hr />
            <div class=\"clearfix\">
                <div class=\"input-append\">
                    <input class=\"span10\" id=\"appendedDropdownButton\" type=\"text\">
                    <div class=\"btn-group\">
                        <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                            Action
                            <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\">
                            ...
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\">
                <label class=\"checkbox inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox1\" value=\"option1\" /> 1
                </label>
                <label class=\"checkbox inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox2\" value=\"option2\" /> 2
                </label>
                <label class=\"checkbox inline\">
                    <input type=\"checkbox\" id=\"inlineCheckbox3\" value=\"option3\" /> 3
                </label>
            </div>
            <div class=\"clearfix\">
                <label class=\"radio\">
                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked />
                    Option one is this and that—be sure to include why it's great
                </label>
                <label class=\"radio\">
                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\" />
                    Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class=\"clearfix\"><textarea rows=\"3\"></textarea></div>
            <div class=\"clearfix\">
                <select>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <div class=\"clearfix\">
                </div>
                <select multiple=\"multiple\">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class=\"clearfix\"></div>
            <div class=\"clearfix\"></div>
        </div>
    </fieldset>
    <fieldset>
        <table class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Labels</th>
                <th>Markup</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class=\"label\">Default</span>
                </td>
                <td>
                    <code>&lt;span class=\"label\"&gt;Default&lt;/span&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"label label-success\">Success</span>
                </td>
                <td>
                    <code>&lt;span class=\"label label-success\"&gt;Success&lt;/span&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"label label-warning\">Warning</span>
                </td>
                <td>
                    <code>&lt;span class=\"label label-warning\"&gt;Warning&lt;/span&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"label label-important\">Important</span>
                </td>
                <td>
                    <code>&lt;span class=\"label label-important\"&gt;Important&lt;/span&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"label label-info\">Info</span>
                </td>
                <td>
                    <code>&lt;span class=\"label label-info\"&gt;Info&lt;/span&gt;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"label label-inverse\">Inverse</span>
                </td>
                <td>
                    <code>&lt;span class=\"label label-inverse\"&gt;Inverse&lt;/span&gt;</code>
                </td>
            </tr>
            </tbody>
        </table>
    </fieldset>
    <fieldset>
        <table class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Variable</th>
                <th>default</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <span class=\"\">@inputBackground</span>
                </td>
                <td>
                    <code>@white;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@inputBorder</span>
                </td>
                <td>
                    <code>#ccc;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@inputBorderRadius</span>
                </td>
                <td>
                    <code>@baseBorderRadius</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@inputDisabledBackground</span>
                </td>
                <td>
                    <code>@grayLighter</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@inputBackground:</span>
                </td>
                <td>
                    <code>@white;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@formActionsBackground</span>
                </td>
                <td>
                    <code>#f5f5f5;</code>
                </td>
            </tr>
            <tr>
                <td>
                    <span class=\"\">@inputHeight</span>
                </td>
                <td>
                    <code>@baseLineHeight + 10px; // base line-height + 8px vertical padding + 2px top/bottom border</code>
                </td>
            </tr>
            </tbody>
        </table>
    </fieldset>
    </form>
    </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:formElements.html.twig";
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
/*     <div class="row-fluid one-column">*/
/*     <div class="container-fluid">*/
/*     <form action="#">*/
/*     <fieldset>*/
/*         <legend>legend</legend>*/
/*         <div class="control-group">*/
/*             <div class="clearfix"><input type="text" class="input" placeholder="Text" /></div>*/
/*             <div class="clearfix"><input type="text" class="input uneditable-input" placeholder="uneditable-input" /></div>*/
/*             <div class="clearfix"><input class="input" id="disabledInput" type="text" placeholder="Disabled input here..." disabled></div>*/
/*             <div class="clearfix"><input type="password" class="input" placeholder="Password" /></div>*/
/*             <div class="clearfix">*/
/*                 <div class="input-prepend">*/
/*                     <span class="add-on">@</span>*/
/*                     <input class="span10" id="prependedInput" type="text" placeholder="input-prepend" />*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <div class="input-prepend input-append">*/
/*                     <span class="add-on">$</span>*/
/*                     <input class="span8" id="appendedPrependedInput" type="text" placeholder="Combined" />*/
/*                     <span class="add-on">.00</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <div class="input-append">*/
/*                     <input class="span10" id="appendedInput" type="text" placeholder="input-append">*/
/*                     <span class="add-on">.00</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <div class="input-append">*/
/*                     <input class="span8" id="appendedInputButtons" type="text">*/
/*                     <button class="btn" type="button">Search</button>*/
/*                     <button class="btn" type="button">Options</button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix new-row">*/
/*                 <input class="input-mini" type="text" placeholder=".input-mini">*/
/*                 <input class="input-small" type="text" placeholder=".input-small">*/
/*                 <input class="input-medium" type="text" placeholder=".input-medium">*/
/*                 <input class="input-large" type="text" placeholder=".input-large">*/
/*                 <input class="input-xlarge" type="text" placeholder=".input-xlarge">*/
/*                 <input class="input-xxlarge" type="text" placeholder=".input-xxlarge">*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <input type="text"><span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>*/
/*             </div>*/
/*             <div class="clearfix"><input type="text"><span class="help-inline">Inline help text</span></div>*/
/*             <div class="clearfix">*/
/*                 <div class="control-group warning">*/
/*                     <label class="control-label" for="inputWarning">Input with warning</label>*/
/*                     <div class="controls">*/
/*                         <input type="text" id="inputWarning">*/
/*                         <span class="help-inline">Something may have gone wrong</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="control-group error">*/
/*                     <label class="control-label" for="inputError">Input with error</label>*/
/*                     <div class="controls">*/
/*                         <input type="text" id="inputError">*/
/*                         <span class="help-inline">Please correct the error</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="control-group success">*/
/*                     <label class="control-label" for="inputSuccess">Input with success</label>*/
/*                     <div class="controls">*/
/*                         <input type="text" id="inputSuccess">*/
/*                         <span class="help-inline">Woohoo!</span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <hr />*/
/*             <div class="controls controls-row">*/
/*                 <input class="span4" type="text" placeholder=".span4">*/
/*                 <input class="span1" type="text" placeholder=".span1">*/
/*             </div>*/
/*             <div class="controls controls-row">*/
/*                 <input class="span3" type="text" placeholder=".span3">*/
/*                 <input class="span2" type="text" placeholder=".span2">*/
/*             </div>*/
/*             <div class="controls controls-row">*/
/*                 <input class="span1" type="text" placeholder=".span1">*/
/*                 <input class="span4" type="text" placeholder=".span4">*/
/*             </div>*/
/* */
/*             <hr />*/
/*             <div class="clearfix">*/
/*                 <div class="input-append">*/
/*                     <input class="span10" id="appendedDropdownButton" type="text">*/
/*                     <div class="btn-group">*/
/*                         <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*                             Action*/
/*                             <span class="caret"></span>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu">*/
/*                             ...*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <label class="checkbox inline">*/
/*                     <input type="checkbox" id="inlineCheckbox1" value="option1" /> 1*/
/*                 </label>*/
/*                 <label class="checkbox inline">*/
/*                     <input type="checkbox" id="inlineCheckbox2" value="option2" /> 2*/
/*                 </label>*/
/*                 <label class="checkbox inline">*/
/*                     <input type="checkbox" id="inlineCheckbox3" value="option3" /> 3*/
/*                 </label>*/
/*             </div>*/
/*             <div class="clearfix">*/
/*                 <label class="radio">*/
/*                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />*/
/*                     Option one is this and that—be sure to include why it's great*/
/*                 </label>*/
/*                 <label class="radio">*/
/*                     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />*/
/*                     Option two can be something else and selecting it will deselect option one*/
/*                 </label>*/
/*             </div>*/
/*             <div class="clearfix"><textarea rows="3"></textarea></div>*/
/*             <div class="clearfix">*/
/*                 <select>*/
/*                     <option>1</option>*/
/*                     <option>2</option>*/
/*                     <option>3</option>*/
/*                     <option>4</option>*/
/*                     <option>5</option>*/
/*                 </select>*/
/*                 <div class="clearfix">*/
/*                 </div>*/
/*                 <select multiple="multiple">*/
/*                     <option>1</option>*/
/*                     <option>2</option>*/
/*                     <option>3</option>*/
/*                     <option>4</option>*/
/*                     <option>5</option>*/
/*                 </select>*/
/*             </div>*/
/* */
/*             <div class="clearfix"></div>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/*     </fieldset>*/
/*     <fieldset>*/
/*         <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Labels</th>*/
/*                 <th>Markup</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label">Default</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label"&gt;Default&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label label-success">Success</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label label-success"&gt;Success&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label label-warning">Warning</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label label-warning"&gt;Warning&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label label-important">Important</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label label-important"&gt;Important&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label label-info">Info</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label label-info"&gt;Info&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="label label-inverse">Inverse</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>&lt;span class="label label-inverse"&gt;Inverse&lt;/span&gt;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </fieldset>*/
/*     <fieldset>*/
/*         <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Variable</th>*/
/*                 <th>default</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputBackground</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>@white;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputBorder</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>#ccc;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputBorderRadius</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>@baseBorderRadius</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputDisabledBackground</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>@grayLighter</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputBackground:</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>@white;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@formActionsBackground</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>#f5f5f5;</code>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     <span class="">@inputHeight</span>*/
/*                 </td>*/
/*                 <td>*/
/*                     <code>@baseLineHeight + 10px; // base line-height + 8px vertical padding + 2px top/bottom border</code>*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </fieldset>*/
/*     </form>*/
/*     </div>*/
/*     </div>*/
/*     </div>*/
/* {% endblock content %}*/
