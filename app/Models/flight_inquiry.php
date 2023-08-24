<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flight_inquiry extends Model
{
    protected $fillable = ['fname','lname', 'email', 'phone', 'destination', 'form', 'dateOfDeparture','dateOfArival','airline','noOfPassenger','class','message','flightId'];
    use HasFactory;
    protected $table = 'flight_inquiry';
}
