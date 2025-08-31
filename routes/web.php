<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//     Route::resource('products', ProductController::class);
//      Route::resource('categories', CategoryController::class);
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         if (auth()->user()->role === 'admin') {
//             Route::resource('products', ProductController::class);
//             Route::resource('categories', CategoryController::class);
//             Route::resource('customers', CustomerController::class);
//             Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
//             Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//             return view('admin.dashboard');
//         }
//         return view('customer.dashboard');
//     })->name('dashboard');
// });


    // Admin Routes
//     Route::middleware(['auth', 'admin'])
//         ->prefix('admin')
//         ->name('admin.')
//         ->group(function () {
//             Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
//             Route::get('profile', [AdminController::class, 'profile'])->name('profile');
//             Route::resource('products', ProductController::class);
//             Route::resource('categories', CategoryController::class);
//             Route::resource('customers', CustomerController::class);
//         });

// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/admin/users', [AdminController::class, 'index']);
// });

// Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
//     Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

//     Route::resource('categories', CategoryController::class);
//     Route::resource('products', ProductController::class);
//     Route::resource('customers', CustomerController::class);
//     Route::get('/admin-profile', [AdminProfileController::class, 'edit'])->name('admin.profile');
//     // Route::get('/admin-profile', [AdminProfileController::class, 'index'])->name('admin.settings');
//     // Add more resources if needed
// });


// Route::get('admin/search', [AdminController::class, 'search'])->name('admin.search')->middleware(['auth', 'admin']);

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
});

// Customer routes
Route::middleware(['auth', 'customer'])->prefix('customer')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('customer.dashboard');
});


require __DIR__.'/auth.php';

