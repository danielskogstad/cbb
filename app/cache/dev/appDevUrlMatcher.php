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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/all')) {
            // _assetic_d09a95c
            if ($pathinfo === '/js/all.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d09a95c',);
            }

            if (0 === strpos($pathinfo, '/js/all_')) {
                // _assetic_d09a95c_0
                if ($pathinfo === '/js/all_jquery.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d09a95c_0',);
                }

                // _assetic_d09a95c_1
                if ($pathinfo === '/js/all_bootstrap_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_d09a95c_1',);
                }

                if (0 === strpos($pathinfo, '/js/all_jquery.')) {
                    // _assetic_d09a95c_2
                    if ($pathinfo === '/js/all_jquery.scrollTo.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_d09a95c_2',);
                    }

                    // _assetic_d09a95c_3
                    if ($pathinfo === '/js/all_jquery.nav_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_d09a95c_3',);
                    }

                }

                // _assetic_d09a95c_4
                if ($pathinfo === '/js/all_inview_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_d09a95c_4',);
                }

                // _assetic_d09a95c_5
                if ($pathinfo === '/js/all_custom_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd09a95c',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_d09a95c_5',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/all')) {
            // _assetic_b49a562
            if ($pathinfo === '/css/all.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_b49a562',);
            }

            if (0 === strpos($pathinfo, '/css/all_')) {
                // _assetic_b49a562_0
                if ($pathinfo === '/css/all_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_b49a562_0',);
                }

                // _assetic_b49a562_1
                if ($pathinfo === '/css/all_style_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_b49a562_1',);
                }

                // _assetic_b49a562_2
                if ($pathinfo === '/css/all_elements_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_b49a562_2',);
                }

                // _assetic_b49a562_3
                if ($pathinfo === '/css/all_animate_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_b49a562_3',);
                }

                // _assetic_b49a562_4
                if ($pathinfo === '/css/all_font-awesome_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_b49a562_4',);
                }

                if (0 === strpos($pathinfo, '/css/all_css?family=')) {
                    // _assetic_b49a562_5
                    if ($pathinfo === '/css/all_css?family=Roboto:400,500,700,900_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_b49a562_5',);
                    }

                    // _assetic_b49a562_6
                    if ($pathinfo === '/css/all_css?family=Source+Sans+Pro:300,400,600,700,900_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'b49a562',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_b49a562_6',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js/ie9')) {
            // _assetic_767f780
            if ($pathinfo === '/js/ie9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '767f780',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_767f780',);
            }

            // _assetic_767f780_0
            if ($pathinfo === '/js/ie9_html5_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '767f780',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_767f780_0',);
            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/6f83a0c')) {
                // _assetic_6f83a0c
                if ($pathinfo === '/images/6f83a0c.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f83a0c',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_6f83a0c',);
                }

                // _assetic_6f83a0c_0
                if ($pathinfo === '/images/6f83a0c_logo_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6f83a0c',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_6f83a0c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/8cd976d')) {
                // _assetic_8cd976d
                if ($pathinfo === '/images/8cd976d.gif') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8cd976d',  'pos' => NULL,  '_format' => 'gif',  '_route' => '_assetic_8cd976d',);
                }

                // _assetic_8cd976d_0
                if ($pathinfo === '/images/8cd976d_heroic_1.gif') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8cd976d',  'pos' => 0,  '_format' => 'gif',  '_route' => '_assetic_8cd976d_0',);
                }

            }

        }

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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // cbb_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cbb_homepage');
            }

            return array (  '_controller' => 'Skogstadmedia\\Bundle\\CbbBundle\\Controller\\PageController::indexAction',  '_route' => 'cbb_homepage',);
        }

        // wo_w_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wo_w_homepage')), array (  '_controller' => 'Skogstadmedia\\Bundle\\WoWBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
