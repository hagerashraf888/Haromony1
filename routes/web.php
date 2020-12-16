<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\SingleRoomController;
use App\Http\Controllers\LivingRoomController;
use App\Http\Controllers\DinningRoomController;
use App\Http\Controllers\KitchenController;

use App\Http\Controllers\MasterBedController;
use App\Http\Controllers\SingleBedController;
use App\Http\Controllers\ClosetController;
use App\Http\Controllers\MirrorController;
use App\Http\Controllers\SofaController;
use App\Http\Controllers\ChairController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\CupboardController;



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

Route::get('/', function () {
    return view('welcome');
});



/* Master Room */

Route::get('/admin/get_rooms', [RoomController::class, 'get_rooms'])->name('get_rooms');

Route::get('/admin/add_room_page', [RoomController::class, 'add_room_page'])->name('add_room_page');
Route::post('/admin/add_room', [RoomController::class, 'add_room'])->name('add_room');

Route::get('/admin/edit_room_page/{id}', [RoomController::class, 'edit_room_page'])->name('edit_room_page');
Route::post('admin/update_room/{id}',[RoomController::class, 'update_room'])->name('update_room');

Route::get('/admin/delete_room/{id}', [RoomController::class, 'delete_room'])->name('delete_room');


/* Single Room */

Route::get('/admin/get_singleroom', [SingleRoomController::class, 'get_singleroom'])->name('get_singleroom');

Route::get('/admin/add_room_page', [SingleRoomController::class, 'add_room_page'])->name('add_room_page');
Route::post('/admin/add_room', [SingleRoomController::class, 'add_room'])->name('add_room');

Route::get('/admin/edit_room_page/{id}', [SingleRoomController::class, 'edit_room_page'])->name('edit_room_page');
Route::post('admin/update_room/{id}',[SingleRoomController::class, 'update_room'])->name('update_room');

Route::get('/admin/delete_room/{id}', [SingleRoomController::class, 'delete_room'])->name('delete_room');


/* Living Room */

Route::get('/admin/get_livingroom', [LivingRoomController::class, 'get_livingroom'])->name('get_livingroom');

Route::get('/admin/add_room_page', [LivingRoomController::class, 'add_room_page'])->name('add_room_page');
Route::post('/admin/add_room', [LivingRoomController::class, 'add_room'])->name('add_room');

Route::get('/admin/edit_room_page/{id}', [LivingRoomController::class, 'edit_room_page'])->name('edit_room_page');
Route::post('admin/update_room/{id}',[LivingRoomController::class, 'update_room'])->name('update_room');

Route::get('/admin/delete_room/{id}', [LivingRoomController::class, 'delete_room'])->name('delete_room');


/* Dinning Room */

Route::get('/admin/get_dinningroom', [DinningRoomController::class, 'get_dinningroom'])->name('get_dinningroom');

Route::get('/admin/add_room_page', [DinningRoomController::class, 'add_room_page'])->name('add_room_page');
Route::post('/admin/add_room', [DinningRoomController::class, 'add_room'])->name('add_room');

Route::get('/admin/edit_room_page/{id}', [DinningRoomController::class, 'edit_room_page'])->name('edit_room_page');
Route::post('admin/update_room/{id}',[DinningRoomController::class, 'update_room'])->name('update_room');

Route::get('/admin/delete_room/{id}', [DinningRoomController::class, 'delete_room'])->name('delete_room');


/* Kitchen */

Route::get('/admin/get_kitchen', [KitchenController::class, 'get_kitchen'])->name('get_kitchen');

Route::get('/admin/add_room_page', [KitchenController::class, 'add_room_page'])->name('add_room_page');
Route::post('/admin/add_room', [KitchenController::class, 'add_room'])->name('add_room');

Route::get('/admin/edit_room_page/{id}', [KitchenController::class, 'edit_room_page'])->name('edit_room_page');
Route::post('admin/update_room/{id}',[KitchenController::class, 'update_room'])->name('update_room');

Route::get('/admin/delete_room/{id}', [KitchenController::class, 'delete_room'])->name('delete_room');



/* Master Bed */

Route::get('/admin/get_masterbed', [MasterBedController::class, 'get_masterbed'])->name('get_masterbed');

Route::get('/admin/add_product_page', [MasterBedController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [MasterBedController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [MasterBedController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[MasterBedController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [MasterBedController::class, 'delete_product'])->name('delete_product');

/* Single Bed */

Route::get('/admin/get_singlebed', [SingleBedController::class, 'get_singlebed'])->name('get_singlebed');

Route::get('/admin/add_product_page', [SingleBedController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [SingleBedController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [SingleBedController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[SingleBedController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [SingleBedController::class, 'delete_product'])->name('delete_product');

/* Closet */

Route::get('/admin/get_closet', [ClosetController::class, 'get_closet'])->name('get_closet');

Route::get('/admin/add_product_page', [ClosetController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [ClosetController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [ClosetController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[ClosetController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [ClosetController::class, 'delete_product'])->name('delete_product');

/* Mirror */

Route::get('/admin/get_mirror', [MirrorController::class, 'get_mirror'])->name('get_mirror');

Route::get('/admin/add_product_page', [MirrorController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [MirrorController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [MirrorController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[MirrorController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [MirrorController::class, 'delete_product'])->name('delete_product');

/* Sofa */

Route::get('/admin/get_sofa', [SofaController::class, 'get_sofa'])->name('get_sofa');

Route::get('/admin/add_product_page', [SofaController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [SofaController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [SofaController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[SofaController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [SofaController::class, 'delete_product'])->name('delete_product');

/* Chair */

Route::get('/admin/get_chair', [ChairController::class, 'get_chair'])->name('get_chair');

Route::get('/admin/add_product_page', [ChairController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [ChairController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [ChairController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[ChairController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [ChairController::class, 'delete_product'])->name('delete_product');

/* Table */

Route::get('/admin/get_table', [TableController::class, 'get_table'])->name('get_table');

Route::get('/admin/add_product_page', [TableController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [TableController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [TableController::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[TableController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [TableController::class, 'delete_product'])->name('delete_product');

/* Cupboard */

Route::get('/admin/get_cupboard', [CupboardController::class, 'get_cupboard'])->name('get_cupboard');

Route::get('/admin/add_product_page', [CupboardController::class, 'add_product_page'])->name('add_product_page');
Route::post('/admin/add_product', [CupboardController::class, 'add_product'])->name('add_product');

Route::get('/admin/edit_product_page/{id}', [CupboardControllerr::class, 'edit_product_page'])->name('edit_product_page');
Route::post('admin/update_product/{id}',[CupboardController::class, 'update_product'])->name('update_product');

Route::get('/admin/delete_product/{id}', [CupboardController::class, 'delete_product'])->name('delete_product');
