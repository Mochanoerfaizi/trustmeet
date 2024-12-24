<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tutor_id' => 'required|exists:tutors,id',
            'booking_date' => 'required|date',
            'notes' => 'nullable|string',
        ]);

        $booking = Booking::create([
            'user_id' => auth()->id(), // ID pengguna yang sedang login
            'tutor_id' => $request->tutor_id,
            'booking_date' => $request->booking_date,
            'notes' => $request->notes,
        ]);

        return response()->json([
            'message' => 'Booking created successfully!',
            'booking' => $booking,
        ]);
    }
}
