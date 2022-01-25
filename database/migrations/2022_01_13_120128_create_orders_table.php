<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Так выглядит создание таблици
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            // При создание автоматом таблицу он создает 2 колонки можно их записать так или в сокрашкнной форме
            // $table->bigInteger('id', true)->unsigned(); = $table->id()
            // $table->timestamp('created_at'); и $table->timestamp('updated_at'); =  $table->timestamp()
            $table->bigInteger('id', true)->unsigned();
            $table->bigInteger('user_id', false, true);
            $table->tinyInteger('status');
            $table->decimal('total_price', 10, 2 );
            $table->text('comment');
            $table->string('customer_address', 255);
            $table->boolean('paid');
            $table->timestamp('created_at');
            $table->integer('product_count');
        });
    }

    /**
     * Reverse the migrations.
     * это удаление, когда будет откат
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
