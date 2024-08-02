<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'gst', 'fy_start', 'fy_end', 'add_1', 'add_2', 'city', 'state', 'pin', 'entity', 'logo'
    ];
}
