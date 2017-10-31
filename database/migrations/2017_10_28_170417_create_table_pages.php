<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_page')->comment('Название в меню');
            $table->string('title')->comment('HTML Title');
            $table->string('keywords')->comment('HTML Keywords');
            $table->string('description')->comment('HTML Description');
            $table->mediumText('text')->comment('Текст');
            $table->mediumText('text_right')->comment('Текст справа');
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
        Schema::dropIfExists('pages');
    }
}
