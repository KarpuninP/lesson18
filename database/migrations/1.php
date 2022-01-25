<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnInOrdersTable extends Migration
{
    /**
     * Изменил название, потому что не ставится doctrine/dbal package, но оставил себе для примера в будующем
     * Изменение конлонки но перед этим установить пакет doctrine/dbal package
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('comment', 255)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->text('comment')->change();
        });
    }
}
