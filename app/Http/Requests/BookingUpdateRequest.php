<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cambiar según la lógica de autorización
    }

    public function rules()
    {
        return [
            'student_id' => 'required|exists:users,id',
            'teacher_schedule_id' => 'required|exists:teacher_schedules,id',
            'date' => 'required|date',
            'schedule' => 'required',
            'status' => 'required|in:scheduled,completed,cancelled',
        ];
    }
}
