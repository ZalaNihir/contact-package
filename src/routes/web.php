<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Nihir\Contact\Http\Controllers\ContactController;

Route::get('contact-us',[ContactController::class,'index'])->name('contact');
Route::post('contact-us',[ContactController::class,'send'])->name('contact.store');
