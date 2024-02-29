<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test1Controller;
use App\Http\Controllers\ProfileController;
use App\Filament\Resources\PostResource\Pages\ListPosts;

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
    return view('pages.forside');
})->name('Forside');

Route::get('/nyheder', [PostController::class, 'index'])->name('nyheder');
Route::get('/nyheder/category/{category:slug}', [PostController::class, 'byCategory'])->name('by-category');
Route::get('/nyheder/{post:slug}', [PostController::class, 'show'])->name('view');



Route::get('/test/test-1', [Test1Controller::class, 'index'])->name('Test 1');

Route::get('/wwe', function () {
    return view('pages.wwe');
})->name('wwe');

Route::get('/google', function () {
    return view('pages.google');
})->name('google');

Route::get('/kamera', function () {
    return view('pages.kamera');
})->name('kamera');

Route::get('/onskeskyen', function () {
    return view('pages.onskeskyen');
})->name('onskeskyen');

Route::get('/stop-ur', function () {
    return view('pages.stopur');
})->name('Stop Ur');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';