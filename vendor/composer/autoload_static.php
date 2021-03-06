<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited5bb7b91ede88b65e3a839e390f412c
{
    public static $classMap = array (
        'App\\Controllers\\AdminController' => __DIR__ . '/../..' . '/app/controllers/AdminController.php',
        'App\\Controllers\\AuthController' => __DIR__ . '/../..' . '/app/controllers/AuthController.php',
        'App\\Controllers\\TaskController' => __DIR__ . '/../..' . '/app/controllers/TaskController.php',
        'App\\Controllers\\UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/app/core/App.php',
        'App\\Core\\Authorization' => __DIR__ . '/../..' . '/app/core/Authorization.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/app/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/app/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/app/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/app/core/Router.php',
        'App\\Core\\Validate' => __DIR__ . '/../..' . '/app/core/Validate.php',
        'App\\Models\\Model' => __DIR__ . '/../..' . '/app/models/Model.php',
        'App\\Models\\Task' => __DIR__ . '/../..' . '/app/models/Task.php',
        'App\\Models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
        'ComposerAutoloaderInited5bb7b91ede88b65e3a839e390f412c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInited5bb7b91ede88b65e3a839e390f412c' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Pagination' => __DIR__ . '/../..' . '/app/core/Pagination.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInited5bb7b91ede88b65e3a839e390f412c::$classMap;

        }, null, ClassLoader::class);
    }
}
