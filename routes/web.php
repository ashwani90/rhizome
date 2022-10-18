<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RhizomeController;
use App\Admin\Controllers\ProjectController;
use App\Admin\Controllers\ProjectImageController;
use App\Admin\Controllers\TeamController;
use App\Admin\Controllers\BlogController;
use App\Admin\Controllers\ContactController;

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
Route::get('/blog', [RhizomeController::class, 'blog'])->name('blog');
Route::get('/save_insta', [RhizomeController::class, 'save_insta'])->name('save_insta');
Route::get('instagram-get-auth', 'RhizomeController@show');


Route::resource('admin/projects', ProjectController::class);
Route::resource('admin/project-images', ProjectImageController::class);
Route::resource('admin/team', TeamController::class);
Route::resource('admin/blog', BlogController::class);
Route::resource('admin/contacts', ContactController::class);
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
