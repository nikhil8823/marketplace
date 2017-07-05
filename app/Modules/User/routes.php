<?php
Route::group(array('middleware' => ['web']), function() {
Route::get('/', 'App\Modules\User\Controllers\AuthController@getLogin');
Route::get('/create-account/{user_type}', 'App\Modules\User\Controllers\AuthController@createAccount');
Route::post('/getCities', 'App\Modules\User\Controllers\AuthController@getCities');
Route::get('/create-account-step-one', 'App\Modules\User\Controllers\AuthController@createAccountStepOne');
});