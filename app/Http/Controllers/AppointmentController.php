<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Get all appointments
    public function index()
    {
        return response()->json(Appointment::all());
    }

    // Store a new appointment
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'appointment_date' => 'required|date',
        ]);

        $appointment = Appointment::create($request->all());

        return response()->json(['message' => 'Appointment booked successfully!', 'data' => $appointment], 201);
    }

    // Show a single appointment
    public function show($id)
    {
        return response()->json(Appointment::findOrFail($id));
    }

    // Update an appointment
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($request->all());

        return response()->json(['message' => 'Appointment updated successfully!', 'data' => $appointment]);
    }

    // Delete an appointment
    public function destroy($id)
    {
        Appointment::destroy($id);

        return response()->json(['message' => 'Appointment deleted successfully!']);
    }
}

