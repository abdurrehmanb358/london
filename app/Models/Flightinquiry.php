<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flightinquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'destination',
        'form',
        'date_of_departure',
        'date_of_arrival',
        'airline',
        'number_of_passenger',
        'class',
        'message',
        // Add other fields here
    ];
}
    
    
    
    
    
