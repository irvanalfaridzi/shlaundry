<?php

Auth::routes();

Route::redirect('/', '/dashboard', 301);

// Route::resource('member', 'Member\DaftarController');

require('reports.php');
require('frontend.php');



