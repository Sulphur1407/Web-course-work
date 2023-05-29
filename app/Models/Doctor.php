<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Diplom;
use App\Models\Patient;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $fillable = ['name', 'surname', 'certification'];

    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient', 'doctor_id', 'patient_id');
    }

    public function diploms()
    {
        return $this->hasMany(Diplom::class);
    }
}
