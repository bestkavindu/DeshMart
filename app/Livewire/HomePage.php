<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Review;
use Livewire\Component;

class HomePage extends Component
{
    public $blogs;
    public $reviews;
    public function mount()
    {
        $this->blogs = Blog::latest()->where('is_featured', true)->take(5)->get();
        $this->reviews = Review::latest()->take(5)->get();
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
