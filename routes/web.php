<?php

Auth::routes(['register'=>false]);


Route::redirect('/', '/dashboard', 301);

Route::resource('register', 'RegisterController@index');

require('reports.php');
require('frontend.php');

//register
// Route::get('/register', 'Member/DaftarController');


