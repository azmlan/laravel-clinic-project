<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function clinic()
    {
        $this->hasOne(Clinic::class);
    }

    public function doctors()
    {
        $this->hasMany(Doctor::class);
    }



}
