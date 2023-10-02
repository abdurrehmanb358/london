<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insurance_inquires extends Model
{
    use HasFactory;
    protected $fillable = [
        
'costomer_name',
'CNIC',
'data_of_birth',
'father_name',
'Mobile_number',
'Email',
'gender',
'purppose_of_vist',
'adress',
'passport',
'Depature_date',
'select_country_travel',
'airline',
'number_of_passengers',
'class',
'price',
'beneficiary_name',
'beneficiary_relation',
'beneficiary_CNIC',
'beneficiary_phone',
'beneficiary_adress',
'Insurance_Id',
    ];
    protected $table = 'insurance_inquiries'; // Table name in the database
}
