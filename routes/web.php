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

Route::get("", \App\Livewire\Public\Home\Index::class)->name("home");
Route::get("tentang", \App\Livewire\Public\About\Index::class)->name("about");
Route::get("bumdes", \App\Livewire\Public\Bumdes\Index::class)->name("bumdes");
Route::get("bumdes/{bumdes}", \App\Livewire\Public\Bumdes\Show::class)->name("bumdes.show");
Route::get("kelembagaan", \App\Livewire\Public\Institution\Index::class)->name("institution");
Route::get("berita-&-kegiatan", \App\Livewire\Public\Article\Index::class)->name("article");
Route::get("berita-&-kegiatan/{article:slug}", \App\Livewire\Public\Article\Show::class)->name("article.show");

Route::middleware(["guest"])->group(function () {
    Route::get("login", \App\Livewire\Admin\Login::class)->name("login");
});

Route::middleware(["auth"])
    ->prefix("addes")
    ->name("admin.")
    ->group(function () {
        Route::get("", \App\Livewire\Admin\Index::class)->name("index");
        Route::get("adminProfile/changePass", \App\Livewire\Admin\AdminProfile\ChangePass::class)->name("admin-profile.changePass");
        Route::get("population", \App\Livewire\Admin\Poppulation\Index::class)->name("population.index");
        Route::get("profile", \App\Livewire\Admin\Profile\Index::class)->name("profile.index");
        Route::prefix("location")->name("location.")->group(function () {
            Route::get("location", \App\Livewire\Admin\Location\Index::class)->name("index");
            Route::prefix('marker')->name("marker.")->group(function () {
                Route::get("create", \App\Livewire\Admin\Location\Marker\Create::class)->name("create");
                Route::get("{marker}", \App\Livewire\Admin\Location\Marker\Show::class)->name("show");
                Route::get("{marker}/edit", \App\Livewire\Admin\Location\Marker\Edit::class)->name("edit");
            });
        });
        Route::prefix("bumdes")->name("bumdes.")->group(function () {
            Route::get("", \App\Livewire\Admin\Bumdes\Index::class)->name("index");
            Route::get("create", \App\Livewire\Admin\Bumdes\Create::class)->name("create");
            Route::get("{bumdes}", \App\Livewire\Admin\Bumdes\Show::class)->name("show");
            Route::get("{bumdes}/edit", \App\Livewire\Admin\Bumdes\Edit::class)->name("edit");
        });
        Route::prefix("institution")->name("institution.")->group(function () {
            Route::get("", \App\Livewire\Admin\Institution\Index::class)->name("index");
            Route::get("create", \App\Livewire\Admin\Institution\Create::class)->name("create");
            Route::get("{institution}", \App\Livewire\Admin\Institution\Show::class)->name("show");
            Route::get("{institution}/edit", \App\Livewire\Admin\Institution\Edit::class)->name("edit");
        });
        Route::prefix("article")->name("article.")->group(function () {
            Route::get("", \App\Livewire\Admin\Article\Index::class)->name("index");
            Route::get("create", \App\Livewire\Admin\Article\Create::class)->name("create");
            Route::get("{article}", \App\Livewire\Admin\Article\Show::class)->name("show");
            Route::get("{article}/edit", \App\Livewire\Admin\Article\Edit::class)->name("edit");
        });
        Route::prefix("village-aparatus")->name("village-aparatus.")->group(function () {
            Route::get("", \App\Livewire\Admin\VillageAparatus\Index::class)->name("index");
            Route::get("create", \App\Livewire\Admin\VillageAparatus\Create::class)->name("create");
            Route::get("{village_aparatus}", \App\Livewire\Admin\VillageAparatus\Show::class)->name("show");
            Route::get("{village_aparatus}/edit", \App\Livewire\Admin\VillageAparatus\Edit::class)->name("edit");
        });
        Route::get("complaint", \App\Livewire\Admin\Complaint\Index::class)->name("complaint.index");
    });
