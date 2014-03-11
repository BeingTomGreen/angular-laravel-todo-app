<?php

use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('tasks', function($table)
    {
      $table->increments('id');
      $table->string('title');
      $table->smallInteger('completed');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::drop('tasks');
  }

}