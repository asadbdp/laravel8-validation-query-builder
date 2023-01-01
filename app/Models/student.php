<?php

namespace App\Models;

use App\Models\phone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'roll',
        'reg',
        'session',
        'class'

    ];
    //accessors
    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
    //mutators
    public function getNameAttribute($value){
        return strtolower($value);
    }

    public function phone(){
        return $this->hasOne(phone::class, 'student_id', 'id');
    }
}
