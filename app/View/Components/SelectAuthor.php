<?php

namespace App\View\Components;

use Closure;
use App\Models\Author;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class SelectAuthor extends Component
{
    public int $authorId;
    public Collection $authors;
    /**
     * Create a new component instance.
     */
    public function __construct(int $authorId = 0)
    {
        $this->authorId = $authorId;
        $this->authors = Author::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-author', ['author_id' => $this->authorId,'authors' => $this->authors]);
    }
}
