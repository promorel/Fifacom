<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact/send', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/a-propos', function () {
    return view('a-propos');
})->name('a-propos'); 
 
Route::get('/cours', function () {
    return view('cours');
})->name('cours'); 

Route::get('/cours-details', function () {
    return view('cours-details');
})->name('cours-details'); 

Route::get('/cours/procedure-classique', function () {
    return view('cours/procedure-classique');
})->name('cours/procedure-classique');     

Route::get('/cours/parcoursup', function () {
    return view('cours/parcoursup');
})->name('cours/parcoursup'); 

Route::get('/cours/ecandidat', function () {
    return view('cours/ecandidat');
})->name('cours/ecandidat'); 

Route::get('/cours/procedure-connecte', function () {
    return view('cours/procedure-connecte');
})->name('cours/procedure-connecte'); 

Route::get('/cours/procedure-consulaire', function () {
    return view('cours/procedure-consulaire');
})->name('cours/procedure-consulaire');

Route::get('/temoignages', function () {
    return view('temoignages');
})->name('temoignages'); 

Route::get('/contact', function () {
    return view('contact');
})->name('contact'); 

