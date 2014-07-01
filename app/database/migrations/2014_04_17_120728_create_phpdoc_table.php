<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhpdocTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
     * 在 up 方法中对数据库做您想要的改变
	 */
	public function up()
	{
        Schema::create('phpdoc', function($table)
    {
        $table->increments('id');
        $table->string('stdlib')->unique();
        $table->string('framework');
        $table->timestamps();
    });





	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
     * 在 down 方法中撤消所做的改变。
	 */
	public function down()
	{



        Schema::drop('phpdoc');



	}

}
