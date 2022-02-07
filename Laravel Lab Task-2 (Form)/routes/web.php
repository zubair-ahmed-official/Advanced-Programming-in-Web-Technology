<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PagesController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/Form', [PagesController::class,'Form'] )->name('Form');

Route::post('/Form', [PagesController::class,'Submitted'] )->name('Submitted');



