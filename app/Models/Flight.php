<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'images',
        'flying_from',
        'flying_to',
        'price',
        'type', // Make sure 'type' is included in $fillable
       'trip_type',
        'departing',
        'returning',
         'class',
         'message',
      
       
    ];
    protected $table = 'flights'; // Table name in the database

    

}
