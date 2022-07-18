<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForwardNo extends Model
{
    use HasFactory;

    protected $table = 'forward_no';

    protected $fillable = [
        'awb_no',
        'fwd_no',
        'service_area_id',
        'forwarder',
        'delivery_status_id',
        'date_time'
        
    ];
    public function deliveryStatus(){
        return $this->belongsTo('App\Models\DeliveryStatus','delivery_status_id');
    }

    public function serviceArea(){
        return $this->belongsTo('App\Models\ServiceArea','service_area_id');
    }
    public function awb(){
        return $this->belongsTo('App\Models\Awb','awb_id');
    }
}
