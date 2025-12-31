<?php

namespace App\Livewire;

use App\Models\Review as ReviewModel;
use Livewire\Component;
use Livewire\WithPagination;

class Review extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.review', [
            'reviews' => ReviewModel::latest()->where('is_featured', true)->paginate(12),
        ]);
    }
}
