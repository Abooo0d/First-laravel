<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticControler;
use App\Http\Controllers\Computer;

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
Route::get('/',[StaticControler::class,"index"])->name('Home.index');
Route::get('/about',[StaticControler::class,"about"])->name("Home.About");
Route::resource('computers',Computer::class);


Route::get('/about/{categorie?}/{item?}',function($categorie = null,$item = null){
  if(isset($categorie)):
    if(isset($item)):
      return "<h1>{$item}</h1>";
    else:
    return "<h1>{$categorie}</h1>";
    endif;
  else:
    return "<h1>All</h1>";
  endif;
});
