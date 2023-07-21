<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReSellerAuthController;
use App\Http\Controllers\ReSellerController;
use App\Http\Controllers\TechnoLinkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[TechnoLinkController::class,'index'])->name('home');
Route::get('/about',[TechnoLinkController::class,'about'])->name('about');
Route::get('/services',[TechnoLinkController::class,'services'])->name('services');
Route::get('/package',[TechnoLinkController::class,'package'])->name('package');
Route::get('/support',[TechnoLinkController::class,'support'])->name('support');
Route::get('/contact',[TechnoLinkController::class,'contact'])->name('contact');

Route::get('/reseller-login',[ReSellerAuthController::class,'index'])->name('reseller.login');
Route::post('/reseller-login',[ReSellerAuthController::class,'login'])->name('reseller.login');
Route::get('/reseller-logout',[ReSellerAuthController::class,'logout'])->name('reseller.logout');
Route::get('/reseller-dashboard/{id}',[ReSellerAuthController::class,'dashboard'])->name('reseller.dashboard');

Route::get('/client-create',[ClientController::class,'create'])->name('client.create');
Route::post('/client-store',[ClientController::class,'store'])->name('client.store');
Route::get('/client-list',[ClientController::class,'clientList'])->name('client.list');
Route::get('/client-information/{id}',[ClientController::class,'clientInformation'])->name('client.information');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   Route::get('/dashboard',[adminController::class,'index'])->name('dashboard');

   Route::get('/client-manage',[ClientController::class,'manage'])->name('client.manage');
   Route::get('/client-details/{id}',[ClientController::class,'details'])->name('client.details');
   Route::get('/client-edit/{id}',[ClientController::class,'edit'])->name('client.edit');
   Route::post('/client-update/{id}',[ClientController::class,'update'])->name('client.update');
   Route::get('/client-delete/{id}',[ClientController::class,'delete'])->name('client.delete');
   Route::get('/client-export',[ClientController::class,'export'])->name('client.export');


   Route::get('/reseller-client-list/{id}',[ClientController::class,'resellerWiseClientList'])->name('resellerWiseClient.list');
   Route::get('/reseller-client-details/{id}',[ClientController::class,'resellerWiseClientDetails'])->name('resellerWiseClient.details');

   Route::get('/reseller-add',[ReSellerController::class,'index'])->name('reselller.add');
   Route::post('/reseller-store',[ReSellerController::class,'store'])->name('reselller.store');
   Route::get('/reseller-manage',[ReSellerController::class,'manage'])->name('reselller.manage');
   Route::get('/reseller-details/{id}',[ReSellerController::class,'details'])->name('reselller.details');
   Route::get('/reseller-edit/{id}',[ReSellerController::class,'edit'])->name('reselller.edit');
   Route::post('/reseller-update/{id}',[ReSellerController::class,'update'])->name('reselller.update');
   Route::get('/reseller-delete/{id}',[ReSellerController::class,'delete'])->name('reselller.delete');

});
