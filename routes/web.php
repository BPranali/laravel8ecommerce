<?php

// use auth;
use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ViewProductComponent;
use App\Livewire\Admin\ProductComponent;
use App\Livewire\Admin\AddProductComponent;
use App\Livewire\Admin\EditProductComponent;
use App\Livewire\User\UserDashboardComponent;
use App\Livewire\Admin\AdminDashboardComponent;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',HomeComponent::class);
Route::get('view-product/{slug}',ViewProductComponent::class)->name('view-product');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

//for user
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

//For admin
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/allproduct',ProductComponent::class)->name('admin.allproduct');
    Route::get('/admin/product/addproduct',AddProductComponent::class)->name('admin.addproduct');
    Route::get('admin/product/editproduct/{product_slug}',EditProductComponent::class)->name('admin.edit-product');

});
