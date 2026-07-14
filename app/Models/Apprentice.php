<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apprentice extends Model
{
    use HasFactory;
    public function course(){
        return $this->belongsTo('app/Models/Course');
    }
    public function computer(){
        return $this->belongsTo('app/Models/Computer');
    }
}
