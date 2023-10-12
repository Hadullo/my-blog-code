<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
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

//Route::get('/', function () {
   // return view('welcome');
//});

//Route::get('/dashboard', function () {
    //return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin All Group
Route::controller(AdminController::class)->group(function() {
    Route::get('admin/logout', 'destroy')->name('admin.logout');
    Route::get('view/profile', 'ViewProfile')->name('view.profile');
    Route::get('edit/profile', 'EditProfile')->name('edit.profile');
    Route::get('store/profile', 'StoreProfile')->name('store.profile');

});

//Frontend All Group
Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'Home')->name('home.index');

});


require __DIR__.'/auth.php';
