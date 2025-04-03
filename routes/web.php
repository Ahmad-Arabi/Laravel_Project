<?php

use App\Http\Controllers\ProfileController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminBookingsController;
use App\Http\Controllers\AdminCouponsController;
use App\Http\Controllers\AdminHotelsController;
use App\Http\Controllers\AdminReviewsController;
use App\Http\Controllers\AdminRoomsController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware('checkAdmin')->group(function () {
        
        //users CRUD
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('homepage.index');

        //users CRUD
        Route::get('/users', [AdminUsersController::class, 'index'])->name('users.index');
        Route::delete('/users/{id}', [AdminUsersController::class, 'destroy'])->name('users.destroy');
        Route::get('/users/create', [AdminUsersController::class, 'create'])->name('users.create');
        Route::post('/users', [AdminUsersController::class, 'store'])->name('users.store');
        Route::get('/users/{id}/edit', [AdminUsersController::class, 'edit'])->name('users.edit');
        Route::put('/users/{id}', [AdminUsersController::class, 'update'])->name('users.update');
        Route::get('/users/{id}', [AdminUsersController::class, 'show'])->name('users.show');

        //hotels CRUD
        Route::get('/hotels', [AdminHotelsController::class, 'index'])->name('hotels.index');
        Route::delete('/hotels/{id}', [AdminHotelsController::class, 'destroy'])->name('hotels.destroy');
        Route::get('/hotels/create', [AdminHotelsController::class, 'create'])->name('hotels.create');
        Route::post('/hotels', [AdminHotelsController::class, 'store'])->name('hotels.store');
        Route::get('/hotels/{id}/edit', [AdminHotelsController::class, 'edit'])->name('hotels.edit');
        Route::put('/hotels/{id}', [AdminHotelsController::class, 'update'])->name('hotels.update');
        Route::get('/hotels/{id}', [AdminHotelsController::class, 'show'])->name('hotels.show');

        //Rooms CRUD
        Route::get('/rooms', [AdminRoomsController::class, 'index'])->name('rooms.index');
        Route::delete('/rooms/{id}', [AdminRoomsController::class, 'destroy'])->name('rooms.destroy');
        Route::get('/rooms/create', [AdminRoomsController::class, 'create'])->name('rooms.create');
        Route::post('/rooms', [AdminRoomsController::class, 'store'])->name('rooms.store');
        Route::get('/rooms/{id}/edit', [AdminRoomsController::class, 'edit'])->name('rooms.edit');
        Route::put('/rooms/{id}', [AdminRoomsController::class, 'update'])->name('rooms.update');
    
        //Bookings CRUD
        Route::get('/bookings', [AdminBookingsController::class, 'index'])->name('bookings.index');
        Route::delete('/bookings/{id}', [AdminBookingsController::class, 'destroy'])->name('bookings.destroy');
        Route::get('/bookings/create', [AdminBookingsController::class, 'create'])->name('bookings.create');
        Route::post('/bookings', [AdminBookingsController::class, 'store'])->name('bookings.store');
        Route::get('/bookings/{id}/edit', [AdminBookingsController::class, 'edit'])->name('bookings.edit');
        Route::put('/bookings/{id}', [AdminBookingsController::class, 'update'])->name('bookings.update');
    
        //Coupons CRUD
        Route::get('/coupons', [AdminCouponsController::class, 'index'])->name('coupons.index');
        Route::delete('/coupons/{id}', [AdminCouponsController::class, 'destroy'])->name('coupons.destroy');
        Route::get('/coupons/create', [AdminCouponsController::class, 'create'])->name('coupons.create');
        Route::post('/coupons', [AdminCouponsController::class, 'store'])->name('coupons.store');
        Route::get('/coupons/{id}/edit', [AdminCouponsController::class, 'edit'])->name('coupons.edit');
        Route::put('/coupons/{id}', [AdminCouponsController::class, 'update'])->name('coupons.update');
       
        //Reviews CRUD
        Route::get('/reviews', [AdminReviewsController::class, 'index'])->name('reviews.index');
        Route::delete('/reviews/{id}', [AdminReviewsController::class, 'destroy'])->name('reviews.destroy');
        Route::post('/reviews/{id}/{actionType}', [AdminReviewsController::class, 'update'])->name('reviews.update');
});

