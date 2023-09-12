<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CurricolumnController;
use App\Http\Controllers\ProjectAuthorController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', [ HomeController::class, 'index' ])->name('index');
Route::post('/search-result',[HomeController::class,'homeSearch'])->name('home_search');

Route::get('/signin', [ AuthController::class, 'signin' ])->name('signin');
Route::post('/signin', [ AuthController::class, 'signinPostback' ])->name('signin_postback');
Route::get('/signout', [ AuthController::class, 'signout' ])->name('signout');
Route::get('/signout_postback', [ AuthController::class, 'signoutPostback' ])->name('signout_postback');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'loginPost'])->name('login_post');
Route::get('/register',[AuthController::class,'Register'])->name('register');
Route::post('/register',[AuthController::class,'RegisterPost'])->name('register_post');



Route::get('/upload',[UploadController::class,'showUploadForm'])->name('show_upload_form')->middleware('CheckUserProject');
Route::post('/upload',[UploadController::class,'storeProject'])->name('store_project');
Route::get('/project/view/{id}',[HomeController::class,'viewProject'])->name('view_project');

Route::get('/profile-my-project',[HomeController::class,'Profile'])->name('profile')->middleware('CheckProjectPromiss');
Route::get('/profile-edit-my-project/{id}',[HomeController::class,'editProject'])->name('edit_project')->middleware('CheckProjectPromiss');;

Route::get('/admin',[AdminController::class,'Adminindex'])->name('admin.index')->middleware('CheckAdmin');
Route::get('/admin/project-list',[AdminController::class,'Projectlist'])->name('admin_view_project_list')->middleware('CheckAdmin');
Route::post('/admin/project-list',[AdminController::class,'ProjectlistSearchPost'])->name('Project_list_search_post')->middleware('CheckAdmin');
Route::post('/admin/project/delete/{id}',[AdminController::class,'DeleteProject'])->name('delete_prject')->middleware('CheckAdmin');
// Route::get('/admin/project-list/create',[AdminController::class,'ProjectlistSearchPost'])->name('Project_list_search_post');


Route::get('/admin/project-edit-by-id/{id}',[AdminController::class,'ProjectEditListById'])->name('admin_view_edit-by_id')->middleware('CheckAdmin');
Route::post('/admin/project-edit-by-id/{id}',[AdminController::class,'ProjectEditListByIdPost'])->name('admin_view_edit-by_id-post')->middleware('CheckAdmin');

Route::get('/admin/tables',[AdminController::class,'showTables'])->name('show_tables')->middleware('CheckAdmin');
Route::get('/admin/table/advisors',[AdvisorController::class,'showAdvisorTable'])->name('show_advisor_table')->middleware('CheckAdmin');
Route::post('/admin/table/advisors/create',[AdvisorController::class,'insert_advisor'])->name('insert_advisor')->middleware('CheckAdmin');
Route::post('/admin/table/advisors/delete',[AdvisorController::class,'delete_advisor'])->name('delete_advisor')->middleware('CheckAdmin');
Route::post('/admin/table/advisor/update',[AdvisorController::class,'Update_advisor'])->name('update_advisor')->middleware('CheckAdmin');

Route::get('/admin/table/author',[AuthorController::class,'showAuthor'])->name('showAuthor')->middleware('CheckAdmin');
Route::post('admin/table/author/update',[AuthorController::class,'authorUpdate'])->name('author_update')->middleware('CheckAdmin');
Route::post('/admin/table/author/create',[AuthorController::class,'authorInsert'])->name('authorInsert')->middleware('CheckAdmin');
Route::post('/admin/table/author/delete',[AuthorController::class,'authorDelete'])->name('authorDelete')->middleware('CheckAdmin');

Route::get('/admin/table/project_author',[ProjectAuthorController::class,'showProjectAuthor'])->name('show_project_author')->middleware('CheckAdmin');
Route::post('admin/table/porject_author/create',[ProjectAuthorController::class,'create'])->name('creat_project_author')->middleware('CheckAdmin');
Route::post('admin/table/porject_author/update',[ProjectAuthorController::class,'update'])->name('update_project_author')->middleware('CheckAdmin');
Route::post('admin/table/porject_author/delete',[ProjectAuthorController::class,'delete'])->name('delete_project_author')->middleware('CheckAdmin');


Route::get('admin/table/curricolumn',[CurricolumnController::class,'showCurricolumn'])->name('show_curricolumn')->middleware('CheckAdmin');
Route::post('admin/table/curricolumn/create',[CurricolumnController::class,'create'])->name('create_curricolumn')->middleware('CheckAdmin');
Route::post('admin/table/curricolumn/update',[CurricolumnController::class,'update'])->name('update_curricolumn')->middleware('CheckAdmin');
Route::post('admin/table/curricolumn/delete',[CurricolumnController::class,'delete'])->name('delete_curricolumn')->middleware('CheckAdmin');

Route::get('admin/table/category',[CategoryController::class,'showCategory'])->name('show_category')->middleware('CheckAdmin');
Route::post('admin/table/category/create',[CategoryController::class,'create'])->name('create_category')->middleware('CheckAdmin');
Route::post('admin/table/category/update',[CategoryController::class,'update'])->name('update_category')->middleware('CheckAdmin');
Route::post('admin/table/category/delete',[CategoryController::class,'delete'])->name('delete_category')->middleware('CheckAdmin');


Route::get('admin/table/users',[UsersController::class,'showUsers'])->name('show_users');


////////////// Dowload PDF File ///////////////////
Route::get('dowload/{id}',[AdminController::class,'Download'])->name('download.file');

// Route::get('/', function () {
//     return view('welcome');
// });
