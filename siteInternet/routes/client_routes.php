<?php



Route::get('/', [App\Http\Controllers\ClientController::class, 'home']);
Route::get('/about', [App\Http\Controllers\ClientController::class, 'about']);
Route::get('/services_us', [App\Http\Controllers\ClientController::class, 'services_us']);
Route::get('/projets_us', [App\Http\Controllers\ClientController::class, 'projets_us']);
Route::get('/formations_us', [App\Http\Controllers\ClientController::class, 'formations_us']);
Route::get('/team', [App\Http\Controllers\ClientController::class, 'team']);
Route::get('/logette', [App\Http\Controllers\ClientController::class, 'logette']);
Route::get('/precommander_la_logette_intelligente', [App\Http\Controllers\ClientController::class, 'precommandes_logettes']);
Route::get('/news', [App\Http\Controllers\ClientController::class, 'news']);
Route::get('/contact', [App\Http\Controllers\ClientController::class, 'contact']);
Route::get('/single_new/{id}', [App\Http\Controllers\ClientController::class, 'single_new']);
Route::get('/single_projet/{id}', [App\Http\Controllers\ClientController::class, 'single_projet']);
Route::get('/single_formation/{id}', [App\Http\Controllers\ClientController::class, 'single_formation']);
