<?php

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
//返回composer下得Classloader.php文件里的classLoader对象
/**
SPL是Standard PHP Library(标准PHP库)它是PHP5引入的一个扩展库，
其主要功能包括autoload机制的实现及包括各种Iterator接口或类。
SPL autoload机制的实现是通过将函数指针autoload_func指向自己实现的具有自动装载功能的函数来实现的。
SPL有两个不同的函数 spl_autoload, spl_autoload_call，通过将autoload_func指向这两个不同的函数地址来实现不同的自动加载机制。
spl_autoload_call — 尝试调用所有已注册的__autoload()函数来装载请求类
spl_autoload — __autoload()函数的默认实现
SPL扩展提供了spl_autoload_register($autoload_function, $throw = true, $prepend = false)函数,
该函数用来将$autoload_function注册到自动加载栈中.当调用spl_auto_register()函数后, __autoload()函数将失效.
spl_autoload_register($autoload_function, $throw = true, $prepend = false)接收三个参数:
第一个参数,用来定义自动加载的回调函数.该参数可以为字符串, 也可以为数组, 也可以为空, 为空时指向spl_autoload()函数,
这个函数会自动查找小写类名, 扩展名为.inc或者.php的文件. $autoload_function有以下四种形式:
1.spl_autoload_register('autofunc');//回调函数为function
2.spl_autoload_register(array('Class', 'Method'));//回调函数为静态类里面的静态方法
3.spl_autoload_register(array($obj, 'Method'));//$obj为类的实例, Mehod为方法
4.spl_autoload_register();//没有参数
第二个参数,用来设定发生错误时是否抛出异常
第三个参数,是否预先将回调函数注册到自动加载栈中,PHP5.3.0中加入
 */
require __DIR__.'/../vendor/autoload.php';


/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| compiled class file which contains all of the classes commonly used
| by a request. The Artisan "optimize" is used to create this file.
|
*/
//dramatically [drə'mætikəli]引人注目地；戏剧地
//artisan [,ɑ:ti'zæn, 'ɑ:tizən]. 工匠，技工
//引入compiled.php编译文件实际上是一个压缩了多个类的文件有1万多行代码

if (file_exists($compiled = __DIR__.'/compiled.php'))
{
	require $compiled;
}
//compiled.php里的所有文件已经命名空间

