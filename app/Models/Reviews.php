<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    protected $table = 'reviews';

    protected $primaryKey = 'review_id';

    protected $fillable = [
        'date_id',
        'reviewer_name',
        'rating',
        'review',
    ];

    public function date()
    {
        return $this->belongsTo(Date::class, 'date_id');
    }
}
