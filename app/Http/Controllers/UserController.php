<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

class UserController extends Controller
{
//    public function index()
//    {
//        // обрашение в бд
//        $users = User::query()->limit(10)->get();
//         // перебор
//        foreach ($users as $user) {
//            echo $user->email . '<br>';
//        }
//    }
//
//
//    // проверка вывода в роуте
//    public function test()
//    {
//        echo 'hi';
//    }
//---------------------------------------------------------------------
//    public function store()
//    {
//        return 'Post method';
//    }
//
//    public function combine()
//    {
//        return 'combine method';
//    }
//
//    public function any()
//    {
//        return 'any method';
//    }
//
//    public function show($id = Null)
//    {
//        return 'Show method with id ' . $id;
//    }

//registration, authorization, viewing and deletion

    public function registration()
    {
        return 'Show method registration ' ;
    }

    public function authorization()
    {
        return 'Show method authorization ' ;
    }

    public function view()
    {
        return 'Show method view' ;
    }

    public function delete()
    {
        return 'Show method delete ' ;
    }
}
