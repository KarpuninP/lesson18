<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function tasks()
    {
        //return $this->belongsToMany(Task::class);
        return $this->belongsTo(Task::class);
    }

    public function status ()
    {
        //return $this->belongsToMany(Label::class);
        return $this->hasMany(Task::class);
    }

}

