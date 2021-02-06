<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/live', function () {
    return view('live');
})->name('live');

Route::middleware(['auth:sanctum', 'verified'])->get('/live/details', function () {
    return view('live.details');
})->name('live-details');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/attendees', function () {
    return view('admin.attendees');
})->name('admin-attendees');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/attendees/list', function () {
    return view('admin.attendees.list');
})->name('admin-attendees-list');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/attendees/list/view', function () {
    return view('admin.attendees.view');
})->name('admin-attendees-view');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/attendees/profile', function () {
    return view('admin.attendees.profile');
})->name('admin-attendees-profile');
