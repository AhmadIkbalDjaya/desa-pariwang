<?php

namespace App\Livewire\Public\Home;

use App\Livewire\Forms\Admin\ComplaintForm;
use App\Models\Article;
use App\Models\Bumdes;
use App\Models\Location;
use App\Models\Marker;
use App\Models\Population;
use App\Models\Profile;
use Livewire\Component;

class Index extends Component
{
    public ComplaintForm $form;
    public function render()
    {
        return view('livewire.public.home.index', [
            "articles" => Article::select(["id", "title", "slug", "body", "image", "publish_date"])->latest("publish_date")->limit(3)->get(),
            "bumdeses" => Bumdes::select(["id", "name", "image"])->latest()->limit(2)->get(),
            "profile" => Profile::select(["id", "name", "description"])->first(),
            "population" => Population::select(["id", "total_population", "male", "female", "family", "temporary", "mutation"])->first(),
            "location" => Location::select(["id", "longitude", "latitude"])->first(),
            "markers" => Marker::select(["id", "name", "longitude", "latitude", "image", "description"])->get(),
        ])->title("Desa Pariwang");
    }

    public function store()
    {
        $this->form->store();
    }
}
