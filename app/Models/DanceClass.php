<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanceClass extends Model
{
    protected $table = 'dance_classes';

    protected $fillable = [
        'id',
        'name',
        'age_requirement',
        'dance_style',
        'day_of_week',
        'time',
        // Add more fields as needed
    ];
}
