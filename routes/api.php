<?php

use App\Http\Controllers\Api\auth\LoginController;
use App\Http\Controllers\Api\CoursController;
use App\Http\Controllers\Api\EtudiantController;
use App\Http\Controllers\Api\NoteController;
use App\Http\Controllers\Api\ResultatController;
use App\Http\Controllers\Api\ProfesseurController;
use App\Http\Controllers\Api\LoginPharController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


#global routes
#TO DO: only user connected have to get a permission
Route::apiResource('cours',CoursController::class);
Route::apiResource('etudiant',EtudiantController::class);
Route::apiResource('professeur',ProfesseurController::class);
Route::apiResource('note',NoteController::class);
Route::apiResource('resultat',ResultatController::class);
Route::apiResource('LoginPharm',LoginPharController::class);

#search data routes
#TO DO: only user connected have to get a permission
Route::get('note/getAllNoteforStudent/{id}',[NoteController::class,'getAllNoteforStudent']);
Route::get('cours/getAllCoursesAsOfProfessor/{id}',[CoursController::class,'getAllCoursesAsOfProfessor']);


#connection routes
#login method have to return user infor,ation, status code and token_
Route::post('auth/professor/login',[LoginController::class,'professor_login']);
Route::post('auth/student/login',[LoginController::class,'student_login']);


#deconnection route
Route::post('auth/user/logout/{id}',[LoginController::class,'logout']);



