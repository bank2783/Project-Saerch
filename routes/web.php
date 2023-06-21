<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [ HomeController::class, 'index' ]);

Route::get('/signin', [ AuthController::class, 'signin' ])->name('signin');
Route::post('/signin', [ AuthController::class, 'signinPostback' ])->name('signin_postback');
Route::get('/signout', [ AuthController::class, 'signout' ])->name('signout');
Route::get('/signout_postback', [ AuthController::class, 'signoutPostback' ])->name('signout_postback');




Route::get('/upload',[UploadController::class,'showUploadForm'])->name('show_upload_form');
Route::post('/upload',[UploadController::class,'storeProject'])->name('store_project');
Route::get('/project/view/{id}',[HomeController::class,'viewProject'])->name('view_project');

Route::get('/profile-my-project',[HomeController::class,'Profile'])->name('profile');
Route::get('/profile-edit-my-project/{id}',[HomeController::class,'editProject'])->name('edit_project');

Route::get('/admin',[AdminController::class,'index'])->name('admin_index');
Route::get('/admin/project-list',[AdminController::class,'Projectlist'])->name('admin_view_project_list');
Route::post('/admin/project-list',[AdminController::class,'ProjectlistSearchPost'])->name('Project_list_search_post');


Route::get('/admin/project-edit-by-id/{id}',[AdminController::class,'ProjectEditListById'])->name('admin_view_edit-by_id');
Route::post('/admin/project-edit-by-id/{id}',[AdminController::class,'ProjectEditListByIdPost'])->name('admin_view_edit-by_id-post');


// Route::get('/', function () {
//     return view('welcome');
// });
