<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entity extends Model
{
    use HasFactory;

    protected $fillable =[

        'name', 'alias', 'url', 'api', 'email', 'address_1', 'address_2', 'city', 'state', 'dev_mode', 'payment_mode', 'paid_status', 'is_active'
    ];
}
