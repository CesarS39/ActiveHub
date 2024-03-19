<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        // Asegúrate de incluir aquí todos los campos asignables
        'schedule', // Ejemplo
    ];

    // Suponiendo que cada teacher_schedule se relaciona con muchos bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    // A través de los bookings, puedes obtener los teachers indirectamente
    public function teachers()
    {
        return $this->bookings()->with('teacher');
    }

    // Método para obtener los deportes asociados indirectamente
    // Esto asume que tienes definida una relación 'sports' en el modelo Booking
    public function sports()
    {
        return $this->bookings()->with('sport');
    }
}


