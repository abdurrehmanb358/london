<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;
    protected $fillable = ['imges', 'days', 'travel_plan_for','insurance_charges', 'Insurance_benefits'];
    protected $attributes = [
        'imges' => null, // Default value for 'imges' attribute
           // Default value for 'days' attribute
        // Add default values for other attributes here
    ];
    
}
