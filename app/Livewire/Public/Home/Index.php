<?php

namespace App\Livewire\Public\Home;

use App\Enums\Gender;
use App\Livewire\Forms\Admin\ComplaintForm;
use App\Models\Article;
use App\Models\Bumdes;
use App\Models\Location;
use App\Models\Marker;
use App\Models\Population;
use App\Models\Profile;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Index extends Component
{
    public ComplaintForm $form;
    public function render()
    {
        $profile = Cache::rememberForever("home-profile", function () {
            return Profile::select(["id", "name", "description"])->first();
        });
        $location = Cache::rememberForever('home-location', function () {
            return Location::select(["id", "longitude", "latitude"])->first();
        });
        $articles = Cache::rememberForever("home-articles", function () {
            return Article::select(["id", "title", "slug", "body", "image", "publish_date"])->latest("publish_date")->limit(3)->get();
        });
        $bumdeses = Cache::rememberForever('home-bumdeses', function () {
            return Bumdes::select(["id", "name", "image"])->latest()->limit(2)->get();
        });
        $population = Cache::rememberForever('home-population', function () {
            return Population::select(["id", "total_population", "male", "female", "family", "temporary", "mutation"])->first();
        });
        $markers = Cache::rememberForever('home-markers', function () {
            return Marker::select(["id", "name", "longitude", "latitude", "image", "description"])->get();
        });

        return view('livewire.public.home.index', [
            "articles" => $articles,
            "bumdeses" => $bumdeses,
            "profile" => $profile,
            "population" => $population,
            "location" => $location,
            "markers" => $markers,
        ])->title("Desa Pariwang");
    }

    public function store()
    {
        $this->form->store();
    }
}
