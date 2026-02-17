<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;


Route::get('/', function() { return Inertia::render('Admin/UserManagement');});
Route::get('/inventory', function() { return Inertia::render('Admin/Inventory');});
Route::get('/notifications', function() { return Inertia::render('Admin/Notification');});
Route::get('/activity-logs', function() { return Inertia::render('Admin/ActivityLogs');});
Route::get('/settings', function() { return Inertia::render('Admin/Settings');}); 

Route::get('/transactions', function() { return Inertia::render('Procurement/Transaction');});
Route::get('/dashboard', function() { return Inertia::render('Procurement/Dashboard');});