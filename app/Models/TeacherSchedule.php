<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule',
        'sport_user_id'
    ];
    //Relacion uno a muchos inversa
    public function sport_user(){
        return $this->belongsTo('App\Models\Sport_User');
    }

    //relacion uno a muchos
    public function bookings(){
        return $this->hasMany('App\Models\Booking');
    }
}


