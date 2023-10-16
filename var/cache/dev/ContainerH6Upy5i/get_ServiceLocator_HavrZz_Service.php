<?php

namespace ContainerH6Upy5i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HavrZz_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HavrZz.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HavrZz.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categories' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'concoursRepo' => ['privates', 'App\\Repository\\ConcoursRepository', 'getConcoursRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'epreuves' => ['privates', 'App\\Repository\\EpreuvesRepository', 'getEpreuvesRepositoryService', true],
            'translator' => ['services', 'translator', 'getTranslatorService', false],
        ], [
            'categories' => 'App\\Repository\\CategorieRepository',
            'concoursRepo' => 'App\\Repository\\ConcoursRepository',
            'entityManager' => '?',
            'epreuves' => 'App\\Repository\\EpreuvesRepository',
            'translator' => '?',
        ]);
    }
}
