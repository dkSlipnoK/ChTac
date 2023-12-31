<?php

namespace ContainerH6Upy5i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NMvZpaiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NMvZpai' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NMvZpai'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'concoursRepository' => ['privates', 'App\\Repository\\ConcoursRepository', 'getConcoursRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'participantsRepository' => ['privates', 'App\\Repository\\ParticipantsRepository', 'getParticipantsRepositoryService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'concoursRepository' => 'App\\Repository\\ConcoursRepository',
            'entityManager' => '?',
            'participantsRepository' => 'App\\Repository\\ParticipantsRepository',
        ]);
    }
}
