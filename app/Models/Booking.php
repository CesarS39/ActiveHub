<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'teacher_schedule_id', 'date', 'schedule', 'status'];

    public function teacherSchedule()
    {
        return $this->belongsTo(TeacherSchedule::class);
    }
   
}
