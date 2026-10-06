<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientCase extends Model
{
    /** @use HasFactory<\Database\Factories\PatientCaseFactory> */
    use HasFactory;

    protected $table = 'cases';

    protected $fillable = [
        'dentist_id',
        'status',
        'notes',
        'clincs_id',
        'laboratories_id',
        'patients_id',
    ];

    public function clinic(){
        return $this->belongsTo(Clinic::class, 'clincs_id' );
    }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patients_id' );
    }

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class, 'laboratories_id');
    }
    

    public function products()
    {
        return $this->belongsToMany(Product::class, 'case_products', 'cases_id', 'products_id');
    }
    
}