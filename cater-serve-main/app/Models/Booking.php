<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['country', 'city', 'palace', 'event_type', 'palace_number', 'food_preference','user_id', 'contact_no', 'event_date', 'email'];
}
