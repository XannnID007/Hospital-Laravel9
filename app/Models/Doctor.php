<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'Doctors';
    protected $fillable = [
        'name',
        'phone',
        'speciality_id',
        'room',
        'image',
        'doctor_id'
    ];

    public function speciality()
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }

    public function testRelasi()
    {
        DB::table('Doctors')
            ->where('id', 1)
            ->rightJoin('specialities', 'doctors.speciality_id', '=', 'specialities.idspeciality')
            ->get();
    }

    public function patient()
    {
        return $this->hasMany(Patient::class, 'patient_id');
    }
}
