<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{TicketController};
 

Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');

// Routes for testing
Route::get('/contact', [SiteController::class, 'contact']);

// Initial route from Laravel
Route::get('/', function () {
    return view('welcome');
});

