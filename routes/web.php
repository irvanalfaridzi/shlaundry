<?php

Auth::routes();

Route::redirect('/', '/dashboard', 301);

require('reports.php');
require('frontend.php');



