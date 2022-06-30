<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class AWB extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "awb_numbers_list";
    protected $fillable = [
        'awb_no',
        'status',
        'origin',
        'destination',
        
    ];
    protected $casts = [
        'awb_no' => 'array',
        'origin' => 'array',
        'destination' => 'array',
    ];
  
}
