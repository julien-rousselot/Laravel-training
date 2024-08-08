<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'release_year', 'director_id'];

    protected $dates = ['release_date'];

    public function director()
    {
        return $this->belongsTo(Director::class);
    }
}
