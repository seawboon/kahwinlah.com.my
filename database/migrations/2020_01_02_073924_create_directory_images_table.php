<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('directory_images', function (Blueprint $table) {
          $table->increments('id');
          $table->string('title')->nullable();
          $table->string('subtitle')->nullable();
          $table->string('image');
          $table->boolean('is_featured')->default(0);
          $table->integer('directory_id')->unsigned();
          $table->foreign('directory_id')->references('id')->on('directories');
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
        Schema::dropIfExists('directory_images');
    }
}
