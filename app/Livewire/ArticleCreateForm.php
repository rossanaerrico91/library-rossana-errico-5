<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCreateForm extends Component
{
    public string $title='';
    public string $subtitle='';
    public string $description='';
    protected $rules = [
        'title' => 'required|string',
        'subtitle' => 'string',
        'description' => 'required|string',

    ];
    public function store()
    {

        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,

        ]);

        $this->reset(['title','subtitle','description']);

        session()->flash('tasks', 'Articolo creato.');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.article-create-form');
    }
}