/**
namespace Illuminate\Support;
class ClassLoader


namespace Illuminate\Container;
use Closure;
use ArrayAccess;
use ReflectionClass;
use ReflectionParameter;
class BindingResolutionException extends \Exception

namespace Symfony\Component\HttpKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
interface HttpKernelInterface

namespace Symfony\Component\HttpKernel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
interface TerminableInterface

namespace Illuminate\Support\Contracts;
interface ResponsePreparerInterface


namespace Illuminate\Foundation;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Config\FileLoader;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Facade;
use Illuminate\Events\EventServiceProvider;
use Illuminate\Routing\RoutingServiceProvider;
use Illuminate\Exception\ExceptionServiceProvider;
use Illuminate\Config\FileEnvironmentVariablesLoader;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Illuminate\Support\Contracts\ResponsePreparerInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class Application extends Container implements HttpKernelInterface, TerminableInterface, ResponsePreparerInterface

namespace Illuminate\Foundation;
use Closure;
class EnvironmentDetector

namespace Illuminate\Http;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
class Request extends SymfonyRequest

namespace Illuminate\Http;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
class FrameGuard implements HttpKernelInterface

namespace Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
class Request

namespace Symfony\Component\HttpFoundation;
class ParameterBag implements \IteratorAggregate, \Countable


namespace Symfony\Component\HttpFoundation;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class FileBag extends ParameterBag

namespace Symfony\Component\HttpFoundation;
class ServerBag extends ParameterBag

namespace Symfony\Component\HttpFoundation;
class HeaderBag implements \IteratorAggregate, \Countable

namespace Symfony\Component\HttpFoundation\Session;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
interface SessionInterface

namespace Symfony\Component\HttpFoundation\Session;
interface SessionBagInterface

namespace Symfony\Component\HttpFoundation\Session\Attribute;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
interface AttributeBagInterface extends SessionBagInterface


namespace Symfony\Component\HttpFoundation\Session\Attribute;
class AttributeBag implements AttributeBagInterface, \IteratorAggregate, \Countable


namespace Symfony\Component\HttpFoundation\Session\Storage;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
class MetadataBag implements SessionBagInterface


namespace Symfony\Component\HttpFoundation;
class AcceptHeaderItem


namespace Symfony\Component\HttpFoundation;
class AcceptHeader

amespace Symfony\Component\Debug;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Debug\Exception\FlattenException;
class ExceptionHandler


namespace Illuminate\Support;
use ReflectionClass;
abstract class ServiceProvider


namespace Illuminate\Exception;
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Handler\JsonResponseHandler;
use Illuminate\Support\ServiceProvider;
class ExceptionServiceProvider extends ServiceProvider


namespace Illuminate\Routing;
use Illuminate\Support\ServiceProvider;
class RoutingServiceProvider extends ServiceProvider


namespace Illuminate\Events;
use Illuminate\Support\ServiceProvider;
class EventServiceProvider extends ServiceProvider


namespace Illuminate\Support\Facades;
use Mockery\MockInterface;
abstract class Facade

namespace Illuminate\Support;
class Str

namespace Symfony\Component\Debug;
use Psr\Log\LoggerInterface;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\DummyException;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface;
class ErrorHandler


namespace Symfony\Component\HttpKernel\Debug;
use Symfony\Component\Debug\ErrorHandler as DebugErrorHandler;
class ErrorHandler extends DebugErrorHandler


namespace Illuminate\Config;
use Closure;
use ArrayAccess;
use Illuminate\Support\NamespacedItemResolver;
class Repository extends NamespacedItemResolver implements ArrayAccess


namespace Illuminate\Support;
class NamespacedItemResolver


namespace Illuminate\Config;
use Illuminate\Filesystem\Filesystem;
class FileLoader implements LoaderInterface


namespace Illuminate\Config;
interface LoaderInterface

namespace Illuminate\Config;
interface EnvironmentVariablesLoaderInterface


namespace Illuminate\Config;
use Illuminate\Filesystem\Filesystem;
class FileEnvironmentVariablesLoader implements EnvironmentVariablesLoaderInterface

namespace Illuminate\Config;
class EnvironmentVariables


namespace Illuminate\Filesystem;
use FilesystemIterator;
use Symfony\Component\Finder\Finder;
class FileNotFoundException extends \Exception


namespace Illuminate\Foundation;
class AliasLoader


namespace Illuminate\Foundation;
use Illuminate\Filesystem\Filesystem;
class ProviderRepository

namespace Illuminate\Cookie;
use Illuminate\Support\ServiceProvider;
class CookieServiceProvider extends ServiceProvider


namespace Illuminate\Database;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Connectors\ConnectionFactory;
class DatabaseServiceProvider extends ServiceProvider

namespace Illuminate\Encryption;
use Illuminate\Support\ServiceProvider;
class EncryptionServiceProvider extends ServiceProvider


namespace Illuminate\Filesystem;
use Illuminate\Support\ServiceProvider;
class FilesystemServiceProvider extends ServiceProvider


namespace Illuminate\Session;
use Illuminate\Support\ServiceProvider;
class SessionServiceProvider extends ServiceProvider


namespace Illuminate\View;
use Illuminate\Support\MessageBag;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Compilers\BladeCompiler;
class ViewServiceProvider extends ServiceProvider

namespace Illuminate\Routing;
interface RouteFiltererInterface



namespace Illuminate\Routing;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class Router implements HttpKernelInterface, RouteFiltererInterface


namespace Illuminate\Routing;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Matching\UriValidator;
use Illuminate\Routing\Matching\HostValidator;
use Illuminate\Routing\Matching\MethodValidator;
use Illuminate\Routing\Matching\SchemeValidator;
use Symfony\Component\Routing\Route as SymfonyRoute;
class Route


namespace Illuminate\Routing;
use Countable;
use ArrayIterator;
use IteratorAggregate;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
class RouteCollection implements Countable, IteratorAggregate


namespace Illuminate\Routing;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Container\Container;
class ControllerDispatcher

namespace Illuminate\Routing;
use InvalidArgumentException;
use Symfony\Component\HttpFoundation\Request;
class UrlGenerator


namespace Illuminate\Routing\Matching;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
interface ValidatorInterface

namespace Illuminate\Routing\Matching;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
class HostValidator implements ValidatorInterface


namespace Illuminate\Routing\Matching;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
class MethodValidator implements ValidatorInterface


namespace Illuminate\Routing\Matching;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
class SchemeValidator implements ValidatorInterface


namespace Illuminate\Routing\Matching;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
class UriValidator implements ValidatorInterface


namespace Illuminate\Workbench;
use Illuminate\Support\ServiceProvider;
use Illuminate\Workbench\Console\WorkbenchMakeCommand;
class WorkbenchServiceProvider extends ServiceProvider

namespace Illuminate\Events;
use Illuminate\Container\Container;
class Dispatcher

namespace Illuminate\Database\Eloquent;
use DateTime;
use ArrayAccess;
use Carbon\Carbon;
use LogicException;
use Illuminate\Events\Dispatcher;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\Contracts\ArrayableInterface;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\ConnectionResolverInterface as Resolver;
abstract class Model implements ArrayAccess, ArrayableInterface, JsonableInterface

namespace Illuminate\Support\Contracts;
interface ArrayableInterface

namespace Illuminate\Support\Contracts;
interface JsonableInterface

namespace Illuminate\Database;
use Illuminate\Database\Connectors\ConnectionFactory;
class DatabaseManager implements ConnectionResolverInterface

namespace Illuminate\Database;
interface ConnectionResolverInterface

namespace Illuminate\Database\Connectors;
use PDO;
use Illuminate\Container\Container;
use Illuminate\Database\MySqlConnection;
use Illuminate\Database\SQLiteConnection;
use Illuminate\Database\PostgresConnection;
use Illuminate\Database\SqlServerConnection;
class ConnectionFactory

namespace Illuminate\Session;
use Closure;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class Middleware implements HttpKernelInterface



namespace Illuminate\Session;
use SessionHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;
class Store implements SessionInterface


namespace Illuminate\Session;
use Illuminate\Support\Manager;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NullSessionHandler;
class SessionManager extends Manager

namespace Illuminate\Support;
use Closure;
abstract class Manager


namespace Illuminate\Cookie;
use Symfony\Component\HttpFoundation\Cookie;
class CookieJar


namespace Illuminate\Cookie;
use Illuminate\Encryption\Encrypter;
use Illuminate\Encryption\DecryptException;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class Guard implements HttpKernelInterface

namespace Illuminate\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class Queue implements HttpKernelInterface


namespace Illuminate\Encryption;
class DecryptException extends \RuntimeException

class Encrypter

namespace Illuminate\Support\Facades;
class Log extends Facade


namespace Illuminate\Log;
use Monolog\Logger;
use Illuminate\Support\ServiceProvider;
class LogServiceProvider extends ServiceProvider

namespace Illuminate\Log;
use Closure;
use Illuminate\Events\Dispatcher;
use Monolog\Handler\StreamHandler;
use Monolog\Logger as MonologLogger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;
class Writer

namespace Monolog;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Psr\Log\LoggerInterface;
use Psr\Log\InvalidArgumentException;
class Logger implements LoggerInterface


namespace Psr\Log;
interface LoggerInterface


namespace Monolog\Handler;
use Monolog\Logger;
use Monolog\Formatter\FormatterInterface;
use Monolog\Formatter\LineFormatter;
abstract class AbstractHandler implements HandlerInterface


namespace Monolog\Handler;
abstract class AbstractProcessingHandler extends AbstractHandler


namespace Monolog\Handler;
use Monolog\Logger;
class StreamHandler extends AbstractProcessingHandler


namespace Monolog\Handler;
use Monolog\Logger;
class RotatingFileHandler extends StreamHandler


namespace Monolog\Handler;
use Monolog\Formatter\FormatterInterface;
interface HandlerInterface


namespace Illuminate\Support\Facades;
class App extends Facade


namespace Illuminate\Exception;
use Exception;
interface ExceptionDisplayerInterface


namespace Illuminate\Exception;
use Exception;
use Symfony\Component\Debug\ExceptionHandler;
class SymfonyDisplayer implements ExceptionDisplayerInterface


namespace Illuminate\Exception;
use Exception;
use Whoops\Run;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
class WhoopsDisplayer implements ExceptionDisplayerInterface


namespace Illuminate\Exception;
use Closure;
use ErrorException;
use ReflectionFunction;
use Illuminate\Support\Contracts\ResponsePreparerInterface;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\Debug\Exception\FatalErrorException as FatalError;
class Handler


namespace Illuminate\Support\Facades;
class Route extends Facade


namespace Illuminate\View\Engines;
use Closure;
class EngineResolver


namespace Illuminate\View;
interface ViewFinderInterface


namespace Illuminate\View;
use Illuminate\Filesystem\Filesystem;
class FileViewFinder implements ViewFinderInterface



namespace Illuminate\View;
use Closure;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\Support\Contracts\ArrayableInterface as Arrayable;
class Environment


namespace Illuminate\Support\Contracts;
interface MessageProviderInterface


namespace Illuminate\Support;
use Countable;
use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\Contracts\ArrayableInterface;
use Illuminate\Support\Contracts\MessageProviderInterface;
class MessageBag implements ArrayableInterface, Countable, JsonableInterface, MessageProviderInterface


namespace Illuminate\Support\Facades;
class View extends Facade


namespace Illuminate\Support\Contracts;
interface RenderableInterface


namespace Illuminate\View;
use ArrayAccess;
use Closure;
use Illuminate\Support\MessageBag;
use Illuminate\View\Engines\EngineInterface;
use Illuminate\Support\Contracts\MessageProviderInterface;
use Illuminate\Support\Contracts\ArrayableInterface as Arrayable;
use Illuminate\Support\Contracts\RenderableInterface as Renderable;
class View implements ArrayAccess, Renderable

namespace Illuminate\View\Engines;
interface EngineInterface


namespace Illuminate\View\Engines;
use Illuminate\View\Exception;
class PhpEngine implements EngineInterface


namespace Symfony\Component\HttpFoundation;
class Response


namespace Illuminate\Http;
use ArrayObject;
use Symfony\Component\HttpFoundation\Cookie;
use Illuminate\Support\Contracts\JsonableInterface;
use Illuminate\Support\Contracts\RenderableInterface;
class Response extends \Symfony\Component\HttpFoundation\Response



namespace Symfony\Component\HttpFoundation;
class ResponseHeaderBag extends HeaderBag



namespace Symfony\Component\HttpFoundation;
class Cookie



namespace Whoops;
use Whoops\Handler\HandlerInterface;
use Whoops\Handler\Handler;
use Whoops\Handler\CallbackHandler;
use Whoops\Exception\Inspector;
use Whoops\Exception\ErrorException;
use InvalidArgumentException;
use Exception;
class Run


namespace Whoops\Handler;
use Whoops\Exception\Inspector;
use Whoops\Run;
use Exception;
interface HandlerInterface


namespace Whoops\Handler;
use Whoops\Handler\HandlerInterface;
use Whoops\Exception\Inspector;
use Whoops\Run;
use Exception;
abstract class Handler implements HandlerInterface


namespace Whoops\Handler;
use Whoops\Handler\Handler;
use InvalidArgumentException;
class PrettyPageHandler extends Handler



namespace Whoops\Handler;
use Whoops\Handler\Handler;
use Whoops\Exception\Frame;
class JsonResponseHandler extends Handler


namespace Stack;
use Symfony\Component\HttpKernel\HttpKernelInterface;
class Builder


namespace Stack;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\TerminableInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class StackedHttpKernel implements HttpKernelInterface, TerminableInterface

*/



