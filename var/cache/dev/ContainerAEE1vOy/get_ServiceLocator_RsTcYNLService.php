<?php

namespace ContainerAEE1vOy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RsTcYNLService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rsTcYNL' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rsTcYNL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored.LoOJ_wE', NULL, 'Cannot determine controller argument for "App\\Service\\CalendarService::update()": the $request argument is type-hinted with the non-existent class or interface: "App\\Service\\Request". Did you forget to add a use statement?'],
        ], [
            'request' => '?',
        ]);
    }
}
