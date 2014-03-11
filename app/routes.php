<?php

// Main list route
Route::get('/', function()
{
  return View::make('hello');
});

// API routes
Route::group(['prefix' => 'api/v1'], function()
{
  Route::resource('tasks', 'TaskAPIController');
});