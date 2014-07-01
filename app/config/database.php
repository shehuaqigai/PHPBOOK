<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| PDO Fetch Style
	|--------------------------------------------------------------------------
	|
	| By default, database results will be returned as instances of the PHP
	| stdClass object; however, you may desire to retrieve records in an
	| array format for simplicity. Here you can tweak the fetch style.
	|
	*/
	 /*
    |--------------------------------------------------------------------------
    | PDO 类型
    |--------------------------------------------------------------------------
    | 默认情况下 Laravel 的数据库是用 PDO 来操作的，这样能极大化的提高数据库兼容性。
    | 那么默认查询返回的类型是一个对象，也就是如下的默认设置。
    | 如果你需要返回的是一个数组，你可以设置成 'PDO::FETCH_ASSOC'
    */


	'fetch' => PDO::FETCH_CLASS,

	/*
	|--------------------------------------------------------------------------
	| Default Database Connection Name
	|--------------------------------------------------------------------------
	|
	| Here you may specify which of the database connections below you wish
	| to use as your default connection for all database work. Of course
	| you may use many connections at once using the Database library.
	|
	*/
    /*
    |--------------------------------------------------------------------------
    | 默认的数据库连接名
    |--------------------------------------------------------------------------
    | 这里所说的名字是和下面的 'connections' 中的名称对应的，而不是指你用的什么数据库
    | 为了你更好的理解，我在这里换了一个名字
    */

	'default' => 'sqlite',

	/*
	|--------------------------------------------------------------------------
	| Database Connections
	|--------------------------------------------------------------------------
	|
	| Here are each of the database connections setup for your application.
	| Of course, examples of configuring each database platform that is
	| supported by Laravel is shown below to make development simple.
	|
	|
	| All database work in Laravel is done through the PHP PDO facilities
	| so make sure you have the driver for your particular database of
	| choice installed on your machine before you begin development.
	|
	*/
    /*
   |--------------------------------------------------------------------------
   | 数据库连接名
   |--------------------------------------------------------------------------
   | 这里就是设置各种数据库的配置的，每个数组里的 'driver' 表明了你要用的数据库类型
   | 同一种数据库类型可以设置多种配置，名字区分开就行，就像下面的 'mysql' 和 'meinv'
   | 其他的么，我觉得不需要解释了吧，就是字面意思，我相信你英文的能力（其实是我英文不好）
   */

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/phpdoc.sqlite',
			'prefix'   => 'p_',
		),

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),

	/*
	|--------------------------------------------------------------------------
	| Migration Repository Table
	|--------------------------------------------------------------------------
	|
	| This table keeps track of all the migrations that have already run for
	| your application. Using this information, we can determine which of
	| the migrations on disk haven't actually been run in the database.
	|
	*/

	'migrations' => 'migrations',

	/*
	|--------------------------------------------------------------------------
	| Redis Databases
	|--------------------------------------------------------------------------
	|
	| Redis is an open source, fast, and advanced key-value store that also
	| provides a richer set of commands than a typical key-value systems
	| such as APC or Memcached. Laravel makes it easy to dig right in.
	|
	*/

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
