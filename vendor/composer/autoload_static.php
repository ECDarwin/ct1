<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a7da6883f98fcd177d9aa3b6f6db45e
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'code_base\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'code_base\\' => 
        array (
            0 => __DIR__ . '/../..' . '/code_base',
        ),
    );

    public static $classMap = array (
        'Enterprise' => __DIR__ . '/../..' . '/enterprise.class.php',
        'Helper' => __DIR__ . '/../..' . '/Utils/Helper.php',
        'Person' => __DIR__ . '/../..' . '/Utils/Helper.php',
        'Wechat' => __DIR__ . '/../..' . '/Wechat.php',
        'code_base\\che\\Vars' => __DIR__ . '/../..' . '/code_base/che/Vars.php',
        'code_base\\fuwu\\Vars' => __DIR__ . '/../..' . '/code_base/fuwu/Vars.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a7da6883f98fcd177d9aa3b6f6db45e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a7da6883f98fcd177d9aa3b6f6db45e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a7da6883f98fcd177d9aa3b6f6db45e::$classMap;

        }, null, ClassLoader::class);
    }
}