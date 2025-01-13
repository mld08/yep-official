<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/api/tokens', [RegistrationController::class,'getAlltokens'])->name('tokens');

Route::post('/api/invalidate-token', [RegistrationController::class, 'invalidateToken']);

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/thematics', function () {
    return view('welcome');
})->name('thematics');

Route::get('/speakers', function () {
    return view('speakers');
})->name('speakers');

Route::get('/sponsors', function () {
    return view('sponsors');
})->name('sponsors');

Route::get('/press-release', function () {
    return view('press-release');
})->name('press-release');

$idRegex = '[0-9]+';
$slugRegex = '[0-9a-z\-]+';
Route::get('/articles/{slug}-{news}', [NewsController::class, 'show'])->name('show')->where([
    'news' => $idRegex,
    'slug' => $slugRegex
]);

Route::get('/articles', [NewsController::class,'news'])->name('news');
Route::get('/gallery', [GalleryController::class,'gallery'])->name('gallery');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.submit');

Route::resource('register', RegistrationController::class)->only('create', 'store');

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('index');
    Route::resource('registration', RegistrationController::class)->only(['index', 'destroy']);
    Route::resource('contacts', ContactController::class)->only(['index']);
    Route::resource('news', NewsController::class)->except(['show', 'news']);
    Route::resource('gallery', GalleryController::class)->except(['show', 'gallery', 'edit', 'update']);
});

Route::resource('registration', RegistrationController::class)->only(['create','store']);

Route::get('/login', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'doLogin']);
Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');
