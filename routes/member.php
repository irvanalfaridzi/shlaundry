<?php
Route::name('member.')->group(function () {
    Route::group([
  
      'middleware'    => ['auth','checkRole:guest'],
      'namespace'     => 'Member'
  
    ], function () {
  
      Route::resource('member', 'DaftarController');
  
      Route::resource('user', 'UserController');
  
      Route::resource('role', 'RoleController');
      
    });
  });