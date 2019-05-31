<?php

Route::namespace('Master')->group(function () {
    Route::group([
  
      'middleware'    => 'auth',
  
    ], function () {
  
  
      // Dashboard
      Route::get('/dashboard', function () {
        return View::make('frontend.dashboard');
      })->name('dashboard');
  
      
    });
});