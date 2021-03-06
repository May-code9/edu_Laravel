<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('course_id');
          $table->integer('category_id');
          $table->integer('content_number');
          $table->integer('week_no');
          $table->string('content_title');
          $table->string('content_pdf');
          $table->text('content_text');
          $table->string('content_image')->nullable();
          $table->string('content_video')->nullable();
          $table->softDeletes();
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
        Schema::dropIfExists('contents');
    }
}
