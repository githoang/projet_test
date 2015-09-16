<?php

/* PimUIBundle::pim.requirejs.config.js.twig */
class __TwigTemplate_d12ea3193e7a9c7abc9884496f15c9c0c84dfb37a2d3b8b56752e8849e735d20 extends Twig_Template
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
        echo "require({
    paths: {
        'jquery.uniform':             'pimui/lib/jquery/jquery.uniform.min',
        'oro/navigation':             'pimnavigation/js/navigation',
        'oro/security-access-levels': 'pimuser/js/security-access-levels',
        'oro/app':                    'pimui/js/app'
    },
    map: {
        '*': {
            'oro/datagrid/abstract-action':   'pimdatagrid/js/datagrid/action/abstract-action',
            'oro/datagrid/mass-action':       'pimdatagrid/js/datagrid/action/mass-action',
            'oro/datagrid/delete-action':     'pimdatagrid/js/datagrid/action/delete-action',
            'oro/navigation/dotmenu/view':    'pimnavigation/js/navigation/dotmenu/view',
            'oro/datafilter/filters-manager': 'pimfilter/js/datafilter/filters-manager',
            'oro/datagrid/action-cell':       'pimdatagrid/js/datagrid/cell/action-cell'
        },
        'pimdatagrid/js/datagrid/action/abstract-action': {
            'oro/datagrid/abstract-action': 'oro/datagrid/abstract-action'
        },
        'pimdatagrid/js/datagrid/action/mass-action': {
            'oro/datagrid/mass-action': 'oro/datagrid/mass-action'
        },
        'pimdatagrid/js/datagrid/action/delete-action': {
            'oro/datagrid/delete-action': 'oro/datagrid/delete-action'
        },
        'pimnavigation/js/navigation/dotmenu/view': {
            'oro/navigation/dotmenu/view': 'oro/navigation/dotmenu/view'
        },
        'pimfilter/js/datafilter/filters-manager': {
            'oro/datafilter/filters-manager': 'pimfilter/js/datafilter/oro-filters-manager'
        }
    }
});
";
    }

    public function getTemplateName()
    {
        return "PimUIBundle::pim.requirejs.config.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* require({*/
/*     paths: {*/
/*         'jquery.uniform':             'pimui/lib/jquery/jquery.uniform.min',*/
/*         'oro/navigation':             'pimnavigation/js/navigation',*/
/*         'oro/security-access-levels': 'pimuser/js/security-access-levels',*/
/*         'oro/app':                    'pimui/js/app'*/
/*     },*/
/*     map: {*/
/*         '*': {*/
/*             'oro/datagrid/abstract-action':   'pimdatagrid/js/datagrid/action/abstract-action',*/
/*             'oro/datagrid/mass-action':       'pimdatagrid/js/datagrid/action/mass-action',*/
/*             'oro/datagrid/delete-action':     'pimdatagrid/js/datagrid/action/delete-action',*/
/*             'oro/navigation/dotmenu/view':    'pimnavigation/js/navigation/dotmenu/view',*/
/*             'oro/datafilter/filters-manager': 'pimfilter/js/datafilter/filters-manager',*/
/*             'oro/datagrid/action-cell':       'pimdatagrid/js/datagrid/cell/action-cell'*/
/*         },*/
/*         'pimdatagrid/js/datagrid/action/abstract-action': {*/
/*             'oro/datagrid/abstract-action': 'oro/datagrid/abstract-action'*/
/*         },*/
/*         'pimdatagrid/js/datagrid/action/mass-action': {*/
/*             'oro/datagrid/mass-action': 'oro/datagrid/mass-action'*/
/*         },*/
/*         'pimdatagrid/js/datagrid/action/delete-action': {*/
/*             'oro/datagrid/delete-action': 'oro/datagrid/delete-action'*/
/*         },*/
/*         'pimnavigation/js/navigation/dotmenu/view': {*/
/*             'oro/navigation/dotmenu/view': 'oro/navigation/dotmenu/view'*/
/*         },*/
/*         'pimfilter/js/datafilter/filters-manager': {*/
/*             'oro/datafilter/filters-manager': 'pimfilter/js/datafilter/oro-filters-manager'*/
/*         }*/
/*     }*/
/* });*/
/* */
