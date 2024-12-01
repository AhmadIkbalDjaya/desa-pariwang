<?php

namespace App\Livewire\Forms\Admin;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{
    public ?Article $article;
    #[Validate]
    public $title;
    #[Validate]
    public $body;
    #[Validate]
    public $image;
    #[Validate]
    public $publish_date;
    public function rules(): array
    {
        return [
            "title" => "required|string",
            "body" => "required|string",
            "image" => "nullable|image",
            "publish_date" => "nullable|date",
        ];
    }

    public function setArticle(Article $article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->body = $article->body;
        $this->publish_date = $article->publish_date;
    }

    public function store()
    {
        $validated = $this->validate();
        if ($this->image) {
            $validated["image"] = $this->image->storePublicly("article");
        } else {
            unset($validated["image"]);
        }
        Article::create($validated);
    }

    public function update()
    {
        $validated = $this->validate();
        if ($this->image && gettype($this->image) == "object") {
            if ($this->article->image && Storage::exists($this->article->image)) {
                Storage::delete($this->article->image);
            }
            $validated["image"] = $this->image->storePublicly("article");
        } else {
            unset($validated["image"]);
        }
        $this->article->update($validated);
    }

    public function delete()
    {
        if ($this->article->image && Storage::exists($this->article->image)) {
            Storage::delete($this->article->image);
        }
        $this->article->delete();
    }
}
