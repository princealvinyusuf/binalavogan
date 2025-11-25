<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'sector',
        'province',
        'pic_name',
        'pic_email',
        'slots',
        'notes',
    ];
}


