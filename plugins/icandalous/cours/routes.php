<?php
//use Icandalous\Cours\Controllers\CoursController;

Route::get('quran/cours/login', 'Icandalous\Cours\Controllers\CoursController@adminLogin');
Route::get('quran/cours/details/{token}', 'Icandalous\Cours\Controllers\CoursController@detailsCourses', ['token' => '{token}']);
Route::get('quran/cours/courant/{token}', 'Icandalous\Cours\Controllers\CoursController@availableCourses');