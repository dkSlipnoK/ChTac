<?php

namespace ContainerH6Upy5i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConcourFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ConcourFormType' shared autowired service.
     *
     * @return \App\Form\ConcourFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ConcourFormType.php';

        return $container->privates['App\\Form\\ConcourFormType'] = new \App\Form\ConcourFormType();
    }
}
