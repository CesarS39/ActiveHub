<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sport_User extends Model
{
    use HasFactory;
    protected $table = 'sport_user';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

    //relacion uno a muchos
    public function schedules(){
        return $this->hasMany('App\Models\TeacherSchedule');
    }
    
}
