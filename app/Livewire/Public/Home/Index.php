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
            "articles" => Article::orderBy('publish_date', 'DESC')->limit(3)->get(),
            "bumdeses" => Bumdes::latest()->limit(2)->get(),
            "profile" => Profile::get()->first(),
            "population" => Population::get()->first(),
            "location" => Location::get()->first(),
            "markers" => Marker::get(),
        ])->title("Desa Pariwang");
    }

    public function store() {
        $this->form->store();
        flash("Masukan Berhasil Dikirim", "success");
        $this->dispatch('show-notif');
        $this->form->resetCommplaint();
    }
}
