<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestSomething extends Migration
{
    /**
     * миграцию созадется с помощю команды
     * ./vendor/bin/sail php artisan make:migration имя_миграции
     *
     * Все наследуется через extends Migration
     * Должны быть зеркальные . В up добовляем колонку, значит в down убераем колонку
     *
     * Если мы зададим название осмыслено то он уже нам все заполнит например
     * ./vendor/bin/sail php artisan make:migration create_orders_table

     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