/*
|--------------------------------------------------------------------------
| Setup Patchwork UTF-8 Handling
|--------------------------------------------------------------------------
|
| The Patchwork library provides solid handling of UTF-8 strings as well
| as provides replacements for all mb_* and iconv type functions that
| are not available by default in PHP. We'll setup this stuff here.
|
*/
/**
php-mbstring
mbstring库全称是Multi-Byte String 即各种语言都有自己的编码，
 他们的字节数是不一样的，目前PHP内部的编码只支持ISO-8859-*, EUC-JP, UTF-8
其他的编码的语言是没办法在PHP程序上正确显示的
解决的方法就是通过php的mbstring函数库来解决
PHP中的mbstring的作用：
主要是还是为了解决在php中，GB2312 encode 转换为 UTF-8 encode
在Unix平台下安装是在编译php的时候加上--enable-mbstring=（需要支持的语言）
 *
patchwork['pætʃwɜːk]东拼西凑 拼布 补教 拼缝物
*/
Patchwork\Utf8\Bootup::initMbstring();

/*
|--------------------------------------------------------------------------
| Register The Laravel Auto Loader
|--------------------------------------------------------------------------
|
| We register an auto-loader "behind" the Composer loader that can load
| model classes on the fly, even if the autoload files have not been
| regenerated for the application. We'll add it to the stack here.
|
*/
//注册加载机制可以用
Illuminate\Support\ClassLoader::register();

/*
|--------------------------------------------------------------------------
| Register The Workbench Loaders
|--------------------------------------------------------------------------
|
| The Laravel workbench provides a convenient place to develop packages
| when working locally. However we will need to load in the Composer
| auto-load files for the packages so that these can be used here.
|
*/

if (is_dir($workbench = __DIR__.'/../workbench'))
{
	Illuminate\Workbench\Starter::start($workbench);
}
