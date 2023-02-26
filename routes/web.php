<?php

Use App\Http\Controllers\RegisterController;
Use App\Http\Controllers\LoginController;
Use App\Http\Controllers\PricelistController;
use App\Http\Controllers\HomepageController;
Use App\Http\Controllers\LatihanController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
return "Selamat Datang di surostore.com";
});
Route::get('/latihan', [LatihanController::class, 'index']);
Route::get('/beranda', [LatihanController::class, 'beranda']);
Route::get('/', [HomepageController::class, 'index']);
Route::get('/about', [HomepageController::class, 'about']);
Route::get('/kontak', [HomepageController::class, 'kontak']);
Route::get('/kategori', [HomepageController::class, 'kategori']);
Route::get('/priceml', [PricelistController::class, 'index']);
Route::get('/pricepubg', [PricelistController::class, 'pubg']);
Route::get('/priceepep', [PricelistController::class, 'epep']);
Route::get('/pricedomino', [PricelistController::class, 'domino']);
Route::get('/pricegenshin', [PricelistController::class, 'genshin']);
Route::get('/priceaov', [PricelistController::class, 'aov']);
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/registerpost', [LoginController::class, 'registerpost']);
Route::post('/loginpost', [LoginController::class, 'loginpost']);
Route::get('/logout', [LoginController::class, 'logout']);

