<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogView extends Component
{
    public Blog $blog;

    public function mount(Blog $blog)
    {
        $this->blog = $blog->load('category');
    }

    public function render()
    {
        $relatedBlogs = Blog::where('blog_category_id', $this->blog->blog_category_id)
            ->where('id', '!=', $this->blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('livewire.blog-view', compact('relatedBlogs'));
    }
}
