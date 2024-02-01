<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("addes")->group(function () {
    Route::get('', \App\Livewire\Admin\Index::class)->name('admin.index');
    Route::prefix("profile")->group(function () {
        Route::get('', \App\Livewire\Admin\Profile\Index::class)->name('admin.profile.index');
    });
    Route::prefix("bumdes")->group(function () {
        Route::get('', \App\Livewire\Admin\Bumdes\Index::class)->name('admin.bumdes.index');
    });
    Route::prefix("institution")->group(function () {
        Route::get('', \App\Livewire\Admin\Institution\Index::class)->name('admin.institution.index');
    });
    Route::prefix("article")->group(function () {
        Route::get('', \App\Livewire\Admin\Article\Index::class)->name('admin.article.index');
    });
});
