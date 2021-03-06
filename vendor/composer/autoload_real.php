<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit316e04ba6f3d72138130804752d2af64
{
    private static $loader;

    public static function loadClassLoader($class)
    {

        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }
         //注册自动加载器loadClassLoader
        spl_autoload_register(array('ComposerAutoloaderInit316e04ba6f3d72138130804752d2af64', 'loadClassLoader'), true, true);
         //加载classloader.php
        self::$loader = $loader = new \Composer\Autoload\ClassLoader();
        //注销已注册的loadClassLoader加载器
        spl_autoload_unregister(array('ComposerAutoloaderInit316e04ba6f3d72138130804752d2af64', 'loadClassLoader'));
        //供应商vendor目录当前__DIR__是composer目录
        $vendorDir = dirname(__DIR__);
        //基本的应用目录vendor的上一级目录
        $baseDir = dirname($vendorDir);
        /*******************************************************
        返回vendor/phpseclib/phpseclib/phpseclib的绝对路径目录
        是个数组
        return array(
        $vendorDir . '/phpseclib/phpseclib/phpseclib',
        );
         */
        $includePaths = require __DIR__ . '/include_paths.php';
        //将一个或多个单元压入数组的末尾（入栈）
        array_push($includePaths, get_include_path());

        //get_include_path()获取当前的 include_path 配置选项

        //设置 include_path 配置选项       //PATH_SEPARATOR路径分隔符  :
        set_include_path(join(PATH_SEPARATOR, $includePaths));

        //join此函数是该函数的别名implode().就是把数组分割成字符串，第一个参数指定用什么分割
        //explode() - 使用一个字符串分割另一个字符串
   //************************************************************************************************
        //返回一个数组路径的指定文件的路径vendor下面的全部库
        $map = require __DIR__ . '/autoload_namespaces.php';
/*
        return array(
            'Whoops' => array($vendorDir . '/filp/whoops/src'),
            'System' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
            'Symfony\\Component\\Translation\\' => array($vendorDir . '/symfony/translation'),
            'Symfony\\Component\\Routing\\' => array($vendorDir . '/symfony/routing'),
            'Symfony\\Component\\Process\\' => array($vendorDir . '/symfony/process'),
            'Symfony\\Component\\HttpKernel\\' => array($vendorDir . '/symfony/http-kernel'),
            'Symfony\\Component\\HttpFoundation\\' => array($vendorDir . '/symfony/http-foundation'),
            'Symfony\\Component\\Finder\\' => array($vendorDir . '/symfony/finder'),
            'Symfony\\Component\\Filesystem\\' => array($vendorDir . '/symfony/filesystem'),
            'Symfony\\Component\\EventDispatcher\\' => array($vendorDir . '/symfony/event-dispatcher'),
            'Symfony\\Component\\DomCrawler\\' => array($vendorDir . '/symfony/dom-crawler'),
            'Symfony\\Component\\Debug\\' => array($vendorDir . '/symfony/debug'),
            'Symfony\\Component\\CssSelector\\' => array($vendorDir . '/symfony/css-selector'),
            'Symfony\\Component\\Console\\' => array($vendorDir . '/symfony/console'),
            'Symfony\\Component\\BrowserKit\\' => array($vendorDir . '/symfony/browser-kit'),
            'Stack' => array($vendorDir . '/stack/builder/src'),
            'Psr\\Log\\' => array($vendorDir . '/psr/log'),
            'Predis' => array($vendorDir . '/predis/predis/lib'),
            'Patchwork' => array($vendorDir . '/patchwork/utf8/class'),
            'PHPParser' => array($vendorDir . '/nikic/php-parser/lib'),
            'Normalizer' => array($vendorDir . '/patchwork/utf8/class'),
            'Net' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
            'Math' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
            'Jeremeamia\\SuperClosure' => array($vendorDir . '/jeremeamia/SuperClosure/src'),
            'Illuminate' => array($vendorDir . '/laravel/framework/src'),
            'File' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
            'Crypt' => array($vendorDir . '/phpseclib/phpseclib/phpseclib'),
            'ClassPreloader' => array($vendorDir . '/classpreloader/classpreloader/src'),
            'Carbon' => array($vendorDir . '/nesbot/carbon/src'),
            'Boris' => array($vendorDir . '/d11wtq/boris/lib'),
        );
*/
//************************************************************************************************



        foreach ($map as $namespace => $path) {
            //调用composer/classloader.php里的对象方法set
            //把路径全部以二维数组的方式存到$loader对象的(私人)prefixesPsr0数组中
           $loader->set($namespace, $path);
        }


        //返回下面的数组里面是monolog的路径覆盖$map上面的变量
        $map = require __DIR__ . '/autoload_psr4.php';
        /*
        return array(
            'Monolog\\' => array($vendorDir . '/monolog/monolog/src/Monolog'),
        );
       */
        foreach ($map as $namespace => $path) {
            //判断是不是monolog文件如果是就放入$loader对象的下面俩个变量中记录长度以及放入路径
           // prefixLengthsPsr4['Monolog'[0]]['Monolog'] = $length;
           // prefixDirsPsr4[$prefix] = (array) $paths;
            $loader->setPsr4($namespace, $path);
        }



      //****************  ********  ********  ********  ********  ********
        $classMap = require __DIR__ . '/autoload_classmap.php';
       //返回非常一个数组里面有非常多得库文件路径都是vendor下得只有下面五个是项目有关的
      /** 一个是基本控制器，还有个home控制器,还有数据文件,还有个模型文件user，testCase*/
       // 'BaseController' => $baseDir . '/app/controllers/BaseController.php',
       //'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
       // 'HomeController' => $baseDir . '/app/controllers/HomeController.php',
       // 'TestCase' => $baseDir . '/app/tests/TestCase.php',
       // 'User' => $baseDir . '/app/models/User.php',

        //如果存在数组就添加到$loader对象的$classMap变量数组中
        if ($classMap) {
            $loader->addClassMap($classMap);
        }

        //注册自动加载函数加载的是$loader的loadClass方法
        //让库里面的文件都可以加载到因为路径已经放入数组
        $loader->register(true);


   //*****************************************************************************
       //返回一个数组里面是文件路径就是以下四个文件
        $includeFiles = require __DIR__ . '/autoload_files.php';
        /*
        return array(
            $vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php',
            $vendorDir . '/phpseclib/phpseclib/phpseclib/Crypt/Random.php',
            $vendorDir . '/ircmaxell/password-compat/lib/password.php',
            $vendorDir . '/laravel/framework/src/Illuminate/Support/helpers.php',
        );
        */
    //*****************************************************************************
        foreach ($includeFiles as $file) {
            //把autoload_files.php中得几个文件包含进来
            composerRequire316e04ba6f3d72138130804752d2af64($file);
        }
        //返回classLoader.php中ClassLoader对象
        return $loader;
    }
}

function composerRequire316e04ba6f3d72138130804752d2af64($file)
{
    require $file;
}
