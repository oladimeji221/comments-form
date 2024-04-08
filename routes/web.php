<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Comments;
 

Route::get('/counter', Counter::class); 
Route::get('/', Comments::class)->name('comment');

