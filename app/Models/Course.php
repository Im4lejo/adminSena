<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function training_center(){
        return $this->belongsTo('app/Models/Training_center');
    }
    public function area(){
        return $this->belongsTo('app/Models/Training_center');
    }
    public function teachers(){
        return $this->belongsToMany('app/Models/Teacher');
    }
    public function apprentices(){
        return $this->hasMany('app/Models/Apprentice');
    }
}
