<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SoftSkillController;
use App\Http\Controllers\TechnicalSkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ErrorController;

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

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/educations', [EducationController::class, 'index']);
Route::get('/experiences', [ExperienceController::class, 'index']);
Route::get('/personal-data', [PersonalDataController::class, 'index']);
Route::get('/personal-image', [PersonalDataController::class, 'getImage']);
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/soft-skills', [SoftSkillController::class, 'index']);
Route::get('/technical-skills', [TechnicalSkillController::class, 'index']);
Route::post('/contact-mail', [ContactController::class, 'send']);
Route::post('/errors', [ErrorController::class, 'store']);