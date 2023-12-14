<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    protected $fillable =['major_id','name','number'];

    public function appointments()
    {
      return   $this->hasMany(Appointment::class);
    }

    public function majors()
    {
        return $this->hasMany(Major::class);
    }


    public function doctors()
    {
       return  $this->hasMany(Doctor::class);
    }


}
