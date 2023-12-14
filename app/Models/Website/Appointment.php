<?php

namespace App\Models\Website;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'clinic_id',
        'doctor_id',
        'status_id',
        'number',
        'date'
    ];
    protected $hidden = [
        'date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
    public function appointmentStatus(): BelongsTo
    {
        return $this->belongsTo(AppointmentStatus::class);
    }

    public function clinicDoctorName($apntmntID)
    {
        $appointment = Reservation::find($apntmntID);
        $doctorName = $appointment->doctor->name;
        $clinicName = $appointment->clinic->name;
        // return ['clinic'=>$clinicName,'doctor'=>$doctorName];
        return [$clinicName, $doctorName];
    }
}
