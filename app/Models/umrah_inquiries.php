<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umrah_inquiries extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'date', 'noOfPerson', 'umrahId'];
    // Timestamps will be managed automatically by Eloquent
    public $timestamps = true;
    use HasFactory;
}
