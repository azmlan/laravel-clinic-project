<?php
namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Doctor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "doctor";

    protected $fillable = [
        'name',
        'clinic_id',
        'major_id',
        'phone',
        'email',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

}

