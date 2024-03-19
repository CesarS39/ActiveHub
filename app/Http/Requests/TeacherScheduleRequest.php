<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherScheduleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Consider adjusting this based on your authentication and authorization setup
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'sport_id' => 'required|exists:sports,id',
            'schedule' => 'required|date_format:H:i',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required' => 'A teacher must be selected.',
            'user_id.exists' => 'The selected teacher is invalid.',
            'sport_id.required' => 'A sport must be selected.',
            'sport_id.exists' => 'The selected sport is invalid.',
            'schedule.required' => 'A schedule time is required.',
            'schedule.date_format' => 'The schedule must be a valid time.',
        ];
    }
}
