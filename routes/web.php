
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\Quiz1Controller;


Route::get('/', function () {
    return view("home");
})->name("homepage");

Route::get('/saya', function() {
    return view("biodata");
});

Route::get('/bye', function() {
    return view("bye");
});

Route::get("/bye/{nama}", [ExampleController::class, "hii"])->name("hii");

Route::get('/about', function () {
    return view("biodata");
});

// Contoh Menghubungkan antara router dan controller


Route::get("/hello", [ExampleController/*this id controller*/::class/*this is class*/, "hello"/*and this is name class from controller*/])->name("hello") ;//name just for namming route

Route::get("/quiz3",[Quiz1Controller::class, "hello"])->name("quiz3");

Route::get("/hii/{nama}", [ExampleController::class, "hii"])->name("hii");

Route::get("/bye1/{nama}", [ExampleController::class, "bye"])->name("bye");

Route::get("/apa-kabar/{gelar}/{nama}", [ExampleController::class, "apaKabar"])->name("apakabar");

Route::get("/biodata/{nama}/{nim}", [Quiz1Controller::class, "Bio"])->name("Bio");