<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelInquiries extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'starDate', 'endDate', 'travFrom','hotelId','descripyion'];

    public $timestamps = true;
    use HasFactory;
}
