<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'flying_from',
        'flying_to',
        'price',
        'type', // Make sure 'type' is included in $fillable
        'departing',
        'returning',
          'class',
      
       
    ];
    protected $table = 'flights'; // Table name in the database

    

}
