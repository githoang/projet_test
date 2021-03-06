<?php

/* OroUIBundle:Default:gridPage.html.twig */
class __TwigTemplate_f04e207936a37c2387902058bac4de9ca45d01b2230058361e88665543ac3fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "OroUIBundle:Default:gridPage.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/bootstrap/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/lib/bootstrap/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "        <div class=\"layout-content\">
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
            <div class=\"navigation clearfix\">
                <div class=\"container-fluid\">
                    <div class=\"top-action-box\">
                        <div class=\"btn-group icons-holder icons-small\">
                            <button class=\"btn\"><i class=\"icon-minimize hide-text\">minimaze tab</i></button>
                            <button class=\"btn\"><i class=\"icon-fullscreen hide-text\">full screen</i></button>
                            <button class=\"btn\"><i class=\"icon-remove hide-text\">Close</i></button>
                        </div>
                    </div>
                    <div class=\"brand-extra pull-left\">Customers</div>
                    <div class=\"divider-vertical pull-left\" style=\"height:100%;\"></div>
                    <div class=\"navbar-responsive-collapse navbar-extra clearfix\">
                        <div class=\"btn-group pull-left\">
                            <button class=\"btn dark\">Views</button>
                            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">Accounts owned by me<span class=\"icon-sort-down\"></span></button>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>
                                <li><a href=\"#\">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>
                            </ul>
                        </div>
                        <div class=\"btn-group pull-left\">
                            <button type=\"button\" class=\"btn btn-link\"> + Add View</button>
                        </div>
                        <div class=\"btn-group pull-right\">
                            <button class=\"btn btn-primary\"><i class=\"icon-plus icon-white\"></i> New Customers</button>
                        </div>
                        <div class=\"btn-group pull-right\">
                            <button class=\"btn btn-primary\"><i class=\"icon-window\"></i>Quick Add</button>
                        </div>
                    </div><!-- /.nav-collapse -->
                </div>
            </div>
            <div class=\"filter-box container-fluid\">
                <div class=\"btn-group filter-item oro-drop\">
                    <button class=\"btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle\" data-toggle=\"dropdown\">
                        Account Owner: <strong>Me</strong> <span class=\"icon-sort-down\"></span>
                    </button>
                    <a class=\"disable-filter\" href=\"javascript:void(0);\"><i class=\"icon-remove hide-text\">Close</i></a>
                    <div class=\"filter-criteria dropdvown-menu\" style=\"display: block !important;\">
                        <div>
                            <div class=\"horizontal clearfix\">
                                <select name=\"select-name\" class=\"filter-select-oro\" id=\"select\">
                                    <option value=\"1\">between</option>
                                    <option value=\"1\">Contains</option>
                                </select>
                            </div>
                            <div><input type=\"text\" value=\"\" name=\"value\"></div>
                            <div class=\"oro-action\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-primary filter-update\" type=\"button\">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"btn-group filter-item oro-drop\" style=\"margin: 0 0 0 145px;\">
                    <button class=\"btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle\" type=\"button\">
                        Updated At: <strong class=\"filter-criteria-hint\">All</strong><span class=\"icon-sort-down\"></span>
                    </button>
                    <a class=\"disable-filter\" href=\"javascript:void(0);\"><i class=\"icon-remove hide-text\">Close</i></a>
                    <div class=\"filter-criteria dropdown-menu\" style=\"display: block !important;\">
                        <div>
                            <div class=\"horizontal clearfix\">
                                <select name=\"select-name\" class=\"filter-select-oro\" id=\"select\">
                                    <option value=\"1\">between</option>
                                    <option value=\"1\">Contains</option>
                                </select>
                            </div>
                            <div><input type=\"text\" class=\"datetime-visual-element hasDatepicker date-filter-widget\"
                                        value=\"\" name=\"start\" placeholder=\"from\" id=\"dp1369306486423\"> <input
                                        type=\"text\" class=\"datetime-visual-element hasDatepicker date-filter-widget\"
                                        value=\"\" name=\"end\" placeholder=\"to\" id=\"dp1369306486424\"></div>
                            <div class=\"oro-action\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-primary filter-update\" type=\"button\">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"btn-group filter-item oro-drop\" style=\"margin: 0 0 0 75px;\">
                    <button class=\"btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle\" data-toggle=\"dropdown\">
                        Account Owner: <strong>Me</strong> <span class=\"icon-sort-down\"></span>
                    </button>
                    <a class=\"disable-filter\" href=\"javascript:void(0);\"><i class=\"icon-remove hide-text\">Close</i></a>
                    <div class=\"filter-criteria dropdown-menu\" style=\"display: block !important;\">
                        <div>
                            <div class=\"input-prepend\">
                                <div class=\"btn-group\">
                                    <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                                        Action
                                        <span class=\"icon-sort-down\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"#\">=</a></li>
                                        <li><a href=\"#\">+</a></li>
                                        <li><a href=\"#\">+</a></li>
                                        <li><a href=\"#\">+</a></li>
                                        <li><a href=\"#\">+</a></li>
                                    </ul>
                                    <input class=\"span2\" id=\"prependedDropdownButton\" type=\"text\">
                                </div>

                            </div>
                            <button class=\"btn btn-primary filter-update\" type=\"button\">Update</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"grid-toolbar well-small\">
                <div class=\"pull-right form-horizontal\">
                    <label class=\"control-label\">View per page: &nbsp;</label>
                    <div class=\"btn-group\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">100<span class=\"icon-sort-down\"></span></button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li><a href=\"#\">10</a></li>
                            <li><a href=\"#\">25</a></li>
                            <li><a href=\"#\">50</a></li>
                        </ul>
                    </div>
                    <div class=\"btn-group icons-holder \">
                        <button class=\"btn\"><i class=\"icon-eye2-open hide-text\">hide</i></button>
                        <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-sort hide-text\">copy</i></button>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <div class=\"holder-height\">
                                    <ul class=\"unstyled well-small\">
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Name
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Email
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Telephone
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Zip
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                State/Province
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping City
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Country
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping State
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Name
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Email
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Telephone
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Zip
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                State/Province
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping City
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Country
                                            </label>
                                        </li>
                                        <li class=\"\">
                                            <label class=\"checkbox\">
                                                <input type=\"checkbox\" />
                                                Shipping State
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"pull-left\">
                    <div class=\"btn-group icons-holder\">
                        <button class=\"btn\"><i class=\"icon-edit hide-text\">edit</i></button>
                        <button class=\"btn\"><i class=\"icon-copy hide-text\">copy</i></button>
                        <button class=\"btn\"><i class=\"icon-trash hide-text\">remove</i></button>
                    </div>
                    <div class=\"btn-group\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">Status: <strong>All</strong><span class=\"icon-sort-down\"></span></button>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">only short</a></li>
                            <li><a href=\"#\">this is long text for test</a></li>
                        </ul>
                    </div>
                    <button id=\"open-loading\" class=\"btn\">open loading</button>
                </div>
                <div class=\"pagination pagination-centered\">
                    <label class=\"dib\">Page:</label>
                    <ul class=\"icons-holder\">
                        <li class=\"disabled\"><a href=\"#\"><i class=\"icon-chevron-left hide-text\">prew</i></a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\"><i class=\"icon-chevron-right hide-text\">Next</i></a></li>
                    </ul>
                    <label class=\"dib\">of 10   |   565 records</label>
                </div>
            </div>
        <div class=\"clearfix scroll-holder\">
            <table class=\"grid table-hover table table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th><input type=\"checkbox\" /></th>
                        <th><span class=\"open-row open-row-all\">open</span></th>
                        <th>name <span class=\"icon-sort-down\"></span></th>
                        <th>Email <span class=\"icon-sort-down\"></span></th>
                        <th>Telephone <span class=\"icon-sort-down\"></span></th>
                        <th>ZIP <span class=\"icon-sort-down\"></span></th>
                        <th>State/Province <span class=\"icon-sort-down\"></span></th>
                        <th>Country <span class=\"icon-sort-down\"></span></th>
                        <th>Last Updated <span class=\"icon-sort-down\"></span></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class=\"\">
                    <tr class=\"selected-row \">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr><tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr><tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr><tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr><tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 780
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1010
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1240
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1355
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1470
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1585
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1700
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1815
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 1930
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 2045
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Ada Lindsey</td>
                        <td>adalindsey@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>California</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 2160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"\">
                        <td><input type=\"checkbox\" /></td>
                        <td><span class=\"open-row\">open</span></td>
                        <td>Angelica Freeman</td>
                        <td>angelicafreeman@gmail.com</td>
                        <td>503-123-1234</td>
                        <td>97236</td>
                        <td>Oregon</td>
                        <td>United States</td>
                        <td>Jan 8, 2013</td>
                        <td>
                            <div class=\"more-bar-holder\">
                                <div class=\"dropdown\">
                                    <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">...</a>
                                    <ul class=\"dropdown-menu pull-right\">
                                        <li>
                                            <ul class=\"nav nav-pills icons-holder\">
                                                <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                                <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                            </ul>
                                        </li>
                                        <li class=\"divider\"></li>
                                        <li class=\"well-small\">
                                            <ul class=\"unstyled\">
                                                <li><a href=\"#\">Share</a></li>
                                                <li><a href=\"#\">Send to</a></li>
                                                <li><a href=\"#\">Export</a></li>
                                                <li><a href=\"#\">Print</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr class=\"grid-info hide\">
                        <td>
                            <div class=\"grid-info-frame\">
                                <div class=\"clearfix\">
                                    <div class=\"pull-right\">
                                        <ul class=\"nav nav-pills icons-holder well well-small\">
                                            <li><a href=\"#\"><i class=\"icon-edit hide-text\">edit</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-copy hide-text\">copy</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-pin hide-text\">pin/unpin</i></a></li>
                                            <li><a href=\"#\"><i class=\"icon-trash hide-text\">remove</i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"clearfix well-small\">
                                    <div class=\"pull-left\">
                                        <span class=\"user-name\">Anna Griffin</span>
                                        <span class=\"user-state\">Active</span>
                                    </div>
                                    <a class=\"more pull-right\" href=\"#\">View full details</a>
                                </div>
                                <div class=\"claerfix account-info\">
                                    <div class=\"user-img\"><img src=\"";
        // line 2275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/user-img.png"), "html", null, true);
        echo "\" alt=\"user-avatar\" /></div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>User name:</dt>
                                            <dd><a href=\"#\">Oro Inc</a></dd>
                                            <dt>Title:</dt>
                                            <dd>VP of Global Services</dd>
                                            <dt>Department:</dt>
                                            <dd>Global Services</dd>
                                            <dt>Type:</dt>
                                            <dd>Active Prospect</dd>
                                            <dt>Birthdate:</dt>
                                            <dd>01/01/1977</dd>
                                            <dt>Language:</dt>
                                            <dd>English</dd>
                                            <dt>Twitter:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>LinkedIn:</dt>
                                            <dd><a href=\"#\">annagraffin</a></dd>
                                            <dt>Facebook:</dt>
                                            <dd><a href=\"#\">anna.graffin</a></dd>
                                        </dl>
                                    </div>
                                    <div class=\"col\">
                                        <dl>
                                            <dt>Phone:</dt>
                                            <dd>
                                                <p>503-123-1234   Work</p>
                                                <p>503-123-1231   Home</p>
                                                <p>503-123-1239   Cell</p>
                                            </dd>
                                            <dt>Email:</dt>
                                            <dd>
                                                <p>anna.griffin4321@gmail.com   Work</p>
                                                <p> anna.griffin4321@dreamlane123.com   Work</p>
                                            </dd>
                                            <dt>Preferred Method:</dt>
                                            <dd>Email</dd>
                                            <dt>Address:</dt>
                                            <dd>
                                                <address>
                                                    1234 Dream Lane <br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                                <address>
                                                    1234 Dream Lane<br />
                                                    Portland, OR 97236<br />
                                                    United States
                                                </address>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div id=\"loading-wrapper\" style=\"display: none;\">

            </div>
            <div id=\"loading-frame\" class=\"loading-frame\" style=\"display: none;\">
                <div class=\"box well\">
                    <img src=\"";
        // line 2339
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/loader.gif"), "html", null, true);
        echo "\" alt=\"\">
                    Loading . . .
                </div>
            </div>
            <script type=\"text/javascript\">
                require(['jquery'],
                function(\$) {
                    \$(function() {
                        var _qtyTh = \$('table.grid thead th').size();
                        \$('table.grid .grid-info td').attr('colspan', _qtyTh);
                        \$('table.grid tbody tr:not(.grid-info)').each(function(){
                            var _myRow = \$(this);
                            \$(this).find('span.open-row').click(function(){
                                \$(_myRow).toggleClass('open-tr');
                                \$(_myRow).next().toggleClass('hide');
                            });
                        });
                        \$('span.open-row-all').click(function(){
                            if( \$(this).parent().hasClass(\"open-tr\")){
                                \$(this).parent().removeClass('open-tr');
                                \$('table.grid tbody tr:not(.grid-info)').each(function(){
                                    var _myRow = \$(this);
                                    \$(_myRow).removeClass('open-tr');
                                    \$(_myRow).next().addClass('hide');
                                });
                            }else{
                                \$(this).parent().addClass('open-tr');
                                \$('table.grid tbody tr:not(.grid-info)').each(function(){
                                    var _myRow = \$(this);
                                    \$(_myRow).addClass('open-tr');
                                    \$(_myRow).next().removeClass('hide');
                                });
                            }
                        });
                        /* js for loader show */
                        \$('#open-loading').click(function(){
                            \$('#loading-wrapper , #loading-frame').css({
                                'display' : 'block'
                            })
                        });
                        \$('#loading-wrapper').click(function(){
                            \$('#loading-wrapper , #loading-frame').css({
                                'display' : 'none'
                            })
                        });
                        /* js for loader show --end */
                        /* select row */
                            \$('table.grid tbody td > input:checkbox').each(function(){
                                if(\$(this).attr('checked')=='checked'){
                                    \$(this).parent().parent().addClass('selected-row');
                                }
                                \$(this).click(function(){
                                    if(\$(this).attr('checked')=='checked'){
                                        \$(this).parent().parent().addClass('selected-row');
                                    }else{
                                        \$(this).parent().parent().removeClass('selected-row');
                                    }


                                //    \$(this).parent().parent().toggleClass('selected-row');
                                });
                            });
                        /* select row -- end*/
                        /* BE need dell after add funvctionalitu for close */
                        \$('.disable-filter').each(function(){
                            \$(this).click(function(){
                                \$(this).parent().remove();
                            });
                        });
                    });
                });
            </script>
        </div>

    </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:gridPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  1066 => 1010,  948 => 895,  830 => 780,  712 => 665,  450 => 406,  50 => 8,  47 => 7,  41 => 5,  37 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "OroUIBundle:Default:index.html.twig" %}*/
