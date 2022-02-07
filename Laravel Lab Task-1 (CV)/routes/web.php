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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/index', function () {
    return view('CV.index');
});*/

Route::get('/index', [PagesController::class,'index']);

Route::get('/objective/obj', [PagesController::class,'objective'] ) ->name('obj') ;

Route::get('/Education/edu', [PagesController::class,'Education'] )->name('edu');

Route::get('/Others/{name}/{id?}', [PagesController::class,'Others'] );

Route::get('/Personal/per', [PagesController::class,'Personal'] )->name('per');



/*Route::get('/Education', function () {
    return view('CV.Education');
});*/

Route::get('/Reference', function () {
    return view('CV.Reference');
});

