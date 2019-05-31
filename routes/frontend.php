<?php

Route::namespace('Frontend')->group(function () {
    Route::group([
  
      'middleware'    => 'auth',
  
    ], function () {
  
  
      // Dashboard
      Route::get('/dashboard', function () {
        return View::make('frontend.dashboard');
      })->name('dashboard');
  
      Route::resource('customer', 'CustomerController');
      
      Route::resource('supplier', 'SupplierController');
      
      Route::resource('product', 'ProductController');

      Route::resource('service', 'ServiceController');

      Route::resource('sales', 'SalesController');

      Route::resource('purchase', 'PurchaseController');

      // Route::resource('appointment', 'AppointmentController');
      
    });
});