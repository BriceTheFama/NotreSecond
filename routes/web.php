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

Route::get('/index', function () {
    return view('index');
});
Route::get('/a-propos',function(){
    return view('a-propos');
});

Route::get('/contact',[ContactController::class,'contact']);
Route::get('/test',function(){ return view('test');});
Route::post('/contact',[ContactController::class,'sendEmail'])->name('contact.send');