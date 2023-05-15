<?php


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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboadController::class, 'index'])->name('dashboard');

    //category routes
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class,'store'])->name('category.store');
    Route::get('category/edit/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
    Route::put('category/update/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('category.update');
    Route::delete('category/destroy/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('category.delete');

    //product routes
    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function (){
        Route::get('/products', 'index')->name('products.index');
        Route::get('/product/create', 'create')->name('product.create');
        Route::post('/product/store', 'store')->name('product.store');


    });

    //brands routes

    Route::get('/brands',App\Http\Livewire\Admin\Brand\Index::class)->name('brand.index');

});
