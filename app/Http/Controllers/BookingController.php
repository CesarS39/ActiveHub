<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\Sport_User;
use App\Models\TeacherSchedule;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['user', 'teacherSchedule.sport_user.user', 'teacherSchedule.sport_user.sport'])->paginate(10);
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        // Solo los profesores se muestran aquí
        $teachers = User::role('Teacher')->get();
        return view('bookings.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        // Este método deberá manejar la primera parte de la creación del booking
        // donde se selecciona el profesor y luego se procede a seleccionar el deporte.
        // La lógica de negocio real para almacenar el booking se manejará en otro método.
    }

    public function continueToSports(Request $request)
    {
        // Obtenemos los deportes que el profesor seleccionado puede enseñar
        $sports = Sport_User::where('user_id', $request->teacher_id)->with('sport')->get();

        // Pasamos al siguiente paso para seleccionar el deporte
        return view('bookings.select_sport', [
            'sports' => $sports,
            'teacher_id' => $request->teacher_id
        ]);
    }

    public function continueToSchedules(Request $request)
    {
        // Obtenemos los horarios del deporte seleccionado del profesor
        $schedules = TeacherSchedule::where('sport_user_id', $request->sport_user_id)->get();

        // Pasamos al siguiente paso para seleccionar el horario
        return view('bookings.select_schedule', [
            'schedules' => $schedules,
            'sport_user_id' => $request->sport_user_id
        ]);
    }

    public function storeFinal(Request $request)
    {
    // Valida todos los campos necesarios
    $validatedData = $request->validate([
        'schedule_id' => 'required|exists:teacher_schedules,id',
        'date' => 'required|date', // Asegúrate de que estés enviando este campo desde el formulario
    ]);

    // Crea la reserva con los datos validados
    Booking::create([
        'user_id' => auth()->user()->id,
        'teacher_schedule_id' => $validatedData['schedule_id'],
        'date' => $validatedData['date'],
        'status' => 'agendada', // Puedes ajustar este valor según tus necesidades
    ]);

    // Redirecciona al índice con un mensaje de éxito
    return redirect()->route('bookings.index')->with('success-create', 'La clase ha sido agendada correctamente.');
    }

    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success-delete', 'La clase ha sido cancelada correctamente.');
    }

    public function show(Booking $booking)
{
    // Asegúrate de cargar todas las relaciones necesarias para mostrar los detalles
    return view('bookings.show', compact('booking'));
}
}


