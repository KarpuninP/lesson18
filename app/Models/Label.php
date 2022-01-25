<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    public function statuses()
    {
       return $this->belongsToMany(Status::class);
    }


    public function lables()
    {
        return $this->belongsToMany(Label::class);
    }
}
