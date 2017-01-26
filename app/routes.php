<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get("/", ["as" => "home", "uses" => "Home@indexAction"]);
Route::post("/", ["as" => "result", "uses" => "Home@processAction"]);

Route::get("/setup", ["as" => "setup.index", "uses" => "Setup@indexAction"]);
Route::post("/setup/new", ["as" => "setup.new", "uses" => "Setup@newAction"]);
Route::post("/setup/edit/{id}", ["as" => "setup.edit", "uses" => "Setup@editAction"]);
Route::get("/setup/delete/{id}", ["as" => "setup.delete", "uses" => "Setup@deleteAction"]);
