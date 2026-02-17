<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/patients', 'pages::patients')->name('patients');
Route::livewire('/quotes', 'pages::quotes')->name('quotes');
Route::livewire('/management', 'pages::management')->name('management');
