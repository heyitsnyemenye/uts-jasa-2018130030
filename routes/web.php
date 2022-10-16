<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;

// Route::get('/', function () {
//     return view('home');
//    });

Route::get('services', function () {
    $dtServices = ["Full Build Keyboard", "Stabilizer Tuning", "Switch Lubing", "Dead LED RGB Replacement", "PCB Re-Trace"];
    return view('services')->with('dtServices', $dtServices);
   })->name('services');

//    Route::get('testimonials', function () {
//     $dtTestimonials = ["King Bowser Koopa", "Jimmy Poppadopolos", "Wario Scapelli",
//    "Donkey Kong", "Koopa Junior"];
//     return view('testimonials')->with('dtTestimonials', $dtTestimonials);
//    })->name('testimonials');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testimonials' , TestimonialsController::class)->name('testimonials');

Route::get('/about' , AboutController::class)->name('about');

// Route::get('/services' , ServicesController::class)->name('services');

// Route::get('/services', ServicesController::class)->name('services');

// Route::get('facade',[App\Http\Controller\HomeController::class,'HomeController@Facade'])->name('facade');
