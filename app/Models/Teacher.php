<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'area_id', 'training_center_id'];

    public function training_center(){
        return $this->belongsTo('app/Models/Training_center');
    }
    public function area(){
        return $this->belongsTo('app/Models/Area');
    }
    public function course(){
        return $this->belongsToMany('app/Models/Course');
    }
}
