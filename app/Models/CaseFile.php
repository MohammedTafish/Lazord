<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseFile extends Model
{
    /** @use HasFactory<\Database\Factories\CaseFileFactory> */
    use HasFactory;

    protected $fillable = [
        'file_path',
        'file_name',
        'file_type',
        'uploaded_by',
        'cases_id',
    ];

    public function case(){
        return $this->belongsTo(CaseProduct::class , 'cases_id');
    }
}