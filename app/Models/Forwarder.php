<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forwarder extends Model
{
    use HasFactory;

    protected $table = 'forwarders';

    protected $fillable = [
        'name',
        'url',
    
        
    ];
}
