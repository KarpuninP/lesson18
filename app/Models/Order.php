<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// что бы таблици подтягивались к сущности надо называть таблици в множественом числе
// а название класса в единственом
class Order extends Model
{
    public const STATUS_PENDING = 1;

    public const STATUS_PAID = 2;

    public const STATUS_SENT = 3;

}
