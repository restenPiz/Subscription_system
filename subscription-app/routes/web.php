<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\subscriptionController;
use App\Http\Controllers\customersController;
use App\Http\Controllers\planController;

//Inicio das rotas do sistema 

    //Inicio das rotas das views do sistema
Route::get('/', function () {
    return view('subscription.index');
})->name('index');
    
Route::get('/addSubscription', [viewController::class, 'addSubscription'])->name('addSubs');
Route::get('/addClient', [viewController::class, 'addClient'])->name('addClient');
Route::get('/addPlan', [viewController::class, 'addPlan'])->name('addPlan');
    //Fim das rotas das views do sistema

    //Inicio das rotas da parte dos clientes
Route::post('/customerAdd', [customersController::class, 'store'])->name('customerAdd');
Route::get('/allCustomers', [customersController::class, 'index'])->name('allCustomers');
Route::delete('/deleteCustomers/{id}', [customersController::class, 'destroy'])->name('deleteCustomers');
Route::get('/{id}/editCustomers', [customersController::class, 'edit'])->name('editCustomers');
Route::post('/updateCustomers/{id}', [customersController::class, 'update'])->name('updateCustomers');
    //Fim das rotas da parte de clientes

    //Inicio das rotas da parte de subscricao
Route::post('/subAdd', [subscriptionController::class, 'store'])->name('subAdd');
Route::get('/subAll', [subscriptionController::class, 'index'])->name('allSubscriptions');
Route::get('/subEdit/{id}', [subscriptionController::class, 'edit'])->name('editSubscriptions');
Route::post('/{id}/subUpdate', [subscriptionController::class, 'update'])->name('updateSubscriptions');
Route::delete('/subDelete/{id}', [subscriptionController::class, 'destroy'])->name('deleteSubscriptions');
    //Fim das rotas da parte de subscricao

    //Inicio das rotas da parte de planos
Route::get('/planAll', [planController::class, 'index'])->name('planAll');
Route::post('/addPlan', [planController::class, 'store'])->name('addPlan');
Route::get('/editPlan/{id}', [planController::class, 'edit'])->name('editPlan');
Route::put('/updatePlan/{id}', [planController::class, 'update'])->name('updatePlan');
Route::delete('/destroyPlan/{id}', [planController::class, 'destroy'])->name('deletePlan');
    //Fim das rotas da parte de planos

//Fim das rotas do sistema