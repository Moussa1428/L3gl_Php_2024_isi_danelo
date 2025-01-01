<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: [__DIR__ . '/app/models'],
    isDevMode: true,
);
$connection = DriverManager::getConnection([
    'driver'   => 'pdo_pgsql',
    'user'     => 'postgres',
    'password' => 'moussa.dev.com',
    'dbname'   => 'projetgestionferme',
    'host'     => '127.0.0.1',
    'port'     => 5432,
], $config);

/*
$connectionParams = [
    'driver'   => 'pdo_pgsql',
    'user'     => 'postgres',
    'password' => 'passer',
    'dbname'   => 'l3_gl_g1_gestion',
    'host'     => '127.0.0.1',
    'port'     => 5432,
];

*/

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);