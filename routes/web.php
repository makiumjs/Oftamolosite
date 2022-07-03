<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

// Web Routes
Route::get("/", [CustomController::class, "toHome"])->name("home");
Route::get("/services", [CustomController::class, "toServices"])->name("services");
Route::get("/contacts", [CustomController::class, "toContacts"])->name("contacts");
Route::post("/contacts/store", [CustomController::class, "store"])->name("contacts.store");
Route::get("/thanks/{name}", [CustomController::class, "thankYou"])->name("thank.you");