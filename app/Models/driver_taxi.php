<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver_taxi extends Model
{
    use HasFactory;

    protected $fillable = [
        'User_id',
        'status',
        'number_seats',
        'image',
        'typ_veicl',
        'matricule',
        'method_payment',
        'description',
    ];
}
