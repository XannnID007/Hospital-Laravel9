<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;
    protected $table = 'months';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctor_id');
    }
}
