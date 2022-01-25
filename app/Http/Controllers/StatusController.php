<?php

namespace App\Http\Controllers;

use App\Models\Label;
use App\Models\Status;
use App\Models\Task;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function addInTabl()
    {
        // создаем обьект
        $status = new Status();
        // заполняем таблицу
        $status->name = 'bob';
        $status->save();
    }
    public function  show()
    {
        $status = Status::query()->where('id', 2)->first();
       $task = $status->task;

        return $task;
    }

    public function  showTask()
    {
        $task = Task::find(1);
        $status= $task->status;

        return $status;
    }

    public function  showStatus()
    {
        $status = Status::find(1);
        $task= $status->task;

        return $task;
    }

    public function showLable()
    {
        $lable = Label::find(1);
        $tasksResult = $lable->tasks;

        $tasks = Task::find(1);
        $lableResult = $tasks->lable;
        return $tasksResult . '<br>' . $lableResult;
    }
}
