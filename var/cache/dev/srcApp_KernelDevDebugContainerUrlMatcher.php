<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(
                array(array('_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'index', '_controller' => 'App\\Controller\\AdminController::index'), null, null, null, false, null),
            ),
            '/add_users_to_group' => array(
                array(array('_route' => 'admin_add_user_to_group', '_controller' => 'App\\Controller\\AdminController::addUserToGroup'), null, array('GET' => 0), null, false, null),
                array(array('_route' => 'add_users_to_group', '_controller' => 'App\\Controller\\AdminController::admin_add_user_to_group'), null, array('GET' => 0), null, false, null),
            ),
            '/add_to_group' => array(
                array(array('_route' => 'admin_add_to_group', '_controller' => 'App\\Controller\\AdminController::addToGroup'), null, array('POST' => 0), null, false, null),
                array(array('_route' => 'add_to_group', '_controller' => 'App\\Controller\\AdminController::admin_add_to_group'), null, array('POST' => 0), null, false, null),
            ),
            '/remove_from_group' => array(
                array(array('_route' => 'admin_remove_from_group', '_controller' => 'App\\Controller\\AdminController::removeFromGroup'), null, array('POST' => 0), null, false, null),
                array(array('_route' => 'remove_from_group', '_controller' => 'App\\Controller\\AdminController::admin_remove_from_group'), null, array('POST' => 0), null, false, null),
            ),
            '/category' => array(array(array('_route' => 'category_index', '_controller' => 'App\\Controller\\CategoryController::index'), null, array('GET' => 0), null, true, null)),
            '/category/new' => array(array(array('_route' => 'category_new', '_controller' => 'App\\Controller\\CategoryController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/customer' => array(array(array('_route' => 'customer_index', '_controller' => 'App\\Controller\\CustomerController::index'), null, array('GET' => 0), null, true, null)),
            '/customer/new' => array(array(array('_route' => 'customer_new', '_controller' => 'App\\Controller\\CustomerController::new'), null, array('GET' => 0, 'POST' => 1), null, false, null)),
            '/login' => array(array(array('_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logoutAction'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
            '/customers' => array(array(array('_route' => 'customers', '_controller' => 'App\\Controller\\CustomerController::index'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:31)'
                            .'|/edit(*:43)'
                            .'|(*:50)'
                        .')'
                        .'|ustomer/([^/]++)(?'
                            .'|(*:77)'
                            .'|/edit(*:89)'
                            .'|(*:96)'
                        .')'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:136)'
                        .'|wdt/([^/]++)(*:156)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:202)'
                                .'|router(*:216)'
                                .'|exception(?'
                                    .'|(*:236)'
                                    .'|\\.css(*:249)'
                                .')'
                            .')'
                            .'|(*:259)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            31 => array(array(array('_route' => 'category_show', '_controller' => 'App\\Controller\\CategoryController::show'), array('id'), array('GET' => 0), null, false, null)),
            43 => array(array(array('_route' => 'category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            50 => array(array(array('_route' => 'category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            77 => array(array(array('_route' => 'customer_show', '_controller' => 'App\\Controller\\CustomerController::show'), array('id'), array('GET' => 0), null, false, null)),
            89 => array(array(array('_route' => 'customer_edit', '_controller' => 'App\\Controller\\CustomerController::edit'), array('id'), array('GET' => 0, 'POST' => 1), null, false, null)),
            96 => array(array(array('_route' => 'customer_delete', '_controller' => 'App\\Controller\\CustomerController::delete'), array('id'), array('DELETE' => 0), null, false, null)),
            136 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            156 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            202 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            216 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            236 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            249 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            259 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
