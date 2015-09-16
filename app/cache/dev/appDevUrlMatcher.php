<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // foody_import_product_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foody_import_product_homepage')), array (  '_controller' => 'Foody\\ImportProductBundle\\Controller\\DefaultController::indexAction',));
            }

            // foody_installer_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'foody_installer_homepage')), array (  '_controller' => 'Foody\\InstallerBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // pim_datagrid_load
            if (preg_match('#^/datagrid/(?P<alias>[^/]++)/load$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_pim_datagrid_load;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_load')), array (  '_controller' => 'pim_datagrid.controller.datagrid:loadAction',));
            }
            not_pim_datagrid_load:

            if (0 === strpos($pathinfo, '/datagrid/export')) {
                // pim_datagrid_export_index
                if ($pathinfo === '/datagrid/export/index') {
                    return array (  '_controller' => 'pim_datagrid.controller.export:indexAction',  '_route' => 'pim_datagrid_export_index',);
                }

                // pim_datagrid_export_product_index
                if ($pathinfo === '/datagrid/export/product/index') {
                    return array (  '_controller' => 'pim_datagrid.controller.product_export:indexAction',  '_route' => 'pim_datagrid_export_product_index',);
                }

            }

            if (0 === strpos($pathinfo, '/datagrid_view')) {
                // pim_datagrid_view_index
                if (preg_match('#^/datagrid_view/(?P<alias>[^/]++)(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_datagrid_view_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_index')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:indexAction',  'id' => NULL,));
                }
                not_pim_datagrid_view_index:

                // pim_datagrid_view_list_columns
                if (preg_match('#^/datagrid_view/(?P<alias>[^/]++)/columns$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_pim_datagrid_view_list_columns;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_list_columns')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:listColumnsAction',));
                }
                not_pim_datagrid_view_list_columns:

                // pim_datagrid_view_remove
                if (preg_match('#^/datagrid_view/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_datagrid_view_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_view_remove')), array (  '_controller' => 'pim_datagrid.controller.datagrid_view:removeAction',));
                }
                not_pim_datagrid_view_remove:

            }

            // pim_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_datagrid_mass_action')), array (  '_controller' => 'pim_datagrid.controller.mass_action:massActionAction',));
            }

        }

        // pim_dashboard_widget_data
        if (0 === strpos($pathinfo, '/widget') && preg_match('#^/widget/(?P<alias>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_dashboard_widget_data;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_dashboard_widget_data')), array (  '_controller' => 'pim_dashboard.controller.widget:dataAction',));
        }
        not_pim_dashboard_widget_data:

        if (0 === strpos($pathinfo, '/configuration')) {
            if (0 === strpos($pathinfo, '/configuration/attribute-group')) {
                // pim_enrich_attributegroup_index
                if (rtrim($pathinfo, '/') === '/configuration/attribute-group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pim_enrich_attributegroup_index');
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:indexAction',  '_route' => 'pim_enrich_attributegroup_index',);
                }

                // pim_enrich_attributegroup_create
                if ($pathinfo === '/configuration/attribute-group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:createAction',  '_route' => 'pim_enrich_attributegroup_create',);
                }

                // pim_enrich_attributegroup_edit
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_edit')), array (  '_controller' => 'pim_enrich.controller.attribute_group:editAction',));
                }

                // pim_enrich_attributegroup_sort
                if ($pathinfo === '/configuration/attribute-group/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attributegroup_sort;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute_group:sortAction',  '_route' => 'pim_enrich_attributegroup_sort',);
                }
                not_pim_enrich_attributegroup_sort:

                // pim_enrich_attributegroup_remove
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attributegroup_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_remove')), array (  '_controller' => 'pim_enrich.controller.attribute_group:removeAction',));
                }
                not_pim_enrich_attributegroup_remove:

                // pim_enrich_attributegroup_addattributes
                if (preg_match('#^/configuration/attribute\\-group/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attributegroup_addattributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_addattributes')), array (  '_controller' => 'pim_enrich.controller.attribute_group:addAttributesAction',));
                }
                not_pim_enrich_attributegroup_addattributes:

                // pim_enrich_attributegroup_removeattribute
                if (preg_match('#^/configuration/attribute\\-group/(?P<groupId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attributegroup_removeattribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributegroup_removeattribute')), array (  '_controller' => 'pim_enrich.controller.attribute_group:removeAttributeAction',));
                }
                not_pim_enrich_attributegroup_removeattribute:

            }

            if (0 === strpos($pathinfo, '/configuration/c')) {
                if (0 === strpos($pathinfo, '/configuration/channel')) {
                    // pim_enrich_channel_index
                    if (0 === strpos($pathinfo, '/configuration/channel/') && preg_match('#^/configuration/channel/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_index')), array (  '_controller' => 'pim_enrich.controller.channel:indexAction',  '_format' => 'html',));
                    }

                    // pim_enrich_channel_create
                    if ($pathinfo === '/configuration/channel/create') {
                        return array (  '_controller' => 'pim_enrich.controller.channel:createAction',  '_route' => 'pim_enrich_channel_create',);
                    }

                    // pim_enrich_channel_edit
                    if (preg_match('#^/configuration/channel/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_edit')), array (  '_controller' => 'pim_enrich.controller.channel:editAction',));
                    }

                    // pim_enrich_channel_remove
                    if (preg_match('#^/configuration/channel/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_channel_remove;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_channel_remove')), array (  '_controller' => 'pim_enrich.controller.channel:removeAction',));
                    }
                    not_pim_enrich_channel_remove:

                }

                if (0 === strpos($pathinfo, '/configuration/currency')) {
                    // pim_enrich_currency_index
                    if (0 === strpos($pathinfo, '/configuration/currency/') && preg_match('#^/configuration/currency/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_currency_index')), array (  '_controller' => 'pim_enrich.controller.currency:indexAction',  '_format' => 'html',));
                    }

                    // pim_enrich_currency_toggle
                    if (preg_match('#^/configuration/currency/(?P<id>\\d+)/toggle$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_currency_toggle')), array (  '_controller' => 'pim_enrich.controller.currency:toggleAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/configuration/family')) {
                // pim_enrich_family_index
                if (0 === strpos($pathinfo, '/configuration/family/') && preg_match('#^/configuration/family/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_index')), array (  '_controller' => 'pim_enrich.controller.family:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_family_create
                if ($pathinfo === '/configuration/family/create') {
                    return array (  '_controller' => 'pim_enrich.controller.family:createAction',  '_route' => 'pim_enrich_family_create',);
                }

                // pim_enrich_family_edit
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_edit')), array (  '_controller' => 'pim_enrich.controller.family:editAction',));
                }

                // pim_enrich_family_remove
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_family_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_remove')), array (  '_controller' => 'pim_enrich.controller.family:removeAction',));
                }
                not_pim_enrich_family_remove:

                // pim_enrich_family_addattributes
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_family_addattributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_addattributes')), array (  '_controller' => 'pim_enrich.controller.family:addAttributesAction',));
                }
                not_pim_enrich_family_addattributes:

                // pim_enrich_family_removeattribute
                if (preg_match('#^/configuration/family/(?P<familyId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_family_removeattribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_removeattribute')), array (  '_controller' => 'pim_enrich.controller.family:removeAttributeAction',));
                }
                not_pim_enrich_family_removeattribute:

                // pim_enrich_family_history
                if (preg_match('#^/configuration/family/(?P<id>\\d+)/history(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_family_history')), array (  '_controller' => 'pim_enrich.controller.family:historyAction',  '_format' => 'html',));
                }

            }

            // pim_enrich_locale_index
            if (rtrim($pathinfo, '/') === '/configuration/locale') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'pim_enrich_locale_index');
                }

                return array (  '_controller' => 'pim_enrich.controller.locale:indexAction',  '_route' => 'pim_enrich_locale_index',);
            }

            if (0 === strpos($pathinfo, '/configuration/attribute')) {
                // pim_enrich_attribute_index
                if (0 === strpos($pathinfo, '/configuration/attribute/') && preg_match('#^/configuration/attribute/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_index')), array (  '_controller' => 'pim_enrich.controller.attribute:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_attribute_create
                if ($pathinfo === '/configuration/attribute/create') {
                    return array (  '_controller' => 'pim_enrich.controller.attribute:createAction',  '_route' => 'pim_enrich_attribute_create',);
                }

                // pim_enrich_attribute_edit
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_edit')), array (  '_controller' => 'pim_enrich.controller.attribute:editAction',));
                }

                // pim_enrich_attribute_sort
                if ($pathinfo === '/configuration/attribute/sort') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_attribute_sort;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.attribute:sortAction',  '_route' => 'pim_enrich_attribute_sort',);
                }
                not_pim_enrich_attribute_sort:

                // pim_enrich_attribute_remove
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_attribute_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_remove')), array (  '_controller' => 'pim_enrich.controller.attribute:removeAction',));
                }
                not_pim_enrich_attribute_remove:

                // pim_enrich_attribute_create_option
                if (preg_match('#^/configuration/attribute/(?P<id>\\d+)/create\\-option/(?P<dataLocale>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attribute_create_option')), array (  '_controller' => 'pim_enrich.controller.attribute:createOptionAction',));
                }

                if (0 === strpos($pathinfo, '/configuration/attribute_option')) {
                    // pim_enrich_attributeoption_index
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_pim_enrich_attributeoption_index;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_index')), array (  '_controller' => 'pim_enrich.controller.attribute_option:indexAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_index:

                    // pim_enrich_attributeoption_create
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_pim_enrich_attributeoption_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_create')), array (  '_controller' => 'pim_enrich.controller.attribute_option:createAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_create:

                    // pim_enrich_attributeoption_update
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_pim_enrich_attributeoption_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_update:

                    // pim_enrich_attributeoption_delete
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/(?P<attributeOptionId>\\d+)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_pim_enrich_attributeoption_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_delete')), array (  '_controller' => 'pim_enrich.controller.attribute_option:deleteAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_delete:

                    // pim_enrich_attributeoption_update_sorting
                    if (preg_match('#^/configuration/attribute_option/(?P<attributeId>\\d+)/update\\-sorting$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_pim_enrich_attributeoption_update_sorting;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_attributeoption_update_sorting')), array (  '_controller' => 'pim_enrich.controller.attribute_option:updateSortingAction',  '_format' => 'json',));
                    }
                    not_pim_enrich_attributeoption_update_sorting:

                }

            }

        }

        if (0 === strpos($pathinfo, '/enrich')) {
            if (0 === strpos($pathinfo, '/enrich/category-tree')) {
                // pim_enrich_categorytree_listtree
                if (0 === strpos($pathinfo, '/enrich/category-tree/list-tree') && preg_match('#^/enrich/category\\-tree/list\\-tree\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_listtree')), array (  '_controller' => 'pim_enrich.controller.category_tree:listTreeAction',));
                }

                // pim_enrich_categorytree_movenode
                if ($pathinfo === '/enrich/category-tree/move-node') {
                    return array (  '_controller' => 'pim_enrich.controller.category_tree:moveNodeAction',  '_route' => 'pim_enrich_categorytree_movenode',);
                }

                // pim_enrich_categorytree_children
                if (0 === strpos($pathinfo, '/enrich/category-tree/children') && preg_match('#^/enrich/category\\-tree/children\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_children')), array (  '_controller' => 'pim_enrich.controller.category_tree:childrenAction',));
                }

                // pim_enrich_categorytree_index
                if (rtrim($pathinfo, '/') === '/enrich/category-tree') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'pim_enrich_categorytree_index');
                    }

                    return array (  '_controller' => 'pim_enrich.controller.category_tree:indexAction',  '_route' => 'pim_enrich_categorytree_index',);
                }

                // pim_enrich_categorytree_create
                if (0 === strpos($pathinfo, '/enrich/category-tree/create') && preg_match('#^/enrich/category\\-tree/create(?:/(?P<parent>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_create')), array (  '_controller' => 'pim_enrich.controller.category_tree:createAction',  'parent' => NULL,));
                }

                // pim_enrich_categorytree_edit
                if (preg_match('#^/enrich/category\\-tree/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_edit')), array (  '_controller' => 'pim_enrich.controller.category_tree:editAction',));
                }

                // pim_enrich_categorytree_remove
                if (preg_match('#^/enrich/category\\-tree/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_categorytree_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_categorytree_remove')), array (  '_controller' => 'pim_enrich.controller.category_tree:removeAction',));
                }
                not_pim_enrich_categorytree_remove:

            }

            if (0 === strpos($pathinfo, '/enrich/product')) {
                // pim_enrich_product_index
                if (0 === strpos($pathinfo, '/enrich/product/') && preg_match('#^/enrich/product/(?:\\.(?P<_format>html|json|csv))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_index')), array (  '_controller' => 'pim_enrich.controller.product:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_product_create
                if (0 === strpos($pathinfo, '/enrich/product/create') && preg_match('#^/enrich/product/create(?:/(?P<dataLocale>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_create')), array (  '_controller' => 'pim_enrich.controller.product:createAction',  'dataLocale' => NULL,));
                }

                // pim_enrich_product_edit
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_product_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_edit')), array (  '_controller' => 'pim_enrich.controller.product:editAction',));
                }
                not_pim_enrich_product_edit:

                // pim_enrich_product_toggle_status
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/toggle\\-status$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_product_toggle_status;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_toggle_status')), array (  '_controller' => 'pim_enrich.controller.product:toggleStatusAction',));
                }
                not_pim_enrich_product_toggle_status:

                // pim_enrich_product_update
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_update')), array (  '_controller' => 'pim_enrich.controller.product:updateAction',));
                }
                not_pim_enrich_product_update:

                // pim_enrich_product_addattributes
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_product_addattributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_addattributes')), array (  '_controller' => 'pim_enrich.controller.product_attribute:addAttributesAction',));
                }
                not_pim_enrich_product_addattributes:

                // pim_enrich_product_removeattribute
                if (preg_match('#^/enrich/product/(?P<productId>[0-9a-f]+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_product_removeattribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_removeattribute')), array (  '_controller' => 'pim_enrich.controller.product_attribute:removeAttributeAction',));
                }
                not_pim_enrich_product_removeattribute:

                // pim_enrich_product_remove
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_product_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_remove')), array (  '_controller' => 'pim_enrich.controller.product:removeAction',));
                }
                not_pim_enrich_product_remove:

                // pim_enrich_product_listcategories
                if (0 === strpos($pathinfo, '/enrich/product/list-categories/product') && preg_match('#^/enrich/product/list\\-categories/product/(?P<id>[0-9a-f]+)/parent/(?P<categoryId>\\d+)\\.(?P<_format>json)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_listcategories')), array (  '_controller' => 'pim_enrich.controller.product:listCategoriesAction',));
                }

                // pim_enrich_associations
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/associations$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_associations')), array (  '_controller' => 'pim_enrich.controller.association:associationsAction',));
                }

                // pim_enrich_product_completeness
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/completeness$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_completeness')), array (  '_controller' => 'pim_enrich.controller.completeness:completenessAction',));
                }

                // pim_enrich_product_history
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/history(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_history')), array (  '_controller' => 'pim_enrich.controller.product:historyAction',  '_format' => 'html',));
                }

                // pim_enrich_product_comments
                if (preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/comments(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_product_comments')), array (  '_controller' => 'pim_enrich.controller.product_comment:listCommentsAction',  '_format' => 'html',));
                }

            }

            if (0 === strpos($pathinfo, '/enrich/mass-edit-action')) {
                // pim_enrich_mass_edit_action_choose
                if ($pathinfo === '/enrich/mass-edit-action/choose') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_mass_edit_action_choose;
                    }

                    return array (  '_controller' => 'pim_enrich.controller.mass_edit_action:chooseAction',  '_route' => 'pim_enrich_mass_edit_action_choose',);
                }
                not_pim_enrich_mass_edit_action_choose:

                // pim_enrich_mass_edit_action_configure
                if (preg_match('#^/enrich/mass\\-edit\\-action/(?P<operationAlias>[^/]++)/configure$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_pim_enrich_mass_edit_action_configure;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_mass_edit_action_configure')), array (  '_controller' => 'pim_enrich.controller.mass_edit_action:configureAction',));
                }
                not_pim_enrich_mass_edit_action_configure:

                // pim_enrich_mass_edit_action_perform
                if (preg_match('#^/enrich/mass\\-edit\\-action/(?P<operationAlias>[^/]++)/perform$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_mass_edit_action_perform;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_mass_edit_action_perform')), array (  '_controller' => 'pim_enrich.controller.mass_edit_action:performAction',));
                }
                not_pim_enrich_mass_edit_action_perform:

            }

            if (0 === strpos($pathinfo, '/enrich/variant-group')) {
                // pim_enrich_variant_group_index
                if (0 === strpos($pathinfo, '/enrich/variant-group/') && preg_match('#^/enrich/variant\\-group/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_index')), array (  '_controller' => 'pim_enrich.controller.variant_group:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_variant_group_create
                if ($pathinfo === '/enrich/variant-group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.variant_group:createAction',  '_route' => 'pim_enrich_variant_group_create',);
                }

                // pim_enrich_variant_group_edit
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_edit')), array (  '_controller' => 'pim_enrich.controller.variant_group:editAction',));
                }

                // pim_enrich_variant_group_remove
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_variant_group_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_remove')), array (  '_controller' => 'pim_enrich.controller.variant_group:removeAction',));
                }
                not_pim_enrich_variant_group_remove:

                // pim_enrich_variant_group_add_attributes
                if (preg_match('#^/enrich/variant\\-group/(?P<id>\\d+)/attributes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_pim_enrich_variant_group_add_attributes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_add_attributes')), array (  '_controller' => 'pim_enrich.controller.variant_group_attribute:addAttributesAction',));
                }
                not_pim_enrich_variant_group_add_attributes:

                // pim_enrich_variant_group_remove_attribute
                if (preg_match('#^/enrich/variant\\-group/(?P<groupId>\\d+)/attribute/(?P<attributeId>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_variant_group_remove_attribute;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_variant_group_remove_attribute')), array (  '_controller' => 'pim_enrich.controller.variant_group_attribute:removeAttributeAction',));
                }
                not_pim_enrich_variant_group_remove_attribute:

            }

            if (0 === strpos($pathinfo, '/enrich/group')) {
                // pim_enrich_group_index
                if (0 === strpos($pathinfo, '/enrich/group/') && preg_match('#^/enrich/group/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_index')), array (  '_controller' => 'pim_enrich.controller.group:indexAction',  '_format' => 'html',));
                }

                // pim_enrich_group_create
                if ($pathinfo === '/enrich/group/create') {
                    return array (  '_controller' => 'pim_enrich.controller.group:createAction',  '_route' => 'pim_enrich_group_create',);
                }

                // pim_enrich_group_edit
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_edit')), array (  '_controller' => 'pim_enrich.controller.group:editAction',));
                }

                // pim_enrich_group_remove
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_pim_enrich_group_remove;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_remove')), array (  '_controller' => 'pim_enrich.controller.group:removeAction',));
                }
                not_pim_enrich_group_remove:

                // pim_enrich_group_productlist
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/productlist$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_productlist')), array (  '_controller' => 'pim_enrich.controller.group:productListAction',));
                }

                // pim_enrich_group_history
                if (preg_match('#^/enrich/group/(?P<id>\\d+)/history(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_history')), array (  '_controller' => 'pim_enrich.controller.group:historyAction',  '_format' => 'html',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/configuration/association-type')) {
            // pim_enrich_association_type_index
            if (0 === strpos($pathinfo, '/configuration/association-type/') && preg_match('#^/configuration/association\\-type/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_association_type_index')), array (  '_controller' => 'pim_enrich.controller.association_type:indexAction',  '_format' => 'html',));
            }

            // pim_enrich_association_type_create
            if ($pathinfo === '/configuration/association-type/create') {
                return array (  '_controller' => 'pim_enrich.controller.association_type:createAction',  '_route' => 'pim_enrich_association_type_create',);
            }

            // pim_enrich_association_type_edit
            if (preg_match('#^/configuration/association\\-type/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_association_type_edit')), array (  '_controller' => 'pim_enrich.controller.association_type:editAction',));
            }

            // pim_enrich_association_type_remove
            if (preg_match('#^/configuration/association\\-type/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_enrich_association_type_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_association_type_remove')), array (  '_controller' => 'pim_enrich.controller.association_type:removeAction',));
            }
            not_pim_enrich_association_type_remove:

        }

        // pim_enrich_media_show
        if (0 === strpos($pathinfo, '/media') && preg_match('#^/media/(?P<filename>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_media_show')), array (  '_controller' => 'pim_enrich.controller.media:showAction',));
        }

        if (0 === strpos($pathinfo, '/configuration/group-type')) {
            // pim_enrich_group_type_index
            if (0 === strpos($pathinfo, '/configuration/group-type/') && preg_match('#^/configuration/group\\-type/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_type_index')), array (  '_controller' => 'pim_enrich.controller.group_type:indexAction',  '_format' => 'html',));
            }

            // pim_enrich_group_type_create
            if ($pathinfo === '/configuration/group-type/create') {
                return array (  '_controller' => 'pim_enrich.controller.group_type:createAction',  '_route' => 'pim_enrich_group_type_create',);
            }

            // pim_enrich_group_type_edit
            if (preg_match('#^/configuration/group\\-type/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_type_edit')), array (  '_controller' => 'pim_enrich.controller.group_type:editAction',));
            }

            // pim_enrich_group_type_remove
            if (preg_match('#^/configuration/group\\-type/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_enrich_group_type_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_enrich_group_type_remove')), array (  '_controller' => 'pim_enrich.controller.group_type:removeAction',));
            }
            not_pim_enrich_group_type_remove:

        }

        // pim_enrich_mass_edit_action_sequential_edit
        if (rtrim($pathinfo, '/') === '/enrich/sequential_edit') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_pim_enrich_mass_edit_action_sequential_edit;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pim_enrich_mass_edit_action_sequential_edit');
            }

            return array (  '_controller' => 'pim_enrich.controller.sequential_edit:sequentialEditAction',  '_route' => 'pim_enrich_mass_edit_action_sequential_edit',);
        }
        not_pim_enrich_mass_edit_action_sequential_edit:

        // pim_ui_ajaxentity_list
        if ($pathinfo === '/list.json') {
            return array (  '_controller' => 'pim_ui.controller.ajax_option:listAction',  '_format' => 'json',  '_route' => 'pim_ui_ajaxentity_list',);
        }

        if (0 === strpos($pathinfo, '/spread/export')) {
            // pim_importexport_export_profile_index
            if (0 === strpos($pathinfo, '/spread/export/') && preg_match('#^/spread/export/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_index')), array (  '_controller' => 'pim_import_export.controller.export_profile:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_export_profile_create
            if ($pathinfo === '/spread/export/create') {
                return array (  '_controller' => 'pim_import_export.controller.export_profile:createAction',  '_route' => 'pim_importexport_export_profile_create',);
            }

            // pim_importexport_export_profile_show
            if (preg_match('#^/spread/export/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_show')), array (  '_controller' => 'pim_import_export.controller.export_profile:showAction',));
            }

            // pim_importexport_export_profile_edit
            if (preg_match('#^/spread/export/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_edit')), array (  '_controller' => 'pim_import_export.controller.export_profile:editAction',));
            }

            // pim_importexport_export_profile_remove
            if (preg_match('#^/spread/export/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_importexport_export_profile_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_remove')), array (  '_controller' => 'pim_import_export.controller.export_profile:removeAction',));
            }
            not_pim_importexport_export_profile_remove:

            // pim_importexport_export_profile_report
            if (preg_match('#^/spread/export/(?P<id>\\d+)/reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_report')), array (  '_controller' => 'pim_import_export.controller.export_profile:reportAction',));
            }

            // pim_importexport_export_profile_launch
            if (preg_match('#^/spread/export/(?P<id>\\d+)/launch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_profile_launch')), array (  '_controller' => 'pim_import_export.controller.export_profile:launchAction',));
            }

        }

        if (0 === strpos($pathinfo, '/collect/import')) {
            // pim_importexport_import_profile_index
            if (0 === strpos($pathinfo, '/collect/import/') && preg_match('#^/collect/import/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_index')), array (  '_controller' => 'pim_import_export.controller.import_profile:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_import_profile_create
            if ($pathinfo === '/collect/import/create') {
                return array (  '_controller' => 'pim_import_export.controller.import_profile:createAction',  '_route' => 'pim_importexport_import_profile_create',);
            }

            // pim_importexport_import_profile_show
            if (preg_match('#^/collect/import/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_show')), array (  '_controller' => 'pim_import_export.controller.import_profile:showAction',));
            }

            // pim_importexport_import_profile_edit
            if (preg_match('#^/collect/import/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_edit')), array (  '_controller' => 'pim_import_export.controller.import_profile:editAction',));
            }

            // pim_importexport_import_profile_remove
            if (preg_match('#^/collect/import/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_importexport_import_profile_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_remove')), array (  '_controller' => 'pim_import_export.controller.import_profile:removeAction',));
            }
            not_pim_importexport_import_profile_remove:

            // pim_importexport_import_profile_report
            if (preg_match('#^/collect/import/(?P<id>\\d+)/reports$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_report')), array (  '_controller' => 'pim_import_export.controller.import_profile:reportAction',));
            }

            // pim_importexport_import_profile_launch
            if (preg_match('#^/collect/import/(?P<id>\\d+)/launch$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_launch')), array (  '_controller' => 'pim_import_export.controller.import_profile:launchAction',));
            }

            // pim_importexport_import_profile_launch_upload
            if (preg_match('#^/collect/import/(?P<id>\\d+)/launch\\-upload$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_profile_launch_upload')), array (  '_controller' => 'pim_import_export.controller.import_profile:launchUploadedAction',));
            }

            if (0 === strpos($pathinfo, '/collect/import_execution')) {
                // pim_importexport_import_execution_index
                if (0 === strpos($pathinfo, '/collect/import_execution/') && preg_match('#^/collect/import_execution/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_index')), array (  '_controller' => 'pim_import_export.controller.import_execution:indexAction',  '_format' => 'html',));
                }

                // pim_importexport_import_execution_download_log
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadLogFileAction',));
                }

                // pim_importexport_import_execution_show
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_show')), array (  '_controller' => 'pim_import_export.controller.import_execution:showAction',  '_format' => 'html',));
                }

                // pim_importexport_import_execution_download_file
                if (preg_match('#^/collect/import_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_import_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.import_execution:downloadFilesAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/spread/export_execution')) {
            // pim_importexport_export_execution_index
            if (0 === strpos($pathinfo, '/spread/export_execution/') && preg_match('#^/spread/export_execution/(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_index')), array (  '_controller' => 'pim_import_export.controller.export_execution:indexAction',  '_format' => 'html',));
            }

            // pim_importexport_export_execution_download_log
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_log')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadLogFileAction',));
            }

            // pim_importexport_export_execution_show
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_show')), array (  '_controller' => 'pim_import_export.controller.export_execution:showAction',  '_format' => 'html',));
            }

            // pim_importexport_export_execution_download_file
            if (preg_match('#^/spread/export_execution/(?P<id>\\d+)/download/(?P<archiver>[^/]++)/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_importexport_export_execution_download_file')), array (  '_controller' => 'pim_import_export.controller.export_execution:downloadFilesAction',));
            }

        }

        // oro_api_get_product
        if (0 === strpos($pathinfo, '/api/rest/products') && preg_match('#^/api/rest/products/(?P<identifier>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_oro_api_get_product;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_product')), array (  '_controller' => 'Pim\\Bundle\\WebServiceBundle\\Controller\\Rest\\ProductController::getAction',  '_format' => 'json',));
        }
        not_oro_api_get_product:

        if (0 === strpos($pathinfo, '/comment')) {
            // pim_comment_comment_create
            if ($pathinfo === '/comment/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pim_comment_comment_create;
                }

                return array (  '_controller' => 'pim_comment.controller.comment:createAction',  '_route' => 'pim_comment_comment_create',);
            }
            not_pim_comment_comment_create:

            // pim_comment_comment_reply
            if ($pathinfo === '/comment/reply') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_pim_comment_comment_reply;
                }

                return array (  '_controller' => 'pim_comment.controller.comment:replyAction',  '_route' => 'pim_comment_comment_reply',);
            }
            not_pim_comment_comment_reply:

            // pim_comment_comment_delete
            if (preg_match('#^/comment/(?P<id>\\d+)/remove$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_comment_comment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_comment_comment_delete')), array (  '_controller' => 'pim_comment.controller.comment:deleteAction',));
            }
            not_pim_comment_comment_delete:

        }

        // pim_pdf_generator_download_product_pdf
        if (0 === strpos($pathinfo, '/enrich/product') && preg_match('#^/enrich/product/(?P<id>[0-9a-f]+)/download\\-pdf$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_pim_pdf_generator_download_product_pdf;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_pdf_generator_download_product_pdf')), array (  '_controller' => 'pim_pdf_generator.controller.product:downloadPdfAction',));
        }
        not_pim_pdf_generator_download_product_pdf:

        if (0 === strpos($pathinfo, '/notification')) {
            // pim_notification_notification_list
            if ($pathinfo === '/notification/list') {
                return array (  '_controller' => 'pim_notification.controller.notification:listAction',  '_format' => 'json',  '_route' => 'pim_notification_notification_list',);
            }

            // pim_notification_notification_count_unread
            if ($pathinfo === '/notification/count_unread') {
                return array (  '_controller' => 'pim_notification.controller.notification:countUnreadAction',  '_format' => 'json',  '_route' => 'pim_notification_notification_count_unread',);
            }

            // pim_notification_notification_mark_viewed
            if (0 === strpos($pathinfo, '/notification/mark_viewed') && preg_match('#^/notification/mark_viewed(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pim_notification_notification_mark_viewed;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_mark_viewed')), array (  '_controller' => 'pim_notification.controller.notification:markAsViewedAction',  '_format' => 'json',  'id' => NULL,));
            }
            not_pim_notification_notification_mark_viewed:

            // pim_notification_notification_remove
            if (0 === strpos($pathinfo, '/notification/remove') && preg_match('#^/notification/remove/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_pim_notification_notification_remove;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pim_notification_notification_remove')), array (  '_controller' => 'pim_notification.controller.notification:removeAction',  '_format' => 'json',));
            }
            not_pim_notification_notification_remove:

        }

        // oro_default
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'oro_default');
            }

            return array (  'template' => 'PimDashboardBundle:Dashboard:index.html.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'oro_default',);
        }

        if (0 === strpos($pathinfo, '/ui')) {
            // oro_ui_index
            if ($pathinfo === '/ui') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:index.html.twig',  '_route' => 'oro_ui_index',);
            }

            if (0 === strpos($pathinfo, '/ui/1column')) {
                // oro_ui_1column
                if ($pathinfo === '/ui/1column') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumn.html.twig',  '_route' => 'oro_ui_1column',);
                }

                if (0 === strpos($pathinfo, '/ui/1column-')) {
                    // oro_ui_1column_menu
                    if ($pathinfo === '/ui/1column-menu') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnMenu.html.twig',  '_route' => 'oro_ui_1column_menu',);
                    }

                    // oro_ui_1column_toolbar
                    if ($pathinfo === '/ui/1column-toolbar') {
                        return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:oneColumnWithToolbar.html.twig',  '_route' => 'oro_ui_1column_toolbar',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ui/2columns-')) {
                // oro_ui_2columns_left
                if ($pathinfo === '/ui/2columns-left') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnLeft.html.twig',  '_route' => 'oro_ui_2columns_left',);
                }

                // oro_ui_2columns_right
                if ($pathinfo === '/ui/2columns-right') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:twoColumnRight.html.twig',  '_route' => 'oro_ui_2columns_right',);
                }

            }

            // oro_ui_3columns
            if ($pathinfo === '/ui/3columns') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:threeColumn.html.twig',  '_route' => 'oro_ui_3columns',);
            }

            // oro_ui_forgot_password
            if ($pathinfo === '/ui/forgot-password') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:forgotPassword.html.twig',  '_route' => 'oro_ui_forgot_password',);
            }

            // oro_ui_login
            if ($pathinfo === '/ui/login') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:loginPage.html.twig',  '_route' => 'oro_ui_login',);
            }

            // oro_ui_registration
            if ($pathinfo === '/ui/registration') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:registrationPage.html.twig',  '_route' => 'oro_ui_registration',);
            }

            // oro_ui_404
            if ($pathinfo === '/ui/404') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page404.html.twig',  '_route' => 'oro_ui_404',);
            }

            // oro_ui_503
            if ($pathinfo === '/ui/503') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:Page503.html.twig',  '_route' => 'oro_ui_503',);
            }

            // oro_ui_form_elements
            if ($pathinfo === '/ui/form-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formElements.html.twig',  '_route' => 'oro_ui_form_elements',);
            }

            // oro_ui_messages
            if ($pathinfo === '/ui/messages') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:systemMessages.html.twig',  '_route' => 'oro_ui_messages',);
            }

            // oro_ui_buttons
            if ($pathinfo === '/ui/buttons') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:buttonsPage.html.twig',  '_route' => 'oro_ui_buttons',);
            }

            // oro_ui_tables
            if ($pathinfo === '/ui/tables') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:tablesPage.html.twig',  '_route' => 'oro_ui_tables',);
            }

            // oro_ui_general_elements
            if ($pathinfo === '/ui/general-elements') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:generalElements.html.twig',  '_route' => 'oro_ui_general_elements',);
            }

            // oro_ui_dialog_styled
            if ($pathinfo === '/ui/dialog-styled') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:dialogStyledPage.html.twig',  '_route' => 'oro_ui_dialog_styled',);
            }

            if (0 === strpos($pathinfo, '/ui/grid-page')) {
                // oro_ui_grid_page
                if ($pathinfo === '/ui/grid-page') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPage.html.twig',  '_route' => 'oro_ui_grid_page',);
                }

                // oro_ui_grid_without_bar_page
                if ($pathinfo === '/ui/grid-page-withoutabr') {
                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:gridPageWithoutBar.html.twig',  '_route' => 'oro_ui_grid_without_bar_page',);
                }

            }

            // oro_ui_record_edit
            if ($pathinfo === '/ui/record-edit') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:RecordEdit.html.twig',  '_route' => 'oro_ui_record_edit',);
            }

            // oro_ui_title_bar
            if ($pathinfo === '/ui/entity-title-bar') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:EntityTitleBar.html.twig',  '_route' => 'oro_ui_title_bar',);
            }

            // oro_ui_form_horizontal
            if ($pathinfo === '/ui/form-horizontal') {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroUIBundle:Default:formHorizontal.html.twig',  '_route' => 'oro_ui_form_horizontal',);
            }

        }

        // oro_config_configuration_system
        if (0 === strpos($pathinfo, '/config/system') && preg_match('#^/config/system(?:/(?P<activeGroup>[^/]++)(?:/(?P<activeSubGroup>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_config_configuration_system')), array (  'activeGroup' => NULL,  'activeSubGroup' => NULL,  '_controller' => 'Oro\\Bundle\\ConfigBundle\\Controller\\ConfigurationController::systemAction',));
        }

        if (0 === strpos($pathinfo, '/datagrid')) {
            // oro_datagrid_index
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_index')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::getAction',));
            }

            // oro_datagrid_mass_action
            if (preg_match('#^/datagrid/(?P<gridName>[^/]++)/massAction/(?P<actionName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_datagrid_mass_action')), array (  '_controller' => 'Oro\\Bundle\\DataGridBundle\\Controller\\GridController::massActionAction',));
            }

        }

        if (0 === strpos($pathinfo, '/email')) {
            // oro_email_api_rest_emailtemplate_getavailablevariables
            if (rtrim($pathinfo, '/') === '/email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_email_api_rest_emailtemplate_getavailablevariables;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'oro_email_api_rest_emailtemplate_getavailablevariables');
                }

                return array (  'entityName' => NULL,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAvailableVariablesAction',  '_route' => 'oro_email_api_rest_emailtemplate_getavailablevariables',);
            }
            not_oro_email_api_rest_emailtemplate_getavailablevariables:

            // oro_email_view
            if (0 === strpos($pathinfo, '/email/view') && preg_match('#^/email/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_view')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::viewAction',));
            }

            // oro_email_email_create
            if ($pathinfo === '/email/create') {
                return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::createAction',  '_route' => 'oro_email_email_create',);
            }

            // oro_email_body
            if (0 === strpos($pathinfo, '/email/body') && preg_match('#^/email/body/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_body')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::bodyAction',));
            }

            // oro_email_attachment
            if (0 === strpos($pathinfo, '/email/attachment') && preg_match('#^/email/attachment/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_attachment')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailController::attachmentAction',));
            }

            if (0 === strpos($pathinfo, '/email/emailtemplate')) {
                // oro_email_emailtemplate_index
                if (preg_match('#^/email/emailtemplate(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::indexAction',));
                }

                // oro_email_emailtemplate_update
                if (0 === strpos($pathinfo, '/email/emailtemplate/update') && preg_match('#^/email/emailtemplate/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_update')), array (  'id' => 0,  'isClone' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/email/emailtemplate/c')) {
                    // oro_email_emailtemplate_create
                    if ($pathinfo === '/email/emailtemplate/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::createAction',  '_route' => 'oro_email_emailtemplate_create',);
                    }

                    // oro_email_emailtemplate_clone
                    if (0 === strpos($pathinfo, '/email/emailtemplate/clone') && preg_match('#^/email/emailtemplate/clone(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_clone')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::cloneAction',));
                    }

                }

                // oro_email_emailtemplate_preview
                if (0 === strpos($pathinfo, '/email/emailtemplate/preview') && preg_match('#^/email/emailtemplate/preview(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_email_emailtemplate_preview')), array (  'id' => 0,  'emailTemplateId' => false,  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\EmailTemplateController::previewAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_email
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_email;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_email')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_email:

            // oro_api_get_emails
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emails(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emails;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emails')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emails:

            // oro_api_delete_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_emailtemplate:

            // oro_api_get_emailtemplate
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<entityName>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate:

            // oro_api_get_emailtemplate_available_variables
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/emailtemplates/(?P<entityName>(.*))/available/variables(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_emailtemplate_available_variables;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_emailtemplate_available_variables')), array (  '_controller' => 'Oro\\Bundle\\EmailBundle\\Controller\\Api\\Rest\\EmailTemplateController::getAvailableVariablesAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_emailtemplate_available_variables:

        }

        if (0 === strpos($pathinfo, '/entity')) {
            // oro_entity_index
            if (preg_match('#^/entity(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_index')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::indexAction',));
            }

            // oro_entity_detailed
            if (0 === strpos($pathinfo, '/entity/detailed') && preg_match('#^/entity/detailed(?:/(?P<id>[^/]++)(?:/(?P<className>[^/]++)(?:/(?P<fieldName>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_detailed')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::detailedAction',));
            }

            // oro_entity_relation
            if (0 === strpos($pathinfo, '/entity/relation') && preg_match('#^/entity/relation(?:/(?P<id>[^/]++)(?:/(?P<className>[^/]++)(?:/(?P<fieldName>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_relation')), array (  'id' => 0,  'className' => '',  'fieldName' => '',  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::relationAction',));
            }

            // oro_entity_view
            if (0 === strpos($pathinfo, '/entity/view') && preg_match('#^/entity/view/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_view')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::viewAction',));
            }

            // oro_entity_update
            if (0 === strpos($pathinfo, '/entity/update') && preg_match('#^/entity/update/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_update')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::updateAction',));
            }

            // oro_entity_delete
            if (0 === strpos($pathinfo, '/entity/delete') && preg_match('#^/entity/delete/(?P<entity_id>[^/]++)/item(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entity_delete')), array (  'entity_id' => 0,  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\EntitiesController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_get_entities
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/entities(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entities;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entities')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entities:

            // oro_api_get_entity_fields
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/entities/(?P<entityName>((\\w+)_)+(\\w+))/fields(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_entity_fields;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_entity_fields')), array (  '_controller' => 'Oro\\Bundle\\EntityBundle\\Controller\\Api\\Rest\\EntityFieldController::getFieldsAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_entity_fields:

        }

        if (0 === strpos($pathinfo, '/entity')) {
            if (0 === strpos($pathinfo, '/entity/config')) {
                if (0 === strpos($pathinfo, '/entity/config/audit')) {
                    // oro_entityconfig_audit
                    if (preg_match('#^/entity/config/audit(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditAction',));
                    }

                    // oro_entityconfig_audit_field
                    if (0 === strpos($pathinfo, '/entity/config/audit_field') && preg_match('#^/entity/config/audit_field(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_audit_field')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\AuditController::auditFieldAction',));
                    }

                }

                // oro_entityconfig_index
                if (rtrim($pathinfo, '/') === '/entity/config') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_entityconfig_index');
                    }

                    return array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::indexAction',  '_route' => 'oro_entityconfig_index',);
                }

                // oro_entityconfig_update
                if (0 === strpos($pathinfo, '/entity/config/update') && preg_match('#^/entity/config/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::updateAction',));
                }

                // oro_entityconfig_view
                if (0 === strpos($pathinfo, '/entity/config/view') && preg_match('#^/entity/config/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_view')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::viewAction',));
                }

                if (0 === strpos($pathinfo, '/entity/config/field')) {
                    // oro_entityconfig_fields
                    if (0 === strpos($pathinfo, '/entity/config/fields') && preg_match('#^/entity/config/fields(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_fields')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldsAction',));
                    }

                    // oro_entityconfig_field_update
                    if (0 === strpos($pathinfo, '/entity/config/field/update') && preg_match('#^/entity/config/field/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_update')), array (  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldUpdateAction',));
                    }

                    // oro_entityconfig_field_search
                    if (0 === strpos($pathinfo, '/entity/config/field/search') && preg_match('#^/entity/config/field/search(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityconfig_field_search')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityConfigBundle\\Controller\\ConfigController::fieldSearchAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/entity/extend')) {
                // oro_entityextend_update
                if (0 === strpos($pathinfo, '/entity/extend/update') && preg_match('#^/entity/extend/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ApplyController::updateAction',));
                }

                if (0 === strpos($pathinfo, '/entity/extend/entity')) {
                    // oro_entityextend_entity_unique_key
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unique-key') && preg_match('#^/entity/extend/entity/unique\\-key(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unique_key')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::uniqueAction',));
                    }

                    // oro_entityextend_entity_create
                    if ($pathinfo === '/entity/extend/entity/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::createAction',  '_route' => 'oro_entityextend_entity_create',);
                    }

                    // oro_entityextend_entity_remove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/remove') && preg_match('#^/entity/extend/entity/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::removeAction',));
                    }

                    // oro_entityextend_entity_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/entity/unremove') && preg_match('#^/entity/extend/entity/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_entity_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigEntityGridController::unremoveAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/entity/extend/field')) {
                    // oro_entityextend_field_create
                    if (0 === strpos($pathinfo, '/entity/extend/field/create') && preg_match('#^/entity/extend/field/create(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_create')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::createAction',));
                    }

                    // oro_entityextend_field_update
                    if (0 === strpos($pathinfo, '/entity/extend/field/update') && preg_match('#^/entity/extend/field/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::updateAction',));
                    }

                    // oro_entityextend_field_remove
                    if (0 === strpos($pathinfo, '/entity/extend/field/remove') && preg_match('#^/entity/extend/field/remove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_remove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::removeAction',));
                    }

                    // oro_entityextend_field_unremove
                    if (0 === strpos($pathinfo, '/entity/extend/field/unremove') && preg_match('#^/entity/extend/field/unremove(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_entityextend_field_unremove')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\EntityExtendBundle\\Controller\\ConfigFieldGridController::unremoveAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/autocomplete')) {
            // oro_form_autocomplete_config
            if ($pathinfo === '/autocomplete/config') {
                return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::configAction',  '_route' => 'oro_form_autocomplete_config',);
            }

            // oro_form_autocomplete_search
            if ($pathinfo === '/autocomplete/search') {
                return array (  '_controller' => 'Oro\\Bundle\\FormBundle\\Controller\\AutocompleteController::searchAction',  '_route' => 'oro_form_autocomplete_search',);
            }

        }

        if (0 === strpos($pathinfo, '/installer')) {
            // oro_installer_flow
            if ($pathinfo === '/installer') {
                return array (  '_controller' => 'sylius.controller.process:startAction',  'scenarioAlias' => 'oro_installer',  '_route' => 'oro_installer_flow',);
            }

            if (0 === strpos($pathinfo, '/installer/flow')) {
                // sylius_flow_start
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_start')), array (  '_controller' => 'sylius.controller.process:startAction',));
                }

                // sylius_flow_display
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_display')), array (  '_controller' => 'sylius.controller.process:displayAction',));
                }

                // sylius_flow_forward
                if (preg_match('#^/installer/flow/(?P<scenarioAlias>[^/]++)/(?P<stepName>[^/]++)/forward$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sylius_flow_forward')), array (  '_controller' => 'sylius.controller.process:forwardAction',));
                }

            }

        }

        // oro_shortcut_actionslist
        if ($pathinfo === '/shortcutactionslist') {
            return array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\ShortcutController::actionslistAction',  '_route' => 'oro_shortcut_actionslist',);
        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::deleteIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_navigationitems_id:

            // oro_api_get_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_navigationitems:

            // oro_api_post_navigationitems
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_navigationitems;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_navigationitems')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_navigationitems:

            // oro_api_put_navigationitems_id
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/navigationitems/(?P<type>[^/]++)/ids/(?P<itemId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_navigationitems_id;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_navigationitems_id')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\NavigationItemController::putIdAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_navigationitems_id:

            // oro_api_get_shortcuts
            if (preg_match('#^/api/rest/(?P<version>latest|v1)/shortcuts/(?P<query>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_shortcuts;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_shortcuts')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\ShortcutsController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_shortcuts:

            // oro_api_delete_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_pagestate:

            // oro_api_get_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate:

            // oro_api_get_pagestate_checkid
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestate/checkid(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestate_checkid;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestate_checkid')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::getCheckidAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestate_checkid:

            // oro_api_get_pagestates
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_pagestates;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_pagestates')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_pagestates:

            // oro_api_post_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestate(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_pagestate:

            // oro_api_put_pagestate
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/pagestates/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_pagestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_pagestate')), array (  '_controller' => 'Oro\\Bundle\\NavigationBundle\\Controller\\Api\\PagestateController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_pagestate:

        }

        // oro_pinbar_help
        if ($pathinfo === '/pinbar/help') {
            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => 'OroNavigationBundle:Pinbar:help.html.twig',  '_route' => 'oro_pinbar_help',);
        }

        if (0 === strpos($pathinfo, '/organization/business_unit')) {
            // oro_business_unit_create
            if ($pathinfo === '/organization/business_unit/create') {
                return array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::createAction',  '_route' => 'oro_business_unit_create',);
            }

            // oro_business_unit_view
            if (0 === strpos($pathinfo, '/organization/business_unit/view') && preg_match('#^/organization/business_unit/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_view')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewAction',));
            }

            // oro_business_unit_update
            if (0 === strpos($pathinfo, '/organization/business_unit/update') && preg_match('#^/organization/business_unit/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateAction',));
            }

            // oro_business_unit_index
            if (preg_match('#^/organization/business_unit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_unit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::indexAction',));
            }

            // oro_business_update_unit_user_grid
            if (0 === strpos($pathinfo, '/organization/business_unit/update_grid') && preg_match('#^/organization/business_unit/update_grid(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_update_unit_user_grid')), array (  'id' => 0,  '_format' => 'json',  'entity' => NULL,  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::updateGridDataAction',));
            }

            // oro_business_view_unit_user_grid
            if (0 === strpos($pathinfo, '/organization/business_unit/view_grid') && preg_match('#^/organization/business_unit/view_grid/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_business_view_unit_user_grid')), array (  '_format' => 'json',  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\BusinessUnitController::viewGridDataAction',));
            }

        }

        if (0 === strpos($pathinfo, '/api/rest')) {
            // oro_api_delete_businessunit
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_oro_api_delete_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_delete_businessunit:

            // oro_api_get_businessunit
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::getAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunit:

            // oro_api_get_businessunits
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/businessunits(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_api_get_businessunits;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_businessunits')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_get_businessunits:

            // oro_api_post_businessunit
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/businessunit(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_api_post_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::postAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_post_businessunit:

            // oro_api_put_businessunit
            if (preg_match('#^/api/rest/(?P<version>[^/]++)/businessunits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_oro_api_put_businessunit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_businessunit')), array (  '_controller' => 'Oro\\Bundle\\OrganizationBundle\\Controller\\Api\\Rest\\BusinessUnitController::putAction',  '_format' => 'json',  'version' => 'latest',));
            }
            not_oro_api_put_businessunit:

        }

        // oro_security_access_levels
        if (0 === strpos($pathinfo, '/security/acl-access-levels') && preg_match('#^/security/acl\\-access\\-levels/(?P<oid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_security_access_levels')), array (  '_controller' => 'Oro\\Bundle\\SecurityBundle\\Controller\\AclPermissionController::aclAccessLevelsAction',));
        }

        // oro_translation_jstranslation
        if (0 === strpos($pathinfo, '/js/translation') && preg_match('#^/js/translation/(?P<_locale>[^/\\.]++)\\.js$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_translation_jstranslation')), array (  '_controller' => 'oro_translation.controller:indexAction',));
        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/group')) {
                // oro_user_group_create
                if ($pathinfo === '/user/group/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'oro_user_group_create',);
                }

                // oro_user_group_update
                if (0 === strpos($pathinfo, '/user/group/update') && preg_match('#^/user/group/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::updateAction',));
                }

                // oro_user_group_user_grid
                if (0 === strpos($pathinfo, '/user/group/grid') && preg_match('#^/user/group/grid(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_user_grid')), array (  'id' => 0,  '_format' => 'json',  'entity' => NULL,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::gridDataAction',));
                }

                // oro_user_group_index
                if (preg_match('#^/user/group(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_group_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\GroupController::indexAction',));
                }

            }

            // oro_user_reset_request
            if ($pathinfo === '/user/reset-request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_request;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::requestAction',  '_route' => 'oro_user_reset_request',);
            }
            not_oro_user_reset_request:

            // oro_user_reset_send_email
            if ($pathinfo === '/user/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_oro_user_reset_send_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::sendEmailAction',  '_route' => 'oro_user_reset_send_email',);
            }
            not_oro_user_reset_send_email:

            // oro_user_reset_check_email
            if ($pathinfo === '/user/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_oro_user_reset_check_email;
                }

                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::checkEmailAction',  '_route' => 'oro_user_reset_check_email',);
            }
            not_oro_user_reset_check_email:

            if (0 === strpos($pathinfo, '/user/r')) {
                // oro_user_reset_reset
                if (0 === strpos($pathinfo, '/user/reset') && preg_match('#^/user/reset/(?P<token>\\w+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_oro_user_reset_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_reset_reset')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\ResetController::resetAction',));
                }
                not_oro_user_reset_reset:

                if (0 === strpos($pathinfo, '/user/role')) {
                    // oro_user_role_create
                    if ($pathinfo === '/user/role/create') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'oro_user_role_create',);
                    }

                    // oro_user_role_update
                    if (0 === strpos($pathinfo, '/user/role/update') && preg_match('#^/user/role/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::updateAction',));
                    }

                    // oro_user_role_user_grid
                    if (0 === strpos($pathinfo, '/user/role/grid') && preg_match('#^/user/role/grid(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_user_grid')), array (  'id' => 0,  '_format' => 'json',  'entity' => NULL,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::gridDataAction',));
                    }

                    // oro_user_role_index
                    if (preg_match('#^/user/role(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_role_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\RoleController::indexAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // oro_user_security_login
                    if ($pathinfo === '/user/login') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'oro_user_security_login',);
                    }

                    // oro_user_security_check
                    if ($pathinfo === '/user/login-check') {
                        return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'oro_user_security_check',);
                    }

                }

                // oro_user_security_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'oro_user_security_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/status')) {
                // oro_user_status_list
                if (rtrim($pathinfo, '/') === '/user/status') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'oro_user_status_list');
                    }

                    return array (  'limit' => 10,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::indexAction',  '_route' => 'oro_user_status_list',);
                }

                // oro_user_status_create
                if ($pathinfo === '/user/status/create') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::createAction',  '_route' => 'oro_user_status_create',);
                }

                // oro_user_status_delete
                if (0 === strpos($pathinfo, '/user/status/delete') && preg_match('#^/user/status/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_delete')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::deleteAction',));
                }

                // oro_user_status_set_current
                if (0 === strpos($pathinfo, '/user/status/set-current') && preg_match('#^/user/status/set\\-current/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_status_set_current')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::setCurrentStatus',));
                }

                // oro_user_status_clear_current
                if ($pathinfo === '/user/status/clear-current') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\StatusController::clearCurrentStatus',  '_route' => 'oro_user_status_clear_current',);
                }

            }

            // oro_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_view')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/user/profile')) {
                // oro_user_profile_view
                if ($pathinfo === '/user/profile/view') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::viewProfileAction',  '_route' => 'oro_user_profile_view',);
                }

                // oro_user_profile_update
                if ($pathinfo === '/user/profile/edit') {
                    return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateProfileAction',  '_route' => 'oro_user_profile_update',);
                }

            }

            // oro_user_apigen
            if (0 === strpos($pathinfo, '/user/apigen') && preg_match('#^/user/apigen/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_apigen')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::apigenAction',));
            }

            // oro_user_create
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'oro_user_create',);
            }

            // oro_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_update')), array (  'id' => 0,  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::updateAction',));
            }

            // oro_user_index
            if (preg_match('#^/user(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_user_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\UserController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/api/rest')) {
                // oro_api_delete_user
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_user:

                // oro_api_get_user
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user:

                // oro_api_get_user_filter
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/user/filter(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_filter;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_filter')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getFilterAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_filter:

                // oro_api_get_user_groups
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users/(?P<id>[^/]++)/groups(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_groups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getGroupsAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_groups:

                // oro_api_get_user_roles
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users/(?P<id>[^/]++)/roles(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_user_roles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_user_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::getRolesAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_user_roles:

                // oro_api_get_users
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_users;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_users')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_users:

                // oro_api_post_user
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/user(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_user:

                // oro_api_put_user
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/users/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_user;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_user')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\UserController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_user:

                // oro_api_delete_role
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_role:

                // oro_api_get_role
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_role:

                // oro_api_get_role_byname
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/roles/(?P<name>[^/]++)/byname(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_role_byname;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_role_byname')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::getBynameAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_role_byname:

                // oro_api_get_roles
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/roles(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_roles;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_roles')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_roles:

                // oro_api_post_role
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/role(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_role:

                // oro_api_put_role
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/roles/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_role;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_role')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\RoleController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_role:

                // oro_api_delete_group
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_group:

                // oro_api_get_group
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::getAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_group:

                // oro_api_get_groups
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/groups(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_groups;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_groups')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_groups:

                // oro_api_post_group
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/group(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_group:

                // oro_api_put_group
                if (preg_match('#^/api/rest/(?P<version>[^/]++)/groups/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_group;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_group')), array (  '_controller' => 'Oro\\Bundle\\UserBundle\\Controller\\Api\\Rest\\GroupController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_group:

                // oro_api_delete_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_oro_api_delete_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_delete_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::deleteAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_delete_windows:

                // oro_api_get_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_oro_api_get_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_get_windows:

                // oro_api_post_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_oro_api_post_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_post_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::postAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_post_windows:

                // oro_api_put_windows
                if (preg_match('#^/api/rest/(?P<version>latest|v1)/windows/(?P<windowId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_oro_api_put_windows;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_put_windows')), array (  '_controller' => 'Oro\\Bundle\\WindowsBundle\\Controller\\Api\\WindowsStateController::putAction',  '_format' => 'json',  'version' => 'latest',));
                }
                not_oro_api_put_windows:

            }

            if (0 === strpos($pathinfo, '/audit')) {
                // oro_dataaudit_index
                if (preg_match('#^/audit(?:/(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_index')), array (  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::indexAction',));
                }

                // oro_dataaudit_history
                if (0 === strpos($pathinfo, '/audit/history') && preg_match('#^/audit/history(?:/(?P<entity>[a-zA-Z0-9_]+)(?:/(?P<id>\\d+)(?:/(?P<_format>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_dataaudit_history')), array (  'entity' => 'entity',  'id' => 0,  '_format' => 'html',  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\AuditController::historyAction',));
                }

            }

            if (0 === strpos($pathinfo, '/api')) {
                if (0 === strpos($pathinfo, '/api/rest')) {
                    // oro_api_get_audit
                    if (preg_match('#^/api/rest/(?P<version>[^/]++)/audits/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_audit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audit')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::getAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_audit:

                    // oro_api_get_audits
                    if (preg_match('#^/api/rest/(?P<version>[^/]++)/audits(?:\\.(?P<_format>json|xml|html))?$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_oro_api_get_audits;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'oro_api_get_audits')), array (  '_controller' => 'Oro\\Bundle\\DataAuditBundle\\Controller\\Api\\Rest\\AuditController::cgetAction',  '_format' => 'json',  'version' => 'latest',));
                    }
                    not_oro_api_get_audits:

                }

                // nelmio_api_doc_index
                if (rtrim($pathinfo, '/') === '/api/doc') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_nelmio_api_doc_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'nelmio_api_doc_index');
                    }

                    return array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  '_route' => 'nelmio_api_doc_index',);
                }
                not_nelmio_api_doc_index:

            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/media/cache')) {
            // _imagine_avatar_med
            if (0 === strpos($pathinfo, '/media/cache/avatar_med') && preg_match('#^/media/cache/avatar_med/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_avatar_med;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_avatar_med')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'avatar_med',));
            }
            not__imagine_avatar_med:

            if (0 === strpos($pathinfo, '/media/cache/thumbnail')) {
                // _imagine_thumbnail_small
                if (0 === strpos($pathinfo, '/media/cache/thumbnail_small') && preg_match('#^/media/cache/thumbnail_small/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_thumbnail_small;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_thumbnail_small')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'thumbnail_small',));
                }
                not__imagine_thumbnail_small:

                // _imagine_thumbnail
                if (preg_match('#^/media/cache/thumbnail/(?P<path>.+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not__imagine_thumbnail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_thumbnail')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'thumbnail',));
                }
                not__imagine_thumbnail:

            }

            // _imagine_image_preview
            if (0 === strpos($pathinfo, '/media/cache/image_preview') && preg_match('#^/media/cache/image_preview/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not__imagine_image_preview;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => '_imagine_image_preview')), array (  '_controller' => 'liip_imagine.controller:filterAction',  'filter' => 'image_preview',));
            }
            not__imagine_image_preview:

        }

        if (0 === strpos($pathinfo, '/jsfv')) {
            // apy_js_form_validation_unique_entity
            if (0 === strpos($pathinfo, '/jsfv/unique-entity') && preg_match('#^/jsfv/unique\\-entity\\.(?P<_locale>[^/\\.]++)(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_unique_entity')), array (  '_controller' => 'jsfv.controller:uniqueEntityAction',  '_format' => 'json',));
            }

            // apy_js_form_validation_checkmx
            if (0 === strpos($pathinfo, '/jsfv/checkmx') && preg_match('#^/jsfv/checkmx(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'apy_js_form_validation_checkmx')), array (  '_controller' => 'jsfv.controller:checkMxAction',  '_format' => 'json',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
