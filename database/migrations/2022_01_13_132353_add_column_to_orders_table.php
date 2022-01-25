<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToOrdersTable extends Migration
{
    /**
     * Добовление колонки в таблице
     *
     * @return void
     */
    public function up()
    {
        // добавление колонке name в таблицу orders после колонке status
        Schema::table('orders', function (Blueprint $table) {
            $table->string('name',255)->after('status');
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
            //
        });
    }
}
