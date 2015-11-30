<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // web_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::loginAction',  '_route' => 'web_login',);
                }

                // web_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'web_login_check',);
                }

            }

            // web_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'web_logout');
            }

        }

        // web_homepage
        if ($pathinfo === '/admin/home') {
            return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\DefaultController::indexAction',  '_route' => 'web_homepage',);
        }

        // web_goto_homepage
        if ($pathinfo === '/goto') {
            return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\DefaultController::goToWebAction',  '_route' => 'web_goto_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/job')) {
            // web_job
            if ($pathinfo === '/admin/job') {
                return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::indexAction',  '_route' => 'web_job',);
            }

            if (0 === strpos($pathinfo, '/admin/job/list')) {
                // web_job_list
                if ($pathinfo === '/admin/job/list') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::listAction',  '_route' => 'web_job_list',);
                }

                // web_job_list_detail
                if (preg_match('#^/admin/job/list/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_job_list_detail')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::listAction',));
                }

            }

            // web_job_save
            if (0 === strpos($pathinfo, '/admin/job/save') && preg_match('#^/admin/job/save/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_web_job_save;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_job_save')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::saveAction',));
            }
            not_web_job_save:

            // web_job_delete
            if (0 === strpos($pathinfo, '/admin/job/delete') && preg_match('#^/admin/job/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_job_delete')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::deleteAction',));
            }

            // web_job_form
            if ($pathinfo === '/admin/job/add') {
                return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::formAction',  '_route' => 'web_job_form',);
            }

            // web_job_form_edit
            if (0 === strpos($pathinfo, '/admin/job/edit') && preg_match('#^/admin/job/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_job_form_edit')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::formAction',));
            }

        }

        // web_job_json
        if ($pathinfo === '/job/listjson') {
            return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::findAllAction',  '_route' => 'web_job_json',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/user')) {
                // web_user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::indexAction',  '_route' => 'web_user',);
                }

                // web_user_list
                if ($pathinfo === '/admin/user/list') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::listAction',  '_route' => 'web_user_list',);
                }

                // web_user_form
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::formAction',  '_route' => 'web_user_form',);
                }

                // web_user_form_edit
                if (0 === strpos($pathinfo, '/admin/user/edit') && preg_match('#^/admin/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_user_form_edit')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::formAction',));
                }

                // web_user_save
                if (0 === strpos($pathinfo, '/admin/user/save') && preg_match('#^/admin/user/save/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_web_user_save;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_user_save')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::saveAction',));
                }
                not_web_user_save:

                // web_user_delete
                if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'web_user_delete')), array (  '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::deleteAction',));
                }

            }

            // web_security_change_password
            if ($pathinfo === '/admin/changepass') {
                return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::changePasswordAction',  '_route' => 'web_security_change_password',);
            }

            // web_security_save_change
            if ($pathinfo === '/admin/savechange') {
                return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::saveChangeAction',  '_route' => 'web_security_save_change',);
            }

        }

        // user_registration
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Synergy\\WebBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
