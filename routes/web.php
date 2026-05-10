<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartoonLabelController;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/',[CartoonLabelController::class,'index'])->name('index')->middleware('auth');

Route::middleware('auth')->prefix('company')->name('company.')->group(function () {
    Route::get('/add-company',[CartoonLabelController::class,'addCompany'])->name('add');
    Route::post('/store/company',[CartoonLabelController::class,'storeCompany'])->name('store');
    Route::get('/view/company',[CartoonLabelController::class,'viewCompany'])->name('show');
    Route::get('/edit/company/{id}',[CartoonLabelController::class,'editCompany'])->name('edit');
    Route::put('/update/company',[CartoonLabelController::class,'updateCompany'])->name('update');
    Route::delete('/delete/company/{id}',[CartoonLabelController::class,'deleteCompany'])->name('delete');
});

Route::middleware('auth')->prefix('retail')->name('retail.')->group(function () {
    Route::get('/add-retail',[CartoonLabelController::class,'addRetail'])->name('add');
    Route::post('/store/retail',[CartoonLabelController::class,'storeRetail'])->name('store');
    Route::get('/view/retail',[CartoonLabelController::class,'viewRetail'])->name('show');
    Route::get('/edit/retail/{id}',[CartoonLabelController::class,'editRetail'])->name('edit');
    Route::put('/update/retail',[CartoonLabelController::class,'updateRetail'])->name('update');
    Route::delete('/delete/retail/{id}',[CartoonLabelController::class,'deleteRetail'])->name('delete');
});

Route::get('/print-label',[CartoonLabelController::class,'printLabel'])->name('printLabel')->middleware('auth');
Route::post('/printLabel',[CartoonLabelController::class,'print'])->name('print.label')->middleware('auth');

Route::get('/scanner',function (){
    return view('scanner');
});

Route::post('/get-model', [CartoonLabelController::class, 'getModel']);


