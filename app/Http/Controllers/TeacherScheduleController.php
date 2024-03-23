<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherSchedule;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Sport_User;
use App\Models\Sport;


class TeacherScheduleController extends Controller
{
    // Método para mostrar la lista de horarios de los profesores
    public function index()
    {
        $schedules = TeacherSchedule::simplePaginate(10);
        return view('teacherSchedules.index', ['schedules' => $schedules]);
    }

    // Método para mostrar el formulario de creación de un nuevo horario
    public function create(Request $request)
    {
        $teachers = User::role('Teacher')->get();

        return view('teacherSchedules.create', compact('teachers'));
    }


    // Método para almacenar un nuevo horario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        // Encuentra los deportes que enseña este profesor
        $sports = Sport_User::where('user_id', $request->user_id)->with('sport')->get();

        // Pasar el ID del profesor y los deportes a la siguiente vista
        return view('teacherschedules.select_sport', [
            'sports' => $sports,
            'user_id' => $request->user_id
        ]);
    }

    public function storeSchedule(Request $request)
    {
        $request->validate([
            'schedule' => 'required',
            'sport_user_id' => 'required|exists:sport_user,id',
        ]);

        $schedule = TeacherSchedule::create($request->all());
        return redirect()->route('teacherSchedules.index')
                         ->with('success-create', 'Schedule created successfully');
    }

    // Método para mostrar un horario específico
    public function show(TeacherSchedule $schedule)
    {
        return view('teacherSchedules.show', compact('schedule'));
    }

    // Método para mostrar el formulario de edición de un horario
    public function edit(TeacherSchedule $schedule)
    {
        // Pasar datos adicionales si es necesario
        return view('teacherSchedules.edit', compact('schedule'));
    }

    // Método para actualizar un horario en la base de datos
    public function update(Request $request, TeacherSchedule $schedule)
    {
        // Validación básica
        $validatedData = $request->validate([
            'schedule' => 'required',
            'sport_user_id' => ['required', Rule::exists('sport_user', 'id')],
        ]);

        $schedule->update($validatedData);
        return redirect()->route('teacherSchedules.index')
                         ->with('success-update', 'Schedule updated successfully');
    }

    // Método para eliminar un horario
    public function destroy(TeacherSchedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('teacherSchedules.index')
                         ->with('success-delete', 'Schedule deleted successfully');
    }

    private function getSportUsers()
    {
        // Obtenemos los usuarios con rol de profesor
        $teachers = User::role('Teacher')->get();

        // Ahora obtenemos los Sport_User donde el user_id está en los IDs de los profesores
        $sportUsers = Sport_User::whereIn('user_id', $teachers->pluck('id'))->with('user','sport')->get();

        return $sportUsers;
    }
}
?>
