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

        // d2bg_user_homepage
        if (0 === strpos($pathinfo, '/hellouser') && preg_match('#^/hellouser/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'd2bg_user_homepage')), array (  '_controller' => 'D2bg\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'D2bg\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'D2bg\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'D2bg\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            // d2bgblog_accueil
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'd2bgblog_accueil')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,));
            }

            // d2bgblog_init
            if ($pathinfo === '/blog/initdb') {
                return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::initdbAction',  '_route' => 'd2bgblog_init',);
            }

            // d2bgblog_voir
            if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)(?:\\.(?P<format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'd2bgblog_voir')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::voirAction',  'format' => 'html',));
            }

            // d2bgblog_modifier
            if (0 === strpos($pathinfo, '/blog/modifier') && preg_match('#^/blog/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'd2bgblog_modifier')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::modifierAction',));
            }

            // d2bgblog_supprimer
            if (0 === strpos($pathinfo, '/blog/supprimer') && preg_match('#^/blog/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'd2bgblog_supprimer')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::supprimerAction',));
            }

            // d2bgblog_ajouter
            if ($pathinfo === '/blog/ajouter') {
                return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'd2bgblog_ajouter',);
            }

            // d2bgblog_send
            if ($pathinfo === '/blog/envoimail') {
                return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\BlogController::envoimailAction',  '_route' => 'd2bgblog_send',);
            }

        }

        // dbg_blog_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbg_blog_homepage')), array (  '_controller' => 'Dbg\\BlogBundle\\Controller\\DefaultController::indexAction',));
        }

        // dbg_blog_HelloDenis
        if (0 === strpos($pathinfo, '/salut') && preg_match('#^/salut/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbg_blog_HelloDenis')), array (  '_controller' => 'Dbg\\BlogBundle\\Controller\\BlogController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/b')) {
            // dbg_blog_ByebyeDenis
            if (0 === strpos($pathinfo, '/byebye') && preg_match('#^/byebye/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbg_blog_ByebyeDenis')), array (  '_controller' => 'Dbg\\BlogBundle\\Controller\\BlogController::byebyeAction',));
            }

            // dbg_blog_ArchiveDenis
            if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<annee>\\d{4})/(?P<mois>[^/\\.]++)\\.(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbg_blog_ArchiveDenis')), array (  '_controller' => 'Dbg\\BlogBundle\\Controller\\BlogController::voirArchiveAction',));
            }

        }

        if (0 === strpos($pathinfo, '/prospect')) {
            // dbgprospect_help
            if ($pathinfo === '/prospect/help') {
                return array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::helpAction',  '_route' => 'dbgprospect_help',);
            }

            // dbgprospect_menu
            if ($pathinfo === '/prospect/menu') {
                return array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::menuAction',  '_route' => 'dbgprospect_menu',);
            }

            // dbgprospect_ajouter
            if ($pathinfo === '/prospect/ajouter') {
                return array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::ajouterAction',  '_route' => 'dbgprospect_ajouter',);
            }

            // dbgprospect_accueil
            if (preg_match('#^/prospect(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbgprospect_accueil')), array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::indexAction',  'page' => 1,));
            }

            // dbgprospect_voir
            if (0 === strpos($pathinfo, '/prospect/voir') && preg_match('#^/prospect/voir/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbgprospect_voir')), array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::voirAction',));
            }

            // dbgprospect_modifier
            if (0 === strpos($pathinfo, '/prospect/modifier') && preg_match('#^/prospect/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbgprospect_modifier')), array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::modifierAction',));
            }

            // dbgprospect_supprimer
            if (0 === strpos($pathinfo, '/prospect/supprimer') && preg_match('#^/prospect/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dbgprospect_supprimer')), array (  '_controller' => 'Dbg\\ProspectBundle\\Controller\\ProspectController::supprimerAction',));
            }

        }

        if (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blog/adresse')) {
                // adresse
                if (rtrim($pathinfo, '/') === '/blog/adresse') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adresse;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adresse');
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::indexAction',  '_route' => 'adresse',);
                }
                not_adresse:

                // adresse_create
                if ($pathinfo === '/blog/adresse/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_adresse_create;
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::createAction',  '_route' => 'adresse_create',);
                }
                not_adresse_create:

                // adresse_new
                if ($pathinfo === '/blog/adresse/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adresse_new;
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::newAction',  '_route' => 'adresse_new',);
                }
                not_adresse_new:

                // adresse_show
                if (preg_match('#^/blog/adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adresse_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_show')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::showAction',));
                }
                not_adresse_show:

                // adresse_edit
                if (preg_match('#^/blog/adresse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_adresse_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_edit')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::editAction',));
                }
                not_adresse_edit:

                // adresse_update
                if (preg_match('#^/blog/adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_adresse_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_update')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::updateAction',));
                }
                not_adresse_update:

                // adresse_delete
                if (preg_match('#^/blog/adresse/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_adresse_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_delete')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\AdresseController::deleteAction',));
                }
                not_adresse_delete:

            }

            if (0 === strpos($pathinfo, '/blog/civilite')) {
                // civilite
                if (rtrim($pathinfo, '/') === '/blog/civilite') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'civilite');
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::indexAction',  '_route' => 'civilite',);
                }
                not_civilite:

                // civilite_create
                if ($pathinfo === '/blog/civilite/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_civilite_create;
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::createAction',  '_route' => 'civilite_create',);
                }
                not_civilite_create:

                // civilite_new
                if ($pathinfo === '/blog/civilite/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_new;
                    }

                    return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::newAction',  '_route' => 'civilite_new',);
                }
                not_civilite_new:

                // civilite_show
                if (preg_match('#^/blog/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_show')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::showAction',));
                }
                not_civilite_show:

                // civilite_edit
                if (preg_match('#^/blog/civilite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_civilite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_edit')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::editAction',));
                }
                not_civilite_edit:

                // civilite_update
                if (preg_match('#^/blog/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_civilite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_update')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::updateAction',));
                }
                not_civilite_update:

                // civilite_delete
                if (preg_match('#^/blog/civilite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_civilite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'civilite_delete')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\CiviliteController::deleteAction',));
                }
                not_civilite_delete:

            }

            if (0 === strpos($pathinfo, '/blog/i')) {
                if (0 === strpos($pathinfo, '/blog/identite')) {
                    // identite
                    if (rtrim($pathinfo, '/') === '/blog/identite') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_identite;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'identite');
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::indexAction',  '_route' => 'identite',);
                    }
                    not_identite:

                    // identite_create
                    if ($pathinfo === '/blog/identite/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_identite_create;
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::createAction',  '_route' => 'identite_create',);
                    }
                    not_identite_create:

                    // identite_new
                    if ($pathinfo === '/blog/identite/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_identite_new;
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::newAction',  '_route' => 'identite_new',);
                    }
                    not_identite_new:

                    // identite_show
                    if (preg_match('#^/blog/identite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_identite_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'identite_show')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::showAction',));
                    }
                    not_identite_show:

                    // identite_edit
                    if (preg_match('#^/blog/identite/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_identite_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'identite_edit')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::editAction',));
                    }
                    not_identite_edit:

                    // identite_update
                    if (preg_match('#^/blog/identite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_identite_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'identite_update')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::updateAction',));
                    }
                    not_identite_update:

                    // identite_delete
                    if (preg_match('#^/blog/identite/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_identite_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'identite_delete')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\IdentiteController::deleteAction',));
                    }
                    not_identite_delete:

                }

                if (0 === strpos($pathinfo, '/blog/image')) {
                    // image
                    if (rtrim($pathinfo, '/') === '/blog/image') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_image;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'image');
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::indexAction',  '_route' => 'image',);
                    }
                    not_image:

                    // image_create
                    if ($pathinfo === '/blog/image/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_image_create;
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::createAction',  '_route' => 'image_create',);
                    }
                    not_image_create:

                    // image_new
                    if ($pathinfo === '/blog/image/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_image_new;
                        }

                        return array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::newAction',  '_route' => 'image_new',);
                    }
                    not_image_new:

                    // image_show
                    if (preg_match('#^/blog/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_image_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_show')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::showAction',));
                    }
                    not_image_show:

                    // image_edit
                    if (preg_match('#^/blog/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_image_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::editAction',));
                    }
                    not_image_edit:

                    // image_update
                    if (preg_match('#^/blog/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_image_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_update')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::updateAction',));
                    }
                    not_image_update:

                    // image_delete
                    if (preg_match('#^/blog/image/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_image_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_delete')), array (  '_controller' => 'D2bg\\BlogBundle\\Controller\\ImageController::deleteAction',));
                    }
                    not_image_delete:

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
