<?php

namespace Container2rD7lyv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A2PbamnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A2Pbamn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A2Pbamn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored.5XgtHvL', NULL, 'Cannot determine controller argument for "App\\Service\\CalendarService::store()": the $request argument is type-hinted with the non-existent class or interface: "App\\Service\\Request". Did you forget to add a use statement?'],
        ], [
            'request' => '?',
        ]);
    }
}
