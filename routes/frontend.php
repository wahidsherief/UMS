<?php
use Illuminate\Support\Facades\Route;


//frontend
Route::view('/', 'website.index')->name('index');
Route::view('/about', 'website.about')->name('about');
Route::view('/courses', 'website.courses')->name('courses');
Route::view('/news', 'website.news')->name('news');
Route::view('/contact', 'website.contact')->name('contact');



?>
