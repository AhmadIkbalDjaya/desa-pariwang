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
        Route::get('create', \App\Livewire\Admin\Bumdes\Create::class)->name('admin.bundes.create');
        Route::get('{bumdes}', \App\Livewire\Admin\Bumdes\Show::class)->name('admin.bumdes.show');
        Route::get('{bumdes}/edit', \App\Livewire\Admin\Bumdes\Edit::class)->name('admin.bumdes.edit');
    });
    Route::prefix("institution")->group(function () {
        Route::get('', \App\Livewire\Admin\Institution\Index::class)->name('admin.institution.index');
        Route::get('create', \App\Livewire\Admin\Institution\Create::class)->name('admin.institution.create');
        Route::get('{institution}', \App\Livewire\Admin\Institution\Show::class)->name('admin.institution.show');
        Route::get('{institution}/edit', \App\Livewire\Admin\Institution\Edit::class)->name('admin.institution.edit');
    });
    Route::prefix("article")->group(function () {
        Route::get('', \App\Livewire\Admin\Article\Index::class)->name('admin.article.index');
        Route::get('create', \App\Livewire\Admin\Article\Create::class)->name('admin.article.create');
        Route::get('{article}', \App\Livewire\Admin\Article\Show::class)->name('admin.article.show');
        Route::get('{article}/edit', \App\Livewire\Admin\Article\Edit::class)->name('admin.article.edit');
    });
});
