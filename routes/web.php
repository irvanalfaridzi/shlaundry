<?php

Auth::routes(['register'=>false]);


Route::redirect('/', '/dashboard', 301);

require('reports.php');
require('frontend.php');

