<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
   public function status()
   {
       //return $this->belongsToMany(Status::class);
       return $this->hasMany(Status::class);
   }

    public function tasks()
    {
        //return $this->belongsToMany(Task::class);
        return $this->belongsTo(Task::class);
    }


    public function tasks1()
    {
        return $this->belongsToMany(Task::class);
    }
}
