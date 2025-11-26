<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageMetric extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'value',
        'order_column',
    ];

    protected $casts = [
        'order_column' => 'integer',
    ];
}


