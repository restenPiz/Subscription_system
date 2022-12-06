<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $table='subscriptions';
    
    protected $fillable = [
        'name',
        'user_id',
        'stripe_status',
        'stripe_id',
        'stripe_price',
        'quantity',
    ];

}
