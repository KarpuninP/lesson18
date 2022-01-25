<?php

namespace App\Http\Controllers;

use App\Models\Order;

class OrderControllers
{
    public $request = 1;
// разобратся чего не работает...

    public function debag ($request)
    {
        $this->test($request);
        return redirect(route('orders.test'));
    }

    // для теста
    public function test($data)
    {
        dd($data);
    }

    public function addInTabl()
    {
        // создаем обьект
        $order = new Order();
        // заполняем таблицу
        $order->user_id = 1;
        $order->status = 1;
        $order->name = 'boby';
        $order->total_price = 134.56;
        $order->comment = 'Some text';
        $order->customer_address = 'Kiev';
        $order->product_count = 10;
        // сохраняем с помощью команды
        $order->save();

    }

    public function mysql()
    {
        // Пример обычтного обрашение к бд через методы
        //Пример изменение статуса
        $orders = Order::query()->where('status', 1)->get();
        echo $orders . '<br>' . '<br>' . '<br>';
        foreach ($orders as $order) {
            if ($order->id == 7) {
                $order->status = 2;
                $order->save();
            }
        }
    }

    //-------------------- добовление в бд ( разобратся почему не рабоате)
    // перекидывает во вьюшку
    public function form()
    {
        return view('order-form');
    }

    //запись в базу данных
    public function store($request)
    {
        $order = new Order();
        $order->name = $request->post('name');
        $order->total_price = $request->post('total_price');
        $order->comment = $request->post('comment');
        $order->customer_address = $request->post('customer_address');
        $order->product_count = $request->post('product_count');
        $order->user_id = 1;
        $order->status = Order::STATUS_PENDING;
        $order->save();

       return redirect(route('orders.mysql'));
    }

    public function viewMysql()
    {
        $orders = Order::query()->get();
        foreach ($orders as $order) {
            echo $order->id . ': ' . $order->name . ', ' . $order->user_id . '<br>';
        }
    }
//---------------------------------



}




