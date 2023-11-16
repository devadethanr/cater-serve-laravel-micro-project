<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function showEditScreen(Booking $booking){
        return view('edit-booking',['booking' => $booking]);
    }

    public function createBook(Request $request){
        $incomingFields = $request->validate([
            'country' => 'required',
            'city' => 'required',
            'palace' => 'required',
            'event_type' => 'required',
            'palace_number' => 'required',
            'food_preference' => 'required',
            'contact_no' => 'required',
            'event_date' => 'required',
            'email' => 'required'

        ]);
        $incomingFields['country'] = strip_tags($incomingFields['country']);
        $incomingFields['city'] = strip_tags($incomingFields['city']);
        $incomingFields['palace'] = strip_tags($incomingFields['palace']);
        $incomingFields['event_type'] = strip_tags($incomingFields['event_type']);
        $incomingFields['palace_number'] = strip_tags($incomingFields['palace_number']);
        $incomingFields['food_preference'] = strip_tags($incomingFields['food_preference']);
        $incomingFields['contact_no'] = strip_tags($incomingFields['contact_no']);
        $incomingFields['event_date'] = strip_tags($incomingFields['event_date']);
        $incomingFields['email'] = strip_tags($incomingFields['email']);
        $incomingFields['user_id'] = auth()->user()->id;
        Booking::create($incomingFields);
        return redirect('/');
    }
}