/* {% block head %}*/
/*     {{ parent() }}*/
/*     <script type="text/javascript" src="{{ asset('bundles/oroui/lib/bootstrap/js/bootstrap-tooltip.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('bundles/oroui/lib/bootstrap/js/bootstrap-popover.js') }}"></script>*/
/* {% endblock %}*/
/* {% block content %}*/
/*         <div class="layout-content">*/
/*             <div class="clearfix"><div class="navbar application-menu">*/
/*                 <div class="cleearfix">*/
/*                     <div class="container">*/
/*                         <div class=" navbar-responsive-collapse">*/
/*                             <ul class="nav nav-tabs" id="myTab">*/
/*                                 <li class="home"><a href="#myhome"><span>Home</span></a></li>*/
/*                                 <li><a href="#mycrm">My CRM</a></li>*/
/*                                 <li><a href="#mypim">My PIM</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div></div>*/
/*             <div class="clearfix application-menu">*/
/*                 <div class="tab-content">*/
/*                     <div class="tab-pane" id="myhome">*/
/*                         <ul class="nav nav-pills">*/
/*                             <li class="active">*/
/*                                 <a href="#">Dashboard</a>*/
/*                             </li>*/
/*                             <li><a href="#">Leads</a></li>*/
/*                             <li><a href="#">Customers</a></li>*/
/*                             <li><a href="#">Accounts</a></li>*/
/*                             <li><a href="#">Forecasts</a></li>*/
/*                             <li><a href="#">Reports</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="tab-pane" id="mycrm">*/
/*                         <ul class="nav nav-pills">*/
/*                             <li class="active">*/
/*                                 <a href="#">Dashboard</a>*/
/*                             </li>*/
/*                             <li><a href="#">Leads</a></li>*/
/*                             <li><a href="#">Customers</a></li>*/
/*                             <li><a href="#">Accounts</a></li>*/
/*                             <li><a href="#">Forecasts</a></li>*/
/*                             <li><a href="#">Reports</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="tab-pane" id="mypim">*/
/*                         <ul class="nav nav-pills">*/
/*                             <li class="active">*/
/*                                 <a href="#">Dashboard pim</a>*/
/*                             </li>*/
/*                             <li><a href="#">Leads pim</a></li>*/
/*                             <li><a href="#">Customers pim</a></li>*/
/*                             <li><a href="#">Accounts pim</a></li>*/
/*                             <li><a href="#">Forecasts pim</a></li>*/
/*                             <li><a href="#">Reports pim</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <script>*/
/*                 require(['jquery', 'jquery-ui', 'bootstrap'],*/
/*                 function($) {*/
/*                     $(function () {*/
/*                         $('#myTab a:last').tab('show');*/
/*                         $('#myTab a').click(function (e) {*/
/*                             e.preventDefault();*/
/*                             $(this).tab('show');*/
/*                         });*/
/*                         $('a.popup-me').popover();*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*             <div class="navigation clearfix">*/
/*                 <div class="container-fluid">*/
/*                     <div class="top-action-box">*/
/*                         <div class="btn-group icons-holder icons-small">*/
/*                             <button class="btn"><i class="icon-minimize hide-text">minimaze tab</i></button>*/
/*                             <button class="btn"><i class="icon-fullscreen hide-text">full screen</i></button>*/
/*                             <button class="btn"><i class="icon-remove hide-text">Close</i></button>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="brand-extra pull-left">Customers</div>*/
/*                     <div class="divider-vertical pull-left" style="height:100%;"></div>*/
/*                     <div class="navbar-responsive-collapse navbar-extra clearfix">*/
/*                         <div class="btn-group pull-left">*/
/*                             <button class="btn dark">Views</button>*/
/*                             <button class="btn dropdown-toggle" data-toggle="dropdown">Accounts owned by me<span class="icon-sort-down"></span></button>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Last update: <strong>2010/12/12-2013/18/18</strong></a></li>*/
/*                                 <li><a href="#">Last update: <strong>2011/12/12-2014/11/18</strong></a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="btn-group pull-left">*/
/*                             <button type="button" class="btn btn-link"> + Add View</button>*/
/*                         </div>*/
/*                         <div class="btn-group pull-right">*/
/*                             <button class="btn btn-primary"><i class="icon-plus icon-white"></i> New Customers</button>*/
/*                         </div>*/
/*                         <div class="btn-group pull-right">*/
/*                             <button class="btn btn-primary"><i class="icon-window"></i>Quick Add</button>*/
/*                         </div>*/
/*                     </div><!-- /.nav-collapse -->*/
/*                 </div>*/
/*             </div>*/
/*             <div class="filter-box container-fluid">*/
/*                 <div class="btn-group filter-item oro-drop">*/
/*                     <button class="btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle" data-toggle="dropdown">*/
/*                         Account Owner: <strong>Me</strong> <span class="icon-sort-down"></span>*/
/*                     </button>*/
/*                     <a class="disable-filter" href="javascript:void(0);"><i class="icon-remove hide-text">Close</i></a>*/
/*                     <div class="filter-criteria dropdvown-menu" style="display: block !important;">*/
/*                         <div>*/
/*                             <div class="horizontal clearfix">*/
/*                                 <select name="select-name" class="filter-select-oro" id="select">*/
/*                                     <option value="1">between</option>*/
/*                                     <option value="1">Contains</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div><input type="text" value="" name="value"></div>*/
/*                             <div class="oro-action">*/
/*                                 <div class="btn-group">*/
/*                                     <button class="btn btn-primary filter-update" type="button">Update</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="btn-group filter-item oro-drop" style="margin: 0 0 0 145px;">*/
/*                     <button class="btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle" type="button">*/
/*                         Updated At: <strong class="filter-criteria-hint">All</strong><span class="icon-sort-down"></span>*/
/*                     </button>*/
/*                     <a class="disable-filter" href="javascript:void(0);"><i class="icon-remove hide-text">Close</i></a>*/
/*                     <div class="filter-criteria dropdown-menu" style="display: block !important;">*/
/*                         <div>*/
/*                             <div class="horizontal clearfix">*/
/*                                 <select name="select-name" class="filter-select-oro" id="select">*/
/*                                     <option value="1">between</option>*/
/*                                     <option value="1">Contains</option>*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div><input type="text" class="datetime-visual-element hasDatepicker date-filter-widget"*/
/*                                         value="" name="start" placeholder="from" id="dp1369306486423"> <input*/
/*                                         type="text" class="datetime-visual-element hasDatepicker date-filter-widget"*/
/*                                         value="" name="end" placeholder="to" id="dp1369306486424"></div>*/
/*                             <div class="oro-action">*/
/*                                 <div class="btn-group">*/
/*                                     <button class="btn btn-primary filter-update" type="button">Update</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="btn-group filter-item oro-drop" style="margin: 0 0 0 75px;">*/
/*                     <button class="btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle" data-toggle="dropdown">*/
/*                         Account Owner: <strong>Me</strong> <span class="icon-sort-down"></span>*/
/*                     </button>*/
/*                     <a class="disable-filter" href="javascript:void(0);"><i class="icon-remove hide-text">Close</i></a>*/
/*                     <div class="filter-criteria dropdown-menu" style="display: block !important;">*/
/*                         <div>*/
/*                             <div class="input-prepend">*/
/*                                 <div class="btn-group">*/
/*                                     <button class="btn dropdown-toggle" data-toggle="dropdown">*/
/*                                         Action*/
/*                                         <span class="icon-sort-down"></span>*/
/*                                     </button>*/
/*                                     <ul class="dropdown-menu">*/
/*                                         <li><a href="#">=</a></li>*/
/*                                         <li><a href="#">+</a></li>*/
/*                                         <li><a href="#">+</a></li>*/
/*                                         <li><a href="#">+</a></li>*/
/*                                         <li><a href="#">+</a></li>*/
/*                                     </ul>*/
/*                                     <input class="span2" id="prependedDropdownButton" type="text">*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                             <button class="btn btn-primary filter-update" type="button">Update</button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="grid-toolbar well-small">*/
/*                 <div class="pull-right form-horizontal">*/
/*                     <label class="control-label">View per page: &nbsp;</label>*/
/*                     <div class="btn-group">*/
/*                         <button data-toggle="dropdown" class="btn dropdown-toggle">100<span class="icon-sort-down"></span></button>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li><a href="#">10</a></li>*/
/*                             <li><a href="#">25</a></li>*/
/*                             <li><a href="#">50</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="btn-group icons-holder ">*/
/*                         <button class="btn"><i class="icon-eye2-open hide-text">hide</i></button>*/
/*                         <button class="btn dropdown-toggle" data-toggle="dropdown"><i class="icon-sort hide-text">copy</i></button>*/
/*                         <ul class="dropdown-menu pull-right">*/
/*                             <li>*/
/*                                 <div class="holder-height">*/
/*                                     <ul class="unstyled well-small">*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Name*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Email*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Telephone*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Zip*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 State/Province*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Shipping City*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Country*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Shipping State*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Name*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Email*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Telephone*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Zip*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 State/Province*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Shipping City*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Country*/
/*                                             </label>*/
/*                                         </li>*/
/*                                         <li class="">*/
/*                                             <label class="checkbox">*/
/*                                                 <input type="checkbox" />*/
/*                                                 Shipping State*/
/*                                             </label>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="pull-left">*/
/*                     <div class="btn-group icons-holder">*/
/*                         <button class="btn"><i class="icon-edit hide-text">edit</i></button>*/
/*                         <button class="btn"><i class="icon-copy hide-text">copy</i></button>*/
/*                         <button class="btn"><i class="icon-trash hide-text">remove</i></button>*/
/*                     </div>*/
/*                     <div class="btn-group">*/
/*                         <button data-toggle="dropdown" class="btn dropdown-toggle">Status: <strong>All</strong><span class="icon-sort-down"></span></button>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">only short</a></li>*/
/*                             <li><a href="#">this is long text for test</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <button id="open-loading" class="btn">open loading</button>*/
/*                 </div>*/
/*                 <div class="pagination pagination-centered">*/
/*                     <label class="dib">Page:</label>*/
/*                     <ul class="icons-holder">*/
/*                         <li class="disabled"><a href="#"><i class="icon-chevron-left hide-text">prew</i></a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#"><i class="icon-chevron-right hide-text">Next</i></a></li>*/
/*                     </ul>*/
/*                     <label class="dib">of 10   |   565 records</label>*/
/*                 </div>*/
/*             </div>*/
/*         <div class="clearfix scroll-holder">*/
/*             <table class="grid table-hover table table-bordered table-condensed">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th><input type="checkbox" /></th>*/
/*                         <th><span class="open-row open-row-all">open</span></th>*/
/*                         <th>name <span class="icon-sort-down"></span></th>*/
/*                         <th>Email <span class="icon-sort-down"></span></th>*/
/*                         <th>Telephone <span class="icon-sort-down"></span></th>*/
/*                         <th>ZIP <span class="icon-sort-down"></span></th>*/
/*                         <th>State/Province <span class="icon-sort-down"></span></th>*/
/*                         <th>Country <span class="icon-sort-down"></span></th>*/
/*                         <th>Last Updated <span class="icon-sort-down"></span></th>*/
/*                         <th></th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody class="">*/
/*                     <tr class="selected-row ">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr><tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr><tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr><tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr><tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Ada Lindsey</td>*/
/*                         <td>adalindsey@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>California</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="">*/
/*                         <td><input type="checkbox" /></td>*/
/*                         <td><span class="open-row">open</span></td>*/
/*                         <td>Angelica Freeman</td>*/
/*                         <td>angelicafreeman@gmail.com</td>*/
/*                         <td>503-123-1234</td>*/
/*                         <td>97236</td>*/
/*                         <td>Oregon</td>*/
/*                         <td>United States</td>*/
/*                         <td>Jan 8, 2013</td>*/
/*                         <td>*/
/*                             <div class="more-bar-holder">*/
/*                                 <div class="dropdown">*/
/*                                     <a data-toggle="dropdown" class="dropdown-toggle" href="#">...</a>*/
/*                                     <ul class="dropdown-menu pull-right">*/
/*                                         <li>*/
/*                                             <ul class="nav nav-pills icons-holder">*/
/*                                                 <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                                 <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                         <li class="divider"></li>*/
/*                                         <li class="well-small">*/
/*                                             <ul class="unstyled">*/
/*                                                 <li><a href="#">Share</a></li>*/
/*                                                 <li><a href="#">Send to</a></li>*/
/*                                                 <li><a href="#">Export</a></li>*/
/*                                                 <li><a href="#">Print</a></li>*/
/*                                             </ul>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr class="grid-info hide">*/
/*                         <td>*/
/*                             <div class="grid-info-frame">*/
/*                                 <div class="clearfix">*/
/*                                     <div class="pull-right">*/
/*                                         <ul class="nav nav-pills icons-holder well well-small">*/
/*                                             <li><a href="#"><i class="icon-edit hide-text">edit</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-copy hide-text">copy</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-pin hide-text">pin/unpin</i></a></li>*/
/*                                             <li><a href="#"><i class="icon-trash hide-text">remove</i></a></li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="clearfix well-small">*/
/*                                     <div class="pull-left">*/
/*                                         <span class="user-name">Anna Griffin</span>*/
/*                                         <span class="user-state">Active</span>*/
/*                                     </div>*/
/*                                     <a class="more pull-right" href="#">View full details</a>*/
/*                                 </div>*/
/*                                 <div class="claerfix account-info">*/
/*                                     <div class="user-img"><img src="{{ asset('bundles/oroui/img/user-img.png') }}" alt="user-avatar" /></div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>User name:</dt>*/
/*                                             <dd><a href="#">Oro Inc</a></dd>*/
/*                                             <dt>Title:</dt>*/
/*                                             <dd>VP of Global Services</dd>*/
/*                                             <dt>Department:</dt>*/
/*                                             <dd>Global Services</dd>*/
/*                                             <dt>Type:</dt>*/
/*                                             <dd>Active Prospect</dd>*/
/*                                             <dt>Birthdate:</dt>*/
/*                                             <dd>01/01/1977</dd>*/
/*                                             <dt>Language:</dt>*/
/*                                             <dd>English</dd>*/
/*                                             <dt>Twitter:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>LinkedIn:</dt>*/
/*                                             <dd><a href="#">annagraffin</a></dd>*/
/*                                             <dt>Facebook:</dt>*/
/*                                             <dd><a href="#">anna.graffin</a></dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                     <div class="col">*/
/*                                         <dl>*/
/*                                             <dt>Phone:</dt>*/
/*                                             <dd>*/
/*                                                 <p>503-123-1234   Work</p>*/
/*                                                 <p>503-123-1231   Home</p>*/
/*                                                 <p>503-123-1239   Cell</p>*/
/*                                             </dd>*/
/*                                             <dt>Email:</dt>*/
/*                                             <dd>*/
/*                                                 <p>anna.griffin4321@gmail.com   Work</p>*/
/*                                                 <p> anna.griffin4321@dreamlane123.com   Work</p>*/
/*                                             </dd>*/
/*                                             <dt>Preferred Method:</dt>*/
/*                                             <dd>Email</dd>*/
/*                                             <dt>Address:</dt>*/
/*                                             <dd>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane <br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                                 <address>*/
/*                                                     1234 Dream Lane<br />*/
/*                                                     Portland, OR 97236<br />*/
/*                                                     United States*/
/*                                                 </address>*/
/*                                             </dd>*/
/*                                         </dl>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*             <div id="loading-wrapper" style="display: none;">*/
/* */
/*             </div>*/
/*             <div id="loading-frame" class="loading-frame" style="display: none;">*/
/*                 <div class="box well">*/
/*                     <img src="{{ asset('bundles/oroui/img/loader.gif') }}" alt="">*/
/*                     Loading . . .*/
/*                 </div>*/
/*             </div>*/
/*             <script type="text/javascript">*/
/*                 require(['jquery'],*/
/*                 function($) {*/
/*                     $(function() {*/
/*                         var _qtyTh = $('table.grid thead th').size();*/
/*                         $('table.grid .grid-info td').attr('colspan', _qtyTh);*/
/*                         $('table.grid tbody tr:not(.grid-info)').each(function(){*/
/*                             var _myRow = $(this);*/
/*                             $(this).find('span.open-row').click(function(){*/
/*                                 $(_myRow).toggleClass('open-tr');*/
/*                                 $(_myRow).next().toggleClass('hide');*/
/*                             });*/
/*                         });*/
/*                         $('span.open-row-all').click(function(){*/
/*                             if( $(this).parent().hasClass("open-tr")){*/
/*                                 $(this).parent().removeClass('open-tr');*/
/*                                 $('table.grid tbody tr:not(.grid-info)').each(function(){*/
/*                                     var _myRow = $(this);*/
/*                                     $(_myRow).removeClass('open-tr');*/
/*                                     $(_myRow).next().addClass('hide');*/
/*                                 });*/
/*                             }else{*/
/*                                 $(this).parent().addClass('open-tr');*/
/*                                 $('table.grid tbody tr:not(.grid-info)').each(function(){*/
/*                                     var _myRow = $(this);*/
/*                                     $(_myRow).addClass('open-tr');*/
/*                                     $(_myRow).next().removeClass('hide');*/
/*                                 });*/
/*                             }*/
/*                         });*/
/*                         /* js for loader show *//**/
/*                         $('#open-loading').click(function(){*/
/*                             $('#loading-wrapper , #loading-frame').css({*/
/*                                 'display' : 'block'*/
/*                             })*/
/*                         });*/
/*                         $('#loading-wrapper').click(function(){*/
/*                             $('#loading-wrapper , #loading-frame').css({*/
/*                                 'display' : 'none'*/
/*                             })*/
/*                         });*/
/*                         /* js for loader show --end *//**/
/*                         /* select row *//**/
/*                             $('table.grid tbody td > input:checkbox').each(function(){*/
/*                                 if($(this).attr('checked')=='checked'){*/
/*                                     $(this).parent().parent().addClass('selected-row');*/
/*                                 }*/
/*                                 $(this).click(function(){*/
/*                                     if($(this).attr('checked')=='checked'){*/
/*                                         $(this).parent().parent().addClass('selected-row');*/
/*                                     }else{*/
/*                                         $(this).parent().parent().removeClass('selected-row');*/
/*                                     }*/
/* */
/* */
/*                                 //    $(this).parent().parent().toggleClass('selected-row');*/
/*                                 });*/
/*                             });*/
/*                         /* select row -- end*//**/
/*                         /* BE need dell after add funvctionalitu for close *//**/
/*                         $('.disable-filter').each(function(){*/
/*                             $(this).click(function(){*/
/*                                 $(this).parent().remove();*/
/*                             });*/
/*                         });*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*         </div>*/
/* */
/*     </div>*/
/* */
/*     </div>*/
/* {% endblock content %}*/
/* */
