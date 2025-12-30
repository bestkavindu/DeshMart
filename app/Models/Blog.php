<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Blog extends Model
{
    //
    protected $fillable = [
        'title',
        'img',
        'content',
        'is_featured',
        'is_published',
    ];



    protected function getImageUrlAttribute(): ?string
    {
        if (!$this->img) {
            return null;
        }

        return Storage::url($this->img);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }


}
