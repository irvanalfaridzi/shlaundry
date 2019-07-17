<?php


Route::name('frontend.')->group(function () {
  Route::group([

    'middleware'    => ['auth','checkRole:Admin'],
    'namespace'     => 'Frontend'

  ], function () {

    Route::resource('employee', 'EmployeeController');

    Route::resource('user', 'UserController');

    Route::resource('role', 'RoleController');
    
  });
});

Route::name('frontend.')->group(function () {
    Route::group([
  
      'middleware'    => ['auth','checkRole:Admin,Cashier'],
      'namespace'     => 'Frontend'
  
    ], function () {
  
  
      // Dashboard
      Route::get('/dashboard', function () {
        return View::make('frontend.dashboard');
      })->name('dashboard');
  
      Route::resource('customer', 'CustomerController');
      
      Route::resource('supplier', 'SupplierController');
      

      Route::namespace('Products')->group(function () {  
        Route::resource('product', 'ProductController');
        Route::resource('product-categories', 'ProductCategoriesController');
        Route::resource('product-units', 'ProductUnitsController');
      });


      Route::resource('service', 'ServiceController');

      Route::resource('sales', 'SalesController');

      Route::resource('purchase', 'PurchaseController');

      // Route::resource('appointment', 'AppointmentController');
      
    });
});