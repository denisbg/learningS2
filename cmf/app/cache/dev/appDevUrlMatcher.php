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

        if (0 === strpos($pathinfo, '/css/06935bc')) {
            // _assetic_06935bc
            if ($pathinfo === '/css/06935bc.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_06935bc',);
            }

            if (0 === strpos($pathinfo, '/css/06935bc_')) {
                // _assetic_06935bc_0
                if ($pathinfo === '/css/06935bc_tags_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_06935bc_0',);
                }

                // _assetic_06935bc_1
                if ($pathinfo === '/css/06935bc_create-ui_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_06935bc_1',);
                }

                // _assetic_06935bc_2
                if ($pathinfo === '/css/06935bc_font-awesome_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_06935bc_2',);
                }

                // _assetic_06935bc_3
                if ($pathinfo === '/css/06935bc_midgardnotif_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_06935bc_3',);
                }

                // _assetic_06935bc_4
                if ($pathinfo === '/css/06935bc_halloCmfStyle_5.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_06935bc_4',);
                }

                // _assetic_06935bc_5
                if ($pathinfo === '/css/06935bc_createStyle_6.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_06935bc_5',);
                }

                // _assetic_06935bc_6
                if ($pathinfo === '/css/06935bc_overlay_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '06935bc',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_06935bc_6',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/c')) {
                if (0 === strpos($pathinfo, '/js/ckeditor')) {
                    // _assetic_fc913f2
                    if ($pathinfo === '/js/ckeditor.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc913f2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fc913f2',);
                    }

                    if (0 === strpos($pathinfo, '/js/ckeditor_')) {
                        // _assetic_fc913f2_0
                        if ($pathinfo === '/js/ckeditor_ckeditor_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc913f2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fc913f2_0',);
                        }

                        if (0 === strpos($pathinfo, '/js/ckeditor_init-create-c')) {
                            // _assetic_fc913f2_1
                            if ($pathinfo === '/js/ckeditor_init-create-ckeditor_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc913f2',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_fc913f2_1',);
                            }

                            // _assetic_fc913f2_2
                            if ($pathinfo === '/js/ckeditor_init-create-common_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fc913f2',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_fc913f2_2',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/js/create')) {
                    // _assetic_db3de33
                    if ($pathinfo === '/js/create.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_db3de33',);
                    }

                    if (0 === strpos($pathinfo, '/js/create_')) {
                        if (0 === strpos($pathinfo, '/js/create_jquery')) {
                            // _assetic_db3de33_0
                            if ($pathinfo === '/js/create_jquery_1.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_db3de33_0',);
                            }

                            // _assetic_db3de33_1
                            if ($pathinfo === '/js/create_jquery-ui_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_db3de33_1',);
                            }

                        }

                        // _assetic_db3de33_2
                        if ($pathinfo === '/js/create_underscore_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_db3de33_2',);
                        }

                        // _assetic_db3de33_3
                        if ($pathinfo === '/js/create_backbone_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_db3de33_3',);
                        }

                        // _assetic_db3de33_4
                        if ($pathinfo === '/js/create_rangy-core_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_db3de33_4',);
                        }

                        // _assetic_db3de33_5
                        if ($pathinfo === '/js/create_vie_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_db3de33_5',);
                        }

                        if (0 === strpos($pathinfo, '/js/create_jquery.')) {
                            if (0 === strpos($pathinfo, '/js/create_jquery.rdfquery.')) {
                                // _assetic_db3de33_6
                                if ($pathinfo === '/js/create_jquery.rdfquery.core_7.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_db3de33_6',);
                                }

                                // _assetic_db3de33_7
                                if ($pathinfo === '/js/create_jquery.rdfquery.rules_8.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_db3de33_7',);
                                }

                            }

                            // _assetic_db3de33_8
                            if ($pathinfo === '/js/create_jquery.tagsinput_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_db3de33_8',);
                            }

                        }

                        // _assetic_db3de33_9
                        if ($pathinfo === '/js/create_annotate_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_db3de33_9',);
                        }

                        // _assetic_db3de33_10
                        if ($pathinfo === '/js/create_create_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'db3de33',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_db3de33_10',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/hallo-extra')) {
                // _assetic_7e6d689
                if ($pathinfo === '/js/hallo-extra.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7e6d689',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_7e6d689',);
                }

                if (0 === strpos($pathinfo, '/js/hallo-extra_')) {
                    // _assetic_7e6d689_0
                    if ($pathinfo === '/js/hallo-extra_jquery.htmlClean_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e6d689',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_7e6d689_0',);
                    }

                    // _assetic_7e6d689_1
                    if ($pathinfo === '/js/hallo-extra_hallo_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '7e6d689',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_7e6d689_1',);
                    }

                    if (0 === strpos($pathinfo, '/js/hallo-extra_init-create-')) {
                        // _assetic_7e6d689_2
                        if ($pathinfo === '/js/hallo-extra_init-create-hallo_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e6d689',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_7e6d689_2',);
                        }

                        // _assetic_7e6d689_3
                        if ($pathinfo === '/js/hallo-extra_init-create-common_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '7e6d689',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_7e6d689_3',);
                        }

                    }

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

        if (0 === strpos($pathinfo, '/demo/log')) {
            if (0 === strpos($pathinfo, '/demo/login')) {
                // _demo_login
                if ($pathinfo === '/demo/login') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecurityController::loginAction',  '_route' => '_demo_login',);
                }

                // _demo_login_check
                if ($pathinfo === '/demo/login_check') {
                    return array('_route' => '_demo_login_check');
                }

            }

            // _demo_logout
            if ($pathinfo === '/demo/logout') {
                return array('_route' => '_demo_logout');
            }

        }

        // cmf_create_post_document
        if (preg_match('#^/(?P<_locale>[^/]++)/symfony\\-cmf/create/document/(?P<subject>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cmf_create_post_document;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmf_create_post_document')), array (  '_controller' => 'cmf_create.rest.controller:postDocumentAction',  '_format' => 'json',));
        }
        not_cmf_create_post_document:

        // cmf_create_put_document
        if (preg_match('#^/(?P<_locale>[^/]++)/symfony\\-cmf/create/document/(?P<subject>.+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmf_create_put_document')), array (  '_controller' => 'cmf_create.rest.controller:updateDocumentAction',  '_format' => 'json',));
        }

        // cmf_create_workflows
        if (preg_match('#^/(?P<_locale>[^/]++)/symfony\\-cmf/create/workflows/(?P<subject>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_cmf_create_workflows;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmf_create_workflows')), array (  '_controller' => 'cmf_create.rest.controller:workflowsAction',  '_format' => 'json',));
        }
        not_cmf_create_workflows:

        // cmf_create_put_document_base
        if (preg_match('#^/(?P<_locale>[^/]++)/symfony\\-cmf/create/document$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmf_create_put_document_base')), array ());
        }

        // cmf_create_workflows_base
        if (preg_match('#^/(?P<_locale>[^/]++)/symfony\\-cmf/create/workflows$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cmf_create_workflows_base')), array ());
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
