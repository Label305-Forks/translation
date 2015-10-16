<?php

use Illuminate\Database\Migrations\Migration;

class CreateStaticLanguagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('static_languages', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('locale', 6)->unique();
            $table->string('name', 60)->unique();
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
        Schema::drop('static_languages');
    }

}