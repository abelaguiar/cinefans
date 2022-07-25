<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Session extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cine_id',
        'movie_id',
        'time_init',
        'time_finish',
        'date',
        'total_number_seats',
        'number_seats_remaining'
    ];

    public function cine()
    {
        return $this->belongsTo(Cine::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
