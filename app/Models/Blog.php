<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    //
    protected $fillable = [
        'title',
        'img',
        'content',
    ];

    protected function getImageUrlAttribute(): ?string
    {
        if (!$this->img) {
            return null;
        }

        return Storage::url($this->img);
    }
}
