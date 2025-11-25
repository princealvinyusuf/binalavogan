<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatisticsSnapshot extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch',
        'province',
        'sector',
        'period_start',
        'period_end',
        'applicants',
        'accepted',
        'completed',
        'placed',
        'female',
        'male',
        'other_gender',
        'hours_training',
        'certified',
    ];
}


