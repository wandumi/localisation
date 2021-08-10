<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

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

Route::redirect('/', '/en');
Route::group(['prefix' => '{language}'], function(){ 

    Route::get('/', function () {
        
        return view('welcome');
    });
    
    Route::get('/localise', function () {
        return view('localise');
    });
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
    
    require __DIR__.'/auth.php';
    
 });



Route::get('/{lang}', function($lang){
        App::setLocale($lang);
        //dd(App::getLocale());
        return view('welcome');
    });
    
    
Route::resource('locale', LocaleController::class );