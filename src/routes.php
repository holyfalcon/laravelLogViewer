<?php
use Illuminate\Support\Facades\Route;
use Falcon\Logviewer\Controllers\LogviewerController;
Route::resource('/logs', 'Falcon\Logviewer\Controllers\LogviewerController');
