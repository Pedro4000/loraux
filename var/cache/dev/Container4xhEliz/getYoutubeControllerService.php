<?php

namespace Container4xhEliz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getYoutubeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\YoutubeController' shared autowired service.
     *
     * @return \App\Controller\YoutubeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'YoutubeController.php';

        $container->services['App\\Controller\\YoutubeController'] = $instance = new \App\Controller\YoutubeController(($container->privates['Google_Client'] ?? $container->load('getGoogleClientService')), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))), ($container->services['session'] ?? $container->load('getSessionService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\YoutubeController', $container));

        return $instance;
    }
}
