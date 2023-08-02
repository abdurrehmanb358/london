<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightInquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email',
        'phone_number',
        'destination',
        'form',
        'date of departure',
        'date of arrivel',
        'airlilne',
        'number of passenger',
        'class',
        'message'

        // Add other fields here
    ];
}
