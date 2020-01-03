<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directories', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name', 500);
          $table->string('slug',500);
          $table->string('content',500);
          $table->string('phone1', 16)->nullable();
          $table->string('phone2', 16)->nullable();
          $table->string('fax', 16)->nullable();
          $table->string('website')->nullable();
          $table->string('fb_url')->nullable();
          $table->string('email')->nullable();
          $table->integer('category_id')->unsigned();
          $table->foreign('category_id')->references('id')->on('directory_categories');
          $table->boolean('is_published')->default(true);
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
        Schema::dropIfExists('directories');
    }
}
