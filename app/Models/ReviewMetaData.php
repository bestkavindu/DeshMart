<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReviewMetaData extends Model
{
    //
    protected $fillable = [
        'review_count',
        'average_rating',
        'years_experience',
        'repairs_done',
    ];
}
