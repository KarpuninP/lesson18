<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToTaskLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_label', function (Blueprint $table) {
            $table->foreign('task_id', 'task_label_tasks_task_id')
                ->references('id')
                ->on('tasks');
            $table->foreign('label_id', 'task_label_labels_label_id')
                ->references('id')
                ->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_label', function (Blueprint $table) {
            $table->dropForeign('task_label_tasks_task_id');
            $table->dropForeign('task_label_labels_label_id');
        });
    }
}
