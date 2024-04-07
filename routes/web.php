<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get("/book", function () {
//     return view("book.index");
// })->name("index-book");
// Route::get("/book/create", function () {
//     return view("book.create");
// })->name("create-book");

Route::get("/book",[BookController::class, "index"])->name("index-book")->middleware("auth");
Route::get("/book/create",[BookController::class, "create"])->name("create-book")->middleware("auth");
Route::post("/book/store",[BookController::class, "store"])->name("store-book")->middleware("auth");
Route::get("/book/edit/{id}",[BookController::class, "edit"])->name("edit-book")->middleware("auth");
Route::put("/book/update/{id}",[BookController::class, "update"])->name("update-book")->middleware("auth");
Route::delete("/book/delete/{id}",[BookController::class, "destroy"])->name("delete-book")->middleware("auth");

Route::get("/register", [UserController::class, "index_register"])->name("register");
Route::post("/register", [UserController::class, "register"])->name("store-register");
Route::get("/login", [UserController::class, "index_login"])->name("login");
Route::post("/login", [UserController::class, "login"])->name("store-login");
