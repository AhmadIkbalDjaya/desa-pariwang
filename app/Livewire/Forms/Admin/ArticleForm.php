<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Article;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    public ?Article $article;
    #[Validate("required|string")]
    public $title;
    #[Validate("required|string|min:250")]
    public $body;
    #[Validate("nullable|image")]
    public $image;
    #[Validate("nullable|date")]
    public $publish_date;

    public function setArticle(Article $article) {
        $this->article = $article;
        $this->title = $article->title;
        $this->body = $article->body;
        // $this->image = $article->image;
        $this->publish_date = $article->publish_date;
    }

    public function store() {
        $validated = $this->validate();
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("article");
        }
        if (!$this->publish_date) {
            $validated["publish_date"] = Carbon::now();
        }
        Article::create($validated);
    }

    public function update() {
        $validated = $this->validate();
        if ($this->image && gettype($this->image) == "object") {
            if (Storage::exists($this->image)) {
                Storage::delete($this->image);
            }
            $validated["image"] = $this->image->storePublicly("article");
        } else {
            unset($validated["image"]);
        }
        $this->article->update($validated);
    }

    public function delete() {
        if ($this->image && Storage::exists($this->image)) {
            Storage::delete($this->image);
        }
        $this->article->delete();
    }
}
