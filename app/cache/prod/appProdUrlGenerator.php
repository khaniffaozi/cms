<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'web_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_login_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::loginCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_goto_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\DefaultController::goToWebAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/goto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/job',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/job/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_list_detail' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/job/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_save' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::saveAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/job/save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/job/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/job/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_form_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/job/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_job_json' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\JobController::findAllAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/job/listjson',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/user/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user_form_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user_save' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::saveAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user/save',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_security_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/changepass',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'web_security_save_change' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\SecurityController::saveChangeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/savechange',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Synergy\\WebBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
