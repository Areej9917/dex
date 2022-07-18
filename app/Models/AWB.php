<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Awb extends Model
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
 
        'created_at' => 'datetime',
        'date_time' => 'datetime'
    ];

    public function deliveryStatuses(){
        return $this->hasMany(AwbDeliveryStatus::class)->orderBy('id','desc');
    }


    public function currentDeliveryStatus()
    {
        return $this->belongsTo(DeliveryStatus::class,'delivery_status_id');
    }

    public function currrentServiceArea() {
        return $this->belongsTo(ServiceArea::class);
    }
    
    public function forward() {
        return $this->belongsTo(forward_no::class);
    }
  
}
