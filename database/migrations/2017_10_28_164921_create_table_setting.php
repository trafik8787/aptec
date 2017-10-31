<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email_user')->comment('E-Mail получателя формы');
            $table->string('count_last_article')->comment('Количество последних статей');
            $table->string('count_article_page')->comment('Количество статей на страницу');
            $table->string('count_last_faq')->comment('Количество последних вопросов');
            $table->string('count_faq_page')->comment('Количество вопросов на страницу');
            $table->string('count_random_faq')->comment('Количество рандомных вопросов');
            $table->string('admin_email2')->comment('Admin E-mail 2');
            $table->string('admin_email3')->comment('Admin E-mail 3');
            $table->string('admin_email4')->comment('Admin E-mail 4');
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
        Schema::dropIfExists('settings');
    }
}
