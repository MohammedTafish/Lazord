<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /** @use HasFactory<\Database\Factories\PatientFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'gender',
        'birth_date',
        'notes',
        'clincs_id',
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class , 'clincs_id');
    }
}