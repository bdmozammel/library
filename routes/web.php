<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/home',[AdminController::class,'index']);
route::get('/eReject_page',[AdminController::class,'eReject_page']);
route::get('/hReject_page',[AdminController::class,'hReject_page']);

route::post('/add_eReject',[AdminController::class,'add_eReject']);
route::post('/add_hReject',[AdminController::class,'add_hReject']);
route::get('/eReject_delete/{id}',[AdminController::class,'eReject_delete']);

route::get('/eReject_edit/{id}',[AdminController::class,'eReject_edit']);


route::post('/update_eReject/{id}',[AdminController::class,'update_eReject']);

route::get('/eReject_print',[AdminController::class,'eReject_print']);