<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\User;
use App\Models\TeacherSchedule;
use App\Http\Requests\BookingStoreRequest;
use App\Http\Requests\BookingUpdateRequest;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $filterValue = $request->input('filterValue');
        // Asegúrate de reemplazar 'column' con el nombre real de la columna que quieres filtrar.
        $bookings = Booking::where('user_id', 'like', '%' . $filterValue . '%')->paginate(10);
        
        return view('bookings.index', compact('bookings'));
    }
    
    public function create()
    {
        // Selecciona usuarios que son 'estudiantes' usando la librería spatie/laravel-permission.
        // Asegúrate de que el ID del rol sea correcto para tus estudiantes.
        $students = User::role('Student')->get(); // Aquí usamos el nombre del rol directamente. Ajusta según la configuración de tu sistema.
    
        $teacherSchedules = TeacherSchedule::with('teacher')->get();
    
        return view('bookings.create', compact('students', 'teacherSchedules'));
    }
    
    public function store(BookingStoreRequest $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Cambia 'student_id' por 'user_id'.
            'teacher_schedule_id' => 'required|exists:teacher_schedules,id',
            'date' => 'required|date',
            'schedule' => 'required',
            'status' => 'required|in:scheduled,completed,cancelled',
        ]);
    
        Booking::create($validatedData);
    
        return redirect()->route('bookings.index')->with('success-create', 'Booking created successfully.');
    }
    
    public function edit(Booking $booking)
    {
        // Similar a create, selecciona usuarios con rol de 'estudiante'.
        $students = User::role('Student')->get(); // Ajusta el método de selección de roles como sea necesario.
    
        $teacherSchedules = TeacherSchedule::with('teacher')->get();
    
        return view('bookings.edit', compact('booking', 'students', 'teacherSchedules'));
    }
    
    public function update(BookingUpdateRequest $request, Booking $booking)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id', // Cambia 'student_id' por 'user_id'.
            'teacher_schedule_id' => 'required|exists:teacher_schedules,id',
            'date' => 'required|date',
            'schedule' => 'required',
            'status' => 'required|in:scheduled,completed,cancelled',
        ]);
    
        $booking->update($validatedData);
    
        return redirect()->route('bookings.index')->with('success-update', 'Booking updated successfully.');
    }
    

    public function destroy(Booking $booking)
    {
        $booking->delete();

        return back()->with('success-delete', 'Booking deleted successfully.');
    }
}

