<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class holidayInquiry extends Model
{
    protected $fillable = ['pTravFrom', 'pStarDate', 'pEndDate', 'adults', 'children', 'infants','passName','pEmail','Contnumber','description','holidayId'];
    use HasFactory;
}
