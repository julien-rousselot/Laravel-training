<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;
    protected $dates = ['release_date'];

    // explique le fillable
    protected $fillable = ['title', 'release_year', 'director_id'];

    /**
     * Get the director associated with the movie.
     *
     * This method defines a one-to-many (inverse) relationship between
     * the Movie model and the Director model. A movie belongs to a single director.
     *
     * We can easily access the director information for a given movie.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function director(): BelongsTo
    {
        return $this->belongsTo(Director::class);
    }
}
