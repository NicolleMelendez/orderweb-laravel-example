<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderActivity extends Model
{
    use HasFactory;
        protected $table = 'order_activity';
        protected $fillable = [
        'legalization_date',
        'address',
        'city',
        'observation_id',
        'causal_id'
    ];
}
