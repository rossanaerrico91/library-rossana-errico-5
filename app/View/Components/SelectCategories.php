<?php

namespace App\View\Components;

use Closure;
use App\Models\Author;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class SelectCategories extends Component
{
    public array $selectedCategories;
    public Collection $categories;
    /**
     * Create a new component instance.
     */
    public function __construct(array $selectedCategories = [])
    {
        //dd($selectedCategories);

        $this->selectedCategories = $selectedCategories;
        $this->categories = Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select-categories', ['selected_categories' => $this->selectedCategories,'categories' => $this->categories]);
    }
}
