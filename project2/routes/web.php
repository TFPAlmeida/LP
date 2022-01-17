<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;

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

Route::get('/login_user', function () {
    return view('User/login_user');
});

Route::get('/login_company', function () {
    return view('Company/login_company');
});

Route::get('/login_admin', function () {
    return view('Admin/login_admin');
});

Route::get('/logout', function () {
    Session::forget('user');
    Session::forget('company');
    Session::forget('admin');
    return redirect('/');
});


Route::view('/register_user','User/register_user');
Route::view('/register_company','Company/register_company');
Route::view('/register_admin','Admin/register_admin');
Route::view('/addAnnouncement','Company/add_announcements');
Route::view('/myAnnouncements','Company/myAnnouncements');
Route::view('/users','Admin/users');
Route::view('/companies','Admin/companies');
Route::view('/announcements','Admin/announcements');
Route::view('/candidate','User/candidate');
Route::view('/confirmAdmin','Admin/confirm_admin');
Route::post("/login_user",[UserController::class,'login_user']);
Route::post("/login_company",[CompanyController::class,'login_company']);
Route::post("/login_admin",[AdminController::class,'login_admin']);
Route::post("/register_user",[UserController::class,'register_user']);
Route::post("/register_company",[CompanyController::class,'register_company']);
Route::post("/register_admin",[AdminController::class,'register_admin']);
Route::post("/confirmAdmin",[AdminController::class,'confirm_admin']);
Route::get("/",[AnnouncementController::class,'index']);
Route::get("/myAnnouncements",[CompanyController::class,'index2']);
Route::get("detail/{id}",[AnnouncementController::class,'detail']);
Route::get("search",[AnnouncementController::class,'search']);
Route::post("add_to_cart",[AnnouncementController::class,'addToCart']);
Route::post("contactos/{id}",[UserController::class,'contactos']);
Route::get("cartlist",[AnnouncementController::class,'cartList']);
Route::get("removecart/{id}",[AnnouncementController::class,'removeCart']);
Route::post("/addAnnouncement",[CompanyController::class,'store']);
Route::get("removeAnnouncement/{id}",[CompanyController::class,'removeAnnouncement']);
Route::post("/myAnnouncements",[CompanyController::class,'myAnnouncements']);
Route::get("/users/{id}",[AdminController::class,'admin_users']);
Route::get("/companies/{id}",[AdminController::class,'admin_companies']);
Route::get("/announcements/{id}",[AdminController::class,'admin_announcements']);