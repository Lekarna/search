<?php

Doctrine\Common\Annotations\AnnotationRegistry::registerLoader('class_exists');

class Config
{
    //List of available servers
    public static function getServers()
    {
        return array(
            array('host' => 'localhost', 'port' => 9200)
        );
    }

    //Entities namespace and location
    public static function getEntityNamespacePath()
    {
        return array(
            'namespace' => 'Doctrine\Tests\Models',
            'path' => __DIR__ . '/../tests/Doctrine/Tests/Models'
        );
    }
}
