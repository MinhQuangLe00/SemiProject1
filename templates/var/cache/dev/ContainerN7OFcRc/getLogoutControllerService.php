<?php

namespace ContainerN7OFcRc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogoutControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LogoutController' shared autowired service.
     *
     * @return \App\Controller\LogoutController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LogoutController.php';

        $container->services['App\\Controller\\LogoutController'] = $instance = new \App\Controller\LogoutController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\LogoutController', $container));

        return $instance;
    }
}
