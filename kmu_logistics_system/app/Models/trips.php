<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    use HasFactory;
    protected $table = 'trips';
    protected $fillable = [
        'trip_name',
        'number_of_seats',
        'status',
    ];
}
