<?php

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

Route::get("/", function() {
    return redirect(route("register-form"));
});



Route::get("/author","MoviesController@author")->name("author");
Route::get("/contact","ContactController@contactForm")->name("contact-form");
Route::get("/register", "LoginController@showRegisterForm")->name("register-form");
Route::get("/login", "LoginController@showLoginForm")->name("login-form");
Route::post("/register", "LoginController@doRegister")->name("do-register");
Route::post("/login", "LoginController@doLogin")->name("do-login");
Route::post("/contact","ContactController@support")->name("contact-send");
Route::post("/comment","NewsController@insertKom");


Route::middleware(['guardMiddleware'])->group(function (){
Route::get("/news","NewsController@news")->name("news");
Route::get("/news/{id}","NewsController@single")->name("single-news");
Route::get("/movies/", "MoviesController@index")->name("movies");
Route::get("/movie-list/", "MoviesController@lista");
Route::get("/movie/{id}", "MoviesController@single")->name("single-movie");
Route::get("/movie/categories/{id}", "MoviesController@byCategory")->name("movies-category");
Route::get("/movie-list/search={attr}","MoviesController@search");
Route::get('/paginationSearch','MoviesController@paginationSearch');
Route::get('/verification/{token}','LoginController@verification');
Route::get("/logout","LoginController@logout");
Route::get("/back",function (){
    return redirect()->route("movies");
})->name("back");
});

//admin panel routes
Route::middleware(['checkingIp','guardMiddleware'])->group(function () {
    Route::get("/admin", "MoviesController@adminPage");
    Route::get("/admin/userActivities", "Admin\ForUserController@activities");
    Route::get("/admin/errorLogs", "Admin\ForUserController@errors");
    Route::get("/admin/ipAddresses", "Admin\ForUserController@addresses");
    Route::resource("admin/users", "Admin\UsersController");
    Route::resource("admin/movies", "Admin\MoviesController");
    Route::resource("admin/links", "Admin\LinkController");
    Route::resource("admin/comments", "Admin\CommentsController");
    Route::resource("admin/ratings", "Admin\RatingController");
    Route::resource("admin/news", "Admin\NewsController");
    Route::resource("admin/genres", "Admin\GenresController");
});



Route::post("/admin/deleteIpAddress","Admin\ForUserController@deleteAddress");
Route::post("/admin/deleteErrors","Admin\ForUserController@deleteError");
Route::post("/admin/deleteActivity","Admin\ForUserController@deleteAct");
Route::post("/admin/sortActivity","Admin\ForUserController@sort");