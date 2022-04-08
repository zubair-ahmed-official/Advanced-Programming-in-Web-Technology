<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentsContoroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/person/get",[StudentsContoroller::class,'getPerson']);
Route::get("/person_dept/get/{id}",[StudentsContoroller::class,'getPersonDept']);

Route::post("/person_dept/post",[StudentsContoroller::class,'addPerson']);
Route::post("/edit_person_dept/post",[StudentsContoroller::class,'editPerson']);
Route::get("/delete_person_dept/get",[StudentsContoroller::class,'deletePerson']);

Route::post("/add_dept/post",[StudentsContoroller::class,'addDept']);
Route::post("/edit_dept/post",[StudentsContoroller::class,'editDept']);
Route::get("/delete_dept/get",[StudentsContoroller::class,'deleteDept']);

Route::post("/add_med/post",[StudentsContoroller::class,'addMed']);
Route::post("/edit_med/post",[StudentsContoroller::class,'editMed']);
Route::get("/delete_med/get",[StudentsContoroller::class,'deleteMed']);

Route::post("/add_dis/post",[StudentsContoroller::class,'addDis']);
Route::post("/edit_dis/post",[StudentsContoroller::class,'editDis']);
Route::get("/delete_dis/get",[StudentsContoroller::class,'deleteDis']);

Route::post("/add_doc/post",[StudentsContoroller::class,'addDoc']);
Route::post("/edit_doc/post",[StudentsContoroller::class,'editDoc']);
Route::get("/delete_doc/get",[StudentsContoroller::class,'deleteDoc']);