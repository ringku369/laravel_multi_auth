<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->enum('position', ['header', 'footer', 'body'])->default('header');
            $table->integer('parent_id')->nullable()->unsigned();
            //$table->foreign('parent_id')->references('id')->on('content_categories')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->boolean('last')->default(true);
            $table->smallInteger('sort')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('content_categories');
    }
}
