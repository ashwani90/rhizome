<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RhizomeController;

Route::get('/', [RhizomeController::class, 'index'])->name('home');
Route::get('/projects', [RhizomeController::class, 'projects'])->name('projects');
Route::get('/research', [RhizomeController::class, 'research'])->name('research');
Route::get('/about', [RhizomeController::class, 'about'])->name('about');
Route::get('/contact', [RhizomeController::class, 'contact'])->name('contact');
Route::get('/team', [RhizomeController::class, 'team'])->name('team');
Route::get('/project', [RhizomeController::class, 'project'])->name('project');
Route::get('/text-projects', [RhizomeController::class, 'textPro'])->name('text_projectst');
Route::get('/social-posts', [RhizomeController::class, 'instaPosts'])->name('social_posts');
Route::post('/send_mail', [RhizomeController::class, 'send_mail'])->name('send_mail');
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
