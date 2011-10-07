<?php

namespace JMS\SerializerBundle\DependencyInjection\Factory;

use JMS\SerializerBundle\DependencyInjection\HandlerDefinitionFactoryInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

class FormErrorFactory implements HandlerDefinitionFactoryInterface
{
    public function getConfigKey()
    {
        return 'form_error';
    }

    public function getType(array $config)
    {
        return self::TYPE_SERIALIZATION;
    }

    public function addConfiguration(ArrayNodeDefinition $builder)
    {
        $builder
            ->addDefaultsIfNotSet()
            ->defaultValue(array())
        ;
    }

    public function getHandlerId(ContainerBuilder $container, array $config)
    {
        return 'jms_serializer.form_error_handler';
    }
}