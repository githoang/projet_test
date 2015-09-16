<?php

/* OroUIBundle:Default:buttonsPage.html.twig */
class __TwigTemplate_889e01f508260a2f9d66fad2e10027d55ccc1d5667a088d619ae3c9cc6297d1a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:buttonsPage.html.twig", 1);
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
        echo "    <div class=\"row-fluid one-column\">
    <div class=\"span12 top-frame\">
    <!--Body content-->
    <div class=\"container-fluid\">
    <p>
        <button class=\"btn btn-large btn-primary\" type=\"button\">Large button</button>
        <button class=\"btn btn-large\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-primary\" type=\"button\">Default button</button>
        <button class=\"btn\" type=\"button\">Default button</button>
        <button class=\"btn btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-small btn-primary\" type=\"button\">Small button</button>
        <button class=\"btn btn-small\" type=\"button\">Small button</button>
        <button class=\"btn btn-small btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-mini btn-primary\" type=\"button\">Mini button</button>
        <button class=\"btn btn-mini\" type=\"button\">Mini button</button>
        <button class=\"btn btn-mini btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button type=\"button\" class=\"btn btn-large btn-primary disabled\" disabled=\"disabled\">Primary button</button>
        <button type=\"button\" class=\"btn btn-large\" disabled>Button</button>
        <a href=\"#\" class=\"btn btn-large btn-primary disabled\">Primary link</a>
        <a href=\"#\" class=\"btn btn-large disabled\">Link</a>
    </p>
    <hr />
    <div style=\"margin: 0;\" class=\"btn-toolbar\">
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">Action <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">Action <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-danger dropdown-toggle\">Danger <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\">Warning <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-success dropdown-toggle\">Success <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\">Info <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"form-row\">
            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    <button class=\"btn\">Action</button>
                    <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-primary\">Action</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-danger\">Danger</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-danger dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-warning\">Warning</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-success\">Success</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-success dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-info\">Info</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-inverse\">Inverse</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-inverse dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"btn-toolbar\">
            <div class=\"btn-group dropup\">
                <button class=\"btn\">Dropup</button>
                <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
            <div class=\"btn-group dropup\">
                <button class=\"btn primary\">Right dropup</button>
                <button data-toggle=\"dropdown\" class=\"btn primary dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu pull-right\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
        </div>
    </div>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <div class=\"form-row\">
            <div class=\"btn-group\">
                <button class=\"btn btn-warning \">Left</button>
                <button class=\"btn\">Middle</button>
                <button class=\"btn btn-danger\">Right</button>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"btn-group btn-group-vertical\">
                <button class=\"btn\" type=\"button\">one</button>
                <button class=\"btn btn-success\" type=\"button\">two</button>
                <button class=\"btn\" type=\"button\">three</button>
                <button class=\"btn btn-info \" type=\"button\">end</button>
            </div>
        </div>
        <div class=\"form-row\">
            <div style=\"margin: 0;\" class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    <button class=\"btn\">1</button>
                    <button class=\"btn\">2</button>
                    <button class=\"btn\">3</button>
                    <button class=\"btn\">4</button>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn\">5</button>
                    <button class=\"btn\">6</button>
                    <button class=\"btn\">7</button>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn\">8</button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
        <ul class=\"pager\">
            <li class=\"previous\"><a href=\"#\"><- Older</a></li>
            <li class=\"next\"><a href=\"#\">Newer -></a></li>
        </ul>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <div class=\"form-row\">
            <h2>Buttons <small>bootstrap-button.js</small></h2>
            <p>Add <code>data-loading-text=\"Loading...\"</code> to use a loading state on a button.</p>
            <button class=\"btn btn-primary\" data-loading-text=\"loading...\" id=\"fat-btn\" type=\"button\">Loading state</button>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"button\"</code> to activate toggling on a single button.</p>
            <button data-toggle=\"button\" class=\"btn btn-primary\" type=\"button\">Single Toggle</button>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"buttons-checkbox\"</code> for checkbox style toggling on btn-group.</p>
            <div data-toggle=\"buttons-checkbox\" class=\"btn-group\">
                <button class=\"btn btn-primary\" type=\"button\">Left</button>
                <button class=\"btn btn-primary\" type=\"button\">Middle</button>
                <button class=\"btn btn-primary\" type=\"button\">Right</button>
            </div>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"buttons-radio\"</code> for radio style toggling on btn-group.</p>
            <div data-toggle=\"buttons-radio\" class=\"btn-group\">
                <button class=\"btn btn-primary\" type=\"button\">Left</button>
                <button class=\"btn btn-primary active\" type=\"button\">Middle</button>
                <button class=\"btn btn-primary\" type=\"button\">Right</button>
            </div>
        </div>
    </div>
    <hr />
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
                <span class=\"\">@btnBackground</span>
            </td>
            <td>
                <code>@white;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnBackgroundHighlight</span>
            </td>
            <td>
                <code>darken(@white, 10%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnBorder</span>
            </td>
            <td>
                <code>#bbb;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnPrimaryBackground</span>
            </td>
            <td>
                <code>@linkColor;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnPrimaryBackgroundHighlight</span>
            </td>
            <td>
                <code>spin(@btnPrimaryBackground, 20%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInfoBackground</span>
            </td>
            <td>
                <code>#5bc0de;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInfoBackgroundHighlight</span>
            </td>
            <td>
                <code>#2f96b4;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnSuccessBackground</span>
            </td>
            <td>
                <code>#62c462;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnSuccessBackgroundHighlight</span>
            </td>
            <td>
                <code>#51a351;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnWarningBackground:</span>
            </td>
            <td>
                <code>lighten(@orange, 15%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnWarningBackgroundHighlight</span>
            </td>
            <td>
                <code>@orange;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnDangerBackground</span>
            </td>
            <td>
                <code>#ee5f5b;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnDangerBackgroundHighlight</span>
            </td>
            <td>
                <code>#bd362f;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInverseBackground</span>
            </td>
            <td>
                <code>#444;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInverseBackgroundHighlight</span>
            </td>
            <td>
                <code>@grayDarker;</code>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:buttonsPage.html.twig";
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
/*     <div class="row-fluid one-column">*/
/*     <div class="span12 top-frame">*/
/*     <!--Body content-->*/
/*     <div class="container-fluid">*/
/*     <p>*/
/*         <button class="btn btn-large btn-primary" type="button">Large button</button>*/
/*         <button class="btn btn-large" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-info" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-success" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-warning" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-danger" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-inverse" type="button">Large button</button>*/
/*         <button class="btn btn-large btn-link" type="button">Large button like link</button>*/
/*     </p>*/
/*     <p>*/
/*         <button class="btn btn-primary" type="button">Default button</button>*/
/*         <button class="btn" type="button">Default button</button>*/
/*         <button class="btn btn-info" type="button">Large button</button>*/
/*         <button class="btn btn-success" type="button">Large button</button>*/
/*         <button class="btn btn-warning" type="button">Large button</button>*/
/*         <button class="btn btn-danger" type="button">Large button</button>*/
/*         <button class="btn btn-inverse" type="button">Large button</button>*/
/*         <button class="btn btn-link" type="button">Large button like link</button>*/
/*     </p>*/
/*     <p>*/
/*         <button class="btn btn-small btn-primary" type="button">Small button</button>*/
/*         <button class="btn btn-small" type="button">Small button</button>*/
/*         <button class="btn btn-small btn-info" type="button">Large button</button>*/
/*         <button class="btn btn-small btn-success" type="button">Large button</button>*/
/*         <button class="btn btn-small btn-warning" type="button">Large button</button>*/
/*         <button class="btn btn-small btn-danger" type="button">Large button</button>*/
/*         <button class="btn btn-small btn-inverse" type="button">Large button</button>*/
/*         <button class="btn btn-small btn-link" type="button">Large button like link</button>*/
/*     </p>*/
/*     <p>*/
/*         <button class="btn btn-mini btn-primary" type="button">Mini button</button>*/
/*         <button class="btn btn-mini" type="button">Mini button</button>*/
/*         <button class="btn btn-mini btn-info" type="button">Large button</button>*/
/*         <button class="btn btn-mini btn-success" type="button">Large button</button>*/
/*         <button class="btn btn-mini btn-warning" type="button">Large button</button>*/
/*         <button class="btn btn-mini btn-danger" type="button">Large button</button>*/
/*         <button class="btn btn-mini btn-inverse" type="button">Large button</button>*/
/*         <button class="btn btn-mini btn-link" type="button">Large button like link</button>*/
/*     </p>*/
/*     <p>*/
/*         <button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>*/
/*         <button type="button" class="btn btn-large" disabled>Button</button>*/
/*         <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>*/
/*         <a href="#" class="btn btn-large disabled">Link</a>*/
/*     </p>*/
/*     <hr />*/
/*     <div style="margin: 0;" class="btn-toolbar">*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn dropdown-toggle">Action <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Danger <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Warning <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Success <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="btn-group">*/
/*             <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Info <span class="caret"></span></button>*/
/*             <ul class="dropdown-menu">*/
/*                 <li><a href="#">Action</a></li>*/
/*                 <li><a href="#">Another action</a></li>*/
/*                 <li><a href="#">Something else here</a></li>*/
/*                 <li class="divider"></li>*/
/*                 <li><a href="#">Separated link</a></li>*/
/*             </ul>*/
/*         </div><!-- /btn-group -->*/
/*         <div class="form-row">*/
/*             <div class="btn-toolbar">*/
/*                 <div class="btn-group">*/
/*                     <button class="btn">Action</button>*/
/*                     <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-primary">Action</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-danger">Danger</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-warning">Warning</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-success">Success</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-info">Info</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-inverse">Inverse</button>*/
/*                     <button data-toggle="dropdown" class="btn btn-inverse dropdown-toggle"><span class="caret"></span></button>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </div><!-- /btn-group -->*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="form-row">*/
/*         <div class="btn-toolbar">*/
/*             <div class="btn-group dropup">*/
/*                 <button class="btn">Dropup</button>*/
/*                 <button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a href="#">Action</a></li>*/
/*                     <li><a href="#">Another action</a></li>*/
/*                     <li><a href="#">Something else here</a></li>*/
/*                     <li class="divider"></li>*/
/*                     <li><a href="#">Separated link</a></li>*/
/*                 </ul>*/
/*             </div><!-- /btn-group -->*/
/*             <div class="btn-group dropup">*/
/*                 <button class="btn primary">Right dropup</button>*/
/*                 <button data-toggle="dropdown" class="btn primary dropdown-toggle"><span class="caret"></span></button>*/
/*                 <ul class="dropdown-menu pull-right">*/
/*                     <li><a href="#">Action</a></li>*/
/*                     <li><a href="#">Another action</a></li>*/
/*                     <li><a href="#">Something else here</a></li>*/
/*                     <li class="divider"></li>*/
/*                     <li><a href="#">Separated link</a></li>*/
/*                 </ul>*/
/*             </div><!-- /btn-group -->*/
/*         </div>*/
/*     </div>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="container-fluid">*/
/*         <div class="form-row">*/
/*             <div class="btn-group">*/
/*                 <button class="btn btn-warning ">Left</button>*/
/*                 <button class="btn">Middle</button>*/
/*                 <button class="btn btn-danger">Right</button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <div class="btn-group btn-group-vertical">*/
/*                 <button class="btn" type="button">one</button>*/
/*                 <button class="btn btn-success" type="button">two</button>*/
/*                 <button class="btn" type="button">three</button>*/
/*                 <button class="btn btn-info " type="button">end</button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <div style="margin: 0;" class="btn-toolbar">*/
/*                 <div class="btn-group">*/
/*                     <button class="btn">1</button>*/
/*                     <button class="btn">2</button>*/
/*                     <button class="btn">3</button>*/
/*                     <button class="btn">4</button>*/
/*                 </div>*/
/*                 <div class="btn-group">*/
/*                     <button class="btn">5</button>*/
/*                     <button class="btn">6</button>*/
/*                     <button class="btn">7</button>*/
/*                 </div>*/
/*                 <div class="btn-group">*/
/*                     <button class="btn">8</button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="container-fluid">*/
/*         <ul class="pager">*/
/*             <li><a href="#">Previous</a></li>*/
/*             <li><a href="#">Next</a></li>*/
/*         </ul>*/
/*         <ul class="pager">*/
/*             <li class="previous"><a href="#"><- Older</a></li>*/
/*             <li class="next"><a href="#">Newer -></a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <hr />*/
/*     <div class="container-fluid">*/
/*         <div class="form-row">*/
/*             <h2>Buttons <small>bootstrap-button.js</small></h2>*/
/*             <p>Add <code>data-loading-text="Loading..."</code> to use a loading state on a button.</p>*/
/*             <button class="btn btn-primary" data-loading-text="loading..." id="fat-btn" type="button">Loading state</button>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <p>Add <code>data-toggle="button"</code> to activate toggling on a single button.</p>*/
/*             <button data-toggle="button" class="btn btn-primary" type="button">Single Toggle</button>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <p>Add <code>data-toggle="buttons-checkbox"</code> for checkbox style toggling on btn-group.</p>*/
/*             <div data-toggle="buttons-checkbox" class="btn-group">*/
/*                 <button class="btn btn-primary" type="button">Left</button>*/
/*                 <button class="btn btn-primary" type="button">Middle</button>*/
/*                 <button class="btn btn-primary" type="button">Right</button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-row">*/
/*             <p>Add <code>data-toggle="buttons-radio"</code> for radio style toggling on btn-group.</p>*/
/*             <div data-toggle="buttons-radio" class="btn-group">*/
/*                 <button class="btn btn-primary" type="button">Left</button>*/
/*                 <button class="btn btn-primary active" type="button">Middle</button>*/
/*                 <button class="btn btn-primary" type="button">Right</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <hr />*/
/*     <table class="table table-bordered table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Variable</th>*/
/*             <th>default</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>@white;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>darken(@white, 10%);</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnBorder</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#bbb;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnPrimaryBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>@linkColor;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnPrimaryBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>spin(@btnPrimaryBackground, 20%);</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnInfoBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#5bc0de;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnInfoBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#2f96b4;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnSuccessBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#62c462;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnSuccessBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#51a351;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnWarningBackground:</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>lighten(@orange, 15%);</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnWarningBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>@orange;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnDangerBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#ee5f5b;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnDangerBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#bd362f;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnInverseBackground</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>#444;</code>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td>*/
/*                 <span class="">@btnInverseBackgroundHighlight</span>*/
/*             </td>*/
/*             <td>*/
/*                 <code>@grayDarker;</code>*/
/*             </td>*/
/*         </tr>*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     </div>*/
/* {% endblock content %}*/
