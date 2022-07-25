<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'amount',
        'total_value',
        'session_id',
        'buyer_id'
    ];

    public function session()
    {
        return $this->belongsTo(Session::class);
    }

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }
}
