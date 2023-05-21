<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{
    protected $table = 'dates';

    protected $primaryKey = 'date_id';

    protected $fillable = [
        'date',
        'place_name',
        'description',
        'website',
        'google_maps_url',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class, 'date_id');
    }
}
