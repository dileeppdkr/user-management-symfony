<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_index' => array(array(), array('_controller' => 'App\\Controller\\AdminController::index'), array(), array(array('text', '/')), array(), array()),
        'admin_add_user_to_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::addUserToGroup'), array(), array(array('text', '/add_users_to_group')), array(), array()),
        'admin_add_to_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::addToGroup'), array(), array(array('text', '/add_to_group')), array(), array()),
        'admin_remove_from_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::removeFromGroup'), array(), array(array('text', '/remove_from_group')), array(), array()),
        'category_index' => array(array(), array('_controller' => 'App\\Controller\\CategoryController::index'), array(), array(array('text', '/category/')), array(), array()),
        'category_new' => array(array(), array('_controller' => 'App\\Controller\\CategoryController::new'), array(), array(array('text', '/category/new')), array(), array()),
        'category_show' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/category')), array(), array()),
        'category_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/category')), array(), array()),
        'category_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CategoryController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/category')), array(), array()),
        'customer_index' => array(array(), array('_controller' => 'App\\Controller\\CustomerController::index'), array(), array(array('text', '/customer/')), array(), array()),
        'customer_new' => array(array(), array('_controller' => 'App\\Controller\\CustomerController::new'), array(), array(array('text', '/customer/new')), array(), array()),
        'customer_show' => array(array('id'), array('_controller' => 'App\\Controller\\CustomerController::show'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/customer')), array(), array()),
        'customer_edit' => array(array('id'), array('_controller' => 'App\\Controller\\CustomerController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id', true), array('text', '/customer')), array(), array()),
        'customer_delete' => array(array('id'), array('_controller' => 'App\\Controller\\CustomerController::delete'), array(), array(array('variable', '/', '[^/]++', 'id', true), array('text', '/customer')), array(), array()),
        'app_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format', true), array('variable', '/', '\\d+', 'code', true), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token', true), array('text', '/_profiler')), array(), array()),
        'index' => array(array(), array('_controller' => 'App\\Controller\\AdminController::index'), array(), array(array('text', '/')), array(), array()),
        'customers' => array(array(), array('_controller' => 'App\\Controller\\CustomerController::index'), array(), array(array('text', '/customers')), array(), array()),
        'add_users_to_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::admin_add_user_to_group'), array(), array(array('text', '/add_users_to_group')), array(), array()),
        'add_to_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::admin_add_to_group'), array(), array(array('text', '/add_to_group')), array(), array()),
        'remove_from_group' => array(array(), array('_controller' => 'App\\Controller\\AdminController::admin_remove_from_group'), array(), array(array('text', '/remove_from_group')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
