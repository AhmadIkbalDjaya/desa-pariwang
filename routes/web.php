<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Public as PublicPages;
use App\Livewire\Admin as AdminPages;

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

Route::get("", PublicPages\Home\Index::class)->name("home");
Route::get("tentang", PublicPages\About\Index::class)->name("about");
Route::get("bumdes", PublicPages\Bumdes\Index::class)->name("bumdes");
Route::get("bumdes/{bumdes}", PublicPages\Bumdes\Show::class)->name("bumdes.show");
Route::get("kelembagaan", PublicPages\Institution\Index::class)->name("institution");
Route::get("berita-&-kegiatan", PublicPages\Article\Index::class)->name("article");
Route::get("berita-&-kegiatan/{article:slug}", PublicPages\Article\Show::class)->name("article.show");

Route::middleware(["guest"])->group(function () {
    Route::get("login", AdminPages\Login::class)->name("login");
});

Route::middleware(["auth"])
    ->prefix("addes")
    ->name("admin.")
    ->group(function () {
        Route::get("", AdminPages\Index::class)->name("index");
        Route::get("adminProfile/changePass", AdminPages\AdminProfile\ChangePass::class)->name("admin-profile.changePass");
        Route::get("population", AdminPages\Poppulation\Index::class)->name("population.index");
        Route::get("profile", AdminPages\Profile\Index::class)->name("profile.index");
        Route::prefix("location")->name("location.")->group(function () {
            Route::get("location", AdminPages\Location\Index::class)->name("index");
            Route::prefix('marker')->name("marker.")->group(function () {
                Route::get("create", AdminPages\Location\Marker\Create::class)->name("create");
                Route::get("{marker}", AdminPages\Location\Marker\Show::class)->name("show");
                Route::get("{marker}/edit", AdminPages\Location\Marker\Edit::class)->name("edit");
            });
        });
        Route::prefix("bumdes")->name("bumdes.")->group(function () {
            Route::get("", AdminPages\Bumdes\Index::class)->name("index");
            Route::get("create", AdminPages\Bumdes\Create::class)->name("create");
            Route::get("{bumdes}", AdminPages\Bumdes\Show::class)->name("show");
            Route::get("{bumdes}/edit", AdminPages\Bumdes\Edit::class)->name("edit");
        });
        Route::prefix("institution")->name("institution.")->group(function () {
            Route::get("", AdminPages\Institution\Index::class)->name("index");
            Route::get("create", AdminPages\Institution\Create::class)->name("create");
            Route::get("{institution}", AdminPages\Institution\Show::class)->name("show");
            Route::get("{institution}/edit", AdminPages\Institution\Edit::class)->name("edit");
        });
        Route::prefix("article")->name("article.")->group(function () {
            Route::get("", AdminPages\Article\Index::class)->name("index");
            Route::get("create", AdminPages\Article\Create::class)->name("create");
            Route::get("{article}", AdminPages\Article\Show::class)->name("show");
            Route::get("{article}/edit", AdminPages\Article\Edit::class)->name("edit");
        });
        Route::prefix("village-aparatus")->name("village-aparatus.")->group(function () {
            Route::get("", AdminPages\VillageAparatus\Index::class)->name("index");
            Route::get("create", AdminPages\VillageAparatus\Create::class)->name("create");
            Route::get("{village_aparatus}", AdminPages\VillageAparatus\Show::class)->name("show");
            Route::get("{village_aparatus}/edit", AdminPages\VillageAparatus\Edit::class)->name("edit");
        });
        Route::get("complaint", AdminPages\Complaint\Index::class)->name("complaint.index");
    });
