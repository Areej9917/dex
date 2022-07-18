<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProofOfDelivery extends Model
{
    use HasFactory;

    protected $table = 'pod';

    protected $fillable = [
        'awb_id',
        'date',
        'time',
        'signature',
    
        
    ];

}
