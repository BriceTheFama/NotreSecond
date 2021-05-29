<?php
use App\Http\Controllers\ContactController;
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
    return view('index');
})->name('accueil');
Route::get('/a-propos',function(){
    return view('a-propos');
})->name('about');

Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::get('/test',function(){ return view('test');})->name('test');
Route::post('/contact',[ContactController::class,'sendEmail'])->name('contact.send');