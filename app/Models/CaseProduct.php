<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseProduct extends Model
{
    protected $table = 'case_products';

    protected $fillable = [
        'cases_id',
        'products_id',
        'quantity',
        'price',
    ];



}