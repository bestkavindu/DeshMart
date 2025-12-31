<?php

namespace App\Livewire;

use App\Models\Blog;
use App\Models\Review;
use App\Models\ReviewMetaData;
use Livewire\Component;

class HomePage extends Component
{
    public $blogs;
    public $reviews;
    public $reviewMetaData;
    public function mount()
    {
        $this->blogs = Blog::latest()->where('is_featured', true)->where('is_published', true)->take(5)->get();
        $this->reviews = Review::latest()->where('is_featured', true)->where('status', true)->take(9)->get();
        $this->reviewMetaData =ReviewMetaData::first();

    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
