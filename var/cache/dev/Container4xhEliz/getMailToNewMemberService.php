<?php

namespace Container4xhEliz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailToNewMemberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\MailToNewMember' shared autowired service.
     *
     * @return \App\Service\MailToNewMember
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'MailToNewMember.php';

        return $container->privates['App\\Service\\MailToNewMember'] = new \App\Service\MailToNewMember();
    }
}
