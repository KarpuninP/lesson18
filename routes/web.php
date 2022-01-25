<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/2', function () {
    return view('welcome');

});
// пример написание роутера
Route::get('/1', [UserController::class, 'index']);


// Пример групировки по ссылке
Route::prefix('orders')->group(function ($router) {
    // Переход на тестовую стрницу заходим в контролер
    $router->get('/1', [\App\Http\Controllers\OrderControllers::class,'test'])->name('orders.test');
    // добавление в таблицу данные и задем имя
    $router->get('/add-in-tabl', [\App\Http\Controllers\OrderControllers::class,'addInTabl'])->name('orders.addInTabl');
    // работа с бд
    $router->get('/mysql', [\App\Http\Controllers\OrderControllers::class,'mysql'])->name('orders.mysql');
    // заходим через контролер -> там на вьюшку
    $router->get('/form', [\App\Http\Controllers\OrderControllers::class,'form'])->name('orders.form');
    // работа с параметром постом
    $router->post('/', [\App\Http\Controllers\OrderControllers::class,'store'])->name('orders.store');
    //
    $router->get('/viewmysql', [\App\Http\Controllers\OrderControllers::class,'viewMysql'])->name('orders.viewMysql');
    $router->post('/', [\App\Http\Controllers\OrderControllers::class,'debag'])->name('orders.debag');
});

// можно все обьедениеть в группы/ и дальше группы в групы
Route::prefix('status')->group(function ($router) {
    $router->get('/addintabl', [\App\Http\Controllers\StatusController::class,'addInTabl']);
    $router->get('/show', [\App\Http\Controllers\StatusController::class,'show']);
    $router->get('/showtask', [\App\Http\Controllers\StatusController::class,'showTask']);
    $router->get('/showstatus', [\App\Http\Controllers\StatusController::class,'showStatus']);
    $router->get('/showlable', [\App\Http\Controllers\StatusController::class,'showLable']);
});
// ------------ урок 18 -----------
// указываем Route::(фасад) затем каким методом мы получи то что в скобках и куда перенаправить запрос и какой метод использовать
Route::get('/3', [HomeController::class, 'index']);
// руты бывают
//Route::post();
//Route::put();
//Route::patch();
//Route::delete();
//Route::options();
// пост запрос / можно задать имя. Если в группе надо именовать с точкой
Route::post('/users/store', [UserController::class, 'store'])->name('store');
// комбенированый запрос
Route::match(['POST', 'GET'], '/user/combine', [UserController::class, 'combine']);
// все запросы
Route::any('/user/any', [UserController::class, 'any']);
// Параметр в сылке. Например у нас вместо id будет 1 или 2 поэтому указываем в скобках, ? означает что необезательно к заполнению
Route::get('/users/show/{id?}', [UserController::class, 'show']);
// Описание всех роутов сразу (ресурсные роуты)
Route::resource('products', ProductController::class);


//----- дз ----

Route::get('/', [HomeController::class, 'index']);

Route::prefix('users')->group(function ($router) {
    $router->post('/registration', [UserController::class, 'registration'])->name('users.registration');
    $router->post('/authorization', [UserController::class, 'authorization'])->name('users.authorization');
    $router->get('/view', [UserController::class, 'view'])->name('users.view');
    $router->delete('/delete', [UserController::class, 'delete'])->name('users.delete');
});
Route::resource('task', TaskController::class);

